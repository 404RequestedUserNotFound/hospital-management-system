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
	<title>Room Book</title>
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

		$firstnameErr = $lastnameErr = $checkinErr = $checkout = $PhoneErr = $roomtypeErr= $roomnoErr = "";
		$firstname = $lastname = $checkin = $checkout = $Phone = $roomtype= $roomno =  "";



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
			$checkin = test(@$_POST['checkin']);
			$checkout = test(@$_POST['checkout']);
      $roomno = test(@$_POST['roomno']);
			$phone = test(@$_POST['phone']);
      $roomtype = test(@$_POST['roomtype']);
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

      if(empty($checkin))
      {
        $isValid = false;
        echo "Please enter the check in date";
      }
      echo "<br>";

      if(empty($checkout))
      {
        $isValid = false;
        echo "Please enter the check out date";
      }
      echo "<br>";



			if (empty($phone))
			{
				$isValid = false;
				echo "Dear user Paitent phone number can not be empty.";
			}



      			if (empty($roomtype))
      			{
      				$isValid = false;
      			echo "Dear user please select the room type.";
      			}




      else
      {

				include_once '../Model/Connection.php';








								$sql = "INSERT INTO  hmsdatabase_roombook (FirstName,LastName,CheckIn,CheckOut,RoomNo,Phone,RoomType) VALUES ('$firstname','$lastname','$checkin','$checkout','$roomno','$phone','$roomtype')";



								if ($con->query($sql) === TRUE)
								{
								echo "Room has been booked succesfully";
									} else
									{
										echo "Error: " . $sql . "<br>" . $con->error;
									}

								$con->close();

								      }

										}

									?>

	<br><br>
	<td> <a href="../Controller/WelcomePage.php" class="button">Back to panel</a></td>
<br><br>
<td> <a href="../Controller/RoomBookList.php" class="button">Booked Rooms</a></td>



	<?php
	include '../Model/Footer.php';
	?>


</body>
</html>
