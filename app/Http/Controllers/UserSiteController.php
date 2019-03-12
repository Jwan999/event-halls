<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSiteController extends Controller
{
    public function mainPageView()
    {
        return view('userSide.searchPage');
    }

    public function placeView()
    {
        return view('userSide.placeView');
    }

    public function addPlaceView()
    {
        return view('userSide.addPlace');
    }
    public function showAddOwner(){
        return view('userSide.addOwner');
    }
}
