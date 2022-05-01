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
	<title>Registered Users</title>
</head>
<body>

	<style media="screen">
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
<?php
	include_once '../Model/Connection.php';
	include '../Model/Header.php';
?>



<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hms_database";
	$conn = new mysqli($hostname, $username, $password, $dbname);

	$sql = "SELECT Id, FirstName, MiddleName, LastName ,Email, PermanentAddress, PresentAddress, Phone, Website, Gender, Religion,DateOfBirth, UserName FROM hmsdatabase";
	$result = $conn->query($sql);
?>

<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">	  <tr>
			<th>User Id</th>
			<th>First Name</th>
	    <th>Middle Name</th>
	    <th>Last Name</th>
	    <th>Email</th>
	    <th>Permanent Address</th>
	    <th>Present Address</th>
	    <th>Phone </th>
			<th>Website </th>
			<th>Gender </th>
			<th>Religion </th>
			<th>Date of Birth </th>
			<th>User Name </th>
	  </tr>


<?php
	if ($result->num_rows > 0)
	{

		while($row = $result->fetch_assoc())
		{

			?>
			<tr>
				<td><?php echo $row['Id']; ?> </td>
			   <td><?php echo $row['FirstName']; ?> </td>
				 <td><?php echo $row['MiddleName']; ?> </td>
				 <td><?php echo $row['LastName']; ?> </td>
				 <td><?php echo $row['Email']; ?> </td>
			   <td><?php echo $row['PermanentAddress']; ?> </td>
			   <td><?php echo $row['PresentAddress']; ?> </td>
				 <td><?php echo $row['Phone']; ?> </td>
			   <td><?php echo $row['Website']; ?> </td>
			   <td><?php echo $row['Gender']; ?> </td>
				 <td><?php echo $row['Religion']; ?> </td>
				 <td><?php echo $row['DateOfBirth']; ?> </td>
				 <td><?php echo $row['UserName']; ?> </td>
			 <tr>
			 <?php
		 }

	 }

$conn->close();;

?>

	<br><br>
	<td> <a href="../View/Registration.php" class="button">Back to Registration</a></td>


	<br><br>
	<td> <a href="../View/Login.php" class="button">Back to Login</a></td>


	<br><br>
	<td> <a href="../Controller/WelcomePage.php" class="button">Back to panel</a></td>


</table>






	<table>
		<?php
			include '../Model/Footer.php';
			?>
	</table>

</body>
</html>
