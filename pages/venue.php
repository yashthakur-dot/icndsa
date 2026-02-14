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
    <h2 class="text-center p-0 mb-0.2 ieee-blue">Venue</h2>

    <div class="card rounded-3 mb-4">
        <div class="card-body">

            <!-- Image + Intro Text Row -->
            <div class="row g-3 align-items-start mb-3">
                <div class="col-12 col-md-5 col-lg-4 venue-img">
                    <img src="assets/images/background.png" alt="Christ University" class="img-fluid rounded">
                </div>

                <div class="col-12 col-md-8">
                    <p class="mb-0 text-justify">
                        CHRIST (Deemed to be University) was born out of the educational vision
                        of St Kuriakose Elias Chavara, an educationalist and social reformer of
                        the nineteenth century in South India. He founded the first Catholic
                        indigenous congregation, Carmelites of Mary Immaculate (CMI), in 1831,
                        which administers CHRIST (Deemed to be University).
                    </p>
                </div>
            </div>

            <!-- Remaining Full Width Text -->
            <p class="text-justify">
                CHRIST was established on 15 July 1969 as an affiliated college, with the Vision
                of 'Excellence and Service'. It became a preferred educational institution in
                Bangalore, Delhi-NCR and Lavasa within the short period of inception.
            </p>

            <p class="text-justify">
                One of the first institutions in India to be accredited in 1998 by the NAAC,
                and subsequently in 2004 and 2016, CHRIST (Deemed to be University) has the
                top grade ‘A’ in the 4-point scale.
            </p>

            <p class="text-justify">
                Today, the University offers many Undergraduate, Postgraduate and PhD Programmes
                in Humanities, Social Sciences, Science, Commerce, Management, Engineering,
                Education, Law, and Architecture to over 24000 students from all the states
                of India and about 60 different countries.
            </p>

            <p class="text-justify">
                In 2019, CHRIST (Deemed to be University) completed 50 glorious years of its
                existence and sterling contribution to the cause of higher education in India.
            </p>

            <a href="https://ncr.christuniversity.in" class="link-primary fw-semibold">
                Official Website
            </a>

        </div>
    </div>

    <hr class="my-4">

    <!-- Highlights -->
    <h2 class="text-center my-4">Highlights of Delhi NCR</h2>

    <?php
    $places = [
        [
            "title" => "Qutub Minar",
            "img" => "assets/images/venue-images/venue-02-qutab-minar.jpg",
            "desc" => "Qutub Minar is a UNESCO World Heritage Site located in Delhi, India. It is a historic minaret known for its beautiful Mughal architecture. The tower is 73 meters tall and has a rich history dating back to the 12th century. Qutub Minar is one of the most popular tourist attractions in Delhi. Qutub Minar, constructed in 1192 by Qutab-ud-din Aibak, is a towering 73-meter-high minaret built with red sandstone and marble. It is surrounded by several historically significant monuments, including the Quwwat-ul-Islam Mosque and the Iron Pillar of Delhi. Visitors can explore the intricate carvings on the minaret and enjoy panoramic views of Delhi from the top.",
            "link" => "https://www.qutubminar.org/"
        ],
        [
            "title" => "India Gate",
            "img" => "assets/images/venue-images/venue-03-india-gate.png",
            "desc" => "India Gate is a war memorial and iconic landmark in Delhi, India. It is dedicated to the soldiers who died in World War I. The monument is an important site for both tourists and locals, and it is especially beautiful when illuminated at night. India Gate, originally known as the All India War Memorial, was designed by Sir Edwin Lutyens and completed in 1931. It stands at a height of 42 meters and bears the names of over 13,000 soldiers who lost their lives during World War I. Surrounding the monument is a well-maintained garden where people gather to relax and pay their respects. India Gate is particularly striking when it is illuminated in the evening.",
            "link" => "https://www.indiagate.org/"
        ],
        [
            "title" => "Humayun’s Tomb",
            "img" => "assets/images/venue-images/venue-04-tomb.jpg",
            "desc" => "Humayun's Tomb is another UNESCO World Heritage Site in Delhi, known for its stunning Mughal architecture. It is the tomb of the Mughal Emperor Humayun and is surrounded by beautiful gardens. The tomb's design influenced the architecture of the Taj Mahal. Humayun's Tomb, built in the mid-16th century, is a magnificent example of Mughal architecture. It combines Persian and Indian architectural styles and features a central octagonal tomb with beautiful gardens, water channels, and other structures. The tomb's grandeur and historical significance make it a must-visit attraction in Delhi.",
            "link" => "https://www.humayunstomb.org/"
        ],
        [
            "title" => "Red Fort (Lal Qila)",
            "img" => "assets/images/venue-images/venue-05-red-fort.webp",
            "desc" => "Red Fort, also known as Lal Qila, is a historic fort and UNESCO World Heritage Site in Delhi. It was the main residence of the Mughal emperors for over 200 years. The fort is an architectural marvel and an important symbol of India's history. Red Fort, constructed by Emperor Shah Jahan in the 17th century, is an impressive example of Mughal architecture. It is known for its red sandstone walls and intricate decorations. The fort includes various halls, courtyards, and pavilions, each with its own historical significance. Every year on India's Independence Day (August 15th), the Prime Minister hoists the national flag at Red Fort.",
            "link" => "https://www.redfort.org/"
        ],
        [
            "title" => "Lotus Temple",
            "img" => "assets/images/venue-images/venue-08-lotus-temple.jpg",
            "desc" => "Lotus Temple, also known as the Bahá'í House of Worship, is renowned for its lotus-like architecture. It is a place of worship open to all religions, and its serene surroundings make it a peaceful retreat for visitors. Lotus Temple, completed in 1986, is one of the most unique architectural marvels in Delhi. Its lotus-shaped structure is made of white marble and has won numerous architectural awards. Visitors come here to meditate, pray, or simply enjoy the tranquil environment. The temple has no idols or religious symbols inside and promotes the unity of all religion.",
            "link" => "https://www.lotustemple.org/"
        ],
        [
            "title" => "Akshardham Temple",
            "img" => "assets/images/venue-images/venue-09-akshardham.jpg",
            "desc" => "Akshardham Temple is a grand Hindu temple complex with impressive architecture and exhibitions. It is dedicated to Bhagwan Swaminarayan and showcases India's rich cultural and spiritual heritage. Akshardham Temple, inaugurated in 2005, is known for its stunning architecture, intricate carvings, and spiritual ambience. The temple complex includes the main Akshardham Mandir, Yagnapurush Kund, Sahaj Anand Water Show, and a cultural boat ride. Visitors can explore the temple's exhibitions, which narrate the life and teachings of Bhagwan Swaminarayan and celebrate India's culture and heritage.",
            "link" => "https://www.akshardham.org/"
        ],
        [
            "title" => "Jama Masjid",
            "img" => "assets/images/venue-images/venue-10-jama-masjid.jpg",
            "desc" => "Jama Masjid is one of the largest mosques in India. It is an architectural marvel built during the Mughal era. Visitors can climb the minaret for a panoramic view of Old Delhi. Jama Masjid, built by Emperor Shah Jahan between 1644 and 1656, is an exemplary piece of Mughal architecture. The mosque's grand courtyard can accommodate thousands of worshippers. Visitors can also climb the minaret for breathtaking views of Old Delhi. The mosque is a serene place for prayer and reflection."
        ],
    ];

    foreach ($places as $place): ?>
        <div class="card shadow-sm rounded-3 mb-4">
            <div class="card-body">

                <h5 class="mb-3"><?= $place['title']; ?></h5>

                <?php
                // Split description into two parts (first sentence + rest)
                $sentences = explode('.', $place['desc'], 2);
                ?>

                <!-- First Part of Text -->
                <p class="mb-3 text-justify">
                    <?= $sentences[0]; ?>.
                </p>

                <!-- Image in Between -->
                <div class="text-center my-3 venue-img">
                    <img src="<?= $place['img']; ?>" alt="<?= $place['title']; ?>" class="img-fluid rounded">
                </div>

                <!-- Remaining Text -->
                <?php if (isset($sentences[1])): ?>
                    <p class="mb-3 text-justify">
                        <?= trim($sentences[1]); ?>
                    </p>
                <?php endif; ?>

                <?php if (!empty($place['link'])): ?>

                    <?php
                    $cleanLink = preg_replace('#^https?://(www\.)?#', '', rtrim($place['link'], '/'));
                    ?>

                    <p class="mb-0">
                        <span class="fw-semibold text-dark">Official Website:</span>
                        <a href="<?= $place['link']; ?>" class="ieee-blue text-decoration-none" target="_blank">
                            <?= $cleanLink; ?>
                        </a>
                    </p>

                <?php endif; ?>

            </div>
        </div>
    <?php endforeach; ?>

</div>