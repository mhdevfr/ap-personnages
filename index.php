<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Superheros</title>
        <link rel="stylesheet" href="./css/bootstrap.css">
</head>
    <body>
       <?php include './composants/navbar.php'; ?>

        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="./images/categ.jpeg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Notre site ensemble</h1>
                    <p>Ce site a été réalisé de A à Z via notre équipe soit Matthew, Ryan et Milan. Nous espérons une bonne découverte de notre site web et des différents
                        éléments que vous y trouverez !
                        Vous pouvez également vous inscrire et vous connectez si l'envie vous prends afin de pouvoir participer aux différents events de notre plateforme !

                    </p>
                    <?php 
                    if($_SESSION['user']){
                        echo '<a class="btn btn-danger" href="./composants/deco.php">Déconnectez vous</a>';
                    } else {
                        echo '<a class="btn btn-primary" href="./connexion.php">Connectez vous</a>';
                    }

                    
                    ?>
                    
                </div>
            </div>
            <div class="card text-white bg-warning my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0"><h1>Nos différentes catégories : </h1></div>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Star Wars</h2>
                            <p class="card-text">Explorez l'univers passionnant de Star Wars à travers ces différents personnages et surtout les plus emblématiques.</p>
                            <img src="./images/star-wars-classic-i153628.jpg" class="col-md-12">
                            <a href="https://starwars.com/" class="m-4">Site Officiel</a>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="./listeSW.php">Voir les personnages</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">DC Universe</h2>
                            <p class="card-text">Explorez l'univers sombre de DC universe que ce soit de Batman au Joker vous trouverez les personnages emblématiques.</p>
                            <img src="./images/dc.jpeg" class="col-md-12">
                            <a class="m-2" href="https://www.dc.com/">Site Officiel</a>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="./listeDC.php">Voir les personnages</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Marvel</h2>
                            <p class="card-text">Explorez l'univers puissant et incroyable de Marvel Universe, de Iron Man à Captain America ils y sont ainsi que leurs lores.</p>
                            <img src="./images/marvel.jpeg" class="col-md-12">
                            <a class="m-4 mt-5" href="https://www.marvel.com/">Site Officiel</a>

                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="./listeMarvel.php">Voir les personnages</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './composants/footer.php' ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
