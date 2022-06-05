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
<style>
#jum{
    background-color :white;
    margin-top :30px;
}
</style>
<div class ="container">
<div class = "jumbotron">
<div class = "jumbotron" id ="jum">
<h1 class="display-4">Titre du jumbotron</h1>
                <p class="lead">Phrase d'accroche ou n'importe quel autre contenu...</p>
                <hr class="my-4">
                <p>Plus de texte sous le séparateur...</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Un bouton</a>
</div>
</div> 
<div>
<div class = "container">
<div class="container">
            <h1>Badge et jumbotron</h1>
            <button type="button" class="btn btn-primary mb-5">Mon compte 
                <span class="badge badge-pill badge-light">3</span>
                <span class="sr-only">Messages non lus</span>
            </button>
            <h1>Collapse</h1>
      <a class="btn btn-primary" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">Lien</a>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Bouton</button>

      <div class="collapse show" id="collapse1"><p>Texte du premier élément qui collapse.</p></div>
      <div class="collapse" id="collapse2"><p>Texte du deuxième élément qui collapse.</p></div>
  <div class ="container">
    
  <div class="card">
          <div class="card-header" id="header2">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Collapse n°2</button>
          </div>
          <div id="collapse2" class="collapse" aria-labelledby="header2" data-parent="#exempleAccordeon">
            <div class="card-body">
              <p>Du texte à cacher / afficher grâce au composant collapse.</p>
              <span class="small">Deuxième ligne de texte.</span>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="header3">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Collapse n°3</button>
          </div>
          <div id="collapse3" class="collapse" aria-labelledby="header3" data-parent="#exempleAccordeon">
            <div class="card-body">
              <p>Du texte à cacher / afficher grâce au composant collapse.</p>
              <span class="small">Deuxième ligne de texte.</span>
            </div>
  </div>
</div>
<div class="container">
      <h1>Carrousel</h1>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imgOng/IMG-20210527-WA0087.jpg" alt="Carrousel slide 1" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="imgOng/IMG-20210527-WA0091.jpg" alt="Carrousel slide 2" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="imgOng/IMG-20210527-WA0090.jpg" alt="Carrousel slide 3" class="d-block w-100">
          </div>
        </div>
      </div>
    </div>
</body>
</html>