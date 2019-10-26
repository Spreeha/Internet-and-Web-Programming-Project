<!DOCTYPE html>
<html lang="en">
<head>
  <title>ONLINE JOB PORTAL</title>
       <!-- <link rel="shortcut icon" type="image/x-icon" href="images/icon_8nA_icon.ico" />-->
    <link rel="stylesheet" href="style.css">
        
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  
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

</head>
<body>
<?php
/*error_reporting(E_ERROR); 
@mysql_connect("localhost","root","");
mysql_select_db("test");
session_start();

if($_SESSION['username'] == '')
{
  header("Location : loggedout.html");
}

else
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
                      
                           <a href="home.html"><img src="job1.png"</a>
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
          <li><a href="#"><img src="abc.jpg">(<?php// echo $count + $counts?>)</a>
          <ul>
          <li><a href="employercandidates.php">Candidates for public and private jobs(<?php// echo $count + $counts?>)</a></li>           
          </ul>
          
                    
                   </ul></header>

<div id="page-wrap">
    <div class="container">
   

<br>
   </div>
    <div class="content">
<center><h1> MY JOB LIST </h1></center>
<hr>
</div>
        <div class="info">
          <br>
        

         <!-- <div class="content">--> 
<?php
$countr = 0;
$countrs = 0;
error_reporting(E_ERROR); 
$con=new mysqli('localhost','root','mypass123','jobportal');
session_start();
$var = $_SESSION['username']; //echo $var;
//$sql1 = "SELECT cname,title FROM job WHERE empuser='$var' ORDER BY date DESC ";  
$result1 = mysqli_query($con,"SELECT cname,title FROM job WHERE empuser='$var' ORDER BY posting_date DESC ");
while($rows = mysqli_fetch_assoc($result1))
{
  $titl = $rows['title'];
 // $sqls = "SELECT canuser,resumeid,title,Status FROM applyresumetojobs WHERE title='$titl'";  
  $results = mysqli_query($con,"SELECT canuser,resumeid,title,Status FROM applyresumetojobs WHERE title='$titl'");
  
  while($rows1 = mysqli_fetch_assoc($results))
{
  $id=$rows1['resumeid']; //echo $id; echo "hello";echo $row1['title'];
  $can=$rows1['canuser'];
  $comp=$rows['cname'];
  $date=$rows1['candate'];
 // echo $titl." ".$comp." ".$can;
  
//$countr = $countr + 1;
//}
//if($rows1['Status']!=3 && $rows1['Status']!=4)
  //echo $var;
?>
    <!--<a href="employerallcandidate.php?nam=<?php echo $rows['title'];?> "><h3><?php echo $rows['title']; ?> - Public (<?php echo  $countr ?>)</h3></a>-->

<!--</div>-->
     <div class="content">

<h1> Title:<a href="#"><?php echo $rows['title']; ?></a> </h1>
<hr>
        <div class="info">
<?php // echo $comp." ".$can; ?>
<center><p> Company Name: <?php echo $comp; ?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <!--Applying Date :--> <?php echo $date; ?>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Candidate Name: <?php echo $can; ?><br><br> <a href="javascript:void(0)?;" onclick="theVar=confirm('Shortlist this candidate. Are you sure?');setTimeout('if(theVar){window.location=\'employershortcandidates.php?nam=<?php echo $can;?>\'}', 0);"> <input type = "submit" name="short" value="SHORTLIST THIS CANDIDATE" class="button"></a>

 <a href="employerdeletecandidates.php?nam=<?php echo $rows1['canuser']?> "><input type="submit" name="resume" value="DELETE CANDIDATE" class="button" ></a> <a href="javascript:void(0)?;" onclick="theVar=confirm('Delete this candidate. Are you sure?');setTimeout('if(theVar){window.location=\'employerdeletecandidates.php?nam=<?php echo $rows['canuser'];?>\'}', 0);"></a></p></center>

   </div>

 </div>
<br>
<?php
$countr = 0;
}
}

?>
  <!--<a href="employerallpvtcandidate.php?nam=<?php echo $rows2['JID'];?>"><h3><?php echo $rows2['designation']; ?> - Private (<?php echo  $countrs ?>)</h3></a>-->
<?php 
$countrs = 0; 
//}
?>
   

 
</div>
</div>
   <br>

     <div class="footer">
            <p>                            <a><img src="job4.jpg" width="32" height="32%"></a>
                        <a><img src="job5.png" width="32" height="32%"></a>
                          <a><img src="job6.png" width="32" height="32%"></a>
                        <a><img src="job4.jpg" width="32" height="32%"></a>         
         
         </p>
                   </div>
<?php// } ?>
</body>
</html>
