<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?><html>
<head>
<title>Change Password</title>
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
"',UserPassword='" . $_POST['password'] .
"', UserConfirmPassword='" . $_POST['confirmpass'] .

"' WHERE id='" . $_POST['id'] . "'");
$message = "Password has been changed successfully";
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
<td> <a href="../Controller/WelcomePage.php?id=<?php echo $row["id"]; ?>" class="button">Back to panel</a></td>

<br>
<br>
      <legend>Credentials :</legend>
<br>
      <form action="../View/ChangePasswordPre.php" method="post" novalidate>

				<label for="userid"id="text">USER ID:</label>
			  <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
			  <input type="text" name="id"  value="<?php echo $row['id']; ?>">
			  <br><br>

      <label id="text">User Name :</label>
      <input id="text" type="text" name="uname" value="<?php echo $row['FirstName']; ?>">
      <br><br>

      <label id="text">Enter the new password :</label>
      <input id="text"type="Password" name="password">
      <br><br>

      <label id="text">Re-enter the new password  :</label>
      <input id="text"type="Password" name="confirmpass" >
      <br><br>




<br>
<input type="submit" name="submit" value="Save password"class="button">


</form>

<?php
include '../Model/Footer.php';
?>
</div>
</body>
</html>





















</div>

</body>
</html>
