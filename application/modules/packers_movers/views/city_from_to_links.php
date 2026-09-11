<?php
$segment = $this->uri->segment(1);

$parts = explode('-', $segment);
$from_city = $parts[2] ?? 'delhi';

if (!empty($city)) {
    $from_city = strtolower(str_replace(' ', '-', $city));
}

if (!empty($from)) {
    $from_city = strtolower(str_replace(' ', '-', $from));
}

$from_city = strtolower($from_city);

if ($from_city === 'movers' || $from_city === 'packers') {
    if (!empty($city)) {
        $from_city = strtolower(str_replace(' ', '-', $city));
    } else {
        $from_city = 'delhi';
    }
}

$to = [
    "delhi",
    "mumbai",
    "pune",
    "bangaluru",
    "hyderabad",
    "chennai",
    "kolkata",
    "surat",
    "ahmedabad",
    "jaipur",
    "lucknow",
    "kanpur",
     "nagpur",
     "indore",
     "thane",
     "bhopal",
    "vishakhapatnam",
    "patna",
     "vadodara",
     "ghaziabad",
     "ludhiana",
    "agra",
    "nasik",
    "faridabad",
    "meerut",
    "rajkot",
    "varanasi",
    "srinagar",
    "aurangabad",
    "dhanbad",
    "amritsar",
    "allahabad",
    "ranchi",
    "howrah",
    "coimbatore",
    "jabalpur",
    "Gwalior",
    "Vijayawada",
    "Jodhpur",
    "Madurai",
    "Raipur",
    "Kota",
    "Chandigarh",
    "Guwahati",
    "Solapur",
    "Hubli-Dharwad",
    "Bareilly",
    "Moradabad",
    "Mysuru",
    "Tiruchirappalli",
    "Dehradun",
    "Noida",
    "Gurugram",
    "Jamshedpur",
    "Udaipur",
    "Shimla",
    "Mangalore",
    "Thrissur",
     "Salem",
     "Warangal",
    "chandigarh"
];

$filtered_to = [];
foreach ($to as $city) {
    if ($city !== $from_city) {
        $filtered_to[] = $city;
    }
}
$to = $filtered_to;

$from_city_label = ucwords(str_replace('-', ' ', $from_city));
?>

<section class="city-routes">
    <div class="container">
        <h2 class="section-title">
            All-city Packers & Movers <?= $from_city_label ?> to Top Cities
        </h2>
        <p class="section-subtitle">
            Reliable and affordable relocation services from <?= $from_city_label ?> to major cities across India.
        </p>

        <div class="city-grid">
            <?php foreach ($to as $city): ?>
                <a class="city-card"
                    href="<?= site_url("packers-movers-$from_city-to-$city") ?>">

                    <div class="city-name">
                        Packers and Movers from <?= $from_city_label ?> to <?= ucwords(str_replace('-', ' ', $city)) ?>
                    </div>

                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
