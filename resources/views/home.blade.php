<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container justify-content-between">
                    <h1>Laravel 9</h1>  
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
                            <a class="nav-link" href="{{ route('about')}}">About</a>
                            <a class="nav-link" href="{{ url('/project')}}">Projects</a>
                        </div>
                    </div>
                </div>
            </nav> 
    </header>
</body>
</html>


