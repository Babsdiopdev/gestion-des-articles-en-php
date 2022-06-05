<?php
$bdd = new PDO('mysql:host=localhost;dbname=espaceadmin',"root","");
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid =$_GET['id'];
    $req = $bdd->prepare('SELECT * FROM membre WHERE id = ?');
    $req->execute(array($getid));
    if($req->rowCount() > 0){
        $bannirUser = $bdd->prepare('DELETE FROM membre WHERE id = ?');
        $bannirUser-> execute(array($getid));
    }else{ 
        echo "membre non trouvé";
    }
}else{
    echo " l'identifiant n a pas été récupérer";
}
?>