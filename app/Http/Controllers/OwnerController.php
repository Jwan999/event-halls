<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class OwnerController extends Controller
{
// show the add owner view
    public function showAddOwnerView()
    {
        return view('dashboard.owners.addOwner');
    }

//functiona that adds an owner from the dashboard
    public function addOwner(Request $request)
    {
        $rules = [
            "email" => "required",
            "phone" => "integer",
        ];
        self::saveOwners($request, $rules);
        return Response::redirectTo('/dashboard/owners');
    }

//function that saves the owner
    private function saveOwners(Request $request, $rules)
    {
        $data = $this->validate($request, $rules);
        $data["give_sponsorship"] = $request->has('give_sponsorship');
        $owner = Owner::create($data);
    }

    public function openAddPlaceUserSite()
    {
        return Response::redirectTo('/places/add');
    }

//    function that shows all the owners
    public function ownersView()
    {
        return view('dashboard.owners.owners');
    }

    public function ownersJson()
    {
        $owners = Owner::all();
        $response = [
            "success" => true,
            "owners" => $owners,
        ];
        return Response::json($response);
    }
}
