<!DOCTYPE html>
<html lang="en">
<head>
  <title>বাসা ভাড়া.কম(Admin)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/modal.js"></script>
  <link rel="stylesheet" type="text/css" href="styleT.css"/>
  <style type="text/css">
    .header{
      background-image: url(pic/bp.jpg);
      background-size: cover;
      color: white;
    }
  </style>
</head>

<body>
	<div class="header">
   <center> <br><h1>বাসা ভাড়া.কম</h1><br> </center> 
 </div>
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10">
	<br>

  <div class="panel panel-info">
  	<center><b><h3>ALL POST</h3></b></center>
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
          $sql="SELECT * FROM `post` ORDER BY `postID` ";
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
            echo "<td><b>"."<form action='delet.php' method='post'>
                    <input type='hidden' name='id' value='".$pid."'/>
                    <input type='submit' class='btn btn-outline-primary1' value='Delete'/>
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