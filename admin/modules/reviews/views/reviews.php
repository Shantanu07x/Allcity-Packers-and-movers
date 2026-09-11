<main class="main">
    <?php $this->load->view('template/breadcrumb'); ?> 


    <div class="our-service-page reviews-page feature-content-section acx-inline-037">
        <div ng-app="reviewsApp" ng-controller="reviewsctrl">
            <?php $this->load->view('reviews/reviewmodal') ?>
            <br />
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 mb-4 text-left fade-in">
                        <button type="button" class="btn write-review-btn" data-bs-toggle="modal" data-bs-target="#rvwmdl">
                            Write a Review <i class="bi bi-pen"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <?php
                    if ($reviews->num_rows() == 0) {
                        echo "<p class='no-reviews-text'>No reviews yet...</p>";
                    } else {
                        foreach ($reviews->result() as $r) {
                            $pdate = explode(" ", $r->posted_date)[0];
                            $size = strlen(explode("@", $r->email)[0]) - 4;
                            $lem = substr($r->email, -12);
                            $fem = substr($r->email, 0, 4);
                            $st = str_repeat("*", $size);
                            $em = $fem . $st . $lem;
                    ?>
                            <div class="col-lg-6 col-md-6 fade-in">
                                <div class="single-review" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <meta itemprop="name" content="<?= $r->r_title ?>" />
                                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                        <meta itemprop="name" content="<?= $company3 ?>" />
                                    </div>
                                    <?php if (@$r->r_img) { ?>
                                        <div class="review-icon">
                                            <img class="review-img" src="<?= base_url('assets/uploads/reviewimg/thumb/') . $r->r_img ?>" alt="<?= $r->name ?> review <?= $company3 ?>">
                                        </div>
                                    <?php } ?>
                                    <div class="review-content">
                                        <p class="review-author">
                                            By <span class="author-name" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                <span itemprop="name"><?= $r->name ?></span>
                                            </span>
                                            <span class="review-date" itemprop="datePublished" content="<?= $pdate ?>"> (<?= $r->posted_date ?>)</span>
                                        </p>
                                        <div class="review-rating">
                                            <?php for ($i = 0; $i < $r->stars; $i++) { ?>
                                                <i class="text-warning fa fa-star"></i>
                                            <?php } ?>
                                            <span class="rating-value" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                                <span itemprop="ratingValue"><?= $r->stars ?></span> stars
                                            </span>
                                        </div>
                                        <h4 class="review-title"><q itemprop="name"><?= $r->r_title ?></q></h4>
                                        <p class="review-body" itemprop="reviewBody"><?=$r->r_desc?></p>
                                        <p class="review-email"><small><?= $em ?></small></p>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <div class="col-lg-12">
                        <div class="pagination">
                            <?php echo $this->pagination->create_links() ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

</main>
