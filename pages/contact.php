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

    // 🔴 CHANGE EMAIL IF NEEDED
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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us</title>

<!-- =======================
     BOOTSTRAP 5.3 CDN
======================= -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- =======================
     COMPONENT STYLES
======================= -->
<style>
.contact-title {
    color: #003b5c;
}

.contact-box {
    max-width: 900px;
}

.form-control,
.form-control:focus {
    font-size: 16px; /* Prevents iOS zoom */
}

.success-msg {
    color: #2ecc71;
}

.error-msg {
    color: #e74c3c;
}
</style>
</head>

<body>

<section class="container my-4">

    <div class="contact-box mx-auto p-3 p-md-4">

        <h2 class="contact-title fw-bold mb-2">Contact Us</h2>

        <p class="text-secondary small mb-4">
            Thank you for your interest in the ICNDSA conference.
            You should receive a response within 48 hours.
            For any query please contact
            <strong>icndsa@christuniversity.in</strong>.
        </p>

        <!-- =======================
             CONTACT FORM
        ======================= -->
        <form method="POST" class="row g-3">
            <input type="hidden" name="contact_component" value="1">

            <div class="col-12">
                <input type="text" name="name" class="form-control"
                       placeholder="Your Name" required>
            </div>

            <div class="col-12">
                <input type="email" name="email" class="form-control"
                       placeholder="Your Email" required>
            </div>

            <div class="col-12">
                <input type="text" name="country" class="form-control"
                       placeholder="Your Country">
            </div>

            <div class="col-12">
                <input type="text" name="affiliation" class="form-control"
                       placeholder="Your Affiliation">
            </div>

            <div class="col-12">
                <input type="text" name="subject" class="form-control"
                       placeholder="Subject" required>
            </div>

            <div class="col-12">
                <textarea name="message" rows="5" class="form-control"
                          placeholder="Your Message" required></textarea>
            </div>

            <div class="col-12">
                <button type="submit"
                        class="btn btn-primary w-100 py-2">
                    Submit Form
                </button>
            </div>
        </form>

        <!-- =======================
             STATUS MESSAGE
        ======================= -->
        <?php if ($status === "success"): ?>
            <div class="alert alert-success mt-3 py-2">
                Thank you! Your message has been sent.
            </div>
        <?php elseif ($status === "error"): ?>
            <div class="alert alert-danger mt-3 py-2">
                Something went wrong. Please try again.
            </div>
        <?php endif; ?>

    </div>

</section>

</body>
</html>