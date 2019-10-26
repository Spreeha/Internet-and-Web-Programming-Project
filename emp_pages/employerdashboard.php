<!DOCTYPE html>
<html lang="en">
<head>
  <title>ONLINE JOB PORTAL</title>
        <!--<link rel="shortcut icon" type="image/x-icon" href="images/icon_8nA_icon.ico" />-->
    <link rel="stylesheet" href="style.css">
	
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
width:170px;
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

</head>
<body>
<?php
error_reporting(E_ERROR); 
$con=new mysqli('localhost','root','mypass123','jobportal');
session_start();

/*if($_SESSION['username'] == '')
{
	header("Location : loggedout.html");
}
*/
/*else
{
$var = $_SESSION['username'];
$result2 = mysql_query("SELECT acdate FROM employerlogin WHERE user='$var'");
$row2 = mysql_fetch_array($result2);
$count=0;
$sql = mysql_query("SELECT JID from jobpost WHERE empuser='$var'");
 while($row = mysql_fetch_assoc($sql))
{
$jid = $row['JID'];
$sql1 = mysql_query(" SELECT * from applyresumetojobs WHERE JID=$jid");
while($row1 = mysql_fetch_assoc($sql1))
{
	if($row2['acdate']<=$row1['candate'] && $row1['empseen']==0)
	{
	$count=$count+1;
	}
}

$sql1 = mysql_query(" SELECT * from applypvtresumetojobs WHERE JID=$jid");
while($row1 = mysql_fetch_assoc($sql1))
{
	if($row2['acdate']<=$row1['consdate'] && $row1['empseen']==0)
	{
	$counts=$counts+1;
	}	
}
}*/

?>
    <header>
            <a href="employerhome.html"><img src="job1.png"</a>
            <div class="lg">
				<p><a href="employerlogout.php">Logout</a></p>                
                 
                   </div>
                <ul class="navs">   
                    
                   <li ><a  href="employerhome.php">Home</a></li>
                    <li><a  href="employerdashboard.php">Dashboard</a></li>
                            <li><a  href="employermyjobs.php">My Jobs</a></li>
                            <li><a  href="employerviewcandidates.php">View Candidates</a></li>
                           <li> <a href="employerchoosecandidates.php">Shortlisted Candidates</a></li>
						    <li><a  style="float:right" href="employerpostjobs.php">Post Jobs</a></li>
                    <li><a class="active" style="float:right" href="employerabout.php">About us</a></li>
                    <li><a style="float:right" href="employercontact.php">Contact us</a></li>
					<li><a href="#"><img src="abc.jpg">(<?php echo $count + $counts?>)</a>
					<ul>
					<li><a href="employercandidates.php">Candidates for public and private jobs(<?php echo $count + $counts?>)</a></li>				
					</ul>
					
                    
                   </ul></header>

<div id="page-wrap">
    <div class="content">
         <!--<img src="job2.jpg" width="100%">-->
         <?php 

            error_reporting(E_ERROR); 
            $con=new mysqli('localhost','root','mypass123','jobportal');
            session_start();
            $var = $_SESSION['username'];
            echo "Welcome ".$var;
            //$count = 'SELECT count(*) from job as user';
            //echo " No of jobs applied for : ".$count;
          ?>
           <p> This the Online Job Portal! Post jobs and shortlist suitable candidates!</p>
        <div class="info">
            
        </div>
      </div>
   </div>
     <div class="footer">
            <p>                         <a><img src="job4.jpg" width="32" height="32%"></a>
                        <a><img src="job5.png" width="32" height="32%"></a>
                          <a><img src="job6.png" width="32" height="32%"></a>
                        <a><img src="job4.jpg" width="32" height="32%"></a>             
         
         </p>
                   </div>
<?php// } ?>
</body>
</html>
