<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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

<h2 class = "text-center mt-3">Purchase Cars</h2>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
            <tbody>
                  <?php
                    include 'phpFiles/connect.php';
                    // $user_id = 0;
                    // // $query = mysqli_query($con, "SELECT id,postTitle,price,soldBy,uploadImage FROM `addpost`");
                    // $query = mysqli_query($con, "SELECT id, price FROM `addpost`");

                    $sql = "SELECT id, price, uploadImage FROM addpost";
                    $result = $con->query($sql);


                    if ($result->num_rows > 0) {
                        // output data of each row
                        // while($row = $result->fetch_assoc()) {
                        //   echo "id: " . $row["id"]. "image:" .$row["uploadImage"]. "<br>";
                        foreach ($result as $value) {
                            
                            echo '<a href="product.php?id='.$value['id'].'"><div style="float: left;
                            width: 33.33%;
                            padding: 50px;
                            text-align: center;
                            font-size: 25px;
                            cursor: pointer;
                            color: black;"><img src="'.$value['uploadImage'].'" width="465" 
                            height="300" alt="news-report-juli19" title="" /></a><h4> $'.$value['price'].'</h4></div>';
                         }
                        
                        // }
                      } else {
                        echo "0 results";
                      }
                      $con->close();
                    // while($row = mysqli_fetch_array($query)){
                      //  $user_id++;
                  ?>
                  <tr>
                  
                  </tr>
                 
            </tbody>
            </table>
            </div>
        </div>



<script>
    <?php require_once("js/home.js");?>
</script>

<?php
include 'footer.php';  
?>


</body>
</html>