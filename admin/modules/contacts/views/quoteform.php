<section class="top-section section">

    <!-- TOP BAR -->
    <div class="container text-white rounded-top shadow top-section-bg">
        <div class="row align-items-center">

            <!-- ⭐ SERVICE SCROLL SELECTOR -->
            <div class="col-lg-12">
                <div class="service-scroll">

                    <div class="service-chip active" data-service="Domestic Shifting"
                        data-desc="Complete home relocation service">
                        <i class="bi bi-truck"></i> <small> Domestic </small>
                    </div>

                    <div class="service-chip" data-service="Local Shifting"
                        data-desc="City level relocation assistance">
                        <i class="bi bi-geo-alt"></i> <small>Local </small>
                    </div>

                    <div class="service-chip" data-service="Car Transport" 
                        data-desc="Safe car carrier transportation">
                        <i class="bi bi-car-front"></i> <small>Car </small>
                    </div>

                    <div class="service-chip" data-service="Bike Transport" 
                        data-desc="Secure bike transport service">
                        <i class="bi bi-bicycle"></i> <small> Bike </small>
                    </div>

                    <div class="service-chip" data-service="Office Relocation"
                        data-desc="Corporate office shifting solutions">
                        <i class="bi bi-building"></i> <small> Office </small>
                    </div>

                    <div class="service-chip b-1" data-service="Storage & Warehousing"
                        data-desc="Short & long term storage">
                        <i class="bi bi-box-seam"></i><small>Storage</small>
                    </div>

                    <div class="service-chip" data-service="packing and moving"
                        data-desc="Safe packing and smooth relocation">
                        <i class="bi bi-box"></i> <small> packing and moving </small>
                    </div>

                    <div class="service-chip" data-service="transportation" data-desc="Fast and secure goods transport">
                        <i class="bi bi-truck-flatbed"></i><small>transportation </small>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- ⭐ FORM -->
    <div class="container bg-white shadow-sm rounded-bottom quote-background">
        <div class="quote-form-container py-4 px-3">

            <span class="fs-2 h5 fw-bold text-black mb-1">
                Get a free <span id="service-title" class="text-primary">Domestic Shifting</span> quote
            </span>

            <p id="service-desc" class="small text-muted mb-4">
                Complete home relocation service
            </p>

            <form method="post" id="quotemodal1" onsubmit="return false;">

                <input type="hidden" name="category" id="category" value="Domestic Shifting">

                <div class="row g-3">

                    <div class="col-lg-3 col-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Full Name"
                            aria-label="Full Name" >
                    </div>

                    <div class="col-lg-3 col-6">
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone No."
                            aria-label="Phone No." >
                    </div>

                    <div class="col-lg-3 col-6">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address"
                            aria-label="Email Address">
                    </div>

                    <div class="col-lg-3 col-6">
                        <input type="text" name="mfrom" class="form-control" id="mfrom" placeholder="Moving From"
                            aria-label="Moving From" >
                    </div>

                    <div class="col-lg-3 col-6">
                        <input type="text" name="mto" class="form-control" id="mto" placeholder="Moving To"
                            aria-label="Moving To" >
                    </div>

                    <div class="col-lg-3">
                        <textarea name="message" class="form-control" rows="1" id="message" placeholder="Message"
                            aria-label="Message"></textarea>
                    </div>

                    <div class="col-lg-3">
                        <button type="submit" id="submitquotemodal1" class="btn btn-primary w-100 fw-bold py-2"
                            onclick="$('#resultquotemodal1').html('');">
                            Submit
                        </button>
                    </div>

                    <div id="resultquotemodal1"></div>

                </div>

            </form>

        </div>
    </div>
</section>
<script type="text/javascript">
    $(function () {
        $('#submitquotemodal1').click(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/booking') ?>",
                data: $("#quotemodal1").serialize(),
                beforeSend: function () {
                    $('#resultquotemodal1').html('<p class="text-center text-muted">Please wait...</p>');
                },
                success: function (data) {
                    $('#resultquotemodal1').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'>Thank you! Your quote request has been successfully submitted. We'll respond soon.</div>";
                        $("#quotemodal1").trigger('reset');
                       
                    }
                    $('#resultquotemodal1').html(data);
                }
            });
        });
    });
</script>

<script>$(document).ready(function(){let today=new Date().toISOString().split('T')[0];$('#moving-date').val(today).attr('min',today);$('#category').val($('#service-title').text())});$(document).on("click",".service-chip",function(){$(".service-chip").removeClass("active");$(this).addClass("active");let service=$(this).data("service");let desc=$(this).data("desc");$("#service-title").text(service);$("#service-desc").text(desc);$("#category").val(service);let container=$(".service-scroll");let scrollTo=$(this).position().left+container.scrollLeft()-container.width()/2+$(this).width()/2;container.animate({scrollLeft:scrollTo},300)})</script>
