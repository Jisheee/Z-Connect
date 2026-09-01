<!DOCTYPE html>
<html lang="en-PH">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Events - Z-Connect IT Solutions">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" href="assets/images-zconnect/logo/z-connect-circle-logo.png">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="css/vendors/animate.css">
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/vendors/jquery.fancybox.min.css">
        
        <!-- Swiper -->
        <link rel="stylesheet" href="css/vendors/swiper-bundle.min.css">
        
        <!-- flaticon -->
        <link rel="stylesheet" href="css/vendors/flaticon/flaticon.css">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="css/vendors/all.min.css">
        
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css">
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">
        
        <!-- main-LTR -->
        <link rel="stylesheet" href="css/main-LTR.css">
        <title>Z-Connect   |   Events</title>
  </head>
  <body>
    <!--Start Page Header-->
    <?php include('inc/header-section.php');?>
    <!--End Page Header-->
    
    <!-- Start inner Page hero-->
    <section class="page-hero inner-page-hero" id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">Events</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb wow fadeInUp" data-wow-delay=".4s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php"><i class="bi"></i>home</a></li>
              <li class="breadcrumb-item active">events</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->

    <!-- Start Events Section -->
    <section class="events-section padding-top padding-bottom" id="events">
      <div class="container">
        <div class="section-heading text-center mb-5">
          <h2 class="section-title wow fadeInUp" data-wow-delay=".2s">Events Gallery</h2>
        </div>

    <div class="events-slider position-relative">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="event-card text-center wow fadeInUp" data-wow-delay="0.2s" data-bs-toggle="modal" data-bs-target="#eventModal" data-modal-img="assets/events/Canon 600D (1087).JPG" data-modal-title="Z-Connect Industry Summit" style="cursor: pointer;">
              <div class="event-image position-relative overflow-hidden border-radius-8" style="height: 300px; border-radius: 8px;">
                <img class="img-fluid event-img" src="assets/events/Canon 600D (1087).JPG" alt="Event 1" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="overlay-hover-icon">
                  <i class="fas fa-search-plus"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="swiper-slide">
            <div class="event-card text-center wow fadeInUp" data-wow-delay="0.3s" data-bs-toggle="modal" data-bs-target="#eventModal" data-modal-img="assets/events/DSC01535.JPG" data-modal-title="Networking Night" style="cursor: pointer;">
              <div class="event-image position-relative overflow-hidden border-radius-8" style="height: 300px; border-radius: 8px;">
                <img class="img-fluid event-img" src="assets/events/DSC01535.JPG" alt="Event 2" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="overlay-hover-icon">
                  <i class="fas fa-search-plus"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="swiper-slide">
            <div class="event-card text-center wow fadeInUp" data-wow-delay="0.4s" data-bs-toggle="modal" data-bs-target="#eventModal" data-modal-img="assets/events/DSC02573.JPG" data-modal-title="Tech Workshop" style="cursor: pointer;">
              <div class="event-image position-relative overflow-hidden border-radius-8" style="height: 300px; border-radius: 8px;">
                <img class="img-fluid event-img" src="assets/events/DSC02573.JPG" alt="Event 3" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="overlay-hover-icon">
                  <i class="fas fa-search-plus"></i>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- Pagination -->
        <div class="swiper-pagination" style="position: relative; margin-top: 30px;"></div>
      </div>
    </div>
      </div>
    </section>

    <div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: fit-content;">
        <div class="modal-content" style="background: transparent; border: none; box-shadow: none;">
          <div class="modal-body p-0 position-relative">
            
            <button type="button" class="btn-close custom-close-x" data-bs-dismiss="modal" aria-label="Close"></button>
            
            <div class="modal-img-container">
              <img id="modalImage" src="" alt="Popup" class="img-fluid" style="max-height: 80vh; display: block;">
              <div class="modal-caption-bar">
                <p id="modalTitle" class="mb-0 text-white fw-bold"></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const eventModal = document.getElementById('eventModal');
        if (eventModal) {
          eventModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const imgSrc = button.getAttribute('data-modal-img');
            const imgTitle = button.getAttribute('data-modal-title');
            
            const modalImg = eventModal.querySelector('#modalImage');
            const modalTitle = eventModal.querySelector('#modalTitle');
            
            if (modalImg && imgSrc) modalImg.src = imgSrc;
            if (modalTitle && imgTitle) modalTitle.textContent = imgTitle;
          });
        }
      });
    </script>
    <!-- End Events Section -->

    <!-- Start Footer Section -->
    <?php include('inc/footer-section.php');?>
    <!-- End Footer Section -->

    <!-- Begin Script Files -->
    <!-- Begin jquery -->
    <script src="js/vendors/jquery-3.6.1.min.js"></script>
    <!-- End jquery -->
    <!-- Begin Bootstrap bundles JS -->
    <script src="js/vendors/bootstrap.bundle.min.js"></script>
    <!-- End Bootstrap bundles JS -->
    <!-- Begin Isotope -->
    <script src="js/vendors/isotope-min.js"></script>
    <!-- End Isotope -->
    <!-- Begin Swiper Slider -->
    <script src="js/vendors/swiper-bundle.min.js"></script>
    <!-- End Swiper Slider -->
    <!-- Begin Wow scroll animation -->
    <script src="js/vendors/wow.min.js"></script>
    <!-- End Wow scroll animation -->
    <!-- Begin Nice Select -->
    <!-- <script src="js/vendors/jquery.nice-select.js"></script> -->
    <!-- End Nice Select -->
    <!-- Begin Splitting JS -->
    <script src="js/vendors/splitting.min.js"></script>
    <!-- End Splitting JS -->
    <!-- Begin Odometer -->
    <!-- <script src="js/vendors/odometer.min.js"></script> -->
    <!-- End Odometer -->
    <!-- Begin CountUp -->
    <script src="js/vendors/jquery.countTo.js"></script>
    <!-- End CountUp -->
    <!-- Begin Appear -->
    <script src="js/vendors/appear.min.js"></script>
    <!-- End Appear -->
    <!-- Begin Vanilla-tilt -->
    <script src="js/vendors/vanilla-tilt.min.js"></script>
    <!-- End Vanilla-tilt -->
    <!-- Begin Fancybox -->
    <script src="js/vendors/jquery.fancybox.min.js"></script>
    <!-- End Fancybox -->
    <!-- Begin Particles -->
    <script src="js/vendors/particles.min.js"></script>
    <!-- End Particles -->
    <!-- Begin Ajax Chimp -->
    <script src="js/vendors/jquery.ajaxchimp.min.js"></script>
    <!-- End Ajax Chimp -->
    <!-- Begin Main custom JS -->
    <script src="js/main.js"></script>
    <!-- End Main custom JS -->
  </body>
</html>
