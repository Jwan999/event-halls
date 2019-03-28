@extends('userSide.layouts.master')

@section('content')
    <div id="app" class="row justify-content-center mt-5">
        <div class="col-md-6 mt-5">
            <div class="card mt-5">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Place name</li>
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
            data: {},
        })
    </script>
@endpush