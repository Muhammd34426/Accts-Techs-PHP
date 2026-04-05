<?php
$page_title = 'Contact Us';
$preselect_service = isset($_GET['service']) ? htmlspecialchars($_GET['service']) : '';
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="position:relative;overflow:hidden;">
  <div class="bg-grid"></div>
  <div class="blob blob-blue" style="width:500px;height:500px;top:-100px;left:-100px;opacity:.4;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div data-aos="fade-up">
      <div class="section-tag">Get In Touch</div>
      <h1 class="page-hero-title">Let's <span>Talk</span> Finances</h1>
      <p class="section-desc mt-3">Book a free consultation or reach out with any questions. We're here to help.</p>
      <div class="breadcrumb-at mt-4">
        <a href="index.php">Home</a>
        <span class="breadcrumb-sep">›</span>
        <span>Contact</span>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="section-pad" style="background:var(--dark);position:relative;overflow:hidden;">
  <div class="blob blob-blue" style="width:500px;height:500px;bottom:-100px;right:-100px;opacity:.3;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="contact-wrap" data-aos="fade-up">

      <!-- Info Column -->
      <div class="contact-info">
        <div data-aos="fade-right">
          <div class="section-tag">Contact Info</div>
          <h2 class="section-title" style="font-size:clamp(28px,3.5vw,42px);">We're Ready to <span class="accent">Help</span></h2>
          <p class="section-desc mb-4">Reach us by phone, email, or fill in the form and we'll get back to you within 24 hours.</p>
        </div>

        <div class="cinfo-box">
          <div class="cinfo-icon">
            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 010 1.19 2 2 0 012 1h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 8.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
          </div>
          <div>
            <div class="cinfo-label">Phone / WhatsApp</div>
            <div class="cinfo-val"><a href="tel:+380824318088">+38 082 431 8088</a></div>
          </div>
        </div>

        <div class="cinfo-box">
          <div class="cinfo-icon">
            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div>
            <div class="cinfo-label">Email</div>
            <div class="cinfo-val"><a href="mailto:info@acctstechs.com">info@acctstechs.com</a></div>
          </div>
        </div>

        <div class="cinfo-box">
          <div class="cinfo-icon">
            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <div class="cinfo-label">Office Address</div>
            <div class="cinfo-val">123 Business Avenue, Clifton<br>Karachi, Sindh, Pakistan</div>
          </div>
        </div>

        <div class="cinfo-box">
          <div class="cinfo-icon">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div>
            <div class="cinfo-label">Office Hours</div>
            <div class="cinfo-val">Monday – Saturday<br>9:00 AM – 6:00 PM</div>
          </div>
        </div>

        <!-- Google Maps embed placeholder -->
        <div style="background:var(--dark3);border:1px solid var(--border);border-radius:var(--radius);overflow:hidden;height:200px;display:flex;align-items:center;justify-content:center;flex-direction:column;gap:10px;">
          <svg viewBox="0 0 24 24" style="width:36px;height:36px;stroke:var(--accent);fill:none;stroke-width:1.2;opacity:.5;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <p style="font-size:13px;color:var(--muted);">Replace with Google Maps embed</p>
          <code style="font-size:11px;color:var(--muted);opacity:.6;">&lt;iframe src="https://maps.google.com/..."&gt;</code>
        </div>
      </div>

      <!-- Form Column -->
      <div data-aos="fade-left">
        <div class="contact-form-wrap">
          <h3 style="font-family:var(--font-h);font-size:26px;font-weight:700;color:var(--text);margin-bottom:6px;">Send Us a Message</h3>
          <p style="font-size:13px;color:var(--muted);margin-bottom:28px;">Fill in the form and we'll respond within 24 hours.</p>

          <form id="contactForm" novalidate>
            <div class="form-row">
              <div class="form-group-at">
                <label for="firstName">First Name *</label>
                <input type="text" id="firstName" name="firstName" class="form-control-at" placeholder="Ahmed" required>
                <div class="form-error">First name is required.</div>
              </div>
              <div class="form-group-at">
                <label for="lastName">Last Name *</label>
                <input type="text" id="lastName" name="lastName" class="form-control-at" placeholder="Khan" required>
                <div class="form-error">Last name is required.</div>
              </div>
            </div>

            <div class="form-group-at">
              <label for="email">Email Address *</label>
              <input type="email" id="email" name="email" class="form-control-at" placeholder="ahmed@company.com" required>
              <div class="form-error">Please enter a valid email address.</div>
            </div>

            <div class="form-group-at">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" class="form-control-at" placeholder="+92 300 000 0000">
            </div>

            <div class="form-group-at">
              <label for="service">Service Required</label>
              <select id="service" name="service" class="form-control-at">
                <option value="">— Select a Service —</option>
                <option value="Accounting & Bookkeeping" <?= $preselect_service=='Accounting & Bookkeeping'?'selected':'' ?>>Accounting & Bookkeeping</option>
                <option value="Payroll Management" <?= $preselect_service=='Payroll Management'?'selected':'' ?>>Payroll Management</option>
                <option value="Taxation Services" <?= $preselect_service=='Taxation Services'?'selected':'' ?>>Taxation Services</option>
                <option value="Business Consultancy" <?= $preselect_service=='Business Consultancy'?'selected':'' ?>>Business Consultancy</option>
                <option value="Company Registration" <?= $preselect_service=='Company Registration'?'selected':'' ?>>Company Registration</option>
                <option value="Audit & Assurance" <?= $preselect_service=='Audit & Assurance'?'selected':'' ?>>Audit & Assurance</option>
                <option value="General Inquiry">General Inquiry</option>
              </select>
            </div>

            <div class="form-group-at">
              <label for="company">Company Name</label>
              <input type="text" id="company" name="company" class="form-control-at" placeholder="Your Company Pvt Ltd">
            </div>

            <div class="form-group-at">
              <label for="message">Your Message *</label>
              <textarea id="message" name="message" class="form-control-at" placeholder="Tell us about your requirements…" required></textarea>
              <div class="form-error">Please enter your message.</div>
            </div>

            <button type="submit" class="btn-at w-100 justify-content-center">
              Send Message
              <svg class="btn-icon" viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            </button>

            <!-- Success / Error -->
            <div class="form-success" id="formSuccess">
              <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              Thank you! Your message has been sent. We'll get back to you within 24 hours.
            </div>
            <div class="form-success" id="formError" style="background:rgba(229,85,85,.08);border-color:rgba(229,85,85,.3);color:#e55555;">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              Something went wrong. Please try again or call us directly.
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section-pad" style="background:var(--dark2);">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="section-tag justify-content-center">Common Questions</div>
      <h2 class="section-title">Frequently Asked <span class="accent">Questions</span></h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="80">
          <?php
          $faqs = [
            ['q'=>'How quickly can you start working on my accounts?','a'=>'We can typically onboard a new client within 2–3 business days after receiving the necessary documents and signing our service agreement.'],
            ['q'=>'Do you handle FBR tax notices?','a'=>'Yes, our tax team has extensive experience handling FBR notices, audits, and appeals. We represent clients before tax authorities and work to resolve matters efficiently.'],
            ['q'=>'Is my financial data safe with you?','a'=>'Absolutely. We use enterprise-grade encryption and strict access controls. All client data is handled with complete confidentiality under our professional code of ethics.'],
            ['q'=>'Can you work with businesses in other cities?','a'=>'Yes! We serve clients across Pakistan — including Karachi, Lahore, Islamabad, and beyond — through our secure digital portal and video consultations.'],
            ['q'=>'What documents do I need to get started?','a'=>'Typically, NTN certificate, recent bank statements, existing financial records, and a brief overview of your business operations. We\'ll guide you through the full list during your free consultation.'],
          ];
          foreach($faqs as $i => $faq):
          ?>
          <div class="accordion-item" style="background:var(--card);border:1px solid var(--border);border-radius:var(--radius) !important;margin-bottom:10px;">
            <h2 class="accordion-header">
              <button class="accordion-button <?= $i>0?'collapsed':'' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>"
                style="background:var(--card);color:var(--text);font-size:14px;font-weight:600;border-radius:var(--radius) !important;box-shadow:none;">
                <?= $faq['q'] ?>
              </button>
            </h2>
            <div id="faq<?= $i ?>" class="accordion-collapse collapse <?= $i==0?'show':'' ?>" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="font-size:14px;color:var(--muted);line-height:1.8;padding-top:0;">
                <?= $faq['a'] ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.accordion-button::after { filter:invert(1) opacity(.5); }
.accordion-button:not(.collapsed) { color:var(--accent) !important; }
.accordion-button:not(.collapsed)::after { filter:none; opacity:.8; }
</style>

<?php include 'includes/footer.php'; ?>
