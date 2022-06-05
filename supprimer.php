<?php
$bdd = new PDO('mysql:host=localhost;dbname=espaceadmin',"root","");
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid =$_GET['id'];
    $reqArticle = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $reqArticle->execute(array($getid));
    if($reqArticle->rowCount() > 0){
        $deleteArticle = $bdd->prepare('DELETE FROM articles WHERE id = ?');
        $deleteArticle-> execute(array($getid));
        header('location :articles.php');
    }else{ 
        echo "article non trouvé";
    }
}else{
    echo "l'article n a pas été récupérer";
}
?>