<?php

	session_start();
	include("connection.php");
	error_reporting(0);


	$_SESSION['idno'];
	$sprofile=$_SESSION['idno'];

	if($sprofile==true)
	{
		$query="SELECT * FROM `students` WHERE idno='$sprofile'";
		$data=mysqli_query($conn,$query);
		$result=mysqli_fetch_assoc($data);
	}
	else
	{
		header('location:slogin.php');
	}
		
?>

<style>
	table
	{
		width: 200px;  
		border: none;
		border-radius: 4px;
		background-color:#e9ebee;
		margin: auto;
	}
	th
	{
		border: none;
		text-align:center; 
		background-color: #000033;
		color: #d9dfeb;
		padding:10px;
	}
	td
	{
		padding: 20px;
		border-bottom: 1px solid;
		border-bottom-color:#000033;
		color:#000033; 
	}
	tr
	{
		text-align: center;
		font-weight: bold;
		font-size: 14px;
	}
	button
	{
		background-color: #000033;
		width: 80px;
		text-align: center;
		padding: 10px;
		border-radius: 4px;
		float: right;
		margin-right: 10px;
		font-weight: bold;
		border: none; 
		color: #d9dfeb;	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>students_mark|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 	<div style="font-size: 30px;"><span style="color: #b3ffff;">ACADAMIC PERFORMANCE</span> <span style="color: #ff9900;">of Students</span></div>
 	<a href="sprofile.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>

 	<div style="background-color:white;min-width: 800px;min-height: 480px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">
 		<?php echo $result['idno']; ?>|<?php echo $result['name']; ?> | Mark Records<br> 
 		<br>
 		<?php

 				$query="SELECT * FROM `marks` WHERE idno='$sprofile'";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				
				
				if($total!=0)
				{
		?>
			<table >
				<tr>
					
					<th>Semester</th>
					<th>Course Code</th>
					<th>Course</th>
					<th>Internal Marks</th>
					<th>External Marks</th>
					<th>Final Marks</th>
					<th>Grade</th>
					
					
					
					
				</tr>
			
					<?php

						while ($result=mysqli_fetch_assoc($data)) 
						{
							echo "<tr>
									
									<td>".$result['semester']."</td>
									<td>".$result['code']."</td>
									<td>".$result['course']."</td>
									<td>".$result['imark']."</td>
									<td>".$result['emark']."</td>
									<td>".$result['fmark']."</td>
									<td>".$result['grade']."</td>
	
								</tr>";
						}
					}
					else
					{
						echo "<br> No _mark record found";
					}

					?>

	 		</table>
	 		
 	</div>	

 	<div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>

</body>
</html>