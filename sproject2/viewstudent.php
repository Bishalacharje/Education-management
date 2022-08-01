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
		color: #d9dfeb;	
	}
	span
	{
		font-size: 11px;
		padding-top: 2px;
		padding-bottom: 12px;
		
	}
</style>
<?php

	include("connection.php");
	error_reporting(0);


?>
<!DOCTYPE html>
<html>
<head>
	<title>view_students|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;min-width: 1550px; background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 30px;"><span style="color: #b3ffff;font-size: 24px;">ACADAMIC PERFORMANCE</span> <span style="font-size: 
 		24px; color: #ff9900;">of Students</span></div>
 		<a href="admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 230px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>

 	<div style="background-color:white;min-width: 1520px;min-height: 480px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">

 		

 		Students|Record 

 		<div style="margin-left: 990px; background-color: white;width: 200px;height: 40px;">

 			<a href="addstudent.php"><button style="height: 50px;width: 200px;margin-top: -30px;margin-right: 56px;">Add Student</button></a>
 			<br><br>
 		</div>
 		<?php
 
 			
 			
 				$query="SELECT * FROM `students`";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				
				
				if($total!=0)
				{
		?>
			<table >
				<tr>
					<th>ID No</th>
					<th>Name</th>
					<th>Program</th>
					<th>Brunch</th>
					<th>Semester</th>
					<th>Email</th>
					<th>%Attendance</th>
					<th>CGPA</th>
					
					<th colspan="3">Manage Student</th>
					<th colspan="2">Operation </th>
					
					<th>Date</th>
				</tr>
			
					<?php

						while ($result=mysqli_fetch_assoc($data)) 
						{
							echo "<tr>
									<td>".$result['idno']."</td>
									<td>".$result['name']."</td>
									<td>".$result['program']."</td>
									<td>".$result['brunch']."</td>
									<td>".$result['semester']."</td>
									<td>".$result['email']."</td>
									<td>".$result['attendance']."</td>
									<td>".$result['marks']."</td>


																		
									<td><a href='addmark.php?id=$result[idno]&name=$result[name]&Program=$result[program]
									&brunch=$result[brunch]&Semester=$result[semester]'>
									<button><span>Add Marks</span></button></a></td>

									<td><a href='giveattendance.php?id=$result[idno]&name=$result[name]'>
									<button><span>Give attendance</span></button></a></td>

									<td><a href='areport.php?id=$result[idno]&name=$result[name]&semester=$result[semester]'>
									<button><span>Give Report</span></button></a></td>


									<td><a href='editstudent.php?id=$result[idno]&name=$result[name]&Program=$result[program]
									&brunch=$result[brunch]&Semester=$result[semester]&email=$result[email]&password=$result[password]
									&attendance=$result[attendance]&Mark=$result[marks]'>
									<button>Edit</button></a></td>
																		
									<td><a href='deletestudent.php?id=$result[idno]&sn=$result[name]&pr=$result[Program]&em=
									$result[email] ' 
									onclick='return checkdelete()'><button>Delete</button></a></td>

									

									<td>".$result['date']."</td>
								</tr>";
						}
					}
					else
					{
						echo "No Students record found";
					}

				
			?>

	 		</table>
	 		<script>

	 			function checkdelete()
	 			{
	 				return confirm('Are you sure you want to delete this student data???');
	 			}

	 		</script>
 	</div>	

 	<div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>

</body>
</html>