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

    <!-- Start contact-us-form -->
    <section class="contact-us-form-section mega-section">
      <div class="container">
        <div class="contact-layout">
          <div class="contact-copy">
            <h2 class="contact-title">Contact Us</h2>

            <div class="custom-form-area input-boxed">
              <form class="main-form" id="contact-us-form" action="php/send-mail.php" method="post">
                <span class="done-msg"></span>

                <div class="input-wrapper">
                  <input class="text-input" id="user-name" name="UserName" type="text" />
                  <label class="input-label" for="user-name">Name<span class="req">*</span></label>
                  <span class="b-border"></span>
                  <span class="error-msg"></span>
                </div>

                <div class="input-wrapper">
                  <input class="text-input" id="user-email" name="UserEmail" type="email" />
                  <label class="input-label" for="user-email">Email<span class="req">*</span></label>
                  <span class="b-border"></span>
                  <span class="error-msg"></span>
                </div>

                <div class="input-wrapper">
                  <input class="text-input" id="msg-subject" name="subject" type="text" />
                  <label class="input-label" for="msg-subject">Subject<span class="req">*</span></label>
                  <span class="b-border"></span>
                  <span class="error-msg"></span>
                </div>

                <div class="input-wrapper textarea-wrapper">
                  <textarea class="text-input" id="msg-text" name="message"></textarea>
                  <label class="input-label" for="msg-text">Message<span class="req">*</span></label>
                  <span class="b-border"></span>
                  <i></i>
                  <span class="error-msg"></span>
                </div>

                <div class="submit-wrapper">
                  <button class="btn-solid submit-btn" id="submit-btn" type="submit" name="UserSubmit">Submit</button>
                </div>
              </form>
            </div>
          </div>

          <div class="contact-info-block">
            <div class="meta-tabs">
              <span class="meta-item office-tooltip" data-tooltip="Block 32 Lot 2 Jasmin Street, T.S. Cruz Subdivision, Almanza II, Las Piñas City, 1751 Philippines.">Office Address</span>
              <span class="meta-divider"></span>
              <span class="meta-item email-tooltip" data-tooltip="HR: hr-ms@zconnect.ph&#10;SALES: web-sales@zconnect.ph">Email</span>
              <span class="meta-divider"></span>
              <span class="meta-item phone-tooltip" data-tooltip="PHONE: 8403-0774">Phone</span>
              <span class="meta-divider"></span>
              <span class="meta-item mail-tooltip" data-tooltip="MAIL: zconnect.ph">Mail</span>
            </div>

            <div class="map-card">
              <iframe
                src="https://www.google.com/maps?q=14.4222209,121.0212331&z=18&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen
                title="Z-Connect Office Location: 14.4222209, 121.0212331">
              </iframe>
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