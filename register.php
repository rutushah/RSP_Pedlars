<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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



<style>
<?php include 'css/register.css'; ?>
</style>

<!-- <h4 class = "font-weight-bold mt-5 text-center" id="register" >Are you keen to buy and sell cars?
  <br> Great, You are right place!
</h4> -->

<h2 class = "font-weight-bold mt-5 text-center" id="register" >
   Register here to enjoy your cars purchase journey with RSP Pedlars!!!
</h2>

<div class="container mt-2 mb-4 mt-5">
    <div class="row justify-content-md-center">
        <div class="col-sm-6 border border-primary shadow rounded pt-2">
            <div class="col-sm-12">
                <form method="post" id="singnupFrom"  action = "phpFiles/registerInsert.php" onSubmit="return validation();">

                <div class="form-group">
                  <label class="font-weight-bold">First Name </label>
                  <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter your First name">
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">Last Name </label>
                  <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Enter your Last name">
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">Email</label>
                  <div class="input-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter valid email">
                      <div class="input-group-append"><button type="button" class="btn btn-primary" onClick="return emailCheck();"><i class="fa fa-envelope"></i></button></div>
                  </div>
                </div> 
  
                <div class="form-group">
                  <label class="font-weight-bold">Phone Number</label>
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="(000)-(0000000)">
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="***********" required> 
                </div>

                <div class="form-group">
                  <label class="font-weight-bold">Confirm Password</label>
                  <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="***********" required>
                  <em id="cp"></em>
                </div>
<!--           
                <div class="form-group">
                  <label><input type="checkbox" name="condition" id="condition"> I agree with the <a href="javascript:;">Terms & Conditions</a> for Registration.</label>
                </div> -->
          
                <div class="form-group">
                  <input type="submit" name="submit" value="Sign Up" class="btn btn-default col-sm-12">
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" value="Already Registered? - Login" class="btn btn-default col-sm-12" onClick = "redirectToLoginPage()">
                </div>
          
            </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    <?php require_once("js/register.js");?>
</script>

<?php
  include 'footer.php'
?>

</body>
</html>