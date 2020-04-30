<?php include 'header.php' ?>


<main role="main">

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <form action="create.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" class="form-control">
                                <option value="phare">Phare</option>
                                <option value="tour">Tour</option>
                                <option value="architecture remarquable">Architecture Remarquable</option>
                                <option value="relief naturel">Relief Naturel</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input name="nom" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="region">Région maritime</label>
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