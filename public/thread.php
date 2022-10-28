<?php
include("config.php");
include("header.php");
// if(!isset($_SESSION['login_sess'])){
// 	header('location:index.php');
// }

if(!isset($_SESSION['login_sess'])){
$loggedin = false;

}else{
	$loggedin = true;
}

//    $res=  mysqli_query($con,"select * from login where username='$username'");

//    $result = mysqli_fetch_array($res);


// if($result){

// 	$name = $result['name'];
// 	$email = $result['email'];
// 	$fetchusername = $result['username'];

// }


?>

<?php

$method = $_SERVER['REQUEST_METHOD'];
$thread_id = $_GET['thread_id'];

if(isset($_POST['commentsubmit'])){

	$comment_content = $_POST["comment_content"];

	$comment_content = $_POST['comment_content'];

	if($loggedin == true){
		$username = $_SESSION["login_user"];

	$sql = "INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_username`, `comment_time`) VALUES ('', '$comment_content', '$thread_id', '$username', current_timestamp());";
	$result = mysqli_query($con,$sql);

	if($result){

		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your comment is posted succesfully..
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

	}
}else{
	echo 'login to comment';
}

	
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

	
	<?php


   $res = mysqli_query($con,"select * from thread_list where thread_id = '$thread_id'");
   $thread_id = $_GET['thread_id'];


	while($row = mysqli_fetch_assoc($res)){

		$thread_title = $row['thread_title'];
		$thread_desc = $row['thread_desc'];

}


	?>
<div class="container my-4">
<div class="jumbotron">
  <h1 class="display-4"><?php echo $thread_title;?> Forum</h1>
  <p class="lead"><?php echo nl2br($thread_desc);?></p>
  <!-- <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
  
</div>
</div>



<div class="container my-3"> 
<div class="row my-4">


	<div class="container">

				<h1>Post Your Comment</h1>

		<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
 
   <div class="mb-3">

    <div class="form-group">
    	    <label for="exampleInputEmail1" class="form-label">Reply</label>

    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment_content"></textarea>
  </div>
    </div>

 
   <button type="submit" class="btn btn-primary" name="commentsubmit">Submit</button>
</form>

	</div>

	<div class="container mt-5">
		<h1>Browse Comments</h1>


<?php

$thread_id = $_GET['thread_id'];

   $res = mysqli_query($con,"select * from comments where thread_id = '$thread_id'");
   $noResult = true;

	while($row = mysqli_fetch_assoc($res)){
		$noResult = false;
		$comment = $row['comment_content'];
		$username = $row['comment_username'];
		$comment_time = $row['comment_time'];
		


		echo '<div class="media mt-5">
		<i class="fas fa-user mr-3"></i>
  <div class="media-body">
    <h5 class="mt-0"><a href="personalProfile.php?username='.$username.'">'.$username.'</a></h5>
    <p> '.nl2br($comment).' </p>
        <p> '.$comment_time.' </p>

  </div>
</div>';
}

	if($noResult){

		echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">No Result Found</h1>
    <p class="lead">Be the first person to post the comment</p>
  </div>
</div>';

	}


?>



</div>





	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>