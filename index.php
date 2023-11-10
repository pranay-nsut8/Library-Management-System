<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Library Management System | Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		background-color: whitesmoke;
	}
	#side_bar{
		background-color: lightseagreen;
		padding: 50px;
		width: 300px;
		height: 450px;
	}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">ADMIN LOGIN</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../signup.php"></span>REGISTER</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">LOGIN</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>This is Central Library, NSUT. Library Opens at 8:00 AM and Closes at 6:00 PM.</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>Library Timing</h5>
			<ul>
				<li>Opening: 8:00 AM</li>
				<li>Closing: 6:00 PM</li>
				<li>(Sunday Off)</li>
			</ul>
			<h5>Facilities Available :-</h5>
			<ul>
				
				<li>Free Wi-fi</li>
				<li>Newspapers (Hindi & English)</li>
				<li>Discussion Room</li>
				<li>Peaceful Environment</li>
				<li>RO Water</li>
				<li>Wooden Furniture</li>
			</ul>
		</div>
		<div class="col-md-8" id="main_content">
			<center><h3><u>Admin Login Form</u></h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>	
			</form>
			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"library");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								header("Location: admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">INVALID LOG-IN CREDENTIALS!!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
