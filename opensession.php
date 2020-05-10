

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


//  après usercreated résultat du log, ne fonctionne pas tjs echo de Mauvais identifiant ou mot de passe          


//  Récupération de l'utilisateur et de son pass hashé
$response = $bdd->prepare('SELECT id, password FROM users WHERE pseudo = :pseudo');
$response->execute([
    
    'pseudo'                  => $_POST['pseudo'],
   
    
   ]);
$resultat = $response->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

// if (!$resultat)
// {
//     echo 'Mauvais identifiant ou mot de passe !';
// }
// else
// {
//     if ($isPasswordCorrect) {
//         session_start();
//         $_SESSION['id'] = $resultat['id'];
//         $_SESSION['pseudo'] = $_POST['pseudo'];
//         echo 'Vous êtes connecté !';
//     }
    
// }

if ($isPasswordCorrect) {
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $_POST['pseudo'];
    echo 'Bonjour ' .$_POST['pseudo'] . ' Vous êtes connecté !';
}
else{
    echo 'Mauvais identifiant ou mot de passe !';
}



?>


<?php include 'footer.php' ?>