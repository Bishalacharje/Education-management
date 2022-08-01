<?php

	include("connection.php");
	error_reporting(0);
	$_GET['id'];
	$_GET['fn'];
	$_GET['br'];
	$_GET['em'];
	$_GET['ps'];
	


	

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit_faculty|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 	<div style="font-size: 30px;">STUDENT MANAGEMENT SYSTEM</div>
 	<a href="http://localhost/sproject2/admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>
	<div style="background-color:white;width: 800px;min-height: 470px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">

		<form action="" method="GET">			 	
			EDIT|FACULTIS<br><br>

			<input name="id" value="<?php echo $_GET['id']; ?>" type="text" id="text" placeholder="ID_no" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="facultyname" value="<?php echo $_GET['fn']; ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<span style="color: black;font-weight: normal;"> Select Brunch</span><br>
			<select name="brunch" placeholder="brunch" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;
			padding: 4px;">	
				<option>"<?php echo $_GET['br']; ?>" </option> <option>CE</option><option>ME</option><option>EE</option>
				<option>CSE</option><option>ECE</option><option>BCA</option><option>MCA</option><option>CSE & BCA & MCA</option>
			</select><br><br>

			<input name="email" value="<?php echo $_GET['em']; ?>" type="text" id="text" placeholder="email" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="password" value="<?php echo $_GET['ps']; ?>" type="password" id="text" placeholder="password" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			
			
			<input  name="submit" type="submit" id="button" value="Update" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br>
			</form>
			<?php
				

				if($_GET['submit'])
				{
					$fid=$_GET['id'];					
					$fn=$_GET['facultyname'];
					$fbr=$_GET['brunch'];
					$fem=$_GET['email'];
					$fps=$_GET['password'];
					

					$query="UPDATE `faculty` SET `name`='$fn',`brunch`='$fbr',`email`='$fem',`password`='$fps' WHERE `id`='$fid' ";
					$data=mysqli_query($conn,$query);

					if($data) 
					{
						echo "<script>alert('Record Updated')</script>";
						?>
						<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/viewfaculty.php">

						<?php
					}	
					else
					{
						echo "<font color='red'><a href='viewfaculty.php'>Record not updated</a>";
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