<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLUE CIRCLE</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon_8nA_icon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/polaroid.css">
	<style>
.navs{
width:100%;
height:120px;
}
ul{
list-style:none;
padding:0;
margin:0;
}
ul li {
float:left;
}

ul li a{
width:150px;
color:white;
display:block;
text-align:center;
padding:5px;
border-radius:10px;

}


ul li ul{
background:#000033;
}

ul li ul li{
float:none;
}

ul li ul{
display:none;
}
ul li:hover ul{
display:block;
}
		
	</style>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--<script type="text/javascript" src="engine1/jquery.js"></script>-->

</head>
<body>
<?php 
error_reporting(E_ERROR); 
$con=mysqli_connect("bluecircledb.ckdph2bsqgfy.ap-south-1.rds.amazonaws.com","bcmysqldb","bcroot4321","bluecircle","3306"); 
session_start();
if($_SESSION['username']=='')
{
	
	header("Location: loggedout.html");
}
else
{
$var = $_SESSION['username'];
$count=0;
		$result = mysqli_query($con,"SELECT email,canseen FROM dynamicreferrershadow WHERE email='$var'");
		while($rows = mysqli_fetch_assoc($result))
		{
			if($rows['canseen']==0)
			{
				$count=$count+1;
			}
		}




$result2 = mysqli_query($con,"SELECT acdate from candidatelogin WHERE user='$var'");
//$result2 = mysql_query($sql2);
$rows2 = mysqli_fetch_assoc($result2);

$result1 = mysqli_query($con,"SELECT * from jobpost WHERE public=0");
//$result1 = mysql_query($sql1);
$countr = 0;
while($rows1 = mysqli_fetch_assoc($result1))
{
	if($rows2['acdate']<=$rows1['date'])
	{
		$countr = $countr + 1;
	}
}



$result3 = mysqli_query($con,"SELECT * FROM applyresumetojobs WHERE refuser='$var' "); 
//$result3 = mysql_query($sql3);
$countrs = 0;
while($rows3 = mysqli_fetch_assoc($result3))
{
	if($rows3['Seen']==0 && $rows3['Status']==3 )
	{
		$countrs = $countrs + 1;
	}
}

$result4 = mysqli_query("SELECT * FROM applyresumetojobs WHERE canuser='$var' "); 
//$result4 = mysql_query($sql4);
$countrse = 0;
while($rows4 = mysqli_fetch_assoc($result4))
{
	if($rows4['canseen']==0 && $rows4['Status']==3 )
	{
		$countrse = $countrse + 1;
	}
}
?> 
<header>        
                   <img src="job1.png" width="70" height="70%">           Online Job Portal          

            <div class="lg">
					<img src="job2.jpg" width="70" height="70%">
					<p><a href="#">Logout</a></p>
						
                   </div>
               <ul class="navs">   
                    
                   <li ><a  href="candidatehome.php">Home</a></li>
					<li><a  href="candidatedashboard.php">Dashboard</a></li>
					<li><a  href="candidateprofile.php">Profile</a></li>
                    <li><a class="active" href="candidatejobsearch.php">Job Search</a></li>
					<li><a href="candidatereferredcandidates.php">My Candidate</a></li>
					<li><a href="candidatejobs.php">My Jobs</a></li>
                           <!--<li> <a href="candidatebefore.php">Before you resign</a></li>-->
                    <li><a style="float:right" href="candidateabout.php">About us</a></li>
                    <li><a style="float:right" href="candidatecontact.php">Contact us</a></li>
					<li><a href=""><img src="job3.png">(<?php //echo $count + $countr + $countrs + $countrse ?>)</a>
					<ul>
					<li><a href="candidatenewjobs.php">New Jobs (<?php //echo $countr ?>)</a></li>
					<li><a href="candidatenotification.php">Referalls referred (<?php //echo $count ?>)</a></li>
					<li><a href="candidatesshortlistedreferred.php">Shortlisted referred candidates(<?php //echo $countrs ?>)</a></li>
					<li><a href="candidatecandidatesnotification.php">My shortlisted jobs (<?php //echo $countrse ?>)</a></li>
					
					</ul>
					</li>
				
                   </ul>
				    <ul class="nav">   
                    
                   
				
                   </ul>
</header>
	<br>			   
<div id="page-wrap">
    
   
<?php 
error_reporting(E_ERROR); 
$con=mysqli_connect("bluecircledb.ckdph2bsqgfy.ap-south-1.rds.amazonaws.com","bcmysqldb","bcroot4321","bluecircle","3306"); 
session_start();
$var=$_SESSION['username'];

$result1 = mysqli_query($con,"SELECT * FROM applyresumetojobs WHERE canuser='$var' "); 
//echo $var;
//$sql1 = "SELECT * FROM jobpost WHERE company='$value' "; 
//$result1 = mysql_query($sql1);
 while($rows = mysqli_fetch_assoc($result1))
{
if($rows['Status']==4)
{
	//echo 'hi';
	//echo $rows['JID'];
	$status = "Not Shortlisted";
	}
	
	else if($rows['Status']==3)
	{
		$status="Shortlisted";
	}
	else if($rows['Status']==2)
	{
		$status="Resume downloaded";
	}
	
	else if($rows['Status']==1)
	{
		$status="Resume viewed";
	}
	else 
	{
		$status="Not viewed";
	}
 ?>
   
   
    <div class="content">
	
<h1> <?php echo $rows['title']; ?> <?/*php echo $rows['title']; */?> </h1>
<hr>
        <div class="info">
<p> Referrer Name : <?php echo $rows['refuser']; ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Candidate Applying date : <?php echo $rows['candate'];?>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Status : <?php echo $status; ?> </p>
   </div>
      
   </div>
   <br>
    <?php
}

$sql = mysqli_query($con,"UPDATE applyresumetojobs SET canseen=1 WHERE canuser='$var' AND Status=3");
?>
   <br>
  
     <div class="footer">
            <p>                           <a><img src="job4.jpg" width="32" height="32%"></a>
                        <a><img src="job5.png" width="32" height="32%"></a>
                          <a><img src="job6.png" width="32" height="32%"></a>
                        <a><img src="job4.jpg" width="32" height="32%"></a>          
         
         </p>
                   </div>
<?php } ?>
</body>
</html>
