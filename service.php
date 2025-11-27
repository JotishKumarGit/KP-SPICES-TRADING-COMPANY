
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>KP SPICES TRADING COMPANY </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <style>
    .owl-nav-custom {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-top: 20px;
    }

    .owl-nav-custom .nav-btn border border-pill {
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #0d6efd;
      background: #fff;
      color: #0d6efd;
      border-radius: 50%;
      font-size: 20px;
      cursor: pointer;
      transition: all .3s ease;
    }

    .owl-nav-custom .nav-btn border border-pill :hover {
      background: #0d6efd;
      color: #fff;
      box-shadow: 0 6px 18px rgba(13, 110, 253, .25);
      transform: scale(1.05);
    }

    .card-img-top {
      height: 250px;
      /* Set desired height */
      width: 100%;
      /* Full width of the card */
      object-fit: cover;
    }

    .card-img-top {
      height: 250px;
      /* uniform image height */
      width: 100%;
      /* full card width */
      object-fit: cover;
      /* crop without distortion */
    }

    /* Crop and fill image without distortion */
    .team-item img {
      height: 250px;
      /* set uniform height */
      width: 100%;
      /* full width of the container */
      object-fit: cover;
      /* crop image to fill without stretching */
    }

    /* Responsive text sizes */
    .custom-heading {
      font-size: 1.2rem;
      /* mobile default */
    }

    .custom-subheading {
      font-size: 1.6rem;
    }

    @media (min-width: 768px) {
      .custom-heading {
        font-size: 1.5rem;
        /* tablet */
      }

      .custom-subheading {
        font-size: 2rem;
      }
    }

    @media (min-width: 992px) {
      .custom-heading {
        font-size: 1.8rem;
        /* desktop */
      }

      .custom-subheading {
        font-size: 2.5rem;
      }
    }

    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card-body .btn border border-pill {
      margin-top: auto;
    }
  </style>

</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Header -->
<?php include('header.php') ?>

  <!-- page-header -->
  <div class="container-fluid page-header mb-5 py-5" style=" background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url(img/carpet.jpg) center center no-repeat;background-size: cover;">
    <div class="container">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Services
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- services sections  -->
  <div class="container-xxl py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-primary text-uppercase">// Our Services //</h6>
        <h1 class="display-5 fw-bold">What We Offer</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
          At KP Spices Trading Company, we go beyond just selling spices. We offer customized solutions for your business needs worldwide.
        </p>
      </div>

      <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-lg-4 col-md-6">
          <div class="bg-light rounded-4 p-4 h-100 shadow-sm text-center">
            <i class="fa fa-box-open fa-3x text-primary mb-3"></i>
            <h4 class="fw-bold mb-2">Custom Packaging</h4>
            <p class="text-muted">We offer personalized packaging to suit your brand and product requirements.</p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="bg-light rounded-4 p-4 h-100 shadow-sm text-center">
            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
            <h4 class="fw-bold mb-2">Global Delivery</h4>
            <p class="text-muted">Reliable international shipping to ensure timely delivery across the globe.</p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="bg-light rounded-4 p-4 h-100 shadow-sm text-center">
            <i class="fa fa-tags fa-3x text-primary mb-3"></i>
            <h4 class="fw-bold mb-2">Private Labeling</h4>
            <p class="text-muted">Launch your own brand with our white-labeling and custom branding services.</p>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-lg-4 col-md-6">
          <div class="bg-light rounded-4 p-4 h-100 shadow-sm text-center">
            <i class="fa fa-boxes fa-3x text-primary mb-3"></i>
            <h4 class="fw-bold mb-2">Bulk Orders</h4>
            <p class="text-muted">Wholesale spice supply for restaurants, retailers, and distributors.</p>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="col-lg-4 col-md-6">
          <div class="bg-light rounded-4 p-4 h-100 shadow-sm text-center">
            <i class="fa fa-seedling fa-3x text-primary mb-3"></i>
            <h4 class="fw-bold mb-2">Organic & Natural</h4>
            <p class="text-muted">We provide certified organic spice options grown with care and sustainability.</p>
          </div>
        </div>

        <!-- Service 6 -->
        <div class="col-lg-4 col-md-6">
          <div class="bg-light rounded-4 p-4 h-100 shadow-sm text-center">
            <i class="fa fa-check-circle fa-3x text-primary mb-3"></i>
            <h4 class="fw-bold mb-2">Quality Assurance</h4>
            <p class="text-muted">All products go through strict quality checks for purity, aroma, and freshness.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end services -->
  
  <!-- footer -->
   <?php include('footer.php') ?>