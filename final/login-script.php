<?php
require 'connection.php';

$username = $_POST['username'];
$hashedPassword = MD5($_POST["password"]);;

$sql= "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword' ";
$result = mysqli_query($conn, $sql);

if($result->num_rows ==1) {
  $row = mysqli_fetch_assoc($result);
  session_start();
  $_SESSION['username'] = $username;
  
 