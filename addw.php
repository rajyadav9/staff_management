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
<form method="post"  action="addw.php">
<h3>Add Working details</h3>

<div>
<label><b>SSN:NO</b></label>
<input type="text" class="form-control" placeholder="enter ssn" name="ssn" required/><br>
<label><b>PROJECT-NO:</b></label>
<input type="text" class="form-control" placeholder="project-NO" name="pno" required/><br>
<label><b>ProjeCT Hours:</b></label>
<input type="text" class="form-control" placeholder="project hours" name="phrs" required/><br>

<input name="submit" type="submit" id="login-btn" value="SAVE"/><br>
	<a href="work.php"><input style="font-weight:bold;background-color:blue" type="button" value="CLICK TO GO back" name="wor" id="login-btn"/></a>


	
	
	<?php
		if(isset($_POST['submit']))
		{
			
			$ssn=$_POST['ssn'];
			$pno=$_POST['pno'];
			$phrs=$_POST['phrs'];
			
				$query="select * from workson where ssn='$ssn' and pno='$pno'";
				
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					echo '<script type="text/javascript"> alert("ssn  already exists .. Try again") </script>';
				}
				else
				{
					$query="insert into workson values('$ssn',$phrs,$pno)";
					
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