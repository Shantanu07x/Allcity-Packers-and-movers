<section class="faq-section py-5">
  <div class="container">
    <div class="row gx-4">

      <!-- Left Column: FAQ -->
      <div class="col-lg-8 col-12">
  <div class="faq-wrapper mx-auto p-4 rounded">
    <span class="text-center mb-2 fs-4 d-block">Frequently Asked Questions</span>
    <p class="text-center mb-4 fs-4 text-muted">we are providing</p>

    <!-- FAQ Items -->
    <div class="item border rounded mb-3 p-3 open">
      <div class="title d-flex justify-content-between align-items-center fw-bold">
        <span><i class="bi bi-box me-2"></i> Why should I choose IBA approved Packers and Movers?</span>
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="answer">
        <p class="mt-3 mb-0 text-muted">
          Choosing IBA approved Packers and Movers ensures that your relocation is handled safely and professionally. These service providers follow proper guidelines, use quality packing materials, and have trained staff to manage your belongings carefully from start to finish.
        </p>
      </div>
    </div>

    <div class="item border rounded mb-3 p-3">
      <div class="title d-flex justify-content-between align-items-center fw-bold">
        <span><i class="bi bi-box-seam me-2"></i> Are your services insured?</span>
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="answer">
        <p class="mt-3 mb-0 text-muted">
          Yes, our services include insurance options to provide extra protection for your belongings. This ensures that in case of any unexpected damage or loss during transit, you are financially covered and stress-free.
        </p>
      </div>
    </div>

    <div class="item border rounded mb-3 p-3">
      <div class="title d-flex justify-content-between align-items-center fw-bold">
        <span><i class="bi bi-calendar-check me-2"></i> How can I book your service?</span>
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="answer">
        <p class="mt-3 mb-0 text-muted">
          You can easily book our service through multiple options such as phone call, email, WhatsApp, or by filling out the contact form on our website. Our team will quickly respond and guide you through the process.
        </p>
      </div>
    </div>

    <div class="item border rounded mb-3 p-3">
      <div class="title d-flex justify-content-between align-items-center fw-bold">
        <span><i class="bi bi-shield-check me-2"></i> Are your movers trained and professional?</span>
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="answer">
        <p class="mt-3 mb-0 text-muted">
          Yes, our movers are highly trained and experienced professionals who know how to handle all types of items carefully. They ensure safe packing, loading, transportation, and unloading of your belongings.
        </p>
      </div>
    </div>

    <div class="item border rounded mb-3 p-3">
      <div class="title d-flex justify-content-between align-items-center fw-bold">
        <span><i class="bi bi-credit-card me-2"></i> When should I book Packers and Movers?</span>
        <i class="bi bi-chevron-down"></i>
      </div>
      <div class="answer">
        <p class="mt-3 mb-0 text-muted">
          It is recommended to book Packers and Movers at least 5 to 7 days in advance. This helps you secure your preferred date and ensures proper planning for a smooth and hassle-free relocation experience.
        </p>
      </div>
    </div>

  </div>
</div>

      <!-- Right Column: Offer/Ad -->
      <div class="col-lg-4 col-12">
        <div class=" card offer-box p-4 rounded text-center">
          <span class="mb-3 fs-5">Limited Time Offer on <strong>All Cities Movers and Packers</strong></span>

          <p class="mb-3">Save Up To <strong>10%</strong> on Premium Moving Packages</p>

          <ul class="text-start mb-3">
            <li>✅ Verified and Experienced Team</li>
            <li>✅ Serving Customers Across All Cities</li>
            <li>✅ Top-Rated Packers & Movers in the Industry</li>
            <li>✅ Safe & Secure Handling of Your Goods</li>
          </ul>
          <a href="<?= site_url("contacts") ?>" class="btn btn-primary w-100">Book Now</a>
        </div>
        <div class="card text-center py-4 px-3 my-3">
          <span class="card-title mb-4 fs-5">All Cities Movers and Packers</span>
          <a href="<?= $phonehtml ?>" class="btn btn-success btn-lg w-100 mb-3">Call Us</a>
          <a href="#qteModal" data-bs-toggle="modal" class="btn btn-danger btn-lg w-100">Get a Quote</a>
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
