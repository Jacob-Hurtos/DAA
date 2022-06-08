<?php
require_once('../parts/header.php');
require_once('../scripts/connection.php');


$sql="Delete from users where id=id";

if (!mysqli_query($conn,$sql))

echo "Record Deleted";
header("Refresh:1; url=../pages/register.php");

mysqli_close($conn);
