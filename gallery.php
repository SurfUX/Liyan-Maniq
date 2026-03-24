<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gallery - Grandoria Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Grandoria
  * Template URL: https://bootstrapmade.com/grandoria-bootstrap-hotel-template/
  * Updated: Jul 29 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="gallery-page">

<?php include 'header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Gallery</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Gallery</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="hotel-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All Photos</li>
            <li data-filter=".filter-rooms">Rooms</li>
            <li data-filter=".filter-amenities">Amenities</li>
            <li data-filter=".filter-dining">Dining</li>
            <li data-filter=".filter-exterior">Exterior</li>
          </ul><!-- End Hotel Gallery Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-rooms">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/room-1.webp" class="img-fluid" alt="Deluxe Room">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/room-1.webp" class="glightbox" title="Deluxe Room with City View">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-8 col-md-6 gallery-item isotope-item filter-amenities">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/amenities-1.webp" class="img-fluid" alt="Swimming Pool">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/amenities-1.webp" class="glightbox" title="Outdoor Swimming Pool with Deck">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-dining">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/dining-2.webp" class="img-fluid" alt="Restaurant">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/dining-2.webp" class="glightbox" title="Fine Dining Restaurant">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-rooms">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/room-5.webp" class="img-fluid" alt="Executive Suite">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/room-5.webp" class="glightbox" title="Executive Suite with Ocean View">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-8 col-md-6 gallery-item isotope-item filter-exterior">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/showcase-3.webp" class="img-fluid" alt="Hotel Exterior">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/showcase-3.webp" class="glightbox" title="Hotel Exterior at Sunset">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-amenities">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/amenities-3.webp" class="img-fluid" alt="Spa">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/amenities-3.webp" class="glightbox" title="Luxury Spa Treatment Room">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-dining">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/dining-4.webp" class="img-fluid" alt="Bar Lounge">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/dining-4.webp" class="glightbox" title="Rooftop Bar &amp; Lounge">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-rooms">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/room-8.webp" class="img-fluid" alt="Presidential Suite">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/room-8.webp" class="glightbox" title="Presidential Suite Living Area">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-amenities">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/amenities-7.webp" class="img-fluid" alt="Fitness Center">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/amenities-7.webp" class="glightbox" title="State-of-the-Art Fitness Center">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-exterior">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/location-2.webp" class="img-fluid" alt="Garden View">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/location-2.webp" class="glightbox" title="Hotel Gardens &amp; Landscaping">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-dining">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/dining-7.webp" class="img-fluid" alt="Breakfast Area">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/dining-7.webp" class="glightbox" title="Continental Breakfast Dining Area">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-4 col-md-6 gallery-item isotope-item filter-rooms">
              <div class="gallery-wrapper">
                <img src="assets/img/hotel/room-12.webp" class="img-fluid" alt="Junior Suite">
                <div class="gallery-overlay">
                  <a href="assets/img/hotel/room-12.webp" class="glightbox" title="Junior Suite with Modern Amenities">
                    <i class="bi bi-eye"></i>
                  </a>
                </div>
              </div>
            </div><!-- End Gallery Item -->

          </div><!-- End Hotel Gallery Items Container -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

  </main>

<?php include 'footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>