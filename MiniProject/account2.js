 $(document).ready(function(){
	 

  var i=0;
  var isi=0;
  var ireg=0;
 $(".signin , .registerhere").click(function(){
	if(isi==0){
	$(".signplace").animate({left: "-=250px"}, 700);
	}
	
	if((ireg==1) && (isi==0))
	{
		$(".signplace2").animate({left: "-=250px"}, 700);
	}
	isi++;
	ireg=0;
	 
 });
 
  $(".register, .signinhere").click(function(){
	if(ireg==0){
	
	$(".signplace2").animate({left: "+=250px"}, 700);
	
	}
	if((ireg==0) && (isi==1))
	{
		$(".signplace").animate({left: "+=250px"}, 700);
	}
	 ireg++;
	 isi=0;
	 
	 
 });
 
 $(".regmin").click(function(){
	 $(".signplace2").animate({left: "-=250px"}, 700);
	 ireg=0;
	 isi=0;
	 
 });
 $(".signmin").click(function(){
	 $(".signplace").animate({left: "+=250px"}, 700);
	 ireg=0;
	 isi=0;
	 
 });
	
	
	//register values dynamically sending to register.php for entering into database
	
	
	$(".submitregister").click(function(){
		
		var ck_name = /^[A-Za-z0-9 ]{3,20}$/;
		var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i ;
		var ck_username = /^[A-Za-z0-9_]{1,20}$/;
		var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
		
		var name = $(".registername").val();
		var email = $(".registeremail").val();
		var pass = $(".registerpass").val();
		var errors = [];
		
			if(!email ==""){
				 if (!ck_email.test(email)) {
				  errors[errors.length] = "You must enter a valid email address.";
				 }
				 else{
					// alert("email is corect");
				 }
			}
			if(!name ==""){
				if (!ck_username.test(name)) {
								errors[errors.length] = "You valid UserName no special char .";
					}
				else{
					//alert("u entered correct username");
				}
			}
			if(!pass ==""){
				 if (!ck_password.test(pass)) {
				  errors[errors.length] = "You must enter a valid Password min 6 char.";
				 }
				 else{
					// alert("pass is correct");
				
				 }
			}
				 if (errors.length > 0) {
				reportErrors(errors);
				errors.length=0;
			}
		
		
		
		else{
			$.ajax({
					url:"register.php",
					method:"POST",
					data:{name:name,email:email,pass:pass},
					dataType:"text",
					success:function(data)
					{
						$('.signstatus').html(data);
						 $(".signincontent").show();
						//$(".registercontent").hide();
						
					}
			});
			
		}
		
		
	});
	
	
	
	$(".submitsignin").click(function(){
		
		var ck_name = /^[A-Za-z0-9 ]{3,20}$/;
		var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i ;
		var ck_username = /^[A-Za-z0-9_]{1,20}$/;
		var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
		var email = $(".signinemail").val();
		var pass = $(".signinpass").val();
		var errors = [];
		
				
		
		
		
		
			if(!email ==""){
				 if (!ck_email.test(email)) {
				  errors[errors.length] = "You must enter a valid email address.";
				 }
				 else{
					// alert("email is corect");
				 }
			}
				if(!pass==""){
				 if (!ck_password.test(pass)) {
				  errors[errors.length] = "You must enter a valid Password min 6 char.";
				 }
				 else{
					// alert("pass is correct");
				
				 }
				}
				 if (errors.length > 0) {
				reportErrors(errors);
				
				errors.length=0;
				
				}
				
				
				
		
				else {
		
						$.ajax({
					url:"signin.php",
					method:"POST",
					data:{email:email,pass:pass},
					dataType:"text",
					success:function(data)
					{
						$('.signstatus').html(data);
						 $(".signincontent").show();
						//$(".registercontent").hide();	
					}
					});		
			
			}
			
		
		
		
	});
 
 
				function reportErrors(errors){
				 var msg = "Please Enter Valide Data...\n";
				 for (var i = 0; i<errors.length; i++) {
				  var numError = i + 1;
				  msg += "\n" + numError + ". " + errors[i];
				 }
				 alert(msg);
				}
 
 
 
 });