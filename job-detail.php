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
                <h1 class="m-0 text-primary">JobConnect</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.php" class="dropdown-item">Job List</a>
                            <a href="job-detail.php" class="dropdown-item active">Job Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.php" class="dropdown-item">Job Category</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="cv-upload.php" class="dropdown-item">cv-upload</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Find A Job<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Job Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->

        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/gojek.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Gojek Indonesia</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Customer Support Officer</span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Jakarta, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp4.000.000 - Rp6.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As a Customer Support Officer, you will be on the front line in assisting driver partners, merchants, and customers in resolving issues related to Gojek services. You will provide responsive and friendly service through chat, email, and phone.</p>
                            <h4 class="mb-3">Responsibility</h4>
                
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Handling customer inquiries and complaints quickly and professionally</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Providing the best solutions to the problems faced by partners or users</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Recording and reporting cases accurately in the system</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Collaborate with the internal team to resolve more complex issues</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maintaining customer satisfaction and supporting Gojek's positive reputation</li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimum education high school/vocational school</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 30 years</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Experience in the field of customer service is an added value</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Proficient in computer usage and basic applications such as email, Google Sheets, etc</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Willing to be placed in branches/work areas as needed</li>
                            </ul>
                        </div>
                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 25 July, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp4.000.000  Rp6.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: Jakarta, Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 25 Agust, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Gojek is a technology company from Indonesia that provides a variety of on-demand services, 
                                ranging from transportation, food delivery, to digital financial services. Since its founding in 2010, 
                                Gojek has evolved into a super-app used by millions of customers in Southeast Asia.As part of the Gojek team, 
                                the Customer Support Officer plays an important role in ensuring customer and partner satisfaction by providing 
                                fast, accurate, and friendly service. Gojek places a high value on professionalism, empathy, and solutions in 
                                addressing user issues.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->

            <!-- Job Detail Start Tokopedia -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/tokopedia.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Tokopedia (GoTo Group)</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Admin E-commerce</span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Jakarta, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp3.500.000 - Rp5.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As an E-commerce Admin, you will play an essential role in managing the operational aspects of the online 
                                store on the Tokopedia platform. This role includes order processing, 
                                product management, customer service, and daily sales reporting.</p>
                            <h4 class="mb-3">Responsibility</h4>
                
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Manage and update the product list on e-commerce platforms (Tokopedia and other marketplaces) </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Ensure all product information (price, stock, description, images) is accurate and up to date</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Processing customer orders in a timely manner and monitoring the delivery status</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Coordinate with the warehouse/logistics team regarding stock availability and shipping of goods</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Analyzing product performance and assisting in formulating promotional strategies (flash sales, discounts, Tokopedia campaigns)</li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimum education D3/S1 in Administration, Business, or equivalent</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 30 years</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Able to operate a computer and Microsoft Excel / Google Sheets</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>PThorough, neat, agile, and able to work both individually and in teams</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Willing to be placed in branches/work areas as needed</li>
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 10 May, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp3.500.000 - Rp5.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location:Jakarta, Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 18 July, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Tokopedia is one of the largest e-commerce companies in Indonesia, founded in 2009. 
                                Tokopedia facilitates millions of entrepreneurs, from small and medium enterprises (SMEs) to large brands, 
                                to sell products online to consumers throughout Indonesia.In 2021, Tokopedia officially merged with Gojek in a 
                                strategic collaboration that formed GoTo Group – the largest digital ecosystem in Indonesia that includes transportation, 
                                financial services, logistics, and electronic commerce.Tokopedia is committed to democratizing trade through technology, 
                                promoting the growth of the digital economy, and providing a safe, easy, and enjoyable online shopping experience for all Indonesian citizens.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->

        
            <!-- Job Detail Start Telkom Indonesia -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/telkom.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Telkom Indonesia</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Data Analyst Intern / Junior </span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Bandung / Jakarta, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Part Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp2.500.000 - Rp4.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As a Data Analyst Intern/Junior, you will assist the team in collecting, cleaning, analyzing, and visualizing data to 
                                support strategic decision-making. This position is very suitable for final-year students or recent graduates interested 
                                in the fields of data and information technology.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Perform data cleaning and transformation from various sources such as CSV, SQL, or API </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Analyzing Operational and Consumer Data</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Creating Dashboards and Visual Reports</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Preparing Data-Driven Recommendations</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Analyzing product performance and assisting in formulating promotional strategies (flash sales, discounts, Tokopedia campaigns)</li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>S1 Fresh Graduate. From the majors: Statistics, Mathematics, Computer Engineering, Information Systems, Computer Science, or other relevant majors.</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 30 years</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Having a Data Programming Foundation</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Critical and Problem Solver</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Willing to be placed in branches/work areas as needed</li>
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 27 May, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Part Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp2.500.000 - Rp4.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: Bandung / Jakarta, Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 21 July, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Telkom Indonesia is a state-owned enterprise (BUMN) engaged in the field of information and communication 
                                technology (ICT), as well as the largest telecommunications network service provider in Indonesia. With the spirit of 
                                Digital to the Core, Telkom is committed to accelerating the country's digital transformation through telecommunications 
                                services, digital connectivity, digital platforms, and digital services. Headquartered in Bandung and Jakarta, Telkom 
                                develops young Indonesian talent through various internship programs, part-time jobs, and digital innovations under its 
                                various subsidiaries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->

         <!-- Job Detail Start Traveloka -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/traveloka.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Traveloka</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Customer Service </span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Tangerang, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp3.500.000 - Rp5.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As a Customer Service representative, you will be at the forefront of providing the best service and solutions to 
                                Traveloka customers. This position is ideal for those who possess good communication skills, high empathy, 
                                and enjoy helping others.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Handling customer inquiries and complaints via phone, email, or chat in a professional and timely manner </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Providing the right and effective solutions to customer issues</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Recording and documenting every interaction with customers into the system</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Providing accurate information about Traveloka's products and services</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maintaining customer satisfaction and ensuring a positive user experience</li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>S1 Fresh Graduate. </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 30 years</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimum of 1 year experience in customer service or call center is preferred </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Mastering Bahasa Indonesia well, basic English becomes an added value</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Willing to be placed in branches/work areas as needed</li>
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 27 June, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp3.500.000 - Rp5.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: tangerang, Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 22 Agust, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Traveloka is a leading technology company in Southeast Asia that provides travel and lifestyle services on a 
                                single platform. Established in 2012, Traveloka helps millions of users easily, quickly, and safely book flight tickets, 
                                hotels, tourist activities, transportation, and financial services.With its headquarters in Jakarta and branch offices in 
                                various ASEAN countries, Traveloka continues to grow as the best digital solution for the holiday, business, and everyday 
                                life needs of the Indonesian people.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->

         <!-- Job Detail Start Bukalapak -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/bukalapal.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Bukalapak</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Manager / Junior Manager </span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Bandung / Jakarta, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp3.500.000 - Rp7.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As a Manager at Bukalapak, you will be responsible for designing, organizing, and overseeing the daily 
                                operations of a team or division to achieve targets and optimal work effectiveness. You will serve as a 
                                liaison between the operational team and company management, ensuring that all processes run smoothly and 
                                align with Bukalapak's business strategy.This role requires strong leadership, problem-solving, and 
                                decision-making skills to manage the team, processes, and outcomes.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Coordinate with other departments for the smooth operation of work</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Identifying operational problems and providing efficient solutions</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Planning daily, weekly, and monthly work strategies for the team</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Provide guidance, training, and regular evaluations to team members</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Assisting in the recruitment, onboarding, and development processes of the team</li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimun S1 </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 30 years</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimum 2 years of work experience as a supervisor/team leader, or 1 year as a manager. </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Communicative, solution-oriented, and adaptive to changes</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Willing to be placed in branches/work areas as needed</li>
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 27 June, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp3.500.000 - Rp7.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: Bandung / Jakarta, Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 07 Sept, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Bukalapak is one of the largest e-commerce platforms in Indonesia aimed at empowering small and 
                                medium enterprises, as well as individuals, through digital technology. Since its establishment in 2010, 
                                Bukalapak has evolved into a technology company that not only serves as a marketplace but also provides various 
                                financial services, logistics, and other digital solutions.With a vision to create "A Fair Economy for All", 
                                Bukalapak continues to innovate in order to create a positive impact for all Indonesian communities, both in big 
                                cities and remote areas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Job Detail Start Maybank -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/maybank.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Maybank</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Teller </span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Semarang, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp3.500.000 - Rp4.500.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As part of the customer service team, you will be the forefront of the company in providing the 
                                best experience to customers through friendly, fast, and accurate banking transaction services.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Serving banking transactions such as cash deposits, cash withdrawals, transfers, and bill payments </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Providing information about banking products and services to customers</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Handling customer complaints and inquiries politely and with solutions</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maintaining accuracy and attention to detail in every transaction </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Reporting and recording transactions according to operational procedures </li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimum education D3/S1 in all majors (preferably Economics, Accounting, or Banking)  </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 25 years</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>MMust have good communication skills and a professional appearance</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Honest, meticulous, and responsible</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Willing to be placed in branches/work areas as needed</li>
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 27 June, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp3.500.000 - Rp4.500.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location:Semarang,  Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 07 Sept, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Maybank Indonesia is part of the Maybank Group, one of the largest financial groups 
                                in ASEAN based in Malaysia. In Indonesia, Maybank is present with an extensive network that includes 
                                branch offices, sharia units, and modern digital services. We are committed to being 'Humanising 
                                Financial Services', which means providing banking services that are easily accessible and oriented 
                                towards the needs of customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Job Detail Start Burger King -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/burger.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Burger King</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Crew Restaurant </span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Semarang, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Part Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp3.500.000 - Rp5.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>Being part of the store's operational team in serving food, serving customers, and maintaining the cleanliness of the work area.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Presenting food according to SOPSupporting promotions and sales targets </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Serving customers politely</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maintaining cleanliness in the kitchen and dining areas</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Supporting promotions and sales targets </li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimum education SMA / SMK </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 25 years</li>
                         
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Willing to be placed in branches/work areas as needed</li>
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 20 June, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Part Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp3.500.000 - Rp5.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location:Semarang,  Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 Agust, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Burger King is a global fast-food restaurant chain known for its iconic burger menu and 
                                quick service. In Indonesia, Burger King continues to grow and open many outlets in major cities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job Detail Start KFC -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/kfc.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">KFC</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Service Crew </span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Medan, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Part Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp3.000.000 - Rp4.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>Working in the service area and kitchen to support the daily operations of the outlet </p>
                            <h4 class="mb-3">Responsibility</h4>
                            <ul class="list-unstyled">
                                  <li><i class="fa fa-angle-right text-primary me-2"></i>Presenting food according to SOPSupporting promotions and sales targets </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Serving customers politely</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maintaining cleanliness in the kitchen and dining areas</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Supporting promotions and sales targets </li>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimum education SMA / SMK </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 25 years</li>
                         
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Willing to be placed in branches/work areas as needed</li>
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 10 June, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Part Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp3.000.000 - Rp4.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location:Medan,  Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 Sept, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">KFC (Kentucky Fried Chicken) is a fast-food restaurant famous for its signature fried chicken. 
                                KFC Indonesia is managed by PT Fast Food Indonesia Tbk, with hundreds of active outlets throughout Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Job Detail Start OTI -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/oti.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">OTI</h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : cashier </span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Surabaya, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Part Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp2.500.000 - Rp4.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>Assisting store operations from the cashier, arranging merchandise, to customer service.</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Running cashier transactions</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Arranging products on display racks</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Handling customer complaints and inquiries politely and with solutions</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maintaining store cleanliness</li>

                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimum SMA </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Friendly, honest, and agile</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Ready to work in shifts</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Preferred to reside in Surabaya</li>
                        
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 27 November, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Part Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp2.500.000 - Rp4.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location:Surabaya,  Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 December, 2025</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">OTI is a restaurant specializing in Indonesian chicken dishes that combines local ambiance with modern service </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Job Detail Start POS  -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/pos.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">POS Indonesia  </h3>
                                  <span class="text-truncate me-3"> <i class="fa fa-headset text-primary me-2"></i>position : Counter Officer </span>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>Semarang, Indonesia</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Part Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp3.000.000 - Rp4.000.000</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>Serving customers at the post office for mail delivery, packages, and financial transactions </p>
                            <h4 class="mb-3">Responsibility</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Serving the delivery and receipt of goods Ensuring the accuracy of data and transactions</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Handling payment transactions and transfers</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Ensuring the accuracy of data and transactions</li>
          
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                        
                            <ul class="list-unstyled">
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Minimum D3 in any major. Fresh graduates welcome </li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Maximum age of 25 years</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Detail-oriented, neat, and communicative</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Honest, meticulous, and responsible</li>
                                <li><i class="fa fa-angle-right text-primary me-2"></i>Able to operate a computer</li>
                            </ul>
                        </div>
                         <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 29 August, 2025</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 1 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Part Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: Rp3.000.000 - Rp4.000.000</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location:Semarang,  Indonesia</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 January, 2026</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Pos Indonesia is a state-owned enterprise engaged in courier, logistics, and financial services. 
                                With an extensive network reaching the far corners of the country, Pos Indonesia continues to innovate in digital services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
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


        <!-- Job Detail End -->

                        
    


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
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