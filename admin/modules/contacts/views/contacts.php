<?php $this->load->view('template/breadcrumb'); ?>

<div class="content py-3">
    <div class="container">
        <div class="row align-items-center row-gap-4">
            <div class="col-xl-7 col-lg-7">
                <div class="mb-4 mb-lg-0">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="mb-3"><span class="dark-red">Reach Out</span> to Our Dedicated Support Team<span
                                    class="dark-red">.</span></h2>
                        </div>
                    </div>
                    <div class="mb-4">
                        <span class="mb-2">Our team is ready to help. Your satisfaction is our priority</span>
                        <p>Let's plan your perfect move together. Contact us for a free quote and discover why thousands
                            of customers trust us for their relocation needs.</p>
                    </div>
                    <div class="border-bottom mb-4">
                        <div class="d-flex align-items-center mb-4">
                            <span class="avatar avatar-lg rounded-3 bg-danger px-3 py-2 text-black me-2"><i
                                    class="bi bi-envelope-fill"></i></span>
                            <div>
                                <p class="fs-14 bold mb-0">Email Address</p>
                                <span class="text-black fs-16"><a class="text-decoration-none dark-red"
                                        href="<?= $mailhtml ?>"><?= $mail ?></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-4">
                        <div class="d-flex align-items-center mb-4">
                            <span class="avatar avatar-lg rounded-3 bg-danger px-3 py-2 text-black me-2"><i
                                    class="bi bi-telephone"></i></i></span>
                            <div>
                                <p class="fs-14 bold mb-0">Phone Number</p>
                                <span class="text-black fs-16"><a class="text-decoration-none dark-red"
                                        href="<?= $phonehtml ?>"><?= $phone ?></a></span><br>
                                <span class="text-black fs-16"><a class="text-decoration-none dark-red"
                                        href="<?= $phonehtml1 ?>"><?= $phone1 ?></a></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center">
                            <span class="avatar avatar-lg rounded-3 bg-danger px-3 py-2 text-black me-2"><i
                                    class="bi bi-building text-white"></i></span>
                            <div>
                                <p class="fs-14 bold mb-0">Our Address</p>
                                <span class="text-black fs-16">
                                    <address><?= $address ?></address>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="card bg-gray shadow-none mb-0">
                    <div class="card-body p-3">
                        <div class="mb-3">
                            <h2 class="mb-1 fw-bold">Get in Touch</h2>
                            <p class="text-black fs-16 mb-1">How we can help you? Please write down your query</p>
                        </div>
                        <form method="post" id="getintouchform" onsubmit="return false" class="row flex-column">
                            <div class="col-12 form_box mb-3">
                                <label class="form-label"><b>Full Name</b> <span class="text-danger">*</span></label>
                                <input type="text" name="name" placeholder="Full Name" class="form-control">
                            </div>
                            <div class="col-12 form_box mb-3">
                                <label class="form-label"><b>Email</b> <span class="text-danger">*</span></label>
                                <input type="email" name="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="col-12 form_box mb-3">
                                <label class="form-label"><b>Phone</b> <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" placeholder="Phone Number" class="form-control">
                            </div>
                            <div class="col-12 form_box mb-3">
                                <label class="form-label"><b>Message</b> <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="message" placeholder="Your Message"
                                    rows="3"></textarea>
                            </div>
                            <div class="col-12 form_box">
                                <div class="d-flex my-3">
                                    <button type="button" id="submitcontactbtn" class="btn btn-danger text-white">
                                        Send Message &nbsp; <i class="bi bi-send-fill me-1"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12" id="resulttouch"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="map-grid py-3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1711.74255400186!2d75.88183508828732!3d30.901061845112274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s1226%2F6-B%2F3%2C%20Street%20No.%203%2C%20Hira%20Nagar%2C%20Delhi%20Road%2C%20Opp.%20Transport%20Nagar%2C%20Ludhiana%20(Punjab)%20%E2%80%93%20141003!5e0!3m2!1sen!2sin!4v1772183418702!5m2!1sen!2sin"
                width="100%" height="450" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="acx-inline-011"></iframe>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#submitcontactbtn').click(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/contact'); ?>", // Update with your endpoint
                data: $("#getintouchform").serialize(),
                beforeSend: function () {
                    $('#resulttouch').html('<p class="acx-inline-017">Please wait...</p>');
                },
                success: function (data) {
                    $('#resulttouch').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'><h4>Success! Your message has been submitted successfully. We will contact you soon.</h4></div>";
                        $("#getintouchform").trigger('reset');
                    }
                    $('#resulttouch').html(data);
                    setTimeout(function () {
                        $('#resulttouch').fadeOut('slow', function () {
                            $(this).empty().show();
                        });
                    }, 2000);
                }
            });
        });
    });
</script>
