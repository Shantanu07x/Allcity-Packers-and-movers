<?php
$this->load->database();
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
$this->load->helper('text');
include 'city_content.php';
$ctlink = strtolower(str_replace(" ", "-", $city));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
  include "data/$st.php";
} else {
  redirect("error?Invalid+Request");
}
foreach ($cities as $ct) {
  if (@$ct['nm'] == $city) {
    $lat = $ct['lat'];
    $lon = $ct['lon'];
    $state_code = $ct['sc'];
    break;
  }
} ?>
<section class="position-relative">
  <div id="pmSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active position-relative">
        <img src="<?= base_url("assets/images/service/pic2.jpg") ?>"
          class="d-block w-100 object-fit-cover acx-inline-009" alt="Packers and Movers in <?= $city ?>" loading="lazy">
        <!-- Dark Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
          <h1 class="fw-bold display-6">
            Packers and Movers in <?= $city ?>
          </h1>

          <?php if (strtolower($city) === 'zirakpur'): ?>
    <p class="mt-2">
        Packers and Movers in <?= $city ?> who plan around VIP Road traffic and Baltana's narrow lanes. 5,000+ moves, 4.8 rated, GST billed, ISO certified. From ₹3,500. +91-9876392657.
    </p>
<?php else: ?>
    <p class="mt-2">
        Looking for reliable Packers & movers in <?= $city ?> <?= $state ?>? All City Packers offers safe,
        affordable, and professional packing Moving services in <?= $city ?> with Moving Expert Call Now
        for Better Shifting at cheapest price
    </p>
<?php endif; ?>
          <nav aria-label="breadcrumb" class="mt-3">
            <ol class="breadcrumb justify-content-center mb-0" itemscope itemtype="https://schema.org/BreadcrumbList">
              <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="<?= site_url() ?>" class="text-white text-decoration-none" itemprop="item">
                  <i class="bi bi-home me-1"></i>
                  <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1" />
              </li>
              <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="<?= site_url('branches') ?>" class="text-white text-decoration-none" itemprop="item">
                  <span itemprop="name">Branches</span>
                </a>
                <meta itemprop="position" content="2" />
              </li>
              <li class="breadcrumb-item active text-white" aria-current="page" itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a href="<?= current_url(); ?>" class="text-white text-decoration-none" itemprop="item">
                  <span itemprop="name"><?= $city ?></span>
                </a>
                <meta itemprop="position" content="3" />
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="position-relative z-3 mt-n5">
    <?php $this->load->view('contacts/quoteform.php'); ?>
  </div>
</section>

<div class="container my-5">
  <div class="row">
    <div class="col-lg-12">
      <?php echo @$htmlcontent0 ?>
    </div>
  </div>
</div>
<hr>
<div class="container my-5">
  <div class="row">
    <div class="col-lg-12">
      <?php echo @$htmlcontent ?>
    </div>
  </div>
</div>
<?php $this->load->view('home/process2.php'); ?>
<section id="section2" class="city-content py-5">
  <div class="container">
    <div class="row g-4 mb-4 align-items-stretch">
      <div class="col-md-6 d-flex">
        <div class="w-100 h-100">
          <?php echo @$htmlcontent1 ?>
        </div>
      </div>
      <div class="col-lg-6 d-flex white-bg-form">
        <div class="w-100 h-100">
          <div class="map-grid py-3 h-100">
            <?php if (strtolower($city) == 'ludhiana') { ?>
              <div itemscope itemtype="https://schema.org/MovingCompany">
                <meta itemprop="name" content="All City Movers Packers" />
                <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                  <meta itemprop="streetAddress" content="Exact street address here" />
                  <meta itemprop="addressLocality" content="Ludhiana" />
                  <meta itemprop="addressRegion" content="Punjab" />
                  <meta itemprop="postalCode" content="141001" />
                  <meta itemprop="addressCountry" content="India" />
                </div>
                <meta itemprop="url" content="https://allcitymoverspackers.com/ludhiana-packers-movers-punjab" />
                <meta itemprop="telephone" content="09876392657" />
                <div itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
                  <meta itemprop="latitude" content="30.9014881" />
                  <meta itemprop="longitude" content="75.8840412" />
                </div>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.4698642703993!2d75.8840412!3d30.90148809999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a832819247de1%3A0xe83145275841dca4!2sAll%20City%20Movers%20Packers!5e0!3m2!1sen!2sin!4v1776670365590!5m2!1sen!2sin"
                  allowfullscreen="" loading="lazy" title="map of all city for ludhiana" itemprop="hasMap"
                  class="acx-inline-025"></iframe>
                <div class="map-address mt-3 p-3 rounded shadow-sm bg-light">
                  <div class="d-flex align-items-start mb-2">
                    <i class="bi bi-geo-alt-fill text-danger me-2 fs-5"></i>
                    <p class="mb-0">
                      <strong>Address:</strong><br>
                      1226/6-B/3, Street No. 3, Delhi Road, Opp.Transport Nagar, Hira Nagar, Ludhiana, Punjab 141003
                    </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-telephone-fill text-primary me-2 fs-5"></i>
                    <p class="mb-0">
                      <strong>Phone:</strong>
                      <a href="tel:09876392657" class="text-decoration-none">
                        09876392657
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            <?php } elseif (strtolower($city) == 'zirakpur') { ?>
              <div itemscope itemtype="https://schema.org/MovingCompany">
                <meta itemprop="name" content="All City Movers Packers" />
                <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                  <meta itemprop="addressLocality" content="Zirakpur" />
                  <meta itemprop="addressRegion" content="Punjab" />
                  <meta itemprop="addressCountry" content="India" />
                </div>
                <div itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
                  <meta itemprop="latitude" content="30.6574423" />
                  <meta itemprop="longitude" content="76.8148257" />
                </div>
                <meta itemprop="url" content="https://allcitymoverspackers.com/zirakpur-packers-movers-punjab" />
                <meta itemprop="telephone" content="09815936887" />
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.166406347971!2d76.8148257!3d30.6574423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feb7153e038fb%3A0xc58b724868924130!2sAll%20City%20Movers%20Packers!5e0!3m2!1sen!2sin!4v1776670445820!5m2!1sen!2sin"
                  allowfullscreen="" title="map of Zirakpur" loading="lazy" itemprop="hasMap" class="acx-inline-026">
                </iframe>
                <div class="map-address mt-3 p-3 rounded shadow-sm bg-light">
                  <div class="d-flex align-items-start mb-2">
                    <i class="bi bi-geo-alt-fill text-danger me-2 fs-5"></i>
                    <p class="mb-0">
                      <strong>Address:</strong><br>
                      Shop No. 13, Ground Floor, Bhabat Rd, Sant Kirpal Nagar, Utrathiya, Zirakpur, Punjab 140603
                    </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-telephone-fill text-primary me-2 fs-5"></i>
                    <p class="mb-0">
                      <strong>Phone:</strong>
                      <a href="tel:09815936887" class="text-decoration-none">
                        09815936887
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            <?php } elseif (strtolower($city) == 'mohali') { ?>
              <div itemscope itemtype="https://schema.org/MovingCompany">
                <meta itemprop="name" content="All City Movers Packers" />
                <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                  <meta itemprop="addressLocality" content="Mohali" />
                  <meta itemprop="addressRegion" content="Punjab" />
                  <meta itemprop="addressCountry" content="India" />
                </div>
                <div itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
                  <meta itemprop="latitude" content="30.7273710" />
                  <meta itemprop="longitude" content="76.6296827" />
                </div>
                <meta itemprop="url" content="https://allcitymoverspackers.com/mohali-packers-movers-punjab" />
                <meta itemprop="telephone" content="08264221657" />
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.6808636926626!2d76.6296827!3d30.727370999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fe5b17850c9f5%3A0xc47de794334d74a3!2sAll%20City%20Movers%20Packers!5e0!3m2!1sen!2sin!4v1776670677890!5m2!1sen!2sin"
                  allowfullscreen="" title="map of allcity packers mohali" loading="lazy" itemprop="hasMap"
                  class="acx-inline-027">
                </iframe>
                <div class="map-address mt-3 p-3 rounded shadow-sm bg-light">
                  <div class="d-flex align-items-start mb-2">
                    <i class="bi bi-geo-alt-fill text-danger me-2 fs-5"></i>
                    <p class="mb-0">
                      <strong>Address:</strong><br>
                      Naya Shehar, Shop No. 10, Ekam Market, Badala Road, Sector 115, Kharar, Sahibzada Ajit Singh Nagar,
                      Punjab 140301
                    </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-telephone-fill text-primary me-2 fs-5"></i>
                    <p class="mb-0">
                      <strong>Phone:</strong>
                      <a href="tel:08264221657" class="text-decoration-none">
                        08264221657
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            <?php } else { ?>
              <iframe
                src="https://maps.google.com/maps?q=<?php echo $lat . ',' . $lon . ' (' . urlencode($city) . ')'; ?>&z=15&output=embed"
                loading="lazy" title="Google Map of <?php echo htmlspecialchars($city); ?>"
                sandbox="allow-scripts allow-same-origin allow-popups" referrerpolicy="no-referrer-when-downgrade"
                class="acx-inline-028">
              </iframe>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('packers_movers/why_choose_city_table.php'); ?>
<div class='container bold-sub'>
  <div class='row'>
    <div class='col-lg-12'>
      <?php $this->load->view('packers_movers/table.php'); ?>
    </div>
  </div>
  <?php $this->load->view('packers_movers/certificate.php'); ?>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php echo @$htmlcontent2 ?>
        <hr>
        <?php if (strtolower($city) == 'zirakpur') {
          include 'localcities.php';
        } ?>
        <hr>
        <?php echo @$htmlcontent03 ?>
      </div>
    </div>
  </div>
  <section class="my-5 social-action-section service-check-section">
    <div class="container">
      <div class="row g-4 g-xl-5 align-items-stretch">
        <div class="col-lg-6">
          <div class="service-check-content h-100">
            <?php echo @$htmlcontent3; ?>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="social-panel trust-action-panel h-100">
            <div class="trust-summary">
              <div class="google-rating-box">
                <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png"
                  alt="Google" class="google-logo-img">
                <div class="google-rating-copy">
                  <div class="rating-line">
                    <strong>4.8</strong>
                    <span>2889 Reviews</span>
                  </div>
                  <div class="stars">
                    <span aria-label="5 star rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    <small>Google Trusted Reviews</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="row g-3 text-center action-tile-grid">
             <div class="col-6">
    <a href="https://www.youtube.com/channel/UCWvUDMrdy7_d2BHpUPi5zsA"
        target="_blank"
        rel="noopener noreferrer"
        class="social-action-card youtube-card">

        <span class="action-icon-wrap d-inline-flex align-items-center justify-content-center bg-danger bg-opacity-10 rounded-circle p-3">
            <i class="bi bi-youtube fs-1 text-danger"></i>
        </span>

        <span>Video Gallery</span>
        <small>Watch our work</small>
    </a>
</div>

<div class="col-6 social-gal">
    <a href="<?php echo site_url('photo-gallery'); ?>"
        class="social-action-card gallery-card">

        <span class="action-icon-wrap d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 rounded-circle p-3">
            <i class="bi bi-images fs-1 text-primary"></i>
        </span>

        <span>Image Gallery</span>
        <small>View projects</small>
    </a>
</div>

<div class="col-6">
    <a href="tel:+919876392657"
        class="social-action-card call-card">

        <span class="action-icon-wrap d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 rounded-circle p-3">
            <i class="bi bi-telephone-fill fs-1 text-success"></i>
        </span>

        <span>Call Now</span>
        <small>Instant support</small>
    </a>
</div>

<div class="col-6">
    <a href="https://wa.me/919876392657"
        target="_blank"
        rel="noopener noreferrer"
        class="social-action-card whatsapp-card">

        <span class="action-icon-wrap d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 rounded-circle p-3">
            <i class="bi bi-whatsapp fs-1 text-success"></i>
        </span>

        <span>WhatsApp</span>
        <small>Quick enquiry</small>
    </a>
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row g-4">
        <!-- Image 1 -->
        <div class="col-12 col-md-6">
          <img src="<?= base_url('assets/images/service/allcity29.png') ?>" class="img-fluid w-100 custom-img"
            alt="packing-moving-image-in-<?= $city ?>">
        </div>
        <!-- Image 2 -->
        <div class="col-12 col-md-6">
          <img src="<?= base_url('assets/images/service/allcity35.png') ?>" class="img-fluid w-100 custom-img"
            alt="packing-in-<?= $city ?>">
        </div>
      </div>
    </div>
  </section>
  </section>

  <section id="section2" class="mb-5 city-content py-5">
    <div class="container">
      <div class="row g-4 mb-4 align-items-center">
        <div class="col-lg-6 col-md-6 col-12">
          <?php echo @$htmlcontent4 ?>
        </div>
        <div class="col-lg-6 col-md-6 col-12 white-bg-form">
         <div class="image-box text-center">

    <div class="ratio ratio-16x9">
        <iframe 
            src="https://www.youtube.com/embed/drEGETmKePQ" 
            title="YouTube loading video"
            allowfullscreen
            loading="lazy">
        </iframe>
    </div>

    </div>
        </div>
      </div>
      <div class="col-lg-12">
        <?php echo @$htmlcontent5 ?>
      </div>
    </div>
  </section>

  <section id="review" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <p class="h2 fw-bold review-heading">
          Customer's Reviews & Ratings
        </p>
      </div>
      <div class="row g-4">
        <?php
        $where['status'] = 1;
        $where['stars'] = 5;
        $reviews = $this->db->order_by('r_id', 'desc')->where($where)->get('reviews', 6);
        if ($reviews->num_rows() == 0) { ?>
          <div class="col-12 text-center">
            <div class="py-5">
              <i class="bi bi-emoji-frown fs-1 text-muted mb-3 d-block"></i>
              <span class="text-muted fw-bold">No reviews yet...</span>
              <p class="text-secondary">
                Be the first to share your experience!
              </p>
            </div>
          </div>
        <?php } else {
          foreach ($reviews->result() as $r) {
            $pdate = explode(" ", $r->posted_date);
            $pdate = $pdate[0];
            $size = explode("@", $r->email);
            $size = strlen($size[0]) - 4;
            $lem = substr($r->email, -12);
            $fem = substr($r->email, 0, 4);
            $st = '';
            for ($i = 0; $i < $size; $i++) {
              $st .= "*";
            }
            $em = $fem . $st . $lem;
            ?>
            <div class="col-lg-4 col-md-6">
              <div class="card h-100 border-0 shadow rounded-4 overflow-hidden review-card" itemprop="review" itemscope
                itemtype="https://schema.org/Review">
                <div class="card-header py-3 border-0 review-card-header">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-1">
                      <?php for ($i = 0; $i < $r->stars; $i++) { ?>
                        <i class="bi bi-star-fill text-warning"></i>
                      <?php } ?>
                      <?php for ($i = $r->stars; $i < 5; $i++) { ?>
                        <i class="bi bi-star review-empty-star"></i>
                      <?php } ?>
                    </div>
                  <span class='badge bg-warning text-dark fw-bold px-3 py-2 review-rating-badge' itemprop='reviewRating' itemscope itemtype='https://schema.org/Rating'>
                    <span itemprop='ratingValue'><?= $r->stars ?></span>/5
                  </span>
                  </div>
                </div>
                <div class="card-body p-4">
                  <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                    <meta itemprop="name" content="Packers and Movers in <?= $city ?>" />
                  </div>
                  <div class="mb-3">
                    <i class="bi bi-quote fs-1 review-quote-icon"></i>
                  </div>
                  <span class="card-title fw-bold mb-3 d-block review-title" itemprop="name">
                    <?= ucfirst($r->r_title) ?>
                  </span>
                  <p class="card-text text-secondary mb-4" itemprop="reviewBody">
                    <?= mb_strimwidth($r->r_desc, 0, 150, "..."); ?>
                  </p>
                </div>
                <div class="card-footer bg-white border-top py-3">
                  <div class="d-flex align-items-center mb-2">
                    <div
                      class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3 review-avatar">
                      <span class="text-white fw-bold">
                        <?= strtoupper(substr($r->name, 0, 1)) ?>
                      </span>
                    </div>
                    <div class="overflow-hidden" itemprop="author" itemscope itemtype="https://schema.org/Person">
                      <span class="mb-0 fw-bold text-dark text-truncate" itemprop="name">
                        <?= ucfirst($r->name) ?>
                      </span>
                      <small class="text-muted d-block text-truncate review-email">
                        <i class="bi bi-envelope me-1"></i><?= $em ?>
                      </small>
                    </div>
                  </div>
                  <!-- Date -->
                  <div class="d-flex justify-content-end">
                    <span class="badge border px-3 py-2 review-date-badge" itemprop="datePublished" content="<?= $pdate ?>">
                      <i class="bi bi-calendar-event me-1"></i><?= $pdate ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          <?php }
        } ?>
      </div>
      <?php if ($reviews->num_rows() > 0) { ?>
        <div class="text-center mt-5">
          <a href="reviews" class="btn btn-lg px-5 rounded-pill shadow text-white review-btn">
            <i class="bi bi-chat-dots me-2"></i>
            View All Reviews
          </a>
        </div>
      <?php } ?>
    </div>
  </section>

  <div class="container my-5 city-insights-wrap">
    <div class="row g-4 align-items-stretch">
      <div class="col-12 col-lg-6">
        <?php
        $city_keywords = array(
          "Packers And Movers",
          "Best Packers And Movers",
          "Professional Packers And Movers",
          "Affordable Packers And Movers",
          "Packers And Movers Services",
          "Local Packers And Movers",
          "Household Shifting Services",
          "Home Shifting Services",
          "Office Shifting Services",
          "Local Shifting Services",
          "Long Distance Movers",
          "Interstate Moving Services",
          "Packing And Moving Services",
          "Loading And Unloading Services",
          "Car Transportation Services",
          "Bike Transport Services",
          "Furniture Moving Services",
          "Moving And Storage Services",
          "Residential Moving Companies",
          "Commercial Moving Company"
        );

        $keywords_with_city = array_map(function ($k) use ($city) {
          return "$k in $city";
        }, $city_keywords);
        shuffle($keywords_with_city);

        $cityLabel = htmlspecialchars($city, ENT_QUOTES, 'UTF-8');
        ?>
        <section class="city-keyword-panel h-100">
          <div class="city-section-head">
            <div>
              <span class="city-section-kicker">Local search terms</span>
              <span class="city-section-title">Relevant Keywords in <?= $cityLabel ?></span>
            </div>
            <span class="keyword-count"><?= count($keywords_with_city) ?> Terms</span>
          </div>
          <ul class="city-keyword-grid">
            <?php foreach ($keywords_with_city as $k) { ?>
              <li class="city-keyword-chip">
                <?= htmlspecialchars($k, ENT_QUOTES, 'UTF-8') ?>
              </li>
            <?php } ?>
          </ul>
        </section>
      </div>
      <div class="col-12 col-lg-6">
        <section class="city-guides-panel h-100">
          <div class="city-section-head">
            <div>
              <span class="city-section-kicker text-danger">Must-read</span>
              <h3 class="city-section-title">Tips &amp; Guides</h3>
            </div>
            <i class="bi bi-book city-guide-icon"></i>
          </div>
          <div class="guide-list">
            <?php
            $this->db->order_by("b_id", "desc");
            $query = $this->db->get('blog', 3);
            foreach ($query->result() as $brows) {
              $nm = str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $brows->title))));
              $link = strtolower(site_url('blog/read/' . $nm . '/' . $brows->b_id));
              $img = $brows->image
                ? base_url("assets/uploads/blog/$brows->image")
                : base_url('assets/img/logo.png');
              $blogTitle = htmlspecialchars($brows->title, ENT_QUOTES, 'UTF-8');
              ?>
              <article class="guide-card">
                <a href="<?= $link ?>" class="guide-thumb">
                  <img src="<?= $img ?>" alt="<?= $blogTitle ?>" loading="lazy">
                  <span class="guide-views">
                    <i class="icofont-eye me-1"></i><?= number_format($brows->views) ?>
                  </span>
                </a>
                <div class="guide-copy">
                  <h4 class="guide-title">
                    <a href="<?= $link ?>" title="<?= $blogTitle ?>">
                      <?= htmlspecialchars(character_limiter($brows->title, 68), ENT_QUOTES, 'UTF-8') ?>
                    </a>
                  </h4>
                  <p>
                    <?= htmlspecialchars(character_limiter(strip_tags($brows->description), 105), ENT_QUOTES, 'UTF-8') ?>
                  </p>
                </div>
              </article>
            <?php } ?>
          </div>
          <div class="text-end mt-4">
            <a href="<?= site_url('blog') ?>" class="city-view-all-btn">
              View All Articles
              <i class="icofont-long-arrow-right ms-1"></i>
            </a>
          </div>
        </section>
      </div>
    </div>
  </div>


  <div class="container my-5">
    <div class="row">
      <div class="col-lg-12">
        <?php echo @$htmlcontent6 ?>
        <?php $this->load->view('packers_movers/table2.php'); ?>
      </div>
    </div>
  </div>
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-12">
        <?php echo @$htmlcontent7 ?>
      </div>
    </div>
  </div>
  <?php $this->load->view('contacts/faq.php'); ?>
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row g-4">
        <!-- Image 1 -->
        <div class="col-12 col-md-6">
          <img src="<?= base_url('assets/images/service/allcity34.png') ?>" class="img-fluid w-100 custom-img"
            alt="house-shifting-in-<?= $city ?>">
        </div>
        <!-- Image 2 -->
        <div class="col-12 col-md-6">
          <img src="<?= base_url('assets/images/service/allcity31.png') ?>" class="img-fluid w-100 custom-img"
            alt="office-shifting-in-<?= $city ?>">
        </div>
      </div>
    </div>
  </section>
  <?php $this->load->view('home/testimonial.php'); ?>

  <!-- slimcity -->
    <?php
  $services = [
    [
      "title" => "Home Shifting  in $city",
      "desc" => "When it comes to office shifting in $city, the biggest concern is simple- that you want your work to stop for the shortest time possible. You want your computers, files, and furniture to reach safely. And you want a team that understands how important time is for your business.",
      "link" => "home-shifting-in-",
      "btn" => "Home Shifting in $city →",
      "img" => "local.png"
    ],
    [
      "title" => "Office Shifting in $city ",
      "desc" => "When it comes to office shifting in $city, the biggest concern is simple- that you want your work to stop for the shortest time possible. You want your computers, files, and furniture to reach safely. And you want a team that understands how important time is for your business.",
      "link" => "office-shifting-in-",
      "btn" => "Office Shifting in $city →",
      "img" => "office.png"
    ],
     [
      "title" => "Car Transport in $city ",
      "desc" => "When it comes to car transport in $city, the biggest concern is simple- that you want your vehicle to reach its destination safely and on time. You want a team that understands how important it is to handle your car with care.",
      "link" => "car-transport-in-",
      "btn" => "Car Transport in $city →",
      "img" => "car-transport.png"
    ],    
     [
      "title" => "IBA Approved Service in $city ",
      "desc" => "When it comes to iba approved services in $city, the biggest concern is simple- that you want your work to stop for the shortest time possible. You want your computers, files, and furniture to reach safely. And you want a team that understands how important time is for your business.",
      "link" => "iba-approved-packers-in-",
      "btn" => "IBA Approved Packers and Movers in $city →",
      "img" => "iba.png"
    ],
  ];
  ?>
  <?php
  shuffle($services);
  ?>
 <?php foreach ($services as $service): ?>
    <section class="py-3 bg-white">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-8">
            <span class="fw-bold mb-2"><?= eval ("return \"{$service['title']}\";"); ?></span>
            <p class="lh-lg mb-3"><?= $service['desc']; ?></p>
            <a href="<?= site_url($service['link'] . strtolower(str_replace(' ', '-', $city))) ?>"
              class="btn text-danger border-5 d-inline-block">
              <span class="fw-semibold"><?= eval ("return \"{$service['btn']}\";"); ?></span>
            </a>
          </div>
          <div class="col-12 col-lg-4 text-center mt-4 mt-lg-0">
            <img src="<?= base_url('assets/images/service/' . $service['img']) ?>"
              alt="<?= eval ("return \"{$service['title']}\";"); ?> in <?= $city ?>" loading="lazy"
              class="img-fluid rounded-3 acx-inline-029">
          </div>
        </div>
      </div>
    </section>
  <?php endforeach; ?>

  <?php if (in_array(strtolower($city), ['zirakpur',], true)) {
    include 'city_from_to_links.php';
  } ?>
  <div class="container my-5">
    <div class="row">
      <div class="col-lg-12">
        <?php $this->load->view('packers_movers/cta_section.php'); ?>
      </div>
    </div>
  </div>