
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
      <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            About
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">

      <!-- Overlapping Images Section -->
      <div class="col-lg-6 col-md-12">
        <div class="img-overlap-container wow fadeIn" data-wow-delay="0.1s">
          <img src="img/spices_2.webp" alt="Assorted Spices" class="img-fluid rounded" />
        </div>
      </div>

      <!-- Compressed Text Section -->
      <div class="col-lg-6 col-md-12">
        <h6 class="text-secondary text-uppercase">// About Us //</h6>
        <h1 class="mb-4">
          <span class="text-secondary">KP SPICES TRADING COMPANY</span> — Authentic & Premium Spices
        </h1>
        <p class="mb-4">
          KP Spices Trading Company delivers fresh, natural spices sourced from trusted farms worldwide. We offer a wide variety of whole and ground spices, perfect for chefs, homes, and industries.
        </p>

        <div class="row g-4 mb-3 pb-3">
          <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
            <div class="d-flex flex-wrap flex-md-nowrap">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                <span class="fw-bold text-secondary">01</span>
              </div>
              <div class="ps-3 mt-2 mt-md-0">
                <h6>100% Natural & Fresh</h6>
                <span>Sourced directly for unmatched aroma and purity.</span>
              </div>
            </div>
          </div>

          <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
            <div class="d-flex flex-wrap flex-md-nowrap">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                <span class="fw-bold text-secondary">02</span>
              </div>
              <div class="ps-3 mt-2 mt-md-0">
                <h6>Variety & Custom Blends</h6>
                <span>Whole spices, powders, and blends tailored for every taste.</span>
              </div>
            </div>
          </div>

          <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
            <div class="d-flex flex-wrap flex-md-nowrap">
              <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                <span class="fw-bold text-secondary">03</span>
              </div>
              <div class="ps-3 mt-2 mt-md-0">
                <h6>Global Exporters</h6>
                <span>Reliable delivery with trusted customer service worldwide.</span>
              </div>
            </div>
          </div>
        </div>

        <a href="contact.php" class="btn border border-pill bg-primary text-white py-3 px-5 mt-3">
          Read More <i class="fa fa-arrow-right ms-3"></i>
        </a>
      </div>
    </div>
  </div>
</div>
  <!-- About End -->
  
  <!-- footer -->
   <?php include('footer.php') ?>