<!DOCTYPE html>
<html lang="en-PH">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Z-Connect - IT Solutions &amp; Business Services">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" href="assets/images-zconnect/logo/z-connect-circle-logo.png">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="css/vendors/animate.css">
        
        <!-- Swiper -->
        <link rel="stylesheet" href="css/vendors/swiper-bundle.min.css">
        
        <!-- flaticon -->
        <link rel="stylesheet" href="css/vendors/flaticon/flaticon.css">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="css/vendors/all.min.css">
        
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css">
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/vendors/jquery.fancybox.min.css">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">
        
        <!-- main-LTR -->
        <link rel="stylesheet" href="css/main-LTR.css">
        
        <!-- Sticky Solutions (Cipher-style scroll section) -->
        <link rel="stylesheet" href="css/sticky-solutions.css">
        
        <!-- Hero Scroll CSS -->
        <link rel="stylesheet" href="css/hero-scroll.css">
        <title>Z-Connect</title>
  </head>
  <body>
  
    <!--Start Page Header-->
    <?php include('inc/header-section.php');?>
    <!--End Page Header-->
    
    <!-- Start  Page hero (GSAP ScrollTrigger Version) -->
    <section class="hero-scroll-container" id="hero-scroll-container">
      
      <!-- Canvas for Falling Bits Background -->
      <canvas id="falling-bits-bg"></canvas>

      <div class="pin-wrap">
        <!-- Media Column: Stays fixed on the left -->
        <div class="media-column">
          <video autoplay muted loop playsinline class="hero-scroll-video">
            <source src="assets/images-zconnect/index-page/Optimized-Logo-Movie-v1.webm" type="video/webm">
            <source src="assets/images-zconnect/index-page/Optimized-Logo-Movie-v1.mp4" type="video/mp4">
          </video>
        </div>
        
        <!-- Text Column: Scrolls/fades on the right -->
        <div class="text-column">
          <div class="scroll-panels">
            <!-- Panel 1 -->
            <div class="scroll-panel panel-1">
              <div class="hero-text-area hero-text-box content-always-light">
                <div class="hero-social-icons mb-3">
                  <div class="sc-wrapper dir-row sc-flat">
                    <?php include('inc/social-media-links.php');?>
                  </div>
                </div>
                <img class="logo-img wow fadeInUp" data-wow-delay=".1s" src="assets/images-zconnect/logo/zconnect-rect-trans-logo.png" alt="Z-Connect logo" style="max-width: 250px; margin-bottom: 20px;" />
                <p class="slide-subtitle">A trusted partner in the field of IT that provides quality solutions, coupled with an excellent service.</p>
                <div class="cta-links-area">
                  <a class="btn-solid cta-link cta-link-primary" href="services.php">view solutions</a>
                  <a class="btn-outline cta-link" href="contact-us.php">Contact us</a>
                </div>
              </div>
            </div>
            
            <!-- Panel 2 -->
            <div class="scroll-panel panel-2">
              <div class="hero-text-area hero-text-box content-always-light">
                <div class="hero-social-icons mb-3">
                  <div class="sc-wrapper dir-row sc-flat">
                    <?php include('inc/social-media-links.php');?>
                  </div>
                </div>
                <div class="pre-title">Structured Cabling</div>
                <h1 class="slide-title">Network &amp; Structured Cabling <span class="featured-text">Experts </span><span class="design-element rounded-shape stripes"></span></h1>
                <p class="slide-subtitle">Many years of structured cabling experience from towers, offices and large data centers.</p>
                <div class="cta-links-area">
                  <a class="btn-solid cta-link cta-link-primary" href="contact-us.php">contact us</a>
                </div>
              </div>
            </div>

            <!-- Panel 3 -->
            <div class="scroll-panel panel-3">
              <div class="hero-text-area hero-text-box content-always-light">
                <div class="hero-social-icons mb-3">
                  <div class="sc-wrapper dir-row sc-flat">
                    <?php include('inc/social-media-links.php');?>
                  </div>
                </div>
                <h1 class="slide-title" style="font-size: 2.5rem;">Building Management Systems — <span class="featured-text">Seamless Managed Service </span><span class="design-element rounded-shape stripes"></span></h1>
                <p class="slide-subtitle">Z-Connect Inc. provides managed IT services that ensure systems run smoothly through proactive monitoring, maintenance, and responsive support. Their reliable service helps businesses minimize downtime, boost efficiency, and focus on growth.</p>
                <div class="cta-links-area">
                  <a class="btn-outline cta-link" href="contact-us.php">Contact us</a>
                </div>
              </div>
            </div>

            <!-- Panel 4 -->
            <div class="scroll-panel panel-4">
              <div class="hero-text-area hero-text-box content-always-light">
                <div class="hero-social-icons mb-3">
                  <div class="sc-wrapper dir-row sc-flat">
                    <?php include('inc/social-media-links.php');?>
                  </div>
                </div>
                <h1 class="slide-title mb-4">Ready to Join Our Team?</h1>
                <p class="slide-subtitle">Join our talented team and be part of innovative IT solutions and services.</p>
                <div class="cta-links-area">
                  <a class="btn-solid cta-link cta-link-primary" href="application.php">Apply Now</a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Partner Logos now outside text-column to fix mix-blend-mode stacking context -->
          <div class="panel-4-partners" style="position: absolute; bottom: 40px; width: 100%; z-index: 5; opacity: 0; pointer-events: none;">
            <div class="container">
              <div class="clients-logos d-flex align-items-center justify-content-around flex-wrap" style="gap: 30px;">
                    <div><img class="img-fluid logo" style="max-height: 70px; filter: brightness(0) invert(1); opacity: 0.8;" src="assets/images-zconnect/clients-logos/3D_Networks_400x300.png?v=2" alt=""></div>
                    <div><img class="img-fluid logo" style="max-height: 70px; filter: brightness(0) invert(1); opacity: 0.8;" src="assets/images-zconnect/clients-logos/360_degrees_nobg.png" alt=""></div>
                    <div><img class="img-fluid logo" style="max-height: 70px; filter: brightness(0) invert(1); opacity: 0.8;" src="assets/images-zconnect/clients-logos/abbe_400x300.png?v=2" alt=""></div>
                    <div><img class="img-fluid logo" style="max-height: 70px; filter: brightness(0) invert(1); opacity: 0.8;" src="assets/images-zconnect/clients-logos/acccenture_nobg.png" alt=""></div>
                    <div><img class="img-fluid logo" style="max-height: 70px; filter: brightness(0) invert(1); opacity: 0.8;" src="assets/images-zconnect/clients-logos/ampleon_nobg.png" alt=""></div>
                    <div><img class="img-fluid logo" style="max-height: 70px; filter: brightness(0) invert(1); opacity: 0.8;" src="assets/images-zconnect/clients-logos/Arellano_University_nobg.png" alt=""></div>
                    <div><img class="img-fluid logo" style="max-height: 70px; filter: brightness(0) invert(1); opacity: 0.8;" src="assets/images-zconnect/clients-logos/atos_400x300.png?v=2" alt=""></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End  Page hero-->
    
    <!-- Start Services Section-->
    <?php include('inc/services-section.php');?>

    <!-- Start About Section-->
    <?php include('inc/about-us-section.php');?>

    <!-- Start Certifications Section-->
    <?php include('inc/certifications-section.php');?>

    <!-- Start Events Section-->
    <?php include('inc/events-section.php');?>

    <!-- Start Awards Section-->
    <?php include('inc/awards-section.php');?>

    <!-- Start Take Action Section -->
    <?php include('inc/take-action-section.php');?>
    <!-- End take-action Section -->

    <!-- Start Apply-Now Section -->
    <?php include('inc/apply-now-section.php');?>
    <!-- End Apply-Now Section -->

    <!-- Start  page-footer Section-->
    <?php include("inc/footer-section.php");?>
    <!-- End  page-footer Section-->
  </body>
</html>