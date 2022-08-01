<?php
		
	include("connection.php");
	error_reporting(0);

	$did=$_GET['id'];
	$query="DELETE FROM `notice` WHERE `id`='$did'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "<script>alert('notice Deleted')</script>";
		?>

		<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/anotice.php">

		<?php
	}
	else
	{
		echo "sorry,Delete process failed";
	}


?>