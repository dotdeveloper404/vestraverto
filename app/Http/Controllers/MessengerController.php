<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use App\Group;
use Illuminate\Http\Request;

class MessengerController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $name = $request->name;

        $groups = Group::whereHas("users", function (Builder $query) {
            $query->where("user_id", auth()->user()->id);
        })->with('users')->with('notifications')->where(function ($query) use ($name) {
            $name ? $query->where("name", "LIKE", "%" + $name + "%") :  "";
        })->with("latest_message")->get();

        $uuid = "none";

        return view('messenger.index', compact('groups', 'uuid'));
    }

    public function group($id, Request $request)
    {
        $name = $request->name;

        $groups = Group::whereHas("users", function (Builder $query) {
            $query->where("user_id", auth()->user()->id);
        })->with('users')->with('notifications')->where(function ($query) use ($name) {
            $name ? $query->where("name", "LIKE", "%" + $name + "%") :  "";
        })->with("latest_message")
            ->get();

        $uuid = $id;

        //get single group
        $group = Group::where('uuid', $id)->first();
        return view('messenger.group', compact('groups', 'uuid', 'group'));
    }
}
