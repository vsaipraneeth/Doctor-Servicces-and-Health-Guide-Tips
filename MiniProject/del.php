<?php   

if($_POST)
{
	$id = $_POST['id'];
	$con = mysqli_connect("localhost","root","","sravan");
	$sql="DELETE FROM cart WHERE id = '".$id."'";
	mysqli_query($con,$sql); 
}

?>