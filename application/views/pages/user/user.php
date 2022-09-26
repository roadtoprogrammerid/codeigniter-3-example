<?php
/** @var User_model $user */
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $user->name ?> Page</title>
</head>
<body>
	<h1>Hello, <?php echo $user->name ?></h1>
	<div>
		<p>This is your data:</p>
		<label for="name">Name</label>
		<input id="name" type="text" value="<?php echo $user->name ?>">
		<br>
		<label for="email">Email</label>
		<input id="email" type="text" value="<?php echo $user->email ?>">
	</div>
	<br>
	<div>
		<form action="logout" method="get">
			<button type="submit">Logout</button>
		</form>
	</div>
</body>
</html>
