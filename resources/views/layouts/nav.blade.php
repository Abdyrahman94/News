<nav class="navbar navbar-expand-lg bg-success shadow-sm" data-bs-theme="dark">
    <div class="container-xl">
        <a class="navbar-brand fw-bold" href="#">
            News
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link  {{ Request::routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('post') ? 'active' : '' }}" href="{{ route('post') }}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('user') ? 'active' : '' }}" href="{{ route('user') }}">Users</a>
                </li>
            </ul>
        </div>
    </div>
</nav>