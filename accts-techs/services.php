<?php
$page_title = 'Our Services';
include 'includes/header.php';

$services = [
  ['id'=>'bookkeeping','num'=>'01','title'=>'Accounting & Bookkeeping','short'=>'Accurate financial records that keep your business on track.',
   'desc'=>'We provide comprehensive accounting and bookkeeping services to maintain accurate financial records for your business. Our expert team handles everything from daily transactions to monthly financial statements, ensuring your books are always balanced and up to date.',
   'icon'=>'<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><line x1="10" y1="9" x2="8" y2="9"/>',
   'features'=>['General Ledger Maintenance','Bank Reconciliation','Accounts Payable & Receivable','Monthly Financial Statements','Cash Flow Management','Chart of Accounts Setup']],

  ['id'=>'payroll','num'=>'02','title'=>'Payroll Management','short'=>'Timely, accurate payroll for your entire workforce.',
   'desc'=>'Our payroll management service ensures your employees are paid accurately and on time, every time. We handle all aspects of payroll processing including salary calculations, statutory deductions, and payslip generation, fully compliant with Pakistan labor laws.',
   'icon'=>'<rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/><line x1="6" y1="15" x2="8" y2="15"/><line x1="10" y1="15" x2="14" y2="15"/>',
   'features'=>['Salary Processing & Payslips','EOBI & PESSI Contributions','Income Tax Deductions (WHT)','Overtime & Leave Management','Provident Fund Management','Annual Bonus Calculations']],

  ['id'=>'taxation','num'=>'03','title'=>'Taxation Services','short'=>'Full FBR compliance — zero penalties, maximum savings.',
   'desc'=>'We provide complete taxation services to ensure your business remains fully compliant with FBR regulations. From income tax returns to sales tax filing, our tax experts handle everything with precision, helping you minimize tax liability through strategic planning.',
   'icon'=>'<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>',
   'features'=>['Income Tax Return Filing','Sales Tax (GST) Filing','Withholding Tax Management','FBR Notice Handling','Tax Planning & Advisory','Appeal & Representation']],

  ['id'=>'consultancy','num'=>'04','title'=>'Business Consultancy','short'=>'Strategic advice to grow your business profitably.',
   'desc'=>'Our business consultancy services provide expert strategic guidance to help your business achieve sustainable growth. We analyze your financial performance, identify opportunities, and develop actionable strategies aligned with your business goals.',
   'icon'=>'<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>',
   'features'=>['Business Planning & Forecasting','Financial Analysis & KPIs','Budget Preparation','Cash Flow Projections','Investment Advisory','Business Valuation']],

  ['id'=>'registration','num'=>'05','title'=>'Company Registration','short'=>'Get your business legally set up — fast and hassle-free.',
   'desc'=>'We handle the complete company registration process in Pakistan, from SECP registration to obtaining your NTN and STRN. Our experts guide you through every step, ensuring your business is properly constituted and legally compliant from day one.',
   'icon'=>'<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
   'features'=>['SECP Company Registration','NTN & STRN Registration','Partnership Deed Drafting','Business Name Registration','Chamber of Commerce Membership','Trade License Assistance']],

  ['id'=>'audit','num'=>'06','title'=>'Audit & Assurance','short'=>'Independent verification your stakeholders can trust.',
   'desc'=>'Our audit and assurance services provide independent verification of your financial statements and internal controls. We conduct thorough audits following International Standards on Auditing (ISA), delivering reports that build stakeholder confidence.',
   'icon'=>'<polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>',
   'features'=>['Statutory Audit Services','Internal Audit','Special Purpose Audit','Compliance Audit','Risk Assessment','Management Letter']],
];
?>

<!-- Page Hero -->
<section class="page-hero" style="position:relative;overflow:hidden;">
  <div class="bg-grid"></div>
  <div class="blob blob-blue" style="width:500px;height:500px;top:-150px;right:-100px;opacity:.5;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div data-aos="fade-up">
      <div class="section-tag">What We Do</div>
      <h1 class="page-hero-title">Our Professional <span>Services</span></h1>
      <p class="section-desc mt-3">Comprehensive financial solutions designed to help your business grow, stay compliant, and thrive.</p>
      <div class="breadcrumb-at mt-4">
        <a href="index.php">Home</a>
        <span class="breadcrumb-sep">›</span>
        <span>Services</span>
      </div>
    </div>
  </div>
</section>

<!-- Services Nav Pills -->
<div style="background:var(--dark2);border-bottom:1px solid var(--border);padding:0;" data-aos="fade-down">
  <div class="container">
    <div style="display:flex;gap:0;overflow-x:auto;scrollbar-width:none;">
      <?php foreach($services as $s): ?>
      <a href="#<?= $s['id'] ?>" style="
        display:flex;align-items:center;gap:7px;
        padding:14px 18px;font-size:12px;font-weight:600;
        letter-spacing:.5px;color:var(--muted);
        white-space:nowrap;border-bottom:2px solid transparent;
        transition:color .2s,border-color .2s;text-decoration:none;
      " onmouseover="this.style.color='var(--accent)';this.style.borderColor='var(--accent)'"
         onmouseout="this.style.color='var(--muted)';this.style.borderColor='transparent'">
        <span style="color:var(--accent);font-family:var(--font-h);font-size:11px;"><?= $s['num'] ?></span>
        <?= $s['title'] ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- Service Detail Cards -->
<section class="section-pad" style="background:var(--dark);">
  <div class="container">
    <?php foreach($services as $i => $s): ?>
    <div id="<?= $s['id'] ?>" class="svc-detail-card" data-aos="fade-up" data-aos-delay="<?= $i * 40 ?>">
      <div class="svc-detail-icon">
        <svg viewBox="0 0 24 24" style="width:32px;height:32px;stroke:var(--accent);fill:none;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;"><?= $s['icon'] ?></svg>
      </div>
      <div>
        <div class="svc-detail-num"><?= $s['num'] ?></div>
        <h2 class="svc-detail-title"><?= $s['title'] ?></h2>
        <p class="svc-detail-desc"><?= $s['desc'] ?></p>
        <div class="svc-feat-list">
          <?php foreach($s['features'] as $f): ?>
          <span class="svc-feat">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
            <?= $f ?>
          </span>
          <?php endforeach; ?>
        </div>
        <div class="mt-4">
          <a href="contact.php?service=<?= urlencode($s['title']) ?>" class="btn-at btn-sm">
            Enquire Now
            <svg class="btn-icon" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="cta-sec">
  <div class="container text-center position-relative" style="z-index:1;" data-aos="zoom-in">
    <h2 class="cta-title">Not Sure Which Service <span>You Need?</span></h2>
    <p class="section-desc center mt-2 mb-4">Book a free consultation and our experts will guide you to the right solution.</p>
    <a href="contact.php" class="btn-at">
      Book Free Consultation
      <svg class="btn-icon" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
    <div class="cta-phone">
      <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 010 1.19 2 2 0 012 1h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 8.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
      <a href="tel:+380824318088">+38 082 431 8088</a> &nbsp;·&nbsp; Mon–Sat, 9am–6pm
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
