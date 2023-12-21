<?php
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include("config.php");
		$username = $_POST['username'];
		$password = $_POST['password'];


		$res = mysqli_query($con,"select * from login where username='$username' and password='$password'");

    	$result = mysqli_fetch_array($res);

    	if($result){
    		session_start();
      		$_SESSION["login_sess"]=1;
      		$_SESSION['login_user']=$username;
 			header("location:personalProfile.php?username=$username");
		}
		else{

      echo "Invalid Credentials";
   		}

   		if($username == "admin" && $password == "admin123"){

   				session_start();
      		$_SESSION["login_sess"]=1;
      		$_SESSION['login_user']=$username;
 			header("location:admin.php");

   		}

	}

?>