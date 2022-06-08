<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
<meta charset="utf-8">
<title>Projekt Register</title>
<link rel="stylesheet" href="styles.css">
    </head>

<body>
<?php include('../parts/header.php');?>
  <?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
    <main>
    
<div class="center">
    <h1>Register</h1>
    <form  action="../scripts/register_script.php" method="post">
        
        <div class="txt_field">
            <input type="text" name="username" id="username" required>
            <span></span>
            <label>Username</label>
        </div>

        <div class="txt_field">
            <input type="text" name="surname" id="surname" required>
            <span></span>
            <label>Surname</label>
        </div>

        <div class="txt_field">
            <input type="text" name="email" id="email" required>
            <span></span>
            <label>Email</label>
        </div>

        <div class="txt_field">
            <input type="password" name="psw" id="psw" required>
            <span></span>
            <label>Password</label>
            </div>

        <div class="txt_field">
            <input type="password" name="psw-repeat" id="psw-repeat" required>
            <span></span>
            <label>Confirm Password</label>
        </div>
        
        <input type="submit" value="Register">
        <div class = "signup_link">
            Already a member? <a href="login.php">SignIn</a>
        </div>
        
    </form>
</div>
</main>
</body>


</html>