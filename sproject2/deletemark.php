<?php
		
	include("connection.php");
	error_reporting(0);

	$did=$_GET['cid'];
	$query="DELETE FROM `marks` WHERE `cid`='$did'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "<script>alert('Record Deleted')</script>";
		?>

		<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/viewmark.php">

		<?php
	}
	else
	{
		echo "sorry,Delete process failed";
	}


?>