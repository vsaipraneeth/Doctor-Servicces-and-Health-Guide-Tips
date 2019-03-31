<link href="css/emergency.css" type="text/css" rel="stylesheet"></link>
<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi|Oleo+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet"></link>
<script src="java.js" rel="javascript" type="text/javascript"></script>
<div class="bodytitle">
	<p>	Check the emergency services near you</p>
	<p> <?php  if($_GET){  $city = $_GET['city']; echo "In ".$city;   }  ?>  </p>
	<p>	Locality Here</p>
	
<form action="postshop2.php" method="get">
	
	<label> locality:</label>
	
	<select class="sel" name="optioncity">
			<?php   
			 if($_GET){ 
			$city = $_GET['city'];
			$con=mysqli_connect("localhost","root","","vinnu");
			$sql="SELECT * FROM ".$city;
				$result =mysqli_query($con,$sql);
					while($row=mysqli_fetch_array($result)){
			?>
			<option value="<?php  echo $row['locality'] ?>" name="option">  <?php  echo $row['locality'] ?>  </option>
			<?php   
					}
					} 
			?>
		</select></br>
		<input type="submit" name="submit" value="submit" id="3" class="next"/>

</form>

</div>
<script>

					
