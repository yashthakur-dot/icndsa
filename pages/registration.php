<style>
/* ===============================
   REGISTRATION – MODERN IEEE
   =============================== */

.registration-page {
  max-width: 1100px;
  margin: 0 auto;
  padding-bottom: 2rem;
}

.registration-page h1 {
  font-size: 1.9rem;
  font-weight: 700;
  color: #003b5c; /* IEEE blue */
  margin-bottom: 0.4rem;
}

.registration-page hr {
  border: none;
  border-bottom: 2px solid #1a73e8;
  margin-bottom: 1.8rem;
}

/* Table wrapper */
.table-wrapper {
  overflow-x: auto;
  border: 1px solid #e5e7eb;
}

/* Table */
.registration-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.95rem;
}

/* Header */
.registration-table thead th {
  background: #003b5c;
  color: #ffffff;
  padding: 0.9rem;
  text-align: center;
  font-weight: 600;
  border-right: 1px solid rgba(255,255,255,0.2);
}

.registration-table thead th:last-child {
  border-right: none;
}

/* Sub header */
.registration-table thead tr.sub-head th {
  background: #e5e7eb;
  color: #1f2937;
  font-size: 0.85rem;
  font-weight: 500;
}

/* Body */
.registration-table td {
  padding: 0.85rem;
  border-bottom: 1px solid #e5e7eb;
  text-align: center;
}

.registration-table tbody tr:hover {
  background: #97b2cc !important;
}

.registration-table tbody tr:nth-child(even) {
  background: #f9fafb;
}

.registration-table tbody td:first-child {
  text-align: left;
  font-weight: 500;
  color: #003b5c;
}

/* Highlight conference important row */
.registration-table tbody tr:last-child {
  background: #f1f5f9;
  font-weight: 600;
}

/* Note box */
.note-box {
  margin-top: 1.5rem;
  background: #fff7d6;
  border-left: 4px solid #facc15;
  padding: 0.9rem 1rem;
  font-size: 0.9rem;
  color: #1f2937;
}

/* Payment section */
.payment-section {
  margin-top: 2rem;
}

.payment-section h2 {
  font-size: 1.2rem;
  font-weight: 600;
  color: #003b5c;
  margin-bottom: 0.6rem;
}

.payment-section p {
  line-height: 1.6;
  font-size: 0.95rem;
  color: #1f2937;
  margin-bottom: 0.6rem;
}

/* Responsive */
@media (max-width: 768px) {
  .registration-page h1 {
    font-size: 1.6rem;
  }
}
</style>

<section class="registration-page">

  <h1>Registration</h1>
  <hr>

  <div class="table-wrapper">
    <table class="registration-table">
      <thead>
        <tr>
          <th rowspan="2">Author Category</th>
          <th colspan="2">Indian Delegates (INR)</th>
          <th colspan="2">International Delegates (USD)</th>
        </tr>
        <tr class="sub-head">
          <th>Early Bird<br>(10 March, 2026)</th>
          <th>Regular</th>
          <th>Early Bird</th>
          <th>Regular</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>IEEE Student Member</td>
          <td>₹ 7000</td>
          <td>₹ 8000</td>
          <td>$ 150</td>
          <td>$ 200</td>
        </tr>

        <tr>
          <td>Non-IEEE Student Member</td>
          <td>₹ 8000</td>
          <td>₹ 9000</td>
          <td>$ 200</td>
          <td>$ 250</td>
        </tr>

        <tr>
          <td>IEEE Professional Member</td>
          <td>₹ 7500</td>
          <td>₹ 8500</td>
          <td>$ 250</td>
          <td>$ 300</td>
        </tr>

        <tr>
          <td>Non-IEEE Professional Member</td>
          <td>₹ 8500</td>
          <td>₹ 9500</td>
          <td>$ 300</td>
          <td>$ 350</td>
        </tr>

        <tr>
          <td>Only Attending</td>
          <td>₹ 2000</td>
          <td>₹ 2500</td>
          <td>$ 50</td>
          <td>$ 100</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="note-box">
    <strong>Note:</strong> Registration fee is exclusive of 18% GST.
    Registration fees will increase by <strong>10% per page</strong> if the
    number of pages exceeds 6.
  </div>

  <div class="payment-section">
    <h2>Payment Instructions</h2>

    <p>
      <strong>For Indian Delegates:</strong> Payment can be made through
      NEFT/RTGS. Details will be provided soon. Please check back for updates.
    </p>

    <p>
      <strong>For Foreign Delegates:</strong> Payment can be made through
      SWIFT/Wire transfer. Details will be provided soon. Please check back for
      updates.
    </p>
  </div>

</section>