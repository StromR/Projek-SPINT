<?php
include("includes/database.php");
session_start();
if (!isset($_SESSION['id'])){
header('location:404.php');
}

$id = $_SESSION['id'];

$query=mysqli_query ($con,"SELECT * FROM user WHERE user_id ='$id'");
$row=mysqli_fetch_array($query);
$profile_picture=$row['profile_picture'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];
$birthday=$row['birthday'];
$gender=$row['gender'];
$game=$row['game'];
$mmr=$row['mmr'];
$email=$row['email'];
?>