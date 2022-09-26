<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="login/submit" method="post" name="form_login">
		<label for="txt_email">Email</label><br>
		<input type="email" id="txt_email" name="txt_email"><br>

		<label for="txt_password">Password</label><br>
		<input type="password" id="txt_password" name="txt_password">
		<br><br>

		<button type="submit">Login</button>
	</form>
	<br>
	<div>
		<a href="register">Create new account</a>
	</div>

</body>
</html>
