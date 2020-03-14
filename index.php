<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Voyage</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Source+Sans+Pro&display=swap"
        rel="stylesheet">
    <!-- Adobe Font -->
    <link rel="stylesheet" href="https://use.typekit.net/cbv0kwq.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Reset CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/839df3b8b1.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <h1 class="navbar-brand my-auto">Simplon Voyages</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>&#9776;</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-sm-auto align-items-baseline">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="sr-only">(current)</span>Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contact-btn" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link"><i class="fas fa-phone-alt mr-2"></i>03.24.03.04.05</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item carousel1 active">
                <img src="assets/img/index-cover.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel2">
                <img src="assets/img/destination_cover.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item carousel3">
                <img src="assets/img/destinations_parallax.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-4">
        <div class="col">
            <select class="custom-select" id="destination" required>
                <option selected disabled value="">Votre destination</option>
                <option>Londres</option>
                <option>...</option>
                <option>...</option>
                <option>...</option>
            </select>
        </div>
    </div>

    <div class="container">
        <h2 class="col my-4">Meilleures destinations<i class="fas fa-chevron-right ml-2"></i></h2>
        <div class="row">
            <div class="col-10 mb-3 mx-auto city-card cc1 d-flex align-items-end justify-content-between">
                <p>Londres</p>
                <p class="price">€€€</p>
            </div>
            <div class="col-10 mb-3 mx-auto city-card cc1 d-flex align-items-end justify-content-between">
                <p>Londres</p>
                <p class="price">€€€</p>
            </div>
            <div class="col-10 mb-3 mx-auto city-card cc1 d-flex align-items-end justify-content-between">
                <p>Londres</p>
                <p class="price">€€€</p>
            </div>
        </div>
    </div>

    <div class="container choose-us">
        <h2 class="col my-4">Pourquoi nous choisir<i class="fas fa-chevron-right ml-2"></i></h2>
        <div class="row justify-content-around text-center">
            <div class="col-10">
                <i class="fa fas fa-users"></i>
                <p class="my-4">Un réseau d'experts</p>
            </div>
            <div class="col-10">
                <i class="fa fas fa-map-marker-alt"></i>
                <p class="my-4">Plein de destinations</p>
            </div>
            <div class="col-10">
                <i class="fa fas fa-phone-alt"></i>
                <p class="my-4">Disponible 7j/7</p>
            </div>
        </div>
    </div>

    <footer class="container py-4">
        <div class="row">
            <div class="col-6">
                <div class="d-flex align-items-center my-2">
                    <i class="fab fa-twitter"></i>
                    <p class="m">Twitter</p>
                </div>
                <div class="d-flex align-items-center my-2">
                    <i class="fab fa-facebook-f"></i>
                    <p class="">Facebook</p>
                </div>
                <div class="d-flex align-items-center my-2">
                    <i class="fab fa-instagram"></i>
                    <p class="">Instagram</p>
                </div>
            </div>
            <div class="col-6 text-right font-weight-bold">
                <a href="" class="d-block my-2">Accueil</a>
                <a href="" class="d-block my-2">Destinations</a>
                <a href="" class="d-block my-2">Contact</a>
            </div>
            <div class="col text-center my-4">
                <p class="mb-2"><span>Simplon Voyages</span></p>
                <p>Adresse 1<br>CP Ville<br>France</p>
            </div>
        </div>
        <div class="row flex-column text-center">
            <p class="font-weight-bold mb-2">Mentions légales</p>
            <p>Copyright <span>2020 Simplon</span></p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>