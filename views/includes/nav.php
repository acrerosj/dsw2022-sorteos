<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sorteos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
<?php
  if (isset($_SESSION['username'])): 
    $level = isset($_SESSION['level']) ? $_SESSION['level'] : 0;
?>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/index.php/game">Lista</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Crear
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/index.php/raffle">Rifa</a></li>
<?php
      if ($level > 1):
?>
        <li><a class="dropdown-item" href="/index.php/domino">Domino</a></li>
<?php endif; ?>        
      </ul>
    </li>
  </ul>
<?php
  endif;
?>
    </div>
<?php 
  if (isset($_SESSION['username'])) {
    printf('<span class="navbar-text me-4">%s</span> ', $_SESSION['username']);
    echo '<a class="btn btn-danger" href="/index.php/user/logout" role="button">Logout</a>'; 
  } else {
    echo '<a class="btn btn-primary" href="/index.php/user/login" role="button">Login</a>'; 
  }
?>
  </div>
</nav>