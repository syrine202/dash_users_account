<?php session_start();
include "config.php";
if(isset($_POST['submit'])){   
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from users where email='$email'";
$user=$cnx->query($sql)->fetch(PDO::FETCH_OBJ);
if(!empty($user)){
    if(password_verify($password,$user->password)){
    $_SESSION['email']=$email;
    $_SESSION['id']=$user->id_user;
    header("location: dashboard.php?message= logged in successfully !&type=success");
    exit();
}else{
    header("location: index.php?message= incorrect password !&type=error");
    exit();
}
}else{
    header("location: index.php?message= user not found!&type=error");
    exit(); 
}
}
?>