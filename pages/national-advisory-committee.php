<?php
// JSON inside same file
$json = '
{
  "title": "National Advisory Committee",
  "members": [
    { "name": "Ajay Vikram Singh", "affiliation": "Amity University, Noida, India" },
    { "name": "Achyut Shankar", "affiliation": "Bennet University, India" },
    { "name": "Aanjey Mani Tripathi", "affiliation": "Galgotias University, India" },
    { "name": "Rahul Johari", "affiliation": "Guru Gobind Singh Indraprastha University, Delhi, India" },
    { "name": "Nitin Pandey", "affiliation": "Galgotias University, India" },
    { "name": "Munish Sabharwal", "affiliation": "IILM University, U.P, India" },
    { "name": "Rajesh Kumar Dhanaraj", "affiliation": "Symbiosis International University, Pune, India" },
    { "name": "Pethuru Raj", "affiliation": "Chief Architect & Vice President, Reliance Jio Platforms Ltd., Bengaluru, India" },
    { "name": "Amanpreet Kaur", "affiliation": "Chitkara University, Punjab, India" },
    { "name": "Manik Rakhra", "affiliation": "Lovely Professional University, Punjab, India" }
  ]
}
';

$data = json_decode($json, true);
?>

<style>
/* ===============================
   NATIONAL ADVISORY COMMITTEE
   =============================== */

.advisory-section {
  max-width: 1000px;
  margin: 0 auto;
}

.advisory-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #003b5c;
  border-left: 5px solid #1a73e8;
  padding-left: 12px;
  margin-bottom: 2rem;
}

.advisory-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.advisory-list li {
  padding: 1rem 0;
  border-bottom: 1px solid #e5e7eb;
}

.advisory-list li:last-child {
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

<div class="container py-5 advisory-section">

  <div class="advisory-title">
    <?= htmlspecialchars($data['title']); ?>
  </div>

  <ul class="advisory-list">
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