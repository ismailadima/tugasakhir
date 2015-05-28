<!DOCTYPE html>
<html>	
<head>
<title>Login | Anak Rimba Adventure</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('assets/css/login.css');?>" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<h1>Anak Rimba Adventure</h1>
	<div class="login-form">
		<h2>Login</h2>
			<div class="form-info">
					<form action="<?php echo base_url('login_ctr/login');?>" method="POST">
							<input type="text" class="email" placeholder="Email Address" required="" name="username"/>
							<input type="password" class="password" placeholder="Password" required="" name="password"/>
						<ul class="login-buttons">
							<li><input type="submit" value="LOGIN"/></li>

							<div class="clear"> </div>
						</ul>
					</form>
			</div>
	</div>
</body>
</html>