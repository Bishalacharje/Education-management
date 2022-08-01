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
	<title>view_faculty|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 	<div style="font-size: 30px;">STUDENT MANAGEMENT SYSTEM</div>
 	<a href="admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>

 	<div style="background-color:white;min-width: 800px;min-height: 480px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">FACULTY|Records 
 		<div style="margin-left: 864px; background-color: white;width: 200px;height: 40px;">
 			<a href="addfaculty.php"><button style="margin: auto;width: 150px;margin-right: 8px;"> Add Faculty</button></a><br><br>
 		</div>
 		<?php

 				$query="SELECT * FROM `faculty`";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				
				
				if($total!=0)
				{
		?>
			<table >
				<tr>
					<th>ID </th>
					<th>Name</th>
					<th>Brunch</th>
					<th>Email</th>
					
					<th colspan="2">Operation</th>
					
					<th>Date</th>
				</tr>
			
					<?php

						while ($result=mysqli_fetch_assoc($data)) 
						{
							echo "<tr>
									<td>".$result['id']."</td>
									<td>".$result['name']."</td>
									<td>".$result['brunch']."</td>
									<td>".$result['email']."</td>
									


									<td><a href='editfaculty.php?id=$result[id]&fn=$result[name]&br=$result[brunch]&em=
									$result[email]&ps=$result[password]'><button>Edit</button></a></td>
									
									<td><a href='deletefaculty.php?id=$result[id]&fn=$result[name]&br=$result[brunch]&em=
									$result[email] &ps=$result[password]' onclick='return checkdelete()'><button>Delete</button></a></td>

									

									<td>".$result['date']."</td>
								</tr>";
						}
					}
					else
					{
						echo "No Faculty record found";
					}

					?>

	 		</table>
	 		<script>

	 			function checkdelete()
	 			{
	 				return confirm('Are you sure you want to delete this Faculty data???');
	 			}

	 		</script>
 	</div>	

 	<div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>

</body>
</html>