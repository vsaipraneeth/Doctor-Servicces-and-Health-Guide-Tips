 $(document).ready(function(){
	 
 $(".signincontent").hide();
 $(".signplace").hide();

 $(".signin , .registerhere").click(function(){
	 
	 $(".signplace").show();
	 $(".signincontent").show();
	 $(".registercontent").hide(); 
	 
 });
 
  $(".register, .signinhere").click(function(){
	 
	 $(".signplace").show();
	 $(".signincontent").hide();
	 $(".registercontent").show();
	 
	 
 });
 
	$(".signminimise").click(function(){
	
		 $(".signplace").hide();
	})
	
	/*
	$(".signinhere").click(function(){
		 $(".signincontent").hide();
		  $(".registercontent").show();
		
	});
	*/
	
	//register values dynamically sending to register.php for entering into database
	
	
	$(".submitregister").click(function(){
		
		var name = $(".registername").val();
		var email = $(".registeremail").val();
		var pass = $(".registerpass").val();
	//	var passcheck = $(".registerpass1").val();
		
			$.ajax({
					url:"register.php",
					method:"POST",
					data:{name:name,email:email,pass:pass,passcheck:passcheck},
					dataType:"text",
					success:function(data)
					{
						alert("email");
						$('.signstatus').html(data);
						 $(".signincontent").show();
						$(".registercontent").hide();
						
					}
			})
		
		
	});
	
	
	
	$(".submitsignin").click(function(){
		
		var email = $(".signinemail").val();
		var pass = $(".signinpass").val();
		
			$.ajax({
					url:"signin.php",
					method:"POST",
					data:{email:email,pass:pass},
					dataType:"text",
					success:function(data)
					{
						$('.signstatus').html(data);
						 $(".signincontent").show();
						$(".registercontent").hide();
						
					}
			})
		
		
	});
 
 
 
 });