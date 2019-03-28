@extends('layouts.master')

@section('content')


    <div id="user" class="row justify-content-center mt-1">
        <div class="col-md-10">
            <div class="card zain-light-bg max-height">
                <div class="row justify-content-between mt-4 mx-3">
                    <div class="col-md-6">
                        <h3 class="text-dark">Users:</h3>
                    </div>
                    <div class="col-md-5">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-zoom-split text-dark"></i>
                                </div>
                            </div>
                            <input v-model="findUser" type="text" class="form-control text-dark"
                                   placeholder="Enter a user name">
                        </div>
                    </div>
                </div>
                <div class="card-body scrollbar" id="style-10">

                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-dark">User name</th>
                            <th class="text-dark">Email</th>
                            <th class="text-dark">Booked places</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="user in searchedUsers">
                            <td><a class="text-dark">@{{user.name}}</a></td>
                            <td><a class="text-dark">@{{user.email}}</a></td>
                            <td><a class="text-dark">@{{user.place_name}}</a></td>
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
            el: "#user",
            data: {
                user: {
                    name: "",
                },
                users: [],
                findUser: "",
            },

            methods: {
                getUsers() {
                    axios.get("/api/users").then(response => {
                        this.users = response.data.users;
                    })
                },
            },
            mounted() {
                this.getUsers();
            },
            computed: {
                searchedUsers() {
                    return this.users.filter((user) => {
                            return user.name.match(this.findUser)
                        }
                    );
                }
            }
        })
    </script>

@endpush