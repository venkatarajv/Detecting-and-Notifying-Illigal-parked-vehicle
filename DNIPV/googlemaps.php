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
      <a class="nav-link" href="admin/login.php"><font color="white">Admin</font></a>
  </div>
  </ul>
  
</nav>
<br>
 <div class="container">
   <div class="card card-login mx-auto mt-5">
     <div class="card-header"><b>Parking Places Near You</b></div>
     <div class="card-body">
       <div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(13.243090,77.704903),
  zoom:20,
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-qQEdts6tZgz0GTA4AncB5udl9Hy3rSg&callback=myMap"></script>

</body>

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
