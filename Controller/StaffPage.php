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
	<title>Staff Add</title>
</head>
<body>






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



	<?php
	include_once '../Model/Connection.php';

	include '../Model/Header.php';
	?>




	<?php

		$firstnameErr = $lastnameErr = $staffdesignationErr = $staffpresentaddressErr = $staffpermanentaddressErr = $stafftimeErr =$phoneErr = "";
		$firstname = $lastname = $staffdesignation = $staffpresentaddress = $staffpermanentaddress= $stafftime = $phone = "";



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
			$staffdesignation = test(@$_POST['staffdesignation']);
			$staffpresentaddress = test(@$_POST['staffpresentaddress']);
			$staffpermanentaddress = test(@$_POST['staffpermanentaddress']);
      $stafftime = test(@$_POST['stafftime']);
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




			if (empty($staffdesignation))
			{
				$isValid = false;
				echo "Dear staff designation can not be empty.";
			}
      echo "<br>";

			if (empty($staffpermanentaddress))
			{
				$isValid = false;
				echo "Dear user staff present address can not be empty.";
			}
      echo "<br>";


      			if (empty($staffpermanentaddress))
      			{
      				$isValid = false;
      				echo "Dear user staff permanent address can not be empty.";
      			}			echo "<br>";


            if (empty($stafftime))
            {
              $isValid = false;
              echo "Dear user staff time can not be empty.";
            }
            echo "<br>";


            			if (empty($phone))
            			{
            				$isValid = false;
            				echo "Dear user staff phone number can not be empty.";
            			}


      else
      {



				$sql = "INSERT INTO  hmsdatabase_staff (FirstName,LastName,StaffDesignation,StaffPresentAddress,StaffPermanentAddress,StaffTime,Phone) VALUES ('$firstname','$lastname','$staffdesignation','$staffpresentaddress','$staffpermanentaddress','$stafftime','$phone')";



				if ($con->query($sql) === TRUE)
				{
				echo "New staff record created successfully";
					} else
					{
						echo "Error: " . $sql . "<br>" . $con->error;
					}

				$con->close();

				      }

						}

					?>



	<br><br>
	<td> <a href="../Controller/StaffList.php" class="button">Staff List</a></td>


  <br><br>

	<td> <a href="../Controller/WelcomePage.php" class="button">Back to panel</a></td>




	<?php
	include '../Model/Footer.php';
	?>


</body>
</html>
