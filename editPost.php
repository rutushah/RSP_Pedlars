<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>


<body>
<?php
    include 'footer.php';
?>

<?php
    session_start();
    include 'phpFiles/connect.php'; 
    include 'header.php'; //including header to homepage
?>

<?php
 if($_SESSION['id'] == true)
 {
   $user_id = $_SESSION['id'];
  
 }
 $query = "SELECT firstName FROM `register`;"
?>

<style>
<?php include 'css/home.css'; 
?>
</style>


<h2 class = "font-weight-bold mt-5 text-center" id="login" >Edit Posts Here</h2>

<style>
    <?php include 'css/addPost.css'; ?>
</style>

<div class="container mt-3 mb-4">
    <div class="row justify-content-md-center">
        <div class="col-sm-6 border border-primary shadow rounded pt-2">
            <div class="col-sm-12">


            <?php 
                      $editPosts_id = $_GET['editPost'];
                    //  echo $editPosts_id;
                     $query = mysqli_query($con, "SELECT * FROM `addpost` WHERE id = '$editPosts_id'");
                     while($row = mysqli_fetch_array($query)){    
                      //  echo $row['postTitle'];
                       // die();
                   // }        
            ?>

                <form method="post" id="addPostForm"  action = "phpFiles/editPosts.php?editPost=<?php echo $editPosts_id ?>" onSubmit="return validation();" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold">Post Title </label>
                            <div class="col-sm-8">
                            <input type="text" name="postTitle" id="postTitle" class="form-control" value = "<?php echo $row['postTitle'];?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold">Price </label>
                            <div class="col-sm-8">
                            <input type="text" name="price" id="price" class="form-control" value = "<?php echo $row['price'];?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold">Description </label>
                            <div class="col-sm-8">
                            <textarea class="form-control" id="description" name="description" rows="3"><?php echo $row['description'];?></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold">Sold By </label>
                            <div class="col-sm-8">
                            <input type="text" name="soldBy" id="soldBy" class="form-control" value = "<?php echo $row['soldBy']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold">VIN Number </label>
                            <div class="col-sm-8">
                            <input type="text" name="vinNumber" id="vinNumber" class="form-control" value = "<?php echo $row['vinNumber']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold">Make </label>
                            <div class="col-sm-8">
                            <input type="text" name="make" id="make" class="form-control" value = "<?php echo $row['make']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold">Modal </label>
                            <div class="col-sm-8">
                            <input type="text" name="modal" id="modal" class="form-control" value = "<?php echo $row['purchaseYear']?>">
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold">Year Of Purchase </label>
                            <div class="col-sm-8">
                            <input type="text" name="yearOfPurchase" id="yearOfPurchase" class="form-control" value = "<?php echo $row['warrantyCars']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold">Warranty On Cars </label>
                            <div class="col-sm-8">
                            <input type="text" name="warrantyCars" id="warrantyCars" class="form-control" value = "<?php echo $row['carFaxReport']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 font-weight-bold label"> Upload Image </label>
                            <div class="col-sm-8">
                            <input type="file" id="uploadImage" name="uploadImage" src = "<?php  echo $row['uploadImage'];?>">
                            <?php echo "<img style='height:250px; width: 250px;' src = ".$row['uploadImage']. '>' ?>
                        </div>
                    </div>
                           
                <div class="form-group">
                  <input type="submit" name="editPost" value="Edit Post" class="btn btn-default col-sm-12">
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

         <?php
            }
        ?>

 

</body>
</html>