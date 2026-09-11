<?php $this->load->view('template/breadcrumb'); ?>

<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<main class="main">      
    <div class="our-service-page city-list-page">
    <div class="container feature-content-section">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="city-card-link d-block h-100 text-decoration-none">
                        <div class="city-card card border-0 shadow h-100">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <!-- Truck Icon on Left -->
                                <div class="icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <!-- Title on Right -->
                                <div class="city-name">
                                    <span class='text-dark'>Packers and Movers </span><b><?= $ct['nm'] ?></b>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>
