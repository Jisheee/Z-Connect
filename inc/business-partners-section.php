<section class="business-partners-section mega-section" id="business-partners" style="background-color: #ffffff; padding: 80px 0;">
  <div class="container main-content-wrapper">
    <div class="sec-heading centered text-center mb-5">
      <div class="content-area">
        <span class="pre-title wow fadeInUp" data-wow-delay=".2s" style="color: #0076de; font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">Our Connections</span>
        <h2 class="title wow fadeInUp" data-wow-delay=".4s" style="color: #212529; font-size: 2.5rem; font-weight: 700; margin-top: 10px;">Business Partners</h2>
        <p class="subtitle wow fadeInUp" data-wow-delay=".6s" style="color: #6c757d; max-width: 600px; margin: 15px auto 0;">We are proud to collaborate with top organizations and industry leaders.</p>
      </div>
    </div>
    
    <style>
      .bp-grid {
          display: grid;
          grid-template-columns: repeat(2, 1fr);
          gap: 15px;
          padding: 10px;
      }
      @media (min-width: 576px) {
          .bp-grid {
              grid-template-columns: repeat(3, 1fr);
          }
      }
      @media (min-width: 768px) {
          .bp-grid {
              grid-template-columns: repeat(4, 1fr);
          }
      }
      @media (min-width: 992px) {
          .bp-grid {
              grid-template-columns: repeat(6, 1fr); /* 6 columns x 5 rows = 30 logos per page */
          }
      }
      .bp-logo-card {
          background: #fff;
          border: 1px solid #e2e8f0;
          border-radius: 12px;
          padding: 15px;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 110px;
          transition: all 0.3s ease;
          position: relative;
          overflow: hidden;
      }
      .bp-logo-card:hover {
          box-shadow: 0 10px 25px rgba(0,0,0,0.08);
          transform: translateY(-5px);
          border-color: #0076de;
      }
      .bp-logo-card img {
          max-width: 100%;
          max-height: 100%;
          object-fit: contain;
          position: relative;
          z-index: 2;
      }
      .bp-logo-card .bp-alt-text {
          position: absolute;
          font-size: 0.8rem;
          color: #a0aec0;
          text-align: center;
          padding: 10px;
          z-index: 1;
      }
      .bp-swiper-pagination {
          margin-top: 40px;
          text-align: center;
          position: relative;
      }
      .bp-swiper-pagination .swiper-pagination-bullet {
          width: 12px;
          height: 12px;
          background: #cbd5e0;
          opacity: 1;
      }
      .bp-swiper-pagination .swiper-pagination-bullet-active {
          background: #0076de;
          width: 24px;
          border-radius: 6px;
      }
    </style>

    <div class="swiper business-partners-swiper wow fadeInUp" data-wow-delay=".8s">
      <div class="swiper-wrapper">
        
        <!-- Page 1 (First 30 Partners) -->
        <div class="swiper-slide">
          <div class="bp-grid">
            <?php
              $page1_partners = [
                ['name' => '3D Networks', 'path' => 'assets/images-zconnect/clients-logos/3D_Networks_400x300.png?v=2', 'url' => 'https://www.3dnetworks.com/'],
                ['name' => '360 degrees', 'path' => 'assets/images-zconnect/clients-logos/360_degrees_nobg.png', 'url' => 'https://360degrees.ph/'],
                ['name' => 'Abbe', 'path' => 'assets/images-zconnect/clients-logos/abbe_400x300.png?v=2', 'url' => 'https://www.abbe.com.ph/'],
                ['name' => 'Accenture', 'path' => 'assets/images-zconnect/clients-logos/acccenture_nobg.png', 'url' => 'https://www.accenture.com/ph-en'],
                ['name' => 'Ampleon', 'path' => 'assets/images-zconnect/clients-logos/ampleon_nobg.png', 'url' => 'https://www.ampleon.com/'],
                ['name' => 'Arellano University', 'path' => 'assets/images-zconnect/clients-logos/Arellano_University_nobg.png', 'url' => 'https://www.arellano.edu.ph/'],
                ['name' => 'Atos', 'path' => 'assets/images-zconnect/clients-logos/atos_400x300.png?v=2', 'url' => 'https://atos.net/en/'],
                ['name' => 'Batangas City', 'path' => 'assets/images/business-partners-logos/batangas seal.png', 'url' => 'https://www.batangascity.gov.ph/'],
                ['name' => 'Blue Chip Gaming & Leisure', 'path' => 'assets/images/business-partners-logos/blue chip.jpg', 'url' => 'https://www.bluechipgaming.ph/'],
                ['name' => 'bneXt', 'path' => 'assets/images/business-partners-logos/bnext.png', 'url' => 'https://www.bnext.tech/'],
                ['name' => 'Bangko Sentral ng Pilipinas', 'path' => 'assets/images/business-partners-logos/bangko sentral.webp', 'url' => 'https://www.bsp.gov.ph/'],
                ['name' => 'Canon', 'path' => 'assets/images/business-partners-logos/Canon-Logo.png', 'url' => 'https://ph.canon/'],
                ['name' => 'CW Global Partners', 'path' => 'assets/images/business-partners-logos/CWglobal.png', 'url' => 'https://cwglobalpartners.com/'],
                ['name' => 'cylix technologies', 'path' => 'assets/images/business-partners-logos/CylixTech.png', 'url' => 'https://cylix.ph/'],
                ['name' => 'Cypress', 'path' => 'assets/images/business-partners-logos/cypress.png', 'url' => 'https://www.cypress.com/'],
                ['name' => 'DCDC', 'path' => 'assets/images/business-partners-logos/dcdc.jpg', 'url' => 'https://www.dcdc.com.ph/'],
                ['name' => 'De La Salle Santiago Zobel', 'path' => 'assets/images/business-partners-logos/de la salle.webp', 'url' => 'https://www.dlszobel.edu.ph/'],
                ['name' => 'Department of Finance', 'path' => 'assets/images/business-partners-logos/Department_of_Finance.jpg', 'url' => 'https://www.dof.gov.ph/'],
                ['name' => 'Edsa Shangri-La Manila', 'path' => 'assets/images/business-partners-logos/Edsa-Shangri.jpg', 'url' => 'https://www.shangri-la.com/manila/edsashangrila/'],
                ['name' => 'Ford', 'path' => 'assets/images/business-partners-logos/Ford-Logo.png', 'url' => 'https://www.ford.com.ph/'],
                ['name' => 'Fujitsu', 'path' => 'assets/images/business-partners-logos/fujitsu.png', 'url' => 'https://www.fujitsu.com/ph/'],
                ['name' => 'GC Services', 'path' => 'assets/images/business-partners-logos/gcservices.png', 'url' => 'https://www.gcserv.com/'],
                ['name' => 'Globe', 'path' => 'assets/images/business-partners-logos/globe logo.png', 'url' => 'https://www.globe.com.ph/'],
                ['name' => 'Holcim', 'path' => 'assets/images/business-partners-logos/Holcim-logo.jpg', 'url' => 'https://www.holcim.ph/'],
                ['name' => 'INCENTER Technology', 'path' => 'assets/images/business-partners-logos/incenter-technology.webp', 'url' => 'https://incenter.tech/'],
                ['name' => 'iSolutions International', 'path' => 'assets/images/business-partners-logos/isolutions.png', 'url' => 'https://www.isolutions.ph/'],
                ['name' => 'JACA Const. & Mngt', 'path' => 'assets/images/business-partners-logos/jaca.jpg', 'url' => 'https://www.jaca.com.ph/'],
                ['name' => 'JFE', 'path' => 'assets/images/business-partners-logos/JFE.jpg', 'url' => 'https://www.jfe-steel.co.jp/en/'],
                ['name' => 'Jobstreet.com', 'path' => 'assets/images/business-partners-logos/jobstreet.png', 'url' => 'https://www.jobstreet.com.ph/'],
                ['name' => 'KMC', 'path' => 'assets/images/business-partners-logos/kmc.png', 'url' => 'https://kmc.solutions/']
              ];
              foreach ($page1_partners as $partner) {
                $link = isset($partner['url']) ? $partner['url'] : 'https://www.google.com/search?q=' . urlencode($partner['name'] . ' official website');
                echo '<div class="bp-logo-card" title="' . htmlspecialchars($partner['name']) . '">';
                echo '<a href="' . htmlspecialchars($link) . '" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%; text-decoration: none; cursor: pointer;">';
                echo '<img loading="lazy" src="' . $partner['path'] . '" alt="' . htmlspecialchars($partner['name']) . '" onerror="this.style.display=\'none\';">';
                echo '</a>';
                echo '</div>';
              }
            ?>
          </div>
        </div>

        <!-- Page 2 (Next 30 Partners) -->
        <div class="swiper-slide">
          <div class="bp-grid">
            <?php
              $page2_partners = [
                ['name' => 'Maynilad', 'path' => 'assets/images/business-partners-logos/maynilad.png', 'url' => 'https://www.mayniladwater.com.ph/'],
                ['name' => 'Meralco', 'path' => 'assets/images/business-partners-logos/Meralco Logo.webp', 'url' => 'https://www.meralco.com.ph/'],
                ['name' => 'nexperia', 'path' => 'assets/images/business-partners-logos/Nexperia Logo.webp', 'url' => 'https://www.nexperia.com/'],
                ['name' => 'nexus technologies', 'path' => 'assets/images/business-partners-logos/Nexus Tech Logo.png', 'url' => 'https://nexustech.com.ph/'],
                ['name' => 'NTT', 'path' => 'assets/images/business-partners-logos/Dimension Data NTT Logo.webp', 'url' => 'https://www.global.ntt/'],
                ['name' => 'Oxford Princess', 'path' => 'assets/images/business-partners-logos/Oxford Princesss Casino.jpg', 'url' => 'https://www.oxfordprincesscasino.com/'],
                ['name' => 'Pag-IBIG', 'path' => 'assets/images/business-partners-logos/Pag-IBIG Logo.webp', 'url' => 'https://www.pagibigfund.gov.ph/'],
                ['name' => 'PBCOM', 'path' => 'assets/images/business-partners-logos/PBCOM Logo.png', 'url' => 'https://www.pbcom.com.ph/'],
                ['name' => 'PKI', 'path' => 'assets/images/business-partners-logos/pki.jpg', 'url' => 'https://www.pki.co.jp/en/'],
                ['name' => 'PRO-FRIENDS', 'path' => 'assets/images/business-partners-logos/Pro Friends Logo.jpg', 'url' => 'https://www.profriends.com/'],
                ['name' => 'P.T. Cerna Corporation', 'path' => 'assets/images/business-partners-logos/PT Cerna Corporation Logo.jpeg', 'url' => 'https://www.ptcerna.com/'],
                ['name' => 'Republic Chemical Industries', 'path' => 'assets/images/business-partners-logos/rci.jpg', 'url' => 'https://www.pioneerph.com/'],
                ['name' => 'ROHM Semiconductor', 'path' => 'assets/images/business-partners-logos/Rohm Semiconductor Logo.png', 'url' => 'https://www.rohm.com/'],
                ['name' => 'San Miguel Foods', 'path' => 'assets/images/business-partners-logos/San Miguel Foods Logo.webp', 'url' => 'https://www.sanmiguel.com.ph/'],
                ['name' => 'SCTEX', 'path' => 'assets/images/business-partners-logos/SCTEX Logo.webp', 'url' => 'https://mptc.com.ph/'],
                ['name' => 'Skyway', 'path' => 'assets/images/business-partners-logos/Skyway Logo.png', 'url' => 'https://skywaysomco.com/'],
                ['name' => 'SLEX', 'path' => 'assets/images/business-partners-logos/South Luzon Expressway Logo.svg', 'url' => 'https://slex.ph/'],
                ['name' => 'SM', 'path' => 'assets/images/business-partners-logos/sm.png', 'url' => 'https://www.sminvestments.com/'],
                ['name' => 'Smart', 'path' => 'assets/images/business-partners-logos/smart.png', 'url' => 'https://smart.com.ph/'],
                ['name' => 'Summit Media', 'path' => 'assets/images/business-partners-logos/Summit Media Logo.webp', 'url' => 'https://www.summitmedia.com.ph/'],
                ['name' => 'SyCip Salazar Hernandez & Gatmaitan', 'path' => 'assets/images/business-partners-logos/Hernandez and Gaimaitan Logo.png', 'url' => 'https://www.syciplaw.com/'],
                ['name' => 'TaskUs', 'path' => 'assets/images/business-partners-logos/Taskus Logo.png', 'url' => 'https://www.taskus.com/'],
                ['name' => 'TK', 'path' => 'assets/images/business-partners-logos/Teekay Corporation.png', 'url' => 'https://www.teekay.com/'],
                ['name' => 'Teleperformance', 'path' => 'assets/images/business-partners-logos/Teleperformance Logo.png', 'url' => 'https://www.teleperformance.com/'],
                ['name' => 'Toyota Financial Services', 'path' => 'assets/images/business-partners-logos/Toyota Financial Services Logo.png', 'url' => 'https://www.toyotafinancial.ph/'],
                ['name' => 'TIM Total Information Management', 'path' => 'assets/images/business-partners-logos/Total Information Management Logo.jpg', 'url' => 'https://www.tim.com.ph/'],
                ['name' => 'UST', 'path' => 'assets/images/business-partners-logos/Seal_of_the_University_of_Santo_Tomas.svg', 'url' => 'https://www.ust.edu.ph/'],
                ['name' => 'Watsons', 'path' => 'assets/images/business-partners-logos/Watsons Logo.png', 'url' => 'https://www.watsons.com.ph/'],
                ['name' => 'WeServ Systems International', 'path' => 'assets/images/business-partners-logos/weserv.jpg', 'url' => 'https://www.weservsystems.com/'],
                ['name' => 'Western Digital', 'path' => 'assets/images/business-partners-logos/Western Digital Logo.png', 'url' => 'https://www.westerndigital.com/']
              ];

              foreach ($page2_partners as $partner) {
                $link = isset($partner['url']) ? $partner['url'] : 'https://www.google.com/search?q=' . urlencode($partner['name'] . ' official website');
                echo '<div class="bp-logo-card" title="' . htmlspecialchars($partner['name']) . '">';
                echo '<a href="' . htmlspecialchars($link) . '" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%; text-decoration: none; cursor: pointer;">';
                echo '<img loading="lazy" src="' . $partner['path'] . '" alt="' . htmlspecialchars($partner['name']) . '" onerror="this.style.display=\'none\';">';
                echo '</a>';
                echo '</div>';
              }
            ?>
          </div>
        </div>

      </div>
      
      <!-- Navigation Buttons -->
      <div class="bp-swiper-nav-container" style="display: flex; justify-content: center; gap: 15px; margin-top: 40px;">
        <div class="bp-swiper-prev" style="width: 45px; height: 45px; background: white; border: 1px solid #e0e0e0; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #0b5ed7; box-shadow: 0 2px 10px rgba(0,0,0,0.05); transition: all 0.3s ease;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
        </div>
        <div class="bp-swiper-next" style="width: 45px; height: 45px; background: white; border: 1px solid #e0e0e0; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #0b5ed7; box-shadow: 0 2px 10px rgba(0,0,0,0.05); transition: all 0.3s ease;">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Add hover effects and disabled state for buttons */
  .bp-swiper-prev:hover, .bp-swiper-next:hover {
    background: #f8f9fa !important;
    border-color: #0b5ed7 !important;
  }
  .bp-swiper-prev.swiper-button-disabled, .bp-swiper-next.swiper-button-disabled {
    opacity: 0.5;
    cursor: not-allowed !important;
    color: #aaa !important;
    border-color: #e0e0e0 !important;
  }
</style>

<script>
  // Initialize Swiper for this section specifically
  document.addEventListener("DOMContentLoaded", function() {
    if(typeof Swiper !== 'undefined') {
      new Swiper('.business-partners-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: false,
        navigation: {
          nextEl: '.bp-swiper-next',
          prevEl: '.bp-swiper-prev',
        },
        allowTouchMove: false, // Disables swiping as requested
        autoHeight: true
      });
    }
  });
</script>
