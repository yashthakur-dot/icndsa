<?php
// =======================
// EMAIL HANDLER
// =======================
$status = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['contact_component'])) {

    $name        = trim($_POST['name']);
    $email       = trim($_POST['email']);
    $country     = trim($_POST['country']);
    $affiliation = trim($_POST['affiliation']);
    $subject     = trim($_POST['subject']);
    $message     = trim($_POST['message']);

    // 🔴 CHANGE TO YOUR EMAIL
    $to = "icndsa@christuniversity.in";

    $email_subject = "ICNDSA Contact Form: " . $subject;

    $email_body = "
Name: $name
Email: $email
Country: $country
Affiliation: $affiliation

Message:
$message
";

    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $status = mail($to, $email_subject, $email_body, $headers)
        ? "success"
        : "error";
}
?>

<!-- =======================
     MOBILE-FIRST STYLES
======================= -->
<style>
/* ===== Mobile First (default) ===== */
.icndsa-contact {
    width: 100%;
    padding: 20px 16px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Arial, sans-serif;
}

.icndsa-contact h2 {
    font-size: 22px;
    margin-bottom: 8px;
}

.icndsa-contact p {
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 20px;
    color: #333;
}

.icndsa-contact input,
.icndsa-contact textarea {
    width: 100%;
    padding: 14px;
    margin-bottom: 14px;
    font-size: 16px; /* Prevents zoom on iOS */
    border: 1px solid #ccc;
    border-radius: 8px;
}

.icndsa-contact textarea {
    min-height: 130px;
    resize: vertical;
}

.icndsa-contact button {
    width: 100%;
    padding: 16px;
    font-size: 16px;
    border-radius: 8px;
    border: none;
    background-color: #3498db;
    color: #fff;
    cursor: pointer;
}

.icndsa-contact button:active {
    transform: scale(0.98);
}

.icndsa-contact .success,
.icndsa-contact .error {
    margin-top: 16px;
    font-size: 14px;
}

.icndsa-contact .success {
    color: #2ecc71;
}

.icndsa-contact .error {
    color: #e74c3c;
}

/* ===== Tablets (≥ 600px) ===== */
@media (min-width: 600px) {
    .icndsa-contact {
        max-width: 700px;
        margin: 40px auto;
        padding: 30px;
    }

    .icndsa-contact h2 {
        font-size: 26px;
    }

    .icndsa-contact p {
        font-size: 15px;
    }
}

/* ===== Desktop (≥ 992px) ===== */
@media (min-width: 992px) {
    .icndsa-contact {
        max-width: 900px;
        padding: 40px;
    }

    .icndsa-contact h2 {
        font-size: 28px;
    }
}
</style>

<!-- =======================
     COMPONENT MARKUP
======================= -->
<div class="icndsa-contact">
    <h2>Contact Us</h2>
    <p>
        Thank you for your interest in the ICNDSA conference.
        You should receive a response within 48 hours.
        For any query please contact
        <strong>icndsa@christuniversity.in</strong>.
    </p>

    <form method="POST">
        <input type="hidden" name="contact_component" value="1">

        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="country" placeholder="Your Country">
        <input type="text" name="affiliation" placeholder="Your Affiliation">
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Your Message" required></textarea>

        <button type="submit">Submit Form</button>
    </form>

    <?php if ($status === "success"): ?>
        <div class="success">Thank you! Your message has been sent.</div>
    <?php elseif ($status === "error"): ?>
        <div class="error">Something went wrong. Please try again.</div>
    <?php endif; ?>
</div>