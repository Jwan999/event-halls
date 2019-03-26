@extends('layouts.master')

@section('content')
    <div id="owner" class="row m-5 justify-content-center">
        <div class="col-md-7">
            @include('layouts.errors')
            <div class="card zain-light-bg">
                <div class="card-header">
                    <h3 class="text-dark mb-0">Owner</h3>
                </div>
                <div class="card-body">
                    <form action="/dashboard/owners/add" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone number">
                                </div>
                                {{--<div class="form-group form-check">--}}
                                {{--<input v-model="give_sponsorship" name="give_sponsorship" type="checkbox"--}}
                                {{--class="form-check-input" id="exampleCheck1">--}}
                                {{--<label class="form-check-label" for="exampleCheck1">Sponsorship</label>--}}
                                {{--</div>--}}
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-default btn-sm btn-simple">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection

{{--@push('scripts')--}}
{{--<script>--}}
{{--let vue = new Vue({--}}
{{--el: "#owner",--}}
{{--data: {--}}
{{--give_sponsorship: false,--}}
{{--},--}}
{{--})--}}
{{--</script>--}}
{{--@endpush--}}