<?php
	 $bd = new PDO('mysql:host=localhost;dbname=espaceadmin',"root","");
    if(isset($_POST['inserrer'])){
        if(isset($_POST['fruis']) AND !empty($_POST['fruis'])){
            $fruits  = htmlspecialchars($_POST['fruis']);
            $insert = $bd->prepare('INSERT INTO fuits(nomFruits) VALUE(?)');
            $insert->execute(array($fruits));
        }
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
    <title>Document</title>
</head>
<body>
<?php 
$affichage = $bd->query('SELECT nomFruits FROM fuits ORDER BY id DESC');
    if(isset($_GET['search']) AND !empty($_GET['search'])){
        $search = htmlspecialchars($_GET['search']);
        $affichage = $bd->query('SELECT nomFruits FROM fuits WHERE nomFruits LIKE "%'.$search.'%" ORDER BY id DESC'); 
    }
?>
<div class="container">
<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">
         <div class="row">
    <form action="" method="post">
    <label for="fruis">mettre un fruit</label>
    <input type="text" name = "fruis">
    <input type="submit" name= "inserrer" id="">
    </form><br><br>
 </div>
 </div>  
 </div>

    <div class="col-xs-6 col-sm-3 side-offcanvas" id="top">
	    <div class="col-lg-12 col-sm-6"> 
	    	<form method ="GET">
		<input type="search" name="search" value="recherche fruits"/>
		<input type="submit" value="search"/>
	</form>
		</div>
        <div class="col">
    <?php 
        while ($donnee=$affichage->fetch()){
        ?>
<span><?= $donnee['nomFruits'];?></span>
    </div>
    <?php
        }
    ?>
		<div>
        </div>
</body>
</html>