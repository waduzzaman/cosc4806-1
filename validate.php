<?php

$valid_username="mahbub";
$valid_password="password";

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

if($username==$valid_username && $password==$valid_password){
  echo "Login Successfull";
} else
  echo "Login Failed";


?>
