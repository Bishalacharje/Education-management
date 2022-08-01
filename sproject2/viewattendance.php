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
<?php

	include("connection.php");
	error_reporting(0);


?>
<!DOCTYPE html>
<html>
<head>
	<title>view_student_attendance|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 	<div style="font-size: 30px;"><span style="color: #b3ffff;">ACADAMIC PERFORMANCE</span> <span style="color: #ff9900;">of Students</span></div>
 	<a href="admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>

 	<div style="background-color:white;min-width: 800px;min-height: 480px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">

 		<form method="POST" action="">
 				
 				<input name="search"  type="text" id="text" placeholder="search by id or name" style="height:40px;width:595px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;float: left;margin-left: 140px;"><br><br><br>


			
			<input  name="submit" type="submit" id="button" value="Submit" style="width: 180px;height: 30px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  
 			</form><br>


 		Students|Attendance_Record 



 		<div style="margin-left: 990px; background-color: white;width: 200px;height: 40px;">


 			<br></div>
 		<?php

 		
 				$query="SELECT * FROM `attendance` ";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
 			

					
				
				
				
				
		?>
			<table >
				<tr>
					<th>CID</th>
					<th>ID No</th>
					<th>Name</th>
					<th>Course Code</th>
					<th>Course</th>
					<th>Class Taken</th>
					<th>Class Attend</th>
					<th>Attendance %</th>
										
					<th colspan="2">Operation</th>
					
					
				</tr>
			
					<?php
					while ($result=mysqli_fetch_assoc($data)) 
						{
							echo "<tr>
									<td>".$result['id']."</td>
									<td>".$result['idno']."</td>
									<td>".$result['name']."</td>
									<td>".$result['code']."</td>
									<td>".$result['course']."</td>
									<td>".$result['classt']."</td>
									<td>".$result['classa']."</td>
									<td>".$result['attendances']."</td>


									<td><a href='editattendance.php?cid=$result[id]&idno=$result[idno]&sname=$result[name]
									&code=$result[code]&course=$result[course]&clstaken=$result[classt]&clsatt=$result[classa]
									&attendance=$result[attendances]'><button>Edit</button></a></td>
									
									
									
																		
									<td><a href='deleteattendance.php?id=$result[id]' onclick='return checkdelete()'><button>Delete</button></a></td>

									

									
								</tr>";
						}

					?>

	 		</table>


	 		<script>

	 			function checkdelete()
	 			{
	 				return confirm('Are you sure you want to delete this Students_attendance data???');
	 			}

	 		</script>
 	</div>	

 	<div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>

</body>
</html>