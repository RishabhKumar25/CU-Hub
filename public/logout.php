<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: discussionHome.php"); // Redirecting To Home Page
}
?>