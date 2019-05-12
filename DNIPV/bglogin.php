<?php
if (isset($_SESSION['Vehicle_No'])) {
header('Location: index.php');
}

require "config.php";


$Vehicle_No = mysqli_real_escape_string($conn, $_POST['Vehicle_No']);
$Mobile_No = mysqli_real_escape_string($conn, $_POST['Mobile_No']);
if (empty($Vehcle_No)) {
array_push($errors, "Vehcle_No is required");
}
if (empty($Mobile_No)) {
array_push($errors, "Mobile_No is required");
}
if (count($errors) == 0) {
$query = "SELECT * FROM vehicle WHERE Vehicle_No='$Vehicle_No' AND Mobile_No='$Mobile_No'";
$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) == 1) {
$_SESSION['Vehicle_No'] = $Vehicle_No;
$_SESSION['success'] = "You are now logged in";
header('location: index.php');
}else {
array_push($errors, "Wrong Vehcle_No/Mobile_No combination");
}
}


/*require "config.php";
$Vehicle_No=$_POST['Vehicle_No'];
$Mobile_No=$_POST['Mobile_No'];
print($Vehicle_No." and".$Mobile_No);
$query = "SELECT * FROM vehicle WHERE Vehicle_No='$Vehicle_No' AND Mobile_No='$Mobile_No'";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) == 1) {
$_SESSION['Vehcle_No'] = $Vehcle_No;
$_SESSION['success'] = "You are now logged in";
header('location: index.php');
}else {
	print("invalid creditionals");
      }
*/

?>
