<!-- crée un user dans bdd -->

<?php include 'header.php' ?>

<header>

    <div id="photo">
    
        <div class="container-fluid text-center">
        

            <h2 class="display-4 pt-5">Enregistrer vous!</h2>
            
        </div>
    </div>
</header>
<main role="main">

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <form action="createuser.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <h5>Rentrez vos informations personnelles</h5>
                            <label for="firstname">Prénom</label>
                            <input name="firstname" type="text" class="form-control" placeholder="Jean" />
                            <label for="lastname">Nom</label>
                            <input name="lastname" type="text" class="form-control" placeholder="Grenouiller" />
                            <label for="pseudo">Votre pseudo</label>
                            <input name="pseudo" type="text" class="form-control" placeholder="jeangren" />
                            <label for="email">Votre email</label>
                            <input name="email" type="email" class="form-control" placeholder="jean@dupont.fr">
                            <label for="password">Votre mot de passe</label>
                            <input name="password" type="password" class="form-control" placeholder="******">
                            <input type="submit" class="btn btn-primary" value="Envoyer">
                        </div>
                    </form>
                </div>
               

            </div>
        </div>
    </div>

</main>


<?php include 'footer.php' ?>