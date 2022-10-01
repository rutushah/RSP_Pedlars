<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPosts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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

<style>
<?php include 'css/home.css'; 
?>
</style>
<?php
 if($_SESSION['id'] == true)
 {
   $user_id = $_SESSION['id'];
  
 }
 $query = "SELECT firstName FROM `register`;"
?>
<h2 class = "text-center mt-3">Posts added by me</h2>
        <div class="card-body">
       
        <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">User Id</th>
                <th scope="col">Post Title</th>
                <th scope="col">Price</th>
                <th scope="col">Sold By</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                  <?php
                    include 'phpFiles/connect.php';
                    $count = 0;
                    // $query = mysqli_query($con, "SELECT id,postTitle,price,soldBy,uploadImage FROM `addpost`");
                    $query = mysqli_query($con, "SELECT * FROM `addpost` where userId = '$user_id'");

                    while($row = mysqli_fetch_array($query)){
                        $count++;
                  ?>
                  <tr>
                      <td><?php echo $count;  ?></td>
                      <td><?php
                    // echo $row['userId'];
                       echo 
                        $row['postTitle'];?></td>
                      <td><?php echo $row['price'];?></td>
                      <td><?php echo $row['soldBy'];?></td>
                      <td><?php echo $row['description'];?></td>
                      <td><?php echo "<img style='height:100px; width: 100px;' src = ".$row['uploadImage']. '>' ?></td>
                      <td><a class = "btn btn-danger" href = "editPost.php?editPost=<?php echo $row['id'] ?>"><i class='fas fa-edit'></i></a></td>  
                     <td><a class = "btn btn-danger" href="phpFiles/deletePosts.php?del=<?php echo $row['id'] ?>"><i class='fas fa-trash'></i></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
                  </tr>
                  <?php  }?>
            </tbody>
            </table>
            </div>
        </div>

</body>
</html>