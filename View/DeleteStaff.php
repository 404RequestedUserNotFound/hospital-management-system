<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?><!DOCTYPE html>
<html>
 <head>
   <title>Delete Staff Profile</title>
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
<br><br>
<?php
include_once '../Model/Connection.php';
$result = mysqli_query($con,"SELECT * FROM hmsdatabase_staff");
?>


<?php
if (mysqli_num_rows($result) > 0)
{
?>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">
  	  <tr>
      <th>User Id</th>
			<th>First Name</th>
	    <th>Last Name</th>
	    <th>Staff Designation</th>
	    <th>Staff's Present Address</th>
			<th>Staff's Permanent Address</th>
			<th>Staff's Schedule</th>
	    <th>Phone </th>
      <th>Action</th>


	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result))
      {
			?>
	  <tr>
      <td><?php echo $row['id']; ?> </td>
       <td><?php echo $row['FirstName']; ?> </td>
       <td><?php echo $row['LastName']; ?> </td>
       <td><?php echo $row['StaffDesignation']; ?> </td>
       <td><?php echo $row['StaffPresentAddress']; ?> </td>
       <td><?php echo $row['StaffPermanentAddress']; ?> </td>
       <td><?php echo $row['StaffTime']; ?> </td>
       <td><?php echo $row['Phone']; ?> </td>
       <td> <a href="../Controller/DeleteStaffPage.php?id=<?php echo $row["id"]; ?>" class="button">Delete </a></td>

      </tr>
			<?php
			$i++;
			}
			?>

<td>      <a href="../Controller/WelcomePage.php" class="button">Back to panel</a>
</td>
</table>
 <?php
}
else
{
    echo "No result found";
    echo "<br>";
    echo "<br>";

?>    <a href="../View/Staff.php"class="button">Add Staff to System.</a><br><br>
<?php
}
?>



	<?php
		include '../Model/Footer.php';
	?>


 </body>
</html>
