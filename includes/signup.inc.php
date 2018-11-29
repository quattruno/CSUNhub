<?php

	include_once 'dbh.inc.php';
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

		$sql = "INSERT INTO users (user_email, user_uid, user_pwd) VALUES ('$email', '$uid', '$pwd');";
		 mysqli_query($conn, $sql);

		 header("Location: ../index.php?signup=success");