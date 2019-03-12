@extends('layouts.master')

@section('content')

    <div id="owner" class="row m-5 justify-content-start">
        <div class="col-md-6">
            @include('layouts.errors')
            <form action="/owners/add" method="post">
                @csrf

                <div class="form-group">
                    <input name="email" type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input name="phone" type="text" class="form-control" placeholder="Phone number">
                </div>
                <div class="form-group form-check">
                    <input v-model="give_sponsorship" name="give_sponsorship" type="checkbox"
                           class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Sponsorship</label>
                </div>
                <div class="row justify-content-end">
                    <div class="col-auto">
                        {{--<input class="btn btn-outline-info btn-sm" href="/dashboard/owners" type="submit" value="ADD">--}}
                        <button type="submit" class="btn btn-outline-info btn-sm"><a href="/dashboard/owners">ADD</a></button>
                    </div>
                </div>
            </form>


        </div>
    </div>

@endsection

@push('scripts')
    <script>
        let vue = new Vue({
            el: "#owner",
            data: {
                give_sponsorship: false,
            },
        })
    </script>
@endpush