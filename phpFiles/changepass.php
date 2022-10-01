<?php
    include 'connect.php';
    session_start(); 
    $user_id = $_SESSION['id'];

    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $confirmnewpassword = $_POST['confirmnewpassword'];

    $result = mysqli_query($con,"SELECT password FROM register WHERE id='$user_id'");

    while ($row = $result->fetch_assoc()) {
        $datatpass = $row['password'];
    }

    if(!$result)
    {
         echo "
            <script> 
                alert('The username you entered does not exist!!');
                window.location.href = '../changePassword.php';
         </script>";
    }
    else if($password!= $datatpass)
    {   
        echo "
            <script> 
                alert('Your current password does not match with your old password!!');
                window.location.href = '../changePassword.php';
             </script>";
    }else{
    if($newpassword==$confirmnewpassword){

        $sql=mysqli_query($con,"UPDATE register SET password='$newpassword' where id='$user_id'");
        $sql=mysqli_query($con,"UPDATE register SET cpassword='$newpassword' where id='$user_id'");
        if($sql)
        {
        echo "
            <script> 
                alert('Congratulations You have successfully changed your password!!');
                window.location.href = '../changePassword.php';
            </script>";
         } }
     //   else
    //     {
    // //    echo "Passwords do not match";
    //     echo "
    //         <script> 
    //             alert('Old Passwords do not match!!!');
    //             window.location.href = '../changePassword.php';
    //         </script>";  
    //     }

    // }else{
    //     echo "
    //     <script> 
    //         alert('Password and confirm Password do not match!!!');
    //         window.location.href = '../changePassword.php';
    //     </script>";  
    // }
}

    
?>