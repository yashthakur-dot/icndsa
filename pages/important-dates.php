<style>
/* Vertical line */
.timeline-line {
  position: absolute;
  left: 10px;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: #dbeafe; /* light IEEE blue */
}

/* Dot */
.timeline-dot {
  width: 14px;
  height: 14px;
  background-color: #1a73e8; /* Bootstrap primary */
  border-radius: 50%;
  margin-top: 4px;
  flex-shrink: 0;
}

/* Blinking highlight dot (conference dates) */
.blink-dot {
  background-color: #dc3545;
  animation: blink 1.2s infinite;
}

@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}
</style>
<section class="container my-5" style="max-width: 900px;">

  <h1 class="fw-bold text-primary mb-1">Important Dates</h1>
  <hr class="border-primary border-2 mb-4">

  <div class="position-relative ps-4">

    <!-- Vertical line -->
    <div class="timeline-line"></div>

    <!-- Item -->
    <div class="d-flex gap-3 mb-4 timeline-item">
      <span class="timeline-dot"></span>
      <div>
        <div class="fw-semibold">Call for Paper</div>
        <div class="text-primary fw-semibold">5 July, 2025</div>
      </div>
    </div>

    <div class="d-flex gap-3 mb-4 timeline-item">
      <span class="timeline-dot"></span>
      <div>
        <div class="fw-semibold">Paper Submission Deadline</div>
        <div class="text-primary fw-semibold">31 Jan, 2026</div>
      </div>
    </div>

    <div class="d-flex gap-3 mb-4 timeline-item">
      <span class="timeline-dot"></span>
      <div>
        <div class="fw-semibold">Acceptance Notification</div>
        <div class="text-primary fw-semibold">28 Feb, 2026</div>
      </div>
    </div>

    <div class="d-flex gap-3 mb-4 timeline-item">
      <span class="timeline-dot"></span>
      <div>
        <div class="fw-semibold">Camera Ready Submission</div>
        <div class="text-primary fw-semibold">15 Mar, 2026</div>
      </div>
    </div>

    <div class="d-flex gap-3 mb-4 timeline-item">
      <span class="timeline-dot"></span>
      <div>
        <div class="fw-semibold">Registration Deadline</div>
        <div class="text-primary fw-semibold">15 Mar, 2026</div>
      </div>
    </div>

    <!-- Highlighted -->
    <div class="d-flex gap-3 mb-2 timeline-item">
      <span class="timeline-dot blink-dot"></span>
      <div>
        <div class="fw-bold">Conference Dates</div>
        <div class="fw-bold text-danger">10 – 11 Apr, 2026</div>
      </div>
    </div>

  </div>

</section>