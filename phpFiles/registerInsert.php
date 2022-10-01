<?php

include 'connect.php';
session_start();

if(isset($_POST['submit'])){

    echo "Inside if";
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    //here I am adding the query check weather the user is already registered or not.  
    $check_email_query="SELECT * FROM `register` WHERE email='$email'";  
    $run_query=mysqli_query($con,$check_email_query);  

    if(mysqli_num_rows($run_query)>0)  
    {  
        echo "
        <script>
            alert('Email $email is already exist in our database, Please try with another one!')
            window.location.href = '../register.php';
            </script>"; 
    } else {
    $query = "INSERT INTO `register`(`firstName`, `lastName`, `email`, `phone`, `password`, `cpassword`)
     VALUES ('$firstName','$lastName','$email','$phone','$password','$cpassword')";
     $_SESSION["firstName"] = $firstName;

    if(mysqli_query($con, $query))
    {
   //   echo "Insert successfull";
        echo "
        <script> 
            alert('Registration Successful');
            window.location.href = '../login.php';
        </script>
        ";
    }
    else
    {
        // echo "<br> Error : " . $query . "<br>" . mysqli_error($con);
        echo "
        <script> 
            alert('Unable to Register the user.Please Try Again!!!');
            window.location.href = '../register.php';
        </script>
        ";
    }
    }
 }
?>