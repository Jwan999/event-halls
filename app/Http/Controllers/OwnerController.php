<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class OwnerController extends Controller
{
    public function showAddOwnerView()
    {
        return view('dashboard.owners.addOwner');
    }

    public function addOwner(Request $request)
    {
        $rules = [
            "email" => "required",
            "phone" => "integer",
        ];

        $data = $this->validate($request, $rules);
        $data["give_sponsorship"] = $request->has('give_sponsorship');

        $owner = Owner::create($data);
//        return Response::redirectTo('/places/add');
    }

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
