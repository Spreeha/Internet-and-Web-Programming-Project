<?php
session_start();
$_SESSION['message']='';
$mysq=new mysqli('localhost','root','mypass123','jobportal');

if($_SERVER['REQUEST_METHOD']=='POST')
{
	//two passwords are matching or not
	
		//print_r($_FILES);die;
		
		$jobtype = $_POST['jobtype'];
		$ename = $_POST['ename'];
		$cname = $_POST['cname'];
		$title = $_POST['title'];
		//$avatar_path=$mysqli->real_escap_string('image/'.$_FILES['avatar']['name']);
		
		//echo $username;
		//to make sure file type is image
		//if(preg_match("image!",$_FILES['avatar']['type']))
		//$_SESSION['username']=$username;
	    //$_SESSION['avatar']=$avatar_path;
		echo $cname."  ".$title;
		if($jobtype=='private')
		$result= "INSERT INTO job(empuser,jobtype,cname,title) VALUES('$ename',1,'$cname','$title')";
		else
			$result= "INSERT INTO job(empuser,jobtype,cname,title) VALUES('$ename',0,'$cname','$title')";
if (mysqli_query($mysq, $result))
         {
        echo "New record successfully";
		//echo $username;
		$_SESSION['message']="Registration Successful! Added $username to the database.";
		header("location: employerhome.php");
         }
        else
         {
        echo "Error: " . $result . "<br>" . mysqli_error($mysq);
         }


		
		
		//$sql=mysqli_query($mysq,"insert into users(username,email,password) values('$username','$email','$password'))";
		
		//$row = mysqli_fetch_array($sql);
		
		if($mysq)
			echo "Connected!";

//if the query is successful redirect to welcome.php page
		/*if($mysq->query($sql)===true)
		{
         $_SESSION['message']="Registration Successful! Added $username to the database.";
         header("location: welcome.php");
		}	
		else
		{
			$_SESSION['message']="User could not be added to the database!";
		}*/
	
	
	
	
		
		
	}

?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="reg.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Post Jobs</h1>
    <form class="form" action="employerpostjobs.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
     <input type="text" placeholder="Job Type" name="jobtype" required />
     <input type="text" placeholder="Employer Name" name="ename" required />
     <input type="text" placeholder="Company Name" name="cname" required />
     <input type="text" placeholder="Title" name="title" required />
      <!--<input type="password" placeholder="Password" name="password" autocomplete="new-password" required />-->
     
     <!-- <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>-->
      <input type="submit" value="Post" name="register" class="btn btn-block btn-primary" />
	  <!--<input type="submit" value="Update" name="register" class="btn btn-block btn-primary" formaction="update.php" />-->
    </form>
  </div>
</div>