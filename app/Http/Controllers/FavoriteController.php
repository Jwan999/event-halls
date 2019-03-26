<?php

namespace EventHalls\Http\Controllers;

use EventHalls\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userSide.favoritePage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $placeId)
    {
        $rules = [
            "liked" => "boolean"
        ];
        $data = $this->validate($request, $rules);
        $data["liked"] = true;
        $data["user_id"] = auth()->user()->id;
        $data["place_id"] = $placeId;
        $favorite = Favorite::create($data);

    }

    public function getFavorites()
    {
        $favorites = Favorite::where("user_id", auth()->user()->id)->get();
        $response = [
            "favorites" => $favorites
        ];
        return Response::json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
