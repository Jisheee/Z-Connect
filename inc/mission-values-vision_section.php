<section class="amv-section mega-section" id="about-mission-values">
  <style>
    #about-mission-values {
      --amv-accent: #0076de;
      --amv-accent-2: #00a3e0;
      --amv-ink: #1b2430;
      --amv-muted: #64748b;
      --amv-card-bg: #ffffff;
      --amv-border: #e7ecf3;
      padding: 90px 0 100px;
      background: linear-gradient(180deg, #f8fafc 0%, #ffffff 55%, #ffffff 100%);
      position: relative;
      overflow: hidden;
    }
    #about-mission-values .amv-bg-shape {
      position: absolute;
      top: -120px;
      right: -120px;
      width: 420px;
      height: 420px;
      border-radius: 50%;
      background: radial-gradient(circle at 30% 30%, rgba(0,118,222,0.08), rgba(0,118,222,0) 70%);
      pointer-events: none;
    }

    /* ---------- Intro row ---------- */
    #about-mission-values .amv-intro {
      margin-top: 40px;
      margin-bottom: 70px;
    }
    #about-mission-values .amv-intro-text p {
      color: var(--amv-muted);
      font-size: 16px;
      line-height: 1.8;
      margin-bottom: 24px;
    }
    #about-mission-values .amv-badge-row {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
      margin-top: 10px;
    }
    #about-mission-values .amv-badge {
      display: flex;
      align-items: center;
      gap: 8px;
      background: #fff;
      border: 1px solid var(--amv-border);
      border-radius: 30px;
      padding: 8px 16px;
      font-size: 13px;
      font-weight: 600;
      color: var(--amv-ink);
      box-shadow: 0 4px 14px rgba(15, 23, 42, 0.04);
    }
    #about-mission-values .amv-badge i {
      color: var(--amv-accent);
      font-size: 15px;
    }
    #about-mission-values .amv-intro-img {
      text-align: center;
    }
    #about-mission-values .amv-intro-img .frame {
      position: relative;
      display: block;
      width: 100%;
      max-width: 520px;
      margin: 0 auto;
      padding: 0;
    }
    #about-mission-values .amv-intro-img img {
      width: 100%;
      max-width: 100%;
      display: block;
      mix-blend-mode: multiply;
    }

    /* ---------- Pillars ---------- */
    #about-mission-values .amv-pillars {
      margin-top: 10px;
    }
    #about-mission-values .amv-pillar {
      margin-bottom: 24px;
      display: flex;
    }
    #about-mission-values .amv-pillar-card {
      background: var(--amv-card-bg);
      border: 1px solid var(--amv-border);
      border-radius: 18px;
      padding: 38px 30px;
      width: 100%;
      display: flex;
      flex-direction: column;
      box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
      transition: transform .25s ease, box-shadow .25s ease;
    }
    #about-mission-values .amv-pillar-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 18px 40px rgba(15, 23, 42, 0.09);
    }
    #about-mission-values .amv-pillar-card.featured {
      background: linear-gradient(155deg, #10243d 0%, #0a6dbb 100%);
      border: none;
      color: #fff;
    }
    #about-mission-values .amv-pillar-card.featured .amv-icon {
      background: rgba(255,255,255,0.18);
      color: #fff;
    }
    #about-mission-values .amv-pillar-card.featured h3,
    #about-mission-values .amv-pillar-card.featured p {
      color: #fff;
    }
    #about-mission-values .amv-icon {
      width: 56px;
      height: 56px;
      border-radius: 14px;
      background: rgba(0,118,222,0.08);
      color: var(--amv-accent);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      margin-bottom: 22px;
    }
    #about-mission-values .amv-pillar-card h3 {
      font-size: 20px;
      font-weight: 700;
      color: var(--amv-ink);
      margin-bottom: 12px;
      text-transform: capitalize;
    }
    #about-mission-values .amv-pillar-card p {
      color: var(--amv-muted);
      font-size: 15px;
      line-height: 1.75;
      margin-bottom: 0;
      flex-grow: 1;
    }

    /* Values chips */
    #about-mission-values .amv-values-chips {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 4px;
    }
    #about-mission-values .amv-chip {
      display: flex;
      align-items: center;
      gap: 12px;
      background: #f8fafc;
      border: 1px solid var(--amv-border);
      border-radius: 12px;
      padding: 12px 16px;
      font-weight: 600;
      font-size: 14px;
      color: var(--amv-ink);
    }
    #about-mission-values .amv-chip i {
      color: var(--amv-accent);
      font-size: 17px;
    }
    #about-mission-values .amv-chip span.sub {
      display: block;
      font-weight: 400;
      color: var(--amv-muted);
      font-size: 12.5px;
      margin-top: 2px;
    }

    @media (max-width: 991px) {
      #about-mission-values { padding: 60px 0 70px; }
      #about-mission-values .amv-intro { margin-bottom: 50px; }
      #about-mission-values .amv-intro-img { margin-top: 30px; }
    }
  </style>

  <div class="amv-bg-shape"></div>

  <div class="container">

    <div class="sec-heading centered">
      <div class="content-area">
        <span class="pre-title wow fadeInUp" data-wow-delay=".2s">About Us</span>
        <h2 class="title wow fadeInUp" data-wow-delay=".4s">
          <span class="hollow-text">trusted</span> since
          <span class="featured-text"> 2005.
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
              <path d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7"></path>
            </svg>
          </span>
        </h2>
      </div>
    </div>

    <!-- Intro row -->
    <div class="row amv-intro align-items-center">
      <div class="col-12 col-lg-6 amv-intro-text wow fadeInUp" data-wow-delay=".2s">
        <p>Z-Connect, Inc., formerly known as RJEN Innovative IT Solutions, Co. Ltd., was originally established in 2005 as a limited partnership before transitioning into a corporate structure in 2017. This transformation strengthened our foundation and reflects our continued commitment to delivering reliable solutions, long-term stability, and exceptional service to our clients.</p>
        <div class="amv-badge-row">
          <div class="amv-badge"><i class="bi bi-award"></i> ISO 9001:2015 Certified</div>
          <div class="amv-badge"><i class="bi bi-people"></i> 200+ Clients Served</div>
          <div class="amv-badge"><i class="bi bi-clock-history"></i> 20+ Years in IT</div>
        </div>
      </div>
      <div class="col-12 col-lg-6 amv-intro-img wow fadeInUp" data-wow-delay=".4s">
        <div class="frame">
          <img loading="lazy" src="assets/images-zconnect/logo/RJEN LOGO.jpg" alt="RJEN — the origins of Z-Connect">
        </div>
      </div>
    </div>

    <!-- Mission / Vision / Values pillars -->
    <div class="row amv-pillars">
      <div class="col-12 col-md-4 amv-pillar wow fadeInUp" data-wow-delay=".2s">
        <div class="amv-pillar-card featured">
          <div class="amv-icon"><i class="bi bi-bullseye"></i></div>
          <h3>Mission</h3>
          <p>To increase prosperity of clients and partners through professionally-supported services we provide. To foster standards of excellence which shall produce employees who exceed clients' expectations, giving them sustainable growth.</p>
        </div>
      </div>

      <div class="col-12 col-md-4 amv-pillar wow fadeInUp" data-wow-delay=".4s">
        <div class="amv-pillar-card featured">
          <div class="amv-icon"><i class="bi bi-eye"></i></div>
          <h3>Vision</h3>
          <p>A preferred and trusted partner in Information Technology, responding to urgent needs yet ensuring the highest quality of service — every project, every time.</p>
        </div>
      </div>

      <div class="col-12 col-md-4 amv-pillar wow fadeInUp" data-wow-delay=".6s">
        <div class="amv-pillar-card featured">
          <div class="amv-icon"><i class="bi bi-gem"></i></div>
          <h3>Values</h3>
          <div class="amv-values-chips">
            <div class="amv-chip">
              <i class="bi bi-lightning-charge-fill"></i>
              <div>
                Fast
                <span class="sub">Responsive, on-time delivery</span>
              </div>
            </div>
            <div class="amv-chip">
              <i class="bi bi-check2-circle"></i>
              <div>
                Accurate
                <span class="sub">Precision in every solution</span>
              </div>
            </div>
            <div class="amv-chip">
              <i class="bi bi-shield-check"></i>
              <div>
                Reliable
                <span class="sub">A partner you can count on</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
