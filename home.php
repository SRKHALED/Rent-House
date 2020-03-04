<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>বাসা ভাড়া.কম</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="styleT.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<header>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php"><b>বাসা ভাড়া.কম</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rent.php">Rent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#search">Search</a>
      </li>
    </ul>
    <?php
          if (isset($_SESSION["id"])){
    ?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="login.php"><button class="btn btn-outline-primary">Profile</button></a>
      </li>
      <li class="nav-item">
        <a href="logOut.php"><button class="btn btn-outline-primary">Log out</button></a>
      </li>
    </ul>
    <?php 
    }
    else{
    ?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="signup.php"><button class="btn btn-outline-primary">Sign up</button></a>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-primary" id="myBtn">Log in</button>
      </li>
    </ul>
  <?php } ?>
  </div>
</nav>
</header>
  <!-- carousel -->
<center>
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="pic/h0.jpg">
      </div>
      <div class="carousel-item">
        <img src="pic/h4.jpg">
      </div>
      <div class="carousel-item">
        <img src="pic/h3.jpg">
      </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <br>
  <!-- Search  -->
<div id="search">  
  <div class="col-md-8 box">
    <h3>Find Your Lovely Home</h3>
    <h5>Perfect home with Affordable Budget</h5>
    <form method="post" action="search.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <select class="form-control" name="division">
            <option>Select Division</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Chittagang">Chittagang</option>
            <option value="Khulna">Khulna</option>
            <option value="Rajsahi">Rajsahi</option>
           </select>
          <select class="form-control" name="type">
            <option>Select Type of Home</option>
            <option value="Apartments">Apartments</option>
            <option value="House">House</option>
            <option value="Room">Room</option>
          </select >
        </div>
        <div class="form-group col-md-6">
          <select class="form-control" name="city">
            <option>Select City</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Chittagang">Chittagang</option>
            <option value="Khulna">Khulna</option>
            <option value="Rajsahi">Rajsahi</option>
          </select>
          <select class="form-control" name="region">
            <option>Select Range</option>
            <option value="North">North</option>
            <option value="South">South</option>
            <option value="East">East</option>
            <option value="West">West</option>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-primary">GO!</button>
    </form>
  </div>
</div>
</center>
<br>
<footer>
  <br>
  Developed By Khaled & Tahmid
  <br>
</footer>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <h2>Log in</h2>
    </div>
    <div class="modal-body">
      <form  method="post" action="li.php"> 
      <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-12">
            <label for="Pass">Password</label>
            <input type="Password" class="form-control" name="pass" placeholder="Password" required>
          </div>
       </div>
        <button type="submit" class="btn btn-primary">log in</button>
        <a href="signup.php"><button  class="btn btn-outline-primary">Sign up</button> </a>     
    </form>
    </div>
    <div class="modal-footer">
      <span class="close">&times;</span>
    </div>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>