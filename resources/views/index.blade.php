@extends('layout.template1')

@section('content')
    <div class="landing-page">
        <section class="hero">
            <div class="container-xxl px-lg-5 px-md-3 px-2 position-relative">
                <div class="row align-items-center justify-content-lg-between justify-content-center">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0 mb-5">
                        <h3 class="fw-bold text-dark mb-2" data-aos="fade-up">Trusted by More Than
                        </h3>
                        <h1 class="display-2 mb-2" data-aos="fade-up" >4K Authors</h1>
                        <h2 class="fw-bold mb-3" data-aos="fade-up" >Your Story Could Be Next!</h2>
                        <p class="text-muted mb-4" data-aos="fade-up" >From your first manuscript
                            submission to ISBN registration, editing,
                            cover design, and distribution — we handle it all.</p>
                        <div class="d-flex flex-column flex-sm-row gap-3" data-aos="fade-up">
                            <!-- <a href="{{url('contact')}}" class="rounded-pill hero-red-btn px-4 py-3"> Publish With Us</a> -->
                            <button type="button" class="rounded-pill hero-red-btn px-4 py-3" data-bs-toggle="modal"
                                data-bs-target="#start_bfcpublishing_modal">
                                Publish With Us</button>
                            <a href="#Manuscript"
                                class="btn btn-light border-dark rounded-pill px-4 py-3 align-self-center">How
                                It Works</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 items-center">
                        <div class="card shadow-sm border rounded-5 book-form-hero" data-aos="fade-up"
                            >
                            <h3 class="text-center fw-bold mb-4 py-4">Tell Us About Your Book</h3>
                            <form id="publishing_start_form" class="bookform-set">
                                <div class="form-group mb-2">
                                    <label class="form-label">Your Name</label>
                                    <i class="input-icon fa-regular fa-user"></i>
                                    <input type="text" name="name" required id="popup_name" class="form-control"
                                        placeholder="Your Name" />
                                    <span class="text-danger" id="name_err"> </span>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="form-label">Contact Number</label>
                                    <i class="input-icon fa-solid fa-mobile-screen-button"></i>
                                    <input type="number" required name="mobileno" id="popup_mobileno" class="form-control"
                                        placeholder="Contact Number" />
                                    <span class="text-danger" id="mobileno_err"> </span>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="form-label">Email</label>
                                    <i class="input-icon fa-regular fa-envelope"></i>
                                    <input type="email" required name="email" id="popup_email" class="form-control"
                                        placeholder="Email" />
                                    <span class="text-danger" id="email_err"> </span>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="form-label">Book Title</label>
                                    <i class="input-icon fa-solid fa-book-open"></i>
                                    <input type="text" required name="book_title" id="book_title" class="form-control"
                                        placeholder="Book Title" />
                                    <span class="text-danger" id="book_title_err"></span>
                                </div>
                                <button type="submit" class="mt-3 btn btn-danger1 w-100 py-2 rounded-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="counter-section" id="counterSection">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="row counter-wrapper">
                    <div class="col-lg-3 col-6 counter-item" data-aos="fade-up">
                        <div class="counter-icon">
                            <img src="{{ asset('assets/img_new/home/book-icon.svg') }}" alt="book counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-number">
                                <span class="counter" data-target="6000">0</span>+
                            </div>
                            <div class="counter-label">
                                Books Published
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6  counter-item" data-aos="fade-up" >
                        <div class="counter-icon">
                            <img src="{{ asset('assets/img_new/home/author-icon.svg') }}" alt="book counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-number">
                                <span class="counter" data-target="4000">0</span>+
                            </div>
                            <div class="counter-label">
                                Authors Served
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 counter-item" data-aos="fade-up" >
                        <div class="counter-icon">
                            <img src="{{ asset('assets/img_new/home/publishing-icon.svg') }}" alt="book counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-number">
                                <span class="counter" data-target="6">0</span>+
                            </div>
                            <div class="counter-label">
                                Years of Publishing
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 counter-item" data-aos="fade-up" >
                        <div class="counter-icon">
                            <img src="{{ asset('assets/img_new/home/rating-icon.svg') }}" alt="Rating Counter">
                        </div>
                        <div class="counter-content">
                            <div class="counter-number">
                                <span class="counter" data-target="4.7" data-decimal="true">0</span>
                            </div>
                            <div class="counter-label">
                                Avg. Author Rating
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="achievement-section py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2 py-lg-5">
                <div class="row align-items-center justify-content-lg-between justify-content-center">

                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="achievement-content">
                            <span class="achievement-tag" data-aos="fade-up" >
                                Our Achievements
                                <img src="{{ asset('assets/img_new/home/achievement_vector.svg') }}" alt="Our Achievements">
                            </span>

                            <h2 class="achievement-title pt-lg-0 pt-3" data-aos="fade-up" >
                                <span>BFC PUBLICATIONS</span> Enters the
                                Asia Book of Records and India
                                Book of Records
                            </h2>

                            <p class="achievement-description" data-aos="fade-up" >
                                We proudly earned a place in the Asia Book of Records and India Book of Records for
                                publishing
                                63 e-books in a single day. This milestone not only reflects our commitment to making
                                publishing
                                faster, better, and more accessible for authors, but also sets a new benchmark in the
                                publishing
                                industry.
                            </p>

                            <div class="achievement-logo" data-aos="fade-up" >
                                <img src="{{ asset('assets/img_new/home/asia.svg') }}" alt="Asia Book Record">

                                <img src="{{ asset('assets/img_new/home/indiabook.svg') }}" alt="India Book Record">
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-7 items-center" data-aos="fade-up" >
                        <div class="authors-journey-stories text-center m-0 owl-carousel">
                            <article class="author-stories-section__slide">
                                <img src="{{ asset('assets/img_new/home/achievement1.webp') }}" alt="Asia Book Record">
                            </article>
                            <article class="author-stories-section__slide">
                                <img src="{{ asset('assets/img_new/home/achievement2.webp') }}" alt="Asia Book Record">
                            </article>
                            <article class="author-stories-section__slide">
                                <img src="{{ asset('assets/img_new/home/achievement3.webp') }}" alt="India Book Record">
                            </article>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="border-bottom py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="row align-items-center justify-content-lg-between justify-content-center">

                    <div class="col-lg-5 col-md-8 items-center mb-lg-0 mb-4 order-lg-1 order-2" data-aos="fade-up"
                        >
                        <div class="authors-journey-stories text-center m-0 owl-carousel">
                            <article class="author-stories-section__slide">
                                <img src="{{ asset('assets/img_new/home/klf1.webp') }}" alt="Koshala Literature Festival">
                            </article>
                            <article class="author-stories-section__slide">
                                <img src="{{ asset('assets/img_new/home/klf2.webp') }}" alt="Koshala Literature Festival">
                            </article>
                            <article class="author-stories-section__slide">
                                <img src="{{ asset('assets/img_new/home/klf3.webp') }}" alt="Koshala Literature Festival">
                            </article>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-lg-0 order-lg-2 order-1">
                        <div class="achievement-content">
                            <span class="achievement-tag" data-aos="fade-up" >
                                BFC Publications Presents
                                <img src="{{ asset('assets/img_new/home/achievement_vector.svg') }}" alt="line vector">
                            </span>

                            <h2 class="achievement-title pt-lg-0 pt-3" data-aos="fade-up" >
                                Koshala <span> Literature </span> Festival
                            </h2>

                            <p class="achievement-description" data-aos="fade-up" >
                                Held between 4-6 November 2022, KLF-Awadh was a three-day long celebration revolving around
                                the
                                rich heritage of Awadh, featuring the biggest names in the fields of Arts, Literature,
                                Music,
                                Filmmaking, and much more.<a href="{{ url('/klf') }}"
                                    alt="KOSHALA LITERATURE FESTIVAL" style="color:red;"> Read More..</a>
                            </p>
                            <div class="row py-3">
                                <div class="col-lg-6 col-12 mb-4" data-aos="fade-up" >
                                    <a href="{{ url('/book-stall') }}" class="feature-card1">
                                        <div class="feature-icon">
                                            <i class="bi bi-bookshelf"></i>
                                        </div>
                                        <div class="feature-name">
                                            Book Stall
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-12 mb-4" data-aos="fade-up" >
                                    <a href="{{ url('/bfc-lounge') }}" class="feature-card1">
                                        <div class="feature-icon">
                                            <i class="bi bi-cup-hot"></i>
                                        </div>
                                        <div class="feature-name">
                                            BFC Lounge
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-12 mb-4" data-aos="fade-up" >
                                    <a href="{{ url('/klf-sessions') }}"
                                        class="feature-card1">
                                        <div class="feature-icon">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="feature-name">
                                            KLF Sessions
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-12 mb-4" data-aos="fade-up" >
                                    <a href="{{ url('/gallery') }}" class="feature-card1">
                                        <div class="feature-icon">
                                            <i class="bi bi-images"></i>
                                        </div>
                                        <div class="feature-name">
                                            Gallery
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <style>
                .feature-card1 {
                    background: #ffffff;
                    border: 1px solid #e1e1e1;
                    border-radius: 9px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.12);
                    display: flex;
                    align-items: center;
                    padding: 15px 18px;
                    text-decoration: none;
                    color: #111111;
                    transition:
                        transform 0.25s ease,
                        box-shadow 0.25s ease,
                        border-color 0.25s ease;
                }

                .feature-card1:hover {
                    transform: translateY(-3px);
                    border-color: #d4d4d4;
                    box-shadow: 0 7px 18px rgba(0, 0, 0, 0.13);
                    color: #111111;
                }

                .feature-card1 .feature-icon {
                    align-items: center;
                    justify-content: center;
                    color: #263192;
                    font-size: 25px;
                    line-height: 1.4;

                }

                .feature-card1 .feature-name {
                    margin-left: 20px;
                    font-size: clamp(16px, 1.15vw, 20px);
                    font-weight: 400;
                    line-height: 1.3;
                }
            </style>
        </section>

        <section class="services-section py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">

                <div class="section-header">
                    <h2 data-aos="fade-up" >Publishing <span>Services</span> We Offer</h2>
                    <p data-aos="fade-up" >We provide end-to-end publishing solutions to help your
                        book
                        stand out and reach the right readers.</p>
                </div>

                <div class="row g-4 py-lg-5 py-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" >
                        <div class="service-card shadow-lg">
                            <div class="icon-head d-flex gap-2 items-center items-self-center">
                                <img src="{{ asset('assets/img_new/home/editorial.svg') }}" alt="Editorial Services">
                                <h3>Editorial Services</h3>
                            </div>
                            <p>
                                Professional editing and proofreading to refine your manuscript, improve clarity, and
                                deliver a
                                polished, publication-ready book.
                            </p>
                            <p>
                                From grammar to flow, we ensure your writing is clear, consistent, and impactful.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" >
                        <div class="service-card shadow-lg">
                            <div class="icon-head d-flex gap-2 items-center items-self-center">
                                <img src="{{ asset('assets/img_new/home/designing.svg') }}" alt="Designing Services">
                                <h3>Designing Services</h3>
                            </div>
                            <p>
                                Creative cover designs that capture attention, reflect your story, and leave a lasting first
                                impression.
                            </p>
                            <p>
                                Our designers create visually striking covers that connect with readers and strengthen your
                                book's appeal.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" >
                        <div class="service-card shadow-lg">
                            <div class="icon-head d-flex gap-2 items-center items-self-center">
                                <img src="{{ asset('assets/img_new/home/marketing.svg') }}" alt="Marketing Services">
                                <h3>Marketing Services</h3>
                            </div>
                            <p>
                                Strategic book marketing solutions to boost your book's visibility and connect with the
                                right
                                readers.
                            </p>
                            <p>
                                From social media campaigns to promotional strategies, we help your book reach a wider
                                audience.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" >
                        <div class="service-card shadow-lg">
                            <div class="icon-head d-flex gap-2 items-center items-self-center">
                                <img src="{{ asset('assets/img_new/home/distribution.svg') }}" alt="Distribution Services">
                                <h3>Distribution Services</h3>
                            </div>
                            <p>
                                Wide distribution across leading online bookstores and marketplaces to maximise your book's
                                reach.
                            </p>
                            <p>
                                We ensure your book is easily accessible to readers in India and around the world.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" >
                        <div class="service-card shadow-lg">
                            <div class="icon-head d-flex gap-2 items-center items-self-center">
                                <img src="{{ asset('assets/img_new/home/author_support.svg') }}" alt="Author Support">
                                <h3>Author Support</h3>
                            </div>
                            <p>
                                Dedicated author support at every stage of your publishing journey.
                            </p>
                            <p>
                                From expert guidance to real-time updates, we're here to help you publish with confidence.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" >
                        <div class="service-card shadow-lg">
                            <div class="icon-head d-flex gap-2 items-center items-self-center">
                                <img src="{{ asset('assets/img_new/home/legal_support.svg') }}" alt="Legal Support">
                                <h3>Legal Support</h3>
                            </div>
                            <p>
                                Protect your work with essential publishing services, including ISBN allocation, copyright
                                registration, and legal documentation.
                            </p>
                            <p>
                                We handle the formalities so you can focus on writing.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="pb-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="section-header">
                    <h2 data-aos="fade-up" > Our <span>Distribution</span> Platforms</h2>
                </div>
                <section class="store-section py-5" data-aos="fade-up">
                    <div class="store-slider owl-carousel">

                        <div class="store-item">
                            <img src="{{ asset('assets/img_new/partner/amazon.webp') }}" alt="Amazon">
                        </div>

                        <div class="store-item" >
                            <img src="{{ asset('assets/img_new/partner/flipkart.webp') }}" alt="Flipkart">
                        </div>

                        <div class="store-item" >
                            <img src="{{ asset('assets/img_new/partner/amazonkindle.webp') }}" alt="Kindle">
                        </div>

                        <div class="store-item" >
                            <img src="{{ asset('assets/img_new/partner/googleplaybooks.jpg') }}" alt="Google Book">
                        </div>

                        <div class="store-item" >
                            <img src="{{ asset('assets/img_new/partner/snapdeal.webp') }}" alt="Snapdeal">
                        </div>

                        <div class="store-item" >
                            <img src="{{ asset('assets/img_new/partner/shopclues.webp') }}" alt="Shopclues">
                        </div>

                        <div class="store-item">
                            <img src="{{ asset('assets/img_new/partner/smashword.webp') }}" alt="Amazon">
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="pricing-section py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2 position-relative pt-2">
                <div class="section-header">
                    <h2 data-aos="fade-up" >Our <span>Publishing</span> packages</h2>
                    <p data-aos="fade-up" >Choose the perfect plan that suits your book and budget.
                    </p>
                </div>

                <div class="d-flex justify-content-center mb-5 ">
                    <div class="format-toggle" data-tab="paperback" data-aos="fade-up" >
                        <button class="format-btn active" data-tab="paperback">Paperback</button>
                        <button class="format-btn" data-tab="ebook">eBook</button>
                    </div>

                </div>
                <div class="tab-panel active" id="paperback">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" >
                            <div class="price-card">
                                <span class="corner-badge">
                                    <img src="{{ asset('assets/img_new/home/economy-icon.svg') }}" alt="Economy Package">
                                </span>
                                <h3 class="plan-name">Economy</h3>
                                <div class="plan-price">
                                    <span class="amt">₹6,499</span>
                                    <span class="gst">+ GST</span>
                                </div>
                                <p class="plan-desc">Basic editing and publishing for new authors.</p>

                                <ul class="plan-features">
                                    <li><span>Format Editing (2 Rounds)</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>Basic Cover Design</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>ISBN Allocation</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>Online Listing and Distribution</span><i class="bi bi-check-circle-fill"></i>
                                    </li>
                                </ul>
                                <a href="https://bfcpublications.com/paperback-publishing-packages" class="plan-btn">Choose
                                    Economy</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" >
                            <div class="price-card">
                                <span class="corner-badge2">
                                    <img src="{{ asset('assets/img_new/home/essential-icon.svg') }}"
                                        alt="Essential Package">
                                </span>
                                <h3 class="plan-name">Essential</h3>
                                <div class="plan-price"><span class="amt">₹12,999</span><span class="gst">+ GST</span></div>
                                <p class="plan-desc">Enhanced editing and design for a professional book.</p>

                                <ul class="plan-features">
                                    <li><span>Format Editing (2 Rounds)</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>Proofreading (2 Rounds)</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>ISBN Allocation</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>Online Listing and Distribution</span><i class="bi bi-check-circle-fill"></i>
                                    </li>
                                    <li><span>Cover Design</span><i class="bi bi-check-circle-fill"></i></li>
                                </ul>
                                <a href="https://bfcpublications.com/paperback-publishing-packages" class="plan-btn">Choose
                                    Essential</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" >
                            <div class="price-card">
                                <span class="corner-badge3">
                                    <img src="{{ asset('assets/img_new/home/regular-icon.svg') }}" alt="Regular Package">
                                </span>
                                <h3 class="plan-name">Regular</h3>
                                <div class="plan-price"><span class="amt">₹19,499</span><span class="gst">+ GST</span></div>
                                <p class="plan-desc">Advance publishing with marketing support.</p>

                                <ul class="plan-features">
                                    <li><span>Format Editing (2 Rounds)</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>Proofreading (2 Round)</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>ISBN Allocation</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>Marketing Support</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>Cover Design (4 Round)</span><i class="bi bi-check-circle-fill"></i></li>
                                </ul>
                                <a href="https://bfcpublications.com/paperback-publishing-packages" class="plan-btn">Choose
                                    Regular</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" >
                            <div class="price-card">
                                <span class="corner-badge4">
                                    <img src="{{ asset('assets/img_new/home/elite-icon.svg') }}" alt="Elite Package">
                                </span>
                                <h3 class="plan-name">Elite</h3>
                                <div class="plan-price"><span class="amt">₹34,999</span><span class="gst">+ GST</span></div>
                                <p class="plan-desc">Premium package with maximum exposure.</p>

                                <ul class="plan-features">
                                    <li><span>Format Editing (Advanced + 4 Round)</span><i
                                            class="bi bi-check-circle-fill"></i>
                                    </li>
                                    <li><span>Proofreading (Advanced + 4 Round)</span><i
                                            class="bi bi-check-circle-fill"></i>
                                    </li>
                                    <li><span>Premium Cover Design</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>Full Marketing Suite</span><i class="bi bi-check-circle-fill"></i></li>
                                </ul>
                                <a href="https://bfcpublications.com/paperback-publishing-packages" class="plan-btn">Choose
                                    Elite</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-panel" id="ebook">
                    <div class="row g-4 justify-content-start">
                        <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" >
                            <div class="price-card">
                                <span class="corner-badge2">
                                    <img src="{{ asset('assets/img_new/home/essential-icon.svg') }}"
                                        alt="Essential Package">
                                </span>
                                <h3 class="plan-name">Essential</h3>
                                <div class="plan-price"><span class="amt">₹3,999</span><span class="gst">+ GST</span></div>
                                <p class="plan-desc">Enhanced editing and design for a professional book.</p>

                                <ul class="plan-features">
                                    <li><span>Format Editing (Upto 75 Pages)</span><i class="bi bi-check-circle-fill"></i>
                                    </li>
                                    <li><span>Cover Design</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>ISBN Allocation</span><i class="bi bi-check-circle-fill"></i></li>
                                    <li><span>Content Uploading Allowed - Unlimited</span><i
                                            class="bi bi-check-circle-fill"></i></li>
                                </ul>
                                <a href="https://bfcpublications.com/ebook-publishing-packages" class="plan-btn">Choose
                                    Essential</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 mb-3">
                        <div class="section-header2 text-center">
                            <h2 style="text-transform:unset !important;" data-aos="fade-up" >Still
                                <span>can’t find</span> what you're looking for?
                            </h2>
                            <p class="mb-0" data-aos="fade-up" >No problem! You can create your own
                                plan
                                just the way you want it.</p>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3" data-aos="fade-up" >
                        <div class="">
                            <a href="https://bfcpublications.com/customize-package/paperback"
                                class="px-4 rounded-pill hero-red-btn">Click Here to Customise Your Plan</a>

                            <!-- <button type="button" class="px-4 rounded-pill hero-red-btn" data-bs-toggle="modal"
                                data-bs-target="#start_bfcpublishing_modal">
                                Click Here to Customise Your Plan</button> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="manuscript-process-section py-md-5 py-4" id="Manuscript">
            <div class="rings"></div>
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="section-header mb-5">
                    <h2 style="text-transform:unset !important;" data-aos="fade-up" >How Your
                        <span>Manuscript</span> Becomes a Book
                    </h2>
                    <p data-aos="fade-up" >From manuscript to marketing and distribution, here's how
                        it
                        all comes together.</p>
                </div>
                <div class="row justify-content-evenly align-items-start">
                    <section class="visual-area col-12 col-md-5" aria-label="Publishing consultation">
                        <div class="blue-glow"></div>
                        <figure class="photo-card">
                            <img id="process-image" src="{{ asset('assets/img_new/home/manuscripts.webp') }}"
                                alt="Publishing consultation at a desk">
                        </figure>
                        <div class="floating badge-publish">
                            <img src="{{ asset('assets/img_new/home/excellence-thumb.svg') }}"
                                alt="excellence-thumb"><span>#1
                                Self<br><strong>Publisher</strong></span>
                        </div>
                        <div class="floating badge-books">
                            <img src="{{ asset('assets/img_new/home/publisher-desktop.svg') }}" alt="publisher-desktop">
                            <span><strong>6K+</strong><br>Books Published
                            </span>
                        </div>
                        <div class="floating badge-copies">
                            <img src="{{ asset('assets/img_new/home/price-tag.svg') }}" alt="price tag">
                            <span><strong> 6 Lakh+</strong><br>Copies Sold</span>
                        </div>
                        <i class="tile tile-one">
                            <img src="{{ asset('assets/img_new/home/book_light.svg') }}" alt="book light badge">
                        </i>
                        <i class="tile tile-two">
                            <img src="{{ asset('assets/img_new/home/letter_badge.svg') }}" alt="letter badge">
                        </i>
                    </section>

                    <section class="steps col-12 col-md-6 mt-4 mt-lg-0" aria-label="Book publishing steps"
                        data-aos="fade-up">
                        <article class="step active" data-image="{{ asset('assets/img_new/home/manuscripts.webp') }}">
                            <div class="mark"><img src="{{ asset('assets/img_new/home/bookmark-active.svg') }}"
                                    alt="bookmark-active"></div>
                            <div>
                                <h2>Consultation & Registration</h2>
                                <p>Not sure where to begin? Our experts will help you find the publishing solution that's
                                    just right for you and get you started with confidence.</p>
                                <!-- <a href="#">Read more →</a> -->
                            </div>
                        </article>

                        <article class="step" data-image="{{ asset('assets/img_new/home/contract-signing.webp') }}"
                            data-aos="fade-up" >
                            <div class="mark"><img src="{{ asset('assets/img_new/home/bookmark.svg') }}"
                                    alt="contract-signing">
                            </div>
                            <div>
                                <h2>Contract Signing</h2>
                                <p>Your story stays yours. Our publishing agreement protects your intellectual property
                                    while clearly outlining the publishing process, package details, and payment terms.</p>
                                <!-- <a href="#">Read more →</a> -->
                            </div>
                        </article>

                        <article class="step" data-image="{{ asset('assets/img_new/home/manuscript-submission.webp') }}"
                            data-aos="fade-up" >
                            <div class="mark"><img src="{{ asset('assets/img_new/home/bookmark.svg') }}"
                                    alt="manuscript-submission"></div>
                            <div>
                                <h2>Manuscript Submission</h2>
                                <p>Share your manuscript with us, and we’ll assign a dedicated publishing consultant to
                                    guide you through every stage of the process.</p>
                                <!-- <a href="#">Read more →</a> -->
                            </div>
                        </article>

                        <article class="step"
                            data-image="{{ asset('assets/img_new/home/proofreading-format-editing.webp') }}"
                            data-aos="fade-up" >
                            <div class="mark"><img src="{{ asset('assets/img_new/home/bookmark.svg') }}"
                                    alt="proofreading-format-editing"></div>
                            <div>
                                <h2>Proofreading & Format Editing</h2>
                                <p>Our team of expert editors and proofreaders refine your manuscript for clarity, accuracy,
                                    consistency, and a polished reading experience while preserving your original voice.</p>
                                <!-- <a href="#">Read more →</a> -->
                            </div>
                        </article>

                        <article class="step" data-image="{{ asset('assets/img_new/home/manuscript_designing.webp') }}"
                            data-aos="fade-up" >
                            <div class="mark"><img src="{{ asset('assets/img_new/home/bookmark.svg') }}" alt="designing">
                            </div>
                            <div>
                                <h2>Designing</h2>
                                <p>A great story deserves a memorable presentation. From striking covers to thoughtfully
                                    designed interiors, we create a book that's as beautiful as the story it tells.</p>
                                <!-- <a href="#">Read more →</a> -->
                            </div>
                        </article>

                        <article class="step"
                            data-image="{{ asset('assets/img_new/home/marketing-online-distribution.webp') }}"
                            data-aos="fade-up" >
                            <div class="mark"><img src="{{ asset('assets/img_new/home/bookmark.svg') }}"
                                    alt="marketing-online-distribution"></div>
                            <div>
                                <h2>Marketing & Online Distribution</h2>
                                <p>
                                    Your publishing journey doesn't end with printing. We help your book reach the right
                                    audience through strategic digital marketing across Facebook, Instagram, and other
                                    leading
                                    platforms. We also ensure seamless distribution on major marketplaces, including Amazon,
                                    Amazon Kindle, Google Play Books, and Flipkart.
                                </p>
                                <!-- <a href="#">Read more →</a> -->
                            </div>
                        </article>

                        <article class="step" data-image="{{ asset('assets/img_new/home/royalty.webp') }}"
                            data-aos="fade-up" >
                            <div class="mark"><img src="{{ asset('assets/img_new/home/bookmark.svg') }}"
                                    alt="marketing-online-distribution"></div>
                            <div>
                                <h2>Royalty</h2>
                                <p>
                                    Stay in control of your earnings with transparent royalties and the freedom to determine
                                    your book's value. Our Royalty Calculator helps you estimate your margins and choose a
                                    selling price that works best for you.
                                </p>
                                <!-- <a href="#">Read more →</a> -->
                            </div>
                        </article>
                    </section>
                </div>
            </div>

            <script>
                const section = document.querySelector('.manuscript-process-section');
                const steps = section.querySelectorAll('.step');
                const image = section.querySelector('#process-image');
                let activeImage = image.getAttribute('src');

                function activate(step) {
                    steps.forEach(item => {
                        const active = item === step;
                        item.classList.toggle('active', active);
                        item.querySelector('.mark img').src = active ? '{{ asset('assets/img_new/home/bookmark-active.svg') }}' : '{{ asset('assets/img_new/home/bookmark.svg') }}';
                    });
                    image.classList.remove('is-changing');
                    if (step.dataset.image !== activeImage) {
                        activeImage = step.dataset.image;
                        window.setTimeout(() => { image.src = activeImage; }, 120);
                    }
                    requestAnimationFrame(() => image.classList.add('is-changing'));
                    window.setTimeout(() => image.classList.remove('is-changing'), 240);
                }

                const observer2 = new IntersectionObserver(entries => {
                    entries.forEach(entry => { if (entry.isIntersecting) activate(entry.target); });
                }, { rootMargin: '-42% 0px -42% 0px' });

                steps.forEach(step => observer2.observe(step));

            </script>

        </section>

        <section class="why-choose-section py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2 position-relative py-3">
                <div class="section-header">
                    <h2 data-aos="fade-up" >Why <span>Choose</span> Us</h2>
                    <!-- <h2>We Have the Best Self-Publishing Services in India</h2> -->
                    <p data-aos="fade-up" >We have the best self-publishing services in India.
                        Here’s
                        what makes us the preferred choice for
                        authors.</p>
                </div>

                <div class="row align-items-center gy-4 pt-5">
                    <div class="col-12 col-lg-3 order-2 order-lg-1">
                        <div class="why-choose-section__benefit-list">
                            <article
                                class="why-choose-section__benefit why-choose-section__benefit--left why-choose-section__reveal"
                                data-aos="fade-up" >
                                <span class="why-choose-section__number">01</span>
                                <span class="why-choose-section__icon"> <img
                                        src="{{ asset('assets/img_new/home/quality.svg') }}"
                                        alt="Author reading a book in a library"> </span>
                                <div>
                                    <h4>Commitment to Quality</h4>
                                    <p>
                                        Every book is carefully edited, designed, and produced to meet the highest
                                        publishing
                                        standards.</p>
                                </div>
                            </article>
                            <article
                                class="why-choose-section__benefit why-choose-section__benefit--left why-choose-section__reveal"
                                data-aos="fade-up" >
                                <span class="why-choose-section__number">02</span>
                                <span class="why-choose-section__icon">
                                    <img src="{{ asset('assets/img_new/home/writing.svg') }}"
                                        alt="Author reading a book in a library"></span>
                                <div>
                                    <h4>Complete Ownership</h4>
                                    <p>
                                        Your story stays yours. Retain full ownership and complete creative control over
                                        your
                                        book. No fine print, no surprises.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 order-1 order-lg-2" data-aos="fade-up" >
                        <figure class="why-choose-section__image-card why-choose-section__reveal">
                            <img src="{{ asset('assets/img_new/home/why-choose.webp') }}"
                                alt="Author reading a book in a library">
                        </figure>
                    </div>

                    <div class="col-12 col-lg-3 order-3">
                        <div class="why-choose-section__benefit-list">
                            <article
                                class="why-choose-section__benefit why-choose-section__benefit--right why-choose-section__reveal"
                                data-aos="fade-up" >
                                <span class="why-choose-section__number"> 03</span>
                                <span class="why-choose-section__icon"><img
                                        src="{{ asset('assets/img_new/home/rupee.svg') }}"
                                        alt="Author reading a book in a library"></span>
                                <div>
                                    <h4>Transparent Royalties</h4>
                                    <p>Know exactly what you will earn with transparent royalties and the freedom to price
                                        your
                                        book.</p>
                                </div>
                            </article>
                            <article
                                class="why-choose-section__benefit why-choose-section__benefit--right why-choose-section__reveal"
                                data-aos="fade-up" >
                                <span class="why-choose-section__number">04</span>
                                <span class="why-choose-section__icon"><img
                                        src="{{ asset('assets/img_new/home/regulation.svg') }}"
                                        alt="Author reading a book in a library"></span>
                                <div>
                                    <h4>Copyright Protection</h4>
                                    <p>
                                        Your work is protected through a clear publishing agreement that safeguards your
                                        rights
                                        from the very beginning.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="why-choose-section__cta pt-5" data-aos="fade-up" >
                    <!-- <a href="#" class="">Publish With Us</a> -->
                    <button type="button" class="px-4 rounded-pill hero-red-btn" data-bs-toggle="modal"
                        data-bs-target="#start_bfcpublishing_modal">
                        Publish With Us</button>
                </div>
            </div>
        </section>

        <section class="browse-genres-section py-md-5 py-4">
            <div class="browse-genres-section__rings" aria-hidden="true"></div>
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="section-header" data-aos="fade-up" >
                    <h2>Browse <span>Genres</span> </h2>
                </div>

                <div class="browse-genres-section__grid pt-5">
                    <a class="browse-genres-section__card browse-genres-section__card--fiction browse-genres-section__card--feature"
                        href="https://store.bfcpublications.com/Fiction">
                        <span class="browse-genres-section__copy" data-aos="fade-down" >
                            <strong>Fiction</strong>
                            <!-- <p>180 Books</p> -->
                        </span>
                        <div class="browse-genres-section__books browse-genres-section__books--feature" aria-hidden="true"
                            data-aos="fade-up" >
                            <img src="{{asset('assets/img_new/home/fiction.webp')}}" alt="fiction">
                        </div>
                    </a>

                    <a class="browse-genres-section__card browse-genres-section__card--non-fiction"
                        href="https://store.bfcpublications.com/Non-fiction">
                        <div class="browse-genres-section__copy" data-aos="fade-down" >
                            <strong>Non-Fiction</strong>
                            <!-- <p>140 Books</p> -->
                        </div>
                        <div class="browse-genres-section__books" aria-hidden="true" data-aos="fade-up"
                            >
                            <img src="{{asset('assets/img_new/home/non-fiction.webp')}}" alt="non-fiction book">
                        </div>
                    </a>
                    <a class="browse-genres-section__card browse-genres-section__card--poetry"
                        href="https://store.bfcpublications.com/Poetry">
                        <div class="browse-genres-section__copy" data-aos="fade-down" >
                            <strong>Poetry</strong>
                            <!-- <p>80 Books</p> -->
                        </div>
                        <div class="browse-genres-section__books" aria-hidden="true" data-aos="fade-up"
                            >
                            <img src="{{asset('assets/img_new/home/poetry.webp')}}" alt="Poetry Book">
                        </div>
                    </a>
                    <a class="browse-genres-section__card browse-genres-section__card--children"
                        href="https://store.bfcpublications.com/Others">
                        <span class="browse-genres-section__copy" data-aos="fade-down" >
                            <strong>Other Books</strong>
                            <!-- <p>78 Books</p> -->
                        </span>
                        <div class="browse-genres-section__books" aria-hidden="true" data-aos="fade-up"
                            >
                            <img src="{{asset('assets/img_new/home/children-book.webp')}}" alt="Children’s Book">
                        </div>
                    </a>
                    <a class="browse-genres-section__card browse-genres-section__card--biography"
                        href="https://store.bfcpublications.com/Biography">
                        <span class="browse-genres-section__copy" data-aos="fade-down" >
                            <strong>Biography</strong>
                            <!-- <p>56 Books</p> -->
                        </span>
                        <div class="browse-genres-section__books" aria-hidden="true" data-aos="fade-up"
                            >
                            <img src="{{asset('assets/img_new/home/biography.webp')}}" alt="Biography Book">
                        </div>
                    </a>
                    <a class="browse-genres-section__card browse-genres-section__card--stories"
                        href="https://store.bfcpublications.com/Short-Stories">
                        <span class="browse-genres-section__copy" data-aos="fade-down" >
                            <strong>Short-Stories</strong>
                            <!-- <p>36 Books</p> -->
                        </span>
                        <div class="browse-genres-section__books" aria-hidden="true" data-aos="fade-up"
                            >
                            <img src="{{asset('assets/img_new/home/short-stories.webp')}}" alt="Short Stories Book">
                        </div>
                    </a>
                    <a class="browse-genres-section__card browse-genres-section__card--academic is-selected"
                        href="https://store.bfcpublications.com/Academic">
                        <span class="browse-genres-section__copy" data-aos="fade-down" >
                            <strong>Academic</strong>
                            <!-- <p>78 Books</p> -->
                        </span>
                        <div class="browse-genres-section__books" aria-hidden="true" data-aos="fade-up"
                            >
                            <img src="{{asset('assets/img_new/home/academic.webp')}}" alt="Academic Book">
                        </div>
                    </a>
                    <a class="browse-genres-section__card browse-genres-section__card--romance browse-genres-section__card--feature"
                        href="https://store.bfcpublications.com/Romance">
                        <span class="browse-genres-section__copy" data-aos="fade-down" >
                            <strong>Romance</strong>
                            <!-- <p>180 Books</p> -->
                        </span>
                        <span class="browse-genres-section__books browse-genres-section__books--feature" aria-hidden="true"
                            data-aos="fade-up" >
                            <img src="{{asset('assets/img_new/home/romance.webp')}}" alt="Romance Book">
                        </span>
                    </a>
                </div>
                <div class="browse-genres-section__footer">
                    <a href="https://store.bfcpublications.com/">View All <span><i
                                class="fa-solid fa-arrow-right-long"></i></span></a>
                </div>
            </div>
        </section>

        <section class="start-publishing-section py-md-5 py-4 overflow-hidden">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="achievement-content">
                            <span class="start-publishing-tag" data-aos="fade-up" >
                                <span> BFC Publications Podcast</span>
                                <img src="{{ asset('assets/img_new/home/publishing-line.svg') }}" alt="Our Achievements">
                            </span>

                            <h2 class="achievement-title pt-lg-0 pt-3" data-aos="fade-up" >
                                Stories Beyond the Book
                            </h2>

                            <p class="achievement-description" data-aos="fade-up" >
                                Your story deserves to be heard beyond the pages of your book. Our podcast gives you a
                                platform
                                to share your writing journey, the inspiration behind your work, and the experiences that
                                brought your book to life.
                            </p>
                            <div class="d-flex flex-column flex-sm-row gap-3" data-aos="fade-up" >
                                <!-- <a href="#" class="px-3 rounded-pill hero-red-btn">Book Your Podcast Now</a> -->
                                <a href="https://www.youtube.com/playlist?list=PL_3-JMsvsLTwtS4Luw9IgPz9Y2hV_Fggi"
                                    target="_blank" class="btn btn-light podcast-btn border-dark rounded-pill px-3 py-3">See
                                    Our
                                    Previous Podcasts</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 items-center">
                        <div class="d-flex justify-content-between podcast-btn-1221" data-aos="fade-left"
                            >
                            <h3 class="mb-0">Discover</h3>
                            <!-- <a href="#" class="align-self-center">View All <i class="fa-solid fa-arrow-right-long"></i></a> -->
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <article class="author-stories-section__slide" data-aos="fade-up" >
                                    <button class="author-stories-section__video-trigger" type="button"
                                        data-video="https://www.youtube.com/embed/4Rvn_o72NtI?si=NK10888fQKV2S1IJ?autoplay=1"
                                        aria-label="Play author testimonial video">
                                        <img src="{{asset('assets/img_new/home/self-hypnosis.webp')}}"
                                            alt="Author recording a testimonial in a studio">
                                        <span class="author-stories-section__play" aria-hidden="true"><i
                                                class="fa-solid fa-play"></i></span>
                                    </button>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <div class="row gap-2">
                                    <div class="col-12" data-aos="fade-left" >
                                        <article class="author-stories-section__slide">
                                            <button class="author-stories-section__video-trigger" type="button"
                                                data-video="https://www.youtube.com/embed/1il-T_RbXZ4?si=ZK-x7v2UjpaGjhcw?autoplay=1"
                                                aria-label="Play author testimonial video">
                                                <img src="{{asset('assets/img_new/home/true-love.webp')}}"
                                                    alt="Author recording a testimonial in a studio">
                                                <span class="author-stories-section__play" aria-hidden="true"><i
                                                        class="fa-solid fa-play"></i></span>
                                            </button>
                                        </article>
                                    </div>
                                    <div class="col-12" data-aos="fade-left" >
                                        <article class="author-stories-section__slide">
                                            <button class="author-stories-section__video-trigger" type="button"
                                                data-video="https://www.youtube.com/embed/7S4XPs9h0zA?si=LSDLlEUv5-GigEtD?autoplay=1"
                                                aria-label="Play author testimonial video">
                                                <img src="{{asset('assets/img_new/home/lessons-from-ramayan.webp')}}"
                                                    alt="Author recording a testimonial in a studio">
                                                <span class="author-stories-section__play" aria-hidden="true"><i
                                                        class="fa-solid fa-play"></i></span>
                                            </button>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between podcast-btn-1221 mt-3" data-aos="fade-left"
                            >
                            <h3 class="mb-0">Most Watched</h3>
                            <!-- <a href="#" class="align-self-center">View All <i class="fa-solid fa-arrow-right-long"></i></a> -->
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" >
                                <article class="author-stories-section__slide">
                                    <button class="author-stories-section__video-trigger" type="button"
                                        data-video="https://www.youtube.com/embed/KL2Gkqzd9yY?si=QVMlyYDeI0Y-D-7k?autoplay=1"
                                        aria-label="Play author testimonial video">
                                        <img src="{{asset('assets/img_new/home/power-of-impressions.webp')}}"
                                            alt="Author recording a testimonial in a studio">
                                        <span class="author-stories-section__play" aria-hidden="true"><i
                                                class="fa-solid fa-play"></i></span>
                                    </button>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" >
                                <article class="author-stories-section__slide">
                                    <button class="author-stories-section__video-trigger" type="button"
                                        data-video="https://www.youtube.com/embed/sLZGP6KGPnA?si=01cI8EnUabGpc6Yz?autoplay=1"
                                        aria-label="Play author testimonial video">
                                        <img src="{{asset('assets/img_new/home/prescription-for-success.webp')}}"
                                            alt="Author recording a testimonial in a studio">
                                        <span class="author-stories-section__play" aria-hidden="true"><i
                                                class="fa-solid fa-play"></i></span>
                                    </button>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3" data-aos="fade-up" >
                                <article class="author-stories-section__slide">
                                    <button class="author-stories-section__video-trigger" type="button"
                                        data-video="https://www.youtube.com/embed/o-wJUZdK6Ho?si=Ckrloaz2e0Iyljo_?autoplay=1"
                                        aria-label="Play author testimonial video">
                                        <img src="{{asset('assets/img_new/home/loves-hangover.webp')}}"
                                            alt="Author recording a testimonial in a studio">
                                        <span class="author-stories-section__play" aria-hidden="true"><i
                                                class="fa-solid fa-play"></i></span>
                                    </button>
                                </article>
                            </div>
                        </div>
                        <!-- <div class="most-watch-reel-grid">
                                                                                                                                                            <article class="author-stories-section__slide">
                                                                                                                                                                <button class="author-stories-section__video-trigger" type="button"
                                                                                                                                                                    data-video="https://www.youtube.com/embed/SiD-n52KVFU?si=n5V7jRzu61fT4G0Y?autoplay=1"
                                                                                                                                                                    aria-label="Play author testimonial video">
                                                                                                                                                                    <img class="podcast-reel" src="{{asset('assets/img_new/home/reel1.png')}}"
                                                                                                                                                                        alt="Author recording a testimonial in a studio">
                                                                                                                                                                    <span class="author-stories-section__play" aria-hidden="true"><i
                                                                                                                                                                            class="fa-solid fa-play"></i></span>
                                                                                                                                                                </button>
                                                                                                                                                            </article>
                                                                                                                                                            <article class="author-stories-section__slide">
                                                                                                                                                                <button class="author-stories-section__video-trigger" type="button"
                                                                                                                                                                    data-video="https://www.youtube.com/embed/BKIWzVAa0Y8?si=wqCVDCMhwYXI1yoN?autoplay=1"
                                                                                                                                                                    aria-label="Play author testimonial video">
                                                                                                                                                                    <img class="podcast-reel" src="{{asset('assets/img_new/home/reel2.png')}}"
                                                                                                                                                                        alt="Author recording a testimonial in a studio">
                                                                                                                                                                    <span class="author-stories-section__play" aria-hidden="true"><i
                                                                                                                                                                            class="fa-solid fa-play"></i></span>
                                                                                                                                                                </button>
                                                                                                                                                            </article>
                                                                                                                                                            <article class="author-stories-section__slide">
                                                                                                                                                                <button class="author-stories-section__video-trigger" type="button"
                                                                                                                                                                    data-video="https://www.youtube.com/embed/BKIWzVAa0Y8?si=wqCVDCMhwYXI1yoN?autoplay=1"
                                                                                                                                                                    aria-label="Play author testimonial video">
                                                                                                                                                                    <img class="podcast-reel" src="{{asset('assets/img_new/home/reel3.png')}}"
                                                                                                                                                                        alt="Author recording a testimonial in a studio">
                                                                                                                                                                    <span class="author-stories-section__play" aria-hidden="true"><i
                                                                                                                                                                            class="fa-solid fa-play"></i></span>
                                                                                                                                                                </button>
                                                                                                                                                            </article>
                                                                                                                                                            <article class="author-stories-section__slide">
                                                                                                                                                                <button class="author-stories-section__video-trigger" type="button"
                                                                                                                                                                    data-video="https://www.youtube.com/embed/BKIWzVAa0Y8?si=wqCVDCMhwYXI1yoN?autoplay=1"
                                                                                                                                                                    aria-label="Play author testimonial video">
                                                                                                                                                                    <img class="podcast-reel" src="{{asset('assets/img_new/home/reel4.png')}}"
                                                                                                                                                                        alt="Author recording a testimonial in a studio">
                                                                                                                                                                    <span class="author-stories-section__play" aria-hidden="true"><i
                                                                                                                                                                            class="fa-solid fa-play"></i></span>
                                                                                                                                                                </button>
                                                                                                                                                            </article>
                                                                                                                                                            <article class="author-stories-section__slide">
                                                                                                                                                                <button class="author-stories-section__video-trigger" type="button"
                                                                                                                                                                    data-video="https://www.youtube.com/embed/BKIWzVAa0Y8?si=wqCVDCMhwYXI1yoN?autoplay=1"
                                                                                                                                                                    aria-label="Play author testimonial video">
                                                                                                                                                                    <img class="podcast-reel" src="{{asset('assets/img_new/home/reel5.png')}}"
                                                                                                                                                                        alt="Author recording a testimonial in a studio">
                                                                                                                                                                    <span class="author-stories-section__play" aria-hidden="true"><i
                                                                                                                                                                            class="fa-solid fa-play"></i></span>
                                                                                                                                                                </button>
                                                                                                                                                            </article> 
                                                                                                                                                        </div> -->
                    </div>

                </div>
            </div>
        </section>

        <section class="author-journey-stories-bg py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="section-header pb-5">
                    <h2 data-aos="fade-up" >Hear It from Our <span>Authors</span> </h2>
                    <p data-aos="fade-up" >Real stories from debut and seasoned authors, on what it
                        took
                        to get their book to market.</p>
                </div>
                <div class="row justify-content-lg-between justify-content-center items-align-center">
                    <div class="col-lg-6 mb-lg-0 mb-4 order-lg-1 order-2 align-self-center">
                        <div class="author-stories-journey">
                            <h3 data-aos="fade-up" >Welcome to Our Author's Testimonial Playlist!
                            </h3>
                            <p data-aos="fade-up" >Hear inspiring stories from authors who turned
                                their
                                dreams into reality with our publishing
                                services. From debut writers to seasoned storytellers, they share their experiences,
                                challenges,
                                and the incredible journey of bringing their books to life.</p>
                            <p data-aos="fade-up" >Get insights into our premium editing, marketing
                                strategies, and the personalized support that
                                helped them achieve their goals. If you're an aspiring author, these testimonials will
                                motivate
                                you to take the next step in your writing journey!</p>
                            <p data-aos="fade-up">
                                Ready to publish your story? Let us help
                                you
                                make it unforgettable!
                            </p>
                        </div>
                        <div class="browse-genres-section__footer text-start ps-lg-0 ps-3" data-aos="fade-up"
                            >
                            <a href="https://www.youtube.com/playlist?list=PL_3-JMsvsLTwwfRuuhNKrOjRXFeSc1e8Q">View All
                                <span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7 items-center order-lg-2 order-1" data-aos="fade-up"
                        >
                        <div class="authors-journey-stories text-center owl-carousel">

                            <article class="author-stories-section__slide">
                                <button class="author-stories-section__video-trigger" type="button"
                                    data-video="https://www.youtube.com/embed/BKIWzVAa0Y8?si=dQJx4UtPyS2yoCaj"
                                    aria-label="Play author testimonial video">
                                    <img src="assets/img_new/home/author-testimonial1.webp"
                                        alt="Author recording a testimonial in a studio">
                                    <span class="author-stories-section__play" aria-hidden="true"><i
                                            class="fa-solid fa-play"></i></span>
                                </button>
                            </article>
                            <article class="author-stories-section__slide">
                                <button class="author-stories-section__video-trigger" type="button"
                                    data-video="https://www.youtube.com/embed/LkGHcZ43Kgk?si=nwoH3hvJ9P0B45ly"
                                    aria-label="Play author testimonial video">
                                    <img src="assets/img_new/home/author-testimonial2.webp"
                                        alt="Author recording a testimonial in a studio">
                                    <span class="author-stories-section__play" aria-hidden="true"><i
                                            class="fa-solid fa-play"></i></span>
                                </button>
                            </article>
                            <article class="author-stories-section__slide">
                                <button class="author-stories-section__video-trigger" type="button"
                                    data-video="https://www.youtube.com/embed/jxe2Nvl9mGE?si=nU6XKFPk27D9wW_h"
                                    aria-label="Play author testimonial video">
                                    <img src="assets/img_new/home/author-testimonial3.webp"
                                        alt="Author recording a testimonial in a studio">
                                    <span class="author-stories-section__play" aria-hidden="true"><i
                                            class="fa-solid fa-play"></i></span>
                                </button>
                            </article>
                            <article class="author-stories-section__slide">
                                <button class="author-stories-section__video-trigger" type="button"
                                    data-video="https://www.youtube.com/embed/kMczRXHaNHU?si=RlHTajFCE3GxA3fx"
                                    aria-label="Play author testimonial video">
                                    <img src="assets/img_new/home/author-testimonial4.webp"
                                        alt="Author recording a testimonial in a studio">
                                    <span class="author-stories-section__play" aria-hidden="true"><i
                                            class="fa-solid fa-play"></i></span>
                                </button>
                            </article>
                        </div>
                    </div>

                    <style>
                        .owl-carousel .owl-dots {
                            display: inline-flex;
                            gap: 5px;
                            margin-top: 20px;
                        }

                        .owl-carousel button.owl-dot {
                            background: #C4C4C4;
                            padding: 5px !important;
                            border-radius: 50% !important;
                            margin: 0 auto;
                            width: fit-content;
                        }

                        .owl-dots .active {
                            background: #CF464E !important;
                        }
                    </style>
                </div>
            </div>
            <div class="author-stories-section__modal" id="author-video-modal" aria-hidden="true" role="dialog"
                aria-modal="true" aria-label="Author testimonial video">
                <div class="author-stories-section__dialog">
                    <button class="author-stories-section__close" type="button" aria-label="Close video"><i
                            class="fa-solid fa-xmark"></i></button>
                    <div class="author-stories-section__frame"><iframe title="Author testimonial video"
                            allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe></div>
                </div>
            </div>

            <script>
                const videoModal = document.querySelector('#author-video-modal');
                if (videoModal) {
                    const videoFrame = videoModal.querySelector('iframe');
                    const closeVideo = () => { videoModal.classList.remove('is-open'); videoModal.setAttribute('aria-hidden', 'true'); videoFrame.src = ''; };
                    document.querySelectorAll('.author-stories-section__video-trigger').forEach(trigger => {
                        trigger.addEventListener('click', () => { videoFrame.src = trigger.dataset.video; videoModal.classList.add('is-open'); videoModal.setAttribute('aria-hidden', 'false'); });
                    });
                    videoModal.querySelector('.author-stories-section__close').addEventListener('click', closeVideo);
                    videoModal.addEventListener('click', event => { if (event.target === videoModal) closeVideo(); });
                    document.addEventListener('keydown', event => { if (event.key === 'Escape') closeVideo(); });
                }
            </script>
        </section>

        <section class="features-author-feedback py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="section-header">
                    <h2 data-aos="fade-up" >Featured <span>Authors</span></h2>
                </div>
                <div class="featured-authors-slider owl-carousel py-4">
                    <div class="feature-authors-card h-100" data-aos="fade-up" >
                        <img src="{{ asset('assets/img_new/home/rajankarla.png') }}" alt="rajankarla Authors">
                        <h3>Rajan Kalra</h3>
                        <span class="">Author and Writer</span>
                        <p>
                            A passionate author who brings creativity and insight to his writing. His work explores
                            relatable
                            experiences and ideas through an engaging storytelling style, offering readers a thoughtful and
                            memorable reading experience.

                        </p>
                    </div>
                    <div class="feature-authors-card h-100" data-aos="fade-up" >
                        <img src="{{ asset('assets/img_new/home/yashodhara.png') }}" alt="yashodhara Authors">
                        <h3>Yashodhara</h3>
                        <span class="">Author and Writer</span>
                        <p>
                            An expressive author whose writing explores emotions, experiences, and the many facets of life.
                            Her
                            storytelling combines creativity with thoughtful observations, creating works that connect with
                            readers on a personal level.
                        </p>
                    </div>
                    <div class="feature-authors-card h-100" data-aos="fade-up" >
                        <img src="{{ asset('assets/img_new/home/abu-malik.png') }}" alt="Abu Malik Authors">
                        <h3>Abu Malik</h3>
                        <span class="">Author and Writer</span>
                        <p>
                            A renowned writer and storyteller known for his engaging voice and distinctive perspective. His
                            work
                            reflects creativity, experience, and a deep understanding of human emotions, inspiring readers
                            through meaningful words and stories.

                        </p>
                    </div>
                    <div class="feature-authors-card h-100" data-aos="fade-up" >
                        <img src="{{ asset('assets/img_new/home/ravindr-dey.png') }}" alt="Dr. Ravindra Dey Authors">
                        <h3>Dr. Ravindra Dey</h3>
                        <span class="">Author and Writer</span>
                        <p>
                            An accomplished author with a passion for meaningful and thought-provoking writing. His works
                            explore ideas, experiences, and perspectives that connect with readers while reflecting his
                            knowledge, creativity for literature.

                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="most-popular-section py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="section-header pb-5">
                    <h2 data-aos="fade-up" >Featured <span>Books</span></h2>
                </div>
                <div class="" data-aos="fade-up" >
                    <div id="mostPopularSlider" class="featured-books-slider owl-carousel owl-theme">
                    </div>
                </div>
            </div>
        </section>

        <section class="start-publishing-section py-md-5 py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2 py-lg-4">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="achievement-content" >
                            <span class="start-publishing-tag" data-aos="fade-up" >
                                <span> Start Publishing Now</span>
                                <img src="{{ asset('assets/img_new/home/publishing-line2.svg') }}" alt="Our Achievements">
                            </span>

                            <h2 class="achievement-title pt-lg-0 pt-3" data-aos="fade-up" >
                                Tell us about your book
                            </h2>

                            <p class="achievement-description" data-aos="fade-up" >
                                A publishing consultant will get in touch to walk you through the right package for your
                                manuscript.
                            </p>
                            <p class="achievement-description" data-aos="fade-up" >
                                No spam, no pressure &mdash; just a conversation about your book
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 items-center">
                        <div class="card border rounded-5 book-form-hero">
                            <form id="bookForm" class="bookform-set py-5 position-relative" data-aos="fade-up">
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
                                            <input type="email" name="email" required id="popup_email" class="form-control"
                                                placeholder="Email" />
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
                                            <select name="book_published" id="book_published" class="form-control" required>
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

                                <div class="arrow-icon-publication">
                                    <i class="fa-brands fa-telegram"></i>
                                </div>
                                <button class="btn btn-danger1 w-100 py-2 rounded-3">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection