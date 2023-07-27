<?php 
session_start();
$se = $_SESSION['search'];
// header('location:login.php');
include "conn.php";
echo $se;
?>