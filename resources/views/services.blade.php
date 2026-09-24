@extends('layout.template1')

@section('content')
    <style>
        :root {
            --svc-blue: #263192;
            --svc-deep: #182267;
            --svc-red: #cf464e;
            --svc-ink: #292d3d;
            --svc-muted: #667085;
            --svc-paper: #f6f7ff;
            --svc-line: #e4e7f1;
        }

        .svc-page {
            color: var(--svc-ink);
            background: #fff;
            overflow: hidden;
        }

        .svc-page *,
        .svc-page *::before,
        .svc-page *::after {
            box-sizing: border-box;
        }

        .svc-kicker {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--svc-red);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .svc-kicker::before {
            width: 27px;
            height: 2px;
            content: '';
            background: currentColor;
        }

        .services_name_here {
            font-size: 17px;
            line-height: 1.5;
            color: #667085;
            ;
        }

        .svc-hero {
            position: relative;
            isolation: isolate;
            /* background: linear-gradient(135deg, #f4f5ff, #fff 63%, #fff5f5); */
            background: linear-gradient(135deg, #d4d7f9, #fff 63%, #efcaca);
        }

        .svc-hero::before {
            position: absolute;
            z-index: -1;
            top: -210px;
            left: -190px;
            width: 480px;
            height: 480px;
            border: 65px solid rgba(207, 70, 78, .05);
            border-radius: 50%;
            content: '';
        }

        .svc-hero h1 {
            max-width: 630px;
            margin: 13px 0 19px;
            color: var(--svc-blue);
            font-size: clamp(35px, 4vw, 50px);
            line-height: 1.08;
            font-weight: 600;
        }

        .svc-hero h1 span {
            color: var(--svc-red);
        }

        .svc-hero p {
            max-width: 625px;
            margin: 0;
            color: var(--svc-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        p {
            margin: 0;
            color: var(--svc-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .svc-art {
            position: relative;
            max-width: 440px;
            margin: auto;
        }

        .svc-art::after {
            position: absolute;
            z-index: -1;
            top: 8%;
            left: 3%;
            width: 90%;
            height: 87%;
            border-radius: 50%;
            content: '';
            background: rgba(38, 49, 146, .09);
        }

        .svc-art img {
            width: 100%;
            filter: drop-shadow(0 20px 28px rgba(38, 49, 146, .15));
        }

        .svc-section-soft {
            background: var(--svc-paper);
        }

        .svc-heading {
            max-width: 740px;
            margin: 0 auto 39px;
            text-align: center;
        }

        .svc-heading .svc-kicker {
            justify-content: center;
        }

        .svc-heading h2 {
            margin: 11px 0 12px;
            color: var(--svc-blue);

            font-size: clamp(30px, 4vw, 40px);
            line-height: 1.15;
        }

        .svc-heading p {
            margin: 0;
            color: var(--svc-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .svc-link-card {
            position: relative;
            display: block;
            height: 100%;
            padding: 27px 24px;
            border: 1px solid var(--svc-line);
            border-radius: 14px;
            background: #fff;
            color: inherit;
            overflow: hidden;
            text-decoration: none;
            transition: .2s;
        }

        .svc-link-card:hover {
            border-color: transparent;
            box-shadow: 0 14px 28px rgba(38, 49, 146, .1);
            color: inherit;
            transform: translateY(-4px);
            border: 1px solid #182267;
        }

        .svc-link-card::after {
            position: absolute;
            right: 20px;
            bottom: 18px;
            color: var(--svc-red);
            content: '→';
            font-size: 22px;
            font-weight: 700;
        }

        .svc-link-card i {
            display: grid;
            width: 47px;
            height: 47px;
            margin-bottom: 17px;
            place-items: center;
            border-radius: 11px;
            background: rgba(38, 49, 146, .09);
            color: var(--svc-blue);
            font-size: 22px;
        }

        .svc-link-card:nth-child(even) i {
            background: rgba(207, 70, 78, .1);
            color: var(--svc-red);
        }

        .svc-link-card h3 {
            margin: 0 0 9px;
            color: var(--svc-blue);
            font-size: 20px;
            font-weight: 700;
        }

        .svc-link-card p {
            max-width: 310px;
            margin: 0;
            color: var(--svc-muted);
            font-size: 16px;
            line-height: 1.5;
        }

        .svc-group ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .svc-group li {
            position: relative;
            padding: 7px 0 7px 17px;
            border-bottom: 1px solid var(--svc-line);
            color: var(--svc-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .svc-group li::before {
            position: absolute;
            left: 0;
            color: var(--svc-red);
            content: '•';
            font-weight: 800;
        }

        @media (max-width: 991px) {

            .svc-art {
                max-width: 360px;
            }
        }

        @media only screen and (max-width: 900px) {
            .svc-hero h1 {
                font-size: 35px;
                max-width: 100% !important;
            }

            .svc-hero p {
                max-width: 100% !important;
            }
        }

        @media only screen and (max-width: 790px) {

            .svc-hero h1 {
                font-size: 35px;
                max-width: 100% !important;
            }

            .svc-hero p {
                max-width: 100% !important;
            }

            .svc-hero p,
            p,
            .svc-heading p {
                max-width: 100%;
                font-size: 15px;
            }

            .svc-art {
                max-width: 310px;
                margin-top: 25px;
            }

            .svc-heading {
                margin-bottom: 28px;
            }

        }

        .bfc_cta_box {
            position: relative;
            overflow: hidden;
            color: #fff;
            background:
                radial-gradient(circle at 90% 10%,
                    rgba(207, 70, 78, .2),
                    transparent 28%),
                var(--svc-blue);
        }

        .bfc_cta_box::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            right: -180px;
            top: -230px;
            border: 1px solid rgba(207, 70, 78, .3);
            border-radius: 50%;
        }

        .bfc_cta_box::after {
            content: "BOOK";
            position: absolute;
            right: 45px;
            bottom: -65px;
            font-size: 180px;
            color: rgba(255, 255, 255, .025);
        }

        .bfc_cta_content {
            position: relative;
            z-index: 2;
        }

        .bfc_cta_title {
            max-width: 800px;
            font-weight: 600;
            font-size: clamp(35px, 3vw, 35px);
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .bfc_cta_text {
            max-width: 750px;
            color: rgba(255, 255, 255, .72);
            line-height: 1.4;
        }

        .bfc_highlight {
            color: var(--svc-red);
        }
    </style>

    <div class="svc-page">
        <section class="svc-hero py-5 text-lg-start text-center">
            <div class="svc-shell container-xxl px-lg-5 px-md-3 px-2 py-3">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <!-- <div class="svc-kicker">BFC Publications</div> -->
                        <h1>Self-publishing <span>Services in India</span></h1>
                        <p>
                            From shaping your manuscript to reaching readers across the country, BFC Publications puts you
                            in control of your publishing journey. Get expert support from editing to marketing and
                            distribution, every step of the way.

                        </p>

                    </div>
                    <div class="col-lg-5">
                        <div class="svc-art"><img src="{{ asset('assets/img_new/other/our services.webp') }}"
                                alt="BFC Publications services"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="svc-section py-5">
            <div class="svc-shell container-xxl px-lg-5 px-md-3 px-2">
                <div class="svc-heading">
                    <!-- <div class="svc-kicker">Our services</div> -->
                    <h2>Services We Offer</h2>
                    <p>We provide end-to-end publishing solutions to help your book stand out and reach the right readers.
                        Authors have the option of choosing from the already-assembled publishing packages listed on the
                        website or get one tailored based on their requirements, by handpicking the services they wish to
                        avail.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <a class="svc-link-card" href="{{ url('/book-editorial-services') }}">
                            <i class="bi bi-pencil-square"></i>
                            <h3>Editorial Services</h3>
                            <p>
                                Professional editing and proofreading to refine your manuscript, improve clarity, and
                                deliver a polished, publication-ready book.

                                From grammar to flow, we ensure your writing is clear, consistent, and impactful.
                            </p>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a class="svc-link-card" href="{{ url('/book-designing-services') }}"><i class="bi bi-palette"></i>
                            <h3>Designing Services</h3>
                            <p>
                                Creative cover designs that capture attention, reflect your story, and leave a lasting first
                                impression.

                                Our designers create visually striking covers that connect with readers and strengthen your
                                book's appeal.
                            </p>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a class="svc-link-card" href="{{ url('/book-marketing-services') }}"><i
                                class="bi bi-megaphone"></i>
                            <h3>Marketing Services</h3>
                            <p>Strategic book marketing solutions to boost your book's visibility and connect with the right
                                readers.

                                From social media campaigns to promotional strategies, we help your book reach a wider
                                audience.</p>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a class="svc-link-card" href="{{ url('/book-distribution-services') }}"><i class="bi bi-send"></i>
                            <h3>Distribution Services</h3>
                            <p>
                                Wide distribution across leading online bookstores and marketplaces to maximise your book's
                                reach.

                                We ensure your book is easily accessible to readers in India and around the world.
                            </p>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a class="svc-link-card" href="{{ url('/author-support') }}"><i class="bi bi-send"></i>
                            <h3>Author Support</h3>
                            <p>
                                Dedicated author support at every stage of your publishing journey.

                                From expert guidance to real-time updates, we're here to help you publish with confidence.
                            </p>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a class="svc-link-card" href="#"><i class="bi bi-send"></i>
                            <h3>Legal Support</h3>
                            <p>
                                Protect your work with essential publishing services, including ISBN allocation, copyright
                                registration, and legal documentation.

                                We handle the formalities so you can focus on writing.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_cta_section" id="bfc-editing-cta">
            <div class="bfc_cta_box bfc_reveal py-md-5 py-4 active">
                <div class="container-xxl px-lg-5 px-md-3 px-2 py-3">
                    <div class="bfc_cta_content row justify-content-between align-items-center g-4">
                        <div class="col-lg-7">
                            <!-- <div class="svc-kicker">Before You Decide</div> -->
                            <h2 class="bfc_cta_title">
                                Before You
                                <span class="bfc_highlight">
                                    Decide
                                </span>
                            </h2>
                            <p class="bfc_cta_text">
                                Browse our ready-made packages, or estimate your earnings per copy first

                            </p>
                        </div>
                        <div class="col-lg-5 text-lg-end">
                            <div class="row justify-content-lg-center">
                                <div class="col-xl-7 text-xl-end mb-xl-0 mb-3">
                                    <a class="px-4 rounded-pill hero-red-btn"
                                        href="{{ url('/royalty-calculator') }}">Calculate
                                        Royalty</a>
                                </div>
                                <div class="col-xl-5 mt-xl-0 mt-3">
                                    <a class="px-4 rounded-pill hero-red-btn" href="{{ url('/packages') }}">Explore
                                        Packages</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="svc-section svc-section-soft py-4">
            <div class="svc-shell container-xxl px-lg-5 px-md-3 px-2">
                <div class="svc-heading">
                    <!-- <div class="svc-kicker">Custom publishing plans</div> -->
                    <h2>Our self-publication services broadly include</h2>
                </div>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <article class="svc-group">
                                <ul>
                                    <li>Basic & Customised Interior Formatting & Design</li>
                                    <li>Basic & Customised Cover Design</li>
                                    <li>Customised Exterior With Basic, Enhanced & Superior Illustrations</li>
                                    <li>Basic & Enhanced Layout</li>
                                    <li>Copyright & Digital Proof</li>
                                    <li>ISBN & Barcode</li>
                                    <li>eBook & Paperback Creation</li>
                                    <li>Hardcover</li>
                                    <li>Hardcover with Jacket</li>
                                    <li>Typing</li>
                                    <li>Proofreading of Scripts</li>
                                    <li>Copy Editing</li>
                                </ul>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class="svc-group">
                                <ul>
                                    <li>Print On Demand / Inventory Management</li>
                                    <li>Complimentary Copies</li>
                                    <li>Author Promotions & Interviews</li>
                                    <li>National Online Distribution & Marketing</li>
                                    <li>Social Media Setup – Facebook, Instagram and Twitter</li>
                                    <li>Author Page Setup – Amazon & Goodreads</li>
                                    <li>Author Website Creation</li>
                                    <li>Amazon Sponsored Ads & Prime</li>
                                    <li>Digital Release</li>
                                    <li>Consumer / Blogger Reviews</li>
                                    <li>Social Media Ad Campaign – Facebook, Instagram, Twitter, Email and WhatsApp</li>
                                </ul>
                            </article>
                        </div>

                    </div>
                </div>
                <p class="py-4">
                    Authors have the liberty to compile customised plans based on their requirements, by choosing from
                    the publishing services listed above/below, be it creating a video teaser for the book or executing
                    an elaborate PR campaign for maximizing outreach. They also have the freedom to decide the selling
                    price of the book after approximating the sales proceeds through our Royalty Calculator, even if it
                    is over and above the recommended MRP.
                </p>
            </div>
        </section>

        <style>
            :root {
                --faq-blue: #263192;
                --faq-red: #cf464e;
                --faq-text: #292d3d;
                --faq-muted: #70758a;
                --faq-border: #e7e8ef;
            }

            .faq-page {
                color: var(--faq-text);
                background: #fff;
                overflow: hidden;
            }

            .faq-page *,
            .faq-page *::before,
            .faq-page *::after {
                box-sizing: border-box;
            }

            .faq-entry {
                margin-bottom: 16px;
                border: 1px solid var(--faq-border);
                border-radius: 14px;
                background: #fff;
                box-shadow: 0 8px 25px rgba(38, 49, 146, .04);
                overflow: hidden;
            }

            .faq-question {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 20px;
                padding: 24px 30px;
                color: var(--faq-blue);
                cursor: pointer;
                font-size: 18px;
                font-weight: 700;
                line-height: 1.5;
                list-style: none;
            }

            .faq-question::-webkit-details-marker {
                display: none;
            }

            .faq-question::after {
                content: '+';
                display: grid;
                flex: 0 0 32px;
                width: 32px;
                height: 32px;
                place-items: center;
                border-radius: 8px;
                background: rgba(38, 49, 146, .08);
                color: var(--faq-blue);
                font-size: 23px;
                font-weight: 400;
                line-height: 1;
                transition: .2s ease;
            }

            .faq-entry[open] .faq-question::after {
                content: '−';
                background: var(--faq-red);
                color: #fff;
            }

            .faq-answer {
                padding: 0 30px 25px;
                color: var(--faq-muted);
                font-size: 15px;
                line-height: 1.8;
            }

            .faq-answer p {
                margin: 0;
                font-size: 17px;
                line-height: 1.5;
            }

            @media (max-width: 767px) {

                .faq-content {
                    padding: 60px 0 65px;
                }

                .faq-question {
                    padding: 20px;
                    font-size: 16px;
                }

                .faq-answer {
                    padding: 0 20px 20px;
                    font-size: 14px;
                }
            }
        </style>

        <div class="faq-page">

            <section class="faq-content py-4">
                <div class="container-xxl px-lg-5 px-md-3 px-2">
                    <div class="svc-heading">
                        <!-- <div class="svc-kicker">Need To Know</div> -->
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="faq-list">
                        <details class="faq-entry" name="faq" open>
                            <summary class="faq-question">Will I get an ISBN and copyright registration for my book?
                            </summary>
                            <div class="faq-answer">
                                <p>
                                    Yes. ISBN and barcode registration, along with copyright registration and digital proof,
                                    are included as part of our editorial services, so your book is fully registered and
                                    ready for sale.
                                </p>
                            </div>
                        </details>
                        <details class="faq-entry" name="faq">
                            <summary class="faq-question">How do I know what my book will earn before I commit to a service
                                plan?</summary>
                            <div class="faq-answer">
                                <p>
                                    You can use our Royalty Calculator to estimate your per-copy earnings based on your
                                    selling price before finalising a package — so you know your numbers upfront rather than
                                    after publishing.
                                </p>
                            </div>
                        </details>
                        <details class="faq-entry" name="faq">
                            <summary class="faq-question">How much does it cost to publish a book with BFC?
                            </summary>
                            <div class="faq-answer">
                                <p>
                                    Costs vary based on the services you choose and the format you publish in (eBook or
                                    paperback). You can pick a ready-made package or build a custom plan, and use our
                                    Royalty Calculator to see how pricing affects your earnings.
                                </p>
                            </div>
                        </details>
                        <details class="faq-entry" name="faq">
                            <summary class="faq-question">How long does the whole publishing process take?</summary>
                            <div class="faq-answer">
                                <p>
                                    On average, it takes about 45 days from manuscript submission to print, though this can
                                    vary depending on your book's length and the services included in your plan.
                                </p>
                            </div>
                        </details>
                        <details class="faq-entry" name="faq">
                            <summary class="faq-question">Do I need any prior writing or publishing experience?</summary>
                            <div class="faq-answer">
                                <p>
                                    No.You don’t need writing or publishing experience to work with us. From proofreading
                                    and editing to designing, formatting, and distribution, our experts guide you through
                                    every step.
                                </p>
                            </div>
                        </details>
                        <details class="faq-entry" name="faq">
                            <summary class="faq-question"> Will I retain ownership and rights to my book?</summary>
                            <div class="faq-answer">
                                <p>
                                    Yes. Since this is self-publishing, you retain full ownership and copyright of your work
                                    at every stage.
                                </p>
                            </div>
                        </details>

                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection