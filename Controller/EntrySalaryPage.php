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
	<title>Entry Salary</title>
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

	<fieldset>
	<?php
	include_once '../Model/Connection.php';
	include '../Model/Header.php';
	?>
	</fieldset>



	<?php

		$firstnameErr = $lastnameErr = $designationErr = $salaryErr = "";
		$firstname = $lastname = $designation = $salary = "";



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
			$designation = test(@$_POST['designation']);
			$salary = test(@$_POST['salary']);




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




			if (empty($designation))
			{
				$isValid = false;
				echo "Dear user designation can not be empty.";
			}

			if (empty($salary))
			{
				$isValid = false;
				echo "Dear user salary can not be empty.";
			}





      else
      {

				$sql = "INSERT INTO  hmsdatabase_salary (FirstName,LastName,Designation,Salary) VALUES ('$firstname','$lastname','$designation','$salary')";



				if ($con->query($sql) === TRUE)
				{
				echo "Salary added successfully";
					} else
					{
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

				$con->close();
				      }

						}
            ?>



            <br><br>
						<td> <a href="../Controller/SalaryList.php" class="button">Employee Salary List</a></td>

            <br><br>
						<td> <a href="../Controller/WelcomePage.php" class="button">Back to panel</a></td>



            <?php
            include '../Model/Footer.php';
            ?>


            </body>
            </html>
