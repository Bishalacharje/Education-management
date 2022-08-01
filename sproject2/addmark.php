<?php

	include("connection.php");
	error_reporting(0);
	$_GET['idno'];
	$_GET['sn'];
	$_GET['sm'];
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>add_mark|sp2</title>
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
			ADD|STUDENT_MARK<br><br>

			<input name="coid" type="text" id="text" placeholder="CID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>


			<input name="idno" value="<?php echo $_GET['id']; ?>" type="text" id="text" placeholder="ID" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="studentname" value="<?php echo $_GET['name']; ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="semester" value="<?php echo $_GET['semester']; ?>" type="text" id="text" placeholder="semester" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="code" type="text" id="text" placeholder="Course code" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="course"  type="text" id="text" placeholder="Course" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="imark"  type="text" id="text" placeholder="Internal mark" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="emark"  type="text" id="text" placeholder="External mark" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="fmark"  type="text" id="text" placeholder="Final mark" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="grade"  type="text" id="text" placeholder="Grade" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>



			<input  name="submit" type="submit" id="button" value="Submit" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br>
		</form>
		
		<?php

				if($_GET['submit'])
				{
					$cid=$_GET['coid'];
					$sid=$_GET['idno'];
					$sn=$_GET['studentname'];
					$sm=$_GET['semester'];
					$cd=$_GET['code'];
					$cr=$_GET['course'];
					$im=$_GET['imark'];
					$em=$_GET['emark'];
					$fm=$_GET['fmark'];
					$gr=$_GET['grade'];
					


					if ($cid!=""&&$sid!=""&&$sm!=""&&$cd!=""&&$cr!="")
					{
						$query="INSERT INTO `marks`(`cid`, `idno`, `sname`, `semester`, `code`, `course`, `imark`, `emark`, `fmark`, `grade`) VALUES ('$cid','$sid','$sn', '$sm','$cd','$cr','$im', '$em','$fm','$gr')"; 
							
						$data=mysqli_query($conn,$query);
						if($data)
						{
							echo "<script>alert('Record Added')</script>";

							?>
							<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/viewstudent.php">

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

