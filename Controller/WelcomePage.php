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
	<title>Welcome Page (Manger)</title>
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

.buttonl {
	border: 0;
	border-radius: 0.25rem;
	background: red;
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
	include '../Model/Header.php';
	?>


	<?php
					echo"<h2>Welcome,".$_SESSION['username']."</h2>";
	?>
	<?php echo "<h1>HMS MANAGER PANEL</h1>"; ?>


      <a href="../View/ChangePasswordPre.php" class="button" >Change Password</a><br><br>
        <a href="../View/Registration.php" class="button">Add User's</a><br><br>
          <a href="../View/UpdateProfile.php" class="button">Update Profile Information</a><br><br>
				  	<a href="UserPage.php"class="button" >Registered User's List</a><br><br>
				  		<a href="../View/DeleteProfile.php"class="button"class="button">Delete Registered Profile</a><br><br>
								<a href="../View/Doctor.php"class="button">Add Doctor</a><br><br>

									<a href="../View/UpdateDoctor.php"class="button">Update Doctor Profile</a><br><br>
                  <a href="../Controller/DoctorList.php"class="button">Doctor List</a><br><br>

										<a href="../View/Staff.php"class="button">Add Staff</a><br><br>
                      <a href="../View/DeleteStaff.php"class="button">Delete Staff</a><br><br>
										  	<a href="../View/RoomBook.php"class="button">Book Room</a><br><br>
                        <a href="../View/DeleteRoomBook.php"class="button">Cancel Reservation</a><br><br>

												 <a href="../View/EntrySalary.php"class="button">Entry Salary.</a><br><br>
												  <a href="../View/UpdateSalary.php"class="button">Update Salary.</a><br><br>
													 <a href="../Controller/Logout.php"class="buttonl">Log Out</a><br>









<?php
	include '../Model/Footer.php';
	?>

</body>
</html>
