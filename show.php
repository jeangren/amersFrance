<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=navigation;charset=utf8;port=3306', 'root', 'root');
$request = "SELECT * FROM navigation.amers WHERE ID=" . $_GET['id'];
$response = $bdd->query($request);
$amers= $response->fetch(PDO::FETCH_ASSOC);

?>



<div class="container">
   


<div class="row">
    
        <div class="card-deck col-md-8 p-4 m-4 text-center">
            <div class="card">
                <img src="img/<?=$amers['IMG_SRC']?>" class="card-img-top" alt="amer">
                <div class="card-body">
                    <h5 class="card-title"><?= $amers['NOM']?></h5>
                    <p class="card-text"><?= $amers['PAYS'] . " / " . $amers['REGION'] ?></p>
                    <p class="card-text"><?= "by " . $amers['PSEUDO'] ?></p>
                    <p class="card-text"><small class="text-muted"><?= $amers['COMMENTAIRE'] ?></small></p>
                   

                </div>
            </div>
        </div>
    </form>
</div>

    <?php include 'footer.php' ?>