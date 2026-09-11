<!-- Quote Modal -->
<div class="modal fade" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg acx-inline-018">

      <!-- Header -->
      <div class="modal-header bg-primary text-white">
        <span class="modal-title fw-semibold fs-5"><i class="bi bi-clipboard-data me-2"></i>Get a Free Quote</span>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Form -->
      <form method="post" id="quotemodal" onsubmit="return false;">
        <div class="modal-body bg-light">

          <!-- Row 1 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label text-primary fw-semibold"><i class="bi bi-person me-1"></i> Your
                Name</label>
              <input type="text" class="form-control shadow-sm" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label text-primary fw-semibold"><i class="bi bi-telephone"></i>
                Mobile Number</label>
              <input type="tel" class="form-control shadow-sm" name="phone" id="phone"
                placeholder="Enter your mobile number">
            </div>
          </div>

          <!-- Row 2 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label for="email" class="form-label text-primary fw-semibold"><i class="bi bi-envelope-fill"></i> Your
                Email</label>
              <input type="email" class="form-control shadow-sm" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="col-md-6">
              <label for="mfrom" class="form-label text-primary fw-semibold"><i
                  class="bi bi-geo-alt me-1"></i>From</label>
              <input type="text" class="form-control shadow-sm" name="mfrom" id="mfrom" placeholder="Moving From">
            </div>
          </div>
          <!-- Row 3 -->
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label for="mto" class="form-label text-primary fw-semibold"><i class="bi bi-pin me-1"></i> To</label>
              <input type="text" class="form-control shadow-sm" name="mto" id="mto" placeholder="Moving To">
            </div>
            <div class="col-md-6">
              <label for="message" class="form-label text-primary fw-semibold"><i
                  class="bi bi-chat me-1"></i>Message</label>
              <textarea name="message" id="message" class="form-control shadow-sm" rows="3"
                placeholder="Write your message"></textarea>
            </div>
          </div>
          <div id="resultquotemodal" class="mt-3"></div>
        </div>
        <div class="modal-footer d-flex justify-content-between bg-white">
          <button type="reset" class="btn btn-outline-primery bg-primary text-white px-4"
            onclick="$('#resultquotemodal').html('');">
            <i class="bi bi-arrow-counterclockwise me-1 text-white"></i> Clear
          </button>
          <button type="submit" id="submitquotemodal" class="btn btn-black bg-primary px-4 text-white">
            <i class="bi bi-send-fill me-1"></i> Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Script (unchanged logic) -->
<script type="text/javascript">
  $(function () {
    $('#submitquotemodal').click(function () {
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('contacts/booking') ?>",
        data: $("#quotemodal").serialize(),
        beforeSend: function () {
          $('#resultquotemodal').html('<p class="text-center text-muted">Please wait...</p>');
        },
        success: function (data) {
          $('#resultquotemodal').empty();
          if (data == '1') {
            data = "<div class='alert alert-success'>Thank you! Your quote request has been successfully submitted. We'll respond soon.</div>";
            $("#quotemodal").trigger('reset');
            gtag('event', 'conversion', { 'send_to': 'AW-16778879117/JlJPCPjgvOwZEI3B5cA-' });
          }
          $('#resultquotemodal').html(data);
        }
      });
    });
  });
</script>
