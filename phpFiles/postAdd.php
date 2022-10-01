<?php
include 'connect.php';
$uid = $_GET['postId'];  
echo "Print id" , $uid;
if(isset($_POST['addPost'])){
    $postTitle = $_POST['postTitle'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $soldBy = $_POST['soldBy'];
    $vinNumber = $_POST['vinNumber'];
    $make = $_POST['make'];
    $modal = $_POST['modal'];
    $purchaseYear = $_POST['yearOfPurchase'];
    $carWarranty = $_POST['warrantyCars'];
    $carFaxReport = $_POST['carFaxReport'];
    $maintainanceReport = $_POST['maintenanceReport'];
    //$imageUpload = $_POST['uploadImage'];

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
   

    $query = "INSERT INTO `addpost`(`postTitle`, `price`, `description`, `soldBy`, `vinNumber`, `make`, `purchaseYear`,
     `warrantyCars`, `carFaxReport`, `maintenanceReport`, `uploadImage`, `userId`) VALUES  ('$postTitle','$price','$description','$soldBy',
     '$vinNumber','$make','$modal','$purchaseYear','$carWarranty','$maintainanceReport','$data_image', '$uid')";


      //die();
    if(mysqli_query($con, $query))
    {
        //

        echo "
        <script> 
            alert('Post Added Successfully');
            window.location.href = '../posts.php';
        </script>
        ";
    }
    else
    {
        // echo "<br> Error : " . $query . "<br>" . mysqli_error($con);
        echo "
        <script> 
            alert('Unable to add Post! Please Try Again!!');
            window.location.href = '../addPost.php';
        </script>
        ";
    }
}

?>