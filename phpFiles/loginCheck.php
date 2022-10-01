<?php
include 'connect.php';
session_start();
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

   $result = "SELECT * FROM `register` WHERE email = '$email' AND password = '$password' AND status = '0'";

    $run=mysqli_query($con,$result);  
    if(mysqli_num_rows($run))  
    {  
        $query_out =  mysqli_fetch_row($run);
        // echo $y = $x[1];
        // echo "
        // <script> 
        //     alert('Login Successful');
        //     window.location.href = '../homepage.php';
        // </script>
        // ";

        echo "
        <script> 
            alert('Login Successful');
            window.open('../homepage.php','_self')
        </script>
        ";

        $_SESSION['id']=$query_out[0];//here session is used and value of $user_email store in $_SESSION.  
    }  
    else  
    {  
        /**Code for debug when get error */
        // echo "  
        // <script>
        //     alert('Incorrect email or password');
        // ";
        // exit();

        echo "
        <script> 
            alert('Incorrect email or password');
            window.location.href = '../login.php';
        </script>
        ";
    }  
}

?>