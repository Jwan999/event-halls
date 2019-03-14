@extends('userSide.mainPage')

@section('content')
    <div class="container">
        <div id="place" class="row">
            <div class="col">

                {{--plsce name--}}
                <div class="row justify-content-start m-5">
                    <div class="col-auto">
                        <h3>@{{ place.place_name }}</h3>
                    </div>
                </div>

                {{--description + contact info--}}
                <div class="row justify-content-between ml-5">
                    <div class="col-md-6">
                        @{{ place.description }}
                    </div>
                    <div class="col-md-3 mr-4">
                        <div class="card">
                            <div class="card-header zain-bg text-white">
                              @{{ place.owner.name }}
                            </div>
                            <div class="card-body">
                               @{{ place.owner.email }}<br>
                              @{{ place.owner.phone }}<br>
                            </div>
                        </div>
                    </div>
                </div>
                {{--other details--}}
                <div class="row justify-content-between ml-5 mt-5">
                    <div class="col text-muted">
                        halls people max
                        <br>
                        @{{ place.location }}
                        <br>
                        price range
                    </div>

                    <div class="col-md-3 mr-4">
                        <div class="card">
                            <div class="card-header zain-bg text-white">
                                availability
                            </div>
                            <div class="card-body">
                                calender
                            </div>
                        </div>
                        <div class="row justify-content-start">
                            <div class="col-auto">
                                <button type="button" class="btn btn-outline-secondary btn-sm mt-3"><a href="/book">Book
                                        place</a></button>
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
            el: "#place",
            data: {
                place: {},
            },
            methods: {
                getPlace(id) {
                    axios.get(`/api/places/place/${id}`).then(response => {
                        this.place = response.data.place;
                    })
                },
            },
            mounted() {
                id = window.location.pathname.split("/").pop();
                this.getPlace(id);
            }
        })
    </script>

@endpush
