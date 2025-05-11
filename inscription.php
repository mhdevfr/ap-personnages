<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body class="bg-primary d-flex justify-content-center align-items-center h-100 w-100 flex-column">
    <?php include './composants/navbar.php'; ?>
    <div class="col-md-4 mb-5 d-flex flex-column mt-5">
        <form action="./backend/enregistrement.php" method="post" class="d-flex flex-column">
                    <div class="card h-75">
                        <div class="card-body">
                            <h2 class="card-title text-center">Inscription</h2>
                               <div class="d-flex flex-column">
                                <input type="email" placeholder="myusername72@gmail.com" class="w-75 mt-2 mb-5" name="email">
                                <input type="password" placeholder="yourpassword" class="w-75 mt-2 mb-5" name="password">
                                <input type="password" placeholder="confyourpassword" class="w-75 mt-2 mb-5" name="passconf">
                               </div>
                            <p><a href="./connexion.php">Déjà un compte ?</a></p>
                            <input type="submit" value="M'inscrire" id="submit" class="m-1 w-50 bg-blue">
                        </div>
                    </div>
                </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include './composants/footer.php'; ?>

</body>
</html>