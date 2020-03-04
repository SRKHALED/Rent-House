<!DOCTYPE html>
<html>
<head>
	<title>বাসা ভাড়া.কম(Admin)</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="styleT.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		.header{
			background-image: url(pic/bp.jpg);
			background-size: cover;
			color: white;
		}
		.footer{
			background-image: url(pic/bp.jpg);
			background-size: cover;
			color: white;
			text-align: center;
			font-size: 22px;
		}
		.fbody{
			background-image: url(pic/p1.jpg);
			background-size: cover;
		}
		body{
			background-image: url(pic/lo.PNG);
			background-size: cover;
		}
	</style>
</head>
<body>
 <div class="header">
	 <center> <br><h1>বাসা ভাড়া.কম</h1><br> </center> 
 </div>
 <br><br><br><br>
 	<div class="row">
		<div class="col-md-3 box">		
		</div>
		<div class="col-md-6 box">
			<br>
			<div class="fbody">
				<div class="row">
					<div class="col-md-6 box">
						<img src="pic/av1.PNG" alt="Avatar" class="avatar">
					</div>
					<div class="col-md-5 box">
						<form method="post" action="adminLogin.php">
							<div class ="form-group">
								<br><br>
								<label for="mail">E-mail</label>
								<input type="email" class="form-control" name="email" required/>
								<br>
								<label for="pass">Password</label>
								<input type="password" class="form-control" name="pass" required/>
								<br />
								<input type="submit" class="btn btn-outline-primary" value="Log in" />
								
							</div>					
						</form>
					</div>
				</div>
			</div>	
		</div>
	</div>	
<br><br><br><br>
<div class="footer">

	Developed by S.R.Khaled & Tahmid
	<br>
</div>
</body>
</html>