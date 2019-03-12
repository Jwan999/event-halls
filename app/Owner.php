<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ["email", "phone", "give_sponsorship", "place_id"];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
