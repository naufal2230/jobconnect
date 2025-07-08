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
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">CV Analyzer</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.php">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">CV-Upload</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Upload CV Section -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mb-5">
            <h1 class="display-5">Upload your CV</h1>
            <p class="lead">Automated analysis to improve the quality of your CV</p>
            </div>
            <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Form Upload -->
                <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                    <label for="name">Full Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email Anda">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                        <select class="form-select" id="position" name="position" required>
                            <option selected disabled>Position of Interest</option>
                            <option value="Customer Support Officer - Gojek Indonesia">Gojek Indonesia - Customer Support Officer</option>
                            <option value="Admin E-commerce - Tokopedia">Tokopedia (GoTo Group) - Admin E-commerce</option>
                            <option value="Data Analyst Intern - Telkom">Telkom Indonesia - Data Analyst Intern / Junior</option>
                            <option value="Customer Service - Traveloka">Traveloka - Customer Service</option>
                            <option value="Manager - Bukalapak">Bukalapak - Manager / Junior Manager</option>
                            <option value="Teller - Maybank">Maybank - Teller</option>
                            <option value="Crew Restaurant - Burger King">Burger King - Crew Restaurant</option>
                            <option value="Service Crew - KFC">KFC - Service Crew </option>
                            <option value="cashier  - OTI">OTI - Cashier </option>
                            <option value="Counter Officer   - POS Indonesia">POS Indonesia - Counter Officer  </option>
                             <option value="Sales Assistant  - Indosat">Indosat - Sales Assistant </option>  


                        </select>
                        <label for="position">Position of Interest</label>
                    </div>
                
                    <div class="mb-3">
                         <label for="cvFile" class="form-label">Upload CV (PDF or DOCX)</label>
                        <div class="input-group">
                        <label class="input-group-text btn btn-outline-secondary" for="cvFile">Choose File</label>
                        <input type="file" class="form-control" id="cvFile" name="cvFile" accept=".pdf,.docx" style="display:none;" onchange="updateFileName()">
                        <input type="text" class="form-control" id="fileNameDisplay" placeholder="No file chosen" readonly>
                     </div>
                    </div>

                    <button type="submit" class="btn btn-primary py-2 px-4">Send CV</button>

                    <script>
                        function updateFileName() {
                        const fileInput = document.getElementById('cvFile');
                        const fileNameDisplay = document.getElementById('fileNameDisplay');
                        fileNameDisplay.value = fileInput.files.length > 0 ? fileInput.files[0].name : 'No file chosen';
                        }
                    </script>


                  <!-- Tata Cara CV (Selalu Tampil) -->
                <div id="cvGuide" class="mt-5 p-4 bg-light rounded">
                    <h4 class="text-primary mb-3">📝 How to Properly Fill Out a CV</h4>
                    <ul>
                        <li>Use a neat and easy-to-read format (avoid excessive colors)</li>
                        <li>Insert a <strong>Professional Summary</strong> at the beginning</li>
                        <li>Explain your work experience in a specific and sequential manner </li>
                        <li>Include actual achievements with numbers (for example: "increased sales by 25%")</li>
                        <li>Add a portfolio link or LinkedIn account (if available)</li>
                        <li>Use polite, professional, and concise language </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Upload CV Section -->

                   <!-- Simulasi CV Analysis (Sembunyi dulu, tampilkan setelah unggah) -->
                <div id="cvAnalysis" class="mt-5 d-none">
                    <h4 class="text-success mb-3">📊 CV Quality Score</h4>
                    <p><strong>Your Score: 78%</strong></p>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78%;">78%</div>
                    </div>

                    <h4 class="text-warning mb-3">⚠️ Section Not Found</h4>
                    <ul>
                        <li><i class="bi bi-x-circle text-danger"></i> Professional Summary</li>
                        <li><i class="bi bi-check-circle text-success"></i> Work Experience</li>
                        <li><i class="bi bi-check-circle text-success"></i> Education</li>
                        <li><i class="bi bi-x-circle text-danger"></i> Portfolio / External Link</li>
                    </ul>

                    <h4 class="text-info mt-4 mb-2">💡 Recommendation for Improvement</h4>
                    <ul>
                        <li>Add a professional summary at the top of your CV</li>
                        <li>Include a link to your portfolio or LinkedIn profile </li>
                        <li>Use specific numbers and achievements in your work experience </li>
                        <li>Ensure that the CV format is consistent and easy to read (ATS friendly) </li>
                    </ul>
                </div>

                <script>
                    document.getElementById("cvForm").addEventListener("submit", function(event) {
                        event.preventDefault();
                        const analysisBox = document.getElementById("cvAnalysis");
                        analysisBox.classList.remove("d-none");
                        analysisBox.scrollIntoView({ behavior: 'smooth' });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
<!-- End Upload CV Section -->

        
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