<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$query = "insert into users values('','$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("REGISTRATION IS SUCCESSFUL !! YOU MAY LOGIN NOW.");
	window.location.href = "index.php";
</script>