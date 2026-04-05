<?php
$page_title = 'Home';
include 'includes/header.php';
?>

<!-- ============================================================
     HOME HERO
============================================================ -->
<section class="home-hero" id="hero">
  <div class="bg-grid bg-grid-anim"></div>
  <div class="blob blob-blue" style="width:700px;height:700px;top:-200px;left:-180px;"></div>
  <div class="blob blob-blue" style="width:400px;height:400px;bottom:-80px;right:80px;opacity:.5;"></div>

  <div class="container">
    <div class="hero-split">

      <!-- Left -->
      <div class="hero-left">
        <div class="hero-badge">
          <span class="badge-dot"></span>
          Ierland's Trusted Financial Experts Since 2010
        </div>

        <h1 class="hero-title">
          <span class="line">Expert</span>
          <span class="line"><span class="typed-wrap"><span class="typed-text"></span><span class="typed-cursor"></span></span></span>
          <span class="line outline">Solutions</span>
        </h1>

        <p class="hero-desc">
          From bookkeeping to full audit — we manage your complete financial
          operations so you can focus on growing your business with absolute confidence.
        </p>

        <div class="hero-actions">
          <a href="contact.php" class="btn-at">
            Free Consultation
            <svg class="btn-icon" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="services.php" class="btn-at-outline">Our Services</a>
        </div>

        <div class="hero-trust">
          <div class="avatars">
            <span class="av1">AK</span>
            <span class="av2">SM</span>
            <span class="av3">OR</span>
            <span class="av4">+</span>
          </div>
          <div class="trust-text">
            <strong>500+ businesses</strong> trust us with their finances
          </div>
        </div>
      </div>

      <!-- Right — Dashboard Visual -->
      <div class="hero-visual">
        <div class="float-badge fb-1">
          <svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          Revenue Up 34% This Quarter
        </div>

        <div class="dash-card">
          <div class="dash-header">
            <span class="dash-label">Financial Overview</span>
            <span class="live-pill"><span class="live-dot"></span> LIVE</span>
          </div>
          <div class="dash-amount">€. 1.2M</div>
          <div class="dash-change">
            <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
            +18.4% vs last month
          </div>
          <div class="mini-chart">
            <div class="bar-el"></div>
            <div class="bar-el"></div>
            <div class="bar-el"></div>
            <div class="bar-el"></div>
            <div class="bar-el"></div>
            <div class="bar-el"></div>
            <div class="bar-el"></div>
            <div class="bar-el hi"></div>
          </div>
          <div class="dash-mini-row">
            <div class="mini-box"><div class="ml">Tax Saved</div><div class="mv">€82K</div></div>
            <div class="mini-box"><div class="ml">Compliance</div><div class="mv">100%</div></div>
            <div class="mini-box"><div class="ml">On-Time</div><div class="mv">98%</div></div>
          </div>
        </div>

        <div class="float-badge fb-2">
          <svg viewBox="0 0 24 24"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
          Tax Filing Complete ✓
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     STATS BAND
============================================================ -->
<div class="stats-band">
  <div class="container">
    <div class="stats-row">
      <div class="stat-box" data-aos="fade-up">
        <div class="stat-num" data-target="500" data-suffix="+">0+</div>
        <div class="stat-lbl">Businesses Served</div>
      </div>
      <div class="stat-box" data-aos="fade-up" data-aos-delay="80">
        <div class="stat-num" data-target="15" data-suffix="+">0+</div>
        <div class="stat-lbl">Years Experience</div>
      </div>
      <div class="stat-box" data-aos="fade-up" data-aos-delay="160">
        <div class="stat-num" data-target="98" data-suffix="%">0%</div>
        <div class="stat-lbl">Client Satisfaction</div>
      </div>
      <div class="stat-box" data-aos="fade-up" data-aos-delay="240">
        <div class="stat-num" data-target="50" data-suffix="Cr+">0Cr+</div>
        <div class="stat-lbl">Tax Filed Successfully</div>
      </div>
    </div>
  </div>
</div>

<!-- ============================================================
     SERVICES PREVIEW
============================================================ -->
<section class="services-sec section-pad" id="services">
  <div class="bg-grid"></div>
  <div class="blob blob-blue" style="width:500px;height:500px;top:-100px;left:50%;transform:translateX(-50%);opacity:.5;"></div>
  <div class="container" style="position:relative;z-index:1">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-tag justify-content-center">What We Offer</div>
      <h2 class="section-title">Our Professional <span class="accent">Services</span></h2>
      <p class="section-desc center mt-2">
        Comprehensive financial solutions tailored for businesses of all sizes —
        from startups to established enterprises.
      </p>
    </div>

    <div class="services-grid">

      <div class="svc-card" data-aos="fade-up" data-aos-delay="40">
        <span class="svc-num">01</span>
        <div class="svc-icon">
          <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
        </div>
        <h3 class="svc-title">Accounting & Bookkeeping</h3>
        <p class="svc-desc">Accurate ledger maintenance, bank reconciliation, and monthly reporting to keep your finances transparent and reliable.</p>
        <a href="services.php#bookkeeping" class="svc-link">Learn More <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <div class="svc-card" data-aos="fade-up" data-aos-delay="90">
        <span class="svc-num">02</span>
        <div class="svc-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
        </div>
        <h3 class="svc-title">Payroll Management</h3>
        <p class="svc-desc">Timely salary processing, EOBI & PESSI contributions, tax deductions, and digital payslip generation for your team.</p>
        <a href="services.php#payroll" class="svc-link">Learn More <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <div class="svc-card" data-aos="fade-up" data-aos-delay="140">
        <span class="svc-num">03</span>
        <div class="svc-icon">
          <svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
        </div>
        <h3 class="svc-title">Taxation Services</h3>
        <p class="svc-desc">Full FBR compliance — income tax, sales tax, WHT filing, return processing, and strategic tax planning.</p>
        <a href="services.php#taxation" class="svc-link">Learn More <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <div class="svc-card" data-aos="fade-up" data-aos-delay="40">
        <span class="svc-num">04</span>
        <div class="svc-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
        </div>
        <h3 class="svc-title">Business Consultancy</h3>
        <p class="svc-desc">Strategic financial advice, business planning, budgeting, and KPI tracking to help your business grow profitably.</p>
        <a href="services.php#consultancy" class="svc-link">Learn More <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <div class="svc-card" data-aos="fade-up" data-aos-delay="90">
        <span class="svc-num">05</span>
        <div class="svc-icon">
          <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        </div>
        <h3 class="svc-title">Company Registration</h3>
        <p class="svc-desc">SECP registration, NTN & STRN enrollment, partnership deeds, and complete documentation for business setup.</p>
        <a href="services.php#registration" class="svc-link">Learn More <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

      <div class="svc-card" data-aos="fade-up" data-aos-delay="140">
        <span class="svc-num">06</span>
        <div class="svc-icon">
          <svg viewBox="0 0 24 24"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
        </div>
        <h3 class="svc-title">Audit & Assurance</h3>
        <p class="svc-desc">Internal & external audit services, financial statement verification, risk assessment, and compliance reporting.</p>
        <a href="services.php#audit" class="svc-link">Learn More <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>

    </div>

    <div class="text-center mt-5" data-aos="fade-up">
      <a href="services.php" class="btn-at">
        View All Services
        <svg class="btn-icon" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT SNIPPET
============================================================ -->
<section class="section-pad" style="background:var(--dark);position:relative;overflow:hidden;">
  <div class="blob blob-blue" style="width:500px;height:500px;top:50%;left:-150px;transform:translateY(-50%);opacity:.4;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="about-grid">

      <div class="about-img-wrap" data-aos="fade-right">
        <div class="about-img-box">
          <img src="images/logo.png" alt="ACCTS & TECHS" style="width:200px;height:auto;object-fit:contain;padding:40px;">
        </div>
        <div class="about-badge">
          <div class="ab-num">15+</div>
          <div class="ab-lbl">Years of Excellence</div>
        </div>
      </div>

      <div data-aos="fade-left">
        <div class="section-tag">About Us</div>
        <h2 class="section-title">Your Trusted <span class="accent">Financial</span> Partner</h2>
        <div class="acc-line"></div>
        <p class="section-desc mb-4">
          ACCTS & TECHS is a leading accounting and financial consultancy firm dedicated to helping
          businesses maintain accurate records, meet compliance requirements, and achieve sustainable
          growth through smart financial management.
        </p>
        <div class="why-list">
          <div class="why-item">
            <div class="why-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
            <div><h5>Certified Chartered Accountants</h5><p>ICAP-certified professionals with deep industry expertise.</p></div>
          </div>
          <div class="why-item">
            <div class="why-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
            <div><h5>100% Data Confidentiality</h5><p>Your financial data secured with enterprise-grade protocols.</p></div>
          </div>
          <div class="why-item">
            <div class="why-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
            <div><h5>On-Time Filing — Zero Penalties</h5><p>Never miss a deadline with our proactive compliance management.</p></div>
          </div>
          <div class="why-item">
            <div class="why-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
            <div><h5>Dedicated Account Manager</h5><p>One point of contact for all your financial needs, always available.</p></div>
          </div>
        </div>
        <div class="mt-4">
          <a href="about.php" class="btn-at me-3">
            Learn More <svg class="btn-icon" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     HOW IT WORKS
============================================================ -->
<section class="process-sec section-pad" style="background:var(--dark2);">
  <div class="container">
    <div class="text-center" data-aos="fade-up">
      <div class="section-tag justify-content-center">Simple Process</div>
      <h2 class="section-title">How It <span class="accent">Works</span></h2>
      <p class="section-desc center mt-2">Getting started is easy. Three steps to complete financial clarity.</p>
    </div>
    <div class="process-steps">
      <div class="step-card" data-aos="fade-up" data-aos-delay="60">
        <div class="step-orb">
          <span class="step-badge">01</span>
          <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 010 1.19 2 2 0 012 1h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 8.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        </div>
        <h3 class="step-title">Free Consultation</h3>
        <p class="step-desc">Book a free 30-minute call. We understand your business needs, pain points, and financial goals.</p>
      </div>
      <div class="step-card" data-aos="fade-up" data-aos-delay="150">
        <div class="step-orb">
          <span class="step-badge">02</span>
          <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <h3 class="step-title">Submit Documents</h3>
        <p class="step-desc">Share your financial documents securely via our portal. We handle everything with full confidentiality.</p>
      </div>
      <div class="step-card" data-aos="fade-up" data-aos-delay="240">
        <div class="step-orb">
          <span class="step-badge">03</span>
          <svg viewBox="0 0 24 24"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
        </div>
        <h3 class="step-title">We Handle Everything</h3>
        <p class="step-desc">Sit back while our experts manage your accounts, filings, and reports — delivered on time, every time.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
============================================================ -->
<section class="testi-sec section-pad" id="testimonials">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-tag justify-content-center">Client Stories</div>
      <h2 class="section-title">What Our <span class="accent">Clients</span> Say</h2>
    </div>
    <div class="swiper swiper-testi" data-aos="fade-up" data-aos-delay="80">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testi-card">
            <div class="testi-q">"</div>
            <div class="testi-stars">
              <?php for($i=0;$i<5;$i++): ?><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><?php endfor; ?>
            </div>
            <p class="testi-body">ACCTS & TECHS transformed our financial operations completely. Tax filing is always on time and we have not paid a single penalty since partnering with them.</p>
            <div class="testi-author">
              <div class="testi-av" style="background:#1a5fa0">AK</div>
              <div><div class="testi-name">Ahmed Khan</div><div class="testi-role">CEO, XYZ Pvt Ltd</div></div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testi-card">
            <div class="testi-q">"</div>
            <div class="testi-stars">
              <?php for($i=0;$i<5;$i++): ?><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><?php endfor; ?>
            </div>
            <p class="testi-body">Payroll management is now completely stress-free. The team is incredibly responsive and their cloud accounting access means I can see everything in real time.</p>
            <div class="testi-author">
              <div class="testi-av" style="background:#0e7a5c">SM</div>
              <div><div class="testi-name">Sara Malik</div><div class="testi-role">HR Manager, TechCorp</div></div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testi-card">
            <div class="testi-q">"</div>
            <div class="testi-stars">
              <?php for($i=0;$i<5;$i++): ?><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><?php endfor; ?>
            </div>
            <p class="testi-body">We registered our company through them and the entire process was seamless. Their knowledge of SECP requirements saved us weeks of confusion.</p>
            <div class="testi-author">
              <div class="testi-av" style="background:#6e4fa0">OR</div>
              <div><div class="testi-name">Omar Raza</div><div class="testi-role">Founder, StartUp Hub</div></div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testi-card">
            <div class="testi-q">"</div>
            <div class="testi-stars">
              <?php for($i=0;$i<5;$i++): ?><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><?php endfor; ?>
            </div>
            <p class="testi-body">Exceptional audit services. Their team is professional, thorough, and always available. Highly recommend for any business needing reliable financial partners.</p>
            <div class="testi-author">
              <div class="testi-av" style="background:#a04f1a">FA</div>
              <div><div class="testi-name">Fatima Ali</div><div class="testi-role">CFO, Retail Chain Co.</div></div>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination mt-4"></div>
    </div>
  </div>
</section>

<!-- ============================================================
     PRICING
============================================================ -->
<section class="section-pad" id="pricing" style="background:var(--dark);position:relative;overflow:hidden;">
  <div class="blob blob-blue" style="width:600px;height:300px;top:-80px;left:50%;transform:translateX(-50%);"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="text-center" data-aos="fade-up">
      <div class="section-tag justify-content-center">Transparent Pricing</div>
      <h2 class="section-title">Simple, <span class="accent">Affordable</span> Packages</h2>
      <p class="section-desc center mt-2">No hidden charges. Pick a plan that fits your business.</p>
    </div>
    <div class="pricing-grid">

      <div class="price-card" data-aos="fade-up" data-aos-delay="60">
        <span class="plan-chip gray">Starter</span>
        <div class="plan-name">Basic</div>
        <div class="plan-sub">Perfect for freelancers & small businesses</div>
        <div class="plan-price"><span class="plan-cur">€</span><span class="plan-amt">5,000</span><span class="plan-per">/month</span></div>
        <div class="plan-feats">
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Bookkeeping & Ledger</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Monthly Reports</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Income Tax Filing</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Email Support</div>
        </div>
        <a href="contact.php" class="btn-at-outline w-100 justify-content-center">Get Started</a>
      </div>

      <div class="price-card featured" data-aos="fade-up" data-aos-delay="130">
        <span class="plan-chip">Most Popular</span>
        <div class="plan-name">Growth</div>
        <div class="plan-sub">Ideal for growing SMEs and medium businesses</div>
        <div class="plan-price"><span class="plan-cur">€</span><span class="plan-amt">12,000</span><span class="plan-per">/month</span></div>
        <div class="plan-feats">
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Everything in Basic</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Payroll for 20 Staff</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Sales Tax Filing</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Dedicated Manager</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Cloud Accounting Access</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Priority Support</div>
        </div>
        <a href="contact.php" class="btn-at w-100 justify-content-center">Get Started</a>
      </div>

      <div class="price-card" data-aos="fade-up" data-aos-delay="200">
        <span class="plan-chip green">Enterprise</span>
        <div class="plan-name">Custom</div>
        <div class="plan-sub">For large enterprises with complex requirements</div>
        <div class="plan-price"><span class="plan-custom">Talk to Us</span></div>
        <div class="plan-feats">
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Everything in Growth</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Unlimited Payroll</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Full Audit Services</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>Company Registration</div>
          <div class="plan-feat"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>24/7 Support</div>
        </div>
        <a href="contact.php" class="btn-at-outline w-100 justify-content-center">Contact Us</a>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     CTA BANNER
============================================================ -->
<section class="cta-sec">
  <div class="container text-center position-relative" style="z-index:1;" data-aos="zoom-in">
    <div class="section-tag justify-content-center">Get Started Today</div>
    <h2 class="cta-title">Ready to Take Control of<br>Your <span>Finances?</span></h2>
    <p class="section-desc center mt-2 mb-4">Book a free consultation with our certified accountants. No commitment, no hidden fees.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      <a href="contact.php" class="btn-at">
        <svg class="btn-icon" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 010 1.19 2 2 0 012 1h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 8.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        Book Free Consultation
      </a>
      <a href="services.php" class="btn-at-outline">Explore Services</a>
    </div>
    <div class="cta-phone">
      <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 010 1.19 2 2 0 012 1h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 8.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
      <a href="tel:+380824318088">+38 082 431 8088</a> &nbsp;·&nbsp; Mon–Sat, 9am–6pm
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
