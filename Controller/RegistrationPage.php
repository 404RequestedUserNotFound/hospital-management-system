<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page (Manager) </title>
</head>
<body>
<style media="screen">
.button
{
	border: 0;
	border-radius: 0.25rem;
	background: #1E88E5;
	color: white;
	font-family: -system-ui, sans-serif;
	font-size: 1rem;
	line-height: 1.2;
	white-space: nowrap;
	text-decoration: none;
	padding: 0.25rem 0.5rem;
	margin: 0.25rem;
	cursor: pointer;
}


	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		font-family: "Lucida Console", "Courier New", monospace;

	}

</style>
	<?php
	include_once '../Model/Connection.php';

	include '../Model/Header.php';
	?>


	<?php







		$firstnameErr = $lastnameErr = $emailErr = $birthdaycheckErr = $peraddErr = $preaddErr = $phoneErr = $websiteErr = $genderErr= $religionErr = $unameErr= $passwordsErr = $confirmpassErr=  "";
		$firstname = $middlename = $lastname = $birthdaycheck = $email = $peradd = $preadd = $phone = $website =$gender = $religion = $uname= $passwords= $confirmpass = "";



		$isValid = true;
		$isChecked = false;


		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{
			function test($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			function validateUserAge($val){
				$val = strtotime($val);
				$min = strtotime('+18 years',$val);
				if(time() < $min){
					return False;
				}
				return True;
			}



			$firstname = test(@$_POST['firstname']);
			$middlename = test(@$_POST['middlename']);
			$lastname =  test(@$_POST['lastname']);
			$email =  test(@$_POST['email']);
			$birthdaycheck = test(@$_POST['birthdaycheck']);
			$peradd = test(@$_POST['peradd']);
			$preadd = test(@$_POST['preadd']);
			$phone = test(@$_POST['phone']);
			$website = test(@$_POST['website']);
			$gender = test(@$_POST['gender']);
			$religion = test(@$_POST['religion']);
			$uname = test(@$_POST['uname']);
			$passwords = test(@$_POST['passwords']);
			$confirmpass = test(@$_POST['confirmpass']);
			$SerialNo = test(@$_POST['SerialNo']);



			$isChecked = true;
			if (empty($firstname))
			{
				$isValid = false;
				echo  "Dear user your first name can not be empty.";
			}
			echo "<br>";


			if (empty($lastname))
			{
				$isValid = false;
				echo "Dear user last name can not be empty.";
			}
			echo "<br>";


			if(empty($email))
			{
				$isValid = false;
				echo "Dear user email address can not be empty.";
			}


			else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$isValid = false;
				echo "Dear user please check your email again.";
			}
			echo "<br>";


			if(empty($birthdaycheck))
			{
				$isValid = false;
				echo "When is your birthday.?";
			}
			echo "<br>";


			if(!validateUserAge($birthdaycheck))
			{
				$isValid = false;
				echo "Dear user you are not old enough.";
			}


			if (empty($peradd))
			{
				$isValid = false;
			echo "Dear user your permanent address can not be empty.";
			}
			echo "<br>";



			if(empty($website))
			{
				$isValid = false;
	    }

			elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
			{
				echo "Dear user please check your website url again.";
	    }





			if (empty($gender))
			{
				$isValid = false;
			echo "Dear user please select your gender.";
			}

			echo "<br>";




			if (empty($uname))
			{
				$isValid = false;
				echo "Dear user please enter your user name.";
			}

			echo "<br>";

			if (empty($passwords))
			{
				$isValid = false;
			echo "Dear user please enter your desired password.";
			}
			echo "<br>";



			if (empty($confirmpass))
			{
				$isValid = false;
				echo "Dear user please re-enter your password to confirm.";
			}

			echo "<br>";



			if (empty($gender))
			{
				$isValid = false;
				echo "Dear user please select your gender.";
			}



      else
      {

$sql = "INSERT INTO  hmsdatabase (FirstName,MiddleName,LastName,Email,PermanentAddress,PresentAddress,Phone,Website,Gender,Religion,DateOfBirth,UserName,UserPassword,UserConfirmPassword) VALUES ('$firstname','$middlename','$lastname','$email','$peradd','$preadd','$phone','$website','$gender','$religion ','$birthdaycheck ','$uname','$passwords','$confirmpass')";



if ($con->query($sql) === TRUE)
{
echo "New record created successfully";
	} else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$con->close();

      }

		}

	?>
	<br>
<br>
	<a href="../View/Registration.php" class="button">Back to registration</a>

	<?php
	include '../Model/Footer.php';

	?>


</body>
</html>
