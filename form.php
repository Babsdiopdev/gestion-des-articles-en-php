<?php
  	 $bdd = new PDO('mysql:host=localhost;dbname=espaceadmin','root','');
  	 echo "connexion oki";
if(isset($_POST['connecter'])){
	if(isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['mdp']) AND !empty($_POST['mdp'])){
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);
  	 $insert = $bdd->prepare('INSERT INTO ajoutproduit (nom,description) VALUES (?,?)');
  	 $entrer = $insert->execute(array($pseudo,$mdp));

  	 if($entrer == true){
  	 	echo "pseudo et mot de passe sont bien enrigistrer";
  	 }else{
  	 	echo "error connexion";
  	 }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	

</head>
<body> 
<div class="container col-lg-offset-6 col-lg-9"> 
<h2>page de connexion </h2>
<form method="post"> 
<div>
<label>Pseudo</label>
<input type="text" name="pseudo">
</div>
<div>
	<label>mot de passe</label>
	<input type="password" name="mdp">
</div>
<input type="submit"  name = "connecter" value ="connecter">

</form>
</div>

</body>
</html>