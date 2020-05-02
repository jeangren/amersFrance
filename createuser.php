<?php include 'header.php' ?>

<header>
    <div id="create">
        <div class="container-fluid text-center">
            <h2 class="display-4 p-5">Bienvenue <?= $_POST['pseudo']?></h2>
        </div>
    </div>
</header>


<?php
$bdd = new PDO('mysql:host=localhost;dbname=navigation;charset=utf8;port=3306', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

$request = "INSERT INTO navigation.users (firstname, lastname, pseudo, email, password)
            VALUES (:firstname, :lastname, :pseudo, :email, :password)";

$response = $bdd->prepare($request);

$response->execute([
    'firstname'               => $_POST['firstname'],
    'lastname'                => $_POST['lastname'],
    'pseudo'                  => $_POST['pseudo'],
    'email'                   => $_POST['email'],
    'password'                => $_POST['$pass_hache'],
   ]);
?>



<?php include 'footer.php' ?>