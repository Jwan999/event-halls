@extends('userSide.mainPage')

@section('content')

    <div class="row justify-content-center m-5">
        <div class="col-md-6">
            @include('layouts.errors')
            <form action='/places/add/{{$owner->id}}' method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input name="owner_id" type="hidden" class="form-control hidden" value="{{$owner->id}}">
                </div>

                <div class="form-group">
                    <input name="place_name" type="text" class="form-control" placeholder="Place name">
                </div>

                <div id="type" class="form-group">
                    <select name="type" class="form-control">
                        <option v-for="type in types">@{{type.type}}</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="validatedCustomFile">
                        <label class="custom-file-label">Choose file...</label>
                    </div>
                </div>

                <div class="form-group">
                    <input name="location" type="text" class="form-control" placeholder="Location">
                </div>

                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <input name="hall_name" type="text" class="form-control" placeholder="Hall name">
                        </div>
                        <div class="col-md-6">
                            <input name="hall_max" type="number" class="form-control" placeholder="Max people number">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <textarea name="description" type="text" class="form-control"
                              placeholder="Add place description and offerings..."></textarea>
                </div>

                <div class="form-group">
                    <small>price from low to high</small>

                    <div class="row align-items-center mt-2">
                        <div class="col">
                            <input name="low_price" type="number" class="form-control" placeholder="Low price">
                        </div>
                        -
                        <div class="col">
                            <input name="high_price" type="number" class="form-control" placeholder="High price">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-info btn-sm">POST</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection

@push('scripts')
    <script>
        let vue = new Vue({
            el: "#type",
            data: {
                types: [],
                // owner:"",

            },
            methods: {
                getTypes() {
                    axios.get('/api/types').then(response => {
                        this.types = response.data.types
                    })
                },
                getOwner() {

                    this.owner = window.location.pathname.split("/").pop();

                    console.log(owner);
                    this.getPlace(id);
                }
            },
            mounted() {
                this.getTypes()
            }
        })
    </script>

@endpush