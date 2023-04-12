<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){


	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);


		$sql = "INSERT INTO my_profile (fname, lname, sex, email, password) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$fname, $lname, $sex, $email, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}