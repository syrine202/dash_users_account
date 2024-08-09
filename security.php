<?php session_start();
if(empty($_SESSION['email']) ||empty($_SESSION['id'])) {
  header("location:index.php");
  exit;
}
?>