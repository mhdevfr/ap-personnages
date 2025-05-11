<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+nLWmz5ByTxaNTybp65K+oj4+XiG2G2FvNl5O5J" crossorigin="anonymous">
</head>
<body>
<?php include './composants/navbar.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="card-title text-center">Détails de l'utilisateur</h1>
            <?php
            include './backend/linkbdd.php';

                    if ($user) {
                        echo '<ul class="list-group">';
                        echo '<li class="list-group-item"><strong>ID:</strong> ' . $user['ID'] . '</li>';
                        echo '<li class="list-group-item"><strong>Email:</strong> ' . $user['email'] . '</li>';
                        echo '<li class="list-group-item"><strong>Vos Notes:</strong> ' . $user['Notes'] . '</li>';
                        echo "<li class='list-group-item'>Votre photo de profil :<img src='./images/star.jpg' width='75%'></li>";
                        echo '</ul>';
                    } else ?>
                         <div class='text-center'>
                         Veuillez vous connectez <a href="./connexion.php"> Ici</a>
                         </div>
        </div>
    </div>
</div>
<?php include './composants/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u3EACgsxCV2kjIc/pWNW5kzrQ/ZBOFj9vGAj1NqZr2AradFTT5QXr4+ewOMJ4z6h" crossorigin="anonymous"></script>
</body>
</html>
