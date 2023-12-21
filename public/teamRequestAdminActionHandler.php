<?php


	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		include("config.php");
		$team_request_submit_id = $_GET['team_request_submit_id'];
		$team_request_id = $_GET['team_request_id'];


		if(isset($_POST['approveteamrequest'])){


  $result = mysqli_query($con,"update teamrequest_submit_list set approve =1 where team_request_submit_id = '$team_request_submit_id'");
header("Location: teamRequestAdminAction.php?team_request_id=$team_request_id"); // Redirecting To Home Page



  }

   else if(isset($_POST['rejectteamrequest'])){

  $result = mysqli_query($con,"update teamrequest_submit_list set approve =-1 where team_request_submit_id = '$team_request_submit_id'");
header("Location: teamRequestAdminAction.php?team_request_id=$team_request_id"); // Redirecting To Home Page



  }


}

?>