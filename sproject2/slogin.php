<?php
	session_start();
	include("connection.php");
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student_Login|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 60px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 30px;margin-left: 350px;padding-left: 80px;margin-top: 5px;"><span style="color: #b3ffff;">
 		ACADAMIC PERFORMANCE</span> <span style="color: #ff9900;">of Students</span></div>
 		
 	</div>
	<div style="background-color:white;width: 800px;min-height: 300px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">

		<form action="" method="POST" >
			 	STUDENT|LOGIN<br><br>

			
			
			
			 <span style="color: black;font-weight: normal;"> ID NO </span><br>
			<input name="idno" value="<?php //echo $email ?>" type="text" id="text" placeholder="ID_no" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<span style="color: black;font-weight: normal;"> Password</span><br>
			<input name="password" value="<?php //echo $email ?>" type="password" id="text" placeholder="password" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			
			

			<input  name="submit" type="submit" id="button" value=" Log In" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br><br><br>
		</form>
		<?php
				
			if(isset($_POST['submit']))	
			{
				$sid=$_POST['idno'];
				$sps=$_POST['password'];
				$query="SELECT * FROM `students` WHERE idno='$sid' && password='$sps' ";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				if($total==1)
				{
					$_SESSION['idno']=$sid;
					header('location:sprofile.php');
									
				}
				else
				{
					echo "Login Failed";
				}
			}	

		?>
	</div>
 	 <div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>
</body>
</html>