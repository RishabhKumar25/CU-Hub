<?php

include("header.php");
if(!isset($_SESSION['login_sess'])){
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Please login first
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo "<script>setTimeout(\"location.href = 'hackathonHome.php';\",1500);</script>";
}else{

$username = $_SESSION['login_user'];
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
  <a class="" href="hackathonAdminAll.php">All hackathons</a>
  <a href="hackathonAdminApproved.php">Approved hackathons</a>
  <a href="hackathonAdminPending.php">Pending hackathons</a>

  <a href="hackathonAdminRejected.php">Rejected hackathons</a>
</div>

</body>
</html>
