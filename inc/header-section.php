    <header class="page-header inner-page-header header-basic" id="page-header">
      <div class="container-fluid">
        <nav class="menu-navbar">
          <div class="header-logo">
            <a class="logo-link" href="https://zconnect.ph">
              <img class="logo-img light-logo" loading="lazy" src="assets/images-zconnect/logo/zconnect-rect-trans-logo.png" alt="Z-Connect logo"/>
              <img class="logo-img dark-logo" loading="lazy" src="assets/images-zconnect/logo/zconnect-rect-trans-logo.png" alt="logo"/>
            </a>
          </div>
          <div class="links menu-wrapper">
            <?php
            $current_page = basename($_SERVER['PHP_SELF']);
            if (!function_exists('nav_active')) {
                function nav_active($page, $current) {
                    return ($page === $current) ? ' active' : '';
                }
            }
            ?>
            <ul class="list-js links-list">
              <li class="menu-item has-sub-menu"><a class="menu-link<?php echo nav_active('index.php', $current_page); ?>" href="index.php"><span class="nav-label">home</span><i class="fas"> </i></a></li>
              <li class="menu-item has-sub-menu"><a class="menu-link<?php echo nav_active('services.php', $current_page); ?>" href="services.php"><span class="nav-label">solutions</span><i class="fas"> </i></a></li>
              <li class="menu-item"><a class="menu-link<?php echo nav_active('about-us.php', $current_page); ?>" href="about-us.php"><span class="nav-label">about us</span></a></li>
              <li class="menu-item"><a class="menu-link<?php echo nav_active('contact-us.php', $current_page); ?>" href="contact-us.php"><span class="nav-label">contact us</span></a></li>
            </ul>
          </div>
          
          <div class="controls-box">
            <div class="control menu-toggler"><span></span><span></span><span></span></div>
          </div>
        </nav>
      </div>
    </header>