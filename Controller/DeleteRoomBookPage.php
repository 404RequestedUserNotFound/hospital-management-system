<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <style media="screen">
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


    	#text{

    		height: 25px;
    		border-radius: 5px;
    		padding: 4px;
    		border: solid thin #aaa;
    		width: 100%;
    		font-family: "Lucida Console", "Courier New", monospace;

    	}

    </style>


    <?php
    include_once '../Model/Connection.php';
    $sql = "DELETE FROM hmsdatabase_roombook WHERE Id='" . @$_GET["id"] . "'";

    if (mysqli_query($con, $sql))
    {
        echo "Room reservation has been cancelled succesfully";

    }

    else
    {
        echo "Can not cancel room reservation: " . mysqli_error($con);
    }
    echo "<br>";
    echo "<br>";


    mysqli_close($con);



    ?>


    <a href="../View/RoomBook.php" class="button">Back to booked rooms</a>

  </body>
</html>
