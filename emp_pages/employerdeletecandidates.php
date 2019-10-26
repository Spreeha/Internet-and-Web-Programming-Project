<?php
error_reporting(E_ERROR); 
$con=new mysqli('localhost','root','mypass123','jobportal');
session_start();
$var = $_SESSION['username'];
session_start();
$var = $_SESSION['username'];
$can = $_GET['nam'];
date_default_timezone_set("Asia/Kolkata");
$date = date("Y-m-d");
$time = date("h:i:s");
//$sql = mysql_query("DELETE FROM jobpost WHERE JID = '$jid' ");
//$split = explode("_",$jid);
//$jids = $split[count($split)-1];
//$caname = $split[count($split)-2];
//echo $jids;
echo $can;
$sql = mysqli_query($con,"UPDATE applyresumetojobs SET Status=4 WHERE Status!=3 AND canuser='$can' ");
header('Location: employerhome.php?nam='.$jids.'');



?>