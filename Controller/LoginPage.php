<?php
 session_start();
 if(!isset($_SESSION['username']))
{
     header("Location:../View/Login.php");
 }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Action</title>
</head>
<body>





	<?php
	    // include('../View/Header.php');
	    session_start();
	?>





    <h1>Login Action</h1>
<?php
$flag=0;
if ($_SERVER['REQUEST_METHOD'] === "POST")

{
    function getdata($data)
    {
        $data=trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username=getdata(@$_POST['username']);
    $password=getdata(@$_POST['password']);


    if(empty($username))
    {
        header("Location:../View/Login.php?errormsg=User Name is required*");
        exit();
    }
    else if(empty($password))
    {
        header("Location:../View/Login.php?errormsg=Password is required*");
        exit();
    }

    else
    {
			 // header("Location:../View/Home.php");
        $flag=0;
        require("../Model/Connectionl.php");
        $connection=getConnection();
        $query="SELECT UserName, UserPassword FROM hmsdatabase WHERE UserName='$username' or UserPassword='$password'";
        $result = mysqli_query($connection,$query);
        $datacount=mysqli_num_rows($result);
        if($datacount>0)
        {
           while($row = mysqli_fetch_assoc($result))
           {
               if($row["UserName"]==$username and $row["UserPassword"]==$password )
               {
                      $_SESSION['username']=$username;
                      $_SESSION['password']=$password;
                       $flag=1;
                       break;
               }
               else
               {


                   $flag=0;
               }
           }
           if($flag==1)
           {
        //     //header("Location:../Controller/LoginData.php");
           header("Location:../Controller/WelcomePage.php");




           }
           else
           {
                // $_SESSION['errormsg']="Log in failed <br> Please Correct Username or Password";
echo "Username and password not matched";
							  // header("Location:../View/Login.php");
           }
        }
        else
        {
           echo "No data found";
        }
mysqli_close($connection);

    }

}
else
{
    die("Invalid Request");
}

?>

</body>
</html>
