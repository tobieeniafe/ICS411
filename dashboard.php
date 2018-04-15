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
  <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body bgcolor="#F6F1F1">

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

  <div class="container">
    <!--====================
      container start 
      =======================-->

    <h3 class="center">Haematology Request Form</h3>

    <div class="row">
      <div class="col m3">
        <label>SURNAME</label>
        <input class="input-field" type="text" name="surname">
      </div>
      <div class="col m3">
        <label>FIRSTNAME</label>
        <input class="input-field" type="text" name="firstname">
      </div>
      <div class="col m1">
        <label>AGE</label>
        <input class="input-field" type="number" name="age">
      </div>
      <div class="col m1">
        <label>SEX</label>
        <select>
          <option value="m">M</option>
          <option value="f">F</option>
        </select>
      </div>
      <div class="col m2">
        <label>WARD / CLINIC</label>
        <input class="input-field" type="text" name="ward">
      </div>
      <div class="col m2">
        <label>HOSP. NO</label>
        <input class="input-field" type="text" name="hosp_no">
      </div>
    </div>  

    <div class="row">
      <div class="col m3">
        <label>INVESTIGATION REQUIRED</label>
        <textarea class="materialize-textarea" name="investigation_required"></textarea>
      </div>
      <div class="col m3">
        <label>CLINICAL DETAILS</label>
        <textarea class="materialize-textarea" name="clinical_details"></textarea>
      </div>
      <div class="col m3">
        <label>CONSULTANT</label>
        <input class="input-field" type="text" name="consultant">
      </div>
      <div class="col m3">
        <label>DATE</label>
        <input class="input-field" type="date" name="date_1">
      </div>
    </div>  


    <div class="row">
      <div class="col m3">
      	<table>
          <tbody>
            <tr>
              <td>Hb</td>
              <td>g/dl</td>
            </tr>
            <tr>
              <td>PCV</td>
              <td>%</td>
            </tr>
            <tr>
              <td>RBC</td>
              <td>X10^12/L</td>
            </tr>
            <tr>
              <td>MCV</td>
              <td>fl</td>
            </tr>
            <tr>
              <td>MCH</td>
              <td>pg</td>
            </tr>
            <tr>
              <td>MCHC</td>
              <td>% or g/dl</td>
            </tr>
            <tr>
              <td>Retc</td>
              <td>X10^9/L</td>
            </tr>
            <tr>
              <td>WBC</td>
              <td>X10^9/L</td>
            </tr>
            <tr>
              <td>Plat</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!--====================
      forms2 start 
      =======================-->
      <div class="col m5">
        <div class="col m6">
          <label>ANISOCYTOSIS</label>
          <input class="input-field" type="text" name="anisocytosis">
        </div>
        <div class="col m6">
          <label>TARGET CELLS</label>
          <input class="input-field" type="text" name="target_cells">
        </div>
        <div class="col m6">
          <label>POIKILOCYTOSIS</label>
          <input class="input-field" type="text" name="poikilocytosis">
        </div>
        <div class="col m6">
          <label>SICKLE CELLS</label>
          <input class="input-field" type="text" name="sickle_cells">
        </div>
        <div class="col m6">
          <label>MICROCYTOSIS</label>
          <input class="input-field" type="text" name="microcytosis">
        </div>
        <div class="col m6">
          <label>PLAI (ON FILM)</label>
          <input class="input-field" type="text" name="plai">
        </div>
        <div class="col m6">
          <label>MACROCYTOSIS</label>
          <input class="input-field" type="text" name="macrocytosis">
        </div>
        <div class="col m6">
          <label>ESR</label>
          <input class="input-field" type="text" name="esr">
        </div>
        <div class="col m6">
          <label>HYPOCHROMIA</label>
          <input class="input-field" type="text" name="hypochromia">
        </div>
        <div class="col m6">
          <label>POLYCHROMASIA</label>
          <input class="input-field" type="text" name="polychromasia">
        </div>
        <div class="col m6">
          <label>NUCLEATED RBC</label>
          <textarea class="materialize-textarea" name="nucleated_rbc"></textarea>
        </div>
        <div class="col m12">
          <label>OTHER RESULTS / COMMENTS</label>
          <textarea class="materialize-textarea" name="other_results"></textarea>
        </div>
      </div>
      <!--====================
      forms2 end 
      =======================-->


      <!--====================
      table start 
      =======================-->
      <div class="col m4">
        <table class="bordered">
          <tbody>
            <tr>
              <td>BLAST</td>
              <td><input type="text" placeholder="%" name="blast"></td>
            </tr>
            <tr>
              <td>PROMYEL</td>
              <td><input type="text" placeholder="%" name="promyel"></td>
            </tr>
            <tr>
              <td>MYEL</td>
              <td><input type="text" placeholder="%" name="myel"></td>
            </tr>
            <tr>
              <td>METAMYEL</td>
              <td><input type="text" placeholder="%" name="metamyel"></td>
            </tr>
            <tr>
              <td>NELIT</td>
              <td><input type="text" placeholder="%" name="nelit"></td>
            </tr>
            <tr>
              <td>LYMPH</td>
              <td><input type="text" placeholder="%" name="lymph"></td>
            </tr>
            <tr>
              <td>MONO</td>
              <td><input type="text" placeholder="%" name="mono"></td>
            </tr>
            <tr>
              <td>EOSIN</td>
              <td><input type="text" placeholder="%" name="eosin"></td>
            </tr>
            <tr>
              <td>BASO</td>
              <td><input type="text" placeholder="%" name="baso"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--====================
      table end 
      =======================-->
    </div>



    <div class="row">
      <div class="col m3"><h6><b>+ Mild ++Moderate +++ Severe</b></h6></div>
      <div class="col m9">
        <div class="col m3">
          <label>LAB. NO.</label>
          <input class="input-field" type="text" name="lab_no">
        </div>
        <div class="col m3">
          <label>MED. LAB. SCIENTIST</label>
          <input class="input-field" type="text" name="med_lab_scientist">
        </div>
        <div class="col m3">
          <label>HAEMATOLOGIST</label>
          <input class="input-field" type="text" name="haematologist">
        </div>
        <div class="col m3">
          <label>DATE</label>
          <input class="input-field" type="date" name="date_2">
        </div>
      </div>
    </div>

    <div class="row center">
      <button class="btn">submit</button>
    </div>

    <!--  ====================
      container end 
      =======================-->
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
