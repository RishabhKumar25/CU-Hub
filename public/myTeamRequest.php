<?php
	
	include("header.php");
	include("config.php");

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


      $res = mysqli_query($con,"select * from teamrequest_submit_list where team_request_submit_username = '$username'");

       $rowcount = mysqli_num_rows($res);

       if($rowcount == 0){

        echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">No Result Found</h1>
  </div>
</div>';

       }


      while($row = mysqli_fetch_assoc($res)){

        $approve = $row['approve'];
        $teamrequest_id = $row['teamrequest_id'];


        $resnew = mysqli_query($con, "select * from teamrequest_list where team_request_id = '$teamrequest_id'");
        $res1 = mysqli_fetch_array($resnew);
        if($res1){

        $team_request_desc = $res1['team_request_desc'];
        $team_request_category = $res1['team_request_category'];
        $team_request_skills = $res1['team_request_skills'];
        $team_request_email = $res1['team_request_email'];
        $team_request_username = $res1['team_request_username'];

      }


  

    if($rowcount>0){

      
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
  <br>


 ';

if($approve==0){
  echo'

  <button class="btn btn-danger">Rejected</button>'
;
}else{
  echo '  <button class="btn btn-success">Accepted</button>

   </div>
</div>


</div>';
}

        }

      }


    ?>

  




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>