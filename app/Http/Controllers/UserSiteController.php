<?php

namespace App\Http\Controllers;

use App\Owner;
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

    public function addPlaceView(Owner $owner)
    {

        return view('userSide.addPlace',["owner"=>$owner]);
    }
    public function showAddOwner(){
        return view('userSide.addOwner');
    }
}
