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
	<title>view_student_performance|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 	<div style="font-size: 30px;"><span style="color: #b3ffff;">ACADAMIC PERFORMANCE</span> <span style="color: #ff9900;">of Students</span></div>
 	<a href="admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>

 	<div style="background-color:white;min-width: 800px;min-height: 480px;margin: auto;margin-top: 50px;margin-bottom: 50px; padding: 20px; text-align: center;padding-top: 50px;font-weight: bold;font-family: tahoma;color:#000033; ">Students|Performance_Record 
 		<div style="margin-left: 990px; background-color: white;width: 200px;height: 40px;">
 			<br><br>
 		</div>
 		<?php

 				$query="SELECT * FROM `performance`";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				
				
				if($total!=0)
				{
		?>
			<table >
				<tr>
					
					<th>ID No</th>
					<th>Name</th>
					<th>Semester</th>
					<th>Final Attendance % </th>
					<th>CGPA</th>
					<th>Performance</th>
					

					
					
				</tr>
			
					<?php

						while ($result=mysqli_fetch_assoc($data)) 
						{
							
							$a=$result['fattendance'];
							$b=$result['cgpa'];
							
							if($a>74)
							{

								if  ($b>=9.0 && $b<10) 
									{
										$p=" Outstanding & Regular";
									}
								elseif ( $b>=8.0 && $b<9.0) 
									{
										$p="Excellent & Regular";
									}
								elseif ( $b>=7.0 && $b<8.0) 
									{
										$p="Very_Good & Regular";
									}
								elseif ( $b>=6.0 && $b<7.0) 
									{
										$p="Good & Regular";
									}
								elseif ( $b>=5.0 && $b<6.0) 
									{
										$p="Fair & Regular";
									}
								elseif ( $b>=4.0 && $b<5.0) 
									{
										$p="Moderate & Regular";
									}
								elseif ( $b>=3.0 && $b<4.0) 
									{
										$p="Poor but Regular";
									}
								elseif ( $b>=2.0 && $b<3.0) 
									{
										$p="Exposed but Regular";
									}
								else  
									{
										$p="Fail but Regular";
									}
							}
							else
							{

								if  ($b>=9.0 && $b<10) 
									{
										$p=" Outstanding but Irregular";
									}
								elseif ( $b>=8.0 && $b<9.0) 
									{
										$p="Excellent but Irregular";
									}
								elseif ( $b>=7.0 && $b<8.0) 
									{
										$p="Very_Good but Irregular";
									}
								elseif ( $b>=6.0 && $b<7.0) 
									{
										$p="Good but Irregular";
									}
								elseif ( $b>=5.0 && $b<6.0) 
									{
										$p="Fair but Irregular";
									}
								elseif ( $b>=4.0 && $b<5.0) 
									{
										$p="Moderate but Irregular";
									}
								elseif ( $b>=3.0 && $b<4.0) 
									{
										$p="Poor & Irregular";
									}
								elseif ( $b>=2.0 && $b<3.0) 
									{
										$p="Exposed & Irregular";
									}
								else  
									{
										$p="Fail & Irregular";
									}
							}		

							echo "<tr>
									<td>".$result['id']."</td>
									<td>".$result['name']."</td>
									<td>".$result['semester']."</td>
									<td>".$result['fattendance']."</td>
									<td>".$result['cgpa']."</td>
									<td>".$p."</td>
									


									
								</tr>";
						}
					}
					else
					{
						echo "No Students_performance record found";
					}

					?>

	 		</table>
	 		<script>

	 			function checkdelete()
	 			{
	 				return confirm('Are you sure you want to delete this Students_performance data???');
	 			}

	 		</script>
 	</div>	

 	<div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>

</body>
</html>