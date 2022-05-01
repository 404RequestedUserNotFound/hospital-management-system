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
	<title>Book Room</title>
</head>

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



body
{
font-family:Arial;
}
input
{
font-family:Arial;
font-size:14px;
}
label{
font-family:Arial;
font-size:14px;
color:#999999;
}
.tblSaveForm
{
border-top:3px SkyBlue solid;
background-color: #f8f8f8;
}

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


</style>


<div id="box">
</style>

<body>
  <?php
  include '../Model/Header.php';
  ?>


  <form name="myform" action="../Controller/RoomBookPage.php" method="post" onsubmit="return validateform(this)"  novalidate>

    <legend><b>Paitent Information:</b></legend>

    <label id="text"for="fname">First name *:</label>
    <input id="text"type="text" name="firstname" id="text" size="80" >
    <br><br>



    <label id="text"for="lname">Last Name *:</label>
    <input id="text"type="text" name="lastname" id="text" size="80">
    <br><br>




        <label id="text"for="phone">Phone:</label>
        <input id="text"type="number" name="phone" id="text" size="80" >
        <br><br>






    <legend><b>Room Information :</b></legend>


    		<label id="text"for="checkin">Select Check In Date:</label>
    		<input id="text"type="date" name="checkin" id="text" size="80" >
    		<br><br>

        <label id="text"for="checkout">Select Check Out Date:</label>
    		<input id="text"type="date" name="checkout" id="text" size="80" >
    		<br><br>


        <label id="text"for="roomtype">Room Type:</label>
        <input type="radio" name="roomtype" value="AC" >AC
        <input type="radio" name="roomtype" value="Non-AC" >Non-AC
        <br><br>


        <label id="text"for="roomno">Room Number:</label>
        <textarea  id="text" name="roomno" rows="5" cols="40" placeholder="Please enter the room number" ></textarea>
        <br><br>

		<input id="button" type="submit" name="submit" value="Book Room">




			<br><br>
			<td> <a href="../View/Login.php" class="button">Go to login page</a></td>




</form>
<?php
include '../Model/Footer.php';
?>
</div>

<script src="../View/js/roombook.js"type="text/javascript"></script>

</body>
</html>
