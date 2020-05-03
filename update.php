
<!-- à faire va lancer les modif de edit dans la bdd -->

<?php include 'header.php' ?>


<?php
$bdd = new PDO('mysql:host=localhost;dbname=navigation;charset=utf8;port=3306', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


$request = "UPDATE navigation.users (PSEUDO, TYPE, NOM, REGION, PAYS, COMMENTAIRE, IMG_SRC,
            SET PSEUDO = :pseudo, :type, :nom, :region, :pays, :commentaire, :file)
            WHERE id = :id";

$response = $bdd->prepare($request);

$response->execute([
    'pseudo'                => $_POST['pseudo'],
    'type'                  => $_POST['type'],
    'nom'                   => $_POST['nom'],
    'region'                => $_POST['region'],
    'pays'                  => $_POST['pays'],
    'commentaire'           => $_POST['commentaire'],
    'file'                  => $_FILES['monfichier']['name'],
   ]);

var_dump ($request);
?>

<?php include 'footer.php' ?>