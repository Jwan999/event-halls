@extends('userSide.mainPage')

@section('content')
    <div id="app" class="row justify-content-start">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        let vue = new Vue({
            el:"#app",
            data:{},
        })
    </script>
@endpush