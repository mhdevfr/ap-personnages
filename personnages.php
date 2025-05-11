<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body class="d-flex flex-column justify-content-around align-items-center">
    <div class="w-100">
        <?php include './composants/navbar.php'; ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row d-flex">
                    <?php
                    if(isset($_SESSION['user']) && $_SESSION['user'] == 4){
                        include './composants/addChar.php';
                    } else {
                        include './composants/caroussel.php';
                    }

                    include './backend/linkbdd.php';
                    include './backend/affichageChar.php';
                    foreach ($cards as $index => $c) {
                        if ($index % 2 == 0) { 
                            echo '</div><div class="row">';
                        }
                        ?>
                        <div class="card col-sm-4 m-5">
                            <img class="card-img-top" src="./<?php echo $c['imgperso']; ?> ">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $c['nomPerso'] ?></h5>
                                <p class="card-text">Univers <?php echo $c['idCateg']; ?></p>
                                <p class="card-text"><?php echo $c["descPerso"]; ?></p>
                                <form method="get" action="./backend/delete.php" class="d-flex flex-column">
                                    <a href="./pages/<?php echo $c['nomPerso']; ?>.php" 
                                    class="btn btn-warning">En savoir sur <?php echo $c['nomPerso']; ?></a>
                                    <input type="hidden" name="idPerso" value="<?php echo $c["idPerso"]; ?>">
                                    <?php if(isset($_SESSION['user']) && $_SESSION['user'] == 4){
                                        echo '<button type="submit" class="btn btn-danger mt-2 w-50">Supprimer</button>';
                                        } 
                                    ?>
                                </form>
                            </div>
                        </div>
                    <?php
                    };
                    ?>
                </div>
            </div>
            <?php include './composants/sidebar.php'; ?>
        </div>
    </div>
    <?php include './composants/footer.php'; ?>

</body>
</html>
