@extends('layouts.master')

@section('content')

    <div class="row justify-content-start m-5">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full name">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="User name">
                </div>


                <div class="row justify-content-end">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-info btn-sm">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection