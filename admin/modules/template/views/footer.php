<footer class="footer-bg section position-relative overflow-hidden">
  <div class="footer-overlay"></div>
  <div class="container py-5 position-relative">
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-md-6">
            <span class="fw-bold text-warning mb-3 fs-6">Our Services</span>
            <ul class="list-unstyled footer-links small">
              <li><a href="<?= site_url('home-relocation') ?>"><i class="bi bi-chevron-right me-2"></i>Home Relocation</a></li>
              <li><a href="<?= site_url('office-shifting') ?>"><i class="bi bi-chevron-right me-2"></i>Office Moving</a></li>
              <li><a href="<?= site_url('packing-unpacking') ?>"><i class="bi bi-chevron-right me-2"></i>Packing And Unpacking</a></li>
              <li><a href="<?= site_url('vehicle-shifting') ?>"><i class="bi bi-chevron-right me-2"></i>Car Transportation</a></li>
              <li><a href="<?= site_url('storage-service') ?>"><i class="bi bi-chevron-right me-2"></i>Warehousing Services</a></li>
              <li><a href="<?= site_url('transportation-service') ?>"><i class="bi bi-chevron-right me-2"></i>transportation</a></li>
              <li><a href="<?= site_url('local-service') ?>"><i class="bi bi-chevron-right me-2"></i>local service</a></li>
              <li><a href="<?= site_url('logistic-service') ?>"><i class="bi bi-chevron-right me-2"></i>logistic service</a></li>
              <li><a href="<?= site_url('cargo-service') ?>"><i class="bi bi-chevron-right me-2"></i>cargo service</a></li>
            </ul>
          </div> 
          <div class="col-md-6">
            <span class="fw-bold fs-6 text-warning mb-3">Navigation</span>
            <ul class="list-unstyled footer-links small">
              <li><a href="<?= site_url('about') ?>"><i class="bi bi-chevron-right me-2"></i>About Us</a></li>
              <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-chevron-right me-2"></i>Why Choose Us</a></li>
              <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chevron-right me-2"></i>Testimonials</a></li>
              <li><a href="<?= site_url('iba-approved') ?>"><i class="bi bi-chevron-right me-2"></i>IBA Approved</a></li>
              <li><a href="<?= site_url('') ?>"><i class="bi bi-chevron-right me-2"></i>Blogs</a></li>
              <li><a href="<?= site_url('contacts') ?>"><i class="bi bi-chevron-right me-2"></i>Contact Us</a></li>
              <li><a href="<?= site_url('privacy-policy') ?>"><i class="bi bi-chevron-right me-2"></i>Privacy Policy</a></li>
              <li><a href="<?= site_url('terms-and-conditions') ?>"><i class="bi bi-chevron-right me-2"></i>Terms & Conditions</a></li>
              <li><a href="<?= site_url('disclaimer') ?>"><i class="bi bi-chevron-right me-2"></i>Disclaimer</a></li>
              <li><a href="<?= site_url('cookies-policy') ?>"><i class="bi bi-chevron-right me-2"></i>Cookies Policy</a></li>

            </ul>
          </div>
        </div>
        <div class="col-lg-6 text-lg-end">
          <p class="text-white-50 small mb-2">Follow Us:</p>
          <div class="d-flex gap-2 justify-content-lg-end mb-3">
            <a href="https://www.facebook.com/profile.php?id=61591646218028" class="social-icon" aria-label="Facebook">
              <i class="bi bi-facebook"></i>
              <span class="visually-hidden">Facebook</span>
            </a>
            <a href="https://x.com/allindiamovers_" class="social-icon" aria-label="Twitter">
              <i class="bi bi-twitter"></i>
              <span class="visually-hidden">Twitter</span>
            </a>
            <a href="https://www.youtube.com/channel/UCWvUDMrdy7_d2BHpUPi5zsA" class="social-icon" aria-label="YouTube">
              <i class="bi bi-youtube"></i>
              <span class="visually-hidden">YouTube</span>
            </a>
            <a href="https://www.instagram.com/allcitymoverspackers_/" class="social-icon" aria-label="Instagram">
              <i class="bi bi-instagram"></i>
              <span class="visually-hidden">Instagram</span>
            </a>
          </div>
          <img src="<?= base_url('assets/images/home/all-payment-images.png') ?>" loading="lazy"
            alt="Payment Methods"
            class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6">
        <span class="fw-bold text-warning mb-3 fs-6">Get In Touch</span>
        <div class="contact-box mb-3 p-3 bg-dark bg-opacity-25 rounded">
          <span class="fw-bold text-white mb-3 fs-5">All City Movers Packers</span>
          <p class="text-white mb-0">All City Movers Packers is a trusted relocation service provider offering hassle-free home, office, car, and bike shifting solutions. We ensure safe, timely, and affordable moves with expert packing, secure transportation, and professional handling. Book with us for a stress-free relocation experience!</p>
        </div>

        <div class="contact-box mb-3 p-3 bg-dark bg-opacity-25 rounded">
          <span class="text-white small fw-semibold mb-2 fs-6"><i class="fas fa-building me-2 text-warning"></i>Head Office</span>
          <p class="footer-text mb-1 small"><?= $address ?></p>
          <p class="mb-1 small"><i class="fas fa-envelope text-warning me-2"></i><a href="<?= $mailhtml ?>" class="footer-link text-decoration-none"><?= $mail ?></a></p>
          <p class="mb-0 small"><i class="fas fa-phone text-warning me-2"></i><a href="<?= $phonehtml ?>" class="footer-link text-decoration-none"><?= $phone ?></a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom bg-dark-red py-3 mt-1">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center">
        <div class="text-center text-md-start mb-2 mb-md-0">
          <p class="mb-0 text-white small">© Packers and Movers 2026| <span class="text-warning">All Rights</span> Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="floating-row">
  <div id="spm-footer-floating">
    <div class="footer-floating-row">
      <!-- LEFT SIDE (Call + WhatsApp) -->
      <div class="footer-fab-wrapper">
        <ul class="footer-fab-options d-flex gap-2 list-unstyled mb-0">
          <li>
            <a href="<?= $phonehtml ?>" class="footer-fab-icon footer-fab-call" aria-label="Call Us">
              <i class="bi bi-telephone-fill"></i>
            </a>
          </li>
          <li>
            <a href="<?= $whatsapphtml ?>" target="_blank" class="footer-fab-icon footer-fab-whatsapp" aria-label="WhatsApp">
              <i class="bi bi-whatsapp"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- RIGHT SIDE (Quote Button) -->
      <div class="footer-quote-btn" id="quoteBtn">
        <a href="#qteModal" data-bs-toggle="modal"
          class="btn btn-warning d-flex align-items-center  text-white fw-semibold px-3 py-2 rounded-pill">
          Get Quote within 10 mins
          <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<script>
 document.addEventListener("DOMContentLoaded",function(){const quoteBtn=document.getElementById("quoteBtn");window.addEventListener("scroll",function(){if(window.scrollY>120){quoteBtn.style.display="block"}else{quoteBtn.style.display="none"}})})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>
