<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?><html>
<head>
<title>Update Profile</title>
</head>
<body>

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



	<?php
	include '../Model/Header.php';
	?>

<?php
include_once '../Model/Connection.php';
if(count($_POST)>0)
{
mysqli_query($con,"UPDATE hmsdatabase set id='" . $_POST['id'] .
"',FirstName='" . $_POST['firstname'] .
"', MiddleName='" . $_POST['middlename'] .
"',LastName='" . $_POST['lastname'] .
"',PresentAddress='" . $_POST['preadd'] .
"',PermanentAddress='" . $_POST['peradd'] .
"',Phone='" . $_POST['phone'] .
"',Email='" . $_POST['email'] .
"' WHERE id='" . $_POST['id'] . "'");
$message = "Profile has been updated successfully";
}


$result = mysqli_query($con,"SELECT * FROM hmsdatabase WHERE id='" . @$_GET['id'] . "'");
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
<td> <a href="../View/UpdateProfile.php?id=<?php echo $row["id"]; ?>" class="button">Back to update profile</a></td>

<br>
<br>
  <legend><b>Change Basic Information:</b></legend>
<br>
  <label for="userid"id="text">USER ID:</label>
  <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
  <input type="text" name="id"  value="<?php echo $row['id']; ?>">
  <br><br>

  <label for="fname"id="text">First name *:</label>
  <input type="text" name="firstname" id="text" size="80" value="<?php echo $row['FirstName']; ?>">
  <br><br>

  <label for="mname"id="text">Middle Name:</label>
  <input type="text" name="middlename" id="text" size="80" value="<?php echo $row['MiddleName']; ?>">
  <br><br>

  <label for="lname"id="text">Last Name *:</label>
  <input type="text" name="lastname" id="text" size="80" value="<?php echo $row['LastName']; ?>">
  <br><br>


  <legend><b>Change Contact Information :</b></legend>

  <label for="preadd"id="text">Present Address*:</label>
  <textarea name="preadd" id="text" rows="5" cols="40"  value="<?php echo $row['PresentAddress']; ?>"></textarea>
  <br><br>

  <label for="peradd"id="text">Permanent Address*:</label>
  <textarea name="peradd" id="text"rows="5" cols="40"  value="<?php echo $row['PermanentAddress']; ?>"></textarea>
  <br><br>


  <label for="phone"id="text">Phone:</label>
  <input type="number" name="phone" id="phone" size="80" value="<?php echo $row['Phone']; ?>">
  <br><br>


  <label for="email"id="text">Email*:</label>
  <input type="email" name="email" id="email" size="80" value="<?php echo $row['Email']; ?>">
  <br><br>




<br>
<input type="submit" name="submit" value="Update Profile"class="button">


</form>

<?php
include '../Model/Footer.php';
?>



</div>
</body>
</html>
