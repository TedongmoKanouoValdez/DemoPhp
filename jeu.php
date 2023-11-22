<?php
$aDeviner = 150;
$error=null;
$sucess=null;
$value=null;

// Conition du jeu
if(isset($_GET['chiffre'])){
    if ($_GET['chiffre'] > $aDeviner){
        $error="Votre chiffre est trop grand";
    }
    elseif ($_GET['chiffre'] < $aDeviner){
       $error= "Votre chiffre est trop petit";
    }  
    else{
        $sucess="  Bravo ! Vous avez déchiffré le chiffre <strong>$aDeviner </strong>";
    } 
    $value=(int)$_GET['chiffre'];
}
require 'header.php';
?>

<!-- les couleurs definies pour les messages de dialogues -->
<?php if ($error): ?>
    <div class="alert alert-danger">
        <?php echo $error; ?>
    </div>
<?php elseif ($sucess): ?>
    <div class="alert alert-success">
        <?php echo $sucess; ?>
    </div>
<?php endif ?>

<!-- Autres façons d'ecrire l'algorithme du jeu à deviner -->
<!-- <?php if (isset($_GET['chiffre'])): ?>
    <?php if ($_GET['chiffre'] > $aDeviner): ?>
        Votre chiffre est trop grand
    <?php elseif ($_GET['chiffre'] < $aDeviner): ?>
        Votre chiffre est trop petit
    <?php else: ?>
        Bravo ! Vous avez déchiffré le chiffre <?= $aDeviner ?>
    <?php endif ?>
<?php endif ?> -->

<form action="jeu.php" method="GET">
    <div class="form-group">
        <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" 
    value="<?=$value ?>">
    </div>
    <button type="submit" class="btn btn-primary">Deviner</button>
</form>

<?php require 'footer.php' ?>