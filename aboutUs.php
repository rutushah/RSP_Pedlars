<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
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
<?php include 'css/aboutUs.css'; 
?>
</style>

<?php
    include 'footer.php'
?>

<h2 class = "font-weight-bold mt-5 text-center" id="AboutUs" >About us</h2>

<p class = "text-center mt-5 pl-5 pr-5">
    <pre class = "text-center mt-5 pl-5 pr-5">
        RSP Pedlar is an online platform to sell and buy cars. We are designing the Web portal to make it user-friendly for our users. 
        On our portal, users can sell their used, refurbished cars too. However, our web portal will try to collect the maximum information 
        from the seller so that the buyer gets the maximum exposure to the products. There are the following characteristics of our website.
    </pre>    
</p>

</body>
</html>