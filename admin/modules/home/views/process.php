<?php
$process_steps = [
    ['image' => 'process1.png', 'title' => 'Pack Your Items'],
    ['image' => 'process2.png', 'title' => 'Load & Transport'],
    ['image' => 'process3.png', 'title' => 'Safe Delivery'],
    ['image' => 'process4.png', 'title' => 'Unpack & Setup']
];
?>
<section class="process-one mt-3">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title-three text-center sec-title-animation animation-style1 py-5 text-white">
            <div class="section-title-three__tagline-box justify-content-center">
                <span class="section-title-three__tagline">Working Process</span>
            </div>
            <span class="section-title-three__title title-animation fw-bold fs-4">See our 4 easy steps how we
                work</span>
        </div>

        <!-- Process Steps -->
        <div class="row">
            <?php $count = 1;
            foreach ($process_steps as $step): ?>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-4">
                    <div class="process-one__icon text-white text-center position-relative">
                        <!-- Step number -->
                        <div class="process-step-number"><?= $count ?></div>

                        <div class="process-icon-circle d-flex align-items-center justify-content-center mx-auto">
                            <img src="<?= base_url() ?>assets/images/about/<?php echo $step['image']; ?>"
                                alt="<?php echo $step['title']; ?>" class="process-icon-img" loading="lazy">
                        </div>
                        <span class=" fw-bold py-5"><?php echo $step['title']; ?></span>
                    </div>
                </div>
                <?php $count++; endforeach; ?>
        </div>
    </div>
</section>