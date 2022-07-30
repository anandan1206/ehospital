<?php
include 'connection.php';
session_start();
$id=$_SESSION['login_id'];
if(isset($_POST['submit']))

{
    $name=$_POST['name'];
    $department=$_POST['department'];
    $date_of_leave=$_POST['date_of_leave'];
    $date_of_return=$_POST['date_of_return'];
    $reason_for_leav=$_POST['reason_for_leave'];
    $query=mysqli_query($conn,"select login_table.login_id,doctor_tb.doctor_id from login_table join doctor_tb where login_table.login_id='$id'");
    if(mysqli_num_rows($query)>0);
    {
      $result=mysqli_fetch_assoc($query);
      $doctor_id=$result['doctor_id'];

     mysqli_query($conn,"INSERT INTO leave_requst_tb(doctor_id,name,department,date_of_leave,date_of_return,reason_for_leave) values ('$id','$name','$department','$date_of_leave','$date_of_return','$reason_for_leave')");
    
     header("location:doctor_index.php");


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
          <li><a class="nav-link scrollto active" href="doctor_index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="logout.php">Log out</a></li>
          
         
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->



 <!-- ======= Appointment Section ======= -->
 <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
        
          <h1>Leave Request</h1>
        </div>

        <form  method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="name" name="name" required="" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Genaral medicine">General medicine</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Neurology">Neurology</option>
                <option value="ENT">ENT</option>
              </select>
              <div class="validate"></div>
            </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date_of_leave" required="" class="form-control datepicker" id="date_of_leave" placeholder="date_of_leave" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date_of_return"  required="" class="form-control datepicker" id="date_of_return" placeholder="date_of_return" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
              </select>
              <div class="validate"></div>

         
          <div class="form-group mt-3">
            <textarea class="form-control"  required="" name="reason_for_leave" rows="5" placeholder="reason_for_leave"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message"></div>
          </div>
          <div class="text-center"><button type="submit" name="submit">submit</button></div>
            
        </form>

      </div>
    </section><!-- End Appointment Section -->








