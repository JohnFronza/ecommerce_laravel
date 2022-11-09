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
<div class="sticky-top">
    <!-- NAVBAR -->

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
                 <a class="nav-link active" aria-current="page" href="#"><b>PLACEHOLDER</b></a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" aria-current="page" href="#"><b>PACEHOLDER</b></a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" aria-current="page" href="#"><b>PACEHOLDER</b></a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" aria-current="page" href="#"><b>PACEHOLDER</b></a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" aria-current="page" href="#"><b>PACEHOLDER</b></a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" aria-current="page" href="#"><b>PACEHOLDER</b></a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" aria-current="page" href="#"><b>PACEHOLDER</b></a>
            </li>
        </ul>
</div>
    <!-- CAROUSEL -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ URL::to('/') }}/imgs/img1.png" class="d-block w-100" alt="img2">
            </div>
            <div class="carousel-item">
                <img src="{{ URL::to('/') }}/imgs/img2.png" class="d-block w-100" alt="img3">
            </div>
            <div class="carousel-item">
                <img src="{{ URL::to('/') }}/imgs/img3.png" class="d-block w-100" alt="img1">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- PRODUCTS -->

    <div class="popular">
        <div class="row">
            <div class="col-sm-2">
                <div class="card border-0" style="width: 18rem;">
                    <img src="{{ URL::to('/') }}/imgs/img1.png" class="card-img-top rounded-0" alt="item1">
                    <div class="card-body">
                        <h5 class="card-title">Titulo do produto</h5>
                        <p class="card-text">Preço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produto</p>
                        <a href="#" class="btn btn-dark">Mais informações</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card border-0" style="width: 18rem;">
                    <img src="{{ URL::to('/') }}/imgs/img1.png" class="card-img-top rounded-0" alt="item1">
                    <div class="card-body">
                        <h5 class="card-title">Titulo do produto</h5>
                        <p class="card-text">Preço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produto</p>
                        <a href="#" class="btn btn-dark">Mais informações</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card border-0" style="width: 18rem;">
                    <img src="{{ URL::to('/') }}/imgs/img1.png" class="card-img-top rounded-0" alt="item1">
                    <div class="card-body">
                        <h5 class="card-title">Titulo do produto</h5>
                        <p class="card-text">Preço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produto</p>
                        <a href="#" class="btn btn-dark">Mais informações</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card border-0" style="width: 18rem;">
                    <img src="{{ URL::to('/') }}/imgs/img1.png" class="card-img-top rounded-0" alt="item1">
                    <div class="card-body">
                        <h5 class="card-title">Titulo do produto</h5>
                        <p class="card-text">Preço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produto</p>
                        <a href="#" class="btn btn-dark">Mais informações</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card border-0" style="width: 18rem;">
                    <img src="{{ URL::to('/') }}/imgs/img1.png" class="card-img-top rounded-0" alt="item1">
                    <div class="card-body">
                        <h5 class="card-title">Titulo do produto</h5>
                        <p class="card-text">Preço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produto</p>
                        <a href="#" class="btn btn-dark">Mais informações</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card border-0" style="width: 18rem;">
                    <img src="{{ URL::to('/') }}/imgs/img1.png" class="card-img-top rounded-0" alt="item1">
                    <div class="card-body">
                        <h5 class="card-title">Titulo do produto</h5>
                        <p class="card-text">Preço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produtoPreço do produto</p>
                        <a href="#" class="btn btn-dark">Mais informações</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FOOTER -->

    <footer class="bg-dark text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer text</h5>
                    <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                    aliquam voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer text</h5>
                    <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                    molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                    aliquam voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright: MDBootstrap.com
        </div>
    </footer>
</body>
</html>