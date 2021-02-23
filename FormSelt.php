<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>

	<?php

	$firstName= $Gender="";
	$firstNameErr=$GenderErr="";

	if($_SERVER['REQUEST_METHOD'] == "POST") {


		if (empty($_POST['fname'])) {

			$firstNameErr="Please Enter Name";
			
		}
		else {
			$firstName=$_POST['fname'];
		}


		if(empty($_POST['gmale']) && empty($_POST['gfemale']) ) {
				$GenderErr = "Please Select Gender";
			}
			else {

				if(!empty($_POST['gmale']))
				{
					$Gender = $_POST['gmale'];
				}

				else
				{
					$Gender = $_POST['gfemale'];
				}
	
			}

		if ($firstNameErr=="" && $GenderErr=="") {
			echo "Success" .$firstName;
			$filePath = "self1.txt";


				$f4 = fopen($filePath, "a");

		        fwrite($f4, $firstName. " " .$Gender ."\n");

		        fclose($f4);
		}

      

	}


	  ?>
	<h1>File upload</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

	<label for="firstName">First Name : </label>
	<input type="text" id="firstName" name="fname" value="<?php echo $firstName ?>">
	<?php echo $firstNameErr; ?>

	<br>

		<!-- Gender  -->
		<label>Gender : </label>
		<input type="Radio" name="gmale" value="Male" id="male">
		<label for="male">Male</label>
		<input type="Radio" name="gfemale" value="Female" id="female">
		<label for="female">Female</label>
		<p><?php echo $GenderErr; ?></p>
     <br>


	<input type="submit" name="submit">
    </form>

</body>
</html>