<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ["email", "phone", "name"];

//    public function place()
//    {
//        return $this->belongsTo(Place::class);
//    }
}
