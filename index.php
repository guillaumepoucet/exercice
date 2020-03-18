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

    <?php include 'php/nav.php' ?>

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
        <div class="row position">
            <div class="col col-sm-4 offset-sm-8">
                <select class="custom-select" id="destination" required>
                    <option selected disabled value="">Votre destination</option>
                    <option>Londres</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
    </div>

    <?php include 'php/best-dest.php' ?>

    <div class="container my-sm-5 pb-sm-4 d-none d-sm-block">
        <h2 class="my-4">Destinations à la mode<i class="fas fa-chevron-right ml-2"></i></h2>
        <div class="card-deck">
            <div class="card city-card best-dest1 mb-sm-5">
                <div class="">
                    <p>Londres</p>
                    <p class="price">€€€</p>
                </div>
            </div>
            <div class="card city-card best-dest2">
                <div class="">
                    <p>Kyoto</p>
                    <p class="price">€€€</p>
                </div>
            </div>
            <div class="card city-card best-dest3">
                <div class="">
                    <p>New-York</p>
                    <p class="price">€€€</p>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card city-card best-dest1">
                <div class="">
                    <p>Londres</p>
                    <p class="price">€€€</p>
                </div>
            </div>
            <div class="card city-card best-dest2">
                <div class="">
                    <p>Kyoto</p>
                    <p class="price">€€€</p>
                </div>
            </div>
            <div class="card city-card best-dest3">
                <div class="">
                    <p>New-York</p>
                    <p class="price">€€€</p>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax parallax-index mt-sm-5"></div>

    <?php include 'php/testimonials.php' ?>

    <?php include 'php/choose-us.php' ?>

    <?php include 'php/footer.php' ?>

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