<?php

include("config.php");
include("header.php");

if(isset($_SESSION['login_sess'])){
    $username = $_SESSION['login_user'];

}

else{

     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Please login first
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo "<script>setTimeout(\"location.href = 'hackathonHome.php';\",1500);</script>";
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
          <a href="hackathonAdmin.php">  <button class="btn btn-info mb-5">Your Hackathons</button></a>

<div class="jumbotron">

        
  <h1 class="display-4">Request your hackathon</h1>
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

				<h1>Add your hackathon details</h1>

		<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Hackathon Name</label>
    <input type="text" class="form-control" aria-describedby="hackathon_name" name="hackathon_name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Organization Name</label>
    <input type="text" class="form-control" aria-describedby="hackathon_organizer" name="hackathon_organizer">
  </div>


   <div class="mb-3">
    <div class="form-group">
    <label for="hackathon_desc" class="form-label">Hackathon Description</label>
    <textarea class="form-control" id="hackathon_desc" rows="3" name="hackathon_desc"></textarea>
  </div>
    </div>


     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prize Amount</label>
    <input type="number" class="form-control" aria-describedby="hackathon_prize" name="hackathon_prize">
  </div>

       <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date of hackathon</label>
    <input type="date" class="form-control" aria-describedby="hackathon_date" name="hackathon_date">
  </div>

         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Start date of registration</label>
    <input type="date" class="form-control" aria-describedby="hackathon_reg_start" name="hackathon_reg_start">
  </div>



         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">End date of registration</label>
    <input type="date" class="form-control" aria-describedby="hackathon_reg_end" name="hackathon_reg_end">
  </div>



         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Start date of hackathon</label>
    <input type="date" class="form-control" aria-describedby="hackathon_round_start" name="hackathon_round_start">
  </div>


         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">End date of hackathon</label>
    <input type="date" class="form-control" aria-describedby="hackathon_round_end" name="hackathon_round_end">
  </div>


         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date of result</label>
    <input type="date" class="form-control" aria-describedby="hackathon_result_date" name="hackathon_result_date">
  </div>




   <div class="mb-3">
    <div class="form-group">
    <label for="hackathon_desc" class="form-label">Rules and other details</label>
    <textarea class="form-control" id="hackathon_rules" rows="3" name="hackathon_rules"></textarea>
  </div>
    </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Winner prize</label>
    <input type="number" class="form-control" aria-describedby="hackathon_winner_prize" name="hackathon_winner_prize">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First runner-up prize</label>
    <input type="number" class="form-control" aria-describedby="hackathon_first_runner_prize" name="hackathon_first_runner_prize">
  </div>

     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Second runner-up prize</label>
    <input type="number" class="form-control" aria-describedby="hackathon_second_runner_prize" name="hackathon_second_runner_prize">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Participants Prize</label>
    <input type="text" class="form-control" aria-describedby="hackathon_participants_prize" name="hackathon_participants_prize">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Team registration form link</label>
    <input type="text" class="form-control" aria-describedby="hackathon_registration_link" name="hackathon_registration_link">
    <div id="emailHelp" class="form-text">Google form is preferred.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Hackathon coordinator contact</label>
    <input type="number" class="form-control" aria-describedby="hackathon_coordinator_contact" name="hackathon_coordinator_contact">
  </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Hackathon coordinator email</label>
    <input type="email" class="form-control" aria-describedby="hackathon_coordinator_email" name="hackathon_coordinator_email">
  </div>

 
   <button type="submit" class="btn btn-primary" name="addhackathon">Submit</button>
</form>

	</div>


	<?php
$method = $_SERVER['REQUEST_METHOD'];
if(isset($_SESSION['login_sess'])){
    $username = $_SESSION['login_user'];

}


if(isset($_POST['addhackathon'])){

 $hackathon_name = $_POST['hackathon_name'];
 $hackathon_organizer = $_POST['hackathon_organizer'];
 $hackathon_desc = $_POST['hackathon_desc'];
 $hackathon_prize = $_POST['hackathon_prize'];
 $hackathon_date = $_POST['hackathon_date'];
 $hackathon_reg_start = $_POST['hackathon_reg_start'];
 $hackathon_reg_end = $_POST['hackathon_reg_end'];
 $hackathon_round_start = $_POST['hackathon_round_start'];
 $hackathon_round_end = $_POST['hackathon_round_end'];
 $hackathon_result_date = $_POST['hackathon_result_date'];
 $hackathon_rules = $_POST['hackathon_rules'];
 $hackathon_winner_prize = $_POST['hackathon_winner_prize'];
 $hackathon_first_runner_prize = $_POST['hackathon_first_runner_prize'];
 $hackathon_second_runner_prize = $_POST['hackathon_second_runner_prize'];
 $hackathon_participants_prize = $_POST['hackathon_participants_prize'];
 $hackathon_registration_link = $_POST['hackathon_registration_link'];
 $hackathon_coordinator_contact = $_POST['hackathon_coordinator_contact'];
 $hackathon_coordinator_email = $_POST['hackathon_coordinator_email'];
 $hackathon_username = $username;



 $result = mysqli_query($con,"insert into hackathon_list values('','$hackathon_name','$hackathon_organizer','$hackathon_desc','$hackathon_date','$hackathon_prize','$hackathon_reg_start','$hackathon_reg_end','$hackathon_round_start','$hackathon_round_end','$hackathon_result_date','$hackathon_rules','$hackathon_winner_prize','$hackathon_first_runner_prize','$hackathon_second_runner_prize','$hackathon_participants_prize','$hackathon_registration_link','$hackathon_coordinator_contact','$hackathon_coordinator_email','','$hackathon_username')");


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