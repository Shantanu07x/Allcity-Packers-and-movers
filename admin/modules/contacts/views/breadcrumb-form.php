<section class="top-section section" data-animate="bottom" data-delay="1">
    <div class="container form-backgr text-white rounded-top shadow">
        <div class="row align-items-center">
            <!-- Phone Icon -->
            <div class="col-lg-1 col-2 text-center mt-3 position-relative">
                <a href="<?=$phone?>" aria-label="Phone-number">
                    <i class="fa-solid fa-phone phone-mar"></i>
                </a>
            </div>

            <!-- Phone Number -->
            <div class="col-lg-3 col-8 mt-3 phone-num text-lg-start text-center">
                <a href="<?=$phone?>" class="text-white text-decoration-none">
                    <p class="h5 mb-0 fw-bold"><?=$phone?></p>
                </a>
                <p class="small mb-0">Shifting House & Vehicle</p>
            </div>

            <!-- Service Menu -->
            <div class="col-lg-7 mt-lg-0 mt-3 py-3">
                <div class="row g-2 justify-content-center">
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-truck-moving"></i></a>
                            <a href="#" class="service-btn" data-service="Domestic Shifting">
                                Domestic Shifting
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-location-dot"></i></a>
                            <a href="#" class="service-btn" data-service="Local Shifting">
                                Local Shifting
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-car-rear"></i></a>
                            <a href="#" class="service-btn" data-service="Car Transport">
                                Car Transport
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-motorcycle"></i></a>
                            <a href="#" class="service-btn" data-service="Bike Transport">
                                Bike Transport
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-building"></i></a>
                            <a href="#" class="service-btn" data-service="Office Relocation">
                                Office Relocation
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-coins"></i></a>
                            <a href="#" class="service-btn" data-service="Commercial Moving">
                                Commercial Moving
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-plane"></i></a>
                            <a href="#" class="service-btn" data-service="International Moving">
                                International Moving
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-3">
                        <div class="btn-manual position-relative">
                            <span class="selected-label">Selected</span>
                            <a class="form-service-icon" href="#"><i class="fa-solid fa-warehouse"></i></a>
                            <a href="#" class="service-btn" data-service="Storage & Warehousing">
                                Storage & Warehousing
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote Form -->
    <div class="container bg-white shadow-sm rounded-bottom quote-background">
        <div class="quote-form-container py-4 px-3">
            <h2 class="h5 fw-bold text-center text-black mb-4">
                Get a free <span id="service-title" class="text-danger">Domestic Shifting</span> quote
            </h2>

            <form method="post" id="qteform1" action="get">
                <input type="hidden" name="category" id="category">
                <input type="hidden" name="page_url" value="">

                <div class="row g-3">
                    <div class="col-lg-3 col-6">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone No." required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="text" name="mf" id="mf" class="form-control" placeholder="Moving From" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="text" name="mt" id="mt" class="form-control" placeholder="Moving To" required>
                    </div>
                    <div class="col-lg-3 col-6">
                        <input type="date" name="dt" id="moving-date" class="form-control" required>
                    </div>
                    <div class="col-lg-3">
                        <textarea name="message" id="message" class="form-control" rows="1" placeholder="Message"></textarea>
                    </div>
                    <div class="col-lg-3">
                        <div id="result4" class="small mb-2"></div>
                        <button id="submitbtn4" type="button" class="btn btn-danger bg-dark-red w-100 fw-bold py-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        // Date initialization
        let today = new Date().toISOString().split('T')[0];
        $('#moving-date').val(today).attr('min', today);
        $('#category').val($('#service-title').text());

        // Service select - first one selected by default
        $(".btn-manual").first().addClass("selected-btn");
        $(".btn-manual").first().find(".selected-label").show();

        // Service button click handler - use event delegation and prevent all navigation
        $(document).on('click', '.service-btn, .form-service-icon', function (e) {
            e.preventDefault();
            e.stopPropagation();
            
            let $btnManual = $(this).closest(".btn-manual");
            
            $(".btn-manual").removeClass("selected-btn");
            $(".selected-label").hide();
            $btnManual.addClass("selected-btn");
            $btnManual.find(".selected-label").show();

            let serviceName = $btnManual.find(".service-btn").data("service");
            $("#service-title").text(serviceName);
            $("#category").val(serviceName);
            
            return false;
        });
    });
</script>
