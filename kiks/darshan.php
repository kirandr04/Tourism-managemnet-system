<?php
include 'connect.php';
$conn = OpenCon();
if(isset($_POST['submit'])){
	$regId=$_POST['regId'];
	$Name=$_POST['Name'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$tempname=$_POST['tempname'];
	$bdate=$_POST['bdate'];
	$no_peop=$_POST['no_peop'];
	$sql = "INSERT INTO `temple_darshan`(`regId`, `Name`, `email`, `phno`, `tempname`, `bdate`, `no_peop`) VALUES ('$regId','$Name', '$email' , '$phno','$tempname','$bdate','$no_peop')";
	if($conn->query($sql)===true){
	  header('location:templdisp.php');
	}else{
	  echo "Connect fasiled".$conn->error;
	}
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="Tcss/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="Tcss/style.css" />

</head>

<body style="background-image: url('Timg/bg1.jpg');background-size:cover;">
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1 style="margin-top:15%;">BOOK YOUR TEMPLE FOR DARSHAN</h1>
						</div>
						<form method="post">
                        <div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">regId</span>
											<input required name="regId" class="form-control" type="text" placeholder="darshanId">
										</div>
									</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">NAME</span>
										<input name="Name"class="form-control" type="text" placeholder="Enter your name">
									</div>
								</div>
								
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">EMAIL</span>
										<input name="email"class="form-control" type="email" placeholder="Enter your email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">PHONE</span>
								<input name="phno" class="form-control" type="tel" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<span class="form-label">TEMPLE_NAME</span>
								<input  name="tempname"class="form-control" type="text" placeholder="Enter temple name">
								
							</div>
							<div class="form-group">
								<span class="form-label">BDATE</span>
								<input name="bdate" class="form-control" type="date" placeholder="date">
							</div>
						
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">NUMBER_OF_PEOPLE</span>
												<select name="no_peop"class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										
										<div class="form-btn">
								<button style="margin-left:33%;"name="submit"class="submit-btn">Ask to Book Now</button>
							</div>
										</div>
									</div>
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>


