<?php
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Inscription</title>
    <link rel="stylesheet" href="http://localhost/projet_php/public/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       <?php if (isset($_SESSION['auth'])): ?>
        <li><a href="logout.php">Se deconnecter</a></li>
       <?php else : ?> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="register.php">Inscription</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
  </nav>
</div>
</nav>

<div class="container">
  <?php if(isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type => $message): ?>
      <div class="alert alert-<?= $type; ?>">
        <?= $message; ?>
      </div>
    <?php endforeach ?>
    <?php unset($_SESSION['flash']); ?>
  <?php endif; ?>  
</div>
