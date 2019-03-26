<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet"/>
    <link href="/../assets/css/nucleo-icons.css" rel="stylesheet"/>

    <title>Event halls</title>
    <style>
        body {
            overflow-x: hidden;
            font-family: 'Raleway', sans-serif;
        }

        .zain-bg {
            background: linear-gradient(to bottom right, #6e4f90 0%, #5561AB 100%)
            /*background: linear-gradient(to bottom right, #522B6D 0%, #27293D 100%)*/
        }

        .zain-light-bg {
            background: linear-gradient(to bottom right, #e3e3e3 0%, #e3e3e3 100%)
        }

        .space {
            margin-left: 18%;
        }

        .nav-font {
            font-size: x-large;
        }
    </style>

</head>

<body class=" h-100 zain-bg">
<nav class="navbar ml-3 navbar-transparent mt-2">

    <a class="text-white nav-font" href="#">Dashboard</a>

</nav>
<div class="row justify-content-between mt-3">
    <div class="col">
        <div class="sidebar zain-light-bg">
            <ul class="nav">
                <li>
                    <a href="/dashboard">
                        <i class="tim-icons icon-chart-pie-36 text-dark"></i>
                        <p class="text-dark">Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <i class="tim-icons icon-single-02 text-dark"></i>
                        <p class="text-dark">Main page</p>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/places">
                        <i class="tim-icons icon-puzzle-10 text-dark"></i>
                        <p class="text-dark">Places</p>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/owners">
                        <i class="tim-icons icon-align-center text-dark"></i>
                        <p class="text-dark">Owners</p>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/types">
                        <i class="tim-icons icon-world text-dark"></i>
                        <p class="text-dark">Types</p>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/users">
                        <i class="tim-icons icon-spaceship text-dark"></i>
                        <p class="text-dark">Users</p>
                    </a>
                </li>
                <li>
                    <a href="/logout">
                        <i class="tim-icons icon-spaceship text-dark"></i>
                        <p class="text-dark">Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    @yield('content')
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
<script type="text/javascript" src="//wurfl.io/wurfl.js"></script><!--   Core JS Files   -->
<script src="/../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="/../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Chartist JS -->
<script src="/../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/../assets/js/black-dashboard.js?v=1.0.0" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

@stack('scripts')
<script>
    if (WURFL.form_factor === "Smartphone") {
        alert('The dashboard is not suitable for mobile screen, i advice you to open it on a desktop');
    }
</script>
</body>
</html>