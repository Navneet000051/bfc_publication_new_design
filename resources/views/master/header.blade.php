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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services <i
                                class="fa-solid fa-chevron-down"></i></a>
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
                    <li class="nav-item"><a class="nav-link" href="https://authordashboard.bfcpublications.com">Author
                            Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://store.bfcpublications.com">Book Store</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://bfcpublications.com/blog">Blogs</a></li>
                </ul>
                <div class="header-buttons">
                    <a href="{{ url('/contact') }}" class="contact-btn">Contact Us</a>
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
            <a href="{{ url('/contact') }}" class="contact-btn">Contact Us</a>
            <!-- <a href="#" class="publish-btn">Start Publishing Now</a> -->
            <button type="button" class="publish-btn" data-bs-toggle="modal"
                data-bs-target="#start_bfcpublishing_modal">
                Start Publishing Now</button>
        </div>
    </div>
</div>