@extends('layouts.master')

@section('content')

    <div id="owner" class="row justify-content-center mt-5">
        <div class="col">

            <div class="row justify-content-center mb-5">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item zain-bg text-white">Owners contacts
                            {{--<a href="/dashboard/owners/add"><h5 class="text-white">+</h5></a>--}}
                        </li>

                        <li v-for="owner in owners" class="list-group-item"> @{{ owner.email }}<br>
                            <smaill> @{{ owner.phone }}</smaill>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        let vue = new Vue({
            el: "#owner",
            data: {
                owners: [],
            },
            methods: {
                getOwners() {
                    axios.get('/api/owners').then(response => {
                        this.owners = response.data.owners
                    })
                }
            },
            mounted() {
                this.getOwners()
            }
        })
    </script>
@endpush