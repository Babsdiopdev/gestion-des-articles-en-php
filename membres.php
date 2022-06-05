<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espaceadmin',"root","");

if(!$_SESSION['mpd']){
    header('location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher les membres</title>
</head>
<body>
    <!--afficher tous membres-->
    <?php
$req = $bdd->query('SELECT * FROM membre');
while($donnes = $req->fetch()){
    ?>
    <p><?= $donnes['pseudo']; ?> <a href="bannir.php?id=<?= $donnes['id']; ?>" style="color:red; text-decoration:none;">bannir le membre</a></p>
 <?php 
}
?>
     <!--fin affichage-->
</body>
</html>