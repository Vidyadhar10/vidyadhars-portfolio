<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title id="page-title">PortFolio | Vidyadhar10</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-titlebar.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  $HomeActive = '';
  $AboutActive = "class='active'";
  $PortfolioActive = "";
  $ResumeActive = '';
  $ServicesActive = '';
  $ContactActive = '';
  include './header.php';
  ?>
  <!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>About</h2>
            <!-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a
              odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum
              dolorem.</p> -->

            <!-- <a class="cta-btn" href="contact.html">Available for hire</a> -->

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/my_photo_1.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2 class="pb-3">Personal Details</h2>

            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>Residence:</strong> <span>India</span></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Rangoli, Maharashtra</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li> -->
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>vidyadhar0410@gmail.com</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              I'm Vidyadhar Lohar, a proficient Backend and Full Stack Developer, passionate about crafting exceptional web applications.
              With a broad skill set spanning HTML, CSS, JavaScript, jQuery, AJAX, PHP, Node.js, MongoDB, Express, and Bootstrap,
              I have the expertise to bring your digital projects to life.
            </p>

            <p class="py-3 ">
              When I'm not immersed in code, you'll find me exploring new technologies, contributing to open-source projects, and staying updated on the latest advancements in web development. I'm not just a developer; I'm a coding enthusiast dedicated to turning ideas into reality through elegant and efficient code.
            </p>
            <p class=" py-3 fw-bold">
              Let's collaborate and turn your web development visions into a reality. Together, we can create digital experiences that leave a lasting impact.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying</p>
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide p-1">
              <div class="testimonial-item">
                <div class="stars" id="stars-rating-p-1">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p id="desc-p-1">
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                  quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" id="img-p-1">
                  <h3 id="name-p-1">Saul Goodman</h3>
                  <h4 id="designation-p-1">Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide p-2">
              <div class="testimonial-item">
                <div class="stars" id="stars-rating-p-2">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p id="desc-p-2">
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                  quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" id="img-p-2">
                  <h3 id="name-p-2">Sara Wilsson</h3>
                  <h4 id="designation-p-2">Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->



  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- jquery cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/script.js"></script>

  <script>
    $(document).ready(function() {
      $.getJSON('testimonial-person-data.json', function(data) {
        $.each(data, function(key, item) {
          var selector = '.swiper-slide.p-' + key;
          var slide = $(selector);

          slide.find('#stars-rating-p-' + key).html(generateStarRating(item['ratings']));
          slide.find('#desc-p-' + key).text(item['person-description']);
          slide.find('#name-p-' + key).text(item['person-name']);
          slide.find('#designation-p-' + key).text(item['person-designation']);
          slide.find('#img-p-' + key).attr('src', item['person-profile-photo']);
        });
      });

      // Function to generate star rating HTML based on the number of stars
      function generateStarRating(ratings) {
        var starRatingElement = '';
        for (var i = 0; i < ratings; i++) {
          starRatingElement += '<i class="bi bi-star-fill"></i>';
        }
        return starRatingElement;
      }

    });
  </script>
</body>

</html>