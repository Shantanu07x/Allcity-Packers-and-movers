<?php
$st = strtolower(str_replace(" ", "-", $city));

include "data/$st.php";

$state = ucwords($state);
?>
<div class="container">
    <?php

    $uniqueCities = array_intersect_key(
        $cities,
        array_unique(array_column($cities, 'nm'))
    );

    $cities = array_values($uniqueCities);
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h3>Areas We Serve Across Zirakpur for Local Packers and Movers</h3>
            <p>Our Packers and Movers in Zirakpur services cover all major residential and commercial areas:</p>
        </div>
    </div>

    <div class="row mt-3 mb-5 cityfrom">
        <?php
        $cty = $city;
        foreach ($cities as $ct) {
            $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
            $new_link = $link . "-packers-movers-" . strtolower(str_replace(" ", "-", $cty));
        ?>
            <div class="col-12">
                <a href="<?= site_url('/') . $new_link; ?>">
                    <div class="content-city">
                        <p class="local-city">
                            <span class="city-name"><?= $ct['nm'] ?></span>
                        </p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
