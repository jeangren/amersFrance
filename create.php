<?php include 'header.php' ?>

<header>
    <div id="create">
        <div class="container-fluid text-center">
            <h2 class="display-4 p-5">Merci pour votre partage</h2>
        </div>
    </div>
</header>


<?php
$bdd = new PDO('mysql:host=localhost;dbname=navigation;charset=utf8;port=3306', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$request = "INSERT INTO navigation.amers (TYPE, NOM, PAYS, REGION, VILLE, COMMENTAIRE, IMG_SRC, PSEUDO)
            VALUES (:type, :nom, :pays, :region, :ville, :commentaire, :img_src, :pseudo)";

$response = $bdd->prepare($request);

$response->execute([
    'type'               => $_POST['type'],
    'nom'               => $_POST['nom'],
    'pays'               => $_POST['pays'],
    'region'             => $_POST['region'],
    'ville'              => $_POST['villeproche'],
    'commentaire'        => $_POST['commentaire'],
    'img_src'            => $_FILES['monfichier']['name'],
    'pseudo'             => $_POST['pseudo'],

]);
?>

<div class="container">
    <?php    

    if (isset($_FILES['monfichier']) && ($_FILES['monfichier']['error'] == 0)) {

        // Test si le fichier pas trop gros
        if ($_FILES['monfichier']['size'] <= 500000) {
            // Test si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['monfichier']['name']);
            $extension_upload = $infosfichier['extension'];
            
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
           if (in_array($extension_upload, $extensions_autorisees)) {
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                echo 'Merci ' . $_POST['pseudo'] . " l'envoi a bien été effectué !";
            }
        }
    } else {
        echo 'Désolé ' . $_POST['pseudo'] . " vous n'avez pas respecté les critères d'envoi";
    }
    ?>
</div>


<div class="row">
    
        <div class="card-deck col-md-4 p-4 m-4 text-center">
            <div class="card">
                <img src="img/<?= $_FILES['monfichier']['name'] ?>" class="card-img-top" alt="amer">
                <div class="card-body">
                    <h5 class="card-title">Bravo vous avez créé <?= $_POST['nom'] ?></h5>
                    <p class="card-text"><?= $_POST['pays'] . " / " . $_POST['region'] ?></p>
                    <p class="card-text"><?= "by " . $_POST['pseudo'] ?></p>
                    <p class="card-text"><small class="text-muted"><?= $_POST['commentaire'] ?></small></p>

                </div>
            </div>
        </div>
    </form>
</div>

    <?php include 'footer.php' ?>