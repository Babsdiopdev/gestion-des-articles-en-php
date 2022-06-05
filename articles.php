<?php 
$bdd = new PDO('mysql:host=localhost;dbname=espaceadmin',"root","");
session_start();
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
    <title>articles</title>
</head>
<body>
<?php
    $recArticle = $bdd->query('SELECT * FROM articles');
    while($affich = $recArticle->fetch()){
     ?>
     <div class="article" style="border: 1px solid black;">
     <h2><?= $affich['titre']?></h2>
     <p><?= $affich['contenu']?></p>
     <a href="supprimer.php?id=<?= $affich['id']; ?>"><button style="color:white; background-color:red; margin-bottom:10px;">Supprimer article</button></a>
     <a href="modifier.php?id=<?= $affich['id']; ?>"><button style="color:black; background-color:yellow; margin-bottom:10px;">Modifier article</button></a>
      </div>
      <br>
     <?php
    }
    
    ?>
</body>
</html>