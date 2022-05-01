<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor Add</title>
</head>



	<style media="screen">
	.button {
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
	</style>

<body>

	<?php
	include_once '../Model/Connection.php';
	include '../Model/Header.php';
	?>



	<?php

		$firstnameErr = $lastnameErr = $doctortimeErr = $doctorroomErr = $PhoneErr = "";
		$firstname = $lastname = $doctortime = $doctorroom = $phone = "";



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




			$firstname = test(@$_POST['firstname']);
			$lastname =  test(@$_POST['lastname']);
			$doctortime = test(@$_POST['doctortime']);
			$doctorroom = test(@$_POST['doctorroom']);
			$phone = test(@$_POST['phone']);
			$SerialNo = test(@$_POST['SerialNo']);



			$isChecked = true;
			if (empty($firstname))
			{
				$isValid = false;
				echo "Dear user your first name can not be empty.";
			}
			echo "<br>";


			if (empty($lastname))
			{
				$isValid = false;
				echo "Dear user last name can not be empty.";
			}

			echo "<br>";




			if (empty($doctortime))
			{
				$isValid = false;
				echo "Dear user Doctor time can not be empty.";
			}

			if (empty($doctorroom))
			{
				$isValid = false;
				echo "Dear user Doctor room number can not be empty.";
			}





      else
      {

				$sql = "INSERT INTO  hmsdatabase_doctor (FirstName,LastName,DoctorTime,DoctorRoom,Phone) VALUES ('$firstname','$lastname','$doctortime','$doctorroom','$phone')";



				if ($con->query($sql) === TRUE)
				{
				echo "New doctor record created successfully";
					} else
					{
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

				$con->close();

				      }

						}

					?>



	<br><br>
	<td> <a href="../Controller/DoctorList.php" class="button">Doctor List</a></td>

  <br><br>
	<td> <a href="../Controller/WelcomePage.php" class="button">Manager panel</a></td>



	<?php
	include '../Model/Footer.php';
	?>


</body>
</html>
