<?php

namespace App\Http\Controllers;

use App\Group;
use App\GroupUser;
use App\Invitation;
use App\Mail\GroupInvitationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $group =  Group::create([
            'uuid' => Str::uuid()->toString(),
            'name' => $request->name,
            'description' => $request->description,
        ]);

        GroupUser::create([
            'group_id' => $group->id,
            'user_id' => auth()->user()->id,
            'is_admin' => 1,
        ]);

        return redirect()->route('messenger')->withMsg(['type' => 'success', 'text' => 'group created successfully!']);
    }

    public function invite($id, Request $request)
    {

        $request->validate([
            'email' => 'required',
        ]);

        $groupId = Group::where("uuid", $id)->first();
        $invitaion =  Invitation::create([
            'group_id' => $groupId->id,
            'email' => $request->email,
            'is_joined' => 0,
            'key' => $this->generateUUID(10),
        ]);

        //send email
        //vestraverto/invitation/3ap8ny7led
        Mail::to($request->email)->send(new GroupInvitationMail($invitaion));

        return redirect()->route('messenger.group', $id)->withMsg(['type' => 'success', 'text' => 'Invitation send successfully']);
    }

    function generateUUID($length)
    {
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }
        return $random;
    }

    public function accept_invitation($id)
    {

        return view('group.group_invitation', ['id' => $id]);
    }

    public function post_accept_invitation($id)
    {

        if (!Auth::check()) {
            session(['group_invite_key' => $id]);
            return redirect()->route('login');
        }

        $invitaion = Invitation::where("key", $id)->first();

        $invitaion->update([
            'is_joined' => 1,
        ]);

        GroupUser::updateOrCreate([
            'group_id' => $invitaion->group_id,
            'user_id' => auth()->user()->id,
            'is_admin' => 0,
        ]);

        return redirect()->route('messenger');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
