@extends('userSide.mainPage')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="/book" method="post">
                        @csrf

                        <div class="row justify-content-around">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Event type">
                                </div>
                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-6">

                                            <input name="from_hour" type="text" class="form-control" placeholder="Event starts at...">
                                        </div>
                                        <div class="col-md-6 col-6">

                                            <input name="to_hour" type="text" class="form-control" placeholder="Event ends at...">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header zain-bg text-white">
                                        Pick event date
                                    </div>
                                    <div class="card-body">
                                        calender
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row justify-content-end mt-2">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-info btn-sm">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection