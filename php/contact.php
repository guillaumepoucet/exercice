<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Voyage</title>

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Source+Sans+Pro&display=swap" rel="stylesheet">    
    <!-- Adobe Font -->
    <link rel="stylesheet" href="https://use.typekit.net/cbv0kwq.css">

    <!-- Reset CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/839df3b8b1.js"></script>
</head>

<body>

    <?php include 'nav.php' ?>

    <div class="dest-back-img contact-img"></div>

    <div class="container">
        <div class="row my-5">
            <div class="col-sm-4 offset-sm-2">
                <h2 class="mt-sm-2 mb-sm-4">Nous rendre visite</h2>
                <div class="line-height">
                    <p class=" mb-sm-3">Besoin d'un conseil pour planifier vos prochaines vacances ?</p>
                    <p class=" mb-sm-4">Nous serons ravis de vous accueillir dans notre agence afin de
                        satisfaire aux mieux vos
                        souhaits.</p>
                    <p class="mb-2 font-weight-bold text-center"><i class="fas fa-map-marker-alt mr-2"></i>Simplon
                        Voyages</p>
                    <p class="mb-2 ml-sm-4 text-center">Adresse 1<br>CP Ville<br></p>
                    <p class="text-center"><i class="fas fa-phone-alt mr-2"></i>03.24.03.04.05</p>
                </div>
            </div>
            <div class="col-sm-4 offset-sm-1">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1b7_udp8ynxsl6ZB-ZtZKkglkHKg_hEBu" width="100%" height="480"></iframe>
            </div>
        </div>
    </div>
    <div class="form">
        <div class="container py-5">
            <div class="row justify-content-center">
                <form action="POST" class="col-sm-6 mt-4">
                    <h2 class="mb-sm-5 text-center">Nous contacter</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputLastname">Nom</label>
                            <input type="text" class="form-control" id="inputLastname" name="Lastname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputFirstname">Prénom</label>
                            <input type="text" class="form-control" id="inputFirstname" name="Firstname">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="Email">
                            <small id="emailHelp" class="form-text text-muted">Votre adresse mail ne sera jamais
                                partagée</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Téléphone</label>
                            <input type="tel" class="form-control" id="inputPhone" name="Phone"
                                pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}">
                            <small id="phoneHelp" class="form-text text-muted">Format : 0* ** ** ** **</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputSubject">Sujet</label>
                            <input type="text" class="form-control" id="inputSubject" name="Subject">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputMessage">Votre message</label>
                            <textarea class="form-control" id="inputMessage" rows="6" name="Message"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<?php include 'testimonials.php' ?>





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
</body>

</html>