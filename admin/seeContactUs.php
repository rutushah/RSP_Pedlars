<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contact Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<?php
    session_start();
    include '../phpFiles/connect.php';
    include 'adminHeader.php'; //including header to homepage
?>

<style>
<?php include '../css/adminHome.css';
        include '../css/manageContactDetails.css';
?>
</style>
<h2 class = "text-center mt-3">See Contact Us Details</h2>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">User Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No</th>
                <th scope="col">Message</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                  <?php
                    include '../phpFiles/connect.php';
                    $user_id = 0;
                    $query = mysqli_query($con, "SELECT * FROM `contactus`");
                    while($row = mysqli_fetch_array($query)){
                        $user_id++;
                  ?>
                  <tr>
                      <td><?php echo $user_id;  ?></td>
                      <td><?php echo $row['fname'];?></td>
                      <td><?php echo $row['lname'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo  $row['telephone'];?></td>
                      <td><?php echo  $row['message'];?></td>
                     <td><a class = "btn btn-danger" href="../phpFiles/deleteContactDetails.php?del=<?php echo $row['id'] ?>"><i class='fas fa-trash'></i></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
                    
                        
                  </tr>
                  <?php  } ?>
            </tbody>
            </table>
            </div>
        </div>

        <?php 
            include '../footer.php';
        ?>
</body>
</html>