<?php

namespace App\Http\Controllers;

use \App\Place;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PlaceController extends Controller
{
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
//        $type = $request->type;
//        Place::when($type, function ($query, $type){
//            return $query->where('type',t)
//        })

        $places = $queryBuilder->get();
        $response = [
            "success" => true,
            "places" => $places
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
        return Response::redirectTo('/dashboard/places');
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

//      todo  explaining the difference between this thing and a static function
        $place->update($data);

        return Response::redirectTo("/dashboard/places");
    }

//showing the adding places view
    public function showAddPlace()
    {
        return view('dashboard.places.addPlace');
    }

    // creating and adding a place to the database
    public function addPlace(Request $request, User $user)
    {

        $rules = [
            "place_name" => "required",
            "type" => "required",
            "image" => "required|image",
            "hall_name" => "required",
            "location" => "required",
            "hall_max" => "required",
            "low_price" => "required",
            "high_price" => "required",
            "description" => "required",
        ];
//        $id = User::get('user_id');
//        $data["user_id"] = User::where('id', $id)->get;
//        dd($id);
//        $data["user_id"] = 1;
        $data = $this->validate($request, $rules);
        $url = request()->image->store("uploads");
        $data["user_id"] = $user->id;
        dd($data);
        $data['image'] = $url;

        $place = Place::create($data);

        return Response::redirectTo("/places");
    }

}
