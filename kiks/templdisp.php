<?php
include 'connect.php';
$conn = OpenCon();
$sql = "SELECT * FROM `temple_darshan`";
$result = $conn->query($sql);
if(isset($_POST['submit'])){
	$regId=$_POST['regId'];
	$Name=$_POST['Name'];
    $bdate=$_POST['date'];
    $sql1 = "UPDATE `temple_darshan` SET `bdate` = '$bdate' WHERE `Name`='$Name'";
    if($conn->query($sql1) === true){
        header('location:templdisp.php');
        echo "successfull";
    } else{
        echo $conn->error;
    }
}
if(isset($_POST['delete'])){
	$Name=$_POST['Name'];
    $sql1 = "DELETE FROM `temple_darshan` WHERE `Name` ='$Name'";
    if($conn->query($sql1) === true){
        header('location:templdisp.php');
    }else{
        echo $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 


                <li class="nav-item"><a class="nav-link" href="logins.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="packages.html">packages</a></li>
                <li class="nav-item"><a class="nav-link" href="BOOK.php">BOOK</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="registers.php">Register</a></li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.html">About Us</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                      <a class="dropdown-item" href="DARSHAN_BOOKING.php">Darshan</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="banner header-text">
<section>
    <!--for demo wrap-->
    <h1>Update</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead style="font-size:3px;">
          <tr>
            <th><b>Register ID</b></th>
            <th><b>Name</b></th>
            <th><b>E-mail</b></th>
            <th><b>Phone number</b></th>
            <th><b>Temple Name</b></th>
            <th><b>Booking Date</b></th>
            <th><b>Number of people</b></th>
            
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><link href="t.css" rel="stylesheet" type="text/css" >
            <script src="t.js"></script>
            <?php
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {?>
                <tr><td><?php echo $row["regId"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phno"]; ?></td>
                <td><?php echo $row["tempname"]; ?></td>
                <td><?php echo $row["bdate"]; ?></td>
                <td><?php echo $row["no_peop"]; ?></td></tr><?php
                
              }
              echo "</table>";
          } else {
              echo "0 results";
          }?>
        </tbody>
      </table>
    </div>
  </section>
  <form action="" method="post">
  <!-- <input type="text" name="regId" > -->
  <input type="text" name="Name" >
  <input type="date" name="date" ><br><br>
  <input type="submit" name="submit" value="Update Date">
  <input type="submit" name="delete" value="Delete">
  </form>
        </div>