<?php

namespace EventHalls;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Place extends Model
{
    protected $fillable = ["place_name", "type", "location", "hall_name", "hall_max", "description", "image", "owner_id", "low_price", "high_price"];
    protected $with = ["owner"];
    protected $appends= ['is_favorited'];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
            ->where('place_id', $this->id)
            ->first();
    }


    public function getIsFavoritedAttribute()
    {

        return $this->favorited();
//        return $this->attributes['favorited'] == $this->favorited();
    }

}
