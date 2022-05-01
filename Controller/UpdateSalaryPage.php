<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?><html>
<head>
<title>Update Salary</title>
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
mysqli_query(@$con,"UPDATE hmsdatabase_salary set id='" . @$_POST['id'] .
"',FirstName='" . @$_POST['firstname'] .
"',LastName='" . @$_POST['lastname'] .
"',Designation='" . @$_POST['designation'] .
"',Salary='" .@$_POST['salary'] .
"' WHERE id='" . @$_POST['id'] . "'");
$message = "Salary has been updated successfully";
}


$result = mysqli_query($con,"SELECT * FROM hmsdatabase_salary WHERE id='" . @$_GET['id'] . "'");
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
<td> <a href="../View/UpdateSalary.php?id=<?php echo $row["id"]; ?>" class="button">Back to update salary</a></td>
<br>
<br>

<legend><b>Entry Salary By Job Designaation:</b></legend>

<label for="userid">USER ID:</label>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br><br>


<label for="fname">First name *:</label>
<input type="text" name="firstname" id="text" size="80" value="<?php echo $row['FirstName']; ?>">
<br><br>

<label for="lname">Last Name *:</label>
<input type="text" name="lastname" id="text" size="80" value="<?php echo $row['LastName']; ?>">
<br><br>



<label for="designation">Designation*:</label>
<input type="radio" name="designation" value="Doctor" >Doctor
<input type="radio" name="designation" value="Staff" >Staff
<input type="radio" name="designation" value="Manager" >Manager
<input type="radio" name="designation" value="Admin" >Admin
<br><br>



<label for="salary">Salary *:</label>
<select name="salary">
<option value=null></option>
<option value="50,000">50,000</option>
<option value="12,999">12,999</option>
<option value="25,000">25,000</option>
<option value="22,000">22,000</option>
</select>

<br><br>


<input type="submit" name="submit" value="Update Salary"class="button">




<br>


</form>










<?php
include '../Model/Footer.php';
?>

</div>



</body>
</html>
