<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LIBRARY MANAGEMENT SYSTEM</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		background-color: whitesmoke;
	}
	#side_bar{
		background-color: whitesmoke;
		padding: 60px;
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
	</div>
		<div class="col-md-8" id="main_content">
			<center><h3><u>USER REGISTRATION PAGE</u></h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">NAME:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">EMAIL ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">PASSWORD:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="mobile">MOBILE:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="address">ADDRESS:</label>
					<textarea name="address" class="form-control" required></textarea> 
				</div>
				<button type="submit" class="btn btn-primary">REGISTER</button>	
			</form>
		</div>
	</div>
</body>
</html>