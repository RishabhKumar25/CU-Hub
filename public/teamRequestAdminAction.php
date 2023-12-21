<?php

include("header.php");
include("config.php");
include("teamRequestAdminActionHandler.php");
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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hackathons - Home</title>
    <style>
      .text_box{
        display: flex;
        justify-content: space-between;
      }
    </style>
  </head>
  <body>

   <a href="addTeamRequest.php"> <button class="btn btn-primary mt-5 ms-5">Post team request</button> </a>

    <?php

    $team_request_id = $_GET['team_request_id'];

    $res = mysqli_query($con,"select * from teamRequest_list where team_request_username = '$username' AND team_request_id = '$team_request_id'");

    while($row =mysqli_fetch_assoc($res)){

      $team_request_id = $row['team_request_id'];
      $team_request_desc = $row['team_request_desc'];
      $team_request_category = $row['team_request_category'];
      $team_request_skills = $row['team_request_skills'];
      $team_request_email = $row['team_request_email'];
      $team_request_username = $row['team_request_username'];
      


      echo' <div class="container w-50 mt-5">

    <div class="card mt-3">
  <div class="card-body">
    <p class="card-text">'.nl2br($team_request_desc).'</p>
     <label for="" class="form-label fw-bold">Category :</label>



    <div class="card-text">'.$team_request_category.'</div>
    <br>
     <label for="" class="form-label fw-bold">Posted By :</label>
       <div class="card-text">'.$team_request_username.'</div>    


     <div class="card-text">'.$team_request_email.'</div> 


  </div>
</div>

  
</div>';


    }


    ?>

    <?php


    $res = mysqli_query($con,"select * from teamrequest_submit_list where teamrequest_id = '$team_request_id' AND approve = 0");
    $noResult = true;

    if($res){

    while($row =mysqli_fetch_assoc($res)){

          $noResult = false;

      $team_request_submit_username = $row['team_request_submit_username'];
      $team_request_submit_id = $row['team_request_submit_id'];

      
      echo' 

      <form method="post" action ="teamRequestAdminActionHandler.php?team_request_submit_id='.$team_request_submit_id.'&team_request_id='.$team_request_id.'">

      <div class="container mt-2">
  <div class="row align-items-center">
    <div class="col">
      '.$team_request_submit_username.'
    </div>
    <div class="col">
      <a href="personalProfile.php?username='.$team_request_submit_username.'" target="_blank">View Profile</a>
    </div>

    <div class="col">


<input type="submit" name="approveteamrequest" value="Approve" class="btn btn-success" >
    </div>

    <div class="col">

<input type="submit" name="rejectteamrequest" value="Reject" class="btn btn-danger">

 
    </div>
  </div>
  </div>
  </form>';

  

    }
   }
if($noResult){

    echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">No Result Found</h1>
  </div>
</div>';
}





    ?>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>