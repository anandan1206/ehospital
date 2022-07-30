<?php
include 'connection.php';
session_start();
$id=$_SESSION['login_id'];
if(isset($_POST['submit']))
{
    $doctor=$_POST['doctor'];
    $name=$_POST['name'];
    $phno=$_POST['phone'];
    $message=$_POST['message'];
    $query=mysqli_query($conn,"select doctor_tb.doctor_id,patient_tb.patient_id from doctor_tb join patient_tb where doctor_tb.name='$doctor'and patient_tb.login_id='$id'");
    if(mysqli_num_rows($query)>0){
        $result=mysqli_fetch_assoc($query);
        $doctor_id=$result['doctor_id'];
        $patient_id=$result['patient_id'];
        mysqli_query($conn,"insert into complaint_tb (patient_id,doctor_id,name,phno,message) values ('$patient_id','$doctor_id','$name','$phno','$message')");
        header("location:patient_index.php");
}
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
          <li><a class="nav-link scrollto active" href="patient_index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="logout.php">Logout</a></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
    <form  method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="doctor" class="form-control" id="doctor" placeholder="doctor" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="name" class="form-control" name="name" id="name" placeholder="Your name" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="phone" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div><br><br>
             
              <button name="submit" class="btn btn-primary">Send</button>
</div>   
</div> 
                  </form>
    </div>
  </section><!-- End Hero -->
  