<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

    </head>
    <body>
  		<?php
  		include '../Model/Header.php';
  		?>
			<style type="text/css">

			#text{

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





			</style>
			<br>
			<br>
			<br>
			<br>
			<br>

    <center><a href="../Controller/Home.php"><img src="../Controller/Hospital.png" alt="Hospital Logo"  height="200px" width="200px" ></a></center>


		<div class="main">
		    <div class="content">

    <div style="float: left;">

			<td> <a href="../View/login.php" class="button">Click to Login</a></td>

    </div>


    <div style="float: right;">
			<td> <a href="../View/Registration.php" class="button">Click to Register</a></td>

    </div>


    <?php
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    ?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
		include '../Model/Footer.php';
		?>
	</div>
</div>


    </body>
</html>
