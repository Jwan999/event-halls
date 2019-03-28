@extends('userSide.layouts.master')

@section('content')
    <div class="container mt-5">
        <div id="place" class="row justify-content-center">
            <div class="col-md-10">

                {{--plsce name--}}
                <div class="row justify-content-start m-5">
                    <div class="col-auto">
                        <h3>@{{ place.place_name }}</h3>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-7 mt-2">
                        <h4>Description:</h4>
                        @{{ place.description }}
                    </div>
                    <div class="col-md-5 mt-2">
                        <div class="card">
                            <div class="card-header zain-bg">
                                availability
                            </div>
                            <div class="card-body">
                                calender
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-9 mt-4">
                        <h4>Owner's information:</h4>
                        @{{ place.owner.name }}<br>
                        @{{ place.owner.email }}<br>
                        @{{ place.owner.phone }}<br>
                    </div>
                    <div class="col-md-3 mt-4 text-muted">
                        <h5>Other details:</h5>
                        halls people max
                        <br>
                        @{{ place.location }}
                        <br>
                        price range
                    </div>
                </div>
                <div class="row">

                </div>
                @if(Auth::check())
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <button type="button" class="btn btn-outline-secondary btn-sm mt-3"><a href="/book/place">Book
                                    place</a></button>
                        </div>
                    </div>
                    @endif


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
