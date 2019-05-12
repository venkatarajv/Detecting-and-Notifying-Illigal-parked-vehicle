<?php 
if (isset($_SESSION['Vehicle_No'])) {
header('Location: index.php');
}
if(isset($_POST['login_user']) )
{
  session_start();
include('config.php'); 
$Vehicle_No=$_POST['Vehicle_No'];
$Mobile_No=$_POST['Mobile_No'];
if($Vehicle_No==''||$Vehicle_No==null){
  $errors="Please Enter Vehicle Number";
}
 else if($Mobile_No==''||$Mobile_No==null){
  $errors="Please Enter Mobile Number";
}else{

$query = "SELECT * FROM vehicle WHERE Vehicle_No='$Vehicle_No' AND Mobile_No='$Mobile_No'";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) == 1) {
$_SESSION['Vehicle_No'] = $Vehicle_No;
//$_SESSION['success'] = "You are now logged in";
//header('location: index.php');
echo "<script>window.open('index.php','_self')</script>";

}
else {
  $errors="Invalid Vehicle Number or Mobile Number";
    }

  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Detecting and Notifying Illigal Parked Vehicle</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body background="img/2.jpg">

<nav class="navbar navbar-expand-sm navbar-dark"
style="background-color: purple;">
      <!-- Links -->

  <!-- Navbar text-->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"><font color="white">Home</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php"><font color="white">Login</font></a>
    </li>
  </ul>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="googlemaps.php"><font color="white">Maps</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><font color="white">About Us</font></a>
    </li>
  <div class="float float-right">
      <a class="nav-link" href="Admin/login.php"><font color="white">Admin</font></a>
  </div>
  </ul>
  
</nav>
<br>
 <div class="container">
   <div class="card card-login mx-auto mt-5">
     <div class="card-header"><b>User Login</b></div>
     <div class="card-body">
       <form method="post" action="#">
          <?php 
          if(isset($_POST['login_user']) )
          {
          print("<div class='text-center'>");
          echo "<b><font color=red>".$errors."</font></b></div>" ;
          }
          ?>
         <div class="form-group">
           <label for="exampleInputEmail1">Vehicle No</label>
           <input class="form-control"  type="text" name="Vehicle_No">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Mobile No</label>
           <input class="form-control"  type="password" name="Mobile_No">
         </div>
         <div class="form-group">
           <div class="form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox"> Remember Password</label>
           </div>
         </div>
         <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
       </form>
       
      <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
       </div>
     </div>
   </div>
 </div>
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
