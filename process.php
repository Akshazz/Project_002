<?php
if(!isset($_SESSION)){
  session_start();
}
if(isset($_POST['email'])){
  $_SESSION['email'] = $_POST['email'];
}

include("connection/connection.php");

$con = connection();


if (isset($_SESSION['lockout']) && time() - $_SESSION['lockout'] < 30) {
  // User is locked out
  echo "<script>alert('Invalid login, please try again');</script>";
  exit();
}

if (isset($_SESSION['lockout']) && time() - $_SESSION['lockout'] >= 30) {
  // Lockout period has expired, reset attempts

  if ($_SESSION['attempts'] == 0) {
    // Reload the page if attempts equal to zero
  
    header('Location: ' . $_SERVER['PHP_SELF']);
    unset($_SESSION['lockout']);
    exit;
  }
}

if (!isset($_SESSION['attempts'])) {
  $_SESSION['attempts'] = 0;
}


if(isset($_POST['LOGIN']))  {

  $email = $_POST['email'];
  $password = md5($_POST['password']);


  $sql="SELECT * FROM my_profile WHERE email='$email' AND password='$password' LIMIT 1";
  $emp = $con->query($sql) or die ($con->error);
  $row = $emp->fetch_assoc();
  $total = $emp->num_rows;
    

  if ($total > 0) {

    // Check if user is already logged in
    if ($row['is_logged_in']) {
      echo "<script>alert('User already logged in');</script>";
      echo "<script>window.location = 'login.php?error=user_already_logged_in';</script>";
      exit();
    }
  
    $_SESSION['id'] = $row['id'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['email'] = $row['email'];
  
      if ($row['access_level'] == 1) {
        header("Location: index.php");

      } elseif ($row['access_level'] == 2) {

        header("Location: student.php");
      }
    }
  }
  //
  //else {
  //  $_SESSION['attempts']++;
  //  if ($_SESSION['attempts'] >= 3) {
  //      $_SESSION['lockout'] = time();
  //      echo "<script>alert('Too many login attempts. Please wait 30 seconds before trying again.');</script>";
  //      exit();
  //  } else {
  //  echo "<script>alert('Invalid login, please try again');</script>";
  //  echo "<script>window.location = 'login.php?error=Invalid login, please try again';</script>";
  //  exit();
  //}
//}

?>