<?php
 session_start();
 if(isset($_SESSION['username']))
{
     header("Location:../Controller/WelcomePage.php");
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>





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



<div class="main">
    <div class="content">

   <h2>Login Page</h2>
    </div>



    <center><a href="../Controller/Home.php"><img src="../Controller/Hospital.png" alt="Hospital Logo"  height="200px" width="200px" ></a></center>
<br><br>
<form name="myform"action="../Controller/LoginPage.php" method="post" onsubmit="return validateform(this)" novalidate>
<div class="name">
        <input type="text" name="username" id="text" placeholder="User Name" value="">
    </div><br>

    <div class="password">
        <input type="password" name="password"  id="text" placeholder="Password" value="" required>
    </div><br>




      <input   type="submit" name="submit"  class="button"value="Log In">
<br><br>

      <td> <a href="../View/Registration.php"  id="text" class="button">Create an Account</a></td>


</form>
</div>

<script src="../View/js/login.js"type="text/javascript"></script>

</body>
</html>
