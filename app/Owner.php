<?php

namespace EventHalls;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ["email", "phone", "name"];

}
