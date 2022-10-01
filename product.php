<html>
    <head>
        <title>CarsDetailsDescription</title>

        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

<body>

<?php
    include 'phpFiles/connect.php';
    session_start();
    include 'header.php';
    ?>
 
<style>
    <?php include 'css/product.css'; ?>
</style>
<style>
<?php include 'css/home.css'; 
?>
</style>

<script>
<?php include 'js/product.js'; ?>
</script>

<?php 
    
    $id = (int)$_GET['id'];
  //  echo $editPosts_id;
   $query = mysqli_query($con, "SELECT * FROM addpost WHERE ID = '$id'");
   while($row = mysqli_fetch_array($query)){  
?>

<div class="container-fluid px-sm-1 py-5 mx-auto">
    <div class="row justify-content-center">
        <div class="d-flex">

            <div class="card">
                <div class="d-flex flex-column thumbnails">
                    <div id="f1" class="tb tb-active">
                        <img class="thumbnail-img fit-image" src= <?php echo $row['uploadImage']; ?>>
                    </div>
                    <div id="f2" class="tb">
                        <img class="thumbnail-img fit-image" src= <?php echo $row['uploadImage'];?>>
                    </div>
                    <div id="f3" class="tb">
                        <img class="thumbnail-img fit-image" src= <?php echo $row['uploadImage'];?>>
                    </div>
                    <div id="f4" class="tb">
                        <img class="thumbnail-img fit-image" src= <?php echo $row['uploadImage'];?>>
                    </div>
                </div>
                <fieldset id="f11" class="active">
                    <div class="product-pic">
                        <img class="pic0" src= <?php echo $row['uploadImage'];?>>
                    </div>
                </fieldset>
                <fieldset id="f21" class="">
                    <div class="product-pic">
                        <img class="pic0" src= <?php echo $row['uploadImage'];?>>
                    </div>
                </fieldset>
                <fieldset id="f31" class="">
                    <div class="product-pic">
                        <img class="pic0" src= <?php echo $row['uploadImage'];?>>
                    </div>
                </fieldset>
                <fieldset id="f41" class="">
                    <div class="product-pic">
                        <img class="pic0" src= <?php echo $row['uploadImage'];?>>
                    </div>
                </fieldset>
            </div> <!--end of card div-->
            <div class = "col-md-6">
        <div class="description mt-5">
                <?php echo $row['description']; ?>
            </div>
            <div>
            <a href="phpFiles/sendmail.php?userId=<?php echo $row['userId'];?>">
                <button class = "btn btn-default mt-5"> Message Seller </button>
            </a>
            </div>
        </div>

        </div>
    </div>
</div>

<?php  
   }
 ?>

</body>
</html>