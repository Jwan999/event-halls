@extends('layouts.master')

@section('content')

    <div id="owner" class="row justify-content-center">
        <div class="col-md-6 ">
            {{--class="table-full-width table-responsive ps ps--active-y ps--scrolling-y"--}}
            <div class="card zain-light-bg">
                <div class="card-header ">
                    <h4 class="text-dark">Owners information:</h4>
                </div>
                <div class="card-body scrollbar" id="style-10">
                    <li v-for="owner in owners" class="list-group-item text-dark"> @{{ owner.email }}<br>
                        <smaill> @{{ owner.phone }}</smaill>
                    </li>
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