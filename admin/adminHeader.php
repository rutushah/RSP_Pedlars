<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
  <style>
    .btn-default
    {
      background-color: #512da8;
      color:#f8f8f8;
      /* border-color: #d1c9e7; */
    }

    .navbar-light{
      background-color: #d1c9e7;
      color:white;
    }

    </style>

</head>

<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">
  <img src="../images/logo.png" class="rounded-circle" alt="Logo_RSP_Pedar" width="65" height="66"> </img>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mx-auto">
      <li class="nav-item active mx-auto">
        <a class="nav-link text-dark col px-md-5" href="adminHomepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
   
      <!-- <li class="nav-item mx-auto">
        <p class="nav-link text-dark col px-md-5 text-right ">Welcome Admin  
      </p>
      </li>  -->

      <li class="nav-item mx-auto">
        <a class="nav-link text-dark col px-md-5" href="../phpFiles/adminLogout.php">Logout</a>
      </li>
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