<?php
session_start();
$_SESSION['message']='';
$con=new mysqli('localhost','root','mypass123','jobportal');

if($_SERVER['REQUEST_METHOD']=='POST')
{
	
		
		$username = $_POST['username'];
		//$email = $mysq->real_escape_string($_POST['email']);
		$password=md5($_POST['password']);
		
		$_SESSION['username']=$username;
	    
		$res =  mysqli_query($con,"SELECT username,password from candidate where username='$username'and password='$password'");
		$row = mysqli_fetch_assoc($res);
		//$result= "INSERT INTO candidatelogin(username,password) VALUES('$username','$password')";
		$a=$row['username'];
		$b=$row['password'];
		echo $a." ".$b." ";
		//echo$username." ".$password;
		//if($row['username']==$username)
			$result= "INSERT INTO candidatelogin(username,password) VALUES('$username','$password')";
if (mysqli_query($con,$result)
         {
        echo "New record successfully";
		echo $username;
		$_SESSION['message']="Registration Successful! Added $username to the database.";
		header("location: candidatelogin.php");
         }
        else
         {
        echo "Error: "  . "<br>" . mysqli_error($con);
         }


		
		
		
		
		if($con)
			echo "Connected!";


		
	
	
	
		
		
	}

?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="reg.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="candidatelogin.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
     <!-- <input type="email" placeholder="Email" name="email" required />-->
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
     <!-- <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />-->
     <!-- <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>-->
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
	  <!--<input type="submit" value="Update" name="register" class="btn btn-block btn-primary" formaction="update.php" />-->
    </form>
  </div>
</div>