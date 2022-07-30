<?php
include 'connection.php';
session_start();
$id=$_SESSION['login_id'];
$query=mysqli_query($conn,"select doctor_id from doctor_tb where login_id='$id'");
if(mysqli_num_rows($query)>0){
	$result=mysqli_fetch_assoc($query);
	$doctor_id=$result['doctor_id'];
	$qry=mysqli_query($conn,"select * from appoinment_tb where doctor_id='$doctor_id' and medicine='0'");
}
if(isset($_POST['submit']))
{
$name=$_POST['nm'];
$image=$_FILES['img']['name'];
if($image!=""){
	$filearray=pathinfo($_FILES['img']['name']);
	$file1=rand();
	$file_ext=$filearray["extension"];
	$filenew=$file1.".".$file_ext;
	move_uploaded_file($_FILES['img']['tmp_name'],"images/".$filenew);
}
$query=mysqli_query($conn,"update appoinment_tb set medicine='$filenew' where name='$name'");
header("location:doctor_index.php");
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
          <li><a class="nav-link scrollto active" href="logout.php">Logout</a></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!DOCTYPE html>

  <!-- ======= Hero Section ======= -->
  <h2></h2>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
    </div>
  </section><!-- End Hero -->


  
<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
        <section class="appoinment section">
  <div class="container">
    <div class="row">

      <div class="col-lg-6">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
           <h2 class="mb-2 title-color" style="color:white">Patient List</h2>
            
               <form id="#" class="appoinment-form" method="post" enctype="multipart/form-data" >
			 <!--  <div class="table-responsive"-->
                    <table class="table">
                      <thead>
					  
                        <tr>
                          <th>Name</th>
                          <th>Phn.No.</th>
                          <th>Message</th>
                          <th>Medicines</th>
						  <th>Action</th>
                        </tr>
                      </thead>
					  <tbody>
					  <?php
				   while($row=mysqli_fetch_assoc($query))
				   {
				   ?>
						  <tr>
							  <td><?php echo $row['name']; ?></td>
							  <td> <?php echo $row['phno']; ?></td>
							  <td><?php echo $row['message']; ?></td>
							  <td><input type="file" name="img" value="Prescription Upload"></td>
							  <td><button name="submit" class="btn btn-primary">Send</button></td>
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
</section>