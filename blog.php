
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
      <h1 class="display-3 text-white mb-3 animated slideInDown">Blog</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">
            Blog
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Blog Section -->
  <section class="blog-section py-5 bg-light">
    <div class="container">

      <h2 class="section-title text-center">KP Spices Trading Company – Premium Cardamom & Dry Fruits</h2>
      <p class="text-center mb-5">
        KP Spices Trading Company is committed to delivering the finest quality spices and dry fruits,
        sourced from trusted farmers to ensure freshness, purity, and unmatched flavor.
      </p>

      <div class="row g-4">

        <!-- Blog 1 -->
        <div class="col-md-4">
          <div class="card blog-card shadow-sm">
            <img src="img/Green-Cardamom-Premium-Quality.jpg" class="card-img-top" alt="Green Cardamom">
            <div class="card-body">
              <h5 class="card-title">Premium Green Cardamom</h5>
              <p class="card-text">
                Our premium-quality Green Cardamom is known for its bold aroma, vibrant color,
                and rich flavor—ideal for sweets, spice blends, and daily cooking.
              </p>
              <a href="#" class="btn btn-success btn-sm">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog 2 -->
        <div class="col-md-4">
          <div class="card blog-card shadow-sm">
            <img src="img/Gayatri-Green-cardamom.png" class="card-img-top" alt="Gayatri Green Cardamom">
            <div class="card-body">
              <h5 class="card-title">Gayatri Green Cardamom</h5>
              <p class="card-text">
                Gayatri Green Cardamom is a signature product known for its superior grade,
                handpicked for exceptional purity and strong aromatic essence.
              </p>
              <a href="#" class="btn btn-success btn-sm">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog 3 -->
        <div class="col-md-4">
          <div class="card blog-card shadow-sm">
            <img src="img/Badii-elachi.webp" class="card-img-top" alt="Badli Elachi">
            <div class="card-body">
              <h5 class="card-title">Badli Elachi</h5>
              <p class="card-text">
                Badli Elachi offers rich fragrance and bold seeds, making it a top choice
                for traditional recipes, sweets, and premium spice blends.
              </p>
              <a href="#" class="btn btn-success btn-sm">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog 4 -->
        <div class="col-md-4">
          <div class="card blog-card shadow-sm">
            <img src="img/Dry-fruit.webp" class="card-img-top" alt="Dry Fruits">
            <div class="card-body">
              <h5 class="card-title">Dry Fruits Collection</h5>
              <p class="card-text">
                Our premium dry fruits are sourced from the best farms to ensure high nutrition,
                irresistible taste, and long-lasting freshness.
              </p>
              <a href="#" class="btn btn-success btn-sm">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end blog sections -->
  
  <!-- footer -->
   <?php include('footer.php') ?>