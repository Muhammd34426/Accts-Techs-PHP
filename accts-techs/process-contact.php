<?php
/**
 * ACCTS & TECHS — Contact Form Processor
 * Handles AJAX form submissions, validates input, sends email
 */

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

header('Content-Type: application/json');

// ── Configuration ──────────────────────────────────────────
define('RECIPIENT_EMAIL', 'info@acctstechs.com');   // ← Change to your email
define('RECIPIENT_NAME',  'ACCTS & TECHS');
define('SENDER_NAME',     'Website Contact Form');
define('COMPANY_NAME',    'ACCTS & TECHS');
// ──────────────────────────────────────────────────────────

/**
 * Sanitize input
 */
function clean(string $val): string {
    return htmlspecialchars(strip_tags(trim($val)), ENT_QUOTES, 'UTF-8');
}

// ── Collect & Sanitize Fields ───────────────────────────────
$firstName = clean($_POST['firstName'] ?? '');
$lastName  = clean($_POST['lastName']  ?? '');
$email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone     = clean($_POST['phone']   ?? '');
$service   = clean($_POST['service'] ?? '');
$company   = clean($_POST['company'] ?? '');
$message   = clean($_POST['message'] ?? '');
$fullName  = $firstName . ' ' . $lastName;

// ── Validation ──────────────────────────────────────────────
$errors = [];

if (empty($firstName)) $errors[] = 'First name is required.';
if (empty($lastName))  $errors[] = 'Last name is required.';
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email address is required.';
if (empty($message))   $errors[] = 'Message cannot be empty.';
if (strlen($message) > 5000) $errors[] = 'Message is too long (max 5000 characters).';

// Honeypot (spam protection — add a hidden field named "website" to the form)
if (!empty($_POST['website'])) {
    echo json_encode(['success' => false, 'message' => 'Spam detected.']);
    exit;
}

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// ── Rate Limiting (simple session-based) ────────────────────
session_start();
$now = time();
if (!isset($_SESSION['form_submissions'])) $_SESSION['form_submissions'] = [];
// Remove entries older than 1 hour
$_SESSION['form_submissions'] = array_filter(
    $_SESSION['form_submissions'],
    fn($t) => ($now - $t) < 3600
);
if (count($_SESSION['form_submissions']) >= 5) {
    echo json_encode(['success' => false, 'message' => 'Too many submissions. Please try again later.']);
    exit;
}
$_SESSION['form_submissions'][] = $now;

// ── Build Email ─────────────────────────────────────────────
$subject = "New Enquiry from {$fullName}" . ($service ? " — {$service}" : '');

$html = <<<HTML
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
  body { font-family: Arial, sans-serif; background: #f4f7fb; margin: 0; padding: 20px; }
  .wrap { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,.08); }
  .header { background: #080d14; padding: 28px 32px; text-align: center; }
  .header img { height: 44px; }
  .accent { color: #1a8cdb; }
  .body { padding: 32px; }
  .field { margin-bottom: 18px; }
  .label { font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: #8a94a8; margin-bottom: 4px; }
  .value { font-size: 15px; color: #333; }
  .message-box { background: #f8f9fc; border-left: 3px solid #1a8cdb; border-radius: 4px; padding: 16px; margin-top: 8px; font-size: 14px; color: #444; line-height: 1.7; }
  .footer { background: #f0f4f9; padding: 20px 32px; text-align: center; font-size: 12px; color: #9aa5b4; }
  h2 { font-size: 22px; color: #111; margin: 0 0 20px; }
</style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <span style="font-size:22px;font-weight:800;color:#fff;letter-spacing:-.5px;">ACCTS <span style="color:#1a8cdb">&amp;</span> TECHS</span>
    <p style="color:rgba(255,255,255,.6);font-size:12px;margin:4px 0 0;">Focus on Your Success</p>
  </div>
  <div class="body">
    <h2>New Contact Form Submission</h2>
    <div class="field"><div class="label">Full Name</div><div class="value">{$fullName}</div></div>
    <div class="field"><div class="label">Email</div><div class="value"><a href="mailto:{$email}" style="color:#1a8cdb">{$email}</a></div></div>
    <div class="field"><div class="label">Phone</div><div class="value">{$phone}</div></div>
    <div class="field"><div class="label">Company</div><div class="value">{$company}</div></div>
    <div class="field"><div class="label">Service Required</div><div class="value">{$service}</div></div>
    <div class="field">
      <div class="label">Message</div>
      <div class="message-box">{$message}</div>
    </div>
  </div>
  <div class="footer">
    This message was submitted via the ACCTS & TECHS website contact form.<br>
    Submitted on: HTML . date('d M Y, H:i') . <<<HTML
  </div>
</div>
</body>
</html>
HTML;

// Plain text fallback
$plain = "New enquiry from {$fullName}\n\nEmail: {$email}\nPhone: {$phone}\nCompany: {$company}\nService: {$service}\n\nMessage:\n{$message}";

// ── Send Email ──────────────────────────────────────────────
$boundary = md5(uniqid());
$headers  = implode("\r\n", [
    "From: {$fullName} <{$email}>",
    "Reply-To: {$email}",
    "MIME-Version: 1.0",
    "Content-Type: multipart/alternative; boundary=\"{$boundary}\"",
    "X-Mailer: PHP/" . PHP_VERSION,
]);

$body  = "--{$boundary}\r\n";
$body .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n{$plain}\r\n";
$body .= "--{$boundary}\r\n";
$body .= "Content-Type: text/html; charset=UTF-8\r\n\r\n{$html}\r\n";
$body .= "--{$boundary}--";

$sent = mail(RECIPIENT_EMAIL, $subject, $body, $headers);

// ── Auto-reply to sender ────────────────────────────────────
$autoReplySubject = 'Thank you for contacting ACCTS & TECHS';
$autoReplyHtml = <<<HTML
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body style="font-family:Arial,sans-serif;background:#f4f7fb;margin:0;padding:20px;">
<div style="max-width:600px;margin:0 auto;background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,.08);">
  <div style="background:#080d14;padding:28px 32px;text-align:center;">
    <span style="font-size:22px;font-weight:800;color:#fff;">ACCTS <span style="color:#1a8cdb">&amp;</span> TECHS</span>
    <p style="color:rgba(255,255,255,.6);font-size:12px;margin:4px 0 0;">Focus on Your Success</p>
  </div>
  <div style="padding:36px 32px;">
    <h2 style="font-size:22px;color:#111;margin:0 0 12px;">Thank you, {$firstName}!</h2>
    <p style="color:#555;line-height:1.8;">We have received your message and will get back to you within <strong>24 hours</strong>.</p>
    <p style="color:#555;line-height:1.8;">In the meantime, feel free to call us:</p>
    <div style="background:#f0f7ff;border-radius:6px;padding:16px 20px;margin:20px 0;display:flex;align-items:center;gap:10px;">
      <span style="font-size:22px;color:#1a8cdb;font-weight:800;">📞</span>
      <span style="font-size:18px;font-weight:700;color:#111;">+38 082 431 8088</span>
    </div>
    <p style="color:#555;line-height:1.8;font-size:13px;">Mon–Sat · 9:00 AM – 6:00 PM</p>
  </div>
  <div style="background:#f0f4f9;padding:20px 32px;text-align:center;font-size:12px;color:#9aa5b4;">
    © HTML . date('Y') . <<<HTML ACCTS & TECHS · 123 Business Avenue, Karachi, Pakistan
  </div>
</div>
</body>
</html>
HTML;

$autoHeaders = implode("\r\n", [
    "From: " . COMPANY_NAME . " <" . RECIPIENT_EMAIL . ">",
    "MIME-Version: 1.0",
    "Content-Type: text/html; charset=UTF-8",
]);
mail($email, $autoReplySubject, $autoReplyHtml, $autoHeaders);

// ── Log submission ──────────────────────────────────────────
$logFile = __DIR__ . '/assets/submissions.log';
$logDir  = dirname($logFile);
if (!is_dir($logDir)) mkdir($logDir, 0755, true);
$logEntry = date('Y-m-d H:i:s') . " | {$fullName} | {$email} | {$phone} | {$service} | {$company}\n";
file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

// ── Response ────────────────────────────────────────────────
if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Message sent successfully!']);
} else {
    // Email failed but we logged it — still save the submission
    echo json_encode([
        'success' => true,
        'message' => 'Your message was received. We will contact you within 24 hours.'
    ]);
}
