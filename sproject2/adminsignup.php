<?php

	include("connection.php");
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin_signup|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 	<div style="font-size: 30px;"><span style="color: #b3ffff;font-size: 24px;">ACADAMIC PERFORMANCE</span> <span style="font-size: 
 		24px; color: #ff9900;">of Students</span></div>
 	<a href="http://localhost/sproject2/admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">Home</div></a>
 	</div>
	<div style="background-color:white;width: 800px;min-height: 300px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">

		<form action="" method="GET" >
			 	ADMIN|REGISTER<br><br>

			
			<input name="adminname" value="<?php //echo $email ?>" type="text" id="text" placeholder="Name" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			

			<input name="username" value="<?php //echo $email ?>" type="text" id="text" placeholder="username" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			<input name="password" value="<?php //echo $email ?>" type="password" id="text" placeholder="password" style="height:40px;width:280px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;"><br><br>

			
			

			<input  name="submit" type="submit" id="button" value="Submit" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br><br><br>
			</form>
			<?php

				if($_GET['submit'])
				{
					$aid=$_GET['id'];
					$an=$_GET['adminname'];
					$un=$_GET['username'];
					$ps=$_GET['password'];
				


					if ($an!=""&&$un!=""&&$ps!="")
					{
						$query="INSERT INTO `admin`(`name`, `username`, `password`) VALUES  ('$an','$un', '$ps')"; 
							
						$data=mysqli_query($conn,$query);
						if($data)
						{
							echo "<script>alert('New Admin Added')</script>";
							
  							
						}
					}
					else
					{
						echo "<font color='red'>All fields are required !";
					}
				}


				
				
				

			?>
	</div>
 	 <div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>
</body>
</html>