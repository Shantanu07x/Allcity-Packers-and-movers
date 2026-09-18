<?php $this->load->view('template/breadcrumb'); ?>

<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<main class="main">      
    <div class="our-service-page city-list-page">
    <div class="container feature-content-section">
    <p>Shifting to a new house or office in <b><?= $state ?></b>? It's never really as simple as people think — packing up years of belongings, finding a truck, making sure nothing breaks on the way. That's where <b><a href="https://allcitymoverspackers.com/">AllCity Packers and Movers</a></b> comes in. We've been helping families and businesses move across <?= $state ?> for years now, and honestly, we've seen it all — last-minute shifts, fragile antiques, entire office setups that needed to be dismantled and put back together in a new location. Our team handles the packing, the loading, the transport, and the unloading too, so you're not running around trying to manage everything yourself. Got a bike or car that needs to go along with your household stuff? We manage that as well, using proper vehicle carriers so it reaches safe and sound. If you need a place to store your things for a few weeks or even months, we've got warehousing sorted too. We won't lie and say nothing ever goes wrong during a move — but that's exactly why we keep your goods insured under IBA guidelines, so if something does happen, you're not left dealing with it alone. Claims are straightforward, no endless back and forth. Honestly, that's all we're really trying to do — make sure you don't end up stressed out over something that should just get done. You'll know the price upfront, nothing extra pops up later, and when we say we'll be there at 9, we mean 9, not noon. That's how <b><a href="https://allcitymoverspackers.com/">AllCity Packers and Movers</a></b> works in <?= $state ?>, plain and simple.</p>
<hr>
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
