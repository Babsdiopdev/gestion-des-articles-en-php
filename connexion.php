<?php 
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mpd'])){
        $pseudo_par_defaut = "admin";
        $mpd_par_defaut ="admin1234";
        $pseudo_saisie = htmlspecialchars($_POST['pseudo']);
        $mpd_saisie =htmlspecialchars($_POST['mpd']);

        if($pseudo_saisie == $pseudo_par_defaut AND $mpd_saisie == $mpd_par_defaut){
            $_SESSION['mpd'] = $mpd_saisie;
           header('location: index.php');


              $bdd = new PDO('mysql:host=localhost;dbname=espaceadmin',"root","");
              $req = $bdd->prepare('INSERT INTO membre (pseudo, pass) VALUE (?,?)');
              $req->execute(array($pseudo_saisie,$mpd_saisie));
              echo "connexion réussie";
            
        }else{
            echo "pseudo ou mot de passe incorrects";
        }

    }else{ 
        echo "veuillez completer tous les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>espace de conexion admin</title>
</head>
<body>
            <form method="post" action="" align="center">
                <input type="text" name="pseudo" autocomplete="on">
                <br> <br> 
                <input type="password" name="mpd">
                <br><br>
                <input type="submit" name="valider">
            </form>
</body>
</html>