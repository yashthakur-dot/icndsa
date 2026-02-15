<?php
declare(strict_types=1);

$status = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['contact_component'])) {
    $name        = trim((string)($_POST['name'] ?? ''));
    $email       = trim((string)($_POST['email'] ?? ''));
    $country     = trim((string)($_POST['country'] ?? ''));
    $affiliation = trim((string)($_POST['affiliation'] ?? ''));
    $subject     = trim((string)($_POST['subject'] ?? ''));
    $message     = trim((string)($_POST['message'] ?? ''));

    // Basic hardening: prevent header injection and overly large payloads.
    $stripCrlf = static fn(string $value): string => str_replace(["\r", "\n"], '', $value);
    $name = $stripCrlf($name);
    $subject = $stripCrlf($subject);
    $email = $stripCrlf($email);
    $message = mb_substr($message, 0, 5000);
    $country = mb_substr($country, 0, 200);
    $affiliation = mb_substr($affiliation, 0, 200);

    $email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : '';

    if ($name === '' || $email === '' || $subject === '' || $message === '') {
        $status = "error";
    } else {
        $to = "icndsa@christuniversity.in";
        $emailSubject = "ICNDSA Contact Form: " . $subject;

        $emailBody = "Name: {$name}\n" .
            "Email: {$email}\n" .
            "Country: {$country}\n" .
            "Affiliation: {$affiliation}\n\n" .
            "Message:\n{$message}\n";

        // Use a fixed From to reduce spoofing issues; keep Reply-To for the user.
        $headers = "From: ICNDSA Website <{$to}>\r\n";
        $headers .= "Reply-To: {$email}\r\n";

        $status = mail($to, $emailSubject, $emailBody, $headers) ? "success" : "error";
    }
}
?>

<section class="container my-4 page-contact">

    <div class="contact-box mx-auto p-3 p-md-4">

        <h2 class="contact-title fw-bold mb-2">Contact Us</h2>

        <p class="text-secondary small mb-4">
            Thank you for your interest in the ICNDSA conference.
            You should receive a response within 48 hours.
            For any query please contact
            <strong>icndsa@christuniversity.in</strong>.
        </p>

        <form method="POST" class="row g-3">
            <input type="hidden" name="contact_component" value="1">

            <div class="col-12">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-12">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>

            <div class="col-12">
                <input type="text" name="country" class="form-control" placeholder="Your Country">
            </div>

            <div class="col-12">
                <input type="text" name="affiliation" class="form-control" placeholder="Your Affiliation">
            </div>

            <div class="col-12">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>

            <div class="col-12">
                <textarea name="message" rows="5" class="form-control" placeholder="Your Message" required></textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100 py-2">Submit Form</button>
            </div>
        </form>

        <?php if ($status === "success"): ?>
            <div class="alert alert-success mt-3 py-2">
                Thank you! Your message has been sent.
            </div>
        <?php elseif ($status === "error"): ?>
            <div class="alert alert-danger mt-3 py-2">
                Something went wrong. Please check the form and try again.
            </div>
        <?php endif; ?>

    </div>

</section>
