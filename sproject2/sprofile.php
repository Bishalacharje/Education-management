<?php

	session_start();
	include("connection.php");
	error_reporting(0);


	$_SESSION['idno'];
	$sprofile=$_SESSION['idno'];

	if($sprofile==true)
	{
		$query="SELECT * FROM `students` WHERE idno='$sprofile'";
		$data=mysqli_query($conn,$query);
		$result=mysqli_fetch_assoc($data);
	}
	else
	{
		header('location:slogin.php');
	}
		
?>
<style>
	button
	{
		background-color: #d9dfeb;
		color: #000033;	
		padding: 4px;
		width: 100px;
		margin-right: 10px;
		border: none;
		border-radius: 2px;
		font-size: 20px;
		font-family: tahoma;

	}
	

</style>
<!DOCTYPE html>
<html>
<head>
	<title>Student_Profile|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 60px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 24px;text-align: center;margin-top: 10px;">
 			<span style="color: #b3ffff;height: 20px;padding: 6px;float: left;font-size: 20px;margin-left:15px; ">

 				<?php echo $result['name']; ?>
 				<a href="slogout.php">
 				<button style="font-size: 12px;font-weight: bold;width: 80px;background-color: #ff9900">Logout</button></a>

 			</span> <span style="margin-right: 200px;margin-left: -90px;"><span style="color: #b3ffff;">ACADAMIC PERFORMANCE</span>  <span style="color: #ff9900;">of Students
 			</span></span>   
 		</div>
 	
 	</div>

	<div style=" display: flex; background-color:white;min-width: 300px;min-height: 350px;margin: auto; text-align: center;font-weight: bold;font-family: tahoma;color:#000033; ">


		<div style="flex:0">

		</div>	

		<div style="flex: 2.5;background-color: #e9ebee;">

		<a href="sprofile.php"><button style="width: 332px;height: 174px;background-color: #e65c00;padding: 2px;margin: 2px;font-size: 25px;color: #d9dfeb;">
				Home
		</button></a>

		<a href="sattendance.php"><button style="width: 532px;height: 174px;background-color: #1e7b1e;padding: 4px;margin: 2px;font-size: 25px;color: #d9dfeb;">
				Attendance Detail
		</button></a>

		<a href="#"><button style="width: 432px;height: 174px;background-color: #003d99;padding: 4px;margin: 2px;font-size: 25px;color: #d9dfeb;">
				View Time Table
		</button></a><br>

		<a href="smark.php"><button style="width: 532px;height: 174px;background-color: #001a00;padding: 4px;margin: 2px;font-size: 25px;color: #d9dfeb;">
				 Final Marks
			</button></a>
			
			<a href="snotice.php"><button style="width: 775px;height: 174px;background-color: #ff9900;padding: 4px;margin: 2px;font-size: 25px;color: #d9dfeb;">
				view Notice
			</button></a>

			

			<a href="ssettings.php"><button style="width: 775px;height: 174px;background-color: #008080;padding: 4px;margin: 2px;font-size: 25px;color: #d9dfeb;">
				My profile 
			</button></a>

			
			<a href="sperformance.php"><button style="width: 532px;height: 174px;background-color: #4d0000;padding: 4px;margin: 2px;font-size: 25px;color: #d9dfeb;">
				 Performances
			</button></a>	
		</div>
		
	</div>

	

	<div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>

</body>
</html>