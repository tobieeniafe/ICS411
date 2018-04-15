<?php
// error_reporting(0);
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
   <h3>Register</h3>
      <form class="col s12" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">&#xE7FD;</i>
            <input type="text" class="validate" placeholder=" username" name="username" required="">
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">&#xE897;</i>
            <input type="password" class="validate" placeholder=" password" name="password" required="">
          </div>
          <div class="input-field col s12">
            <input type="submit" name="submit" class="waves-effect waves-light btn">
            <h5>Already Registered? <a href="index.php">Login</a></h5>
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
if (isset($_POST["submit"])) {
 
  $username = $_POST['username'];
  $password = $_POST['password'];
  $username = stripslashes($username);
  $password = stripslashes($password);
  $username = mysqli_real_escape_string($username);
  $password = mysqli_real_escape_string($password);

  $query = "INSERT INTO users (`username`, `password`) VALUES ('$username','$password')";


  mysqli_query($conn,$query);
  header('location: index.php');
    
 }

?>