<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        body {
            overflow-x: hidden;
            font-family: 'Raleway', sans-serif;

        }

        .zain-bg {
            background: linear-gradient(to bottom right, #6e4f90 0%, #5561AB 100%)
        }

        .faded {
            opacity: 0.8;
        }

        .image-size {
            height: 25vh;
            object-fit: cover;
        }

        .color {
            color: white;
        }

        .round {
            border-radius: 50px 50px;
        }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg zain-bg navbar-dark ">
    <a class="navbar-brand text-light" href="#">Events hall</a>
    <button class="navbar-toggler color" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="mt-1 collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="/favorites">Favorites</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="/places/add">Add place</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="text-light" href="/redirect">Sign up</a>
            {{--<button class="btn btn-outline-info text-light btn-sm my-2 my-sm-0" type="submit">Sign up</button>--}}
        </form>
    </div>
</nav>


@yield('content')

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
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@stack('scripts')
</body>
</html>