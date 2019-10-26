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
		
	</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="style.css" />
<!--<script type="text/javascript" src="engine1/jquery.js"></script>-->

</head>
<body>
<?php 


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
<br>
<br>
<div id="page-wrap">
    <div class="content">
	<br> 
	<br>
	<br>
	<br>
         <!--<img src="images/AboutUssss.jpg" width="100%">-->
        <div class="info">
           <img src="job2.jpg" width="50%">
        </div>
      </div>
   </div>
     <div class="footer">
            <p>                          <a><img src="job4.jpg" width="32" height="32%"></a>
                        <a><img src="job5.png" width="32" height="32%"></a>
                          <a><img src="job6.png" width="32" height="32%"></a>
                        <a><img src="job4.jpg" width="32" height="32%"></a>           
         
         </p>
                   </div>
<?php //} ?>
</body>
</html>
