<?php
error_reporting(0);
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
<body class="body">

  <nav class="" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo white-text"><h4>HAEMATOLOGY</h4></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="dashboard.php">New Test</a></li>
        <li><a href="analysis.php">Search</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="dashboard.php">New Test</a></li>
        <li><a href="analysis.php">Search</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">&#xE5D2;</i></a>
    </div>
  </nav>


<div class="container" style="min-height: 75vh">
  <h3 class="center">Search Page</h3>



<form action="" method="post">
  <div class="row">
    <div class="col s10">
      <input type="text" class="input-field" placeholder="  search" name="search">
    </div>
    <div class="col s2">
      <button class="btn waves-effect waves-light" type="submit" name="submit">Search
        <i class="material-icons right">&#xE8B6;</i>
      </button>
    </div>
  </div>
</form>

    <table>
        <thead>
          <tr>
              <th>Surname</th>
              <th>Firstname</th>
              <th>Ward/Clinic</th>
              <th>Age</th>
              <th>Consultant</th>
              <th>Haematologist</th>
              <th>Hospital number</th>
              <th>Date</th>
          </tr>
        </thead>

        <tbody>
          <?php 
          if ($_POST) {
            $search = $_POST['search'];
            $query = "SELECT * FROM requests WHERE surname like '%$search%' or surname like '%$search%' or ward like '%$search%' or hospital_number like '%$search%'";
          }
          // else{
          //   $query = "SELECT * FROM requests";
          // }

          $result = mysqli_query($conn,$query);
          
          if ($result = mysqli_query($conn,$query)) {
            $row_count = mysqli_num_rows($result);

            if ($row_count == 0 ) {
              echo "<h3> sorry, there are no results with your query </h3>";
            }
          }

          
          while ($data = mysqli_fetch_assoc($result)) {?>
          <tr>
            <td><?php echo $data['surname']; ?></td>
            <td><?php echo $data['firstname']; ?></td>
            <td><?php echo $data['ward']; ?></td>
            <td><?php echo $data['age']; ?></td>
            <td><?php echo $data['consultant']; ?></td>
            <td><?php echo $data['haematologist']; ?></td>
            <td><?php echo $data['hospital_number']; ?></td>
            <td><?php echo $data['date_1']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
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
