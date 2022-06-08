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
<main class>
  <form action="../scripts/change_avatar_script.php" method="post">
    <div class="container">
      <h1>Change Avatar</h1>
      <hr>
      <img src="../images/<?php  echo $avatar;?>"  style="width: 200px">
      <p><select name="avatar"style="margin-top: 30px;" class="form-select form-select-lg form-select-border-width-2" aria-label=".form-select-lg example">
          <option disabled selected>Choose Avatar</option>
          <option value="avatar1.jpg">Avatar 1</option>
          <option value="avatar2.png">Avatar 2</option>
          <option value="avatar3.jpg">Avatar 3</option>

        </select>
      <p><button type="submit" class="btn btn-outline-secondary">Change</button>
      <p class="text-danger"><?php echo $message ?></p>
    </div>
  </form>
</main>

