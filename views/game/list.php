<?php include('views/includes/header.php'); ?>
<?php include('views/includes/nav.php'); ?>
<div class="container">
  <h1>Lista de Sorteos del usuario</h1>
  <ul class="list-group list-group-numbered">
<?php
foreach($games as $key => $game) {
?>
  <li class="list-group-item d-flex justify-content-between align-items-start">
  <div class="ms-2 me-auto">
    <?php echo $game; ?>
    </div>
    <a class="btn btn-danger me-3" href="/index.php/game/delete/<?=$key?>">Borrar</a> 
    <a class="btn btn-success" href="/index.php/game/print/<?=$key?>">Imprimir</a> 
    
  </li>
<?php
}
?>
  </ul>
</div>
<?php include('views/includes/footer.php'); ?>