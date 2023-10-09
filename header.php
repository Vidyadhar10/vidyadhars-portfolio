<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center  me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <i class="bi bi-code-slash"></i>
            <h1>CodeFolio</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index.php" <?php echo $HomeActive; ?>>Home</a></li>
                <li><a href="about.php" <?php echo $AboutActive; ?>>About</a></li>
                <li><a href="resume.php" <?php echo $ResumeActive; ?>>Resume</a></li>
                <li><a href="./portfolio.php" <?php echo $PortfolioActive; ?>>PortFolio</a></li>
                <!-- <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="gallery.html">Nature</a></li>
                        <li><a href="gallery.html">People</a></li>
                        <li><a href="gallery.html">Architecture</a></li>
                        <li><a href="gallery.html">Animals</a></li>
                        <li><a href="gallery.html">Sports</a></li>
                        <li><a href="gallery.html">Travel</a></li>
                        <li class="dropdown"><a href="#"><span>Sub Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Sub Menu 1</a></li>
                                <li><a href="#">Sub Menu 2</a></li>
                                <li><a href="#">Sub Menu 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <!-- <li><a href="services.html" <?php //echo $ServicesActive; 
                                                    ?>>Services</a></li> -->
                <li><a href="contact.php" <?php echo $ContactActive; ?>>Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="header-social-links">
            <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
            <a href="https://www.instagram.com/vidyadhar_10" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/vidyadhar-lohar-07653b238" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            <a href="https://github.com/Vidyadhar10" target="_blank" class="facebook"><i class="bi bi-github"></i></a>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->