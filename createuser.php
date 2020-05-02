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

                    <form action="opensession.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <h5>Merci de vous connecter:</h5>
                            <label for="pseudo">Votre pseudo</label>
                            <input name="pseudo" type="text" class="form-control" placeholder="jeangren" />
                            <label for="password">Votre mot de passe</label>
                            <input name="password" type="password" class="form-control" placeholder="******">
                            <input type="submit" class="btn btn-primary" value="Envoyer">
                        </div>
                    </form>
                </div>
               

            </div>
        </div>
    </div>

<?php include 'footer.php' ?>