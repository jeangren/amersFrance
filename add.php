<?php include 'header.php' ?>

<header>
    <div id="photo">
        <div class="container-fluid text-center">
            <h2 class="display-4 pt-5">Partagez vos photos</h2>
        </div>
    </div>
</header>
<main role="main">

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <form action="create.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <h5>Tout d'abord, merci de nous indiquer vos coordonnées :</h5>
                            <label for="pseudo">Votre pseudo</label>
                            <input name="pseudo" type="text"class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="email">Votre email</label>
                            <input name="email" type="mail" class="form-control"/>
                        </div>
                        <hr>




                        <div class="form-group">
                            <h5>Description du amer :</h5>

                            <label for="type">Type</label>
                            <select name="type" class="form-control">
                                <option value="phare">Phare</option>
                                <option value="tour">Tour</option>
                                <option value="architecture remarquable">Architecture Remarquable</option>
                                <option value="relief naturel">Relief Naturel</option>
                                <option value="autre">autre</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input name="nom" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="region">Région</label>
                            <input name="region" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="villeproche">Ville Alentour</label>
                            <input name="taille" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pays">Pays</label>
                            <input name="pays" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="commentaire">Commentaire</label>
                            <input name="commentaire" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            Envoyer une image:<br />
                            <input type="file" name="monfichier" /><br />

                        </div>

                        <input type="submit" class="btn btn-primary" value="Envoyer">

                    </form>
                </div>
            </div>
        </div>

</main>


<?php include 'footer.php' ?>