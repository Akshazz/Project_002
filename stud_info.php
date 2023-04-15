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
 
$sql = "SELECT * FROM my_profile WHERE role='Student' ORDER BY id";
$result = $con->query($sql) or die($con->error);
$row = $result->fetch_assoc();

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
							<a class="active" href="">Student Information</a>
						</li>
					</ul>
				</div>

			</div>

			<ul class="box-info">
				<li>

<!-- admin -->

	</h5>
  </div>
</div>
                                
<div class="card-body">
       
<h2>Student Information</h2>

  <link href="css/stylesheet.css" rel="stylesheet">

   <input type="search" class="lighter-table-filter" data-table="table-info" placeholder="Search...">
<table class="table-info table" style="width: 100%;">
<thead>
            <tr> 
            <th>ID</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
            <th>Contact</th>
			<th>Action</th>
            </tr>
        </thead>
        
        <tbody>
        <?php do{ 
            if (!empty($row)){?>
            <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['fname'];?>&nbsp;<?php echo $row['lname'];?></td>
            <td><?php echo $row['sex'];?></td>
            <td><?php echo $row['age'];?></td> 
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['contact'];?></td> 
			<td>

			</td> 
           </tr>
        <?php }}while($row = $result->fetch_assoc()); ?>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

 <script  src="JS/function.js"></script>

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<style>

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