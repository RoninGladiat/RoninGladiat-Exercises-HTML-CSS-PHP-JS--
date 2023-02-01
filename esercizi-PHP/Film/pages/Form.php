<div class="aggiungi">
  <h2>Inserisci Film</h2>
  <form method="post">
    <div class="form-group">
      <label for="Titolo"><b>Titolo</b></label>
      <input type="name" class="form-control" name="film[titolo]">
    </div>
    <div class="form-group">
      <label for="Nome_Regista"><b>Nome_Regista</b></label>
      <input type="name" class="form-control" name="film[nome_regista]">
    </div>
    <div class="form-group">
      <label for="Descrizione"><b>Descrizione</b></label>
      <input type="text" class="form-control" name="film[descrizione]">
    </div>
    <div class="form-group">
      <label for="Durata_Film"><b>Durata_Film</b></label>
      <input type="time" class="form-control" name="film[durata_film]">
    </div>
    <div class="form-group">
      <label for="Anno_Pubblicazione"><b>Anno_Pubblicazione</b></label>
      <input type="date" class="form-control" name="film[anno_pubblicazione]">
    </div>
    <div class="form-group">
      <label for="Genere"><b>Genere</b></label>
      <input type="text" class="form-control" name="film[genere]">
    </div><br>
    <button type="submit" name="aggiungi" class="btn btn-success">Invio</button>
    <button type="reset" class="btn btn-warning">Cancella</button>
  </form>
</div>
<?php

if(isset($_POST['aggiungi'])){
  $FilmController = require('controllers/FilmController.php');
  $FilmController.create();
}

?>