<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?><html>
<head>
<title>Update Doctor Profile</title>
</head>

<style type="text/css">
#text{

	height: 25px;
	border-radius: 5px;
	padding: 4px;
	border: solid thin #aaa;
	width: 100%;
	font-family: -system-ui, sans-serif;

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


<body>
	<?php
	include '../Model/Header.php';
	?>

<?php
include_once '../Model/Connection.php';
if(count($_POST)>0)
{
mysqli_query($con,"UPDATE hmsdatabase_doctor set id='" . $_POST['id'] .
"',FirstName='" . $_POST['firstname'] .
"',LastName='" . $_POST['lastname'] .
"',DoctorTime='" . $_POST['doctortime'] .
"',DoctorRoom='" . $_POST['doctorroom'] .
"',Phone='" . $_POST['phone'] .

"' WHERE id='" . $_POST['id'] . "'");
$message = "Doctor profile has been updated successfully";
}


$result = mysqli_query($con,"SELECT * FROM hmsdatabase_doctor WHERE id='" . @$_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>


<form name="form" method="post" action="">

<?php
if(isset($message))
{
  echo $message;
}
?>
<div id="box">

<br>
<td> <a href="../View/UpdateDoctor.php?id=<?php echo $row["id"]; ?>" class="button">Back to update doctor</a></td>
<br>
<br>

  <legend><b>Change Basic Information:</b></legend>

  <label for="userid">USER ID:</label>
  <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
  <input type="text" name="id"  value="<?php echo $row['id']; ?>">
  <br><br>

  <label for="fname">First Name *:</label>
  <input type="text" name="firstname" id="text" size="80" value="<?php echo $row['FirstName']; ?>">
  <br><br>

  <label for="mnamlnamee">Last Name:</label>
  <input type="text" name="lastname" id="text" size="80" value="<?php echo $row['LastName']; ?>">
  <br><br>

  <label for="lname">Doctor Time*:</label>
  <input type="text" name="doctortime" id="text" size="80" value="<?php echo $row['DoctorTime']; ?>">
  <br><br>

	<label for="lname">Doctor Room*:</label>
  <input type="text" name="doctorroom" id="text" size="80" value="<?php echo $row['DoctorRoom']; ?>">
  <br><br>

	<label for="lname">Phone*:</label>
  <input type="text" name="phone" id="text" size="80" value="<?php echo $row['Phone']; ?>">
  <br><br>






<br>
<input type="submit" name="submit" value="Update Doctor Profile"class="button">


</form>










<?php
include '../Model/Footer.php';
?>


</div>


</body>
</html>
