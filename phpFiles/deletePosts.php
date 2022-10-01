<?php

    include 'connect.php';
    error_reporting(0); // to avoid displaying of warning
    $delete_id=$_GET['del'];  
    $deleteQuery = "DELETE FROM `addpost` WHERE id = '$delete_id'";
    $data = mysqli_query($con,$deleteQuery);

    if($data){
        echo "
        <script> 
        alert('Record Deleted Successfully')
        window.location.href = '../posts.php';
        </script>
        ";

    }else {
        echo "
        <script> 
        alert('Failed to Delete Record')
        window.location.href = '../posts.php';
        </script>
        ";
    }
?>