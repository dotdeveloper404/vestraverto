<?php

use App\Group;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/


// Broadcast::channel('App.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

Broadcast::channel('group.{group_id}', function($user) {
    return array('user' => $user->name);
});


// $groups = Group::whereHas("users", function (Builder $query) {
//     $query->where("user_id", auth()->user()->id);
// })->with('users')->with('notifications')->where(function ($query) use ($name) {
//     $name ? $query->where("name", "LIKE", "%" + $name + "%") :  "";
// })->with("latest_message")
//     ->get();
