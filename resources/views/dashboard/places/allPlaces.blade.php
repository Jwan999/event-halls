@extends('layouts.master')

@section('content')
    <div id="app" class="row justify-content-center mt-1">
        <div class="col-md-11">
            <div class="card zain-light-bg">
                <div class="row justify-content-between m-3">
                    <div class="col-md-5">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-zoom-split text-dark"></i>
                                </div>
                            </div>
                            <input v-model="findPlace" type="email" class="form-control"
                                   placeholder="Enter a place name type or location">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button href="/dashboard/owners/add" type="button" rel="tooltip"
                                class="btn btn-link btn-sm">
                            <i class="tim-icons icon-simple-add m-0 pt-3"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class=" text-dark">place name</th>
                            <th class=" text-dark">type</th>
                            <th class=" text-dark">location</th>
                            <th class=" text-dark">actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="place in searchedPlaces">
                            <td class=" text-dark">
                                <a class="text-dark" :href="`/dashboard/places/${place.id}`">@{{place.place_name}}</a>
                            </td>
                            <td class=" text-dark">@{{place.type}}</td>
                            <td class=" text-dark">@{{place.location}}</td>
                            <td class="td-actions ">
                                <button type="button" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm">
                                    <i :href=`/dashboard/places/${place.id}`
                                       class="tim-icons icon-settings text-dark"></i>
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

