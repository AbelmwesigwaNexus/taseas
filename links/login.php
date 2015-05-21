<?php
   require "../files/connection.php";
	require "../files/config.inc.php";

	if((Admin())){
	  header("Location:administrator.php");
	  exit();
	  
	  }?>
<!DOCTYPE html>
<html>
	
<head>
	<title>The Login</title>
		<meta charset="utf-8">
		<link href="../css/login_style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	
				 <!-----start-main---->
				<div class="login-form">
					<div class="head">
						<img src="../images/mem2.jpg" alt=""/>
						
					</div>
				<form>
				<?php
				
				loginAdministrator()
				
				?>
					<li>
						<input type="text" class="text" value="USERNAME" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'USERNAME';}" name="username" ><a href="#" class=" icon user"> </a>
					</li>
					<li>
						<input type="password" value="Password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Password';}" name="password"><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>
								<input type="submit" onClick="myFunction()" value="SIGN IN" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
		  <!-----start-copyright---->
   					<div class="copy-right">
					</div>
				<!-----//end-copyright---->
		 		
</body>
</html>