<?php
function getConnection()
{
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "hms_database";
  $con=mysqli_connect($servername,$username,$password,"$dbname");

  if(!$con)
  {
     die('Could not Connect My Sql:' .mysql_error());
  }
  else {
    return $con;
  }
}


 ?>
