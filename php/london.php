<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Voyage</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Source+Sans+Pro&display=swap" rel="stylesheet">    

    <!-- Adobe Font -->
    <link rel="stylesheet" href="https://use.typekit.net/cbv0kwq.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Reset CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Fotorama -->
    <link href="../css/fotorama.css" rel="stylesheet">
    <script src="../js/fotorama.js"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/839df3b8b1.js"></script>
</head>

<body>

    <?php include 'nav.php' ?>

    <div class="dest-back-img london"></div>
    <div class="container mt-sm-5" style="position:relative;">
        <h3>Londres</h3>
        <h2 class="my-4">Entre tradition et excentricité</h2>
        <div class="row">
            <div class="col-sm-6 line-height city-desc">
                <p>Londres est divisée en de nombreux quartiers, appelés districts. Les quartiers les plus célèbres sont
                    ceux du
                    centre de la ville. Autour de ce grand centre-ville se trouve un grand nombre de banlieues et de
                    zones
                    industrielles. Londres est connue pour sa grande superficie. Elle possède par ailleurs plusieurs
                    immenses
                    parcs royaux. À l'ouest est situé un des grands parcs du nom de Hyde Park. Non loin de celui-ci, la
                    reine
                    Élisabeth II possède sa résidence officielle, Buckingham Palace. Un autre grand parc, Regent's Park
                    est
                    situé plus au nord.</p>
                <p>Une des plus célèbres places de Londres est Piccadilly Circus, située en plein centre de la ville. La
                    Tour de
                    Londres, plus à l'est, abrite les joyaux de la couronne britannique. Le Palais de Westminster, qui
                    borde
                    la
                    rivière Tamise, est composé du Parlement et de la tour de l'horloge, Big Ben.
                </p>
                <p>Le quartier de Chelsea est un des districts les plus luxueux de Londres. Enfin, la City (la cité de
                    Londres)
                    abrite le quartier des affaires (c'est le principal quartier financier).</p>
            </div>
            <div class="col-sm-3 offset-sm-2 align-self-center">
                <h4 class="my-3 mb-sm-4 font-weight-bold">Voir aussi</h4>
                <div class="d-flex flex-column line-height mb-3">
                    <a href="">Time Out London<i class="fas fa-chevron-right ml-2"></i></a>
                    <a href="">Le Guide Du Routard Londres<i class="fas fa-chevron-right ml-2"></i></a>
                    <a href="">Visit London.com<i class="fas fa-chevron-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Fotorama -->
    <div class="container mt-sm-5 d-flex justify-content-center">
        <div class="fotorama" data-width="800" data-nav="thumbs" data-arrows="true" data-click="true"
            data-swipe="true" data-trackpad="true" data-allowfullscreen="true">
            <a href="..\assets\img\city\london\city-sky-people-bridge-34629.jpg"><img
                    src="..\assets\img\city\london\london-thumbnail.jpg"></a>
            <a href="..\assets\img\city\london\city-sky-people-bridge-34629.jpg"><img
                    src="..\assets\img\city\london\london-thumbnail.jpg"></a>
            <a href="..\assets\img\city\london\city-sky-people-bridge-34629.jpg"><img
                    src="..\assets\img\city\london\london-thumbnail.jpg"></a>
        </div>
    </div>

    <?php include 'best-dest.php' ?>

    <?php include 'choose-us.php' ?>

    <?php include 'footer.php' ?>

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
    <script src="js/nav.js"></script>
</body>

</html>