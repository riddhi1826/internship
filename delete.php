<?php
include("connection.php");
$name=$_GET['na'];
$query="DELETE FROM APPLICATION WHERE Name='$name'";
$data=mysqli_query($conn,$query);
if($data){
	echo "<script>alert('Record Deleted')</script>";
	?>
	 <META HTTP-EQUIV="Refresh" CONTENT="0;URL=display.php"> 
	 <?php
}
else{
	echo "<font color='green'>Sorry,Delete process failed";
}

?>