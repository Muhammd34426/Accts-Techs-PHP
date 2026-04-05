# ACCTS & TECHS — Website Setup Guide

## 📁 Project Structure
```
accts-techs/
├── index.php           ← Home page
├── about.php           ← About Us, Mission, Team
├── services.php        ← All 6 services in detail
├── contact.php         ← Contact form
├── process-contact.php ← PHP form backend
├── includes/
│   ├── header.php      ← Common nav/head
│   └── footer.php      ← Common footer/scripts
├── css/
│   └── style.css       ← All styles
├── js/
│   └── main.js         ← All JavaScript
├── images/
│   └── logo.png        ← Your logo
└── assets/
    └── submissions.log ← Auto-created on first submission
```

## ⚙️ Requirements
- **PHP 7.4+** (for form processing)
- **Web server**: Apache or Nginx (XAMPP / WAMP / LAMP / cPanel)
- **Internet connection** for CDN libraries (Bootstrap, AOS, Swiper, GSAP)

## 🚀 Local Setup (XAMPP)
1. Copy the `accts-techs/` folder to `C:/xampp/htdocs/`
2. Start Apache from XAMPP Control Panel
3. Open browser → `http://localhost/accts-techs/`

## 🌐 Live Server (cPanel / Hosting)
1. Upload all files to `public_html/` via FTP or File Manager
2. Set file permissions: `assets/` folder → 755, PHP files → 644
3. Open `process-contact.php` and update:
   ```php
   define('RECIPIENT_EMAIL', 'your@email.com');
   define('RECIPIENT_NAME',  'Your Name');
   ```

## 📧 Email Configuration
The contact form uses PHP's `mail()` function.

**For better deliverability**, replace `mail()` in `process-contact.php` with:
- **PHPMailer** with SMTP (Gmail/Office365)
- **SendGrid** API
- **Mailgun** API

### PHPMailer Example (SMTP):
```php
// Install: composer require phpmailer/phpmailer
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'your@gmail.com';
$mail->Password   = 'your_app_password';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;
```

## 🗺️ Google Maps
In `contact.php`, replace the placeholder div with:
```html
<iframe
  src="https://www.google.com/maps/embed?pb=YOUR_EMBED_URL"
  width="100%" height="200" style="border:0;border-radius:6px;"
  allowfullscreen="" loading="lazy">
</iframe>
```

## 🎨 Customization
| What to change | File | Variable/Selector |
|---|---|---|
| Brand colors | `css/style.css` | `--accent`, `--dark` |
| Phone number | `includes/header.php` | Topbar |
| Email address | `process-contact.php` | `RECIPIENT_EMAIL` |
| Pricing | `index.php` | Pricing section |
| Team members | `about.php` | `$team` array |
| Services | `services.php` | `$services` array |

## 📦 Libraries Used (CDN)
| Library | Purpose |
|---|---|
| Bootstrap 5.3 | Layout, grid, navbar, accordion |
| AOS 2.3 | Scroll reveal animations |
| Swiper 11 | Testimonials slider |
| GSAP 3.12 | Hero entrance animations |

## 🔒 Security Notes
- All form inputs are sanitized with `htmlspecialchars()` + `strip_tags()`
- Email addresses validated with `FILTER_VALIDATE_EMAIL`
- Simple session-based rate limiting (5 submissions/hour)
- Honeypot field support (add `<input type="text" name="website" style="display:none">`)

---
Built with HTML · CSS · JavaScript · Bootstrap 5 · PHP
