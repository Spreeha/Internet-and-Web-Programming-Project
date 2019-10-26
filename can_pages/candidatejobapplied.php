<html>
<body background ="color:blue;" height="610" width="1355.5">
<?php
error_reporting(E_ERROR); 
$con=new mysqli('localhost','root','mypass123','jobportal'); 
session_start();
//$id=$_GET['nam'];
$title=$_GET['nam1']; 
date_default_timezone_set("Asia/Kolkata");
$date = date("Y-m-d");
$time = date("h:i:s");
$var = $_SESSION['username'];
//echo $title;
$res1 =  mysqli_query($con,"SELECT username FROM candidatelogin WHERE user='$var'");
$row1 = mysqli_fetch_array($res1);
$profileid = $row1['id'];

$res =  mysqli_query($con,"SELECT title,canuser FROM applyresumetojobs WHERE canuser='$var' AND title='$title'");
$row = mysqli_fetch_array($res);

if($row['title']==$title || $row['canuser']==$var)
{ 
	
          ?>
	<html>
	<head>
		
		<link rel="stylesheet" type="text/css" href="style.css"></link>
	</head>

	<body>
		<center>
		<div class="container">
		<br><br><br><br><br><br>
			<img src="job2.jpg" />
			
				<div class="font-input">
					<h1>You have already applied for the job</h1>
				</div>
				
				<br>
				<a href="candidatejobsearch.php"><input type="submit" name="submit" value="BACK" class="btn-login"></a> 
				
			
		</div>
	</center>
	</body>
</html>
<?php  
               
		

	
}

else
{
$result= mysqli_query($con,"INSERT INTO applyresumetojobs(title,canuser,candate,cantime,resumeid) VALUES('$title','$var','$date','$time','$profileid')");
?>

<html>
	<head>
	
		<link rel="stylesheet" type="text/css" href="style.css"></link>
	</head>

	<body>
		<center>
		<div class="container">
		<br><br><br><br><br><br>
			<img src="job2.jpg" />
			
				<div class="font-input">
					<h1>You have successfully applied for the job</h1>
				</div>
				
				<br>
				<a href="candidatejobsearch.php"><input type="submit" name="submit" value="BACK" class="btn-login"></a>  
				
			
		</div>
	</center>
	</body>
</html>
<?php
}

?>

