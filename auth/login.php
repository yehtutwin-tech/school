<?php
include_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Schol Management System">
  <meta name="generator" content="Hugo 0.84.0">
  <title>School Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= PROJECT_ROOT ?>/assets/bootstrap.min.css" rel="stylesheet" />

  <!-- Favicons -->
  <link rel="icon" href="<?= PROJECT_ROOT ?>/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4 offset-lg-4">
        <form action="<?= PROJECT_ROOT ?>/auth/process.php?action=login" method="POST">
          <h2 class="text-center my-5">Login Form</h2>
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="inputPassword" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <a href="<?= PROJECT_ROOT ?>/auth/register.php" class="btn btn-link">Register</a>
        </form>
      </div>
    </div>
  </div>
  <script src="<?= PROJECT_ROOT ?>/assets/bootstrap.bundle.min.js"></script>
</body>

</html>