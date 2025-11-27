<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>KP SPICES TRADING COMPANY - Home Page</title>
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

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5">
    <div id="spices-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img class="w-100" src="img/spices.webp" height="600px" alt="Spices Variety" style="object-fit: cover;" />
          <div class="carousel-caption d-flex align-items-center">
            <div class="container">
              <div class="row align-items-center text-center justify-content-center">
                <div class="col-10 col-lg-7 text-center text-lg-start">
                  <h3 class="text-white text-uppercase text-center mb-3 animated slideInDown">
                    Fresh & Aromatic
                  </h3>
                  <h4 class="display-3 text-white mb-4 pb-3 animated text-center slideInDown">
                    Explore the finest spices from around the world.
                  </h4>
                  <div class="justify-content-center text-center">
                    <a href="#" class="btn border text-white border-pill text-secondary py-3 px-5 animated text-center slideInDown">
                      Discover More <i class="fa fa-arrow-right ms-3"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img class="w-100" src="img/spices_2.webp" height="600px" alt="Ground Spices" style="object-fit: cover;" />
          <div class="carousel-caption d-flex align-items-center">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-10 col-lg-7 text-center text-lg-start">
                  <h3 class="text-white text-center text-uppercase mb-3 animated slideInDown">
                    Handpicked Goodness
                  </h3>
                  <h4 class="display-3 text-white mb-4 pb-3 animated slideInDown">
                    Every pinch packed with authentic flavor and aroma.
                  </h4>
                  <div class="justify-content-center text-center">
                    <a href="#" class="btn border text-white border-pill text-secondary py-3 px-5 animated slideInDown">
                      View Products <i class="fa fa-arrow-right ms-3"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img class="w-100" src="img/spices_3.jpg" height="600px" alt="Whole Spices" style="object-fit: cover;" />
          <div class="carousel-caption d-flex align-items-center">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-10 col-lg-7 text-center text-lg-start">
                  <h3 class="text-white text-center text-uppercase mb-3 animated slideInDown">
                    Nature’s Best Flavors
                  </h3>
                  <h4 class="display-3 text-white mb-4 pb-3 animated slideInDown">
                    Pure, natural spices for every cuisine and kitchen.
                  </h4>
                  <div class="justify-content-center text-center">
                    <a href="#" class="btn border text-white border-pill text-secondary py-3 px-5 animated slideInDown">
                      Shop Now <i class="fa fa-arrow-right ms-3"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#spices-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#spices-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->

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

  <!-- Pro new Start -->
  <div class="container-xxl py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-primary text-uppercase">// Our Products //</h6>
        <h1 class="display-5 fw-bold">Premium Spices by KP Spices Trading Company</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
          Bringing the finest and most aromatic spices from India to the world. Quality, purity, and flavor in every grain.
        </p>
      </div>

      <div class="row justify-content-center g-4">

        <div class="col-lg-4 col-md-6">
          <div class="bg-white border shadow-sm rounded-4 p-4 h-100 text-center">
            <img src="img/Green-Cardamom-Premium-Quality.jpg" alt="Turmeric" class="img-fluid mb-3 rounded-3" style="height: 200px; object-fit: cover;">
            <h4 class="fw-bold mb-2">Green Cardamom Premium Quality</h4>
            <a href="Green_Cardamom.php" class="btn btn-outline-primary rounded-pill px-4 py-2">Details</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="bg-white border shadow-sm rounded-4 p-4 h-100 text-center">
            <img src="img/Gayatri-Green-cardamom.png" alt="Black Pepper" class="img-fluid mb-3 rounded-3" style="height: 200px; object-fit: cover;">
            <h4 class="fw-bold mb-2">Gayatri Green Cardamom</h4>
            <a href="Gayatri_Green_Cardamom.php" class="btn btn-outline-primary rounded-pill px-4 py-2">Details</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="bg-white border shadow-sm rounded-4 p-4 h-100 text-center">
            <img src="img/Dry-fruit.webp" alt="Cardamom" class="img-fluid mb-3 rounded-3" style="height: 200px; object-fit: cover;">
            <h4 class="fw-bold mb-2">Dry Fruits</h4>
            <a href="Dry_Fruits.php" class="btn btn-outline-primary rounded-pill px-4 py-2">Details</a>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="bg-white border shadow-sm rounded-4 p-4 h-100 text-center">
            <img src="img/Badii-elachi.webp" alt="Red Chilli" class="img-fluid mb-3 rounded-3" style="height: 200px; object-fit: cover;">
            <h4 class="fw-bold mb-2">Badli Elachi</h4>
            <a href="Badli_Elachi.php" class="btn btn-outline-primary rounded-pill px-4 py-2">Details</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="bg-white border shadow-sm rounded-4 p-4 h-100 text-center">
            <img src="img/8mm_Amritha( medium Green).webp" alt="Red Chilli" class="img-fluid mb-3 rounded-3" style="height: 200px; object-fit: cover;">
            <h4 class="fw-bold mb-2">8mm Amritha( medium Green)</h4>
            <a href="Amritha.php" class="btn btn-outline-primary rounded-pill px-4 py-2">Details</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- pro End -->

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

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-secondary text-uppercase">// Contact Us //</h6>
        <h1 class="mb-5">Contact For Any Query</h1>
      </div>
      <div class="row g-4">
        <div class="col-12">
          <div class="row gy-4">
            <div class="col-md-4">
              <div class="bg-light d-flex flex-column justify-content-center p-4">
                <h5 class="text-uppercase">// Customized Orders //</h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-light d-flex flex-column justify-content-center p-4">
                <h5 class="text-uppercase">// Product Inquiries //</h5>
              </div>
            </div>
            <div class="col-md-4">
              <div class="bg-light d-flex flex-column justify-content-center p-4">
                <h5 class="text-uppercase">// After-Sales Support //</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
          <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d62916.76822373418!2d77.04421646702431!3d9.740804125975142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sKP%20Building.%2C%20Chennattumattam%20junction%2C%20Kattappana!5e0!3m2!1sen!2sin!4v1759822285784!5m2!1sen!2sin" frameborder="0" style="min-height: 350px; border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-6">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <p class="mb-4">
              We'd love to hear from you! Whether you're looking for custom
              carpet solutions, product details, or need support, simply reach
              out through the form below. Our team will respond promptly to
              assist you.
            </p>
            <form onsubmit="sendToWhatsApp(); return false;">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message"
                      style="height: 100px"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn border border-pill  text-secondary w-100 py-3" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- footer -->
   <?php include('footer.php') ?>