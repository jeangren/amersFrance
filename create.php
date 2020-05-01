<?php include 'header.php' ?>

<header>
    <div id="create">
        <div class="container-fluid text-center">
            <h2 class="display-4 pt-5">Merci pour votre partage</h2>
        </div>
    </div>
</header>


<?php
// if (isset($_POST['pseudo']) AND ($_POST['email']) AND ($_POST['type']))!= "0"
// if (isset($_GET['PSEUDO']) AND isset($_GET['EMAIL']) AND isset($_GET['TYPE'])

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND ($_FILES['monfichier']['error'] == 0))
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo 'Merci '.$_POST['pseudo']. " l'envoi a bien été effectué !";
                }
        }
}

else {
    echo 'connard de '.$_POST['pseudo']. " vous n'avez pas respecté les critères d'envoi";
}
?>