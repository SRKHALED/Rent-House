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
	$sql = "SELECT `email` FROM `user_` WHERE `email` LIKE '$_POST[email]'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		?>
		<script >
			 Swal.fire({
				  position: 'center',
				  type: 'info',
				  title: 'This E-mail has been used',
				  showConfirmButton: false,
				  timer: 2000
				})
		</script>
		<?php
		header('refresh:2 ;url=signup.php');
	}
	else{
		$sql="INSERT INTO user_(name, email,address,mobile,pass)
		VALUES('$_POST[name]','$_POST[email]','$_POST[address]','$_POST[mobile]','$_POST[pass]')";
		if($conn->query($sql)==true){
			?>
    		<script >
				 Swal.fire({
						  position: 'center',
					  type: 'success',
					  title: 'Registration complete',
					  showConfirmButton: false,
					  timer: 2000
					})
			</script>
			<?php
			header('refresh:2 ;url=home.php');
		}
		
	}
	$conn->close();
?>
</body>
</html>