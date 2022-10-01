<?php
include 'connect.php';
session_start();

if(isset($_POST['adminlogin'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

   $result = " SELECT * FROM `admin` WHERE user_name = '$email' AND user_pass = '$password'";

    $run=mysqli_query($con,$result);  
  
    if(mysqli_num_rows($run))  
    {  
     
        echo "
        <script> 
            alert('Login Successful');
            window.open('../admin/adminHomePage.php','_self')
        </script>
        ";  

        $_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION.  

    }  
    else  
    {  
        echo "
        <script> 
            alert('Incorrect email or password');
            window.location.href = '../admin/adminLogin.php';
        </script>
        ";
    }  
}

?>