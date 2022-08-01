<?php

	include("connection.php");
	error_reporting(0);
	$_GET['cid'];
	$_GET['idno'];
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit_mark|sp2</title>
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
			EDIT|STUDENT_MARK<br><br>

			<input name="cid" value="<?php echo $_GET['cid']; ?>" type="text" id="text" placeholder="ID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="idno" value="<?php echo $_GET['idno']; ?>" type="text" id="text" placeholder="ID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="studentname" value="<?php echo $_GET['sname']; ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

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

			<input name="code"value="<?php echo $_GET['code']; ?>" type="text" id="text" placeholder="Course code" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="course"value="<?php echo $_GET['course']; ?>"  type="text" id="text" placeholder="Course" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="imark" value="<?php echo $_GET['imark']; ?>" type="text" id="text" placeholder="Internal mark" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="emark"value="<?php echo $_GET['emark']; ?>"  type="text" id="text" placeholder="External mark" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="fmark" value="<?php echo $_GET['fmark']; ?>" type="text" id="text" placeholder="Final mark" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="grade" value="<?php echo $_GET['grade']; ?>" type="text" id="text" placeholder="Grade" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>



			<input  name="submit" type="submit" id="button" value="Update" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br>
		</form>
		
		<?php
				

				if($_GET['submit'])
				{
					$ucid=$_GET['cid'];
					$uid=$_GET['idno'];					
					$usn=$_GET['studentname'];
					$usm=$_GET['semester'];
					$ucd=$_GET['code'];
					$ucr=$_GET['course'];
					$uim=$_GET['imark'];
					$uem=$_GET['emark'];
					$ufm=$_GET['fmark'];
					$ugr=$_GET['grade'];
					
					

					$query="UPDATE `marks` SET `idno`='$uid',`sname`='$usn',`semester`='$usm',`code`='$ucd',`course`='$ucr',`imark`='$uim',`emark`='$uem',`fmark`='$ufm',`grade`='$ugr' WHERE `cid`='$ucid' ";
					
					$data=mysqli_query($conn,$query);

					if($data) 
					{
						echo "<script>alert('Record Updated')</script>";
						?>
						<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/viewmark.php">

						<?php
					}	
					else
					{
						echo "<font color='red'><a href='viewmark.php'>Record not updated</a>";
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

