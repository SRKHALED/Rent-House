<?php 
session_start();
$id= $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>বাসা ভাড়া.কম</title>
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

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $permited  = array('jpg', 'jpeg', 'png', 'gif','pdf');
        $file_name = $_FILES['p1']['name'];
        $file_size = $_FILES['p1']['size'];
        $file_temp = $_FILES['p1']['tmp_name'];

        $div= explode('.', $file_name);
        $file_ext= strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "uploads/".$unique_image;

        if (empty($file_name)) {
          echo "<span class='success'>Select any Image.
              </span>";
        }elseif ($file_size>8048567) {
          echo "<span class='success'>Image size should be less than 1 MB!
              </span>";
        }elseif (in_array($file_ext, $permited)=== false) {
          echo "<span class='error'>You can upload only:-"
         .implode(', ', $permited)."</span>"; 
        }
        else{

        //$folder = "uploads/";
        move_uploaded_file($file_temp, $uploaded_image);
        }
      $b = date('Y-m-d');
      $d = date('Y-m-d',strtotime($b.'+7 days'));
      $sql="INSERT INTO `post`(`type`, `numberOfRoom`, `numberOfBath`, `price`, `area`, `division`, `city`, `region`, `road`, `house`, `pic1`, `exp_day`, `userID`)
      VALUES('$_POST[type]','$_POST[bed]','$_POST[bath]','$_POST[price]','$_POST[area]','$_POST[division]','$_POST[city]','$_POST[region]','$_POST[road]','$_POST[house]','$uploaded_image','$d','$id')";
      if($conn->query($sql)==true){
        ?>
          <script >
             Swal.fire({
              position: 'center',
              type: 'success',
              title: 'Your post has been saved',
              showConfirmButton: false,
              timer: 2500
            })
          </script>
          <?php
          header('refresh:2 ;url=view.php');
      }
      else{
        echo "Error";
      }
    }

      
      $conn->close();
?>
</body>
</html>