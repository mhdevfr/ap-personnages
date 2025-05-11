<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
<?php include './backend/linkbdd.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning w-100">
            <div class="container px-5">
                <a class="navbar-brand" href="../Ap2.php">RETOUR PORTFOLIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="personnages.php">Personnages</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

                        <?php 
                        if(isset($_SESSION['user']) && $_SESSION['user'] == 4){
                            echo '<li class="nav-item text-success"><a class="nav-link text-success" href="panel.php">Panel</a></li>';
                        }
                        if(!isset($_SESSION['user'])){
                            echo '<li class="nav-item"><a class="nav-link" href="connexion.php">Connexion</a></li>';
                        } 
                        ?>

                        
                    </ul>
                        <?php 
                        if(isset($_SESSION['user'])){
                            echo "<a class='nav-link text-danger' href='composants/deco.php'>Déconnexion</a>";
                        }
                        ?>
                </div>
            </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>