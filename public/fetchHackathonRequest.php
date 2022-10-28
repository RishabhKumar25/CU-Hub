
    <?php
    include("admin.php");


    ?>



<?php

      $res = mysqli_query($con,"select * from hackathon_list where approved = 0");

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


      echo ' <div class="container w-50 mt-5">

    <div class="card mt-3">
  <h5 class="card-header">'.$hackathon_organizer.'</h5>
  <div class="card-body">
    <h5 class="card-title">'.$hackathon_name.'</h5>
    <p class="card-text">'.$hackathon_desc.'</p>
    <div class="text_box">
    <div class="">'.$hackathon_prize.'</div>
        <div class="">'.$hackathon_date.'</div>    
        </div>
  </div>
</div>
<div class="card mt-3">
<ul class="list-unstyled">
  <li class="media p-3">
    <div class="media-body">
      <h5 class="mt-0 mb-3">Important Dates</h5>

      <p class="card-text">Registration Starts On : <span>'.$hackathon_reg_start.'</span></p>
      <p class="card-text">Registration Ends On : <span>'.$hackathon_reg_end.'</span></p>
      <p class="card-text">Contest Start On : <span>'.$hackathon_round_start.'</span></p>
      <p class="card-text">Contest Ends On : <span>'.$hackathon_round_end.'</span></p>
      <p class="card-text">Result Declaration On : <span>'.$hackathon_result_date.'</span></p>


    
    </div>
  </li>
  </div>
  <div class="card mt-3">

  <li class="media my-4 p-3">
    <div class="media-body">
      <h5 class="mt-0 mb-3">Rules and Regulations</h5>
     '.nl2br($hackathon_rules).'
    </div>
  </li>
  </div>
  <div class="card mt-3">

  <li class="media p-3">
    <div class="media-body">
      <h5 class="mt-0 mb-3">Awards and Prizes</h5>
      <p class="card-text">Winner : <span>'.$hackathon_winner_prize.'</span></p>
      <p class="card-text">First Runner-Up : <span>'.$hackathon_first_runner_prize.'</span></p>
      <p class="card-text">Second Runner-Up : <span>'.$hackathon_second_runner_prize.'</span></p>
      <p class="card-text">Participants : <span>'.$hackathon_participants_prize.'</span></p>
    </div>
    <br>
    <br>
  </li>
  <form method ="post">
     <div class="col-md-12 text-center mb-5">

<button class="btn btn-success m-auto" type="submit" name="approveRequest">Approve</button>
<button class="btn btn-danger m-auto" type="submit" name="rejectRequest">Reject</button>


  </div>
  </form>
  </div>
</ul>
     
</div>


';

 if(isset($_POST['approveRequest'])){



     $updateresult=  mysqli_query($con,"update hackathon_list set approved = 1 where hackathon_id = '$hackathon_id'");

     if($updateresult){

        echo "<script>window.location.href='hackathonHome.php'</script>";
     }else{
      echo "Something went wrong";
     }


  }


   if(isset($_POST['rejectRequest'])){



     $updateresult=  mysqli_query($con,"update hackathon_list set approved = -1 where hackathon_id = '$hackathon_id'");

     if($updateresult){

        echo "<script>window.location.href='hackathonHome.php'</script>";
     }else{
      echo "Something went wrong";
     }


  }




}

 
    ?>