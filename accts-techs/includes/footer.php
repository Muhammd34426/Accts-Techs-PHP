<?php // includes/footer.php ?>

<!-- ============================================================
     FOOTER
============================================================ -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">

      <!-- Brand -->
      <div>
        <div class="footer-logo">
          <img src="images/logo.png" alt="ACCTS & TECHS">
        </div>
        <p class="footer-about-text">
          Your trusted financial partner — providing professional accounting,
          taxation, payroll, and business consultancy services since 2010.
          Focus on your success; we handle the numbers.
        </p>
        <div class="social-row">
          <a href="#" aria-label="Facebook">
            <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
          </a>
          <a href="#" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          <a href="#" aria-label="Twitter">
            <svg viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
          </a>
          <a href="#" aria-label="Instagram">
            <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
          </a>
        </div>
      </div>

      <!-- Services links -->
      <div class="footer-col">
        <h4>Services</h4>
        <ul>
          <li><a href="services.php#bookkeeping">Accounting & Bookkeeping</a></li>
          <li><a href="services.php#payroll">Payroll Management</a></li>
          <li><a href="services.php#taxation">Taxation Services</a></li>
          <li><a href="services.php#consultancy">Business Consultancy</a></li>
          <li><a href="services.php#registration">Company Registration</a></li>
          <li><a href="services.php#audit">Audit & Assurance</a></li>
        </ul>
      </div>

      <!-- Company links -->
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="about.php#about">About Us</a></li>
          <li><a href="about.php#mission">Mission & Vision</a></li>
          <li><a href="about.php#team">Team Members</a></li>
          <li><a href="index.php#pricing">Pricing</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-col">
        <h4>Contact Us</h4>
        <div class="footer-contact-list">
          <div class="fci">
            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 010 1.19 2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 8.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            <div><a href="tel:+380824318088">+38 082 431 8088</a></div>
          </div>
          <div class="fci">
            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <div><a href="mailto:info@acctstechs.com">info@acctstechs.com</a></div>
          </div>
          <div class="fci">
            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <div>123 Business Ave, Karachi, Pakistan</div>
          </div>
          <div class="fci">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <div>Mon–Sat: 9:00 AM – 6:00 PM</div>
          </div>
        </div>
      </div>

    </div><!-- /footer-top -->
  </div>

  <!-- Bottom bar -->
  <div style="border-top:1px solid var(--border)">
    <div class="container">
      <div class="footer-bottom">
        <span>© <?= date('Y') ?> ACCTS & TECHS. All rights reserved.</span>
        <span>Designed for <a href="#">your financial success</a></span>
      </div>
    </div>
  </div>
</footer>

<!-- Back to Top -->
<button class="back-top" id="backTop" aria-label="Back to top">
  <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
