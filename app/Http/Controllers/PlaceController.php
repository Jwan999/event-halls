<?php

namespace EventHalls\Http\Controllers;

use EventHalls\Owner;
use \EventHalls\Place;
use EventHalls\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class PlaceController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth:user');
//    }

    public function placeViewJson($id)
    {
        $place = Place::find($id);
        $response = [
            "success" => true,
            "place" => $place,
        ];
        return Response::json($response);
    }

    public function placeView()
    {
        return view('dashboard.places.placeView');
    }

    //previewing all the places from the database
    public function showAllPlacesJson(Request $request)
    {
        $queryBuilder = Place::orderBy("id");

        if ($request->has("type")) {

            $queryBuilder->where('type', $request->type);
        }

        if ($request->sort == "desc") {
            $queryBuilder->orderBy('low_price', 'desc');

        } elseif ($request->sort == "asc") {
            $queryBuilder->orderBy('low_price', 'asc');

        }

        $places = $queryBuilder->get();

        $response = [
            "success" => true,
            "places" => $places,
        ];
        return Response::json($response);
    }

//places view
    public function showAllPlaces()
    {
        return view('dashboard.places.allPlaces');
    }

//delete place
    public function delete(Place $place)
    {
        $place->delete();
        $data = ["success" => true];

        return Response::json($data);
    }

    public function editView(Place $place)
    {
        $data = [
            "place" => $place
        ];
        return view('dashboard.places.editPlaces', $data);
    }

//edit a place
    public function edit(Request $request, Place $place)
    {
        $rules = [
            "place_name" => "required",
            "type" => "required",
            "image" => "required|image",
            "location" => "required",
            "hall_name" => "required",
            "hall_max" => "required",
            "description" => "required",
            "low_price" => "required",
            "high_price" => "required",
        ];

        $data = $this->validate($request, $rules);
        $url = request()->image->store("uploads");
        $data['image'] = $url;

        $place->update($data);

        return Response::redirectTo("/dashboard/places");
    }

//showing the adding places view from the dashboard
    public function showAddPlace(Owner $owner)
    {
        return view('dashboard.places.addPlace', ["owner" => $owner]);
    }

    // adding a place from the dashboard
    public function addPlace(Request $request)
    {
        $rules = [
            "place_name" => "required",
            "type" => "required",
            'owner_id' => 'required',
            "image" => "required|image",
            "location" => "required",
            "hall_max" => "required",
            "hall_name" => "required",
            "low_price" => "required",
            "high_price" => "required",
            "description" => "required",
        ];

        self::savePlace($request, $rules);
        return Response::redirectTo("/dashboard/places");
    }


    public function savePlace($request, $rules)
    {
        $data = $this->validate($request, $rules);
        $url = request()->image->store("uploads");
        $data['image'] = $url;

        $place = Place::create($data);

    }

//function let's the user to add a place from the userSite
    public function savePlaceRedirectHome(Request $request)
    {
        $rules = [
            "place_name" => "required",
            "type" => "required",
            "owner_id" => "required",
            "image" => "required|image",
            "hall_name" => "required",
            "location" => "required",
            "hall_max" => "required",
            "low_price" => "required",
            "high_price" => "required",
            "description" => "required",
        ];

        self::savePlace($request, $rules);
        return Response::redirectTo("/");

    }

    public function favoritePlace(Place $place)
    {
        Auth::user()->favorites()->attach($place->id);

        return back();
    }


    public function unFavoritePlace(Place $place)
    {
        Auth::user()->favorites()->detach($place->id);

        return back();
    }

}
