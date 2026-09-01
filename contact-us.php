<!DOCTYPE html>
<html lang="en-PH">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Z-Connect for IT Solutions">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" href="assets/images-zconnect/logo/z-connect-circle-logo.png">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="css/vendors/animate.css">
        
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
        <title> Z-Connect   |   Contact Us</title>
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
          <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">Contact Us</h1>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php"><i class="bi bi-house icon "></i>home</a></li>
              <li class="breadcrumb-item active">contact us</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->

    <!-- Start contact-us -->
    <section class="contact-us mega-section" id="contact-us" style="position: relative; z-index: 1; overflow: hidden;">
      <div class="contact-bg-nodes left">
        <video autoplay muted loop playsinline>
          <source src="assets/images-zconnect/index-page/Optimized-Logo-Movie-v1.webm" type="video/webm">
          <source src="assets/images-zconnect/index-page/Optimized-Logo-Movie-v1.mp4" type="video/mp4">
        </video>
      </div>
      <div class="contact-bg-nodes right">
        <video autoplay muted loop playsinline>
          <source src="assets/images-zconnect/index-page/Optimized-Logo-Movie-v1.webm" type="video/webm">
          <source src="assets/images-zconnect/index-page/Optimized-Logo-Movie-v1.mp4" type="video/mp4">
        </video>
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          // Increase animation speed (1.0 is normal, 1.5 is 50% faster, 2.0 is 100% faster)
          const bgVideos = document.querySelectorAll('.contact-bg-nodes video');
          bgVideos.forEach(video => {
            video.playbackRate = 1.5; // Currently set to 150% speed
          });
        });
      </script>
      <div class="container">
        <section class="locations-section mega-section">
          <div class="sec-heading centered">
            <div class="content-area">
              <h2 class="title wow fadeInUp" data-wow-delay=".4s">our office in Manila, Philippines</h2>
            </div>
          </div>

          <div class="contact-info-panel">
            <div class="info-section">
              <div class="row">

                  <!-- Begin Contact Info Section -->
                  <!-- Left hand Div -->
                  <div class="col-12 col-lg-6 contact-info-container">
                    <div class="info-panel">
                      <h4 class="location-title">Las Piñas</h4>
                      <div class="line-on-side"></div>
                      <p class="location-address">Block 32 Lot 2 Jasmin Street,<br>T.S. Cruz Subdivision,<br>Almanza II,<br>Las Piñas City, 1751<br>Philippines.</p>
                      <div class="location-card"><i class="flaticon-email icon"></i>
                        <div class="card-content">
                          <h6 class="content-title">HR Email:</h6><div class="email" data-user="hr-ms" data-domain="zconnect.ph"></div>
                        </div>
                      </div>
                      <div class="location-card"><i class="flaticon-email icon"></i>
                        <div class="card-content">
                          <h6 class="content-title">Sales Email:</h6><div class="email" data-user="web-sales" data-domain="zconnect.ph"></div>
                        </div>
                      </div>
                      <div class="location-card"><i class="flaticon-phone-call icon"></i>
                        <div class="card-content">
                          <h6 class="content-title">Phone:</h6><div class="phone"><a class="phone link" href="tel:84030774">8403-0774</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                    
                  <!-- Right hand Div -->
                  <div class="col-12 col-lg-6">
                    <div class="map-box info-panel-map-side">
                      <div class="mapouter">
                        <iframe class="map-iframe" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d483.01047062100656!2d121.0210498!3d14.4223346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1863618e9ed%3A0xb41765a28c683954!2sZ-Connect%20Inc.!5e0!3m2!1sen!2sph!4v1738547926601!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>
                  </div>
                  <!-- End Contact Info Section -->

              </div>
            </div>
          </section>
      </div>
    </section>
    <!-- End contact-us -->

    <!-- Start contact-us-form -->
    <section class="contact-us-form-section mega-section has-dark-bg" style="padding: 60px 0;">
      <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="contact-form-panel">
                <div class="sec-heading centered">
                  <div class="content-area">
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">Have any questions? Let's answer them</h2>
                  </div>
                </div>
                <div class="contact-form-inputs wow fadeInUp" data-wow-delay=".6s">
                  <div class="custom-form-area input-boxed"> 
                    <!--Form To have user messages-->
                    <form class="main-form" id="contact-us-form" action="php/send-mail.php" method="post"><span class="done-msg"></span>
                      <div class="row">
                        <div class="col-12 col-lg-6">
                          <div class="input-wrapper">
                            <input class="text-input" id="user-name" name="UserName" type="text" style="color: white; border-color: rgba(255,255,255,0.3);"/>
                            <label class="input-label" for="user-name" style="color: white;">Name<span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="input-wrapper">
                            <input class="text-input" id="user-email" name="UserEmail" type="email" style="color: white; border-color: rgba(255,255,255,0.3);"/>
                            <label class="input-label" for="user-email" style="color: white;">E-mail<span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="input-wrapper">
                            <input class="text-input" id="msg-subject" name="subject" type="text" style="color: white; border-color: rgba(255,255,255,0.3);"/>
                            <label class="input-label" for="msg-subject" style="color: white;">Subject<span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 ">
                          <div class="input-wrapper">
                            <textarea class=" text-input" id="msg-text" name="message" style="color: white; border-color: rgba(255,255,255,0.3);"></textarea>
                            <label class="input-label" for="msg-text" style="color: white;">your message <span class="req">*</span></label><span class="b-border"></span><i></i><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 submit-wrapper">
                          <button class="btn-solid" id="submit-btn" type="submit" name="UserSubmit">Send your message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- End contact-us-form -->

    <!-- Start Application Section -->
    <?php include('inc/apply-now-section.php');?>
    <!-- End Application Section -->

    <!-- Start  page-footer Section-->
    <?php include("inc/footer-section.php");?>
    <!-- End  page-footer Section-->
    
  </body>
</html>