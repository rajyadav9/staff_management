<?php
session_start();
	require 'dbconfig/config.php';
?>

<html>
<head>
	<title>DELETE EMPLOYEE Page</title>
	<link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>

<?php
	$a='';
		$sql="select * from employee where name='$a'";
		$res=$con->query($sql);
		?>

<body style="background-color:#95a5a6">

<h1>DELETE EMPLOYEE</h1>
<br><br><br><br>
<h5><b>ARE YOU SURE YOU WANNA DELETE</b></h5>

<button class="btn btn-success" name="submit" value="submit">delete0</button></form>

</body>

		
		<?php
			$xx=$_SESSION['name'];
			?>
			
			<?php
				
			if(isset($_POST['submit']))
			{
				echo $xx;
			
				$sqll="delete from employee where name='$xx'";
				$con->query($sqll);
				echo '<script type="text/javascript"> alert("'.$xx.' deleted") </script>';
			}
			?>
</html>