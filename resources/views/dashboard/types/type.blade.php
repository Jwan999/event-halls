@extends('layouts.master')

@section('content')


    <div id="type" class="row justify-content-center">
        <div class="col-md-6">
            <div class="card zain-light-bg">
                <div class="card-body">
                    {{--adding types--}}

                    <div class="row justify-content-start">
                        <div class="col-md-6 mt-0 pt-0">
                            <h3 class="m-0 pb-2 text-dark">
                                Add a type
                            </h3>
                            <form action="/dashboard/types/add" method="post">
                                @csrf
                                <input class="form-control" name="type" type="text" placeholder="Place type">
                                <div class="row justify-content-start">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-default btn-sm btn-simple">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<hr>
                <div class="card-body max-height-type scrollbar" id="style-10">
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class=" text-dark">Type</th>
                                    <th class=" text-dark">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="type in types">
                                    <td class=" text-dark">
                                        <a class="text-dark" href="">@{{type.type}}</a>
                                    </td>
                                    <td class="td-actions">
                                        <button @click="removeType(type.id)" type="button" rel="tooltip"
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
        </div>

    </div>


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
                        console.log(response);
                        this.getTypes()
                    })
                }
            },
            mounted() {
                this.getTypes()
            }
        })
    </script>
@endpush