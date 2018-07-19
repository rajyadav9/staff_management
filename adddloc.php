<?php 
$con=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,"staff");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Department</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script></head>
<body background="bck.jpg">


<div class="container">
<form method="post"  action="adddloc.php"><br><br>
<h3>Add  location details</h3>

<div>
<label><b>Department No:</b></label><br>
<input type="text" class="form-control" placeholder="dno" name="dno" required/><br>
<label><b>Department Location:</b></label>
<input type="text" class="form-control" placeholder="department location" name="dloc" required/><br>
<!--<label><b>Manager SSN:</b></label>
<input type="text" class="form-control" placeholder="MgrSSN" name="MgrSSN" required/><br> -->

<input name="submit" type="submit" id="login-btn" value="SAVE"/><br>
	<a href="dlocation.php"><input style="font-weight:bold;background-color:blue" type="button" value="CLICK TO GO back" name="dep" id="login-btn"/></a>


	<?php
		if(isset($_POST['submit']))
		{
			
			$dno=$_POST['dno'];
			$dloc=$_POST['dloc'];
			//$MgrSSN=$_POST['MgrSSN'];
			
			
				$query="select * from dlocation where dno='$dno'";
				
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("department  already exists .. Try again") </script>';
				}
				else
				{
					$query="insert into dlocation values('$dno','$dloc')";
					
					$querr=mysqli_query($con,$query);
		
				if($querr)
				{
					echo '<script type="text/javascript"> alert("details added") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("error") </script>';
				}
				
				}
				
			
		
		}
	?>
	
	
</div>