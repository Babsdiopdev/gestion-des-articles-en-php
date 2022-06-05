<?php
if (isset($_GET["submit"])){
    $numero=$_GET["numero"];
    $date=$_GET["date"];
    $client=$_GET["client"];
    @$designations=$_GET["designation"];
    @$quantites=$_GET["quantite"];
    @$prixs=$_GET["prix"];
    @$montants=$_GET["montant"];
    echo "numero: ".$numero." date: ".$date." client " .$client."</br>";
    foreach( $designations as $designation){
        echo " designation : ".$designation;
    }
    echo "</br>";
    foreach( $quantites as $quantite){
        echo " quantite : ".$quantite;
    }
    echo "</br>";
    foreach( $prixs as $prix){
        echo " prix: ".$prix;
    }
    echo "</br>";
    foreach( $montants as $montant){
        echo " montant : ".$montant;
    }
    echo "</br>";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>facture</title>
</head>

<div  class="container">
<h2>Facture de paiement</h2>
<form class="form-group" method="GET">
<label for="numero">numero</label>
<input class="form-control" type="text" name="numero" id="numero"/>
<label for="">date</label>
<input type="date" name="date" class="form-control" id="date"/>
<label for="">client</label>
<select name="client" id="client" class="form-control">
<option value="villier">VILLER</option>
<option value="chalier">CHALIER</option>
<option value="aufran">aufran</option>
<option value="alfrich">ALFRICH</option>
</select>
<table border=1 class="table">
<tr>
<td>designation</td>
<td>quantite</td>
<td>prix</td>
<td>montant</td>
</tr>
<tr>
<td><input type="text" name="designation[]" id="designation1"/>   
<td><input type="text" class="element" name="quantite[]" id="quantite1"/></td>
<td><input type="text" class="element" name="prix[]" id="prix1"/></td>
<td><input type="text"  class="montant" name="montant[]" id="montant1"/></td>
</tr>
<tr>
<td><input type="text" name="designation[]" id="designation2"/></td>
<td><input type="text" class="element" name="quantite[]" id="quantite2"/></td>
<td><input type="text" class="element" name="prix[]" id="prix2"/></td>
<td><input type="text" class="montant" name="montant[]" id="montant2"/></td>
</tr>
<tr>
<td><input type="text" name="designation[]" id="designation3"/></td>
<td><input type="text" class="element" name="quantite[]" id="quantite3"/></td>
<td><input type="text" class="element" name="prix[]" id="prix3"/></td>
<td><input type="text"  class="montant" name="montant[]" id="montant3"/></td>
</tr>
<tr>
<td>MontantHT</td>
<td></td>
<td></td>
<td><input type="text" name="montantHT" id="montantHT"/></td>
</tr>
<td>Tva</td>
<td></td>
<td></td>
<td><input type="text" name="tva" id="tva"/></td>
</tr>
<td>totalTTC</td>
<td></td>
<td></td>
<td><input type="text" name="totalTTC" id="totalTTCs"/></td>
</tr>
</table>
<input type="submit" name="submit" id="submit" value="facturer">
</div>
</form>
<script>
function produit(){
  var id=this.getAttribute("id");
  var numero=id.substring(id.length-1, id.length);
  var quantite1=document.getElementById("quantite"+numero).value;
  var prix1=document.getElementById("prix"+numero).value;
  var montant1=document.getElementById("montant"+numero);
  //var somme=parseInt(quantite1)*parseInt(prix1);
  //montant1.value=parseInt(quantite1)*parseInt(prix1);
  var produit=parseInt(quantite1)*parseInt(prix1);
  if(!isNaN(produit)) montant1.value= produit;
  var montantTotal=0;
  montants=document.getElementsByClassName("montant");
  for (var i=0;i<montants.length;i++){
    if (!isNaN(parseInt(montants[i].value)))  montantTotal=montantTotal+parseInt(montants[i].value);
  }
  var montantHT=document.getElementById("montantHT");
  montantHT.value=montantTotal;
  // avoir de la somme totale
  // if (!isNaN(montantTotal)) montantHT.value=montantTotal;
}

var elements=document.getElementsByClassName("element");
for (var i=0;i<elements.length;i++)
elements[i].addEventListener("change", produit, false);
elements[i].addEventListener("change", produit, false);

//PREMIER METHODE
/*
function produit1(){
var quantite2=document.getElementById("quantite2").value;
  var prix2=document.getElementById("prix2").value;
  var montant2=document.getElementById("montant2");
  montant2.value=parseInt(quantite2)*parseInt(prix2);
}
var quantite2=document.getElementById("quantite2");
var prix2=document.getElementById("prix2");
var montant2=document.getElementById("montant2");
quantite2.addEventListener("change", produit1, false);
prix2.addEventListener("change", produit1, false);


function produit2(){
var quantite3=document.getElementById("quantite3").value;
  var prix3=document.getElementById("prix3").value;
  var montant3=document.getElementById("montant3");
  montant3.value=parseInt(quantite3)*parseInt(prix3);
}
var quantite3=document.getElementById("quantite3");
var prix3=document.getElementById("prix3");
var montant3=document.getElementById("montant3");
quantite3.addEventListener("change", produit2, false);
prix3.addEventListener("change", produit2, false);
*/
</script>
</html>
