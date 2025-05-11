<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body class="bg-primary d-flex justify-content-center align-items-center min-h-100 w-100 flex-column">
<?php include './composants/navbar.php'; ?>
    <div class="col-md-4 mb-5 d-flex flex-column mt-5">
        <form action="./backend/login.php" method="post" class="d-flex flex-column justify-content-center w-75">
                    <div class="card h-75">
                        <div class="card-body">
                            <h2 class="card-title text-center">Connexion</h2>
                            <div class="d-flex flex-column">
                            <input type="email" placeholder="myusername72" class="w-100 mt-5 p-2 mb-2" name="email">
                            <input type="password" placeholder="yourpassword" class="w-100 mt-5 p-2 mb-2" name="password">
                            </div>
                            <p> <a href="./inscription.php">Pas de compte ?</a> </p>
                            <input type="submit" value="Me connecter" id="submit" class="m-1 mb-5 w-75 bg-blue">
                        </div>
                    </div>
                </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include './composants/footer.php'; ?>

</body>
</html>