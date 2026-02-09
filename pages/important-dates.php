<style>
/* ===============================
   IMPORTANT DATES – IEEE TIMELINE
   =============================== */

.dates-page {
  max-width: 900px;
  margin: 0 auto;
}

.dates-page h1 {
  font-size: 1.8rem;
  font-weight: 700;
  color: #003b5c; /* IEEE blue */
  margin-bottom: 0.5rem;
}

.dates-page hr {
  border: none;
  border-bottom: 2px solid #1a73e8;
  margin-bottom: 2rem;
}

/* Timeline container */
.timeline {
  position: relative;
  margin-left: 20px;
  padding-left: 30px;
  border-left: 3px solid #dbeafe; /* light IEEE blue */
}

/* Timeline item */
.timeline-item {
  position: relative;
  padding: 0 0 1.8rem 0;
}

/* Dot */
.timeline-item::before {
  content: "";
  position: absolute;
  left: -41px;
  top: 4px;
  width: 14px;
  height: 14px;
  background: #1a73e8;
  border-radius: 50%;
}

/* Title */
.timeline-title {
  font-size: 1rem;
  font-weight: 600;
  color: #1f2937;
  margin-bottom: 0.2rem;
}

/* Date */
.timeline-date {
  font-size: 0.95rem;
  font-weight: 600;
  color: #003b5c;
}

/* Highlight conference dates */
.timeline-item.highlight .timeline-date {
  color: #b91c1c; /* academic red */
}

</style>

<section class="dates-page">

  <h1>Important Dates</h1>
  <hr>

  <div class="timeline">

    <div class="timeline-item">
      <div class="timeline-title">Call for Paper</div>
      <div class="timeline-date">5 July, 2025</div>
    </div>

    <div class="timeline-item">
      <div class="timeline-title">Paper Submission Deadline</div>
      <div class="timeline-date">31 Jan, 2026</div>
    </div>

    <div class="timeline-item">
      <div class="timeline-title">Acceptance Notification</div>
      <div class="timeline-date">28 Feb, 2026</div>
    </div>

    <div class="timeline-item">
      <div class="timeline-title">Camera Ready Submission</div>
      <div class="timeline-date">15 Mar, 2026</div>
    </div>

    <div class="timeline-item">
      <div class="timeline-title">Registration Deadline</div>
      <div class="timeline-date">15 Mar, 2026</div>
    </div>

    <div class="timeline-item highlight">
      <div class="timeline-title">Conference Dates</div>
      <div class="timeline-date">10 – 11 Apr, 2026</div>
    </div>

  </div>

</section>