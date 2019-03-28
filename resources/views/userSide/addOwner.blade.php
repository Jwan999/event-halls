@extends('userSide.layouts.master')

@section('content')

    <div id="owner" class="row m-5 justify-content-center">
        <div class="col-md-6 mt-5">
            @include('layouts.errors')

            <form action="/owners/add" method="post">
                @csrf

                <div class="form-group mt-5">
                    <input name="name" type="text" class="form-control" placeholder="Full name">
                </div>
                <div class="form-group">
                    <input name="email" type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input name="phone" type="text" class="form-control" placeholder="Phone number">
                </div>
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-info btn-sm">ADD</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

@endsection

{{--@push('scripts')--}}
{{--<script>--}}
{{--let vue = new Vue({--}}
{{--el: "#owner",--}}
{{--data: {--}}
{{--give_sponsorship: false,--}}
{{--}, methods: {}--}}
{{--})--}}
{{--</script>--}}
{{--@endpush--}}