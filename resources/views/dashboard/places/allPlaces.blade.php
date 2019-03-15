@extends('layouts.master')

@section('content')


    <div id="app" class="row">
        <div class="col">
            {{--search bar--}}
            <div class="row justify-content-center mt-5 mb-2">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input v-model="findPlace" type="text" class="form-control"
                               placeholder="Enter a place name or type">
                    </div>
                </div>
            </div>
            {{--places table--}}
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <table class="table table-borderless">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">Place name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Location</th>
                            <th scope="col">Hall</th>
                            <th scope="col">
                                <a href="/dashboard/places/add"><h4 class="text-center p-0 m-0">+</h4></a>
                            </th>

                        </tr>
                        </thead>

                        <tbody class="bg-white">
                        <tr v-for="place in searchedPlaces">
                            <td><a :href="`/dashboard/places/${place.id}`">@{{place.place_name}}</a></td>
                            <td>@{{place.type}}</td>
                            <td>@{{place.location}}</td>
                            <td>@{{place.hall_name}} @{{place.hall_max}}</td>
                            <td>
                                <div class="row">
                                    <div class="col m-0 p-0">
                                        <a @click="removePlace(place.id)" href='' class="badge badge-danger">Delete</a>
                                    </div>
                                    <div class="col m-0 p-0">
                                        <a :href=`/dashboard/places/${place.id}` class="badge badge-info">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>



@endsection

@push('scripts')

    <script>
        let vue = new Vue({
            el: "#app",
            data: {
                place: {
                    place_name: "",
                    type: "",
                    location: "",
                },
                places: [],
                findPlace: "",
            },

            methods: {
                getPlaces() {
                    axios.get("/api/places").then(response => {
                        this.places = response.data.places;
                    })
                },
                removePlace(id) {
                    axios.delete(`/dashboard/places/${id}`).then(response => {
                        window.location.reload()
                    })
                },
            },
            mounted() {
                this.getPlaces();
            },
            computed: {
                searchedPlaces() {
                    return this.places.filter((place) => {
                            return place.place_name.toLocaleLowerCase().includes(this.findPlace.toLocaleLowerCase())
                                || place.location.toLocaleLowerCase().includes(this.findPlace.toLocaleLowerCase())
                                || place.type.toLocaleLowerCase().includes(this.findPlace)
                        }
                    );
                }
            }
        })
    </script>

@endpush

