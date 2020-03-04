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
<div class="col-md-9">
	<br>

  <div class="panel panel-info">
  	<center><b><h3>VIEW ALL POST</h3></b></center>
  	<br>
    <div class="panel panel-body">
      <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "rent_home";
          $conn = new mysqli($servername,$username,$password,$dbname);
          if($conn->connect_error){
            die("connection failed : ".$conn->connect_error);
          }
          $sql="SELECT * FROM `post` WHERE `userID` LIKE '$id' ORDER BY `post`.`postID` DESC";
           $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
              $pid = $row["postID"];
              $type = $row["type"];
              $nr = $row["numberOfRoom"];
              $nb = $row["numberOfBath"];
              $p = $row["price"];
              $a = $row["area"];
              $d = $row["division"];
              $c = $row["city"];
              $r = $row["region"];
              $ro = $row["road"];
              $h = $row["house"];
              $p1 = $row["pic1"];
             // $p2 = $row["pic2"];
              //$p3 = $row["pic3"];
              $ld = $row["exp_day"];
            ?>
            <div class="row">
            <div class="col-md-6">
              <img src="<?php echo $p1; ?>" height="100%" width="100%"/>
            </div>
            <div class="col-md-6">
              <table class="table table-bordered" width="100%" height = "100%" >
                <tbody>

            <?php
            echo "<tr><td><b>"."Type : "."</b>".$type."<br></td>";
            echo "<td><b>"."Rent : "."</b>".$p." BDT<br></td></tr>";
            echo "<tr><td><b>"."Number Of Beds : "."</b>".$nr."<br></td>";
            echo "<td><b>"."Number Of Bath : "."</b>".$nb."<br></td></tr>";
            echo "<tr><td><b>"."Total Area : "."</b>".$a." Sr. Ft.<br></td>";
            echo "<td><b>"."Division : "."</b>".$d."<br></td></tr>";
            echo "<tr><td><b>"."City : "."</b>".$c."<br></td>";
            echo "<td><b>"."Region : "."</b>".$r."<br></td></tr>";
            echo "<tr><td><b>"."Post Expire Date : "."</b>".$ld."</td>";
            echo "<td><b>"."<form action='renew.php' method='post'>
                    <input type='hidden' name='id' value='".$pid."'/>
                    <input type='submit' class='btn btn-outline-primary' value='Renew'/>
                    </form></td></tr>";
            echo "</tbody></table></div></div><hr>";
            }
        }
      $conn->close();
    ?>
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