<?php
      include 'connect.php';
      $editId=$_GET['edit'];  
        if (isset($_POST['editProfile'])) {
                    $first_name = $_POST['firstName'];
                    $last_name = $_POST['lastName'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];

                    $editProfile = "UPDATE `register` SET `firstName`='$first_name',`lastName`='$last_name',
                    `email`='$email',`phone`='$phone' WHERE id = '$editId'";
                }

                if(mysqli_query($con, $editProfile))
                {
                    echo " 
                    <script> 
                        alert('Profile Edited Successfully');
                        window.location.href = '../editProfile.php';
                    </script>
                    ";
                }
                else
                {
                    // echo "<br> Error : " . $query . "<br>" . mysqli_error($con);
                    echo "
                    
                    <script> 
                        alert('Unable to edit Profile! Please Try Again!!');
                        window.location.href = '../editProfile.php';
                    </script>
                    ";
                }
            
?>

