<?php

namespace EventHalls\Http\Controllers;

use EventHalls\Owner;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class UserSiteController extends Controller
{
    public function mainPageView()
    {
        return view('userSide.mainPage');
    }

    public function placeView()
    {
        return view('userSide.placeView');
    }

    public function addPlaceView(Owner $owner)
    {

        return view('userSide.addPlace', ["owner" => $owner]);
    }

    public function showAddOwner()
    {
        return view('userSide.addOwner');
    }

//    public function currentUser()
//    {
//        $response = [
//            "user" => auth()->user()->id
//        ];
//        return Response::json($response);
//    }
}
