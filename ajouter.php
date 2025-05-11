<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter votre personnage</title>
</head>
<body>
    <?php include './composants/navbar.php'; ?>
    <div class="container">
        <form class="mt-5" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Le nom du Personnage</label>
                <input type="text" class="form-control" name="nomPerso" placeholder="Example : Hulk">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Univers du personnage</label>
                <select class="form-control" name="idCateg">
                <option value="3">StarWars</option>
                <option value="2">DC Universe</option>
                <option value="1">Marvel</option>
                </select>
            </div>
            <div class="form-group">
                <label for="desc">La description du personnage</label>
                <textarea class="form-control" name="descPerso" placeholder="Example : Hulk, un superhero marvel.." rows="3"></textarea>
            </div>
            <div class="form-group flex">
                 <label for="exampleFormControlFile1">Image du personnage</label>
                <input type="file" class="form-control-file mb-5" name="imgCharacter">
            </div>
            <input type="submit" value="Ajouter votre personnage au site" class="btn-success border-0 mb-5 rounded w-25">
        </form>
    </div>

    <?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include './backend/linkbdd.php';

        $nomPerso = $_POST["nomPerso"];
        $descPerso = $_POST["descPerso"];
        $idCateg = $_POST["idCateg"];
        $imageName = $_FILES["imgCharacter"]["name"];
        $targetDirectory = "./images/";
        $targetFile = $targetDirectory . basename($imageName);

        if (move_uploaded_file($_FILES["imgCharacter"]["tmp_name"], $targetFile)) {
            $requete = "INSERT INTO personnage (nomPerso, descPerso, imgPerso, idCateg) VALUES (?,?,?,?)";
            $req = $connexion->prepare($requete);
            $req->bindParam(1, $nomPerso);
            $req->bindParam(2, $descPerso);
            $req->bindParam(3, $targetFile);
            $req->bindParam(4, $idCateg);
            $req->execute();
                echo "Nouveau personnage ajouté avec succès ";
            } else {
                echo "Erreur lors du téléchargement de l'image.";
            }
        }
    ?>
    <?php include './composants/footer.php'; ?>

</body>
</html>