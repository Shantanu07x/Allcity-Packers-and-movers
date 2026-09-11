<!-- Top Bar -->

<?= $this->load->view('contacts/quotemodal.php'); ?>
<!-- Top Navbar -->
<!-- Top Navbar -->
<div class="top-navbar">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center gap-4 small">
                <span>
                    <i class="bi bi-envelope-fill"></i>
                    <a href="<?= $mailhtml ?>" class="text-dark text-decoration-none"><?= $mail ?></a>
                </span>
                <span class="d-none d-md-inline">
                    <i class="bi bi-geo-alt"></i>
                    India
                </span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="<?= site_url("contacts") ?>" class="btn btn-success btn-sm d-none d-md-inline">
                    <small class="text-white"> contact-us</small>
                </a>

                <a href="<?= site_url("our-branches") ?>" class="btn btn-branch btn-sm d-none d-md-inline btn-danger">
                    <i class="bi bi-building text-white"></i>
                    <small class="text-white"> Select Nearest Branch</small>
                </a>
                <small class="phone-text">
                    <i class="bi bi-telephone"></i>
                    <?= $phone ?>
                </small>

            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="main-navbar sticky-top py-2">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <a href="<?= site_url() ?>" class="navbar-brand">
                <img src="<?= base_url('assets/images/logo/citylogoo.webp') ?>" class="img-fluid logo-img"
                    alt="Company Logo" loaging="lazy">
            </a>

            <div class="action-buttons d-flex align-items-center gap-3">
                <a href="#qtemodal" data-bs-toggle="modal" data-bs-target="#qteModal"
                    class="quote-btn d-none d-md-inline-block">
                    Get A Quote <i class="bi bi-arrow-right"></i>
                </a>
                <button class="hamburger-btn border-0 bg-transparent p-2" id="hamburgerBtn">
                    <i class="bi bi-list"><span class="visually-hidden">hamburger</span></i>
                </button>
            </div>
        </div>
    </div>
</nav>
<!-- Full Screen Menu -->
<div class="fullscreen-menu overflow-y-scroll overflow-md-y-hidden" id="fullscreenMenu">
    <button class="close-menu-btn position-fixed border-0 bg-transparent p-2" id="closeMenuBtn">
        <i class="bi bi-x fs-1 text-primary"></i> </button>

    <div class="menu-content">
        <!-- Left Section -->
        <div>
            <div class="logo-menu mb-4">
                <span class="fs-2 text-primary fw-bold">All City Movers Packers</span>
            </div>

            <div class="menu-section">
                <span class="menu-title">Contact Info</span>
                <div class="contact-info pt-2">
                    <p><i class="bi bi-geo-alt-fill"></i><?= $address ?></p><br>
                    <a href="<?= $mailhtml ?>" class="d-inline-flex align-items-center text-decoration-none">
                        <i class="bi bi-envelope-fill"></i>
                        <span><?= $mail ?></span>
                    </a><br>
                    <a href="<?= $phonehtml ?>"><i class="bi bi-telephone"></i><?= $phone ?></a><br>
                </div>
                <div class="social-icons d-flex gap-3 mt-3">
                    <a href="#" class="d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="#" class="d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#" class="d-flex align-items-center justify-content-center rounded-circle">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Company Section -->
        <div class="menu-section">
            <div class="menu-section mb-4">
                <span class="menu-title">Quick Links</span>
                <ul class="list-unstyled">
                    <li class="fw-bold mb-2"><a href="<?= site_url('') ?>"><i
                                class="bi bi-house-door-fill me-2 text-primary"></i>Home </a></li>
                    <li class="fw-bold mb-2"> <a href="<?= site_url('contacts') ?>"><i
                                class="bi bi-envelope-fill me-2 text-primary"></i>Contact Us </a> </li>
                    <li class="fw-bold mb-2"><a href="<?= site_url('our-branches') ?>"> <i
                                class="bi bi-geo-alt-fill me-2 text-primary"></i>Branches </a> </li>
                    <li class="fw-bold mb-2"> <a href="<?= site_url('blog') ?>"><i
                                class="bi bi-journal-text me-2 text-primary"></i>Blog </a> </li>
                </ul>
            </div>
            <span class="menu-title">Company</span>
            <ul class="list-unstyled">
                <li class="mb-2"><a href="<?= site_url('about') ?>"><i
                            class="bi bi-info-circle-fill me-2 text-primary"></i>About Us</a></li>
                <li class="mb-2"><a href="<?= site_url('why-choose-us') ?>"><i
                            class="bi bi-patch-check-fill me-2 text-primary"></i>Why Choose Us</a></li>
                <li class="mb-2"><a href="<?= site_url('testimonials') ?>"><i
                            class="bi bi-chat-quote-fill me-2 text-primary"></i>Testimonials</a></li>
                <li class="mb-2"><a href="<?= site_url('reviews') ?>">
                        <i class="bi bi-star-fill me-2 text-primary"></i>Reviews</a></li>
                <li class="mb-2"><a href="<?= site_url('iba-approved') ?>"><i class="bi bi-truck text-primary"></i> IBA
                        Approved</a></li>
            </ul>
        </div>

        <!--Services Section-->
        <div class="menu-section">
            <span class="menu-title">Services</span>
            <ul class="list-unstyled">
                <li class="mb-2"><a href="<?= site_url('home-relocation') ?>"> <i
                            class="bi bi-house-heart-fill me-2 text-primary"></i>Home Relocation</a></li>
                <li class="mb-2"> <a href="<?= site_url('office-shifting') ?>"> <i
                            class="bi bi-building-fill me-2 text-primary"></i>Office Shifting</a></li>
                <li class="mb-2"> <a href="<?= site_url('packing-unpacking') ?>"><i
                            class="bi bi-box-seam-fill me-2 text-primary"></i>Packing and Unpacking </a></li>
                <li class="mb-2"><a href="<?= site_url('vehicle-shifting') ?>"> <i
                            class="bi bi-truck-front-fill me-2 text-primary"></i>Vehicle Service </a></li>
                <li class="mb-2"> <a href="<?= site_url('transportation-service') ?>"> <i
                            class="bi bi-truck me-2 text-primary"></i>Transportation Service </a> </li>
                <li class="mb-2"> <a href="<?= site_url('storage-service') ?>"> <i
                            class="bi bi-building me-2 text-primary"></i>Storage Service </a></li>
                <li class="mb-2"> <a href="<?= site_url('cargo-service') ?>"> <i
                            class="bi bi-boxes me-2 text-primary"></i>Cargo Services </a></li>
                <li class="mb-2"><a href="<?= site_url('local-service') ?>"><i
                            class="bi bi-geo-alt-fill me-2 text-primary"></i>Local Service </a></li>
                <li class="mb-2"> <a href="<?= site_url('logistic-service') ?>"> <i
                            class="bi bi-send me-2 text-primary"></i>Logistic Service </a></li>
                <li class="mb-2"> <a href="<?= site_url('our-branches') ?>"> <i
                            class="bi bi-geo-alt-fill me-2 text-primary"></i>All India Packers and Movers Services </a>
                </li>

            </ul>
        </div>

        <!-- Activities Section -->
        <div class="menu-section">
            <span class="menu-title">Activities</span>
            <ul class="list-unstyled">
                <li class="mb-2"><a href="<?= site_url('') ?>"><i
                            class="bi bi-lightbulb-fill me-2 text-primary"></i>Moving Tips And Suggestion</a></li>
                <li class="mb-2"><a href="<?= site_url('photo-gallery') ?>"><i
                            class="bi bi-images me-2 text-primary"></i>Photo
                        Gallery</a></li>
                <li class="mb-2"><a href="<?= site_url('video-gallery') ?>"><i
                            class="bi bi-camera-video-fill me-2 text-primary"></i>Video Gallery</a></li>
            </ul>
        </div>
    </div>
</div>