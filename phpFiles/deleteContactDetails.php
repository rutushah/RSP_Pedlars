<?php

    include 'connect.php';
    error_reporting(0); // to avoid displaying of warning
    $delete_id=$_GET['del'];  
    $deleteQuery = "DELETE FROM `contactus` WHERE id = '$delete_id'";
    $data = mysqli_query($con,$deleteQuery);

    if($data){
        echo "
        <script> 
        alert('Record Deleted Successfully')
        window.location.href = '../admin/seeContactUs.php';
        </script>
        ";

    }else {
        echo "
        <script> 
        alert('Failed to Delete Record')
        window.location.href = '../admin/seeContactUs.php';
        </script>
        ";
    }
?>