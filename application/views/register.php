<!DOCTYPE html><html lang="en">
<head>
	<title>Login</title>
</head>
<body>
<form action="<?php echo base_url();?>index.php/login/register_process" method="post">
    	
    	User Id: <input type="text" class="large" value="" name="username" required="required" placeholder="Username" />                
        Password: <input type="password" class="large" value="" name="password" required="required" placeholder="Password" />
        Email: <input type="text" class="large" value="" name="email" required="required" placeholder="Email Address" />
                
        <input type="submit" value="Register" class="submit"></input>
     </div>	
</form>
</body>
</html>