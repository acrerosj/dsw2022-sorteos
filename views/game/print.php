<?php include('views/includes/header.php'); ?>
<?php include('views/includes/nav.php'); ?>
<div class="container">
  <h1>Tickets del sorteo</h1>
  <div class="d-flex flex-wrap">  
<?php
  $game->print();
?>
  </div>
</div>
<?php include('views/includes/footer.php'); ?>