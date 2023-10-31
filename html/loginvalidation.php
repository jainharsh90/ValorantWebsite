<?php
$username = $_POST['username'];
$password = $_POST['password'];
session_start();
$con = mysqli_connect("localhost","root","","valoweb");
$result  = mysqli_query($con, "SELECT * FROM login WHERE username='$username' && password='$password'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1)
{
    $_SESSION["name"] = $username;
	header("refresh:0;url=main.php");
    
}
else
{
	header("refresh:0;url=index.php");
}
?>
