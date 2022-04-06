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
  
  $r_u = mysqli_query($link, $sqlu);
$r_p = mysqli_query($link, $sqlp);
$r_idu = mysqli_query($link, $id1);
$r_idp = mysqli_query($link, $id2);

$idu = mysqli_fetch_assoc($r_idu);
$idp = mysqli_fetch_assoc($r_idp);

if (mysqli_num_rows($r_u) == 1 && mysqli_num_rows($r_p) > 0 && $idu == $idp) {
    echo "Login successful.";
    header('Location: index.php');
}
else{
    echo "ERROR";
}
 