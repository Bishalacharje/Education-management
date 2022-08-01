<?php
		
	include("connection.php");
	error_reporting(0);

	$did=$_GET['id'];
	$query="DELETE FROM `students` WHERE `idno`='$did'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "<script>alert('Record Deleted')</script>";
		?>

		<META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/sproject2/viewstudent.php">

		<?php
	}
	else
	{
		echo "sorry,Delete process failed";
	}


?>