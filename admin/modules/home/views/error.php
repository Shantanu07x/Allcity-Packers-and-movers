<main class="main">
  <section class="breadcrumb-hero" data-animate="bottom" data-delay="1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <div class="content-area">
                    <div class="accent-line"></div>
                      <h1 class="page-title">Page Not Found</h1>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <nav class="breadcrumb-nav mb-3" data-animate="left" data-delay="1">
      <div class="container">
          <ol class="breadcrumb-custom mb-0">
              <li class="breadcrumb-item">
                  <a href="<?=site_url()?>">
                      <i class="fas fa-home"></i>
                      <span>Home</span>
                  </a>
              </li>
              <li class="breadcrumb-item" aria-current="page">
                  404 Error
              </li>
          </ol>
      </div>
  </nav>
  <section class="error_section text-center mouse_move mt-3">
    <div class="container">
      <div class="error_image decoration_wrap text-center">
        <img src="<?= base_url("assets/img/error/404.png") ?>" alt="404 Error">
      </div>
      <div class="error_content">
        <h2>Page not found</h2>
        <p>
          The requested URL does not exist on this server;<span class="d-md-block"> Please verify the web address and contact the administrator if you believe it's an error. </span>
        </p>
        <a href="<?= site_url() ?>" class="bd-btn-link btn_primary">
          <span class="bd-button-content-wrapper">
            <span class="bd-button-icon">
              <i class="fa-light fa-arrow-right-long"></i>
            </span>
            <span class="pd-animation-flip">
              <span class="bd-btn-anim-wrapp">
                <a href="<?= site_url('') ?>" class="theme_button color1">Go Back To Home</a>

              </span>
            </span>
          </span>
        </a>
      </div>
    </div>
  </section>
</main>