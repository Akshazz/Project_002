<?php
require_once ("connection/connection.php");

$con = connection();

if(!isset($_SESSION)){
  session_start();
}

// Get user ID from session
@$id = $_SESSION['ID'];

// Log activity and destroy session
session_destroy();
header("Location: login.php");


?>
