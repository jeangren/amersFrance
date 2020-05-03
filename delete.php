
<!-- à faire va lancer les modif de edit dans la bdd -->

<?php include 'header.php' ?>



<?php
$bdd = new PDO('mysql:host=localhost;dbname=navigation;charset=utf8;port=3306', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


$request = "DELETE FROM navigation.users WHERE ID = :id";

$response = $bdd->prepare($request);

$response->execute([
    'id'    => $_GET['id'],
   ]);

 include 'footer.php' ;

 var_dump ($response);
 ?>