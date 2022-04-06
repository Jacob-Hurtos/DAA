<?php 
session_start();
unset($_SESSION["username"]);
session_destroy();
header("Location: /pages/Login.php");