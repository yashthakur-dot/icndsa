<?php
/* Venue Component – Bootstrap 5.3 */
?>

<style>
/* Only what Bootstrap cannot do alone */

/* Smooth image fit */
.venue-img img {
    object-fit: cover;
}

/* Optional: limit image height on small screens */
@media (max-width: 575.98px) {
    .venue-img img {
        max-height: 220px;
    }
}
</style>

<div class="container">

    <!-- Venue -->
    <h2 class="text-center p-0 mb-0.2">Venue</h2>

    <div class="card shadow-sm rounded-3 mb-4">
        <div class="card-body">
            <div class="row g-3 align-items-center">
                <div class="col-12 col-md-4 venue-img">
                    <img src="assets/images/background.png"
                         alt="Christ University"
                         class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <p class="mb-2">
                        CHRIST (Deemed to be University) was born out of the educational vision of
                        St Kuriakose Elias Chavara, an educationalist and social reformer of the
                        nineteenth century in South India. He founded the first Catholic indigenous
                        congregation, Carmelites of Mary Immaculate (CMI), in 1831.
                    </p>
                    <p class="mb-2">
                        CHRIST was established on 15 July 1969 with the vision of
                        <strong>Excellence and Service</strong>. It is NAAC accredited with grade ‘A’
                        and offers UG, PG and PhD programmes across disciplines.
                    </p>
                    <a href="https://ncr.christuniversity.in"
                       class="link-primary fw-semibold">
                        Official Website
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Highlights -->
    <h2 class="text-center my-4">Highlights of Delhi NCR</h2>

    <?php
    $places = [
        [
            "title" => "Qutub Minar",
            "img" => "assets/images/venue-images/venue-02-qutab-minar.jpg",
            "desc" => "Qutub Minar is a UNESCO World Heritage Site located in Delhi, India. Built in 1192, it stands 73 meters tall."
        ],
        [
            "title" => "India Gate",
            "img" => "assets/images/venue-images/venue-03-india-gate.png",
            "desc" => "India Gate is a war memorial dedicated to soldiers who died in World War I."
        ],
        [
            "title" => "Humayun’s Tomb",
            "img" => "assets/images/venue-images/venue-04-tomb.jpg",
            "desc" => "Humayun’s Tomb is a UNESCO World Heritage Site showcasing Mughal architecture."
        ],
        [
            "title" => "Red Fort (Lal Qila)",
            "img" => "assets/images/venue-images/venue-05-red-fort.webp",
            "desc" => "The Red Fort is a historic Mughal fort constructed by Emperor Shah Jahan."
        ],
        [
            "title" => "Lotus Temple",
            "img" => "assets/images/venue-images/venue-08-lotus-temple.jpg",
            "desc" => "The Lotus Temple is known for its lotus-shaped architecture and peaceful environment."
        ],
        [
            "title" => "Akshardham Temple",
            "img" => "assets/images/venue-images/venue-09-akshardham.jpg",
            "desc" => "Akshardham Temple showcases Indian culture, spirituality, and architecture."
        ],
        [
            "title" => "Jama Masjid",
            "img" => "assets/images/venue-images/venue-10-jama-masjid.jpg",
            "desc" => "Jama Masjid is one of the largest mosques in India, built by Emperor Shah Jahan."
        ],
    ];

    foreach ($places as $place): ?>
        <div class="card shadow-sm rounded-3 mb-4">
            <div class="card-body">
                <div class="row g-3 align-items-start">
                    <div class="col-12 col-md-4 venue-img">
                        <img src="<?= $place['img']; ?>"
                             alt="<?= $place['title']; ?>"
                             class="img-fluid rounded">
                    </div>
                    <div class="col-12 col-md-8">
                        <h5 class="mb-2"><?= $place['title']; ?></h5>
                        <p class="mb-2"><?= $place['desc']; ?></p>
                        <a href="#" class="link-primary fw-semibold">
                            Official Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>