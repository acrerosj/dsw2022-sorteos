<?php include('views/includes/header.php'); ?>
<?php include('views/includes/nav.php'); ?>
<div class="container">
<form action="/index.php/user/login" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>
<?php include('views/includes/footer.php'); ?>
