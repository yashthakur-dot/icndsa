<style>
/* ===== Only design-specific overrides ===== */

.registration-title {
  color: #003b5c; /* IEEE blue */
}

.registration-hr {
  border-bottom: 2px solid #1a73e8;
}

.table thead th {
  background-color: #003b5c;
  color: #fff;
  vertical-align: middle;
  border-color: rgba(255,255,255,0.2);
}

.table thead .sub-head th {
  background-color: #e5e7eb;
  color: #1f2937;
  font-size: 0.85rem;
  font-weight: 500;
}

.table-hover tbody tr:hover {
  background-color: #97b2cc !important;
}

.table tbody tr:nth-child(even) {
  background-color: #f9fafb;
}

.table tbody td:first-child {
  text-align: start;
  font-weight: 500;
  color: #003b5c;
}

.note-box {
  background: #fff7d6;
  border-left: 4px solid #facc15;
}

.payment-title {
  color: #003b5c;
}
</style>

<section class="container my-4">

  <!-- Title -->
  <h1 class="registration-title fw-bold fs-4 mb-1">Registration</h1>
  <hr class="registration-hr mb-4">

  <!-- Table -->
  <div class="table-responsive border">
    <table class="table table-bordered table-hover align-middle text-center mb-0">
      <thead>
        <tr>
          <th rowspan="2">Author Category</th>
          <th colspan="2">Indian Delegates (INR)</th>
          <th colspan="2">International Delegates (USD)</th>
        </tr>
        <tr class="sub-head">
          <th>Early Bird<br><small>(10 March, 2026)</small></th>
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

        <tr class="fw-semibold bg-light">
          <td>Only Attending</td>
          <td>₹ 2000</td>
          <td>₹ 2500</td>
          <td>$ 50</td>
          <td>$ 100</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Note -->
  <div class="note-box p-3 mt-4 small text-dark">
    <strong>Note:</strong> Registration fee is exclusive of 18% GST.
    Registration fees will increase by <strong>10% per page</strong> if the
    number of pages exceeds 6.
  </div>

  <!-- Payment -->
  <div class="mt-4">
    <h2 class="payment-title fw-semibold fs-5 mb-2">Payment Instructions</h2>

    <p class="mb-2">
      <strong>For Indian Delegates:</strong>
      Payment can be made through NEFT/RTGS. Details will be provided soon.
      Please check back for updates.
    </p>

    <p class="mb-0">
      <strong>For Foreign Delegates:</strong>
      Payment can be made through SWIFT/Wire transfer. Details will be provided
      soon. Please check back for updates.
    </p>
  </div>

</section>