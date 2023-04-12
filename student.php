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
include ("./include/stud_sidebar.php");
 
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

</head>
<body>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="" class="nav-link">HOME</a>

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

			<b><?=$_SESSION['role']?></b><a href="#" class="profile"><img src="images/user.png">
			</a>
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

  <!-- users -->
  <div class="card">
  <div class="card-body text-center">
	<h5 class="card-title">
<p> WELCOME User's</p>


	</h5>
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