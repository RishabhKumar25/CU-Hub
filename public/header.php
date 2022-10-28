<?php
  
  session_start();
	
	include('loginModal.php');


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>




  	<nav class="navbar navbar-expand-lg bg-dark mt-10 ">
  <div class="container-fluid">
    <a class="navbar-brand text-white ms-4" href="#">CU HUB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-4 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active text-white ms-3" aria-current="page" href="#">Home</a>
        </li>

         <li class="nav-item">
          <a class="nav-link text-white ms-3" aria-current="page" href="discussionHome.php">Discussion Forum</a>
        </li>

         <li class="nav-item">
          <a class="nav-link text-white ms-3" aria-current="page" href="hackathonHome.php">Hackathons</a>
        </li>


         <li class="nav-item">
          <a class="nav-link text-white ms-3" aria-current="page" href="teamHome.php">Teams</a>
        </li>
  
             </ul>
             <?php

             if(!isset($_SESSION['login_sess'])){
              $loggedin = false;
          }else{
            $loggedin = true;
          }

          if($loggedin == true){
            $username = $_SESSION["login_user"];

            echo'
             <h4 class="nav-item text-white ms-3">

            '.$username.'
        
        </h4>

        <a href="logout.php"><button class="btn btn-info text-white ms-5"   type="submit">Logout</button></a>



        '

        ;

          }else{

            echo'

             <button class="btn btn-primary text-white ms-5" data-bs-toggle="modal" data-bs-target="#loginModal"  type="submit">Login</button>';

           }

            ?>


       


    </div>
  </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>