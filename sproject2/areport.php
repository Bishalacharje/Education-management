<?php

	include("connection.php");
	error_reporting(0);
	$_GET['idno'];
	$_GET['sn'];
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>give_performance|sp2</title>
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
			GIVE|STUDENT_PERFORMANCE_REPORT<br><br>



			
			<input name="idno" value="<?php echo $_GET['id']; ?>" type="text" id="text" placeholder="ID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="studentname" value="<?php echo $_GET['name']; ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<span style="color: black;font-weight: normal;"> Select semester</span>
			<br>
			<select name="semester" placeholder="semester" style="height:40px;width:290px;border-radius: 5px;border: solid 1px #ddd;
			padding: 4px;">	
				<option><?php echo $_GET['semester']; ?> </option> 
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				
			</select>

			<br><br>

			<input name="attendances" type="text" id="text" placeholder=" Final Attendance %" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="cgpa"  type="text" id="text" placeholder="CGPA" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>


			
			<input  name="submit" type="submit" id="button" value="Submit" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br>
		</form>
		
		<?php

				if($_GET['submit'])
				{
					
					$sid=$_GET['idno'];
					$sn=$_GET['studentname'];
					$sm=$_GET['semester'];
					$fa=$_GET['attendances'];
					$cg=$_GET['cgpa'];
				
					
					


					if ($sid!=""&&$sn!=""&&$sm!=""&&$fa!=""&&$cg!="")
					{
						$query="INSERT INTO `performance`(`id`, `name`, `semester`, `fattendance`, `cgpa`) VALUES ('$sid','$sn','$sm', '$fa','$cg')";
							
						$data=mysqli_query($conn,$query);
						if($data)
						{
							echo "<script>alert(' PERFORMANCE Record Added')</script>";

							?>
							<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/vreport.php">

							<?php
						}
					}
					else
					{
						echo "<script>alert('All fields are required ! ')</script>";
					}
				}


				
			?>
	</div>

 	 <div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>
</body>
</html>

