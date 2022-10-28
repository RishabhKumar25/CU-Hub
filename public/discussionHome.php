<?php
include("config.php");
include("header.php");
// if(!isset($_SESSION['login_sess'])){
// 	header('location:index.php');
// }

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

    <style>
    	*{
    		padding: 0;
    		margin: 0;
    		box-sizing: border-box;
    	}

    	.nav_parent{

    		widows: 100vw;
    		height: 8vh;
    		display: flex;
    		justify-content: space-around;
    		padding: 1.3rem;
    		background: #FAF0F0;

    	}

    	.nav_left{
    		font-size: 0.9rem;
    	}

    	.nav_center i{
    		margin: 0 12px;
    	}

    	.nav_right span{

    		font-size: 1.5rem;

    	}

    	.profile_section_parent{
    		width: 100vw;
    		height: fit-content;
    		display: flex;
    		justify-content: space-evenly;
    	}

    	.profile_section_left,.profile_section_right{

    		margin-top: 3rem;
    		
    	}

    	.box{
    		width: 15vw;
    		height: 10vh
    		text-align: left;
    		font-size: 1rem;
    		padding: 10px;
    		margin-top: 20px;
    		background: #5AB9EA;
    	}


    	.profile_form_section{

    		width: 30vw;
    		height: 40vh;
    		background: #FAF0F0;
    		border: 2px solid black;


    	}

    	.profile_table{
    		padding: 10px;

        border-collapse:separate;
         border-spacing:0 20px;
         margin-right: 5px;
            

    	}

    	 table {
                border-collapse: collapse;
            }

    	td{
    		border-bottom: 1px solid black;
    		border-radius: 20px;
    		width: 20vw;
    		text-align: left;
    		padding-left: 1rem;

    	}

    	tr{
    		text-align: left;
    		margin-top: 5rem;
    	}

    	

   .primary_btn{

   
   padding: 8px 16px;
    border-radius: 10px;
    font-size: 1rem;
    margin: 12px;
    border: none;
    background-color: #5680E9;
    color: white;


}

 .secondary_btn{

   
   padding: 8px 16px;
    border-radius: 10px;
    font-size: 1rem;
    margin: 12px;
    border: none;
    background-color: #5AB9EA;
    color: white;
}





    </style>

</head>


<body>


	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1200x400/?coding" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x400/?computer" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1200x400/?community" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="category_card">



</section>

<div class="container my-3"> 
	<h3 class="text-center mt-5">Discussion Categories</h3>
<div class="row my-4">


<?php

   $res = mysqli_query($con,"select * from category");



	while($row = mysqli_fetch_assoc($res)){

		$category_name = $row['category_name'];
		$category_desc = $row['category_desc'];
		$category_image = $row['category_image'];
    $category_id = $row['category_id'];



		echo '<div class="col-md-4 my-2">

<div class="card" style="width: 18rem;">
  <img src="'.$category_image.'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-text">'.$category_name.'</h5>
    <p class="card-text">'.$category_desc.'</p>
    <a href="threadList.php?category_id='.$category_id.'" class="btn btn-primary">Go to forum</a>
  </div>
</div>



</div>';



	}


?>





	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>