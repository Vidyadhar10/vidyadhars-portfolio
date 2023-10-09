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
  $PortfolioActive = "";
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
            <h2>Project Details</h2>
            <!-- <p>Showcase of my best works</p> -->
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="" alt="" id="projImg_1">
                </div>

                <div class="swiper-slide">
                  <img src="" alt="" id="projImg_2">
                </div>

                <div class="swiper-slide">
                  <img src="" alt="" id="projImg_3" class="pjimg3">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card portfolio-info">
              <h3 id="project-title"></h3>
              <ul>
                <li><strong>Category</strong>: <span id="project-category">Web design</span></li>
                <li><strong>Project Date</strong>: <span id="project-date"></span></li>
                <li><strong>Project URL</strong>: <a href="#" id="project-link">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <!-- <h2>This is an example of portfolio detail</h2> -->
              <p id="DescriptionData">

              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Details Section -->

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
        var indexToAccess = '<?php echo $_GET['pindex']; ?>'; // Change this to the desired index
        var specificProject = data[indexToAccess];


        console.log(specificProject);

        $('#project-title').html(specificProject['proj-title'])
        $('#project-category').html(specificProject['proj-category'])
        $('#project-date').html(specificProject['proj-date'])
        $('#project-link').html(specificProject['proj-url'])

        //images
        $('#projImg_1').attr('src', specificProject.projImg1)
        $('#projImg_2').attr('src', specificProject.projImg2)
        $('.pjimg3').attr('src', specificProject.projImg3)

        var ulString = '<ul>' + specificProject["proj-description"].join('') + '</ul>';
        $('#DescriptionData').html(ulString)
      });
    });
  </script>

</body>

</html>