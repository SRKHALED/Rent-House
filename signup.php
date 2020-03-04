<!DOCTYPE html>
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
        <a href="signup.php"><button class="btn btn-outline-primary">Sign up</button></a>
      </li>
      <li class="nav-item">
        <button class="btn btn-outline-primary" id="myBtn">Log in</button>
      </li>
    </ul>
  </div>
</nav>
</header>
	<div class="panel-body">
	  <div class="row">
	   <div class="col-md-10">
		<form class="form" method="post" action="reg.php">
			<div class="form-row">
				<div class="form-group col-md-6">
			      <label for="username">Name</label>
			      <input type="text" class="form-control" name="name" placeholder="Name" required>
			    </div>
			</div>	
			<div class="form-row">
				<div class="form-group col-md-6">
			      <label for="inputEmail">Email</label>
			      <input type="email" class="form-control" name="email" placeholder="Email" required>
			    </div>
			</div>
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="Pass">Password</label>
			      <input type="Password" class="form-control" name="pass" placeholder="Password" required>
			    </div>
			 </div>
			 <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="PassR">Repeat Password</label>
			      <input type="Password" class="form-control" name="PassR" placeholder="Repeat Password" required>
			    </div>
			 </div>
			 <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="mobile">Mobile No</label>
			      <input type="text" class="form-control" name="mobile" placeholder="Mobile No" required>
			    </div>
			 </div>
			 <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="address">Address </label>
			      <input type="text" class="form-control" name="address" placeholder="Address" required>
			    </div>
			 </div>
			  <button type="submit" class="btn btn-primary" style="margin-left: 17%;" name="Register">Register</button> 	  
		</form>
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