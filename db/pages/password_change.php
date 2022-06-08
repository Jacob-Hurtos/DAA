<?php 
require_once('../scripts/connection.php');
include('../parts/header.php'); 
?>
<head><link rel="stylesheet" href="body.css"></head>
<style>
  .container {
    text-align: center;
  }
  h1 {
    padding-top: 50px;
  }
 
</style> 
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
<main>
<form action="../scripts/password_change_script.php" method="post">
        <div class="container">
          <h1>Password Change</h1>
          <hr>
            
          <p><label for="psw"><b>Old password</b></label>
          <br><input type="password" placeholder="Enter old password" name="psw" id="psw" required>

          <p><label for="new-psw"><b>New password</b></label>
          <br><input type="password" placeholder="Enter new password" name="new-psw" id="new-psw" required>

          <p><button type="submit" class="btn btn-secondary">Change</button>
          <p class="text-danger"><?php echo $message ?></p>
          <hr>
        </div>     
      </form>
</main>
<?php include('../parts/footer.php'); ?>