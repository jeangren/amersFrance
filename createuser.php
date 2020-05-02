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
    'password'                => $pass_hache,
   ]);
?>

<div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <form action="usercreated.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <h5>Connectez vous pour accéder aux pages membres:</h5>
                            
                            <input type="submit" class="btn btn-primary" value="Connexion">
                        </div>
                    </form>
                </div>
               

            </div>
        </div>
    </div>

<?php include 'footer.php' ?>