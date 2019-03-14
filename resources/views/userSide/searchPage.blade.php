@extends('userSide.mainPage')

@section('content')
    <div id="search" class="row ml-5">
        <div class="col">
            {{--search bar--}}
            <div class="row justify-content-start">
                <div class="col-md-6 mt-4">
                    <div class="input-group">
                        <input v-model="findPlace" type="text" class="form-control"
                               placeholder="Look for a place or a location">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Sort
                            </button>
                            <div class="dropdown-menu">
                                <a @click="getPlaces(null,selectedType)" class="dropdown-item"
                                   href="#">All prices</a>
                                <a @click="getPlaces('asc',selectedType)" class="dropdown-item" href="#">Price from low
                                    to
                                    high</a>
                                <a @click="getPlaces('desc',selectedType)" class="dropdown-item" href="#">Price from
                                    high to
                                    low</a>
                            </div>

                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button"
                                        data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Type
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" @click="getPlaces(selectedSort,null)" href="">All</a>
                                    <a v-for="type in types" @click="getPlaces(selectedSort,type.type)"
                                       class="dropdown-item">@{{ type.type }}</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{--the search page --}}
            <div class="container">
                <div class="row m-3">
                    <div class="col">
                        {{--places row--}}
                        <div class="row justify-content-start">
                            <div v-for="place in places" class="col-md-5 p-0 m-3">
                                <div class="card ">
                                    <img :src="place.image" class="card-img-top image-size" alt="...">
                                    <div class="card-body">

                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h5><a :href="`/places/place/${place.id}`">@{{ place.place_name }}</a></h5>
                                            </div>
                                            <div class="col-auto">
                                                <form action="/favorites/add" method="post">
                                                    @csrf
                                                    <button type="submit" class="round btn btn-outline-info btn-sm"><h5
                                                                class="text-center m-0 p-0">+</h5></button>
                                                </form>
                                            </div>
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
                // isShown: true,
                types: [],
                selectedType: null,
                selectedSort: null
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
                        // console.log(response.data);
                        this.places = response.data.places
                    })
                },
                getTypes() {
                    axios.get('/api/types',).then(response => {
                        this.types = response.data.types
                    })
                },
                // showFav(){
                // isShown =!isShown;
                // }
            },
            mounted() {
                this.getPlaces();
                this.getTypes()
            }, computed: {
                // searchedPlaces() {
                //     return this.places.filter((place) => {
                //             return place.place_name.toLocaleLowerCase().includes(this.findPlace.toLocaleLowerCase())
                //                 || place.location.toLocaleLowerCase().includes(this.findPlace.toLocaleLowerCase());
                //         }
                //     );
                // }
            }
        })
    </script>

@endpush