<?php
function auth($email, $pass) {
	global $db;

	$s = "SELECT * FROM testTable WHERE email='$email' AND password='$pass';";
	print "<br>$s<br>";

	$t = mysqli_query($db, $s);

	if (mysqli_num_rows($t) == 0) {
		print "<br>Invalid Credentials<br>";
		return false;
	}
	else {
		print "<br>Valid Credentials<br>";
		return true;
	}
}

function register($fname, $lname, $email, $pass) {
	global $db;

	$s = "INSERT INTO testTable (firstname, lastname, email, password) 
		VALUES ('$fname', '$lname', '$email', '$pass');";

	print "<br>$s<br>";

	$t = mysqli_query($db, $s);

	print "<br>You have registered successfully!";
}
?>
