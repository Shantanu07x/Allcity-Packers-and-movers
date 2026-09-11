<?php $this->load->view('contacts/quoteform'); ?>
<?php $this->load->view('home/process2.php'); ?>
<section class="about-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 position-relative mb-4 mb-lg-0">
        <img src="<?= base_url("assets/images/service/allcity33.png") ?>" class=" main-img w-100" alt="worker"
          loading="lazy">
        <img src="<?= base_url("assets/images/service/allcity34.png") ?>" class="small-img shadow d-none d-md-block"
          alt="loading" loading="lazy">
      </div>
      <div class="col-lg-6">
        <span class="text-dark fw-semibold">About Us</span><br>
        <h2 class="fw-bold mt-2 mb-3">Welcome to All City Movers Packers</h2>
        <p class="text-muted">
          At <strong>All City Movers Packers,</strong> we know how personal moving feels. You aren’t only moving
          furniture; you’re also transferring fond recollections; you’re creating new memories; you may also be starting
          your newest chapter. Therefore, we will ensure all of our clients receive quality service. </p>
        <p class="text-muted">
          We’re a full-service moving company and relocation expert serving families and businesses with trusted
          shifting services both locally and across longer distances. From small 1BHK homes to multi-room apartments,
          office relocations, and special logistics requests, our “experienced moving professionals” have handled over
          5,000 successful relocations with care.</p>
        <!-- STATS -->
        <p class="text-muted">For a lot of customers looking for "Top Rated Moving Companies and Affordable packers and movers," we are the best because
          we provide them with clear communications, consistent timelines, and we take extra care to handle their items
          confidentially. It's more than simply a move; it's confidence.</p>
        <div class="stats d-flex gap-4 my-4 align-items-center">
          <div class="stat-item d-flex align-items-center">
            <div class="stat-circle">90%</div>
            <small class="ms-3">Customer Satisfaction</small>
          </div>
          <!-- Second Stat -->
          <div class="stat-item d-flex align-items-center">
            <div class="stat-circle">90%</div>
            <small class="ms-3">Happy Clients</small>
          </div>
        </div>
        <!-- CHECKLIST -->
        <ul class="about-list">
          <li>Reliable & Efficient Service</li>
          <li>Experienced Team</li>
          <li>Trust & Transparency</li>
        </ul>
        <!-- BUTTON -->
        <a href="<?= site_url("about") ?>" class="btn btn-primary px-4 py-2 mt-3">
          Discover More →
        </a>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('home/iba.php'); ?>
<?php $this->load->view('home/service_section.php'); ?>
<?php $this->load->view('packers_movers/table.php', array('city' => 'All India')); ?>
<?php $this->load->view('home/whychoose.php'); ?>
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">
      <!-- Image 1 -->
      <div class="col-12 col-md-6">
        <img src="<?= base_url('assets/images/service/allcity26.png') ?>" 
             class="img-fluid w-100 custom-img" 
             alt="Image 1">
      </div>
      <!-- Image 2 -->
      <div class="col-12 col-md-6">
        <img src="<?= base_url('assets/images/service/allcity29.png') ?>" 
             class="img-fluid w-100 custom-img" 
             alt="Image 2">
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('home/process.php'); ?>
<?php include('home_faq.php'); ?>
<?php $this->load->view('home/testimonial.php'); ?>
<section class="py-5 home-packing-gallery-section">
  <div class="container">
    <div class="home-packing-gallery-head text-center mx-auto">
      <span class="home-packing-gallery-eyebrow text-dark">Work Gallery</span>
      <h2>Packing Standards You Can See</h2>
      <p>Real packing, careful labeling, and protected handling from completed relocation work.</p>
    </div>
    <div class="row g-4 home-packing-gallery-grid">
      <div class="col-12 col-md-6">
        <figure class="home-packing-gallery-card">
          <img src="<?= base_url('assets/images/service/allcity30.png') ?>" 
               class="img-fluid w-100 customs-img home-packing-gallery-img" 
               alt="Professional furniture packing in progress">
          <figcaption class="home-packing-gallery-caption">
            <span>01</span>
            <strong>Furniture Wrapping</strong>
          </figcaption>
        </figure>
      </div>
      <div class="col-12 col-md-6">
        <figure class="home-packing-gallery-card">
          <img src="<?= base_url('assets/images/service/allcity31.png') ?>" 
               class="img-fluid w-100 customs-img home-packing-gallery-img" 
               alt="Packed household boxes ready for shifting">
          <figcaption class="home-packing-gallery-caption">
            <span>02</span>
            <strong>Box Organization</strong>
          </figcaption>
        </figure>
      </div>
      <div class="col-12 col-md-6">
        <figure class="home-packing-gallery-card">
          <img src="<?= base_url('assets/images/service/allcity36.png') ?>" 
               class="img-fluid w-100 customs-img home-packing-gallery-img" 
               alt="Labeled cartons arranged for relocation">
          <figcaption class="home-packing-gallery-caption">
            <span>03</span>
            <strong>Labeled Cartons</strong>
          </figcaption>
        </figure>
      </div>
      <div class="col-12 col-md-6">
        <figure class="home-packing-gallery-card">
          <img src="<?= base_url('assets/images/service/allcity35.png') ?>" 
               class="img-fluid w-100 customs-img home-packing-gallery-img" 
               alt="Fragile items packed safely for moving">
          <figcaption class="home-packing-gallery-caption">
            <span>04</span>
            <strong>Fragile Protection</strong>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('home/cities.php'); ?>
