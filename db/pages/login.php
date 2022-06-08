<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
<meta charset="utf-8">
<title>Projekt Login</title>
<link rel="stylesheet" href="body.css">
    </head>

<body>
<?php include('../parts/header.php')?>
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
<div class="center">
    <h1>Login</h1>
    <main>  
  <form action="../scripts/login_script.php" method="post">
        <img src="avatar.jpg" alt="">
        <div class="txt_field">
        
            <input type="text" name="username" id="username" required>
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
        
            <input type="password" name="psw" id="psw" required>
            <span></span>
            <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class = "signup_link">
            Not a member? <a href="register.php">SignUp</a>
        </div>
        
    </form>
</main>
</div>
<?php include('../parts/footer.php')?>  
</body>


</html>

         