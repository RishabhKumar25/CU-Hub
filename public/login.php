<?php

include("config.php");
session_start();


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CU HUB - LOGIN</title>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

    

  <section class="login_section">

    <div class="login_parent">
      <div class="login_left">
        <h1>Welcome Back...</h1>
        <form action="" method="post">
          <input type="text" placeholder="Username" name="username"/>
          <input type="password" placeholder="Password" name ="password"/>
         <a href="forgotpassword.php"> <p style="text-align: right !important; font-size: 0.7rem;"> Forgot your password? </p></a>
          <button type="submit" class="primary_btn" name="login">Login</button>

          <p style="font-size:0.7rem;">Don't have an account? <a href="signup.php"><span style="font-size:1rem">Create your account</span></p></a>

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

  if(isset($_POST['login'])){


    $username = $_POST["username"];
    $password = $_POST["password"];

   
    $res = mysqli_query($con,"select * from login where username='$username' and password='$password'");

    $result = mysqli_fetch_array($res);

    if($result){
      $_SESSION["login_sess"]=1;
      $_SESSION['login_user']=$username;
 header("location:personalProfile.php");
}
else{

      echo "Invalid Credentials";
    }

    


  }

  ?>


  </body>
</html>