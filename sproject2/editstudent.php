<?php

	include("connection.php");
	error_reporting(0);
	$_GET['id'];
	$_GET['sn'];
	$_GET['pr'];
	$_GET['br'];
	$_GET['sm'];
	$_GET['em'];
	$_GET['ps'];
	$_GET['at'];
	$_GET['mr'];


	

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit_students|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 	<div style="font-size: 30px;"><span style="color: #b3ffff;">ACADAMIC PERFORMANCE</span> <span style="color: #ff9900;">of Students</span></div>
 	<a href="http://localhost/sproject2/admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>
	<div style="background-color:white;width: 800px;min-height: 470px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">

		<form action="" method="GET">			 	
			EDIT|STUDENT<br><br>

			<input name="idno" value="<?php echo $_GET['id']; ?>" type="text" id="text" placeholder="ID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="studentname" value="<?php echo $_GET['name']; ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>


			<span style="color: black;font-weight: normal;"> Select programs</span>
			<span style="color: black;font-weight: normal;margin-left: 100px;font-size: 12px;"> Select Brunch</span><br>

			<select name="program"  placeholder="program" style="height:40px;width:210px;border-radius: 5px;border: solid 1px #ddd;
			padding: 4px;">	
				<option><?php echo $_GET['program']; ?> </option> 
				<option>BTECH</option>
				<option>BCA</option>
				<option>MCA</option>
				
			</select>

						
			<select name="brunch" placeholder="brunch" style="height:40px;width:80px;border-radius: 5px;border: solid 1px #ddd;
			padding: 4px;">	
				<option><?php echo $_GET['brunch']; ?> </option> 
				<option>CE</option>
				<option>ME</option>
				<option>EE</option>
				<option>CSE</option>
				<option>ECE</option>
			</select><br><br>

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

			

			<input name="email" value="<?php echo $_GET['email']; ?>" type="text" id="text" placeholder="email" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="password" value="<?php echo $_GET['password']; ?>" type="password" id="text" placeholder="password" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="attendance" value="<?php echo $_GET['attendance']; ?>" type="text" id="text" placeholder="attendance %" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="marks" value="<?php echo $_GET['marks']; ?>" type="text" id="text" placeholder="CGPA" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			
			<input  name="submit" type="submit" id="button" value="Update" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br>
			</form>
			<?php
				

				if($_GET['submit'])
				{
					$uid=$_GET['idno'];					
					$usn=$_GET['studentname'];
					$upr=$_GET['program'];
					$ubr=$_GET['brunch'];
					$usm=$_GET['semester'];
					$uem=$_GET['email'];
					$ups=$_GET['password'];
					$uat=$_GET['attendance'];
					$umr=$_GET['marks'];
					

					$query="UPDATE `students` SET `name`='$usn',`program`='$upr',`brunch`='$ubr',`semester`='$usm',`email`='$uem',
					`password`='$ups',`attendance`='$uat',`marks`='$umr' WHERE `idno`='$uid' ";
					
					$data=mysqli_query($conn,$query);

					if($data) 
					{
						echo "<script>alert('Record Updated')</script>";
						?>
						<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/viewstudent.php">

						<?php
					}	
					else
					{
						echo "<font color='red'><a href='viewstudent.php'>Record not updated</a>";
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