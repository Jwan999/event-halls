<?php

namespace EventHalls\Http\Controllers;

use \EventHalls\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TypeController extends Controller
{
    public function addPlaceType(Request $request)
    {
        $rules = [
            "type" => "required"
        ];
        $data = $this->validate($request, $rules);
        $type = Type::create($data);

        return Response::redirectTo('/dashboard/types');
    }

    public function typesView()
    {
        return view('dashboard.types.type');
    }


    public function showPlaceTypes(Request $request)
    {
        $types = Type::all();
        $response = [
            "success" => true,
            "types" => $types
        ];
        return Response::json($response);
    }

    public function delete(Type $type){

        $type->delete();
        return Response::json('/dashboard/types');
    }


}
