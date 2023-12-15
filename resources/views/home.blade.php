<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <h1>Laravel 9</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ url('/resources/views/home.blade.php'}}">Home</a>
                <a class="nav-link" href="{{ url('/resources/views/about.blade.php'}}">About</a>
                <a class="nav-link" href="{{ url('/resources/views/projects.blade.php'}}">Projects</a>
            </div>
            </div>
        </div>
    </nav>
</header>
