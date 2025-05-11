<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une personnage</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body class="bg-dark vh-100 vw-100">
    <?php include './composants/navbar.php';?>
    <div class="container">
        <h1 class="mt-5 text-center text-success mb-5">Welcome back administrator</h1>
        <div class="row justify-content-center mb-5">
        <div class="card text-bg-primary mb-3" style="max-width: 21rem;">
           <div class="card-header">Vérification du contenu poster</div>
              <div class="card-body">
                <p class="card-text">Vérifiez les informations des derniers personnages ajouter à la page personnage.</p>
                <h6 class="text-success card-text">Après l'ajout de différent personnage il faut</h6>
                <ol>
                    <li>Vérifier les infos</li>
                    <li>Pas de contenu +18</li>
                    <li>Pas de failles</li>
                    <li>Pas d'Insulte</li>
                    <li>Pas d'avis politique</li>
                </ol>
                <a href="personnages.php" class="card-link text-danger p-2 rounded bg-warning">vérifier les personnages</a>
            </div>
        </div>
        <div class="card text-bg-primary mb-3 mx-5" style="max-width: 21rem;">
           <div class="card-header">Voir vos notes</div>
              <div class="card-body">
                <?php
                include './backend/linkbdd.php'; 
                echo '<li class="list-group-item"><strong>Vos Notes:</strong> ' . $user['Notes'] . '</li>';
                echo '<li class="list-group-item mt-5"><strong>Votre email:</strong> ' . $user['email'] . '</li>';

                ?>
            </div>
        </div>
        <div class="card text-bg-primary mb-3" style="max-width: 21rem;">
           <div class="card-header">Votre Profil</div>
           <img src="./images/icons8-administrateur-homme-96.png">
              <div class="card-body">
                
                <p class="card-text">Vous êtes correctement connecté.</p>
                <h3 class="text-danger">Administrateur</h3>
            </div>
        </div>

          
        </div>
        <?php include './composants/addChar.php'; ?>
    </div>
    <?php include './composants/footer.php'; ?>
</body>
</html>