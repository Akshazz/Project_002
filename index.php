<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['role'])){
  $_SESSION['role'];
}
else{
 echo header("location:login.php");
}

include ("process.php");
include ("./include/sidebar.php");
 
?>
       
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style2.css">
	<link href="css/stylesheet.css" rel="stylesheet">

</head>
<body>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="index.php" class="nav-link">HOME</a>

			<form action="">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>

			<a href="" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">0</span>
			</a>

			<a href="" class="notification">
				<i class='bx bxs-message' ></i>
				<span class="num">0</span>
			</a>

			<b><?=$_SESSION['role']?></b><p class="profile"><img src="images/user.png">
			</p>

			<div class="action">
      <div class="profile" onclick="menuToggle();">
      </div>
      <div class="menu">
        <h3><span><b><?=$_SESSION['fname']?> <?=$_SESSION['lname']?></b></span></h3>
        <ul>
          <li>
            <a href="profile.php">My profile</a>
          </li>
          <li>
            <a href="#">Setting</a>
          </li>
          <li>
            <a href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <script>
      function menuToggle() {
        const toggleMenu = document.querySelector(".menu");
        toggleMenu.classList.toggle("active");
      }
    </script>


			

		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="">Home</a>
						</li>
					</ul>
				</div>

			</div>

			<ul class="box-info">
				<li>


<!-- admin -->

<center>
<div class="row">
  <div class="column">
    <div class="card">
      <h3><i class="bx bx-user" style="font-size: 20px;"></i> Student's </h3>
	  <?php 

@$id = $_GET['id'];
$sql1 = "SELECT * FROM my_profile WHERE role='Student'";
$tea = $con->query($sql1) or die($con->error);
$row = $tea->fetch_assoc();

if ($result2 = mysqli_query($con, $sql1)) {

$rowcount = mysqli_num_rows( $result2);

}

?>
<br>

<b><?php // Display result
printf( $rowcount);?></b>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3><i class="bx bx-user" style="font-size: 20px;"></i> Users</h3>
	  <?php 

@$id = $_GET['id'];
$sql1 = "SELECT * FROM my_profile";
$tea = $con->query($sql1) or die($con->error);
$row = $tea->fetch_assoc();

if ($result2 = mysqli_query($con, $sql1)) {

$rowcount = mysqli_num_rows( $result2);

}

?>
<br>

<b><?php // Display result
printf( $rowcount);?></b>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><i class="bx bx-user" style="font-size: 20px;"></i>Example 3</h3>
	  <?php 

@$id = $_GET['id'];
$sql1 = "SELECT * FROM my_profile";
$tea = $con->query($sql1) or die($con->error);
$row = $tea->fetch_assoc();

if ($result2 = mysqli_query($con, $sql1)) {

$rowcount = mysqli_num_rows( $result2);

}

?>
<br>

<b><?php // Display result
printf( $rowcount);?></b>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3><i class="bx bx-user" style="font-size: 20px;"></i>Example 4</h3>
	  <?php 

@$id = $_GET['id'];
$sql1 = "SELECT * FROM my_profile";
$tea = $con->query($sql1) or die($con->error);
$row = $tea->fetch_assoc();

if ($result2 = mysqli_query($con, $sql1)) {

$rowcount = mysqli_num_rows( $result2);

}

?>
<br>

<b><?php // Display result
printf( $rowcount);?></b>
    </div>
  </div>
</div>
</div>
</div>

				</li>
			</ul>

</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>

<?php
include ("script/script.php");

?>




<style>
* {
  box-sizing: border-box;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 200px;
  background-color: #f1f1f1;
  padding: 15px;
}


/* Dropdown Profile */
.action {
  position: fixed;
  top: 20px;
  right: 30px;
}

.action .profile {
  position: relative;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  overflow: hidden;
  cursor: pointer;
}

.action .profile img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  object-fit: cover;
}

.action .menu {
  position: absolute;
  right: -10px;
  padding: 5px 20px;
  background: #fff;
  width: 200px;
  box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
  border-radius: 15px;
  visibility: hidden;
  opacity: 0;
}

.action .menu.active {
  top: 80px;
  visibility: visible;
  opacity: 1;
}

.action .menu::before {
  content: "";
  position: absolute;
  top: -10px;
  right: 28px;
  width: 20px;
  height: 20px;
  background: #fff;
  transform: rotate(45deg);
}

.action .menu h3 {
  width: 100%;
  text-align: center;
  font-size: 18px;
  padding: 10px 0;
  font-weight: 500;
  color: #555;
  line-height: 1.5em;
}

.action .menu ul li {
  list-style: none;
  padding: 16px 0;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  display: flex;
  align-items: center;
}

</style>