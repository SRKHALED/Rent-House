<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rent_home";
  $conn = new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
    die("connection failed : ".$conn->connect_error);
  }
  $sql="SELECT * FROM `admin` WHERE `email` LIKE '$_POST[email]' AND `pass` LIKE '$_POST[pass]'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){  
    }
    header('refresh:0 ;url=viewpost.php');
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
    echo "Invalid Password Or E-mail";
    header('refresh:2 ;url=admin.php');
  }

  $conn->close();
?>