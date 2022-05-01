<?php
include 'connect.php';
$conn = OpenCon();
if(isset($_POST['submit'])){
	$regId=$_POST['regId'];
	$Name=$_POST['Name'];
	$destination=$_POST['destination'];
	$ddeparture=$_POST['ddeparture'];
	$darrival=$_POST['darrival'];
	$no_pass=$_POST['no_pass'];
	$adults=$_POST['adults'];
	$children=$_POST['children'];
	$sql = "INSERT INTO `booking`(`regId`, `Name`, `destination`, `ddeparture`, `darrival`, `no_pass`, `adults`, `children`) VALUES ('$regId','$Name', '$destination' , '$ddeparture','$darrival','$no_pass','$adults','$children')";
	if($conn->query($sql)===true){
	  header('location:bookings.php');
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
	

	<title>Booking Form </title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="CSS/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="CSS/style.css" />

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>BOOK YOUR DESTINATION !!</h1>
							<p>BOOK YPUR PLACE
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form method="post">
								<div class="form-group">
									<span class="form-label">regId</span>
									<input class="form-control"name="regId" type="text" placeholder="regId ">
								</div>
								<div class="form-group">
									<span class="form-label">customer Name</span>
									<input class="form-control" name="Name"type="text" placeholder="Enter a customer_name ">
								</div>
								<div class="form-group">
									<span class="form-label"> Destination</span>
									<input class="form-control" name="destination" type="text" placeholder="Enter a destination ">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Date of Departure</span>
											<input class="form-control" name="ddeparture"type="date" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Date of Arrival</span>
											<input class="form-control"name="darrival" type="date" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">No_of_passengers</span>
											<select name="no_pass"class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<select name="adults" class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select name="children"class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
                                <input type="submit" name="submit" value="book" class="submit-btn">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>