/* ============================================================
   ACCTS & TECHS — Main JavaScript
============================================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* ── 1. AOS Init ── */
  AOS.init({
    duration: 750,
    easing: 'ease-out-cubic',
    once: true,
    offset: 60,
  });

  /* ── 2. Sticky nav scroll class ── */
  const navbar = document.getElementById('mainNav');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 50);
    }, { passive: true });
  }

  /* ── 3. Active nav link ── */
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-menu .nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href && (href === currentPage || href.includes(currentPage))) {
      link.classList.add('active');
    }
  });

  /* ── 4. Back to top ── */
  const backTop = document.getElementById('backTop');
  if (backTop) {
    window.addEventListener('scroll', () => {
      backTop.classList.toggle('show', window.scrollY > 400);
    }, { passive: true });
    backTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  /* ── 5. Typed effect (hero) ── */
  const typedEl = document.querySelector('.typed-text');
  if (typedEl) {
    const words = ['Accounting', 'Taxation', 'Payroll', 'Compliance', 'Growth'];
    let wi = 0, ci = 0, deleting = false;
    const type = () => {
      const word = words[wi];
      typedEl.textContent = deleting ? word.substring(0, ci--) : word.substring(0, ci++);
      if (!deleting && ci === word.length + 1) { deleting = true; setTimeout(type, 1600); return; }
      if (deleting && ci === 0) { deleting = false; wi = (wi + 1) % words.length; }
      setTimeout(type, deleting ? 60 : 100);
    };
    type();
  }

  /* ── 6. Stats counter ── */
  const counters = document.querySelectorAll('.stat-num[data-target]');
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el     = entry.target;
      const target = +el.dataset.target;
      const suffix = el.dataset.suffix || '';
      const prefix = el.dataset.prefix || '';
      const dur    = 1800;
      let start    = null;
      const step = ts => {
        if (!start) start = ts;
        const p = Math.min((ts - start) / dur, 1);
        const ease = 1 - Math.pow(1 - p, 3);
        el.textContent = prefix + Math.floor(ease * target) + suffix;
        if (p < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
      counterObserver.unobserve(el);
      el.closest('.stat-box')?.classList.add('in-view');
    });
  }, { threshold: 0.5 });
  counters.forEach(el => counterObserver.observe(el));

  /* ── 7. Swiper Testimonials ── */
  if (document.querySelector('.swiper-testi')) {
    new Swiper('.swiper-testi', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: { delay: 5000, disableOnInteraction: false },
      pagination: { el: '.swiper-pagination', clickable: true },
      breakpoints: {
        640:  { slidesPerView: 1 },
        900:  { slidesPerView: 2 },
        1100: { slidesPerView: 3 },
      }
    });
  }

  /* ── 8. GSAP hero animations ── */
  if (typeof gsap !== 'undefined' && document.querySelector('.home-hero')) {
    const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    tl.from('.hero-badge',   { opacity: 0, y: 24, duration: .6 })
      .from('.hero-title .line', { opacity: 0, y: 40, stagger: .12, duration: .7 }, '-=.2')
      .from('.hero-desc',   { opacity: 0, y: 24, duration: .6 }, '-=.3')
      .from('.hero-actions',{ opacity: 0, y: 20, duration: .5 }, '-=.3')
      .from('.hero-trust',  { opacity: 0, y: 16, duration: .5 }, '-=.2')
      .from('.dash-card',   { opacity: 0, x: 60, duration: .8 }, '-=.9')
      .from('.fb-1',        { opacity: 0, x: 24, duration: .5 }, '-=.4')
      .from('.fb-2',        { opacity: 0, x: -24, duration: .5 }, '-=.4');
  }

  /* ── 9. Smooth scroll for anchor links ── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href').slice(1);
      const el = document.getElementById(id);
      if (el) {
        e.preventDefault();
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  /* ── 10. Form validation & AJAX submit ── */
  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', async e => {
      e.preventDefault();
      let valid = true;

      form.querySelectorAll('[required]').forEach(field => {
        const err = field.nextElementSibling;
        if (!field.value.trim()) {
          field.classList.add('invalid');
          if (err && err.classList.contains('form-error')) err.style.display = 'block';
          valid = false;
        } else {
          field.classList.remove('invalid');
          if (err && err.classList.contains('form-error')) err.style.display = 'none';
        }
      });

      const emailField = form.querySelector('[type="email"]');
      if (emailField && emailField.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value)) {
        emailField.classList.add('invalid');
        const err = emailField.nextElementSibling;
        if (err) { err.textContent = 'Please enter a valid email.'; err.style.display = 'block'; }
        valid = false;
      }

      if (!valid) return;

      const btn = form.querySelector('[type="submit"]');
      const origText = btn.innerHTML;
      btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending…';
      btn.disabled = true;

      try {
        const resp = await fetch('process-contact.php', {
          method: 'POST',
          body: new FormData(form)
        });
        const data = await resp.json();
        const successBox = document.getElementById('formSuccess');
        const errorBox   = document.getElementById('formError');
        if (data.success) {
          form.reset();
          if (successBox) { successBox.style.display = 'flex'; }
        } else {
          if (errorBox) { errorBox.style.display = 'flex'; errorBox.textContent = data.message || 'Something went wrong.'; }
        }
      } catch {
        const errorBox = document.getElementById('formError');
        if (errorBox) { errorBox.style.display = 'flex'; errorBox.textContent = 'Network error. Please try again.'; }
      } finally {
        btn.innerHTML = origText;
        btn.disabled  = false;
      }
    });

    /* Real-time clear invalid on input */
    form.querySelectorAll('.form-control-at').forEach(field => {
      field.addEventListener('input', () => {
        field.classList.remove('invalid');
        const err = field.nextElementSibling;
        if (err && err.classList.contains('form-error')) err.style.display = 'none';
      });
    });
  }

  /* ── 11. Navbar collapse on mobile link click ── */
  document.querySelectorAll('.nav-menu .nav-link').forEach(link => {
    link.addEventListener('click', () => {
      const collapse = document.getElementById('navCollapse');
      if (collapse && collapse.classList.contains('show')) {
        bootstrap.Collapse.getInstance(collapse)?.hide();
      }
    });
  });

  /* ── 12. Page loader ── */
  const loader = document.getElementById('pageLoader');
  if (loader) {
    window.addEventListener('load', () => {
      loader.style.opacity = '0';
      setTimeout(() => loader.remove(), 500);
    });
  }

});
