<?php
include("config.php");
include("header.php");
include("sidebar.php");
if(!isset($_SESSION['login_sess'])){
	header('location:index.php');
}
$username = $_SESSION["login_user"];
   //$res=  mysqli_query($con,"select username from login where username='$username'");
   $res = mysqli_query($con,"select * from professional where pusername = '$username' ");

   $result = mysqli_fetch_array($res);


if($result){

	$skills = $result['skills'];
	$projects = $result['projects'];
	$interest = $result['interest'];

}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


     <style>

    	.card_mid{
    		margin-top: 2rem;
    	}

    	.card_btn{
    		margin-top: 2rem;
    		margin-left: 10px;
    		margin-bottom: 10px;
    	}

    </style>

</head>


<body>


	<form method="post">

	
		<div class="row d-flex justify-content-center card_mid">

		<div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Username</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $username;?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Skills(use comma to separate)</p>
              </div>
              <div class="col-sm-9">
    <input type="text" class="form-control" id="skills" aria-describedby="skills" name="skills" value="<?php echo $skills ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Projects(use comma to separate)</p>
              </div>
              <div class="col-sm-9">
    <input type="text" class="form-control" id="projects" aria-describedby="projects" name="projects" value="<?php echo $projects;?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Interest(use comma to separate)</p>
              </div>
              <div class="col-sm-9">
    <input type="text" class="form-control" id="interest" aria-describedby="interest" name="interest" value="<?php echo $interest;?>">
              </div>
            </div>
            </div>
				<button name="update_user" class="btn btn-info card_btn">Save Profile</button></a>

				
					
				</div>
				</div>

				</form>
<?php

	if(isset($_POST['update_user'])){

		$skills = $_POST['skills'];
		$projects = $_POST['projects'];
		$interest = $_POST['interest'];

// $updateresult = mysqli_query($con,"insert into professional values('','$username','$skills','$projects','$interest' where pusername = '$username')");


	$updateresult=  mysqli_query($con,"update professional set skills = '$skills',projects='$projects', interest = '$interest' where pusername='$username'");

		 if($updateresult){

        echo "<script>window.location.href='professionalProfile.php?username=$username'</script>";
		 }else{
		 	echo "Something went wrong";
		 }


	}



	?>
</body>
</html>