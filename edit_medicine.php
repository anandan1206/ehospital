<?php
include 'connection.php';
session_start();
$query=mysqli_query($conn,"select * from medicine_tb");

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.7.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">novenahospital@gmail.com</a>
        <i class="bi bi-phone"></i> 9061785898
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">NOVENA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="admin_index.php">home</a></li>
      
          <!-- <li><a class="nav-link scrollto" href="login.php">log in</a></li> -->
          
    
                <ul>
                </ul>
              </li>
        
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!DOCTYPE html>

  <!-- ======= Hero Section ======= -->
  <h2></h2>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1></h1>
      <h2></h2>
      <h1></h1>
      <h2></h2>
      <h1><break>
      <h2><break>
    </div>
  </section><!-- End Hero -->




<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg">
      <div class="container" style="position:absolute;left:0px;">

        <div class="section-title">
          <h2></h2>
          <p></p>
        </div>

        <form  method="post" role="form" class="php-email-form">
          <div class="row">



          <table>





                      <thead>
					  
                        <tr>
                        
                          <th>Name</th> 
                          <th>Batch</th> 
                          <th>Manufacture Date</th>
                          <th>Expiry Date</th> 
                          <th>Availability</th>
                          <th>Strip price</th> 
                          <th>Action</th> 
                          
                         
                        </tr>
                      </thead>
					  <tbody>
					  <?php
				   while($row=mysqli_fetch_assoc($query))
				   {
				   ?>
						  <tr>
							 
                              <td><input type="text" name="name" value="<?php echo $row['name']; ?>" ></td>
							  <td><input type="text"  value="<?php echo $row['batch_no']; ?>" ></td>
                              <td><input type="text"  value="<?php echo $row['mfdate']; ?>" ></td>
							  <td><input type="text" value="<?php echo $row['exdate']; ?>" ></td>
                              <td><input type="text" value="<?php echo $row['availability']; ?>" ></td>
                              <td><input type="text" value="<?php echo $row['strip_price']; ?>" ></td>
                              <td><a href="edit_med.php?edit_id=<?php echo $row['medicine_id']; ?>"class="btn btn-primary" name="edit">Edit</a></td>
                              <td><a href="delete_medicine.php?dlt_id=<?php echo $row['medicine_id']; ?>"class="btn btn-primary" name="edit">Delete</a></td>
						  </tr>
					  </tbody>
					  <?php
				   }
				   ?>
					</table>
			 
			</form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section><br><br>


