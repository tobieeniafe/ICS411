<?php
//error_reporting(0);
include 'dbconnect.php';
session_start();
if (!$_SESSION['haematology']) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <title>HAEMATOLOGY</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body style="background-color: #F6F1F1">

  <nav class="" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo white-text"><h4>HAEMATOLOGY</h4></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="dashboard.php">New Test</a></li>
        <li><a href="analysis.php">Analysis</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="dashboard.php">New Test</a></li>
        <li><a href="analysis.php">Analysis</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">&#xE5D2;</i></a>
    </div>
  </nav>

  <div class="search-wrapper card">
    <i class="material-icons prefix">&#xE8B6;</i>
    <input id="search" placeholder="   search" name="search">
  </div>


  <h1>Analysis page</h1>

  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        &copy; ICS 411 Group 5 2018.
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>
