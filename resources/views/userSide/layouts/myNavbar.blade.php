<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Event halls</a>
        <button class="navbar-toggler navbar-toggler-right zain-bg" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation ">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/favorites">Favorites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/owners/add">Add place</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/dashboard/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/about/">About</a>
                </li>
            </ul>
            @unless(Auth::check())
                <form class="form-inline my-2 my-lg-0">
                    <a href="/redirect/google"
                       class="text-white">{{ __('Sign in') }}</a>
                </form>
            @endunless
            @if(Auth::check())
                <h6 class="text-white font-weight-bold">{{auth()->user()->name}}</h6>
                <a href="/logout">
                    <i class="tim-icons icon-user-run text-white ml-4 text-center mb-2 font-weight-bold"></i>
                </a>
            @endif
        </div>
    </div>
</nav>
