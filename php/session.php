<?php
include_once '../config.php';
$con=connect_db();
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($con,"select user_id,user_name from tb_users where user_name = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
// print_r($row);
$login_user = $row['user_name'];

if(!$login_user or $login_user=="" or !isset($_SESSION['login_user'])){
   $_SESSION['isloggedin'] = false;
   header("location: ../login.php");
   die();
}
else{
   $_SESSION['login_user'] = $login_user;
   $_SESSION['isloggedin'] = true;
}



?>