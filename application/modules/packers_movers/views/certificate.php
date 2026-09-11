<div class="container bg-white rounded-5">
  <div class="row text-center mt-5 mb-1">

    <div class="col-6 col-lg-3 flip_box">
      <img class="flip_img" src="<?= base_url('assets/images/gallery/badge1.webp')?>" alt="IBA Approved" loading="lazy"/>
      <div class="reason">
        <span>IBA Approved</span>
        <p class="head1">Get professional IBA-certified packers and movers for seamless shifting across India.</p>
      </div>
    </div>

    <div class="col-6 col-lg-3 flip_box">
      <img class="flip_img" src="<?= base_url('assets/images/gallery/badge2.webp')?>" alt="5 Star Rating" loading="lazy"/>
      <div class="reason">
        <span>5 Star Rating</span>
        <p class="head1">Five Star movers ensuring safe, secure, and efficient shifting solutions.</p>
      </div>
    </div>

    <div class="col-6 col-lg-3 flip_box">
      <img class="flip_img" src="<?= base_url('assets/images/gallery/badge3.webp')?>" alt="Trusted" loading="lazy"/>
      <div class="reason">
        <span>Trusted</span>
        <p class="head1">Trusted movers delivering secure, timely, and cost-effective relocation services.</p>
      </div>
    </div>

    <div class="col-6 col-lg-3 flip_box">
      <img class="flip_img" src="<?= base_url('assets/images/gallery/badge4.webp')?>" alt="ISO 9001:2015" loading="lazy"/>
      <div class="reason">
        <span>ISO 9001:2015</span>
        <p class="head1">Certified and accredited for relocation, courier services, and secure goods warehousing.</p>
      </div>
    </div>

  </div>
</div>

<style>
  .flip_box {
    transition: transform 0.6s ease-in-out;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
  }

  .flip_box:hover {
    transform: translateY(-10px);
  }

  .flip_img {
    width: 200px;
    height: auto;
    object-fit: cover;
    margin-bottom: 15px;
    transition: transform 0.6s ease-in-out;
  }

  .flip_box:hover .flip_img {
    transform: rotateY(360deg);
  }

  .reason p {
    color: black;
    font-size: 13px;
    line-height: 2;
  }

  .reason span {
    color: black;
    font-weight: 700;
  }

  @media (max-width:576px) {
    .flip_img {
      width: 130px;
    }

    .flip_box {
      padding: 10px;
    }
  }
</style>