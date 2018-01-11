<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enq extends Model
{
    public $timestamps = false;
    protected $table = "user";

    protected $fillable = ['fname','lname','email','number'];
}
