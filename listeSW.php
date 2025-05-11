<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnage Marvel</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <?php  include './composants/navbar.php' ;?>
    <div class="container">
    <div class="alert alert-warning w-100" role="alert">
  <h4 class="alert-heading">Bienvenue sur la page Star Wars!</h4>
  <p>Vous êtes actuellement en pleine visite de notre site web !</p>
  <hr>
  <p class="mb-0">Si vous avez la moindre remarque à faire nous sommes preneur !</p>
</div>
    <div class="row d-flex">
        <?php
        include './backend/linkbdd.php';
        $req = "SELECT idPerso, nomPerso, descPerso, imgperso, idCateg FROM personnage WHERE idCateg = 3";
            $stmt = $connexion->query($req);
            $cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($cards as $index => $c) {
            if ($index % 3 == 0) { 
                echo '</div><div class="row">';
            }
            ?>
            <div class="card col-sm-4 m-5">
                <img class="card-img-top" src="./<?php echo $c['imgperso']; ?> ">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $c['nomPerso'] ?></h5>
                    <p class="card-text">Univers <?php echo $c['idCateg']; ?></p>
                    <p class="card-text"><?php echo $c["descPerso"]; ?></p>
                    <a href="./pages/<?php echo $c['nomPerso']; ?>.php" 
                    class="btn btn-warning">En savoir plus sur <?php echo $c['nomPerso']; ?></a>
                </div>
            </div>
        <?php
        };
        ?>
    </div>
</div>

<?php include './composants/footer.php'; ?>
</body>
</html>