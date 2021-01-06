<?php

namespace App\Http\Controllers\Api;

use App\Attachment;
use App\Group;
use App\Http\Controllers\Controller;
use App\Jobs\SendMessage;
use App\Message;
use App\Notification;
use Exception;
use Spatie\Async\Pool;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;
use Laravel\Ui\Presets\React;
use App\Events\MessageProcessed;

class MessageController extends Controller
{

    protected   $message = null;


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

        // $pool = Pool::create();

        // $pool->add(function () use ($request) {

        //     $this->message =  Message::create([
        //         'group_id' => $request->group_id,
        //         'user_id' => auth()->user()->id,
        //         'message' => $request->message,
        //     ]);

        //     //$this->message->load('user');
        //     //$this->message->load('attachment');

        //     $notification = Notification::create([
        //         'group_id' => $request->group_id,
        //         'user_id' => auth()->user()->id,
        //         'message_id' =>  $this->message->id,
        //         'is_seen' => 0,
        //     ]);

        //    // MessageProcessed::dispatch($this->message);
        //      broadcast(new MessageProcessed($this->message->load('user')));//->toOthers();
        //     //  event(new MessageProcessed($this->message));

        // })->then(function ($output) {
        //     // On success, `$output` is returned by the process or callable you passed to the queue.
        // })->catch(function ($exception) {
        //     // When an exception is thrown from within a process, it's caught and passed here.
        // })->timeout(function () {
        //     // A process took too long to finish.
        // });

        // $pool->wait();


        $this->message =  Message::create([
            'group_id' => $request->group_id,
            'user_id' => auth()->user()->id,
            'message' => $request->message,
        ]);

        //$this->message->load('user');
        //$this->message->load('attachment');

        $notification = Notification::create([
            'group_id' => $request->group_id,
            'user_id' => auth()->user()->id,
            'message_id' =>  $this->message->id,
            'is_seen' => 0,
        ]);

        // MessageProcessed::dispatch($this->message);
        broadcast(new MessageProcessed($this->message->load('user')))->toOthers();


        return response()->json([
            'message' => $this->message->load('user'),
            //'data' =>  $this->message->load('user'),
        ], 200);
    }

    public function message_with_attachment(Request $request)
    {
    }


    public function group_messages($id, Request $request)
    {


        $page = $request->page;
        $message_limit = 1000;
        $group = Group::where('uuid', $id)->first();

        $messages = Message::with('user')
            ->where('group_id', $group->id)
            ->orderByRaw('created_at', 'desc')->paginate($message_limit, ['*'], $pageName = 'page', $page);

        return response()->json([
            'group' => $group,
            'messages' => $messages,
        ]);
    }

    public function authorize_group(Request $request)
    {

        return auth()->user();
        // Broadcast::channel('new.message', function ($user) {
        //     return $user;
        // });
        // return response()->json([
        //     'messages' => '123',
        // ]);
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
