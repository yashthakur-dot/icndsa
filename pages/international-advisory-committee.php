<?php
// JSON inside same file
$json = '
{
  "title": "International Advisory Board Members",
  "members": [
    { "name": "Dr Amir H Gandomi", "affiliation": "University of Technology, Sydney, Australia" },
    { "name": "Azween Bin Abdullah", "affiliation": "Perdana University, Malaysia" },
    { "name": "Ahmed A. Elngar", "affiliation": "Beni-Suef University, Egypt" },
    { "name": "Bharanidharan Shanmugam", "affiliation": "Charles Darwin University, Australia" },
    { "name": "Celestine IWENDI", "affiliation": "University of Greater Manchester, Bolton" },
    { "name": "J. Joshua Thomas", "affiliation": "UOW Malaysia, KDU Penang University College" },
    { "name": "Joel J. P. C. Rodrigues", "affiliation": "Federal University of Piaui, Brazil" },
    { "name": "Ghulam E Mustafa Abro", "affiliation": "King Fahd University of Petroleum and Minerals (KFUPM), Saudi Arabia" },
    { "name": "George Sammour", "affiliation": "Dean of King Talal School of Business Technology, Jordan" },
    { "name": "Gianluigi Ferrari", "affiliation": "University of Parma, Italy" },
    { "name": "Mohammad S. Obaidat", "affiliation": "University of Jordan" },
    { "name": "Mayouf Mouna Sarbine", "affiliation": "Scientific Lead, Capgemini Engineering, France" },
    { "name": "Mariya Ouaissa", "affiliation": "Cadi Ayyad University, Marrakech, Morocco" },
    { "name": "Mariyam Ouaissa", "affiliation": "Chouaib Doukkali University, El Jadida, Morocco" },
    { "name": "Raed Masadeh", "affiliation": "University of Jordan, Jordan" },
    { "name": "Surbhi Bhatia", "affiliation": "University of Salford, Manchester, United Kingdom" },
    { "name": "Sérgio D. Correia", "affiliation": "Portalegre Polytechnic University, Portugal" },
    { "name": "S Munimurugan", "affiliation": "University of Tabuk, Saudi Arabia" },
    { "name": "Vishnu S. Pendyala", "affiliation": "University Senator & Faculty in Applied Data Science, San Jose State University, California, USA" },
    { "name": "Vijayakumar Varadarajan", "affiliation": "UTS, Sydney, Australia" },
    { "name": "Zakaria Boulouard", "affiliation": "LIM, Hassan II University of Casablanca, Morocco" }
  ]
}
';

$data = json_decode($json, true);
?>

<style>
/* ===============================
   INTERNATIONAL ADVISORY LIST STYLE
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