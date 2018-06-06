<html>
<head>
<title>Welcome to Bengkel Ahass</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>
<i><h2 style="text-align:center">Login Admin</h2></i>
<div class="login">
<form action="<?php echo site_url('Login_Ahass/cek_login') ?>" method="POST" style="width:500px; margin:auto; text-align:center">
	<table style="width:100%">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" style="width:50%"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" style="width:50%"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" value="Login">Login</button></td>
			</tr>
		</table>
</form>
</body>
</html>