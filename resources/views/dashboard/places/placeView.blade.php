@extends('layouts.master')

@section('content')

    <div id="place" class="row m-4">
        <div class="col">
            {{--place name--}}
            <div class="row justify-content-start ">
                <div class="col-auto">
                    <h1>@{{ place.place_name }}</h1>
                </div>
            </div>
            {{--place location--}}
            <div class="row m-0 p-0">
                <div class="col">
                    <small>@{{ place.location }}</small>
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
                // places: [],
                place: {},
            },
            methods: {
                getPlace(id) {
                    axios.get(`/api/places/${id}`).then(response => {
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