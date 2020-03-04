<!DOCTYPE html>
<html>
<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</header>
<body>
	<?php
		session_start();
		$id=$_SESSION["id"];
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "rent_home";
		$conn = new mysqli($servername,$username,$password,$dbname);
		if($conn->connect_error){
			die("connection failed : ".$conn->connect_error);
		}
		$sql="SELECT `pass` FROM `user_` WHERE `userID` LIKE '$id'";
	      $result = $conn->query($sql);
	      if ($result->num_rows > 0) {
	        while($row = $result->fetch_assoc()){
	          $pa = $row["pass"];
	        }
	      }
	     if ($pa == $_POST["pass0"]){
			$sql = "UPDATE `user_` SET `name`='$_POST[name]',`email`='$_POST[email]',`mobile`='$_POST[mobile]',
			`pass`='$_POST[pass]',`address`='$_POST[address]' WHERE `userID` LIKE '$id'";
			if($conn->query($sql)==true){
				?>
				<script >
					Swal.fire({
		              position: 'center',
		              type: 'success',
		              title: 'Your profile has been updated',
		              showConfirmButton: false,
		              timer: 3500
		            })
				</script>
				<?php
				//echo "UPDATE";
				header('refresh:3 ;url=login.php');	
			}
			else{
				echo "NO UPDATE";
				header('refresh:2;url=edit_pro.php');

			}
		}
		else{
			echo "ERROR PASSWORD";
			header('refresh:2;url=edit_pro.php');
		}
	?>
</body>
</html>
