<?php

    include 'connect.php';
    error_reporting(0); // to avoid displaying of warning
    $editPosts_id = $_GET['editPost'];
   
if (isset($_POST['editPost'])) {
    $postTitle = $_POST['postTitle'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $soldBy = $_POST['soldBy'];
    $vinNumber = $_POST['vinNumber'];
    $make = $_POST['make'];
    $modal = $_POST['modal'];
    $purchaseYear = $_POST['yearOfPurchase'];
    $carWarranty = $_POST['warrantyCars'];

     //Upload Image Code
     $file_name = $_FILES['uploadImage']['name'];
     $single_image_name = $_FILES['uploadImage']['tmp_name'];
     $image_folder = "./images/";
     //$image_path = $image_folder.$file_name;
     //echo $image_path; 
     $parent = dirname(__DIR__);
     $image_path = $parent."//images//".$file_name;
     move_uploaded_file($single_image_name, $image_path);
     //die();
     $data_image = $image_folder.$file_name;

    // echo $file_name;
    // die();
     if($file_name == ""){
        $editPostQuery = "UPDATE `addpost` SET `postTitle`='$postTitle',`price`='$price',`description`='$description',
        `soldBy`='$soldBy',`vinNumber`='$vinNumber',`make`='$make',`purchaseYear`='$modal',`warrantyCars`='$purchaseYear',
        `carFaxReport`='$carWarranty' WHERE id = '$editPosts_id'";
     }else{

        $editPostQuery = "UPDATE `addpost` SET `postTitle`='$postTitle',`price`='$price',`description`='$description',
        `soldBy`='$soldBy',`vinNumber`='$vinNumber',`make`='$make',`purchaseYear`='$modal',`warrantyCars`='$purchaseYear',
        `carFaxReport`='$carWarranty',`uploadImage`='$data_image' WHERE id = '$editPosts_id'";
     }
}

    if(mysqli_query($con, $editPostQuery)){
        echo " 
        <script> 
            alert('Post Edited Successfully');
            window.location.href = '../posts.php';
        </script>
        ";
    }else {
        echo " 
        <script> 
            alert('Unable to edit the post! Please Try Again');
            window.location.href = '../posts.php';
        </script>
        ";
    }

?>