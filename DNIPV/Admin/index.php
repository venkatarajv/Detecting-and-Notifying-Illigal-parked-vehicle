<!DOCTYPE html>
<?php 
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("location: login.php");
}  

require "config.php"; 

?>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">

<title>D&N Illigal Parked Vehicle</title>

<!-- Bootstrap core CSS-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script></head>

<body class="fixed-nav sticky-footer bg-active" id="page-top">

<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-dark  fixed-top"style="background-color: purple;" id="mainNav">

<a class="navbar-brand" href="index.php">D&N Illigal Parked Vehicle

</a>
<a class="navbar-text" href="index.php">Welcome ,<?php 
$username=$_SESSION['username'];
echo "<font color=white>$username</font>";
?> 
	
</a>

<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarResponsive">

<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">

<a class="nav-link" href="index.php">

<i class="fa fa-fw fa-dashboard"></i>

<span class="nav-link-text"></span>

</a>

</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">

<a class="nav-link" href="product.php">

<i class="fa fa-check-square"></i>

<span class="nav-link-text"></span>

</a>

</li>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">

<a class="nav-link" href="register.php">

<i class="fa fas fa-user"></i>

<span class="nav-link-text"></span>

</a>

</li>

</ul>

<ul class="navbar-nav sidenav-toggler">

<li class="nav-item">

<a class="nav-link text-center" id="sidenavToggler">

<i class="fa fa-fw fa-angle-left"></i>

</a>

</li>

</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<i class="fa fa-fw fa-envelope"></i>

<span class="d-lg-none">Messages

<span class="badge badge-pill badge-primary">12 New</span>

</span>

<span class="indicator text-primary d-none d-lg-block">

<i class="fa fa-fw fa-circle"></i>

</span>

</a>

<div class="dropdown-menu" aria-labelledby="messagesDropdown">

<h6 class="dropdown-header">New Messages:</h6>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<strong>David Miller</strong>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<strong>Jane Smith</strong>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<strong>John Doe</strong>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item small" href="#">View all messages</a>

</div>

</li>

<li class="nav-item dropdown">

<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<i class="fa fa-fw fa-bell"></i>

<span class="d-lg-none">Alerts

<span class="badge badge-pill badge-warning">6 New</span>

</span>

<span class="indicator text-warning d-none d-lg-block">

<i class="fa fa-fw fa-circle"></i>

</span>

</a>

<div class="dropdown-menu" aria-labelledby="alertsDropdown">

<h6 class="dropdown-header">New Alerts:</h6>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<span class="text-success">

<strong>

<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>

</span>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<span class="text-danger">

<strong>

<i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>

</span>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item" href="#">

<span class="text-success">

<strong>

<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>

</span>

<span class="small float-right text-muted">11:21 AM</span>

<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>

</a>

<div class="dropdown-divider"></div>

<a class="dropdown-item small" href="#">View all alerts</a>

</div>

</li>

<li class="nav-item">

<form class="form-inline my-2 my-lg-0 mr-lg-2">

<div class="input-group">

<input class="form-control" type="text" placeholder="Search for...">

<span class="input-group-append">

<button class="btn btn-primary" type="button">

<i class="fa fa-search"></i>

</button>

</span>

</div>

</form>

</li>

<li class="nav-item">

<a class="nav-link" data-toggle="modal" data-target="#exampleModal">

<i class="fa fa-fw fa-sign-out"></i>Logout</a>

</li>

</ul>

</div>

</nav>

<div class="content-wrapper">

<div class="container-fluid">

<!-- Breadcrumbs-->

<ol class="breadcrumb">

<li class="breadcrumb-item">

<a href="#">Dashboard</a>

</li>

<li class="breadcrumb-item active">My Dashboard</li>

</ol>

<!-- Icon Cards-->

<?php
$sqll = "SELECT  count(Name),count(Vehicle_No),
count(Mobile_No),count(Status) from vehicle ;";

if (mysqli_query($conn, $sqll))

{

echo "";

}

else

{

echo "Error: " . $sqll . "<br>" . mysqli_error($conn);

}

$result = mysqli_query($conn, $sqll);

if (mysqli_num_rows($result) > 0)

{

// output data of each row

while($row = mysqli_fetch_assoc($result))

{

?>

<div class="row">

<div class="col-xl-3 col-sm-6 mb-3">

<div class="card text-white bg-primary o-hidden h-100">

<div class="card-body">

<div class="card-body-icon">

<i class="fa fa-fw fa-comments"></i>

</div>

<div class="mr-5">Number Users:<br/><b>

	<?php echo $row['count(Name)'];?>
		
	</b></div>

</div>

<a class="card-footer text-white clearfix small z-1" href="#">

<span class="float-left">View Details</span>

<span class="float-right">

<i class="fa fa-angle-right"></i>

</span>

</a>

</div>

</div>

<div class="col-xl-3 col-sm-6 mb-3">

<div class="card text-white bg-warning o-hidden h-100">

<div class="card-body">

<div class="card-body-icon">

<i class="fa fa-fw fa-list"></i>

</div>

<div class="mr-5">
  Numbers Vehicles:<br/><b><?php echo $row['count(Vehicle_No)'];?></b></div>

</div>


<a class="card-footer text-white clearfix small z-1" href="#">

<span class="float-left">View Details</span>

<span class="float-right">

<i class="fa fa-angle-right"></i>

</span>

</a>

</div>

</div>

<div class="col-xl-3 col-sm-6 mb-3">

<div class="card text-white bg-success o-hidden h-100">

<div class="card-body">

<div class="card-body-icon">

<i class="fa fa-fw fa-shopping-cart"></i>

</div>

<div class="mr-5">
  Mobile Numbers:<br/><b><?php echo $row['count(Mobile_No)'];?></b>
</div>

</div>

<a class="card-footer text-white clearfix small z-1" href="#">

<span class="float-left">View Details</span>

<span class="float-right">

<i class="fa fa-angle-right"></i>

</span>

</a>

</div>

</div>

<div class="col-xl-3 col-sm-6 mb-3">

<div class="card text-white bg-danger o-hidden h-100">

<div class="card-body">

<div class="card-body-icon">

<i class="fa fa-fw fa-support"></i>

</div>

<div class="mr-5">Number Case Status:<br/><b><?php echo $row['count(Status)'];?></b></div>

</div>

<a class="card-footer text-white clearfix small z-1" href="#">

<span class="float-left">View Details</span>

<span class="float-right">

<i class="fa fa-angle-right"></i>

</span>

</a>

</div>

</div>

</div>
<?php

}

}

else

{

echo '0 results';

}


$sqlll = "SELECT Mobile_No from vehicle";

if (mysqli_query($conn, $sqlll))

{

echo "";

}

else

{

echo "Error: " . $sqlll . "<br>" . mysqli_error($conn);

}

$result = mysqli_query($conn, $sqlll);

$number=array();

if (mysqli_num_rows($result) > 0)

{

// output data of each row

while($row = mysqli_fetch_assoc($result))

{

$number[]=$row['Mobile_No'];

}

}

else

{

echo "0 results";

}

$number_formated= "[".implode(",",$number)."]";

?>

<script type="text/javascript">

window.dataf= <?php echo $number_formated; ?>

</script>

<!-- Area Chart Example-->

<div class="card mb-3">

<div class="card-header">

<i class="fa fa-area-chart"></i> Near Parking Areas</div>

<div class="card-body">


  <?php include("maps.php"); ?>


</div>

<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

</div>
</div>
<br>

<!-- Example DataTables Card-->

<div class="card mb-3">

<div class="card-header">

<i class="fa fa-table"></i>Last 10 Records</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead>

<tr>

<th>ID</th>

<th>Name of Owner</th>

<th>Vehicle No</th>

<th>Mobile Number</th>

<th>Email ID</th>
<th>Case Status</th>

</tr>

</thead>

<tfoot>

<tr>
<th>ID</th>

<th>Name of Owner</th>

<th>Vehicle Number</th>

<th>Mobile Number</th>

<th>Email ID</th>

<th>Case Status</th>

</tr>

</tfoot>

<?php


$sql = 'SELECT * FROM (
   SELECT * FROM vehicle ORDER BY Id DESC LIMIT 10)Var1
   ORDER BY id ASC;';

if (mysqli_query($conn, $sql)) {

echo "";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}

$count=1;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>

<tbody>

<tr>

<th>

<?php echo $row['Id']; ?>

</th>

<td>

<?php echo $row['Name']; ?>

</td>

<td>

<?php echo $row['Vehicle_No']; ?>

</td>

<td>

<?php echo $row['Mobile_No']; ?>

</td>

<td>

<?php echo $row['Email_id']; ?>

</td>
<td>
<?php
  if($row['Status']=="Pending"){
 echo "<b><font color=blue>". $row['Status']."</font></b>";}

 else if($row['Status']=="Booked"){
 echo "<b><font color=red>". $row['Status']."</font></b>";}
 else if($row['Status']=="Cancelled"){
 echo "<b><font color=green>". $row['Status']."</font></b>";
}

?>
</td>

</tr>

</tbody>

<?php

$count++;

}

} else {

echo '0 results';

}

?>

</table>

</div>

</div>

<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

</div>

</div>

<!-- /.container-fluid-->

<!-- /.content-wrapper-->

<footer class="sticky-footer">

<div class="container">

<div class="text-center">

<small>Copyright © Your Website 2018</small>

</div>

</div>

</footer>

<!-- Scroll to Top Button-->

<a class="scroll-to-top rounded" href="#page-top">

<i class="fa fa-angle-up"></i>

</a>

<!-- Logout Modal-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

<button class="close" type="button" data-dismiss="modal" aria-label="Close">

<span aria-hidden="true">×</span>

</button>

</div>

<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

<div class="modal-footer">

<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

<a class="btn btn-primary" href="logout.php">Logout</a>

</div>

</div>

</div>

</div>

<!-- Bootstrap core JavaScript-->

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->

<script src="vendor/chart.js/Chart.min.js"></script>

<script src="vendor/datatables/jquery.dataTables.js"></script>

<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->

<script src="js/sb-admin.min.js"></script>

<!-- Custom scripts for this page-->

<script src="js/sb-admin-datatables.min.js"></script>

<script src="js/sb-admin-charts.min.js"></script>

</div>

</body>

</html>