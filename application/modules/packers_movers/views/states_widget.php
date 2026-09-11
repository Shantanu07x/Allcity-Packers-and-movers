<main class="main">
  <?php
  $state[] = ["image" => "jharkhand.jpg", "category" => "jharkhand", "title" => "Jharkhand", "link" => "jharkhand"];
  $state[] = ["image" => "bihar.jpg", "category" => "bihar", "title" => "Bihar", "link" => "bihar"];
  $state[] = ["image" => "uttar-pradesh.webp", "category" => "uttar-pradesh", "title" => "Uttar Pradesh", "link" => "uttar-pradesh"];
  // $state[] = ["image"=>"andhra-pradesh.jpg","category"=>"andhra-pradesh","title"=>"Andhra Pradesh","link"=>"andhra-pradesh"];
// $state[] = ["image"=>"arunachal-pradesh.jpg","category"=>"arunachal-pradesh","title"=>"Arunachal Pradesh","link"=>"arunachal-pradesh"];
$state[] = ["image"=>"assam.jpg","category"=>"assam","title"=>"Assam","link"=>"assam"];
  $state[] = ["image" => "chhattisgarh.jpg", "category" => "chhattisgarh", "title" => "Chhattisgarh", "link" => "chhattisgarh"];
  $state[] = ["image" => "delhi.png", "category" => "delhi", "title" => "Delhi", "link" => "delhi"];
  $state[] = ["image"=>"goa.jpg","category"=>"goa","title"=>"Goa","link"=>"goa"];
  $state[] = ["image" => "gujarat.jpg", "category" => "gujarat", "title" => "Gujarat", "link" => "gujarat"];
  $state[] = ["image" => "haryana.jpg", "category" => "haryana", "title" => "Haryana", "link" => "haryana"];
  $state[] = ["image"=>"himachal-pradesh.jpg","category"=>"himachal-pradesh","title"=>"Himachal Pradesh","link"=>"himachal-pradesh"];
  $state[] = ["image" => "jammu-kashmir.jpg", "category" => "jammu-and-kashmir", "title" => "Jammu and Kashmir", "link" => "jammu-and-kashmir"];
  // $state[] = ["image"=>"karnataka.jpg","category"=>"karnataka","title"=>"Karnataka","link"=>"karnataka"];
// $state[] = ["image"=>"kerala.jpg","category"=>"kerala","title"=>"Kerala","link"=>"kerala"];
  $state[] = ["image" => "madhya-pradesh.jpg", "category" => "madhya-pradesh", "title" => "Madhya Pradesh", "link" => "madhya-pradesh"];
  $state[] = ["image" => "maharashtra.png", "category" => "maharashtra", "title" => "Maharashtra", "link" => "maharashtra"];
  // $state[] = ["image"=>"manipur.jpg","category"=>"manipur","title"=>"Manipur","link"=>"manipur"];
// $state[] = ["image"=>"meghalaya.jpg","category"=>"meghalaya","title"=>"Meghalaya","link"=>"meghalaya"];
// $state[] = ["image"=>"mizoram.jpg","category"=>"mizoram","title"=>"Mizoram","link"=>"mizoram"];
// $state[] = ["image"=>"nagaland.jpg","category"=>"nagaland","title"=>"Nagaland","link"=>"nagaland"];
// $state[] = ["image"=>"odisha.jpg","category"=>"odisha","title"=>"Odisha","link"=>"odisha"];
  $state[] = ["image" => "punjab.png", "category" => "punjab", "title" => "Punjab", "link" => "punjab"];
// $state[] = ["image"=>"sikkim.jpg","category"=>"sikkim","title"=>"Sikkim","link"=>"sikkim"];
  $state[] = ["image" => "tamil-nadu.jpg", "category" => "tamil-nadu", "title" => "Tamil Nadu", "link" => "tamil-nadu"];
  $state[] = ["image" => "telangana.jpg", "category" => "telangana", "title" => "Telangana", "link" => "telangana"];
  // $state[] = ["image"=>"tripura.jpg","category"=>"tripura","title"=>"Tripura","link"=>"tripura"];
 $state[] = ["image"=>"uttarakhand.webp","category"=>"uttarakhand","title"=>"Uttarakhand","link"=>"uttarakhand"];
  $state[] = ["image" => "west-bengal.jpg", "category" => "west-bengal", "title" => "West Bengal", "link" => "west-bengal"];
  $state[] = ["image" => "rajasthan.jpg", "category" => "rajasthan", "title" => "rajasthan", "link" => "rajasthan"];
  $state[] = ["image" => "karnataka.jpg", "category" => "karnataka", "title" => "karnataka", "link" => "karnataka"];
  ?>
  <section class="states-section py-5">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center mb-5">
        <span class="section-badge fw-bold text-black">All India Service</span>
      </div>
      <div class="portfolio-area py-120">
        <div class="container">
          <div class="row popup-gallery">
            <?php foreach ($state as $item): ?>
              <div class="col-6 col-lg-3 mb-4">
                <div class="portfolio-item">
                  <div class="portfolio-img">
                    <img class="img-fluid" src="<?= base_url() ?>/assets/images/location/<?= $item['image'] ?>"
                      alt="<?= $item['title'] ?>" loading="lazy">
                    <a class="portfolio-link" href="<?= site_url($item['link']) ?>"><i class="bi bi-plus"></i></a>
                  </div>
                  <div class="portfolio-content">
                    <div class="portfolio-info">
                      <h4><a href="<?= site_url($item['link']) ?>"><?= ucwords($item['title']) ?></a></h4>
                    </div>
                    <a href="<?= site_url($item['link']) ?>" class="portfolio-arrow"><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
