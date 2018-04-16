<?php
error_reporting(0);
include 'dbconnect.php';

if(isset($_POST)) {

$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$ward = $_POST['ward'];
$hosp_no = $_POST['hosp_no'];
$investigation_required = $_POST['investigation_required'];
$clinical_details = $_POST['clinical_details'];
$consultant = $_POST['consultant'];
$date_1 = $_POST['date_1'];
$anisocytosis = $_POST['anisocytosis'];
$target_cells = $_POST['target_cells'];
$poikilocytosis = $_POST['poikilocytosis'];
$sickle_cells = $_POST['sickle_cells'];
$microcytosis = $_POST['microcytosis'];
$plai = $_POST['plai'];
$macrocytosis = $_POST['macrocytosis'];
$esr = $_POST['esr'];
$hypochromia = $_POST['hypochromia'];
$polychromasia = $_POST['polychromasia'];
$nucleated_rbc = $_POST['nucleated_rbc'];
$other_results = $_POST['other_results'];
$blast = $_POST['blast'];
$promyel = $_POST['promyel'];
$myel = $_POST['myel'];
$metamyel = $_POST['metamyel'];
$nelit = $_POST['nelit'];
$lymph = $_POST['lymph'];
$mono = $_POST['mono'];
$eosin = $_POST['eosin'];
$baso = $_POST['baso'];
$lab_no = $_POST['lab_no'];
$med_lab_scientist = $_POST['med_lab_scientist'];
$haematologist = $_POST['haematologist'];
$date_2 = $_POST['date_2'];



$query = "INSERT INTO `requests`(
`surname`, `firstname`, `age`, `sex`, `ward`, `hospital_number`, `investigation_required`, `clinical_details`, `consultant`, `date_1`, 
`anisocytosis`, `target_cells`, `poikilocytosis`, `sickle_cells`, `microcytosis`, `plai`, `macrocytosis`, `esr`, `hypochromia`, `nucleated_rbc`, 
`polychromasia`, `others`, `blast`, `promyel`, `myel`, `metamyel`, `nelit`, `lymph`, `mono`, `eosin`, 
`baso`, `lab_number`, `med_lab_scientist`, `haematologist`, `date_2`
) VALUES (
'$surname','$firstname','$age','$sex','$ward','$hosp_no','$investigation_required','$clinical_details','$consultant','$date_1',
'$anisocytosis','$target_cells','$poikilocytosis','$sickle_cells','$microcytosis','$plai','$macrocytosis','$esr','$hypochromia','$nucleated_rbc',
'$polychromasia','$other_results','$blast','$promyel','$myel','$metamyel','$nelit','$lymph','$mono','$eosin',
'$baso','$lab_no','$med_lab_scientist','$haematologist','$date_2')";

if (mysqli_query($conn,$query)) {
	echo "<script>alert('Test Upload Successful');</script>";
	sleep(3);
	header('location: dashboard.php');
}

}




?>