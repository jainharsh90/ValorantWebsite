<?php
$connection = mysqli_connect("localhost","root","","valoweb");
session_start();

  $email = $_POST['email_id'];
  $phone = $_POST['phone_no'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query1="select * from register WHERE username='$username' or email_id='$email'";
  $result1=mysqli_query($connection,$query1);
  $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
  if($row>1){
      echo '<script>alert("Username or Email is already registered")</script>';
      header("refresh:0;url=register.php");
  }
  else{
    $reg="insert into register(email_id,phone_no,username,password) values ('$email','$phone','$username','$password')";
    $log="insert into login(username,password) values ('$username','$password')";
    mysqli_query($connection,$reg);
    mysqli_query($connection,$log);
    header("refresh:0;url=index.php");
    
  }

