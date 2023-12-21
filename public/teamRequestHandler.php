<?php

include("header.php");
include("config.php");
include("loginModal.php");

if(!isset($_SESSION['login_sess'])){
	$loggedin = false;
}else{
	$loggedin = true;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Hackathons - Home</title>
    <style>
      .text_box{
        display: flex;
        justify-content: space-between;
      }
    </style>
  </head>
  <body>

    <?php
    $team_request_id = $_GET['team_request_id'];

    $res = mysqli_query($con,"select * from teamRequest_list where team_request_id = $team_request_id");
    $noResult = true;

    while($row =mysqli_fetch_assoc($res)){
      $noResult = false;

    	$team_request_id = $row['team_request_id'];
    	$team_request_desc = $row['team_request_desc'];
    	$team_request_category = $row['team_request_category'];
    	$team_request_skills = $row['team_request_skills'];
    	$team_request_email = $row['team_request_email'];
    	$team_request_username = $row['team_request_username'];

    }


    ?>

      <div class="container w-50 mt-5">

    <div class="card mt-3">
  <h5 class="card-header">Need A Team Member</h5>
  <div class="card-body">
    <p class="card-text"><?php echo nl2br($team_request_desc); ?></p>
     <label for="" class="form-label fw-bold">Category :</label>


    <div class="card-text"><?php echo $team_request_category; ?></div>
    <br>
     <label for="" class="form-label fw-bold">Posted By :</label>
       <div class="card-text"><?php echo $team_request_username; ?></div>    


     <div class="card-text"><?php echo $team_request_email;?></div> 

     <br>

     <form method="post">

     	<?php

      if($loggedin == true){

		$current_username = $_SESSION["login_user"];

		if($team_request_username!=$current_username){
			echo'

     	<button type="submit" class="btn btn-primary">Submit Request</button>
           </form>
';
     }else{

     	echo ' <a href="teamRequestAdminAction.php?team_request_id='.$team_request_id.'" class="btn btn-info"> See responses </a> ';

     }
   }else{
    echo 'Please Login to submit request <button class="btn btn-primary text-white ms-5" data-bs-toggle="modal" data-bs-target="#loginModal"  type="submit">Login</button>';
   }

   if($noResult){

    echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">No Result Found</h1>
  </div>
</div>';
}



     	?>




  </div>
</div>

  
</div>


<?php
	
	if($_SERVER['REQUEST_METHOD']=="POST"){

		if($loggedin = true){


		$result = mysqli_query($con,"insert into teamrequest_submit_list values('','$team_request_id','$username','')");

    	if($result){

		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your request submitted succesfully..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';



	}else{
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Something went wrong..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';


	}

}else{
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Success!</strong>Login to submit request
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
	}
}



?>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>


