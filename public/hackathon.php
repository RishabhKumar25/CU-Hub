<?php

include("header.php");
include("config.php");

$hackathon_id = $_GET['hackathon_id'];



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

      $res = mysqli_query($con,"select * from hackathon_list where hackathon_id = '$hackathon_id'");

      while($row = mysqli_fetch_assoc($res)){
      $hackathon_organizer = $row['hackathon_organizer'];
      $hackathon_name = $row['hackathon_name'];
      $hackathon_desc = $row['hackathon_desc'];
      $hackathon_date = $row['hackathon_date'];
      $hackathon_prize = $row['hackathon_prize'];
      $hackathon_reg_start = $row['hackathon_reg_start'];
      $hackathon_reg_end = $row['hackathon_reg_end'];
      $hackathon_round_start = $row['hackathon_round_start'];
      $hackathon_round_end = $row['hackathon_round_end'];
      $hackathon_result_date = $row['hackathon_result_date'];
      $hackathon_rules = $row['hackathon_rules'];
      $hackathon_winner_prize = $row['hackathon_winner_prize'];
      $hackathon_first_runner_prize = $row['hackathon_first_runner_prize'];
      $hackathon_second_runner_prize = $row['hackathon_second_runner_prize'];
      $hackathon_participants_prize = $row['hackathon_participants_prize'];
      $hackathon_id = $row['hackathon_id'];
      $hackathon_coordinator_email = $row['hackathon_coordinator_email'];
      $hackathon_registration_link = $row['hackathon_registration_link'];


}


    ?>

    <div class="container w-50 mt-5">

    <div class="card mt-3">
  <h5 class="card-header"><?php echo $hackathon_organizer ;?></h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo $hackathon_name ;?></h5>
    <p class="card-text"><?php echo $hackathon_desc ;?></p>
    <div class="text_box">
    <div class=""><?php echo $hackathon_prize ;?></div>
        <div class=""><?php echo $hackathon_date ;?></div>    
        </div>
        <?php
        echo'
       
        <a href="'.$hackathon_registration_link.'" target="_blank" class="btn btn-primary mt-3">Register</a>' ?>
  </div>
</div>
<div class="card mt-3">
<ul class="list-unstyled">
  <li class="media p-3">
    <div class="media-body">
      <h5 class="mt-0 mb-3">Important Dates</h5>

      <p class="card-text">Registration Starts On : <span><?php echo $hackathon_reg_start ;?></span></p>
      <p class="card-text">Registration Ends On : <span><?php echo $hackathon_reg_end ;?></span></p>
      <p class="card-text">Contest Start On : <span><?php echo $hackathon_round_start;?></span></p>
      <p class="card-text">Contest Ends On : <span><?php echo $hackathon_round_end;?></span></p>
      <p class="card-text">Result Declaration On : <span><?php echo $hackathon_result_date;?></span></p>


    
    </div>
  </li>
  </div>
  <div class="card mt-3">

  <li class="media my-4 p-3">
    <div class="media-body">
      <h5 class="mt-0 mb-3">Rules and Regulations</h5>
     <?php echo nl2br($hackathon_rules) ;?>
    </div>
  </li>
  </div>
  <div class="card mt-3">

  <li class="media p-3">
    <div class="media-body">
      <h5 class="mt-0 mb-3">Awards and Prizes</h5>
      <p class="card-text">Winner : <span><?php echo $hackathon_winner_prize ;?></span></p>
      <p class="card-text">First Runner-Up : <span><?php echo $hackathon_first_runner_prize ;?></span></p>
      <p class="card-text">Second Runner-Up : <span><?php echo $hackathon_second_runner_prize ;?></span></p>
      <p class="card-text">Participants : <span><?php echo $hackathon_participants_prize;?></span></p>
    </div>
    <br>
    <br>
  </li>
  </div>
</ul>
  
</div>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>