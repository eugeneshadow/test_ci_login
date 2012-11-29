<!DOCTYPE html><html lang="en">
<head>
	<title>Login</title>
</head>
<body>
<?php foreach ($info as $value) {
	echo "User Name: ". $value['user_id'] . "<br/>"; 	
	echo "Password: ". $value['password'] . "<br/>"; 	
	echo "Email: ". $value['email'] . "<br/>"; 	
}?>
</body>
</html>