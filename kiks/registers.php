<?php
include 'connect.php';
$conn = OpenCon();
if(isset($_POST['submit'])){
  echo  "i am here";
  $regId=$_POST['regId'];
  $Email=$_POST['Email'];
  $Name=$_POST['Name'];
  $Password=$_POST['Password'];
  $sql = "INSERT INTO registration (`regId`, `Email`,`Name`, `Password`) VALUES ('$regId','$Email', '$Name' , '$Password')";
  if($conn->query($sql)===true){
    header('location:logins.php');
  }else{
    echo "Connect fasiled".$conn->error;
  }
}
// $sql->execute();
?>
  <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="CSS/t.css">
    <script src="assets/js/t.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!--<title>PHPJabbers.com | Free Travel Agency Website Template</title>-->

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="regcss.css" />
</head>
<body>
  <!-- Header -->
  <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>TOURISM <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                 

        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="logins.php">Login</a></li>
                
                <li class="nav-item"><a class="nav-link" href="packages.html">packages</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item active">
                    <a class="nav-link" href="registers.php">Register
                      <span class="sr-only">(current)</span>
                    </a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.html">About Us</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="banner header-text">
<div class="testbox">
  <h1>Registration</h1>

  <form action="" method="post">
  <input type="text" name="regId" id="regId" placeholder="registerid" required/>
  <label id="icon" for="regId"><i class="icon-envelope "></i></label>
  <input type="text" name="Email" id="Email" placeholder="Email" required/>
  <label id="icon" for="Email"><i class="icon-user"></i></label>
  <input type="text" name="Name" id="Name" placeholder="Name" required/>
  <label id="icon" for="Name"><i class="icon-shield"></i></label>
  <input type="password" name="Password" id="Password" placeholder="Password" required/>
  <label id="icon" for="Password"><i class="icon-user "></i></label>
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   <input type="submit" name="submit" value="Register" class="button">
</form>
</div>
</body>
</html>