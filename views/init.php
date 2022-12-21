<?php include('views/includes/header.php'); ?>
<?php include('views/includes/nav.php'); ?>
<div class="container">
  <h1>Gestión de Sorteos</h1>
<?php
  if (isset($_SESSION['username'])) {
  printf(
    "<p>Bienvenido %s</p></p>Tu nivel de acceso es: %s",
      $_SESSION['username'],
      $_SESSION['level']
  );

  } else {
    echo "<p>Aún no se ha validado.</p>";
  }
?>
</div>
<?php include('views/includes/footer.php'); ?>