<section class="faq-section py-5" itemscope itemtype="https://schema.org/FAQPage">
  <div class="container">
    <div class="row gx-4">

      <!-- Left Column: FAQ -->
      <div class="col-lg-8 col-12">
        <div class="faq-wrapper mx-auto p-4 rounded">

          <h3 class="text-center mb-2 fs-4">
            Frequently Asked Questions
          </h3>

          <p class="text-center mb-4 text-muted">
            we are providing the basic and super sensitive and important information about our services, which you guys might have some questions about services like how we transport or shift the goods and products.
          </p>

          <!-- FAQ 1 -->
          <div class="item border rounded mb-3 p-3 open"
               itemprop="mainEntity"
               itemscope
               itemtype="https://schema.org/Question">

            <div class="title d-flex justify-content-between align-items-center fw-bold">
              <span itemprop="name">
                <i class="bi bi-box me-2"></i>
                What is the charge of packers and movers in <?php echo $city ?>
              </span>

              <i class="bi bi-chevron-down"></i>
            </div>

            <div class="answer"
                 itemprop="acceptedAnswer"
                 itemscope
                 itemtype="https://schema.org/Answer">

              <p class="mt-3 mb-0 text-muted" itemprop="text">
                The number of items, distance, packing requirements, and type of vehicle decides the charge for the shifting service.
              </p>

            </div>
          </div>


          <!-- FAQ 2 -->
          <div class="item border rounded mb-3 p-3"
               itemprop="mainEntity"
               itemscope
               itemtype="https://schema.org/Question">

            <div class="title d-flex justify-content-between align-items-center fw-bold">
              <span itemprop="name">
                <i class="bi bi-box-seam me-2"></i>
                How much time does shifting usually take?
              </span>

              <i class="bi bi-chevron-down"></i>
            </div>

            <div class="answer"
                 itemprop="acceptedAnswer"
                 itemscope
                 itemtype="https://schema.org/Answer">

              <p class="mt-3 mb-0 text-muted" itemprop="text">
                Local shifting within <?= $city ?> is often completed on the same day. Bigger moves may take more time depending on packing and transport conditions.
              </p>

            </div>
          </div>


          <!-- FAQ 3 -->
          <div class="item border rounded mb-3 p-3"
               itemprop="mainEntity"
               itemscope
               itemtype="https://schema.org/Question">

            <div class="title d-flex justify-content-between align-items-center fw-bold">
              <span itemprop="name">
                <i class="bi bi-calendar-check me-2"></i>
                What should customers do before the moving day?
              </span>

              <i class="bi bi-chevron-down"></i>
            </div>

            <div class="answer"
                 itemprop="acceptedAnswer"
                 itemscope
                 itemtype="https://schema.org/Answer">

              <p class="mt-3 mb-0 text-muted" itemprop="text">
                Customers should sort essential documents, medicines, chargers, and personal valuables separately with them for easy access during the move.
              </p>

            </div>
          </div>


          <!-- FAQ 4 -->
          <div class="item border rounded mb-3 p-3"
               itemprop="mainEntity"
               itemscope
               itemtype="https://schema.org/Question">

            <div class="title d-flex justify-content-between align-items-center fw-bold">
              <span itemprop="name">
                <i class="bi bi-shield-check me-2"></i>
                Are the items safe during transport?
              </span>

              <i class="bi bi-chevron-down"></i>
            </div>

            <div class="answer"
                 itemprop="acceptedAnswer"
                 itemscope
                 itemtype="https://schema.org/Answer">

              <p class="mt-3 mb-0 text-muted" itemprop="text">
                Your items are totally safe with professional movers like All City Movers Packers. Professional movers use proper packing materials and careful loading methods to reduce the risk of damage during shifting.
              </p>

            </div>
          </div>


          <!-- FAQ 5 -->
          <div class="item border rounded mb-3 p-3"
               itemprop="mainEntity"
               itemscope
               itemtype="https://schema.org/Question">

            <div class="title d-flex justify-content-between align-items-center fw-bold">
              <span itemprop="name">
                <i class="bi bi-credit-card me-2"></i>
                When should I book Packers and Movers in <?= $city ?>?
              </span>

              <i class="bi bi-chevron-down"></i>
            </div>

            <div class="answer"
                 itemprop="acceptedAnswer"
                 itemscope
                 itemtype="https://schema.org/Answer">

              <p class="mt-3 mb-0 text-muted" itemprop="text">
                We recommend booking 5-7 days in advance for <?= $city ?> to secure your preferred slot.
              </p>

            </div>
          </div>

        </div>
      </div>


      <!-- Right Column: Offer/Ad -->
      <div class="col-lg-4 col-12">

        <div class="card offer-box p-4 rounded text-center">

          <span class="mb-3 fs-5">
            Limited Time Offer on
            <strong>All Cities Movers and Packers</strong>
          </span>

          <p class="mb-3">
            Save Up To <strong>10%</strong> on Premium Moving Packages
          </p>

          <ul class="text-start mb-3">
            <li>✅ Verified and Experienced Team</li>
            <li>✅ Serving Customers Across All Cities</li>
            <li>✅ Top-Rated Packers & Movers in the Industry</li>
            <li>✅ Safe & Secure Handling of Your Goods</li>
          </ul>

          <a href="<?= site_url("contacts") ?>"
             class="btn btn-primary w-100">
            Book Now
          </a>

        </div>


        <div class="card text-center py-4 px-3 my-3">

          <span class="card-title mb-4 fs-5">
            All Cities Movers and Packers
          </span>

          <a href="<?= $phonehtml ?>"
             class="btn btn-success btn-lg w-100 mb-3">
            Call Us
          </a>

          <a href="#qteModal"
             data-bs-toggle="modal"
             class="btn btn-danger btn-lg w-100">
            Get a Quote
          </a>

        </div>

      </div>

    </div>
  </div>
</section>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.faq-section .item');
    let lastOpen = 0; // first item open by default

    items.forEach((el, i) => {
      // Open first item by default
      if (i === 0) {
        el.classList.add('open');
      }

      el.querySelector('.title').addEventListener('click', function () {
        // Close previous if different
        if (lastOpen !== i && items[lastOpen]) {
          items[lastOpen].classList.remove('open');
        }

        // Toggle current item
        el.classList.toggle('open');

        // Update lastOpen index
        lastOpen = i;
      });
    });
  });
</script>
