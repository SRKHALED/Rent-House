<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rent_home";
	$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){
		die("connection failed : ".$conn->connect_error);
	}
	$pid=$_POST['id'];
	$b = date('Y-m-d');
    $d = date('Y-m-d',strtotime($b.'+7 days'));
	$sql=" UPDATE `post` SET `exp_day`= '$d' WHERE `postID` LIKE $pid ";
	$result = $conn->query($sql);
	 header('refresh:0;url=view.php');
?>