<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ["place_name", "type", "location", "hall_name", "hall_max", "description", "image", "user_id", "low_price", "high_price"];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
