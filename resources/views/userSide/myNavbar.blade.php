<nav class="navbar navbar-expand-lg navbar-light navbar-trans">
    <a class="navbar-brand text-light" href="#">Events hall</a>
    <button class="navbar-toggler color" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="mt-1 collapse navbar-collapse" id="navbarSupportedContent">
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
        <form class="form-inline my-2 my-lg-0">
            <a href="/redirect/google"
               class="text-white">{{ __('Sign in') }}</a>
        </form>
    </div>
</nav>
