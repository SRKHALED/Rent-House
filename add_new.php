<?php 
session_start();
$id= $_SESSION["id"];
?>
<!DOCTYPE html>
<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "rent_home";
      $conn = new mysqli($servername,$username,$password,$dbname);
      if($conn->connect_error){
        die("connection failed : ".$conn->connect_error);
      }
      $sql="SELECT * FROM `user_` WHERE `userID` LIKE '$id'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
          $name = $row["name"];
          $mobile = $row["mobile"];
          $email = $row["email"];
          $address = $row["address"];
        }
      }
     $conn->close();
?>
<html lang="en">
<head>
  <title>বাসা ভাড়া.কম</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/modal.js"></script>
  <link rel="stylesheet" type="text/css" href="styleT.css"/>
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
        <a class="nav-link" href="home.php#search">Search</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="login.php"><button class="btn btn-outline-primary">Profile</button></a>
      </li>
      <li class="nav-item">
        <a href="logOut.php"><button class="btn btn-outline-primary">Log out</button></a>
      </li>
    </ul>
  </div>
</nav>
</header>
<div class="row">
<div class="col-md-2">
  <br><br>
  <div class="panel panel-info">
    <div class="panel panel-body">
      <img class="" src="pic/pp1.png" style="width:100%">
      <center><b><?php echo "<br>".$name;
      ?></b></center><br>
      <center>
      <span class="input-group-addon">
      <a href="home.php"><span class="glyphicon glyphicon-home"></span>  Home</a></span></br></br>
      <span class="input-group-addon">
      <a href="edit_pro.php"><span class="glyphicon glyphicon-user"></span>  Edit Profile</a></span></br></br>
      <span class="input-group-addon">
      <a href="add_new.php"><span class="glyphicon glyphicon-tags"></span> Add New Post</a></span></br></br>
      <span class="input-group-addon">
      <a href="view.php"><span class="glyphicon glyphicon-book"></span>  All Post Information</a></span></br></br>
    </center>
    </div>
  </div>
</div>
<div class="col-md-1">
</div>
<div class="col-md-6">
	<br>

  <div class="panel panel-info">
  	<center><b><h3>ADD NEW POST</h3></b></center>
  	<br>
    <div class="panel panel-body">
    	<form method="post" action="add.php" enctype="multipart/form-data">	
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="type">Type</label>
			      	<select class="form-control" name="type">
            			<option>Type</option>
            			<option value="Apartments">Apartments</option>
            			<option value="House">House</option>
            			<option value="Room">Room</option>
          			</select >
			    </div>
			    <div class="form-group col-md-4">
			    	<label for="type">Number Of Beds Rooms</label>
			      	<select class="form-control" name="bed">
            			<option>Beds</option>
            			<option value="1">01</option>
            			<option value="2">02</option>
            			<option value="3">03</option>
            			<option value="4">04</option>
            			<option value="5">05</option>
          			</select >
			    </div>
			    <div class="form-group col-md-4">
			    	<label for="type">Number Of Baths </label>
			      	<select class="form-control" name="bath">
            			<option>Baths</option>
            			<option value="1">01</option>
            			<option value="2">02</option>
            			<option value="3">03</option>
            			<option value="4">04</option>
            			<option value="5">05</option>
          			</select >
			    </div>
			</div>
			 <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="price">Rent/month </label>
			      <input type="text" class="form-control" name="price" placeholder="Price in Taka" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="area">Total Area</label>
			      <input type="text" class="form-control" name="area" placeholder="Total Area in Square Feet" required>
			    </div>
			 </div>
			 <div class="form-row">
			    <div class="form-group col-md-4">
			    	<label for="area">Division</label>
			      	<select class="form-control" name="division">
            			<option>--</option>
            			<option value="Dhaka">Dhaka</option>
						<option value="Sylhet">Sylhet</option>
						<option value="Chittagang">Chittagang</option>
						<option value="Khulna">Khulna</option>
						<option value="Rajsahi">Rajsahi</option>
          			</select >
			    </div>
			    <div class="form-group col-md-4">
			    	<label for="area">City</label>
			      	<select class="form-control" name="city">
            			<option>--</option>
            			<option value="Dhaka">Dhaka</option>
      						<option value="Sylhet">Sylhet</option>
      						<option value="Chittagang">Chittagang</option>
      						<option value="Khulna">Khulna</option>
      						<option value="Rajsahi">Rajsahi</option>
          			</select >
			    </div>
			    <div class="form-group col-md-4">
			    	<label for="area">Region</label>
			      	<select class="form-control" name="region">
            			<option>--</option>
            			<option value="North">North</option>
                  <option value="South">South</option>
                  <option value="East">East</option>
                  <option value="West">West</option>
          			</select >
			    </div>
			 </div>
			 <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="rod">Road Number </label>
			      <input type="text" class="form-control" name="road" placeholder="Road Number" required>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="House">House Number </label>
			      <input type="text" class="form-control" name="house" placeholder="House Number" required>
			    </div>
          <div class="form-group col-md-4">
            <label for="rod">Picture </label>
            <input type="file" class="form-control" name="p1"  required>
          </div>
			 </div>
			 <br>
			 <center>
			  <button type="submit" class="btn btn-primary" style="margin-left: 17%;" name="Register">ADD</button>
			 </center>  
		</form>
     </div>
    </div>
  </div>
</div>
<br><br>
    <footer><br>Developed By Khaled & Tahmid</footer>
	<script src="js/jquery-slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</body>
</html>