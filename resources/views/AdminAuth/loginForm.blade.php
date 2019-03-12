<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>
        body{
            overflow: hidden;
        }
        .zain-bg {

            background: linear-gradient(to bottom right, #6e4f90 0%, #5561AB 100%)
        }
    </style>
</head>
<body class="h-100 bg-light">
<div class="row h-75 justify-content-center align-items-center">
    <div class="col-md-5">
        @include('layouts.errors')

        <div class="card zain-bg">
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <form action="/admin/login" method="post">
                            @csrf
                            <div class="form-group">
                                <input name="name" type="text" class="form-control"
                                       placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control"
                                       placeholder="Don't forget the magic word">
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-outline-info  btn-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>