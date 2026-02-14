<?php
// JSON inside same file
$json = '
{
  "title": "Technical Committee Members",
  "members": [
    { "name": "Shrddha Sagar", "affiliation": "Galgotias University, Greater Noida" },
    { "name": "Smita Sharma", "affiliation": "NIELIT, Delhi" },
    { "name": "Suman Avadesh Yadav", "affiliation": "IILM, Greater Noida" },
    { "name": "B. V. V. Siva Prasad", "affiliation": "Anurag University, Hyderabad" },
    { "name": "Prashant Gupta", "affiliation": "Bennett University, Uttar Pradesh" },
    { "name": "Alka Chaudhary", "affiliation": "Amity University, Noida" },
    { "name": "Komal Saxena", "affiliation": "Amity University, Noida" },
    { "name": "Gurpreet Kaur", "affiliation": "Amity University, Noida" },
    { "name": "Kriti Shukla", "affiliation": "IILM University, Greater Noida" },
    { "name": "Ankur Chaudhary", "affiliation": "NIET, Greater Noida" },
    { "name": "Varun Malik", "affiliation": "Chitkara University, Punjab" },
    { "name": "Misbah Anjum", "affiliation": "Amity University, Noida" },
    { "name": "Puneet Garg", "affiliation": "KIET Group of Institutions, Uttar Pradesh" },
    { "name": "Monika Sharma", "affiliation": "VIPS, Delhi" },
    { "name": "Chetna Sharma", "affiliation": "Chitkara University, Punjab" },
    { "name": "Nidhi Sindhwani", "affiliation": "Amity University, Noida" },
    { "name": "Keshav Kaushik", "affiliation": "Sharda University, Greater Noida" },
    { "name": "Micheal Arowolo", "affiliation": "Xavier University of Louisiana, United States" },
    { "name": "Burhan Abdullah", "affiliation": "Sharda University, Greater Noida" },
    { "name": "Mahendra Gaikwad", "affiliation": "Veermata Jijabai Technological Institute, Mumbai" },
    { "name": "Madhu B", "affiliation": "Dr Ambedkar Institute of Technology, Bengaluru" },
    { "name": "Rakshit Kothari", "affiliation": "MPUAT, Rajasthan" },
    { "name": "Kanika", "affiliation": "L&T Technology Services, Vadodara" },
    { "name": "Mayur Dilip Jhakete", "affiliation": "Pimpri Chinchwad University, Pune" },
    { "name": "Sonia Batra", "affiliation": "BCIIT, Delhi" },
    { "name": "Deepak Dasaratha Rao", "affiliation": "Infosys, USA" },
    { "name": "Suman", "affiliation": "JIMS Rohini, Delhi" }
  ]
}
';

$data = json_decode($json, true);
?>

<style>
/* ===============================
   TECHNICAL COMMITTEE STYLE
   =============================== */

.committee-section {
  max-width: 1000px;
  margin: 0 auto;
}

.committee-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #003b5c;
  border-left: 5px solid #1a73e8;
  padding-left: 12px;
  margin-bottom: 2rem;
}

.committee-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.committee-list li {
  padding: 1rem 0;
  border-bottom: 1px solid #e5e7eb;
}

.committee-list li:last-child {
  border-bottom: none;
}

.member-name {
  font-weight: 600;
  font-size: 1rem;
  color: #111827;
}

.member-affiliation {
  font-size: 0.9rem;
  color: #4b5563;
  margin-top: 2px;
}
</style>

<div class="container py-5 committee-section">

  <div class="committee-title">
    <?= htmlspecialchars($data['title']); ?>
  </div>

  <ul class="committee-list">
    <?php foreach ($data['members'] as $member): ?>
      <li>
        <div class="member-name">
          <?= htmlspecialchars($member['name']); ?>
        </div>
        <div class="member-affiliation">
          <?= htmlspecialchars($member['affiliation']); ?>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>

</div>