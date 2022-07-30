<?php
include 'connection.php';
session_start();
$id=$_GET['edit_id'];
$query=mysqli_query($conn,"select * from medicine_tb where medicine_id='$id'");
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $batch=$_POST['batch'];
    $mfd=$_POST['mfd'];
    $exd=$_POST['exd'];
    $avail=$_POST['avail'];
    $price=$_POST['price'];
    mysqli_query($conn,"UPDATE medicine_tb set name='$name',batch_no='$batch',mfdate='$mfd',exdate='$exd',availability='$avail',strip_price='$price' where medicine_id='$id'");
    header("location:admin_index.php");
}
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
          <li><a class="nav-link scrollto active" href="index.php">logout</a></li>
          
    
              
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
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
      <div class="container">

        <div class="section-title">
          <h2></h2>
          <p></p>
        </div>

        <form  method="post" role="form" class="php-email-form">
          <div class="row">



          <table>
					  
                        <tr>
                        <?php
				   while($row=mysqli_fetch_assoc($query))
				   {
				   ?>
                       <tr>   <th>Name</th> <td><input type="text" name="name" value="<?php echo $row['name']; ?>" ></td></tr>
                       <tr>   <th>Batch</th> <td><input type="text" name="batch"  value="<?php echo $row['batch_no']; ?>" ></td></tr>
                       <tr>   <th>Manufacture Date</th><td><input type="text" name="mfd"  value="<?php echo $row['mfdate']; ?>" ></td></tr>
                      <tr>  <th>Expiry Date</th> <td><input type="text" name="exd" value="<?php echo $row['exdate']; ?>" ></td></tr>
                      <tr>    <th>Availability</th> <td><input type="text" name="avail" value="<?php echo $row['availability']; ?>" ></td></tr>
                     <tr>  <th>Strip price</th>   <td><input type="text" name="price" value="<?php echo $row['strip_price']; ?>" ></td></tr>
                        <tr>  <th colspan=2><button name="sub" class="btn btn-primary">Edit</th> 
                          </tr>
                      </thead>  
                      
                      
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
</section>


