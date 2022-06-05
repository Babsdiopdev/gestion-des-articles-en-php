<?php
//var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=espaceadmin',"root","");
 if(isset($_GET['id']) AND !empty($_GET['id'])){
  $getid = $_GET['id'];
  $insert = $bdd->prepare('SELECT * FROM articles WHERE id = ? ');
  $insert->execute(array($getid));
  if($insert->rowCount() > 0){
      $infos = $insert->fetch();
      $titre = $infos['titre'];
      $description = str_replace('<br>', '', $infos['contenu']);

      if(isset($_POST['valider'])){
          $titre_saisi = htmlspecialchars($_POST['titre']);
          $description_saisi = nl2br(htmlspecialchars($_POST['description']));

          $updateArticle = $bdd->prepare('UPDATE articles SET titre = ?, contenu = ? WHERE id = ?');
          $updateArticle->execute(array($titre_saisi,$description_saisi,$getid));
            header('location: articles.php');
      }
}else{
    echo "echec";
}
 }else{
     echo "identifiants non trouvé";
 } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>modification</title>
</head>
<body>
<style>
#titre{
margin-top :10px;
}
#lien{
    text-decoration: none;
}
#tablist{
    margin-right: 250px;
}
</style>
<div class="container">
<div class="row">
<div class="col">
    <form  method="post" action="" class="form-group" >
    <input type="text" id="titre" name="titre" value =" <?= $titre ;?>" class="form-control">
    <br>
    <textarea name="description" id="" cols="30" rows="10" class="form-control">
    <?php echo $description ; ?>
    </textarea>
    <br>
     <input  class="btn btn-danger" type="submit" name="valider" value="Annuler">
    <input  class="btn btn-primary" type="submit" name="valider" value="Modifier">
    
    </form>
    </div>
   </div>
   
</body>
</html>