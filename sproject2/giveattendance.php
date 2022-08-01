<?php

	include("connection.php");
	error_reporting(0);
	$_GET['idno'];
	$_GET['sn'];
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>give_attendance|sp2</title>
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
			GIVE|STUDENT_ATTENDANCE<br><br>

			<input name="attendanceid" type="text" id="text" placeholder="AID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>


			<input name="idno" value="<?php echo $_GET['id']; ?>" type="text" id="text" placeholder="ID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="studentname" value="<?php echo $_GET['name']; ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			

			<input name="code" type="text" id="text" placeholder="Course code" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="course"  type="text" id="text" placeholder="Course" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="ctaken"  type="text" id="text" placeholder="class Taken " style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="cattend"  type="text" id="text" placeholder="class Attend" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="attendance"  type="text" id="text" placeholder="Attendance %" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			
			<input  name="submit" type="submit" id="button" value="Submit" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br>
		</form>
		
		<?php

				if($_GET['submit'])
				{
					$aid=$_GET['attendanceid'];
					$sid=$_GET['idno'];
					$sn=$_GET['studentname'];
					$cd=$_GET['code'];
					$cr=$_GET['course'];
					$ct=$_GET['ctaken'];
					$ca=$_GET['cattend'];
					$at=$_GET['attendance'];
					
					


					if ($aid!=""&&$sid!=""&&$sn!=""&&$cd!=""&&$cr!="")
					{
						$query="INSERT INTO `attendance`(`id`, `idno`, `name`, `code`, `course`, `classt`, `classa`, `attendances`) VALUES 
						('$aid','$sid','$sn', '$cd','$cr','$ct','$ca','$at')";
							
						$data=mysqli_query($conn,$query);
						if($data)
						{
							echo "<script>alert(' Attendance Record Added')</script>";

							?>
							<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/viewstudent.php">

							<?php
						}
					}
					else
					{
						echo "<script>alert('Aid/ID/Name/course/code fields are required ! ')</script>";
					}
				}


				
			?>
	</div>

 	 <div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>
</body>
</html>

