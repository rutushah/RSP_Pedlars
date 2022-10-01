<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

   
  </head>

  <style>
    <?php include 'css/login.css';
    session_start();
        
    ?>
  </style>


<body>
<h2 class = "font-weight-bold mt-5 text-center" id="login" >Welcome To RSP Pedlars Login</h2>

<div class="container mt-5 mb-4">
    <div class="row justify-content-md-center">
        <div class="col-sm-6 border border-primary shadow rounded pt-2">
            <div class="col-sm-12">
              <form method="post" id="loginForm" action = "phpFiles/loginCheck.php" onSubmit="return validation();">

                <div class="form-group">
                  <label class="font-weight-bold">Email</label>
                  <div class="input-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter valid email">
                      <div class="input-group-append"><button type="button" class="btn btn-primary" onClick="return emailCheck();"><i class="fa fa-envelope"></i></button></div>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="font-weight-bold">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                </div>

                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-default col-sm-12">
                </div>

                <div class="form-group">
                  <input type="submit" name="register" value="New To RSP Pedlars? - Register Here" class="btn btn-default col-sm-12"
                    onClick = "redirectToRegistrationPage()">
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    <?php require_once("js/login.js");?>
</script>

<?php
  include 'footer.php'
?>

</body>
</html>