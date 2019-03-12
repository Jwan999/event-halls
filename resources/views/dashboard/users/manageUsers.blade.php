@extends('layouts.master')

@section('content')

    <div id="user" class="row">
        <div class="col">
            {{--search bar--}}
            <div class="row justify-content-center mt-5 mb-2">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input v-model="findUser" type="text" class="form-control"
                               placeholder="Enter a user name">
                    </div>
                </div>
            </div>
            {{--Users table--}}
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <table class="table table-borderless">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">User name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Booked places</th>

                        </tr>
                        </thead>

                        <tbody class="bg-white">
                        <tr v-for="user in users">
                            <td><a>@{{user.name}}</a></td>
                            <td>@{{user.email}}</td>

                            <td>@{{user.place_id}}</td>
                            {{--<td>--}}
                            {{--<div class="row">--}}
                            {{--<div class="col m-0 p-0">--}}
                            {{--<a @click="removePlace(user.id)" href='' class="badge badge-danger">Delete</a>--}}
                            {{--</div>--}}
                            {{--<div class="col m-0 p-0">--}}
                            {{--<a :href=`/dashboard/places/${place.id}/edit` class="badge badge-info">Edit</a>--}}
                            {{--</div>--}}
                            {{--</d iv>--}}
                            {{--</td>--}}

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
                // removePlace(id) {
                //     axios.delete(`/dashboard/places/${id}`).then(response => {
                //         window.location.reload()
                //     })
                // },
            },
            mounted() {
                this.getUsers();
            },
            computed: {
                searchedUsers() {
                    return this.users.filter((user) => {
                            // return user.name.match(this.findUser)
                        }
                    );
                }
            }
        })
    </script>

@endpush