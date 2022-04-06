<?php
session_start();
require_once("Connection.php");


$isEmpty = false;
$hasPasswordCertainLength = true;
$hasPasswordAtLeastOneNumber = true;
$passwordAreSame = true;
$usernameOrEmailAlreadyExists = false;

$username =  $_POST['username'];
$email = $_POST['email'];
$password =  $_POST['password'];

    if(empty($_POST["email"])){
        $isEmpty = true;
    }
    if(empty($_POST["username"])){
        $isEmpty = true;
    }
    }
    if(empty($_POST["password"])){
        $isEmpty = true;
    }
    if(empty($_POST["password-repeat"])){
        $isEmpty = true;
    }
    if($isEmpty == true){

        echo "Something is missing ";
    }
    else{

    }
    if (!preg_match('@[0-9]@', $password)) {
        $hasPasswordAtLeastOneNumber = false;
        echo "Password must have at least one number " . "<br>";
    }
    if (($_POST["password"]) == ($_POST["password-repeat"]))
    {
        $passwordAreSame = true;
    }
    else{
        $passwordAreSame = false;
        echo "Passwords are not matching " . "<br>";

    }

    if(strlen($heslo) < 5){
        $hasPasswordCertainLength = false;
        echo "Password must have at least 5 characters " . "<br>";
    } 
    else{
        $hasPasswordCertainLength = true;
    }
    $sql_u = "SELECT * FROM users WHERE Meno='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($link, $sql_u);
    $res_e = mysqli_query($link, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        $usernameOrEmailAlreadyExists = true;
        echo "Username already exist " . "<br>";
    }	
    if(mysqli_num_rows($res_e) > 0){
        $usernameOrEmailAlreadyExists = true;
        echo "Email is already used " . "<br>"; 
    }


    if($isEmpty == false && $hasPasswordCertainLength == true && $hasPasswordAtLeastOneNumber == true && $passwordAreSame == true  && $usernameOrEmailAlreadyExists == false){
      
    

        $sqli = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

            if ($link->query($sql) === TRUE) {
                header('Location: login.php');
            }
            else {
                echo "Something is wrong " . "<br>";
            }
            
            $link->close();
            
        }
        else{
            echo "Something is wrong " . "<br>"; 

        }

      
        $conn ->query($sqli);



