<?php
/*
$link = $this->uri->segment(1);

if (strlen($link) <= 60) { // big links hide
    $keywords = array(
        array("link" => "car-transportation-in-" . strtolower(str_replace(" ", "-", $city)), "label" => "Car Transportation in $city", "image" => "carRelocation.png"),
        array("link" => "bike-transportation-in-" . strtolower(str_replace(" ", "-", $city)), "label" => "Bike Transportation in $city", "image" => "motorbike.png"),
        array("link" => "home-shifting-in-" . strtolower(str_replace(" ", "-", $city)), "label" => "Home Shifting in $city", "image" => "moving.png"),
        array("link" => "office-shifting-in-" . strtolower(str_replace(" ", "-", $city)), "label" => "Office Shifting in $city", "image" => "company.png"),
        array("link" => strtolower(str_replace(" ", "-", $city)) . "-loading-unloading", "label" => "Loading and Unloading in $city", "image" => "container.png"),
        array("link" => strtolower(str_replace(" ", "-", $city)) . "-packing-unpacking", "label" => "Packing and Unpacking in $city", "image" => "delivery.png"),
        array("link" => "iba-approved-packers-in-" . strtolower(str_replace(" ", "-", $city)), "label" => "IBA Approved Packers and Movers In $city", "image" => "ibaPackersMovers.png"),
  
    );

    $htmldata = "
                <div class='container mt-5'>
                    <h5 class='mb-5 acx-inline-002'>Our <span class='acx-inline-003'>Services</span></h5>
                    <div class='row'>";
    
    foreach ($keywords as $k) {
        if ($k['link'] == $link) {
            continue;
        } else {
            $htmldata .= "<div class='col-lg-3 col-sm-6 mb-5 wow fadeInUp'>
                            <div class='service-card'>
                                <img src='" . base_url("assets/img/" . $k['image']) . "' alt='" . $k['label'] . "' class='service-icon' loading='lazy'>
                                <h3 class='service-title'>" . $k['label'] . "</h3>
                                <a href='" . site_url($k['link']) . "' class='service-button'>Learn More</a>
                            </div>
                        </div>";
        }
    }
    $htmldata .= "</div></div>";
    echo $htmldata;
} else { // don't index big URL page
    echo '<meta name="robots" content="noindex, follow"/>';
}
*/
?>
<?php
$link = $this->uri->segment(1); // Get the current segment for comparison

$services = array(
    array("link" => "home-shifting-in-" . strtolower(str_replace(" ", "-", $city)), "label" => "Home Shifting in $city", "image" => "moving.png"),
    array("link" => "office-shifting-in-" . strtolower(str_replace(" ", "-", $city)), "label" => "Office Shifting in $city", "image" => "company.png"),
    array("link" => "iba-approved-packers-in-" . strtolower(str_replace(" ", "-", $city)), "label" => "IBA Approved Packers and Movers In $city", "image" => "ibaPackersMovers.png"),

);

$htmldata = "<div class='ft-service-sidebar'>
                <div class='ft-service-sidebar-widget headline ul-li-block'>
                    <div class='service-category-widget'>
                        <h3 class='widget-title'>All Service</h3>
                        <ul>";

foreach ($services as $service) {
    if ($service['link'] == $link) {
        // Active link styling
        $htmldata .= "<li><a href='" . site_url($service['link']) . "' class='acx-inline-004'>" . $service['label'] . "</a></li>";
    } else {
        // Non-active link styling
        $htmldata .= "<li><a  href='" . site_url($service['link']) . "'>" . $service['label'] . "</a></li>";
    }
}

$htmldata .= "      </ul>
                    </div>
                </div>
            </div>";

echo $htmldata;


?>
<div class="call-whatsapp">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-center acx-inline-005">OUR
                SUPPORT
            </h4>
            <p class="text-center"><i class="acx-inline-006">We
                    are available <b>24*7</b> for your support</i></p>
            <div class="row pt-1">
                <div class="col-12">
                    <div class="gadget acx-inline-007">
                        <div class="text-center">
                            <span class="text-white pt-2 acx-inline-008">
                                <a class="iconwidget" href="tel:+91<?= @str_replace(" ", "", $phone) ?>"><b>Call
                                        Now</b></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>