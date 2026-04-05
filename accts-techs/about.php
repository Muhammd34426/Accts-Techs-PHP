<?php
$page_title = 'About Us';
include 'includes/header.php';

$team = [
  ['initials'=>'AJ','name'=>'Asad Javed','role'=>'Managing Director & CA','bio'=>'ICAP-certified Chartered Accountant with 18 years of experience in audit and financial advisory.','color'=>'#1a5fa0'],
  ['initials'=>'NK','name'=>'Nadia Khan','role'=>'Head of Taxation','bio'=>'FBR-registered tax practitioner specializing in corporate taxation and compliance advisory.','color'=>'#0e7a5c'],
  ['initials'=>'BR','name'=>'Bilal Raza','role'=>'Senior Accountant','bio'=>'Expert in bookkeeping, payroll management, and ERP implementation for SMEs.','color'=>'#6e4fa0'],
  ['initials'=>'SA','name'=>'Sana Ahmed','role'=>'Business Consultant','bio'=>'MBA-qualified consultant specializing in business planning, forecasting, and growth strategy.','color'=>'#a04f1a'],
];

$values = [
  ['icon'=>'<polyline points="20 6 9 17 4 12"/>','title'=>'Integrity','text'=>'We hold ourselves to the highest ethical standards in every client engagement.'],
  ['icon'=>'<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>','title'=>'Excellence','text'=>'Continuous improvement and professional development drive the quality of our work.'],
  ['icon'=>'<rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>','title'=>'Confidentiality','text'=>'Your financial data is protected with enterprise-grade security and strict privacy protocols.'],
  ['icon'=>'<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/>','title'=>'Client-First','text'=>'Every decision we make is guided by what is best for our clients and their businesses.'],
];
?>

<!-- Page Hero -->
<section class="page-hero" style="position:relative;overflow:hidden;">
  <div class="bg-grid"></div>
  <div class="blob blob-blue" style="width:600px;height:600px;bottom:-200px;right:-150px;opacity:.4;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div data-aos="fade-up">
      <div class="section-tag">Our Story</div>
      <h1 class="page-hero-title">About <span>ACCTS & TECHS</span></h1>
      <p class="section-desc mt-3">A decade of helping businesses focus on their success while we handle the numbers.</p>
      <div class="breadcrumb-at mt-4">
        <a href="index.php">Home</a>
        <span class="breadcrumb-sep">›</span>
        <span>About Us</span>
      </div>
    </div>
  </div>
</section>

<!-- ── About Story ── -->
<section class="section-pad" id="about" style="background:var(--dark);position:relative;overflow:hidden;">
  <div class="blob blob-blue" style="width:500px;height:500px;top:50%;left:-150px;transform:translateY(-50%);opacity:.35;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="about-grid">
      <div class="about-img-wrap" data-aos="fade-right">
        <div class="about-img-box">
          <img src="images/logo.png" alt="ACCTS & TECHS" style="width:220px;height:auto;padding:40px;object-fit:contain;">
        </div>
        <div class="about-badge"><div class="ab-num">15+</div><div class="ab-lbl">Years of Excellence</div></div>
      </div>
      <div data-aos="fade-left">
        <div class="section-tag">Who We Are</div>
        <h2 class="section-title">Focus on Your <span class="accent">Success</span></h2>
        <div class="acc-line"></div>
        <p class="section-desc mb-3">
          Founded in 2010, ACCTS & TECHS has grown into one of Pakistan's most trusted accounting
          and financial consultancy firms. We serve businesses of all sizes — from startups to
          large enterprises — providing comprehensive financial services under one roof.
        </p>
        <p class="section-desc mb-4">
          Our team of certified chartered accountants, tax practitioners, and business consultants
          brings decades of combined experience across multiple industries. We combine technical
          expertise with personalized service to deliver results that truly impact your bottom line.
        </p>
        <div class="d-flex gap-4 flex-wrap mb-4">
          <div style="text-align:center;">
            <div style="font-family:var(--font-h);font-size:42px;font-weight:800;color:var(--accent);line-height:1;">500+</div>
            <div style="font-size:12px;color:var(--muted);margin-top:4px;">Happy Clients</div>
          </div>
          <div style="text-align:center;">
            <div style="font-family:var(--font-h);font-size:42px;font-weight:800;color:var(--accent);line-height:1;">15+</div>
            <div style="font-size:12px;color:var(--muted);margin-top:4px;">Expert Team</div>
          </div>
          <div style="text-align:center;">
            <div style="font-family:var(--font-h);font-size:42px;font-weight:800;color:var(--accent);line-height:1;">50Cr+</div>
            <div style="font-size:12px;color:var(--muted);margin-top:4px;">Tax Filed</div>
          </div>
        </div>
        <a href="contact.php" class="btn-at">Work With Us <svg class="btn-icon" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- ── Mission & Vision ── -->
<section class="section-pad" id="mission" style="background:var(--dark2);">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-tag justify-content-center">Our Purpose</div>
      <h2 class="section-title">Mission & <span class="accent">Vision</span></h2>
    </div>
    <div class="mission-grid">
      <div class="mission-card" data-aos="fade-up" data-aos-delay="60">
        <div class="mission-icon"><svg viewBox="0 0 24 24" style="width:26px;height:26px;stroke:var(--accent);fill:none;stroke-width:1.6;"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
        <h3 class="mission-title">Our Mission</h3>
        <p class="mission-text">To provide businesses with reliable, accurate, and professional financial services that empower them to make informed decisions, maintain compliance, and achieve sustainable growth — so they can focus entirely on their core business.</p>
      </div>
      <div class="mission-card" data-aos="fade-up" data-aos-delay="140">
        <div class="mission-icon"><svg viewBox="0 0 24 24" style="width:26px;height:26px;stroke:var(--accent);fill:none;stroke-width:1.6;"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></div>
        <h3 class="mission-title">Our Vision</h3>
        <p class="mission-text">To be Pakistan's most trusted and innovative financial services partner — recognized for our unwavering integrity, client-first approach, and commitment to delivering excellence that transforms businesses and builds lasting partnerships.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── Core Values ── -->
<section class="section-pad" style="background:var(--dark);position:relative;overflow:hidden;">
  <div class="blob blob-blue" style="width:500px;height:500px;bottom:-100px;right:-100px;opacity:.3;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-tag justify-content-center">What Drives Us</div>
      <h2 class="section-title">Our Core <span class="accent">Values</span></h2>
    </div>
    <div class="row g-4">
      <?php foreach($values as $i => $v): ?>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $i * 70 ?>">
        <div style="background:var(--card);border:1px solid var(--border);border-radius:var(--radius-lg);padding:32px 24px;text-align:center;height:100%;transition:border-color .3s,transform .3s;" class="h-100 val-card">
          <div style="width:60px;height:60px;background:var(--accent-soft);border:1px solid rgba(26,140,219,.2);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;margin:0 auto 20px;">
            <svg viewBox="0 0 24 24" style="width:24px;height:24px;stroke:var(--accent);fill:none;stroke-width:2;"><?= $v['icon'] ?></svg>
          </div>
          <h4 style="font-family:var(--font-h);font-size:22px;font-weight:700;color:var(--text);margin-bottom:10px;"><?= $v['title'] ?></h4>
          <p style="font-size:13px;color:var(--muted);line-height:1.8;"><?= $v['text'] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── Team ── -->
<section class="section-pad" id="team" style="background:var(--dark2);">
  <div class="container">
    <div class="text-center mb-2" data-aos="fade-up">
      <div class="section-tag justify-content-center">The People Behind</div>
      <h2 class="section-title">Our Expert <span class="accent">Team</span></h2>
      <p class="section-desc center mt-2">Certified professionals dedicated to your financial success.</p>
    </div>
    <div class="team-grid">
      <?php foreach($team as $i => $m): ?>
      <div class="team-card" data-aos="fade-up" data-aos-delay="<?= $i * 80 ?>">
        <div class="team-avatar" style="background:<?= $m['color'] ?>"><?= $m['initials'] ?></div>
        <div class="team-name"><?= $m['name'] ?></div>
        <div class="team-role"><?= $m['role'] ?></div>
        <p class="team-bio"><?= $m['bio'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ── Why Choose Us ── -->
<section class="section-pad" style="background:var(--dark);position:relative;overflow:hidden;">
  <div class="blob blob-blue" style="width:500px;height:500px;top:50%;left:-100px;transform:translateY(-50%);opacity:.3;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="section-tag">Why Us</div>
        <h2 class="section-title">Why Businesses <span class="accent">Choose</span> Us</h2>
        <div class="acc-line"></div>
        <p class="section-desc mb-4">With hundreds of satisfied clients across Pakistan, we have built our reputation on reliability, expertise, and a genuine commitment to client success.</p>
        <div class="why-list">
          <div class="why-item"><div class="why-icon"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div><div><h5>Certified & Experienced Professionals</h5><p>All our accountants are ICAP-certified with years of industry experience.</p></div></div>
          <div class="why-item"><div class="why-icon"><svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><div><h5>100% Data Security & Confidentiality</h5><p>Enterprise-grade protocols protect every piece of your financial data.</p></div></div>
          <div class="why-item"><div class="why-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><h5>Proactive & On-Time Delivery</h5><p>We never miss a deadline — your filings, reports, and payroll are always on time.</p></div></div>
          <div class="why-item"><div class="why-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div><h5>Dedicated Account Manager</h5><p>Your own point of contact who knows your business inside out.</p></div></div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
          <?php
          $facts = [
            ['num'=>'500+','lbl'=>'Businesses Served','ico'=>'<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'],
            ['num'=>'15+','lbl'=>'Years Experience','ico'=>'<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>'],
            ['num'=>'98%','lbl'=>'Client Satisfaction','ico'=>'<polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>'],
            ['num'=>'0','lbl'=>'Tax Penalties Ever','ico'=>'<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
          ];
          foreach($facts as $f):
          ?>
          <div style="background:var(--card);border:1px solid var(--border);border-radius:var(--radius-lg);padding:28px 22px;text-align:center;transition:border-color .3s;">
            <div style="width:44px;height:44px;background:var(--accent-soft);border:1px solid rgba(26,140,219,.2);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;margin:0 auto 14px;">
              <svg viewBox="0 0 24 24" style="width:20px;height:20px;stroke:var(--accent);fill:none;stroke-width:2;"><?= $f['ico'] ?></svg>
            </div>
            <div style="font-family:var(--font-h);font-size:36px;font-weight:800;color:var(--text);line-height:1;"><?= $f['num'] ?></div>
            <div style="font-size:12px;color:var(--muted);margin-top:5px;"><?= $f['lbl'] ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-sec">
  <div class="container text-center position-relative" style="z-index:1;" data-aos="zoom-in">
    <h2 class="cta-title">Ready to <span>Partner With Us?</span></h2>
    <p class="section-desc center mt-2 mb-4">Join 500+ businesses that trust ACCTS & TECHS with their financial success.</p>
    <a href="contact.php" class="btn-at">
      Get In Touch <svg class="btn-icon" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
    <div class="cta-phone">
      <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 010 1.19 2 2 0 012 1h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 8.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
      <a href="tel:+380824318088">+38 082 431 8088</a>
    </div>
  </div>
</section>

<style>
.val-card:hover { border-color:var(--border-acc) !important; transform:translateY(-5px); }
</style>

<?php include 'includes/footer.php'; ?>
