<?php include('views/includes/header.php'); ?>
<?php include('views/includes/nav.php'); ?>
<div class="container">
  <h1>Crear un Rifa</h1>
  <form action="/index.php/raffle" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Título</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="row">
    <div class="col mb-3">
      <label for="start" class="form-label">Primer ticket:</label>
      <input type="number" class="form-control" id="start" name="start">
    </div>
    <div class="col mb-3">
      <label for="end" class="form-label">Último ticket:</label>
      <input type="number" class="form-control" id="end" name="end">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
</div>
<?php include('views/includes/footer.php'); ?>