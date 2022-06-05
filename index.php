  
  <?php 
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Acueil</title>
</head>
<body>
	<div class="container-fluid" style="margin-top:30px;">
		<?php
		 $bdd = new PDO('mysql:host=localhost;dbname=espaceadmin',"root","");
		 $affich = $bdd->query('SELECT titre FROM articles ORDER BY id DESC');
	
	    if(isset($_GET['search']) AND !empty($_GET['search'])){
        $search = htmlspecialchars($_GET['search']);
	    	$affich = $bdd->query('SELECT titre FROM articles  WHERE titre LIKE "%'.$search.'%" ORDER BY id DESC');	
	    }
		?>
		<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
         <div class="row">
			<div class="col">
			 <a class="alert alert-primary" href="membres.php" >Afficher tous les membres</a><br>	
			</div>
			<div class="col">
			    <a class="alert alert-primary"  href="publier_article.php">Publier un nouveau article </a><br>	
			</div>
			<div class="col">
		        <a class="alert alert-primary" href="articles.php">Action sur les  article </a>
			</div>
	
		</div>
		</div>
		<div class="col-xs-6 col-sm-3 side-offcanvas" id="top">
	    <div class="col-lg-12 col-sm-6"> 
	    	<form method ="GET">
		<input type="search" name="search" value="RECHERCHE ARTICLE"/>
		<input type="submit" value="search"/>
	</form>
		</div>
		<div>
					<?php
					while($donnee = $affich->fetch()){?>
		       <span><?php echo $donnee['titre'];?></span>
		       <?php 
		   }
		   ?>
			</div>
	</div>
	</div>
</div>

</body>
</html>