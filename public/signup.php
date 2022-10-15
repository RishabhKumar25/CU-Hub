<?php

include("config.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CU HUB - LOGIN</title>
    <link rel="stylesheet" href="./assests/styles/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

    <div>
    


    </div>
   

  <section class="login_section">

    <div class="login_parent signup_parent">
      <div class="login_left signup_left">
        <h1>Create free account...</h1>
        <form action="" method="post">
          <input type="text" placeholder="Name" name="name"/>
          <input type="text" placeholder="Username" name ="username"/>
          <input type="email" placeholder="Email" name="email"/>
          <input type="password" placeholder="Password" name="password"/>
          <input type="password" placeholder="Confirm Password" name="cpassword"/>
          <button type="submit" class="submit_btn" name="register">Sign up</button>

          <p style="font-size:0.7rem;">Already have an account? <a href="index.php"><span style="font-size:1rem"> Login here</span></p></a>

        </form>
      </div>
      <div class="login_right">

        <div class="login_right_content">
              <h1 style="margin-bottom: 0.2rem;">CU HUB</h1>
              <p style="font-size:1.2rem; font-style: italic; font-weight: 600; color: #fff5ee; margin-bottom: 1rem;">A place to explore...</p>
              <div class="box box1">
                Ask your seniors
              </div>
              <div class="box box2">
                Join the community
              </div>
              <div class="box box3">
                Show your records
              </div>

              <div class="login_right_social_icons">
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-github-square"></i>
              </div>




        </div>

       </div>
    </div>

  </section>

  
      <?php 

      if(isset($_POST['register'])){

        $name = $_POST["name"];
        $username = $_POST['username'];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

       $result =  mysqli_query($con,"insert into login values('','$name','$username','$email','$password','$cpassword')");
      

      if($result){
        echo "User registration succeed";
      }else{
        echo "User registration failed";
      }
    }


       ?>



  </body>
</html>