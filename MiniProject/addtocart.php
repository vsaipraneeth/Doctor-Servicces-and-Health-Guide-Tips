<?php     

if($_POST){
	$id = $_POST['id'];
	$time=time();
	$nameuser = $_POST['nameuser'];
	//$time=$_POST['time'];
	$con = mysqli_connect("localhost","root","","sravan");
	
	$sql="INSERT INTO cart(nameuser,idproduct,time) VALUES ('$nameuser','$id','$time')";
	
	mysqli_query($con,$sql);

	mysqli_close($con);
	
	
}
 ?>

