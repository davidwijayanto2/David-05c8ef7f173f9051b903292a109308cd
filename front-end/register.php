<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Register</title>
</head>
<body>
	<div id="loginform">
		<form id="formregister" name="formregister" action="../back-end/register.php" onsubmit="return checkregister(this)" method="post" accept-charset="utf-8">
			<div>
				<label>Username</label>
				<input id="txtusername" type="text" name="txtusername" value="">
			
				<label>Password</label>
				<input id="txtpassword" type="password" name="txtpassword" value="">
				<label>Repeat Password</label>
				<input id="txtrepeatpassword" type="password" name="txtrepeatpassword" value="">
			</div>
			<div>
				<input type="submit" name="btnregister" id="btnregister" action="../back-end/register.php" value="register">
			<div>
		</form>
	</div>	
</body>
</html>
<script type="text/javascript" language="javascript">
	function checkregister(){
		var flag = true;
		if(document.getElementById('txtusername')==""){
			return confirm('username kosong');	
		}

		
	}
</script>