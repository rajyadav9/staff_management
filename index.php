<?php
	
	require 'dbconfig/config.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<div style="background-color:#7bceeb;">

	<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
     <td valign="top" align="left" background="img/register.png" style="background-repeat:no-repeat; background-size:cover;"> 
<body style="background-color:#3498db" >

	<div id="main">
	
		<center>
			<h2 style="color:#2980b9">Login Form</h2>
			<img class="image1" src="img/log.png" alt="Failed to load image" /><br><br><br><br><br>
		
		</center>


	
	
	<form class="loginform" action="index.php" method="post">
	<label><b>Username:</b></label>
	<input name="username" type="text" class="inputvalues" placeholder="type ur username" required/><br>
	<br><label><b>Password:</b></label>
	<input name="password" type="password" class="inputvalues" placeholder="type ur password" required/>
	<br>
	<input name="login" type="submit" id="login-btn" value="Login"/><br>
	<a href="register.php"><input type="button" id="register-btn" value="Register"/></a>
	
	</form>
	
	<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$query="select * from user where username='$username' and password='$password'";
			$query_run=mysqli_query($con, $query);
			if(mysqli_num_rows($query_run)>0)
				{
					$_SESSION['username']=$username;
					header('location:home.php');
				}
				else
				{
					echo '<script type="text/javascript"> alert("Invalid credentials..") </script>';
				}
		}
	?>
	</div>
	



</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


</html>