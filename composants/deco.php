<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>
<body>
<?php include './navbar.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Déconnexion</h2>
            <p>Voulez-vous vraiment vous déconnecter ?</p>
            <form method="post" action="../backend/logout.php">
                <button type="submit" class="btn btn-danger">Déconnexion</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
