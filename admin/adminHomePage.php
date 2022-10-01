<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
</head>
<body>

<?php
    session_start();
    include '../phpFiles/connect.php';
    include 'adminHeader.php'; //including header to homepage
?>

<style>
<?php include '../css/adminHome.css'; ?>
</style>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <button class="btn btn-default col px-md-3" type="submit" onClick = 'redirectToManageUsersPage()'>Manage Users</button>
                <button class="btn btn-default col px-md-3" type="submit" onClick = 'redirectToContactUs()'>See Contact us Details</button>
            </div>
        </div>
    </div>
<?php
include '../footer.php';  
?>

<script>
    <?php require_once("../js/adminHome.js");?>
</script>

</body>
</html>