<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Hello, world!</title>
    <style>
        body {
            overflow-x: hidden;
            font-family: 'Raleway', sans-serif;

        }

        .zain-bg {
            background: linear-gradient(to bottom right, #6e4f90 0%, #5561AB 100%)
        }
    </style>
</head>
<body class="bg-light h-100">

<div class="row h-100">
    <div class=" zain-bg col-2 m-0 p-0">

        <div id="admin" class="row">
            <div class="col">
                <div class="card bg-dark">
                    <div class="card-body">
                        {{--<img :src="admin.image" alt="">--}}
                        <br>
                        <br>
                        <br>
                        {{--<h4 class="text-white">{{auth()->user()->name}}</h4>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-md-10">

                <div class="row">
                    <div class="col">
                        <a class="nav-link nav-item text-white" href="/home">Main page</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <a class="nav-link nav-item text-white" href="/dashboard/places">Places</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="nav-link nav-item text-white" href="/dashboard/types">Types</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="nav-link nav-item text-white" href="/dashboard/owners">Owners</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="nav-link nav-item text-white" href="/dashboard/users">Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-10 m-0 p-0">

        <div class="row">
            <div class="col">
                @yield('content')
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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>

@stack('scripts')
{{--<script>--}}
{{--let vue = new Vue({--}}
{{--el: "#admin",--}}
{{--data: {--}}
{{--admins: [],--}}
{{--}, methods: {--}}
{{--getAdmin() {--}}
{{--axios.get('/api/admin').then(response => {--}}
{{--this.admins = response.data.admins--}}
{{--})--}}
{{--}--}}
{{--}--}}
{{--})--}}
{{--</script>--}}

<script>
    if (WURFL.form_factor === "Smartphone") {
        alert('The dashboard is not suitable for mobile screen, i advice to open it on a desktop');
    }
</script>
</body>
</html>