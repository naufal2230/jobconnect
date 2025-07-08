<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobConnect - Connect to Work World</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">Job Connect</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.php" class="dropdown-item">Job Category</a>
                            <a href="job-list.php" class="dropdown-item">Job List</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="cv-upload.php" class="dropdown-item">cv-upload</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <?php if (isset($_SESSION['username'])): ?>
                        <a href="logout.php" class="btn btn-danger rounded-0 py-4 px-lg-5 d-none d-lg-block">
                            Logout <i class="fa fa-sign-out ms-3"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
                <nav aria-label="breadcrumb"></nav>
            </div>
        </div>
        <!-- Header End -->
         
<!-- Job Detail Start Indosat -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/indosat.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Indosat</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Sales Assistant  </span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Bandung, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Part Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp7.000.000 - Rp9.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>Promoting Indosat products such as starter cards, data packages, and digital services at stores or booths </p>
                            <h4 class="mb-3">Responsibility</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Offering and selling Indosat products </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Educating customers about promotions and packages</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Achieving daily sales targets</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Daily sales report </li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Ages 18–30 years old</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 25 years</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Sales experience is a plus</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Confident, communicative</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>WReady to work mobile / in the field</li>
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form action="submit_application.php" method="POST" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email"  class="form-control" name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="url" class="form-control" name="portfolio" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control" name="file" accept="application/pdf" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="cover_letter" rows="5" placeholder="Coverletter"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summery</h4>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 15 July, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Part Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp7.000.000 - Rp9.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location:Bandung,  Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 15 July, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Indosat is one of the leading telecommunications operators in Indonesia. Focusing on digital 
                                services and extensive 4G/5G networks, Indosat continues to innovate to provide the best connectivity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">JobConnect</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Pencari Kerja</h5>
                        <?php if (isset($_SESSION['username'])): ?>
                            <a class="btn btn-link text-white-50" href="job-list.php">Find A Job</a>
                        <?php else: ?>
                            <a class="btn btn-link text-white-50" href="register.php">Find A Job</a>
                        <?php endif; ?>
                        <?php if (!isset($_SESSION['username'])): ?>
                            <a class="btn btn-link text-white-50" href="register.php">Register/Login</a>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Perusahaan</h5>
                        <span class="btn btn-link text-white-50" style="cursor: default;">Post A Job</span>
                        <span class="btn btn-link text-white-50" style="cursor: default;">Company Login</span>
                        <span class="btn btn-link text-white-50" style="cursor: default;">Client Testimonials</span>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Pahlawan No.123</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 000 0000 0000</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-12 text-center mb-3">
                            &copy; <a class="border-bottom" href="about.php">JobConnect</a>
                        </div>
                        <!-- <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>