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

	<style type="text/css">

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		font-family: "Lucida Console", "Courier New", monospace;

	}

	#button{

		padding: 10px;
		width: 900px;
		color: black;
		background-color: #4CAF50;
		border: 10px;
	}

	#box{

		background-color: #f8f8f8;
		margin: auto;
		width: 900px;
		padding: 20px;
		border-style: ridge;
	}
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

	<div id="box">


    <?php
    include '../Model/Header.php';
    ?>


	<form name="myform"action="../Controller/RegistrationPage.php" method="post" onsubmit="return validateform(this)" novalidate>

		<legend><b>Basic Information:</b></legend>
<br>


		<label for="fname" id="text" >First name *:</label>
		<input type="text" name="firstname" id="text" size="80" >
		<br><br>

		<label for="mname"id="text" >Middle Name:</label>
		<input type="text" name="middlename" id="text" size="80" >
		<br><br>

		<label for="lname" id="text" >Last Name *:</label>
		<input type="text" name="lastname" id="text" size="80">
		<br><br>

		<label for="gender" id="text">Gender *:</label>
		<input  type="radio" name="gender" value="MALE" >Male
		<input  type="radio" name="gender" value="FEMALE" >Female
		<br><br>


		<label for="religion" id="text">Religion *:</label>
		<select name="religion">
		<option value=null></option>
		<option value="ISLAM">ISLAM</option>
		<option value="HINDU">HINDU</option>
		<option value="CHRISTIAN">CHRISTIAN</option>
		<option value="BUDDHIST">BUDDHIST</option>
		</select>
		<br><br>

		<label for="birthdaycheck" id="text">Date of birth *:</label>
		<input id="text" type="date" name="birthdaycheck" id="birthdaycheck" size="80" >
		<br><br>





		<legend><b>Contact Information :</b></legend>
<br>
		<label for="preadd" id="text">Present Address*:</label>
		<textarea id="text" name="preadd" rows="5" cols="40" placeholder="Please enter your present address" ></textarea>
		<br><br>

		<label for="peradd" id="text">Permanent Address*:</label>
		<textarea id="text" name="peradd" rows="5" cols="40" placeholder="Please enter your permanent address" ></textarea>
		<br><br>


		<label for="phone" id="text">Phone:</label>
		<input id="text" type="number" name="phone" id="text" size="80" >
		<br><br>


		<label for="email"id="text" >Email*:</label>
		<input type="email" name="email" id="text" size="80" >
		<br><br>

		<label for="website" id="text">Personal Website Link:</label>
		<input id="text" type="url" name="website">
		<br><br>




			<legend><b>Credentials : </b></legend>

<br>
			<label id="text">User Name :</label>
			<input id="text" type="text" name="uname" >
			<br><br>

			<label id="text">Password :</label>
			<input id="text" type="Passwords" name="passwords">
			<br><br>

			<label id="text">Confirm Password :</label>
			<input id="text" type="Password" name="confirmpass" >
			<br><br>
			<br><br>

			<input id="button" type="submit" name="submit" value="SUBMIT FORM">

<br><br>




<td> <a href="../View/Login.php" class="button">Back to Login</a></td>


  <?php
  include '../Model/Footer.php';
  ?>

</form>
</div>
<script src="../View/js/registration.js"type="text/javascript"></script>

</body>
</html>
