<?php
require_once('../scripts/connection.php');
include('../parts/header.php');
include('../scripts/profile_script.php');

?>
<head><link rel="stylesheet" href="body.css"></head>  
<main class="container">
    <h1 class="m-4 text-uppercase">Profile</h1>
   
   <?php foreach ($users as $user) : ?>

        <div class="row">
        <div class="col-4"><img src="../images/<?php echo $user["avatar"]?>" alt="<?php echo $user["username"]?>" style="width: 300px"></div>
        <div class="col-4 align-items-centre ">
        <div class="row ">
            <div class="col-3 list-group-item active">
            ID: 
            </div>
            <div class=" col list-group-item">
            <span class=""> <?php echo $user["id"] ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-3 list-group-item active">
            Name: 
            </div>
            <div class="col list-group-item">
            <?php echo $user["username"] ?></span>
            </div>
        </div>
        <div class="row ">
            <div class="col-3 list-group-item active">
            Surname:
            </div>
            <div class="col list-group-item">
            <span class=""> <?php echo $user["surname"] ?></span>
            </div>
        </div>
        <div class="row ">
            <div class="col-3 list-group-item active">
            Email:
            </div>
            <div class="col list-group-item">
            <span class=""> <?php echo $user["email"] ?></span>
            </div>
        </div>
            
         </div>

        <?php endforeach ?>

        <div class="chAvt_link">
        <a href="avatar_change.php" class="position-absolute top-50 end-50 btn btn-outline-dark">Change Avatar</a>
        <div class="chPsw_link">
        <a href="password_change.php" class="position-absolute top-75 end-50 btn btn-outline-dark">Change Password</a>
        <div class="delete_link">
        <a href="../scripts/delete_user_script.php">Delete User</a>
        
        
        
        
        </div>
</main>


<?php include('../parts/footer.php'); ?>