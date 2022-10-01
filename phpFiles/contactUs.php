<?php

//include php connect file for connection to database
include 'connect.php';

if(isset($_POST['SendMessage'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$msg = $_POST['message'];

//Insert values to database in php
$query = "INSERT INTO `contactus`(`fname`, `lname`, `email`, `telephone`, `message`) 
VALUES ('$fname','$lname','$email','$telephone','$msg')";

if(mysqli_query($con, $query))
{
//   echo "Insert successfull";
    echo "
    <script> 
        alert('Message Sent Successfully');
        window.location.href = '../contactus.php';
    </script>
    ";
}
else
{
    // echo "<br> Error : " . $query . "<br>" . mysqli_error($con);
    echo "
    <script> 
        alert('Unable to send message! Please Try Again!!');
        window.location.href = '../contactus.php';
    </script>
    ";
}
}

?>