<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>
<body>
<?php
    session_start();
    include 'phpFiles/connect.php'; 
    include 'header.php'; //including header to homepage
?>
<?php
 if($_SESSION['id'] == true)
 {
   $user_id = $_SESSION['id'];
  
 }
 $query = "SELECT firstName FROM `register`;"
?>
<style>
<?php include 'css/home.css'; 
?>
</style>

<style>
<?php include 'css/contactus.css'; ?>
</style>
<h1 class="header text-center" id="header">Contact us<h1>
<h6 class="secondheader text-center" id="secondheader">We love questions and feedback and we are always happy to help!<br>
Here are some ways to contact us.</h6>

<div class="container mt-5 mb-4">
    <div class="row justify-content-md-center">
        <div class="col-sm-6 border border-primary shadow rounded pt-2">
            <div class="col-sm-12">
              <form method="post" id="loginForm" action = "phpFiles/contactUs.php" onSubmit="return validation();">

               <div class="form-group">
                  <label class="font-weight-bold">First Name</label>
                  <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name">
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">Last Name</label>
                  <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name">
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">Email</label>
                  <div class="input-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter valid email">
                      <div class="input-group-append"><button type="button" class="btn btn-primary" onClick="return emailCheck();"><i class="fa fa-envelope"></i></button></div>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="font-weight-bold">Telephone</label>
                  <input type="number" name="telephone" id="telephone" class="form-control" placeholder="Enter Phone Number">
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">Message</label>
                  <textarea class="form-control" rows="5" id="message" name="message" placeholder = "Enter Message "></textarea>
                </div>

                <div class="form-group">
                  <input type="submit" name="SendMessage" value="Submit" class="btn btn-default col-sm-12">
                </div>

              </form>
        </div>
      </div>
    </div>
  </div>

     
<script> 
  <?php include 'js/contactUs.js'; ?>
</script>

<?php
include 'footer.php';  
?>
</body>
</html>