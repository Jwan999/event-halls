@extends('layouts.master')

@section('content')

    <div class="row justify-content-start m-5">
        <div class="col-md-4">
            @include('layouts.errors')
            {{--adding places types--}}
            <form action="/dashboard/types/add" method="post">
                @csrf
                <div class="card ">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col">
                                <input class="form-control" name="type" type="text" placeholder="Place type">
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-outline-secondary btn-sm mt-2">Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{--places types--}}
    <div id="type" class="row justify-content-start m-5">
        <div v-for="type in types" class="col-md-4 mt-3">
            <div class="card zain-bg">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item text-center">@{{type.type}}</li>
                    </ul>
                    <div class="row justify-content-end mt-2">
                        <div class="col-auto">
                            <span @click="removeType(type.id)" class="badge badge-danger">Delete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div v-else="types = null" class="row justify-content-center">--}}
    {{--<div class="col-auto">--}}
    {{--<h4>Add some types</h4>--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection

@push('scripts')

    <script>
        let vue = new Vue({
            el: "#type",
            data: {
                types: [],
            },
            methods: {
                getTypes() {
                    axios.get('/api/types').then(response => {
                        this.types = response.data.types
                    })
                },
                removeType(id) {
                    axios.delete(`/dashboard/types/${id}`).then(response => {
                        window.loaction.reload()
                    })
                }
            },
            mounted() {
                this.getTypes()
            }
        })
    </script>
@endpush