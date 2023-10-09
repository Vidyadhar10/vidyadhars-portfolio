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
  $AboutActive = "";
  $ResumeActive = "";
  $PortfolioActive = "class='active'";
  // $ServicesActive = '';
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
            <h2>PortFolio</h2>
            <p>Showcase of my best works</p>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">


        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-console">Console</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" id="project-list">



        </div>

      </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>-->
  <!-- End Footer  -->

  <!-- <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a> -->

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- jquery cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->
  <script src="assets/js/script.js"></script>
  <script>
    $(document).ready(function() {
      $.getJSON('all-projects.json', function(data) {
        var projects = Object.values(data);

        // Iterate through each project in the array
        $.each(projects, function(index, project) {

          var projectString = `<div class="col-lg-4 col-md-6 portfolio-item filter-${project['proj-type']}">
                                  <div class="work-box">
                                    <a href="${project['projImg1']}" data-gallery="portfolioGallery" style="pointer-events:none;" class="portfolio-lightbox">
                                      <div class="work-img">
                                        <img src="${project['projImg1']}" alt="" class="img-fluid">
                                      </div>
                                    </a>
                                    <div class="work-content">
                                      <div class="row">
                                        <div class="col-sm-8">
                                          <h2 class="w-title text-dark">${project['proj-title']} </h2>
                                          <span class="text-muted" style="font-style: italic;">${project['proj-sub-title']}</span>
                                          <div class="w-more">
                                            <span class="w-ctegory">Web Development</span> / <span class="w-date">${project['proj-date']}</span>
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                          <div class="w-like">
                                            <a href="portfolio-details.php?pindex=${index+1}"> <span class="bi bi-three-dots"></span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>`;
          $('#project-list').append(projectString);
        });
      });
    });
  </script>

</body>

</html>