<!-- une fois le user créé il se log pour ouvrir une session avec son mp haché -->

<?php include 'header.php' ?>
<div>

</div>

<header>
    <div id="create">
        <div class="container-fluid text-center">
            <h2 class="display-4 p-5">Bienvenue</h2>
        </div>
    </div>
</header>


<div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <form action="opensession.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <h5>Merci de vous connecter:</h5>
                            <label for="pseudo">Votre pseudo</label>
                            <input name="pseudo" type="text" class="form-control" placeholder="monpseudo" />
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


