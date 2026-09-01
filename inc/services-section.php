    <!-- Start Sticky Solutions Section (Cipher Digital-style) -->
    <section class="sticky-solutions" id="services">

      <!-- Decorative grid lines -->
      <div class="sticky-solutions__grid-lines">
        <span class="sticky-solutions__grid-dot sticky-solutions__grid-dot--tl"></span>
        <span class="sticky-solutions__grid-dot sticky-solutions__grid-dot--bl"></span>
      </div>

      <div class="sticky-solutions__container">

        <!-- Sticky section title (pinned top-left) -->
        <div class="sticky-solutions__rail">
          <div class="sticky-solutions__rail-sticky">
            <h1 class="sticky-solutions__upper">Solutions We Provide</h1>
          </div>
        </div>

        <div class="folder-solutions" aria-label="Solutions we provide">
          <div class="folder-solutions__tabs" role="tablist" aria-label="Services">
            <button class="folder-solutions__tab is-active" type="button" role="tab" aria-selected="true" aria-controls="folder-panel-0" id="folder-tab-0" data-folder-index="0"><span>01</span><strong>Network</strong></button>
            <button class="folder-solutions__tab" type="button" role="tab" aria-selected="false" aria-controls="folder-panel-1" id="folder-tab-1" data-folder-index="1"><span>02</span><strong>Data Center</strong></button>
            <button class="folder-solutions__tab" type="button" role="tab" aria-selected="false" aria-controls="folder-panel-2" id="folder-tab-2" data-folder-index="2"><span>03</span><strong>Ancillary</strong></button>
            <button class="folder-solutions__tab" type="button" role="tab" aria-selected="false" aria-controls="folder-panel-3" id="folder-tab-3" data-folder-index="3"><span>04</span><strong>Building</strong></button>
            <button class="folder-solutions__tab" type="button" role="tab" aria-selected="false" aria-controls="folder-panel-4" id="folder-tab-4" data-folder-index="4"><span>05</span><strong>Managed IT</strong></button>
            <button class="folder-solutions__tab" type="button" role="tab" aria-selected="false" aria-controls="folder-panel-5" id="folder-tab-5" data-folder-index="5"><span>06</span><strong>Assessment</strong></button>
          </div>
          <div class="folder-solutions__content">
            <article class="folder-solutions__panel is-active" role="tabpanel" id="folder-panel-0" aria-labelledby="folder-tab-0" data-folder-panel="0">
              <div class="folder-solutions__image-wrap"><img src="assets/images-zconnect/services/Networking-and-Structured-Cabling.jpg" alt="Networking and Structured Cabling" /></div>
              <div class="folder-solutions__copy"><span class="folder-solutions__eyebrow">01 / Infrastructure</span><h2>Networking &amp; Structured Cabling System</h2><p>High-bandwidth infrastructure supporting business growth. Scalable IT solutions for enterprise networks and data centers.</p><p>Future-proof cabling designed for simple expansion, reliable performance, and quick deployment of new services.</p><div class="folder-solutions__partners" data-folder-partners="0"></div></div>
            </article>
            <article class="folder-solutions__panel" role="tabpanel" id="folder-panel-1" aria-labelledby="folder-tab-1" data-folder-panel="1" hidden>
              <div class="folder-solutions__image-wrap"><img src="assets/images-zconnect/services/Data-Center.jpg" alt="Data Center Solutions" loading="lazy" /></div>
              <div class="folder-solutions__copy"><span class="folder-solutions__eyebrow">02 / Reliability</span><h2>Data Center</h2><p>Optimized facilities meeting operational and capacity requirements with expert solutions for power, cooling, consolidation, and compliance.</p><p>Reliable, scalable environments engineered for peak performance and long-term flexibility.</p><div class="folder-solutions__partners" data-folder-partners="1"></div></div>
            </article>
            <article class="folder-solutions__panel" role="tabpanel" id="folder-panel-2" aria-labelledby="folder-tab-2" data-folder-panel="2" hidden>
              <div class="folder-solutions__image-wrap"><img class="ancillary-service-image" src="assets/images-zconnect/services/Ancillary-Devices-1.jpg" alt="Ancillary Devices" loading="lazy" /></div>
              <div class="folder-solutions__copy"><span class="folder-solutions__eyebrow">03 / Protection</span><h2>Ancillary Devices</h2><p>Complete physical security solutions including access control, surveillance, and fire detection.</p><p>CCTV, biometrics, FDAS, and integrated systems designed and deployed by certified professionals.</p><div class="folder-solutions__partners" data-folder-partners="2"></div></div>
            </article>
            <article class="folder-solutions__panel" role="tabpanel" id="folder-panel-3" aria-labelledby="folder-tab-3" data-folder-panel="3" hidden>
              <div class="folder-solutions__image-wrap"><img src="assets/images-zconnect/services/Building-Management-System.jpeg" alt="Building Management System" loading="lazy" /></div>
              <div class="folder-solutions__copy"><span class="folder-solutions__eyebrow">04 / Automation</span><h2>Building Management System</h2><p>Automated control systems that optimize energy consumption through intelligent monitoring and management.</p><p>HVAC, lighting, security, and power systems unified in one adaptive platform.</p><div class="folder-solutions__partners" data-folder-partners="3"></div></div>
            </article>
            <article class="folder-solutions__panel" role="tabpanel" id="folder-panel-4" aria-labelledby="folder-tab-4" data-folder-panel="4" hidden>
              <div class="folder-solutions__image-wrap"><img src="assets/images-zconnect/services/Managed-Support-Services.jpg" alt="Managed Support Services" loading="lazy" /></div>
              <div class="folder-solutions__copy"><span class="folder-solutions__eyebrow">05 / Continuity</span><h2>Managed Support Services</h2><p>Expert IT management for complex technology landscapes, from hardware maintenance to network security.</p><p>Proactive monitoring, maintenance, and responsive support keep vital systems efficient.</p><div class="folder-solutions__partners" data-folder-partners="4"></div></div>
            </article>
            <article class="folder-solutions__panel" role="tabpanel" id="folder-panel-5" aria-labelledby="folder-tab-5" data-folder-panel="5" hidden>
              <div class="folder-solutions__image-wrap"><img src="assets/images-zconnect/services/Infrastructure-Assessment.jpg" alt="Infrastructure Assessment" loading="lazy" /></div>
              <div class="folder-solutions__copy"><span class="folder-solutions__eyebrow">06 / Readiness</span><h2>Infrastructure Assessment</h2><p>Comprehensive gap analysis evaluating your infrastructure against the desired design and industry standards.</p><p>Identify vulnerabilities, plan upgrades, and make your systems future-ready.</p><div class="folder-solutions__partners" data-folder-partners="5"></div></div>
            </article>
          </div>
        </div>

        

        <!-- CTA Button -->
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        if ($current_page != 'services.php') {
        ?>
        <div class="sticky-solutions__cta-wrap">
          <a class="sticky-solutions__cta" href="services.php">See All Solutions <i class="bi bi-arrow-right"></i></a>
        </div>
        <?php
        };
        ?>

      </div>
    </section>
    <!-- End Sticky Solutions Section -->

    <!-- Begin Partner Modal Structure -->
    <div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="partnerModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="partnerModalLabel">Our Partners</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3 class="service-title">networking &amp; structured cabling system</h3>
            <div class="partner-logos-grid">
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Network/belden-logo.png" alt="Belden logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Network/commscope.jpg" alt="Commscope logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Network/Fiber-rex.png" alt="Fiber-Rex logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Network/legrand.png" alt="Legrand logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Network/Panduit.png" alt="Panduit logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Network/premium-line.png" alt="Premium Line logo" />
            </div>
            <h3 class="service-title">data center</h3>
            <div class="partner-logos-grid">
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Datacenter/aruba.jpg" alt="Aruba logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Datacenter/CISCO.png" alt="Cisco logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Datacenter/Fortinet-Logo.png" alt="Fortinet logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Datacenter/TPLINK.jpg" alt="TPLink logo" />
            </div>
            <h3 class="service-title">ancillary devices</h3>
            <div class="partner-logos-grid">
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/apc_by_schneider_electric_logo.png" alt="APC Schneider Electric logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/aruba.jpg" alt="Aruba logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/CISCO.png" alt="CISCO logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/cooper.png" alt="Cooper logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/Dahua-logo-1.jpg" alt="Dahua logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/Hikvision-Logo.png" alt="Hikvision logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/Honeywell-Logo.png" alt="Honeywell logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/KStarUPS.jpg" alt="KStarUPS logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Network/tiandy.png" alt="Tiandy logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/protec.jpeg" alt="Protec logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/ubiquiti.jpg" alt="Ubiquiti logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/Vertiv.png" alt="Vertiv logo" />
              <img class="partner-logo" loading="lazy" src="assets/images-zconnect/partner-logos/Ancillary-devices/zk-teco.png" alt="ZK Teco logo" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Partner Modal -->