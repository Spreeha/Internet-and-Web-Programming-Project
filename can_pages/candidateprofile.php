<?php
session_start();
$_SESSION['message']='';
$var=$_SESSION['username'];
$mysq=new mysqli('localhost','root','mypass123','jobportal');

if($_SERVER['REQUEST_METHOD']=='POST')
{
	//two passwords are matching or not
	
		//print_r($_FILES);die;
		
		$name = $mysq->real_escape_string($_POST['name']);
		$qualification = $mysq->real_escape_string($_POST['qualification']);
		$experience = $mysq->real_escape_string($_POST['experience']);
		$skills = $mysq->real_escape_string($_POST['skills']);
		
		//$password=md5($_POST['password']);
		//$avatar_path=$mysqli->real_escap_string('image/'.$_FILES['avatar']['name']);
		
		//echo $username;
		//to make sure file type is image
		//if(preg_match("image!",$_FILES['avatar']['type']))
		//$_SESSION['username']=$username;
	    //$_SESSION['avatar']=$avatar_path;
		echo $username."  ".$password;
		$result= "INSERT INTO candidateprofile(username,name,qualification,experience,skills) VALUES('$var','$name','$qualification','$experience','$skills')";
		//$_SESSION['username']=$username;
if (mysqli_query($mysq, $result))
         {
        echo "New record successfully";
		echo $username;
		$_SESSION['message']="Registration Successful! Added $username to the database.";
		header("location: candidatehome.php");
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
    <h1>Candidate Profile</h1>
    <form class="form" action="candidateprofile.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="Name" name="name" required />
      <input type="text" placeholder="Qualification" name="qualification" required />
      <input type="text" placeholder="Years of Experience" name="experience" required />
      <input type="text" placeholder="Skills" name="skills" required />
     
      
     
     <!-- <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>-->
      <input type="submit" value="Submit" name="register" class="btn btn-block btn-primary" />
	  <!--<input type="submit" value="Update" name="register" class="btn btn-block btn-primary" formaction="update.php" />-->
    </form>
  </div>
</div>