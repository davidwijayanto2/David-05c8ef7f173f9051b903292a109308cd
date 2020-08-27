<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include ("import.php"); ?>
<title>Login</title>
</head>
<body>
	<div id="loginform">
		<form id="formlogin" name="formlogin" action="../back-end/login.php" method="post" accept-charset="utf-8">
			<div>
				<label>Username</label>
				<input id="txtusername" type="text" name="txtusername" value="">
			
				<label>Password</label>
				<input id="txtpassword" type="Password" name="txtpassword" value="">
			</div>
			<div>
				<input type="submit" name="btnlogin" id="btnlogin" action="../back-end/login.php" value="login">
			<div>
		</form>
	</div>
	
	<div>
		<button type="button" name="btnregistrasi" id="btnregistrasi">Registrasi</button>
	<div>
</body>
</html>
<script type="text/javascript" language="javascript">
	document.getElementById("btnregistrasi").onclick= function(){
    	window.location.href = "register.php"
    }

</script>