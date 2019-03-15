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

//function that adds an owner from the dashboard
    public function addOwner(Request $request)
    {
        $rules = [
            "email" => "required",
            "phone" => "integer",
            "name" => "required"
        ];
        $owner = self::saveOwners($request, $rules);
        return Response::redirectTo('/dashboard/places/add' . $owner->id);
    }

//function that saves the owner
    private function saveOwners(Request $request, $rules)
    {
        $data = $this->validate($request, $rules);
//        $data = ["owner_id" => $owner->id];
//        $data["give_sponsorship"] = $request->has('give_sponsorship');
        return Owner::create($data);
    }

//adding owner from the userSite
    public function addOwnerUserSite(Request $request)
    {
        $rules = [
            "email" => "required",
            "phone" => "required",
            "name" => "required"
        ];
        $owner = self::saveOwners($request, $rules);
        return Response::redirectTo('/places/add/' . $owner->id);
    }

//    function that shows all the owners
    public function ownersView()
    {
        return view('dashboard.owners.owners');
    }

//the owners api
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
