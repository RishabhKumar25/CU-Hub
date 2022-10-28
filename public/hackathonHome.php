<?php

include("header.php");
include("config.php");
$username = $_SESSION['login_user'];


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

   <a href="addhackathon.php"> <button class="btn btn-primary mt-5 ms-5">Host Hackathon</button> </a>

    <?php

    $res = mysqli_query($con,"select * from hackathon_list where approved = 1");

    while($row =mysqli_fetch_assoc($res)){
      $hackathon_organizer = $row['hackathon_organizer'];
      $hackathon_name = $row['hackathon_name'];
      $hackathon_desc = $row['hackathon_desc'];
      $hackathon_date = $row['hackathon_date'];
      $hackathon_prize = $row['hackathon_prize'];
      $hackathon_id = $row['hackathon_id'];
      $approved = $row['approved'];


      echo '<div class="container w-50 mt-5">

    <div class="card mt-3">
  <h5 class="card-header">'.$hackathon_organizer.'</h5>
  <div class="card-body">
    <h5 class="card-title">'.$hackathon_name.'</h5>
    <p class="card-text">'.nl2br($hackathon_desc).'</p>
    <div class="text_box">
    <div class="">'.$hackathon_prize.'</div>
        <div class="">'.$hackathon_date.'</div>    
        </div>
        <a href="hackathon.php?hackathon_id='.$hackathon_id.'" class="btn btn-primary mt-3">View Details</a>
  </div>
</div>

  
</div>';

    }

    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>