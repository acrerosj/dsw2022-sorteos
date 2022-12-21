<?php
require_once('controllers/UserController.php');
require_once('controllers/GameController.php');
require_once('controllers/RaffleController.php');
require_once('controllers/DominoController.php');

session_start();

readURL();

function readURL() {
  if (isset($_SERVER['PATH_INFO'])) {
    $params = explode('/', $_SERVER['PATH_INFO']);
    if ($params[1] == 'user') {
      routeUser($params);
    } elseif ($params[1] == 'raffle') {
      routeRaffle();
    } elseif ($params[1] == 'domino') {
      routeDomino();
    } elseif ($params[1] == 'game') {
      routeGame($params);
    } else {
      $controller = new GameController();
      $controller->list();
    }
  } else {
    require('views/init.php');
  }
}

function routeRaffle() {
  $controller = new RaffleController();
  if (empty($_POST['title']) || empty($_POST['start']) || empty($_POST['end'])) {
    $controller->form();
  } else {
    $controller->create($_POST['title'],$_POST['start'],$_POST['end']);
  }
}

function routeDomino() {
  $controller = new DominoController();
  if (empty($_POST['title']) || empty($_POST['number']) ) {
    $controller->form();
  } else {
    $controller->create($_POST['title'],$_POST['number']);
  }
}

function routeGame($params) {
  $controller = new GameController();
  if (isset($params[2]) && $params[2]=='delete' 
    && isset($params[3]) && is_numeric($params[3])) {
      $controller->delete($params[3]);
  } elseif (isset($params[2]) && $params[2]=='print' 
    && isset($params[3]) && is_numeric($params[3])) {
    $controller->print($params[3]);
  } else {
    $controller->list();
  }
}

function routeUser($params) {
  $controller = new UserController();
  if (isset($params[2]) && $params[2] == 'login') {
    if (empty($_POST['username']) || empty($_POST['password'])) {
      $controller->login();
    } else {
      if ($controller->validate($_POST['username'], $_POST['password'])) {
        header('Location: /');
      } else {
        $controller->login();
      }
    }
  } else {
    $controller->logout();
    header('Location: /');
  }
}