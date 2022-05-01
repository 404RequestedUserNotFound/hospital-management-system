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
	<title>Booked Room's</title>
</head>

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

<body>



<?php
	include '../Model/Header.php';
?>



<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hms_database";
	$conn = new mysqli($hostname, $username, $password, $dbname);

	$sql = "SELECT Id, FirstName,LastName,CheckIn,CheckOut,RoomNo,Phone,RoomType FROM hmsdatabase_roombook";
	$result = $conn->query($sql);
?>

<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">
	<tr>
			<th>User Id</th>
			<th>First Name</th>
	    <th>Last Name</th>
	    <th>Check-In Date</th>
	    <th>Check-Out Date</th>
			<th>Room Number</th>
			<th>Phone Number</th>
			<th>Room Type</th>

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
				 <td><?php echo $row['LastName']; ?> </td>
			   <td><?php echo $row['CheckIn']; ?> </td>
			   <td><?php echo $row['CheckOut']; ?> </td>
				 <td><?php echo $row['RoomNo']; ?> </td>
				 <td><?php echo $row['Phone']; ?> </td>
				 <td><?php echo $row['RoomType']; ?> </td>


			 </tr>
			 <?php
		 }

	 }

$conn->close();;
?>



<br><td> <a href="../Controller/WelcomePage.php" class="button">Back to panel</a></td>




<br><td> <a href="../View/DeleteRoomBook.php" class="button">Cancel Room</a></td>


</table>



<table>
	<?php
		include '../Model/Footer.php';
		?>
</table>
</body>
</html>
