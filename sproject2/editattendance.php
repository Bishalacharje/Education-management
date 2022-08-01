<?php

	include("connection.php");
	error_reporting(0);
	$_GET['id'];
	$_GET['idno'];
	$_GET['sname'];
	$_GET['code'];
	$_GET['course'];
	$_GET['classt'];
	$_GET['classa'];
	$_GET['attendances'];
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit_atendance|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 30px;"><span style="color: #b3ffff;">ACADAMIC PERFORMANCE</span> <span style="color: #ff9900;">of Students</span></div>
 		<a href="http://localhost/sproject2/admindashbord.php">
 			<div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div>
 		</a>
 		
 	</div>
	<div style="background-color:white;width: 800px;min-height: 470px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">

		<form action="" method="GET">			 	
			EDIT|STUDENT_ATTENDANCE<br><br>

			<input name="cid" value="<?php echo $_GET['cid']; ?>" type="text" id="text" placeholder="ID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="idno" value="<?php echo $_GET['idno']; ?>" type="text" id="text" placeholder="ID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="studentname" value="<?php echo $_GET['name']; ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="code" value="<?php echo $_GET['code']; ?>" type="text" id="text" placeholder="Course code" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="course" value="<?php echo $_GET['cource']; ?>" type="text" id="text" placeholder="Course" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="ctaken" value="<?php echo $_GET['classt']; ?>" type="text" id="text" placeholder="class Taken " style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="cattend" value="<?php echo $_GET['classa']; ?>" type="text" id="text" placeholder="class Attend" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="attendance" value="<?php echo $_GET['attendances']; ?>" type="text" id="text" placeholder="Attendance %" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>




			<input  name="submit" type="submit" id="button" value="Update" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br>
		</form>
		
		<?php
				

				if($_GET['submit'])
				{
					$ucid=$_GET['cid'];
					$uid=$_GET['idno'];					
					$usn=$_GET['studentname'];
					$ucd=$_GET['code'];
					$ucr=$_GET['course'];
					$uct=$_GET['ctaken'];
					$uca=$_GET['cattend'];
					$uat=$_GET['attendance'];
									
					

					$query="UPDATE `attendance` SET `idno`='$uid',`name`='$usn',`code`='$ucd',`course`='$ucr',`classt`='$uct',
					`classa`='$uca',`attendances`='$uat' WHERE `id`='$ucid' ";
					
					$data=mysqli_query($conn,$query);

					if($data) 
					{
						echo "<script>alert('Record Updated')</script>";
						?>
						<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/viewattendance.php">

						<?php
					}	
					else
					{
						echo "<font color='red'><a href='viewattendance.php'>Record not updated</a>";
					}
				}
				else
				{
					
				}


				
				
				

			?>
	</div>

 	 <div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>
</body>
</html>

