<?php

	include("connection.php");
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>add_students|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 	<div style="font-size: 30px;"><span style="color: #b3ffff;">ACADAMIC PERFORMANCE</span> <span style="color: #ff9900;">of Students</span></div>
 	<a href="admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>
	<div style="background-color:white;width: 800px;min-height: 470px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">

		<form action="" method="GET" >
			 	STUDENTS|REGISTER<br><br>

			<input name="idno" value="<?php //echo $email ?>" type="text" id="text" placeholder="ID_no" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="studentname" value="<?php //echo $email ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<span style="color: black;font-weight: normal;"> Select programs</span>
			<span style="color: black;font-weight: normal;margin-left: 100px;font-size: 12px;"> Select Brunch</span><br>

			<select name="program" placeholder="program" style="height:40px;width:210px;border-radius: 5px;border: solid 1px #ddd;
			padding: 4px;">	
				<option>BTECH</option>
				<option>BCA</option>
				<option>MCA</option>
				
			</select>

						
			<select name="brunch" placeholder="brunch" style="height:40px;width:80px;border-radius: 5px;border: solid 1px #ddd;
			padding: 4px;">	
				<option>CE</option>
				<option>ME</option>
				<option>EE</option>
				<option>CSE</option>
				<option>ECE</option>
				<option></option>
			</select><br><br>

			<span style="color: black;font-weight: normal;"> Select semester</span>
			<br>

			<select name="semester" placeholder="semester" style="height:40px;width:290px;border-radius: 5px;border: solid 1px #ddd;
			padding: 4px;">	
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

			<input name="email" value="<?php //echo $email ?>" type="text" id="text" placeholder="email" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="password" value="<?php //echo $email ?>" type="password" id="text" placeholder="password" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="attendance" value="<?php //echo $email ?>" type="text" id="text" placeholder="attendance%" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="marks" value="<?php //echo $email ?>" type="text" id="text" placeholder="marks%" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			

			<input  name="submit" type="submit" id="button" value="Add_student" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br><br><br>
			</form>
			<?php

				if($_GET['submit'])
				{
					$id=$_GET['idno'];
					$sn=$_GET['studentname'];
					$pr=$_GET['program'];
					$br=$_GET['brunch'];
					$sm=$_GET['semester'];
					$em=$_GET['email'];
					$ps=$_GET['password'];
					$at=$_GET['attendance'];
					$mr=$_GET['marks'];


					if ($id!=""&&$sn!=""&&$pr!=""&&$sm!=""&&$em!=""&&$ps!="")
					{
						$query="INSERT INTO `students`(`idno`, `name`,`program`, `brunch`,`semester`, `email`, `password`, `attendance`, `marks`, `date`) VALUES ('$id', '$sn','$pr','$br','$sm', '$em','$ps','$at','$mr', current_timestamp())"; 
							
						$data=mysqli_query($conn,$query);
						if($data)
						{
							echo "<script>alert('Record Added')</script>";
						}
					}
					else
					{
						echo "<script>alert('ID/Name/course/brunch/email/password fields are required ! ')</script>";
					}
				}


				
			?>
		
	</div>
 	 <div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>
</body>
</html>