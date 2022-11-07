<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    @vite("resources/css/app.css")
</head>
<body>

    <!-- NAV BAR -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Ecommerce</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>HOME</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>ABOUT US</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>PLACEHOLDER</b></a>
                    </li>
                </ul>
                <div class="searchbar">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
                <div class="login">
                    <ul class="navbar-nav me-5 mb-2 mb-lg-0 ms-5">
                        <li class="nav-item mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                            </svg>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Register</a>
                        </li>
                    </ul>
                </div>
            </div>   
        </div>
    </nav>

    <!-- CATEGORIES NAVBAR -->

    <ul class="catnav nav nav-tabs bg-dark navbar-dark">
        <li class="nav-item ms-3">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item ms-3">
            <a class="nav-link" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item ms-3">
            <a class="nav-link" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item ms-3">
            <a class="nav-link" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item ms-3">
            <a class="nav-link" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item ms-3">
            <a class="nav-link" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item ms-3">
            <a class="nav-link" aria-current="page" href="#">Active</a>
        </li>
    </ul>
</body>
</html>