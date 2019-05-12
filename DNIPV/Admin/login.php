<?php 
if(isset($_SESSION['username'])){
  header('Location:index.php');
}

if(isset($_POST['login_admin']))
{
include('config.php'); 
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if($username==''||$username==null){
  $errors="Please Enter Username";
}
 else if($password==''||$password==null){
  $errors="Please Enter Password";
}else{

$query = "SELECT * FROM Admin WHERE UserName='$username' AND Password='$password'";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
//header('location: index.php');

echo "<script>window.open('index.php','_self')</script>";

}
else {
  $errors="Invalid username or password";
    }
}
  }
?>
<!DOCTYPE html>
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
</head>
<body class="bg-dark" background="img/2.jpg">
 <div class="container">
   <div class="card card-login mx-auto mt-5">
     <div class="card-header">Admin Login</div>
     <div class="card-body">
       <form method="post" action="#">
          <?php 
          if(isset($_POST['login_admin']))
          {
          print("<div class='text-center'>");
          echo ("<font color=red>".$errors."</font></div>");
          } ?>
         <div class="form-group">
           <label for="exampleInputEmail1">User Name</label>
           <input class="form-control"  type="text" name="username">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input class="form-control"  type="password" name="password">
         </div>
         <div class="form-group">
           <div class="form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox"> Remember Password</label>
           </div>
         </div>
         <button type="submit" class="btn btn-primary btn-block" name="login_admin">Login</button>
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
