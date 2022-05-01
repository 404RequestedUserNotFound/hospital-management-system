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
	<title>Staff Page</title>
</head>






<style type="text/css">
#text
{

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


<body>





  <?php
  include '../Model/Header.php';
  ?>

  <form name="myform" action="../Controller/StaffPage.php" method="post" onsubmit="return validateform(this)" novalidate>

    <legend><b>Staff Basic Information:</b></legend>

    <label id="text" for="fname">First name *:</label>
    <input type="text" name="firstname" id="text" size="80" >
		<span id="err1"></span>

    <br><br>

    <label id="text"for="lname">Last Name *:</label>
    <input type="text" name="lastname" id="text" size="80">
		<span id="err2"></span>

    <br><br>








    <legend><b>Contact Information :</b></legend>

		<label id="text"for="staffdesignation">Staff Designation*:</label>
		<textarea id="text"name="staffdesignation" rows="5" cols="40" placeholder="Please enter the designatin" ></textarea>

		<br><br>

    <label id="text"for="staffpresentaddress">Staff Present Address*:</label>
    <textarea id="text"name="staffpresentaddress" rows="5" cols="40" placeholder="Please enter the present Address" ></textarea>

		<br><br>

    <label id="text"for="staffpermanentaddress">Staff Permanent Address*:</label>
    <textarea id="text"name="staffpermanentaddress" rows="5" cols="40" placeholder="Please enter the premanent address" ></textarea>
    <br><br>

		<label id="text"for="stafftime">Staff Time*:</label>
		<textarea id="text"name="stafftime" rows="5" cols="40" placeholder="Please enter the staff time" ></textarea>
		<br><br>


    <label id="text"for="phone">Phone:</label>
    <input type="number" name="phone" id="text" size="80" >
    <br><br>

		<input id="button" type="submit" name="submit" value="Entry Salary">



<br><br>

		<td> <a href="../Controller/WelcomePage.php" class="button">Back to panel</a></td>


</form>


<?php
include '../Model/Footer.php';
?>

</div>


<script src="../View/js/staff.js"type="text/javascript"></script>

</body>
</html>
