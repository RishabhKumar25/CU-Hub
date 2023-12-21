<?php

include("config.php");
include("header.php");
if(!isset($_SESSION['login_sess'])){
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Please login first
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo "<script>setTimeout(\"location.href = 'teamHome.php';\",1500);</script>";
}else{

$username = $_SESSION['login_user'];
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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style>
    	

    </style>

</head>


<body>

	
<div class="container my-4">
          <a href="teamRequestListAdmin.php">  <button class="btn btn-info mb-5">Your Team Requests</button></a>

<div class="jumbotron">

        
  <h1 class="display-4">Post a team request</h1>
  <p class="lead"></p>
  <!-- <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</div>



<div class="container my-3"> 

<div class="row my-4">


	<div class="container">

	<h1>Add your team requirements</h1>

		<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">

   <div class="mb-3">
    <div class="form-group">
    <label for="team_request_desc" class="form-label">Requirement Description</label>
    <textarea class="form-control" id="team_request_desc" rows="3" name="team_request_desc"></textarea>
  </div>
    </div>


     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="team_request_category" id="flexRadioDefault1" value="Contests" checked>
    Contests
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="team_request_category" id="flexRadioDefault2" value="Projects">
    Projects
  </label>
</div>  

<div class="form-check">
  <input class="form-check-input" type="radio" name="team_request_category" id="flexRadioDefault2" value="Hackathons" >
    Hackathons
  </label>
</div>  


</div>

 <div class="mb-3">
    <label for="team_request_skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" aria-describedby="team_request_skills" name="team_request_skills">
  </div>


  <div class="mb-3">
    <label for="team_request_email" class="form-label">Your Email</label>
    <input type="email" class="form-control" aria-describedby="team_request_email" name="team_request_email">
  </div>

 

 
   <button type="submit" class="btn btn-primary" name="postrequest">Submit</button>
</form>

	</div>


	<?php
    $username = $_SESSION['login_user'];
$method = $_SERVER['REQUEST_METHOD'];


if(isset($_POST['postrequest'])){

 $team_request_desc = $_POST['team_request_desc'];
 $team_request_category = $_POST['team_request_category'];
 $team_request_skills = $_POST['team_request_skills'];
 $team_request_email = $_POST['team_request_email'];



 $result = mysqli_query($con, "insert into teamrequest_list values('','$team_request_desc','$team_request_category','$team_request_skills','$team_request_email','$username')");


 if($result){
 			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your request is posted succesfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
	}else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failed!</strong> Some problem occured.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    }
 }

?>


	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>