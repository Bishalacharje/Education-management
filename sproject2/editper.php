<?php

	include("connection.php");
	error_reporting(0);
	$_GET['id'];
	$_GET['name'];
	$_GET['fattendance'];
	$_GET['cgpa'];
	
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit_performance|sp2</title>
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
			EDIT|STUDENT_PERFORMANCE<br><br>

			

			<input name="idno" value="<?php echo $_GET['idno']; ?>" type="text" id="text" placeholder="ID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="studentname" value="<?php echo $_GET['sname']; ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="fat" value="<?php echo $_GET['fattendance']; ?>" type="text" id="text" placeholder="Final attendance " style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="cgp" value="<?php echo $_GET['cgpa']; ?>" type="text" id="text" placeholder="CGPA" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			


			<input  name="submit" type="submit" id="button" value="Update" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br>
		</form>
		
		<?php
				

				if($_GET['submit'])
				{
					$uid=$_GET['idno'];					
					$usn=$_GET['studentname'];
					$ufa=$_GET['fat'];
					$ucg=$_GET['cgp'];
														
					

					$query="UPDATE `performance` SET `name`='$usn',`fattendance`='$ufa',`cgpa`='$ucg' WHERE `id`='$uid' ";
					
					$data=mysqli_query($conn,$query);

					if($data) 
					{
						echo "<script>alert('Record Updated')</script>";
						?>
						<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/vreport.php">

						<?php
					}	
					else
					{
						echo "<font color='red'><a href='vreport.php'>Record not updated</a>";
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

