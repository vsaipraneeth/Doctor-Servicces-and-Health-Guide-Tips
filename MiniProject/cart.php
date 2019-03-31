<link href="cart2.css" rel="stylesheet" type="text/css"></link>
<script src="background/java.js" type="text/javascript" rel="javascript"></script>

<style>
.minimise{
	width:100%;
	height:50px;
	line-height:50px;
	bacground-color:green;
	color:black;
}
</style>
<script>
		
		
			$(document).ready(function(){
				$(".minimise").click(function(){
					$(".slide").hide();
					
				});
				
				
			$(".del").click(function(){
				var nameuser = $(".nameuser").val();
				var id=$(this).attr('id');
					//alert(id);
					
					$.ajax({
					url:"del.php",
					method:"POST",
					data:{id:id},
					dataType:"text",
					success:function(data)
					{
						
						$.ajax({
				
							url:"cart.php",
							method:"GET",
							data:{nameuser:nameuser},
							dataType:"text",
							success:function(data)
							{
									$(".slide").html(data);
							}	
							
						  })
						
						
					}
						
					})
				
				
			});
				                });
								
								
			
			

</script>

<div class="minimise">
minimise cart
</div>


<?php          
	$con = mysqli_connect("localhost","root","","sravan");
	if($_GET){
	$nameuser = $_GET['nameuser'];
	$sql="SELECT * FROM cart WHERE nameuser='".$nameuser."'";
	
	
	$result =mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)){
		//$time=$row['time'];
		$time1=time();
		$time2=$row['time'];
		$time3 = $time1 - $time2;
?>

<input type="hidden" name="nameuser" value="<?php  echo $nameuser;?>"  />
    <script>
	//alert("<?php  echo $nameuser?>");
	</script>
	<?php     
	
	$id = $row['idproduct'];
	$sql1="SELECT * FROM post WHERE id= '".$id."'";
	$result1 =mysqli_query($con,$sql1);
	while($row1=mysqli_fetch_array($result1)){
	
	?>
	
<div class="carttempout">
	<div class="shopname">
        <?php  echo  $row1['name']  ; ?>      
	</div>
	<div class="address">
	<?php    echo  $row1['address'];   ?>
	
	</div>
	<div class="date">

	
	<?php  
						
						
							if($time3>60)
										{
											$time4=$time3/60;
											if($time4 > 60)
											{
												$time5=$time4/60;
												if($time5>24)
												{
													$time6=$time5/24;
													echo floor($time6).' days ago';
												}
												else{
													echo floor($time5).' hrs ago';
												}	
											}
											else{
												echo floor($time4).'    mins ago';
											}	
										}
										elseif($time3<60)
										{
											echo floor($time3).' sec ago';
										}
								?>
	</div>
	<div class="contactcart">
	 <?php    echo  $row1['contact'];   ?>
	
	</div>
</div>
<div class="del" id=" <?php  echo $row['id']; ?>" >
			
		delete
	
</div>
<?php  

	}
?>


<?php   
	}
	}
?>

