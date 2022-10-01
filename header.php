<?php
  //session_start();
  //include 'phpFiles/connect.php';

 if($_SESSION['id'] == true)
 {
   $user_id = $_SESSION['id'];

 }
 $query = "SELECT * FROM register where id = '$user_id'";


 $run=mysqli_query($con,$query); 
 
 $result = mysqli_fetch_row($run);

 $type = $result[8];

 $fname = $result[1];
 $user_id = $result[0];

?>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
  <script src = "https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    <?php include 'css/header.css'; ?>
</style>

<script>
    <?php require_once("js/header.js");?>
</script>

<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">
  <img src="images/logo.png" class="rounded-circle" alt="Logo_RSP_Pedar" width="65" height="66"> </img>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mx-auto">
      <li class="nav-item active mx-auto">
        <a class="nav-link text-dark col px-md-5" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mx-auto">
        <a class="nav-link text-dark col px-md-5" href="aboutUs.php">About us</a>
      </li>
      <li class="nav-item mx-auto">
        <a class="nav-link text-dark col px-md-5" href="contactus.php">Contact us</a>
      </li>
      <!-- <li class="nav-item mx-auto">
        <a class="nav-link text-dark col px-md-5" href="#">Help</a>
      </li> -->

     
      <?php if($type == 0){?>
        <li>
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Welcome <?php echo $fname; ?></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="editProfile.php">Edit Profile</a>
              <a href="changePassword.php">Change Password</a>
              <!-- <a href="posts.php">View My Posts</a> -->
              <a href="phpFiles/logout.php">Logout</a>
          </div>
        </div>
      </li>

      <?php } ?>


      <?php if($type == 1){?>
        <li>
        <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">Welcome <?php echo $fname; ?></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="editProfile.php">Edit Profile</a>
              <a href="changePassword.php">Change Password</a>
              <a href="posts.php">View My Posts</a>
              <a href="phpFiles/logout.php">Logout</a>
          </div>
        </div>
      </li>
        
        <li class="nav-item mx-auto">
        <button class="btn btn-default col px-md-3" type="submit" onclick= "addPost()">Add Post</button>
        </li>
      <?php } ?>
      
    </ul>
 
  </div>
</nav>





<!--Adding js for header page-->
<script>
  //Function to redirect to addpost page on click of add post button
    function addPost(){  
      window.location = "addPost.php"
    } 
</script>

<!--End of js-->