<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{

    protected $table = "group_users";
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
