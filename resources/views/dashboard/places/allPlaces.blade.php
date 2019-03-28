@extends('layouts.master')

@section('content')

    <div id="app" class="row justify-content-center mt-1">
        <div class="col-md-10">
            <div class="card zain-light-bg max-height">
                <div class="row justify-content-between mt-4 mx-3">
                    <div class="col-md-6">
                        <h3 class="text-dark">Places:</h3>
                    </div>
                    <div class="col-md-5">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-zoom-split text-dark"></i>
                                </div>
                            </div>
                            <input v-model="findPlace" type="email" class="form-control text-dark"
                                   placeholder="Enter a place name type or location">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <a href="/dashboard/owners/add">
                            <i class="tim-icons icon-simple-add text-dark text-center p-2 m-0"></i></a>
                    </div>
                </div>
                <div class="card-body scrollbar" id="style-10">

                    <table class="table">
                        <thead>
                        <tr class="text-center">
                            <th class="text-dark">place name</th>
                            <th class="text-dark">type</th>
                            <th class="text-dark">location</th>
                            <th class="text-dark">actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr v-for="place in searchedPlaces">
                            <td class=" text-dark">
                                <a class="text-dark" :href="`/dashboard/places/${place.id}`">@{{place.place_name}}</a>
                            </td>
                            <td class="dark-text"><a class="text-dark">@{{place.type}}</a></td>
                            <td class="dark-text"><a class="text-dark">@{{place.location}}</a></td>
                            <td class="td-actions ">
                                <button  type="button" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm">
                                   <a :href=`/dashboard/places/${place.id}/edit`> <i class="tim-icons icon-settings text-dark"></i></a>
                                </button>
                                <button @click="removePlace(place.id)" type="button" rel="tooltip"
                                        class="btn btn-danger btn-link btn-icon btn-sm">
                                    <i class="tim-icons icon-simple-remove text-dark"></i>
                                </button>
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

