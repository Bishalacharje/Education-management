<?php
	include("connection.php");
	error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<span style="color: black;font-weight: normal;"> Image</span><br>
		<input name="uploadfile" value="<?php //echo $email ?>" type="file" id="text" placeholder="uploadfile" style="height:40px;
		width:17px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;">
		<input name="submit" value="upload file"/ type="submit" id="text" placeholder="uploadfile" style="height:30px;width:100px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>
	</form>	


</body>
</html>
<?php

	$filename=$_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	$folder="student_img/".$filename;
	move_uploaded_file($tempname, $folder);
	//echo "<img src='$folder' height='100' width='100'/>"
	if($_POST['submit'])
				{
					$filename=$_FILES["uploadfile"]["name"];
					$tempname=$_FILES["uploadfile"]["tmp_name"];
					$folder="student_img/".$filename;
					move_uploaded_file($tempname, $folder);
					
					
					$query="UPDATE `students` SET `picsource`='$folder' WHERE `idno`='$uid'";	
					$data=mysqli_query($conn,$query);
					if($data)
					{
						echo " <br><font color='green'>Student pic inserted.<a href='viewstudent.php'>Check Students Record</a>";
						
					}
					else
					{
						echo "<font color='red'>sorry try again!";
					}
				}

?>


