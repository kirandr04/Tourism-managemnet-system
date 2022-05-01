<?php
include 'connect.php';
$conn = OpenCon();
if(isset($_POST['submit'])){
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	
	$sql = "INSERT INTO `enquiry`( `name`, `email`, `phone`, `message`) VALUES ('$name', '$email' , '$phone','$message')";
    echo"connected";
    if($conn->query($sql)===true){
	  header('location:index.php');
	}else{
	  echo "Connect fasiled".$conn->error;
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

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title> your-tourism</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>your-tourism <em>website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="packages.html">Packages</a></li>

                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>

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

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>€3000 - €4000</h4>

              <h2>the detail of package</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div>
              <img src="assets/images/product-details-1-740x540.jpg" alt="" class="img-fluid wc-image">
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-1-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-2-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                  <img src="assets/images/product-3-370x270.jpg" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            </div>
          </div>

          <div class="col-md-6">
              <p class="lead">
                   <i class="fa fa-calendar"></i> Available: all time&nbsp;&nbsp; <i class="fa fa-cube"></i> as per booking &nbsp;&nbsp; <i class="fa fa-plane"></i> Transportation included
              </p>

              <br>

              <p><i class="fa fa-map-marker"></i>  <strong>tilak nagar, india</strong></p>

              <br>

              
              <p>. <br><br>
                Manali, Goa,Mumbai,Karnataka,Delhi,Pondycherry,Jaipur,Agra  etc are the places which makes a holiday trip a complete joyfull and memorable .
              </p>   

              <p>These places have all types of fecilities just like lodge,adventures,food,clothing , sjopping atc with best price. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat fugit sint reiciendis quas temporibus quam maxime nulla vitae consectetur perferendis, fugiat assumenda ex dicta molestias soluta est quo totam cum?</p> 
            
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="section-heading" style="border: 0">
          <h2>Availability &amp; Prices</h2>
        </div>

        <div class="table-responsive">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
               <thead>
                    <tr>
                         <th>Package</th>
                         <th>From</th>
                         <th>To</th>
                         <th>Price</th>
                    </tr>
               </thead>
               
               <tbody>
                    <tr>
                         <td></td>
                         <td>12-02-2021</td>
                         <td>31-02-2020</td>
                         <td>€ 300 per night</td>
                    </tr>

                    <tr>
                         <td></td>
                         <td>04-03-2021</td>
                         <td>12-03-2021</td>
                         <td>€ 400 per night</td>
                    </tr>

                    <tr>
                         <td></td>
                         <td>11-03-2021</td>
                         <td>20-03-2021</td>
                         <td>€ 500 per night</td>
                    </tr>
                    <tr>
                         <td></td>
                         <td>24-03-2021</td>
                         <td>31-03-2021</td>
                         <td>€ 4000 total price</td>
                    </tr>
               </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="section-heading" style="border: 0">
          <h2>Info</h2>
        </div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p class="pjVpProductPolicyTitle">
                              <strong>Check-in</strong>
                         </p>
                    </div>
                    <div class="col-md-10 col-sm-9">
                         <p>
                            ..at any emergency contact us ...
                         </p>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Check-out</strong>
                         </p>
                    </div>

                    <div class="col-md-10 col-sm-9">
                         <p>
                            as per the book tha check out will be done
                         </p>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Pets</strong>
                         </p>
                    </div>
                    <div class="col-md-10 col-sm-9">
                         <p>
                              Not allowed
                         </p>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Policies</strong>
                         </p>
                    </div>
                    <div class="col-md-10 col-sm-9">
                         <div>
                              <p>
                                   Your safety is our priority . <br>
                                    please follow the conditions and guidelines during the journey. <br>
                              </p>
                         </div>
                    </div>
               </div>
          </li>
          
          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Fees</strong>
                         </p>
                    </div>

                    <div class="col-md-10 col-sm-9">
                         <div>
                              <p>
                                the best packages are done acoording to the need. <br>
                          . <br>
                              </p>
                         </div>
                    </div>
               </div>
          </li>
     </ul>


      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="section-heading">
              <h2>Map</h2>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.037264636067!2d77.50952201404216!3d12.840868521209643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae155daf255555%3A0xb0d9badee8173f84!2sJyothy%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1611119862372!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

          </div>

          <div class="col-md-3">
            <div class="section-heading">
              <h2>Contact Details</h2>
            </div>
            
            <div class="left-content">
              <p>
                <span>Name</span>

                <br>

                <strong>John </strong>
              </p>

              <p>
                <span>Phone</span>

                <br>
                
                <strong>
                  <a href="tel:60-81-76-23">60817623</a>
                </strong>
              </p>

              <p>
                <span>Mobile phone</span>

                <br>
                
                <strong>
                  <a href="tel:805030776">805030776</a>
                </strong>
              </p>

              <p>
                <span>Email</span>

                <br>
                
                <strong>
                  <a href="mailId:your-tourism@gmail.com">john@carsales.com</a>
                </strong>
              </p>
            
              <div class="contact-form">
                <button type="submit" class="filled-button">Request Details</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="section-heading">
              <h2>Enquiry</h2>
            </div>

            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Name" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-6">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-6">
                    <fieldset>
                      <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" required="">
                    </fieldset>
                  </div>               
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Notes" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button  name="submit"type="submit" id="form-submit" class="filled-button">Send Request</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-3">
            <div class="section-heading">
              <h2>Booking terms</h2>
            </div>

            <p>the payment has to be done before the trip</p>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>>your-tourism.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
