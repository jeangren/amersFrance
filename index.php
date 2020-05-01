

<?php
$bdd = new PDO('mysql:host=localhost;dbname=navigation;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT * FROM navigation.amers";
$response = $bdd->query($request);
$navigation = $response->fetchAll(PDO::FETCH_ASSOC);
//  var_dump($navigation);

?>
<?php
include 'header.php';
?>



<div class="jumbotron text-center">
    <h2 class="display-4">AMER [amε:ʀ] : Point de repère utilisé pour la navigation maritime.</h2>
    <p class="lead">Découvrez une multitude d'amers à travers le monde</p>
    <hr class="my-4">
    <p class="lead">Ajoutez des amers photographiés lors de vos sorties en mer!</p>
    <a class="btn btn-success btn-lg" href="add.php" role="button">Ajouter un amer</a>
</div>

<div class="container">




    <div class="row">
        <?php foreach ($navigation as $amer) : ?>
            <div class="card-deck col-md-3 m-4">
                <div class="card">
                    <img src="img/<?= $amer['IMG_SRC'] ?>" class="card-img-top" alt="amer">
                    <div class="card-body">
                        <h5 class="card-title"><?= $amer['NOM'] ?></h5>
                        <p class="card-text"><?= $amer['PAYS'] . " " . $amer['REGION'] ?></p>
                        <p class="card-text"><small class="text-muted"><?= $amer['COMMENTAIRE']?></small></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>


<?php include 'footer.php' ?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>