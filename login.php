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
  <script src="js/modal.js"></script>
  <link rel="stylesheet" type="text/css" href="styleT.css"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>

<body>
  <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "rent_home";
      $conn = new mysqli($servername,$username,$password,$dbname);
      if($conn->connect_error){
        die("connection failed : ".$conn->connect_error);
      }
      if (isset($_SESSION["id"])){
        $id=$_SESSION["id"];
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

      }
      else{
        $sql="SELECT * FROM `user_` WHERE `email` LIKE '$_POST[email]' AND pass LIKE '$_POST[pass]'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            $id = $row["userID"];
            $_SESSION["id"]=$id;
            $name = $row["name"];
            $mobile = $row["mobile"];
            $email = $row["email"];
            $address = $row["address"];
          }
        }
        else{
        ?>
          <script >
             Swal.fire({
                  position: 'center',
                  type: 'info',
                  title: 'Invalid E-mail or Password',
                  showConfirmButton: false,
                  timer: 2000
                })
          </script>
          <?php
          header('refresh:2 ;url=home.php');
        }
      }
  ?>
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
  <br>
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
<div class="col-md-8">
  <div class="panel panel-info">
    <div class="panel panel-body">
<br>
	<?php
        echo "<div class='tet'>"."<b>"."Name :"."</b><br><br>".$name."<hr>";
        echo "<b>"."Cell : "."</b><br><br>".$mobile."<hr>";
        echo "<b>"."E-mail : "."</b><br><br>".$email."<hr>";
        echo "<b>"."Address : "."</b><br><br>".$address."<hr></div>";
      $conn->close();
    ?>
    <br><br>
      </div>
    </div>
  </div>
</div>
    <footer><br>Developed By Khaled & Tahmid</footer>
	<script src="js/jquery-slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</body>
</html>