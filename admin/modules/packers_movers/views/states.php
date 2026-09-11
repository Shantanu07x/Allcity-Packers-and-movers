<?php $this->load->view('template/breadcrumb'); ?>
<div class="portfolio-area py-120">
    <div class="container">
        <div class="row popup-gallery">
            <?php foreach ($state as $item): ?>
                <div class="col-6 col-lg-3 mb-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img class="img-fluid" src="<?= base_url() ?>/assets/images/state/<?= $item['image'] ?>"
                                alt="<?= $item['title'] ?>" loading="lazy">
                            <a class="portfolio-link" href="<?= $item['link'] ?>">
                                <i class="bi bi-plus"></i>
                            </a>
                        </div>
                        <div class="portfolio-content">
                            <div class="portfolio-info">
                                <small><?= $item['category'] ?></small>
                                <h4><a href="<?= $item['link'] ?>"><?= $item['title'] ?></a></h4>
                            </div>
                            <a href="<?= $item['link'] ?>" class="portfolio-arrow"><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php $this->load->view('packers_movers/states_widget.php') ?>