<?php


$f=fopen("self1.txt", "r");

$data=fread($f, filesize("self1.txt"));

$data_filter=explode("\n", $data);


$data_new=explode(",", $data);


if(isset($_POST['submit'])) {

	$error="";

     if (empty($_POST['username']) || empty($_POST['password'])) {

			$error="Please Enter username or password";
			
		}
		else {

			if ($_POST['username'] ==  $data_new[4] && $_POST['password']== $data_new[5]) {


				session_start();


			
			$_SESSION["username"] = $data_new[4];
            $_SESSION["firstname"] = $data_new[0];

            $_SESSION["lastname"] = $data_new[1];
            $_SESSION["email"] = $data_new[3];
            

            echo $_SESSION["username"] . "  " . $_SESSION["firstname"] . " " . $_SESSION["lastname"]." ".  $_SESSION["email"];

			

		}

		
		}

	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
    <form action="" method="post">
	<input type="text" name="username" placeholder="Enter your username" >
    <input type="password" name="password" placeholder="Enter your password" >
    <input name="submit" type="submit" value="LOGIN">

    </form>

</body>
</html>