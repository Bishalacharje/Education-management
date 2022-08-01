<?php

	include("connection.php");
	error_reporting(0);
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
	<title>add_notice|sp2</title>
</head>
<body style="font-family: tahoma;background-color:#e9ebee;">

	<div style="height: 100px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 30px;"><span style="color: #b3ffff;">ACADAMIC PERFORMANCE</span> <span style="color: #ff9900;">of Students</span>
 		</div>
 		<a href="admindashbord.php"><div style="background-color: #d9dfeb;width: 70px;text-align: center;padding: 10px;border-radius: 4px;float: right;margin-right: 10px;font-weight: bold;color: white;border: none; color: #000033;">HOME</div></a>
 	</div>

 	<div style=" display: flex; background-color:white;min-width: 300px;min-height: 350px;margin: auto; text-align: center;font-weight: bold;font-family: tahoma;color:#000033; ">

		<div style="flex: 1;background-color: white;">
			<span style="font-size: 18px;"><br>Add notice<br><br><br></span>
			<form method="GET">
				
				Post ID<input name="postid" value="<?php //echo $email ?>" type="text" id="text" placeholder="Post Id" style="height:30px;width:180px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;margin-left: 5px;"><br><br>

				Heading<input name="head" value="<?php //echo $email ?>" type="text" id="text" placeholder="Post heading" style="height:30px;width:180px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;margin-left: 5px;"><br><br>

				<textarea name="post" value="<?php //echo $email ?>" type="text" id="text" placeholder="Write the post" style="height:80px;width:250px;border-radius: 5px;border: solid 1px #ddd;padding: 4px;font-family: tahoma;"></textarea><br><br>


				<input  name="submit" type="submit" id="button" value="Add notice" style="width: 280px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color:#000033;color: #d9dfeb; ">
			  <br><br><br>

			</form>

			<?php

				if($_GET['submit'])
				{
					$id=$_GET['postid'];
					$ph=$_GET['head'];
					$po=$_GET['post'];
					


					if ($id!=""&&$ph!=""&&$po!="")
					{
						$query="INSERT INTO `notice`(`id`, `headline`, `post`, `date`) VALUES ('$id', '$ph','$po', current_timestamp())"; 
							
						$data=mysqli_query($conn,$query);
						if($data)
						{
							echo "<script>alert('Notice Added')</script>";
						}
					}
					else
					{
						echo "<script>alert('All fields are required !')</script>";
					}
				}


				
			?>

		</div>
		
		<div style="flex: 2;background-color: #e9ebee;">

		<span><br>Notices List are here<br><br></span>	


 		<?php

 				$query="SELECT * FROM `notice`";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				
				
				if($total!=0)
				{
		?>
			<table >
				<tr>
					<th>Post Id</th>
					<th>Post Heading</th>
					<th>Posts</th>
					<th>Date</th>
					<th colspan="2">Operation</th>
					
					
				</tr>
			
					<?php

						while ($result=mysqli_fetch_assoc($data)) 
						{
							echo "<tr>
									<td>".$result['id']."</td>
									<td>".$result['headline']."</td>
									<td>".$result['post']."</td>
									<td>".$result['date']."</td>
									


									<td><a href='editnotice.php?pid=$result[id]&head=$result[headline]&post=$result[post]'><button>Edit</button></a></td>
									
									
									<td><a href='deletenotice.php?id=$result[id]' onclick='return checkdelete()'><button>Delete</button></a></td>

									

									
								</tr>";
						}
					}
					else
					{
						echo "No Notice found";
					}

					?>

	 		</table>
	 		<script>

	 			function checkdelete()
	 			{
	 				return confirm('Are you sure you want to delete this notice???');
	 			}

	 		</script>

		</div>
	</div>

 	<div style="height: 30px;background-color: #000033;color: #d9dfeb;padding-left: 8px;padding-top: 4px;">

 		<div style="font-size: 16px;text-align: center;">@powerd_by</div>
 	</div>

</body>
</html>