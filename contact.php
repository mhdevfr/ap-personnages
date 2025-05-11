<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
<?php include './composants/navbar.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="mb-2">Contactez-nous</h2>
            <form method="post" action="https://submit-form.com/n1d9Ry6Lx">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom:</label>
                    <input type="text" class="form-control mb-5" id="nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control mb-5" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control mb-5" id="message" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-warning mb-5">Envoyer</button>
            </form>
        </div>
    </div>
</div>
<?php include './composants/footer.php'; ?>
</body>
</html>
