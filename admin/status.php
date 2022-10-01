<?php

include '../phpFiles/connect.php';

$id = $_GET['id'];

$status = $_GET['status']; 

$q = "update register set status=$status where id=$id";

// $q = "UPDATE register SET status=1 WHERE where id=1";

mysqli_query($con, $q);

header('location:view_users.php')

?>