<?php
include 'connect.php';
$conn = OpenCon();
$sql = "SELECT * FROM `booking`";
$result = $conn->query($sql);
// to update date of departure
if(isset($_POST['submit'])){
	$regId=$_POST['regId'];
	$Name=$_POST['Name'];
    $date=$_POST['date'];
    $sql1 = "UPDATE `booking` SET `ddeparture` = '$date' WHERE `Name`='$Name'";
    if($conn->query($sql1) === true){
        header('location:bookings.php');
        echo "successfull";
    } else{
        echo $conn->error;
    }
}
// to update date of arrival
if(isset($_POST['update'])){
	$regId=$_POST['regId'];
	$Name=$_POST['Name'];
    $date=$_POST['date'];
    $sql1 = "UPDATE `booking` SET `darrival` = '$date' WHERE `Name`='$Name'";
    if($conn->query($sql1) === true){
        header('location:bookings.php');
        echo "successfull";
    }else{
        echo $conn->error;
    }
}
// to delete booking
if(isset($_POST['delete'])){
	$Name=$_POST['Name'];
    $sql1 = "DELETE FROM `booking` WHERE `Name` ='$Name'";
    if($conn->query($sql1) === true){
        header('location:bookings.php');
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
    <link rel="icon" href="assets/images/ticon.ico">
    <link rel="stylesheet" href="CSS/t.css">
    <script src="assets/js/t.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>your-tourism </title>-->

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
            <th><b>Destination</b></th>
            <th><b>Date of Departure</b></th>
            <th><b>Date of Arrival</b></th>
            <th><b>No of Passangers</b></th>
            <th><b>Adults</b></th>
            <th><b>Children</b></th>
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
                <td><?php echo $row["destination"]; ?></td>
                <td><?php echo $row["ddeparture"]; ?></td>
                <td><?php echo $row["darrival"]; ?></td>
                <td><?php echo $row["no_pass"]; ?></td>
                <td><?php echo $row["adults"]; ?></td>
                <td><?php echo $row["children"];?></td></tr><?php
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
  <input type="text" name="Name" >
  <input type="date" name="date" ><br><br>
  <input type="submit" name="submit" value="Update Departure">
  <input type="submit" name="update" value="Update Arrival">
  <input type="submit" name="delete" value="Delete">
  </form>
        </div>