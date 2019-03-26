@extends('userSide.mainPage')

@section('content')
    <div id="search">

        <div class="card img">
            @include("userSide.myNavbar")
            <div class="card-body">
                <div class="row justify-content-center mt-4">
                    <div class="col-md-8">
                        <div class="card light mt-3">
                            <div class="card-body">
                                <input v-model="findPlace" type="text" class="form-control"
                                       placeholder="Look for a place or a location">
                                <h4 class="text-dark mt-2">Sort according to</h4>
                                <span @click="getPlaces(null,selectedType)" class="badge badge-info">All places</span>
                                <span @click="getPlaces('asc',selectedType)" class="badge badge-info">lowest</span>
                                <span @click="getPlaces('desc',selectedType)" class="badge badge-info">Highest</span>
                                <span @click="getPlaces(selectedSort,null)" class="badge badge-info">All types</span>
                                <span v-for="type in types" @click="getPlaces(selectedSort,type.type)"
                                      class="badge badge-info">@{{ type.type }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div v-for="place in searchedPlaces" class="col-md-4 col-12 mt-4">
                    <div class="card ">
                        <img :src="place.image" class="card-img-top image-size" alt="...">
                        <div class="card-body">

                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <h5><a :href="`/places/place/${place.id}`">@{{ place.place_name }}</a></h5>
                                </div>
                                {{--<div class="col-auto">--}}
                                {{--<button  name="liked" @click="liked(place.id)" type="submit"--}}
                                {{--class="round btn btn-outline-info btn-sm"--}}
                                {{--v-bind:class="{active : isLiked}"><h5--}}
                                {{--class="text-center m-0 p-0">+</h5></button>--}}
                                {{--</div>--}}
                            </div>
                            <div class="row m-0 p-0 justify-content-between">
                                <div class="col-12">
                                    <small class="p-0 m-0">@{{ place.location }}</small>
                                </div>
                                <br>
                                <div class="col">
                                    <small>Number of halls: 3</small>
                                </div>
                                <div class="row justify-content-end p-0 m-0">
                                    <div class="col-auto">
                                        <small>@{{ place.low_price }}$-@{{ place.high_price }}$</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        let vue = new Vue({
            el: "#search",
            data: {
                place: {
                    place_name: "",
                    location: "",
                },
                findPlace: "",
                places: {},
                types: [],
                selectedType: null,
                selectedSort: null,
                isLiked: false,
                // likes: [],
                // userId: "",
            },
            methods: {
                getPlaces(sort, type) {
                    this.selectedSort = sort;
                    this.selectedType = type;
                    axios.get(`/api/places`, {
                        params: {
                            sort: sort,
                            type: type,
                        }
                    }).then(response => {
                        this.places = response.data.places

                    })
                },
                getTypes() {
                    axios.get('/api/types',).then(response => {
                        this.types = response.data.types
                    })
                },
                // getUser() {
                //     axios.get('/api/user').then(response => {
                //         this.userId = response.data.user
                //     })
                // },
                liked(placeId) {
                    let liked = new FormData;
                    liked.append("isLiked", this.isLiked = true);
                    axios.post(`/favorites/add/${placeId}`, {
                        params: {
                            liked: this.isLiked
                        }
                    }).then(response => {
                    })
                }
            },
            // getFavorites() {
            //     let liked = new FormData;
            //     axios.get('/api/favorites',).then(response => {
            //         this.likes = response.data.favorites
            //     }).then(response=>{
            //         liked.append("isLiked", this.isLiked = true);
            //
            //     })
            // },

            mounted() {
                // this.getFavorites();
                this.getPlaces();
                this.getTypes()
            },
            computed: {
                searchedPlaces() {
                    return this.places.filter((place) => {
                            return place.place_name.toLocaleLowerCase().includes(this.findPlace.toLocaleLowerCase())
                                || place.location.toLocaleLowerCase().includes(this.findPlace.toLocaleLowerCase());
                        }
                    );
                },
            }
        })
    </script>

@endpush