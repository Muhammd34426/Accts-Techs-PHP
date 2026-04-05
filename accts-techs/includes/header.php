<?php
// includes/header.php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ACCTS & TECHS — Professional accounting, taxation, payroll, and business consultancy services. Focus on your success.">
  <meta name="keywords" content="accounting, taxation, payroll, bookkeeping, audit, business consultancy, company registration, Pakistan">
  <meta property="og:title" content="ACCTS & TECHS — Focus on Your Success">
  <meta property="og:description" content="Professional financial solutions for businesses of all sizes.">
  <title><?php echo isset($page_title) ? $page_title . ' | ACCTS & TECHS' : 'ACCTS & TECHS — Focus on Your Success'; ?></title>

  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <!-- AOS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>

<!-- Page Loader -->
<div id="pageLoader" style="
  position:fixed;inset:0;background:#080d14;z-index:9999;
  display:flex;align-items:center;justify-content:center;
  transition:opacity .5s;
">
  <div style="text-align:center">
    <img src="images/logo.png" alt="ACCTS & TECHS" style="height:52px;animation:spin 1.2s linear infinite;opacity:.8">
    <style>@keyframes spin{from{transform:rotate(0deg)}to{transform:rotate(360deg)}}</style>
  </div>
</div>

<!-- Top Bar -->
<div class="topbar">
  <div class="container topbar-inner">
    <div class="topbar-social">
      <a href="#" aria-label="Facebook">
        <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg> Facebook
      </a>
      <a href="#" aria-label="LinkedIn">
        <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg> LinkedIn
      </a>
      <a href="#" aria-label="Twitter">
        <svg viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg> Twitter
      </a>
    </div>
    <div class="topbar-contact">
      <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 010 1.19 2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 8.91a16 16 0 006.16 6.16l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
      +38 082 431 8088
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar-at navbar navbar-expand-lg" id="mainNav">
  <div class="container">
    <div class="nav-inner w-100">
      <!-- Logo -->
      <a class="nav-logo" href="index.php">
        <img src="images/logo.png" alt="ACCTS & TECHS Logo">
      </a>

      <!-- Mobile Toggle -->
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Nav links -->
      <div class="collapse navbar-collapse" id="navCollapse">
        <ul class="nav-menu ms-auto me-3">
          <li class="nav-item">
            <a class="nav-link <?= $current_page == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $current_page == 'about.php' ? 'active' : '' ?>" href="about.php" data-bs-toggle="dropdown">Corporation</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about.php#about">About Us</a></li>
              <li><a class="dropdown-item" href="about.php#mission">Mission & Vision</a></li>
              <li><a class="dropdown-item" href="about.php#team">Team Members</a></li>
              <li><a class="dropdown-item" href="index.php#pricing">Prices</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $current_page == 'services.php' ? 'active' : '' ?>" href="services.php" data-bs-toggle="dropdown">Services</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="services.php#bookkeeping">Accounting & Bookkeeping</a></li>
              <li><a class="dropdown-item" href="services.php#payroll">Payroll Management</a></li>
              <li><a class="dropdown-item" href="services.php#taxation">Taxation Services</a></li>
              <li><a class="dropdown-item" href="services.php#consultancy">Business Consultancy</a></li>
              <li><a class="dropdown-item" href="services.php#registration">Company Registration</a></li>
              <li><a class="dropdown-item" href="services.php#audit">Audit & Assurance</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $current_page == 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact</a>
          </li>
        </ul>
        <div class="nav-cta">
          <a href="contact.php" class="btn-at btn-sm d-none-mob">
            Free Consultation
            <svg class="btn-icon" viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</nav>
