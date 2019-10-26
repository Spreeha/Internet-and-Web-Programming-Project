<!DOCTYPE html>
<html lang="en">
<head>
  <title>ONLINE JOB PORTAL</title>
   <!-- <link rel="shortcut icon" type="image/x-icon" href="images/icon_8nA_icon.ico" />-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="polaroid.css">
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

 body{
   
   }
   .form{
   margin:auto;
   width:500px;
    padding: 25px;
    font-size: 20px;
   }
   .search{
   width:60%;
   padding:20px;
   font-size:20px;
   margin-bottom:20px;
   }
   .submit{
   width:10%;
   height:100%;
   padding:10px;
   font-size:20px;
   background-color:#333399;
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
$con=new mysqli('localhost','root','mypass123','jobportal');

session_start();
if($_SESSION['username']=='')
{
	
	header("Location: loggedout.html");
}
else
/*{
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

$result1 = mysqli_query($con,"SELECT * from job WHERE jobtype=0");
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

$result4 = mysqli_query($con,"SELECT * FROM applyresumetojobs WHERE canuser='$var' "); 
//$result4 = mysql_query($sql4);
$countrse = 0;
while($rows4 = mysqli_fetch_assoc($result4))
{
	if($rows4['canseen']==0 && $rows4['Status']==3 )
	{
		$countrse = $countrse + 1;
	}
}*/
?> 
<header>        
                   <img src="job1.png">              

            <div class="lg">
					<img src="https://s3.amazonaws.com/uifaces/faces/twitter/ladylexy/128.jpg" width="70" height="70%">
					<p><a href="logout.php">Logout</a></p>
						
                   </div>
               <ul class="navs">   
                    
                   <li ><a  href="candidatehome.php">Home</a></li>
					<li><a  href="candidatedashboard.php">Dashboard</a></li>
                    <li><a class="active" href="candidatejobsearch.php">Job Search</a></li>
					<li><a href="candidatereferredcandidates.php">My Candidate</a></li>
					<li><a href="candidatejobs.php">My Jobs</a></li>
                           <!--<li> <a href="candidatebefore.php">Before you resign</a></li>-->
                    <li><a style="float:right" href="candidateabout.php">About us</a></li>
                    <li><a style="float:right" href="candidatecontact.php">Contact us</a></li>
					<li><a href=""><img src="job3.png">(<?php //echo //$count + $countr + $countrs + $countrse ?>)</a>
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
<br>
<br>
<br>
<div id="page-wrap">
<div class="container">
<br>
<br>
<br>
   <form action="candidateyourjobs.php" method="POST" enctype="multipart/form-data">
   
     <input type="text" class="search" placeholder="Company Name" name="search">
	

<select class="button" name="area">
      
            <option value=''>Select Area</option>
                  <option value="1">BPO</option>
                  <option value="2">Consulting</option>
                  <option value="3">Finance</option>
                  <option value="4">Human Resources</option>
                  <option value="5">Information Technology and Systems (IT)</option>
                  <option value="6">Legal</option>
                  <option value="7">Miscellaneous</option>
                  <option value="8">Operations</option>
                  <option value="9">Sales and Marketing</option>
        </select>
       <td><input type="text" id="tskill" class="button" name="tskill[]" placeholder="Enter Skills" <?php //include 'tskill.php';?> </td>


        <td><?php  

     /* $locations = file('/var/www/html/Files/location.txt');
      $arr=0;
      $options = '';

                                 
      foreach ($locations as $location) {
       $arr++;
      $options .= '<option value="'.$arr.'">'.$location.'</option>'; 
                                        }  
                                        
      $select = ' <select class="button" name="location[]" id="location" >'.$options.'</select>';
      echo $select;  */
      ?>  
      </td> 

       <select id="exp" name="exp" class="button" >
                   <option value=''>Select Experience</option>
                  <option value="1">Fresher</option>
                  <option value="1-2 Yrs">1-2 Yrs</option>
                  <option value="2-4 Yrs">2-4 Yrs</option>
                  <option value="4-6 Yrs">4-6 Yrs</option>
                  <option value="6-10 Yrs">6-10 Yrs</option>
                  <option value=">10">>10 Yrs</option>
                  </select>

        
	 
     <input type="submit" class="button" value="SEARCH" name="submit">
     
			
	 
	 
    </form>
    </form>
   </div>

   <?php
error_reporting(E_ERROR); 
$con=new mysqli('localhost','root','mypass123','jobportal');
session_start();
date_default_timezone_set("Asia/Kolkata");
//$date = date("Y-m-d");
//$time = date("h:i:s");
$date1 = strtr($_REQUEST['date'], '/', '-');
$date2 = date('Y-m-d', strtotime($date1));
//$date=(date("Y-m-d",$time));
$var = $_SESSION['username'];

$result1 = mysqli_query($con,"SELECT * FROM job WHERE jobtype=0 ORDER BY posting_date DESC ");  
//$result1 = mysql_query($sql1);
 while($rows = mysqli_fetch_assoc($result1))
{

	/*$industry="/var/www/html/industry.txt";
         $desig="/var/www/html/desig.txt";
         $location="/var/www/html/Files/location.txt";
            $industry_lines=file($industry);
            $desig_lines=file($desig);  
            $location_lines=file($location);
	$title=$rows['title'];
  //$_SESSION['title']=$title;
  $designation=$desig_lines[$rows['required_designation']];
	$experience=$rows['total_exp'];
	$location=$location_lines[$rows['loc']];
	$qualification=$rows['qualification'];
	$skills=$rows['techskills'];*/
  $title=$rows['title'];
	$posting_date=$rows['posting_date'];
  $posting_date = date('d-m-Y', $posting_date);
  $date1 = strtr($_REQUEST['date'], '/', '-');
  $posting_date = date('Y-m-d', strtotime($posting_date));
 ?>
   
   
    <div class="content">
	
<h1> Title:<?php echo $title; ?> </h1>
<hr>
        <div class="info">
<p>  Title :  <?php  echo $title   ?>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Date of Posting : <?php echo $posting_date?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 

<!--<p> Preferred location : <?php //echo $location ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Qualification : <?php echo $qualification ?>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Experience : <?php echo $experience ?> years</p>
<br>
<p> Referrer reward Points : 2000</p>
<br> -->

<a href="javascript:void(0)?;" onclick="theVar=confirm('Are you sure you want to apply for this job?');setTimeout('if(theVar){window.location=\'candidatejobapplied.php?nam=<?php echo $rows['job_id'];?>&nam1=<?php echo $title;?>\'}', 0);"><input type="submit" name="submits" value="APPLY" class="button" ></a>  <!-- <a href="..\Forms\referrerprofile.php?nam=<?php echo $rows['job_id'];?>&nam1=<?php echo $rows['title'];?>"><input type="submit" name="submit" value="REFER" class="button" ></a>--></p> 
   </div>
      
   </div>
   <br>
   <?php
}

?>
   
   <br>
  
   
   
   
    
     <div class="footer">
            <p>                               <a><img src="job4.jpg" width="32" height="32%"></a>
                        <a><img src="job5.png" width="32" height="32%"></a>
                          <a><img src="job6.png" width="32" height="32%"></a>
                        <a><img src="job4.jpg" width="32" height="32%"></a>       
         
         </p>
                   </div>
				   
<?php //}?>
</body>
</html>
