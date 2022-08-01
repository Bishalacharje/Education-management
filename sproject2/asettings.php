<?php

	session_start();
	include("connection.php");
	error_reporting(0);


	$_SESSION['username'];
	$aprofile=$_SESSION['username'];

	if($aprofile==true)
	{
		$query="SELECT * FROM `admin` WHERE username='$aprofile'";
		$data=mysqli_query($conn,$query);
		$result=mysqli_fetch_assoc($data);
	}
	else
	{
		header('location:adminlogin.php');
	}
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin_settings|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 	<div style="font-size: 30px;"><span style="color: #b3ffff;">ACADAMIC PERFORMANCE</span> <span style="color: #ff9900;">of Students</span></div>
 	<a href="admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>

 	<div style="background-color:white;min-width: 800px;min-height: 480px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033;font-size: 24px; ">ADMIN| SETTINGS <br><br>
 		<br>
 		
 		<span style="margin-right: 10px;font-size: 20px;margin-left: -80px;">Name:</span><span style="font-size: 16px;color: black;"><?php echo $result['name']; ?></span><br>

 		<span style="margin-right: 10px;font-size: 20px;margin-left: 20px;">Username:</span><span style="font-size: 16px;color: black;"><?php echo $result['username']; ?></span><br>

 		<span style="margin-right: 10px;font-size: 20px;margin-left: -60px;">Password:</span><span style="font-size: 16px;color: black;"><?php echo $result['password']; ?></span><br>

 	</div>	

 	<div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>

</body>
</html>	