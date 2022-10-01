<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <?php 
        session_start();
        include 'phpFiles/connect.php'; 
        include 'header.php';
    ?>
<?php
 if($_SESSION['id'] == true)
 {
   $user_id = $_SESSION['id'];
  
 }
 $query = "SELECT firstName FROM `register`;"
?>
<h2 class = "font-weight-bold mt-5 text-center" id="editProfile" >
 Change Password
</h2>

<script>
  <?php include 'js/changePassword.js'; ?>
  </script>

<div class="container mt-2 mb-4 mt-5">
    <div class="row justify-content-md-center">
        <div class="col-sm-6 border border-primary shadow rounded pt-2">
            <div class="col-sm-12">
                <form method="post" id="singnupFrom" method="post" action = "phpFiles/changepass.php" onSubmit="return validation();">

                <div class="form-group">
                  <label class="font-weight-bold">Current Password</label>
                  <input type="password" name="password" id="currentPassword" class="form-control" placeholder="***********" > 
                  <em id="currentPass"></em>
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">New Password</label>
                  <input type="password" name="newpassword" id="newPassword" class="form-control" placeholder="***********" required > 
                  <em id="newPass"></em>
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">Confirm New Password</label>
                  <input type="password" name="confirmnewpassword" id="confirmNewPassword" class="form-control" placeholder="***********"  required>
                  <em id="cp"></em>
                </div>
              
                <div class="form-group">
                  <input type="submit" name="changePassword" value="Change password" class="btn btn-default col-sm-12">
                </div>
          
            </form>
        </div>
      </div>
    </div>
  </div>

    <?php 
        include 'footer.php'
    ?>

</body>
</html>