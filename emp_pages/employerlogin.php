<?php
session_start();
$_SESSION['message']='';
$mysq=new mysqli('localhost','root','mypass123','jobportal');

if($_SERVER['REQUEST_METHOD']=='POST')
{
	//two passwords are matching or not
	
		//print_r($_FILES);die;
		
		$username = $mysq->real_escape_string($_POST['username']);
		
		$password=md5($_POST['password']);
		//$avatar_path=$mysqli->real_escap_string('image/'.$_FILES['avatar']['name']);
		
		//echo $username;
		//to make sure file type is image
		//if(preg_match("image!",$_FILES['avatar']['type']))
		//$_SESSION['username']=$username;
	    //$_SESSION['avatar']=$avatar_path;
		echo $username."  ".$password;
		$result= "INSERT INTO employerlogin(username,password) VALUES('$username','$password')";
		$_SESSION['username']=$username;
if (mysqli_query($mysq, $result))
         {
        echo "New record successfully";
		echo $username;
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
    <h1>Employer Login</h1>
    <form class="form" action="employerlogin.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
     
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
     
     <!-- <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>-->
      <input type="submit" value="Login" name="register" class="btn btn-block btn-primary" />
	  <!--<input type="submit" value="Update" name="register" class="btn btn-block btn-primary" formaction="update.php" />-->
    </form>
  </div>
</div>