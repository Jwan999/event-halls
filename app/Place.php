<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = ["place_name", "type", "location", "hall_name", "hall_max", "description", "image", "owner_id", "low_price", "high_price"];
    protected $with = ["owner"];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }


}
