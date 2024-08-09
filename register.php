<?php
include "config.php";
include "security.php ";
if(isset($_POST['signup'])){
$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];

$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="insert into users(name,email,password) values('$name','$email','$password')";
$cnx->exec($sql);
header("location:index.php?message=Your registration is successfully completed !&type=success");
}else{
    header("location:index.php");
}
?>