<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $table = "invitations";

    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
