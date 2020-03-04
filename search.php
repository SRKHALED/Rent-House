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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
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
  <div class="panel-body">
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
        <br>
        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "rent_home";
          $conn = new mysqli($servername,$username,$password,$dbname);
          if($conn->connect_error){
            die("connection failed : ".$conn->connect_error);
          }
          $sql="SELECT * FROM `post` WHERE `division` LIKE '$_POST[division]' AND `city` LIKE '$_POST[city]' AND `region` LIKE '$_POST[region]' AND `type` LIKE '$_POST[type]'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
              $id = $row["postID"];
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
              //$p2 = $row["pic2"];
              //$p3 = $row["pic3"];
              $ld = $row["exp_day"];
              $ui = $row["userID"];

              $sql1="SELECT `name`,`mobile` FROM `user_` WHERE `userID` LIKE '$ui' ";
              $result1 = $conn->query($sql1);
              if ($result1->num_rows > 0) {
                while($row = $result1->fetch_assoc()){
                  $name = $row["name"];
                  $mobile = $row["mobile"];
                }
              }
            ?>
            <div class="row">
            <div class="col-md-6">
              <img src="<?php echo $p1; ?>" height="100%" width="100%"/>
            </div>
            <div class="col-md-6">
              <table class="table table-bordered" width="100%" height = "100%" >
                <tbody>

            <?php
            echo "<tr><td><b>"."Post by : "."</b>".$name."<br></td>";
            echo "<td><b>"."Mobile No : "."</b>".$mobile."<br></td></tr>";
            echo "<tr><td><b>"."Type : "."</b>".$type."<br></td>";
            echo "<td><b>"."Rent : "."</b>".$p." BDT<br></td></tr>";
            echo "<tr><td><b>"."Number Of Beds : "."</b>".$nr."<br></td>";
            echo "<td><b>"."Number Of Bath : "."</b>".$nb."<br></td></tr>";
            echo "<tr><td><b>"."Total Area : "."</b>".$a." Sr. Ft.<br></td>";
            echo "<td><b>"."Division : "."</b>".$d."<br></td></tr>";
            echo "<tr><td><b>"."City : "."</b>".$c."<br></td>";
            echo "<td><b>"."Region : "."</b>".$r."<br></td></tr>";
            echo "</tbody></table></div></div><hr>";
            }
        }
        else{
          ?>
          <script >
             Swal.fire({
                position: 'center',
                type: 'info',
                title: 'Opps... Not available',
                showConfirmButton: false,
                timer: 2000
              })
          </script>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <?php
          header('refresh:2 ;url=home.php');
        }
      $conn->close();
    ?>
     </div>
      </div>
    </div>
    <br>
    <footer><br>Developed By Khaled & Tahmid</footer>

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
      <br>
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

  <script src="js/jquery-slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
</body>
</html>