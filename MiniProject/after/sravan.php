<!DOCTYPE html>
<?php    


?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Health Assist</title>
<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"></link>
<link href="sravan.css" type="text/css" rel="stylesheet"></link>
<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi|Oleo+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet"></link>
<script src="java.js" rel="jaascript" type="text/javascript"></script>
<script src="tips.js" rel="jaascript" type="text/javascript"></script>
<script src="tips2.js" rel="jaascript" type="text/javascript"></script>

<script src="account.js" rel="jaascript" type="text/javascript"></script>

<script>
$(document).ready(function(){



$('.next').click(function(){
	
		$va = $(".sel").val();
		if($va == ''){
				alert("please fill all fields");
				return false;
				
					}
     	if($va !=''){
		 var city=$(".sel").val();
				$.ajax({
					url:"next2.php",
					method:"POST",
					data:{city:city},
					dataType:"text",
					success:function(data)
					{
					$('.mainsuperclass').html(data);											
					}
						});
					   return false; 
		}
						 }); 
				
			/*	$.ajax({
					url:"ambuslide/sravan.html",
					method:"POST",
					data:{},
					dataType:"text",
					success:function(data)
					{
					$('.ambuslide').html(data);											
					}
				})
						 
				*/
	
						 
						 			 
});
   
 
  


</script>
</head>
<body>


<div class="container-fluid">
	<div class="row hello">
		<div class=" hidden-lg hidden-md  col-sm-3 col-xs-2 ">
		</div>
		<div class="col-lg-5 col-md-5 col-sm-6 col-xs-10 dm">
			<div class="boxout" >
				<div class="box"  >
				<img src="ha11.png"/>
				</div>
				<!--<div class="box"  >
				Health Assist
				</div>-->
			</div>
				
		</div>
		
		<div class="col-lg-1 col-md-0 hidden-sm hidden-xs">
		</div>
		
		<div class="col-lg-6 col-md-7 hidden-sm hidden-xs dm3 ">
		A healthy body holds a healthy soul and mind
		</div>
		
		<div class="hidden-lg hidden-md col-sm-12 col-xs-12 dm2 ">
		A healthy body holds a healthy soul and mind
		</div>
	</div>
</div>




<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			<a href="loginregister.php"  >	  <div class="signincontainer ">
					
						Sign In / Register
				  </div>  </a>
				  
				  
				 
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="sravan.php">Home</a></li>
				<!---	<li class="active"><a href="index.php">About us</a></li>
					<li class="active"><a href="index.php">Contact us</a></li>
					<li class="active"><a href="index.php">FAQ's</a></li>    ---->
				  </ul>
		 
				</div>
		  </div>
</nav>


<div class="back1 backimagescroll hidden-sm hidden-xs">

<img src="ha2.jpg"/>
</div>
<div class="back2 backimagescroll2 hidden-lg hidden-md">

<img src="ha2.jpg"/>
</div>



<div class="container-fluid body">
	<div class="row ">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												
												<div id="myslide" class="carousel slide " data-ride="carousel" data-interval="4000">
											
												<ol class="carousel-indicators ">
												<li data-target="#myslide" data-slide-to="0" class="active"></li>
												<li data-target="#myslide" data-slide-to="1"></li>
												<li data-target="#myslide" data-slide-to="2"></li>
												</ol>
												
												<div class="carousel-inner  ">
													<div class="item active">
													<img src="slideimg/1.jpg">
														<!---<div class="carousel-caption">
														<h6>wide  number of coupons and deals</h6>
														</div>---->
													</div>
													<div class="item ">
													<img src="slideimg/2.jpg">
													</div>
													<div class="item ">
													<img src="slideimg/3.jpg">
													</div>
												</div>
												
												<a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
												<span class="glyphicon glyphicon-chevron-left"></span>
												</a>
												<a class="right carousel-control" href="#myslide" role="button" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"></span>
												</a>
												
											
											</div>
			
			</div>
			
				
				
				<div class="container-fluid col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
					<div class="row">
					<!--		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidebox mainsuperclass45">
								</div>   -->
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidebox3 mainsuperclass33 tips3">
								<div class="tipsimage3">
								<img src="ambuu122.png" />
								</div>
								<div class="mattertips3">
								<b>	To find nearest emergency services near you, hover on this</b>
								</div>
								<div class="absemerg">
								<div class="tipspara3">please enter your locality to show emergency services near you</div>
								
								<form action="emergencynext.php" method="get">
								<select class="sel1" name="city">
									<?php   
									$con = mysqli_connect("localhost","root","","sravan");
										$sql="SELECT * FROM city";
										$result =mysqli_query($con,$sql);
										while($row=mysqli_fetch_array($result)){
									?>
									<option value="<?php  echo $row['city'] ?>" name="option">  <?php  echo $row['city'] ?>  </option>
									<?php   
										}
									?>
									</select>
								
								
								
								<input type="submit" name="submit" value="click here" id="3" class="tipsnext3"/>
									</form>
								</div>
							</div>
					</div> 
				</div> 
				
				
				
				
				<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
				</div>
				
				
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidebox mainsuperclass45">
								</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidebox mainsuperclass">
									<div class="bodytitle">
									<p>Consult a doctor at your nearest locations</p>
									<p>	Select Your City Here</p>
									<label> City:</label>
									
									<select class="sel">
									<?php   
									$con = mysqli_connect("localhost","root","","sravan");
										$sql="SELECT * FROM city";
										$result =mysqli_query($con,$sql);
										while($row=mysqli_fetch_array($result)){
									?>
									<option value="<?php  echo $row['city'] ?>" name="option">  <?php  echo $row['city'] ?>  </option>
									<?php   
										}
									?>
									</select>
									</br>
									<input type="submit" name="submit" value="next" id="3" class="next"/>
									</div>
							</div>
					</div>
				</div>
				
<!---  emergency --->

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidebox mainsuperclass2 tips1">
								<div class="tipsimage1">
								<img src="doctor3.png" />
								</div>
								<div class="mattertips1">
								<b><b>	To get free health services,hover on this</b></b>
								</div>
								<div class="tipspara1">click here for free health services </div>
							<a href="pra/doctorservices.php">	<input type="submit" name="submit" value="click here" id="3" class="tipsnext1"/></a>
							</div>
					</div>
				</div>


				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slidebox mainsuperclass2 tips">
								<div class="tipsimage">
								<img src="bulb3.png" />
								</div>
								<div class="mattertips">
								<b>	For health tips, hover on this</b>
								</div>
								<div class="tipspara">click here for free health tips </div>
								<a href="praneeth/health.html"><input type="submit" name="submit" value="click here" id="3" class="tipsnext"/></a>
							</div>
					</div>
				</div>				
		
		</div>
		
		
		
		
			
		
		<div class="container-fluid foot2">
	<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footcontact">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 contact" >
						<div class="downbox" id="contact1">
								<div class="content1">
								<b>ABOUT US</b>
								</div>
							<a href="about.php">	<div class="content2">
								CLICK HERE
								</div></a>
								
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 contact" >
							<div class="downbox" id="contact2">
								<div class="content1">
								<b>CONTACT US</b>
								</div>
							<a href="contactus.php">	<div class="content2">
								CLICK HERE
								</div>		
							</div></a>
					
					</div>
				
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 contact" >
								<div class="downbox" id="contact3">
								<div class="content1">
								<b>FAQ's</b>
								</div>
								<div class="content2">
								CLICK HERE
								</div>		
						</div>
					</div>
				
				</div>
			</div>
	</div>
</div>
		
		
		
		
		
		
<div class="foot">
<b>All Copy rights Reserved  2016 @www.healthassist.com</b>
</div>
		
		
		
</div>


<!--
<div class="container-fluid body2">
helloooo this is 2nd page

</div>

-->



				<div class="signplace">
							<div class="signstatus">
							
							</div>
				  
							<div class="signincontent">
									<h4>	sign in </h4>
									<input type="text" name="signinemail" class="signinemail" placeholder="email id"/>
									<input type="text" name="signinname" class="signinpass" placeholder="password"/>
									<input type="submit" class="submitsignin"/>
									Don't have an account register 
									<div class="signinhere"><b>here</b></div>
									
							</div>
							
							<div class="registercontent">
									<h4>	Register  </h4>
									<input type="text" name="signinnamename" class="registername" placeholder="name"/>
									<input type="text" name="signinnameemail" class="registeremail"placeholder="email id"/>
									<input type="text" name="signinnamepass" class="registerpass"placeholder="password"/>
									<input type="text" name="signinnamepasscheck"class="registerpass1" placeholder="retype password"/>
									<input type="submit" class="submitregister"/>
									
									Already have an account login
									<div class="registerhere"><b>here</b></div>
							</div>
							
							<div class="signminimise">
									minimise
							
							</div>
					
				  
				  </div>




<script src="bootstrap/js/java1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>