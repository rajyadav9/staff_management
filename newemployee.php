<?php
	session_start();
	require 'dbconfig/config.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>EMPLOYEE Page</title>
	<link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>

<body style="background-color:#95a5a6">
	<div style="background-color:#7bceeb;">
	<!--<div style="background-color:#7bceeb;">
	<h1>hello</h1>-->
	<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
   <tr>
     <td valign="top" align="left" background="img/a.png" style="background-repeat:no-repeat; background-size:cover; max-height:100%;">	 
	<div style="height:90px;margin:50px">
	
	<div style="margin-top:40px>
	<div class="row">
	<center>
	<div class= "col-xs-2">
		<a href="home.php"><input style="font-weight:bold" type="button" value="HOME" name="hom" id="btnn"/></a>
		</div>
		<div class="col-xs-2">
		<a href="employee.php"><input style="font-weight:bold" type="button" value="EMPLOYEE" name="emp" id="btnn"/></a>
		</div>
		<div class="col-xs-2">
		<a href="department.php"><input style="font-weight:bold" type="button" value="DEPARTMENT" name="dep" id="btnn"/></a>
		</div>
		<div class="col-xs-2">
		<a href="dlocation.php"><input style="font-weight:bold" type="button" value="DLOCATION" name="loc" id="btnn"/></a></div>
		<div class="col-xs-2">
		<a href="project.php"><input style="font-weight:bold" type="button" value="PROJECT" name="pro" id="btnn"/></a></div>
		<div class="col-xs-2">
		<a href="work.php"><input style="font-weight:bold" type="button" value="WORKS-ON" name="wor" id="btnn"/></a></div>
		<div class="col-xs-2">
		<a href="index.php"><input style="font-weight:bold" type="button" value="LOGOUT" id="btnn"/></a>
		</div>
	</center>
	</div>
	
	</div>
	
	
	
	
	<div>
	

	
	<a href="adde.php"><input  style="font-weight:bold" type="button" name="adde" value="ADD EMPLOYEE" id="bto"/></a>
	<center>
	<h2>Employee Details</h2>
	</center>
	<table class="table table-responsive" border="2" style="border-color:black; background-color:white">
		<tr>
			<th>slno</th>
			<th name="xxx">ssn</th>
			<th name="ppp">name</th>
			<th>address</th>
			<th>sex</th>
			<th>salary</th>
			<th>dno</th>
			<th>edit</th>
			<th>delete</th>
			
		</tr>
		<?php
		if(isset($_POST['san'])){
			$_SESSION['ssn']=$_POST['san'];
			header('Location: ./editemp.php');
		}
		
		$query="select * from employee";
		$res=$con->query($query);
		$i=1;
		
		while($row=$res->fetch_assoc())
		{
			$ssn=$row['ssn'];
			$name=$row['name'];
			$address=$row['address'];
			$sex=$row['sex'];
			$salary=$row['salary'];
			$dno=$row['dno'];
			//$xxx=$_POST['xxx'];

			echo '<tr>
			<td>'.$i.'</td>
			<td>'.$ssn.'</td>
			<td>'.$name.'</td>
			<td>'.$address.'</td>
			<td>'.$sex.'</td>
			<td>'.$salary.'</td>
			<td>'.$dno.'</td>
			<td><form method="POST" action="employee.php"><input type="submit" value="'.$ssn.'". class="btn btn-info btn-xs" name="san"/></form></td>
			<td><form method="POST" action="employee.php"><input type="submit" value="'.$ssn.'" class="btn btn-danger btn-xs" name="san"/></form></td>
			</tr>';$i++;
		}
		
		
?>

	</div>

	</div>
		
</body>


<!--<script>
window.func=function(id){
	$("h1").text("done");
	/*$.ajax({
		method:'POST',
		data:{functionname:'xyz',arguments:id},
		url:'localhost/raj/employee.php/data',
		success:function(){
			$("h1").text("done");
		},
		erro:function(){
			$("h1").text("not");
		}
});*/
}
</script>-->

</html>