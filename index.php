<?php
error_reporting(0);
include 'dbconnect.php';
session_start();
if ($_SESSION['haematology']) {
  header('location:dashboard.php');
} else {
    session_destroy(); 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <title>HAEMATOLOGY</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body class="login">

  <nav class="" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo white-text"><h4>HAEMATOLOGY</h4></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="register.php">Register</a></li>
        <li><a href="index.php">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="register.php">Register</a></li>
        <li><a href="index.php">Login</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">&#xE5D2;</i></a>
    </div>
  </nav>

  <div class="container center box">
   <h3>Login</h3>
      <form class="col s12" action="" method="post">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">&#xE7FD;</i>
            <input type="text" class="validate" placeholder=" username" required="" name="username">
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">&#xE897;</i>
            <input type="password" class="validate" placeholder=" password" required="" name="password">
          </div>
          <div class="input-field col s12">
            <input type="submit" name="login" class="waves-effect waves-light btn">
            <h5>Not Yet Registered? <a href="register.php">Register</a></h5>
          </div>
        </div>
      </form>
  </div>



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



<?php

if ($_POST) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * from users where username='$username' and password='$password'";
  $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result) > 0) {
      session_start();
      $_SESSION['haematology'] = $username;
      header('location: dashboard.php');
    }
    else {
      echo "<script>alert('Invalid username or password');</script>";
    }
}

?>