<?php

//Creating database connection

$con = mysqli_connect('localhost','root','','rsppedlar');
if(!$con){
    die('Could not connect : ' . mysql_error());
}
//echo 'Connection successful';


?>