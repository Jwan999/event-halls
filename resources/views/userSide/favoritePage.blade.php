@extends('userSide.layouts.master')

@section('content')
    <div id="app" class="row justify-content-center mt-5">
        <div class="col-md-6 mt-5">
            <div class="card mt-5">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"></li>
                    </ul>
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
                favorites: [],
            },

            methods: {
                getPlaces() {
                    axios.get("/api/favorites").then(response => {
                        this.favorites = response.data.myFavorites;
                    })
                },
            }
        })
    </script>
@endpush