<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = "groups";

    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'group_users', "group_id", "user_id");
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function latest_message()
    {
        return $this->hasOne(Message::class)->orderBy('id', 'desc');
    }

    public function notifications()
    {

        return $this->hasMany(Notification::class)->where('user_id', '!=', auth()->user()->id)->where('is_seen', 0);
    }
}
