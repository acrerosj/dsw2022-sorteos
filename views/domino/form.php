<?php include('views/includes/header.php'); ?>
<?php include('views/includes/nav.php'); ?>
<div class="container">
  <h1>Crear un dominó</h1>
<form action="/index.php/domino" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Título</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="number" class="form-label">Número más alto de la ficha: </label>
    <input type="number" class="form-control" id="number" name="number">
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
</div>
<?php include('views/includes/footer.php'); ?>