<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BFC Publications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css"
        integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css_new/style.css') }}">
</head>

<body>

    <!-- header  -->
    <header class="main-header shadow-sm">
        <div class="container-xxl px-lg-5 px-md-3 px-2">
            <nav class="navbar navbar-custom">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img_new/logo.svg') }}" alt="BFC Publications">
                </a>
                <div class="desktop-navigation d-flex align-items-center ms-auto gap-3 justify-content-between">
                    <ul class="navbar-nav main-menu flex-row">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Services <i class="fa-solid fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{ url('/book-editorial-services') }}"> Editorial
                                        Services</a></li>
                                <li><a class="dropdown-item" href="{{ url('/book-designing-services') }}">Designing
                                        Services</a></li>
                                <li><a class="dropdown-item" href="{{ url('/book-marketing-services') }}">Marketing
                                        Services</a></li>
                                <li><a class="dropdown-item" href="{{ url('/book-distribution-services') }}">
                                        Distribution Services</a></li>
                                <li><a class="dropdown-item" href="{{ url('/author-support') }}"> Author Support</a>
                                </li>



                                <!-- <li><a class="dropdown-item" href="#">Book Publishing</a></li>
                            <li><a class="dropdown-item" href="#">Editing</a></li>
                            <li><a class="dropdown-item" href="#"> Book Design</a></li>
                            <li><a class="dropdown-item" href="{{ url('/book-marketing-services') }}">Marketing </a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/packages') }}">Packages </a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/packages') }}" role="button" data-bs-toggle="dropdown">Packages <i
                                class="fa-solid fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="{{ url('/paperback-publishing-packages') }}">Paperback</a></li>
                            <li><a class="dropdown-item" href="{{ url('/ebook-publishing-packages') }}">eBook</a>
                            </li>
                        </ul>
                    </li> -->
                        <li class="nav-item"><a class="nav-link" href="{{ url('/royalty-calculator') }}">Royalty
                                Calculator</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="https://authordashboard.bfcpublications.com">Author
                                Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://store.bfcpublications.com">Book
                                Store</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://bfcpublications.com/blog">Blogs</a>
                        </li>
                    </ul>
                    <div class="header-buttons">
                        <a href="{{ url('/contact-us') }}" class="contact-btn">Contact Us</a>
                        <button type="button" class="publish-btn" data-bs-toggle="modal"
                            data-bs-target="#start_bfcpublishing_modal">
                            Start Publishing Now</button>
                    </div>

                </div>
                <!-- MOBILE TOGGLE -->
                <div class="mobile-toggle-wrapper d-none ms-auto">
                    <button class="mobile-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header">
            <img src="{{ asset('assets/img_new/logo.svg') }}" alt="BFC Publications" class="offcanvas-logo">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <ul class="mobile-menu">
                <li><a href="{{ url('/about') }}"><span>About</span></a></li>
                <li class="mobile-dropdown">
                    <a href="javascript:void(0);">
                        <span>Services</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="mobile-submenu">
                        <!-- <li><a href="#">Book Publishing</a></li>
                        <li><a href="#">Editing </a></li>
                        <li><a href="#">Book Design</a></li>
                        <li><a href="#">Marketing</a></li> -->
                        <li><a href="{{ url('/book-editorial-services') }}"> Editorial Services</a></li>
                        <li><a href="{{ url('/book-designing-services') }}">Designing Services</a></li>
                        <li><a href="{{ url('/book-marketing-services') }}">Marketing Services</a></li>
                        <li><a href="{{ url('/book-distribution-services') }}">Distribution Services</a></li>
                        <li><a href="{{ url('/author-support') }}"> Author Support</a></li>
                    </ul>
                </li>
                <li class="mobile-dropdown">
                    <a href="javascript:void(0);">
                        <span>Packages</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="mobile-submenu">
                        <li><a href="{{ url('/paperback-publishing-packages') }}">Paperback</a></li>
                        <li><a href="{{ url('/ebook-publishing-packages') }}">eBook</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/royalty-calculator') }}"><span>Royalty Calculator</span></a></li>
                <li><a href="https://authordashboard.bfcpublications.com"><span>Author Dashboard</span></a></li>
                <li><a href="https://store.bfcpublications.com"><span>Book Store</span></a></li>
                <li><a href="https://bfcpublications.com/blog"><span>Blogs</span></a></li>
            </ul>
            <div class="mobile-actions">
                <a href="{{ url('/contact-us') }}" class="contact-btn">Contact Us</a>
                <!-- <a href="#" class="publish-btn">Start Publishing Now</a> -->
                <button type="button" class="publish-btn" data-bs-toggle="modal"
                    data-bs-target="#start_bfcpublishing_modal">
                    Start Publishing Now</button>
            </div>
        </div>
    </div>
    <!-- main content -->
    <main class="content">
        @yield('content')

        <!-- Modal -->
        <div class="modal fade start_bfcpublishing_modal" id="start_bfcpublishing_modal" tabindex="-1"
            aria-labelledby="start_bfcpublishing_modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-transparent">
                    <!-- Modal Header -->
                    <div class="modal-header border-0 p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body p-0">
                        <div class="card border rounded-4 book-form-hero">
                            <form id="bookForm" class="bookform-set py-5 position-relative">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Your Name</label>
                                            <i class="input-icon fa-regular fa-user"></i>
                                            <input type="text" name="name" required id="popup_name" class="form-control"
                                                placeholder="Your Name" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Contact Number</label>
                                            <i class="input-icon fa-solid fa-mobile-screen-button"></i>
                                            <input type="number" name="mobileno" required id="popup_mobileno"
                                                class="form-control" placeholder="Contact Number" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Email</label>
                                            <i class="input-icon fa-regular fa-envelope"></i>
                                            <input type="email" name="email" required id="popup_email"
                                                class="form-control" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Book Title</label>
                                            <i class="input-icon fa-solid fa-book-open"></i>
                                            <input type="text" required name="book_title" id="book_title"
                                                class="form-control" placeholder="Book Title" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Book Language</label>
                                            <i class="input-icon fa-solid fa-scroll"></i>
                                            <input type="text" required name="book_language" id="book_language"
                                                class="form-control" placeholder="Book Language" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Manuscript Status</label>
                                            <!-- <i class="input-icon fa-solid fa-scroll"></i> -->
                                            <select name="book_status" id="book_status" class="form-control" required>
                                                <option value="">-- Select Status --</option>
                                                <option value="Inprogress">Inprogress</option>
                                                <option value="completed">Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Published a Book Before?</label>
                                            <!-- <i class="input-icon fa-solid fa-book-open"></i> -->
                                            <select name="book_published" id="book_published" class="form-control"
                                                required>
                                                <option value="">-- Select Option --</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">I consent to BFC
                                                Publications
                                                processing my data for author support and service updates, per
                                                the <a href="https://bfcpublications.com/DPDP_Act" target="_blank"
                                                    class="text-danger">DPDP Act 2023</a>.</label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-danger1 w-100 py-2 rounded-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .start_bfcpublishing_modal .btn-close {
                    position: absolute;
                    right: 17px;
                    top: 17px;
                    z-index: 9999;
                }
            </style>
        </div>
    </main>
    <!-- footer  -->
    <section class=" footer-section ">
        <footer class="site-footer">
            <div class="footer-main">
                <div class="container-xxl px-lg-5 px-md-3 px-2">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                            <div class="footer-about">
                                <a href="#" class="footer-logo">
                                    <img src="{{ asset('assets/img_new/logo.svg') }}" alt="BFC Publications">
                                </a>
                                <p class="footer-description">
                                    Since its inception, BFC Publications has been fast gaining mileage over other self
                                    publishers in India. If online comparisons are to be believed, even the most
                                    prominent publishing houses across India have been struggling to match our quality,
                                    largely because we are a team groomed to exceed expectations.
                                </p>
                                <div class="footer-social">
                                    <a href="https://www.facebook.com/bfcpublications/" aria-label="Facebook"
                                        target="_blank"> <img
                                            src="{{ asset('assets/img_new/social-icon/facebook.svg') }}" alt="Facebook">
                                    </a>
                                    <a href="https://www.instagram.com/bfc_publications/" aria-label="Instagram"
                                        target="_blank"><img
                                            src="{{ asset('assets/img_new/social-icon/instagram.svg') }}"
                                            alt="Instagram"> </a>
                                    <a href="https://in.linkedin.com/company/bfc-publications" aria-label="LinkedIn"
                                        target="_blank"><img
                                            src="{{ asset('assets/img_new/social-icon/linkedin.svg') }}" alt="LinkedIn">
                                    </a>
                                    <a href="https://twitter.com/bfcpublications" aria-label="X" target="_blank"> <img
                                            src="{{ asset('assets/img_new/social-icon/twitter.svg') }}" alt="X"> </a>
                                    <a href="https://www.youtube.com/@bfcpublications" aria-label="YouTube"
                                        target="_blank">
                                        <img src="{{ asset('assets/img_new/social-icon/youtube.svg') }}" alt="YouTube">
                                    </a>
                                    <a href="https://mail.google.com/mail/u/0/?fs=1&to=support@bfcpublications.com&body=BODY&tf=cm"
                                        aria-label="Email" target="_blank"> <img
                                            src="{{ asset('assets/img_new/social-icon/gmail.svg') }}" alt="Email"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="footer-column">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><a href="{{ url('/book-editorial-services') }}"><span
                                                class="footer-dot"></span>Editorial Services</a></li>
                                    <li><a href="{{ url('/book-designing-services') }}"><span class="footer-dot"></span>
                                            Designing Services</a></li>
                                    <li><a href="{{ url('/book-marketing-services') }}"><span class="footer-dot"></span>
                                            Marketing Services</a></li>
                                    <li><a href="{{ url('/book-distribution-services') }}"><span
                                                class="footer-dot"></span>
                                            Distribution Services</a></li>
                                    <li><a href="{{ url('/author-support') }}"><span class="footer-dot"></span> Author
                                            Support</a></li>



                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="footer-column">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="{{ url('/ebook-publishing-packages') }}"><span
                                                class="footer-dot"></span>Packages</a></li>
                                    <li><a href="{{ '/services' }}"><span class="footer-dot"></span> Services</a></li>
                                    <li><a href="{{ url('/ebook-publisher-in-india') }}"><span
                                                class="footer-dot"></span>eBook Publisher</a></li>
                                    <li><a href="{{ url('/book-publisher-in-india') }}"><span
                                                class="footer-dot"></span>Book
                                            Publisher</a></li>
                                    <li><a href="https://store.bfcpublications.com/"><span
                                                class="footer-dot"></span>Book
                                            Store</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="footer-column">
                                <h4>Links</h4>
                                <ul>
                                    <li><a href="https://bfcpublications.com/klf"><span
                                                class="footer-dot"></span>KLF</a>
                                    </li>
                                    <li><a href="{{ url('/career') }}"><span class="footer-dot"></span> Career</a></li>
                                    <li><a href="{{ url('/print-on-demand-book-publishing') }}"><span
                                                class="footer-dot"></span> Print On Demand</a></li>
                                    <li> <a href="{{ url('/faq') }}"><span class="footer-dot"></span> FAQs</a></li>
                                    <li><a href="{{ url('/contact-us') }}"> <span class="footer-dot"></span>Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-column footer-contact">
                                <h4>Contact us</h4>
                                <!-- ADDRESS -->
                                <div class="contact-item">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <p>
                                        BFC Publications Pvt Ltd,<br>
                                        CP-61, Viraj Khand, Gomti Nagar,<br>
                                        Lucknow, Uttar Pradesh 226010
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-clock-fill"></i>
                                    <p>
                                        Hours: Mon - Sat :- 09:30 am - 6:30 pm<br>
                                        (Second & Fourth Saturday Closed)
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-envelope-fill"></i>
                                    <p> <a href="mailto:support@bfcpublications.com"> support@bfcpublications.com </a>
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-telephone-fill"></i>
                                    <p>
                                        <a href="tel:+915223514141"> +91-5223514141 </a>
                                        <span class="contact-divider">|</span>
                                        <a href="tel:+916389700888"> +91-6389700888</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container-xxl px-lg-5 px-md-3 px-2">
                    <div class="row align-items-center gy-2">
                        <div class="col-md-5">
                            <p class="copyright">© All Rights Reserved.BFC Publications </p>
                        </div>
                        <div class="col-md-7">
                            <ul class="footer-legal">
                                <li><a href="{{ url('/terms-and-condition') }}">Terms and Conditions</a> </li>
                                <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a> </li>
                                <li> <a href="{{ url('/legal-disclaimer') }}">Legal Disclaimer</a> </li>
                                <li><a href="{{ '/refund-and-cancellation-policy' }}">Refund and Cancellation Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a href="https://wa.me/916389700888" class="whatsapp-btn" target="_blank" aria-label="WhatsApp">
            <img src="{{ asset('assets/img_new/social-icon/whatsapp.svg') }}" alt="WhatsApp">
        </a>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script src="{{ asset('assets/js_new/scripts.js') }}"></script>

</body>
</html>