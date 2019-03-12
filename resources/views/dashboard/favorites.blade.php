@extends('layouts.master')

@section('content')

    <div id="favorite" class="row">
        <div class="col">
            {{--search bar--}}
            <div class="row justify-content-center mt-5 mb-2">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"
                               placeholder="Enter a place name or type">
                    </div>
                </div>
            </div>
            {{--Users table--}}
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <table class="table table-borderless bg-dark text-white">
                        <thead>
                        <tr>
                            <th scope="col">User name</th>
                            <th scope="col">Place name</th>
                            {{--<th scope="col"></th>--}}

                        </tr>
                        </thead>

                        <tbody>
                        <tr v-for="">
                            <td><a>@{{user.name}}</a></td>
                            <td>@{{user.email}}</td>

                            {{--<td>@{{user.place_id}}</td>--}}
                            {{--<td>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col m-0 p-0">--}}
                            {{--<a @click="removePlace(user.id)" href='' class="badge badge-danger">Delete</a>--}}
                            {{--</div>--}}
                            {{--<div class="col m-0 p-0">--}}
                            {{--<a :href=`/dashboard/places/${place.id}/edit` class="badge badge-info">Edit</a>--}}
                            {{--</div>--}}
                            {{--</d iv>--}}
                            {{--</td>--}}

                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


@endsection