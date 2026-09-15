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
            color: #667085;;
        }

        .svc-hero {
            position: relative;
            isolation: isolate;
            background: linear-gradient(135deg, #f4f5ff, #fff 63%, #fff5f5);
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
            font-size: clamp(35px, 4vw, 40px);
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

            font-size: clamp(30px, 4vw, 44px);
            line-height: 1.15;
        }

        .svc-heading p {
            margin: 0;
            color: var(--svc-muted);
            font-size: 16px;
            line-height: 1.75;
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

        .svc-link-card h3,
        .svc-group h3 {
            margin: 0 0 9px;
            color: var(--svc-blue);
            font-size: 19px;
            font-weight: 700;
        }

        .svc-link-card p {
            max-width: 220px;
            margin: 0;
            color: var(--svc-muted);
            font-size: 14px;
            line-height: 1.75;
        }

        .svc-group {
            height: 100%;
            padding: 29px 26px;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 8px 22px rgba(38, 49, 146, .05);
        }

        .svc-group i {
            display: grid;
            width: 44px;
            height: 44px;
            margin-bottom: 16px;
            place-items: center;
            border-radius: 50%;
            background: var(--svc-blue);
            color: #fff;
            font-size: 19px;
        }

        .svc-group ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .svc-group li {
            position: relative;
            padding: 7px 0 7px 17px;
            border-top: 1px solid var(--svc-line);
            color: var(--svc-muted);
            font-size: 14px;
            line-height: 1.45;
        }

        .svc-group li::before {
            position: absolute;
            left: 0;
            color: var(--svc-red);
            content: '•';
            font-weight: 800;
        }

        .svc-final {
            padding: 50px;
            border-radius: 18px;
            background: linear-gradient(135deg, var(--svc-blue), var(--svc-deep));
        }

        .svc-final h2 {
            margin: 0 0 13px;
            color: #fff;

            font-size: clamp(29px, 3.8vw, 42px);
        }

        .svc-final p {
            max-width: 900px;
            margin: 0;
            color: rgba(255, 255, 255, .78);
            font-size: 15px;
            line-height: 1.8;
        }

        @media (max-width: 991px) {

            .svc-art {
                max-width: 360px;
            }
        }

        @media (max-width: 767px) {

            .svc-hero h1 {
                font-size: 35px;
            }

            .svc-hero p,
            .svc-heading p {
                font-size: 15px;
            }

            .svc-art {
                max-width: 310px;
                margin-top: 25px;
            }

            .svc-heading {
                margin-bottom: 28px;
            }

            .svc-final {
                padding: 34px 24px;
            }
        }
    </style>

    <main class="svc-page">
        <section class="svc-hero py-5">
            <div class="svc-shell container-xxl px-lg-5 px-md-3 px-2">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <div class="svc-kicker">BFC Publications</div>
                        <h1>Services<span> We Offer</span></h1>
                        <p>
                            BFC Publications helps authors' works reach every nook and corner by leveraging its
                            collaborations with a huge network of book distributors. Authors have the option of choosing
                            from the already-assembled publishing packages listed on the website or get one tailored based
                            on their requirements, by handpicking the services they wish to avail, including :
                        </p>

                        <ul class="services_name_here pt-4">
                            <li>Editorial Services</li>
                            <li>Designing Services</li>
                            <li>Marketing Services</li>
                            <li>Distribution Services</li>
                        </ul>

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
                    <div class="svc-kicker">Our services</div>
                    <h2>Support at every publishing stage</h2>
                    <p>Choose the service you need for your manuscript, book design, promotion, or distribution.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3"><a class="svc-link-card" href="{{ url('/book-editorial-services') }}"><i
                                class="bi bi-pencil-square"></i>
                            <h3>Editorial</h3>
                            <p>Editing and proofreading to prepare your manuscript for publication.</p>
                        </a></div>
                    <div class="col-md-6 col-lg-3"><a class="svc-link-card" href="{{ url('/book-designing-services') }}"><i
                                class="bi bi-palette"></i>
                            <h3>Designing</h3>
                            <p>Cover and interior design that present your book professionally.</p>
                        </a></div>
                    <div class="col-md-6 col-lg-3"><a class="svc-link-card" href="{{ url('/book-marketing-services') }}"><i
                                class="bi bi-megaphone"></i>
                            <h3>Marketing</h3>
                            <p>Promotion that helps the right audience discover your book.</p>
                        </a></div>
                    <div class="col-md-6 col-lg-3"><a class="svc-link-card"
                            href="{{ url('/book-distribution-services') }}"><i class="bi bi-send"></i>
                            <h3>Distribution</h3>
                            <p>Online distribution and fulfilment support for your book.</p>
                        </a></div>
                </div>
            </div>
        </section>

        <section class="svc-section svc-section-soft">
            <div class="svc-shell">
                <div class="svc-heading">
                    <div class="svc-kicker">Custom publishing plans</div>
                    <h2>Our self-publication services broadly include</h2>
                    <p>Handpick the services that fit your book and create a publishing plan around your requirements.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <article class="svc-group"><i class="bi bi-book"></i>
                            <h3>Book creation &amp; production</h3>
                            <ul>
                                <li>Interior formatting and design</li>
                                <li>Cover design and exterior illustrations</li>
                                <li>Copyright, digital proof, ISBN and barcode</li>
                                <li>eBook, paperback, hardcover and jacket options</li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="svc-group"><i class="bi bi-journal-check"></i>
                            <h3>Editorial support</h3>
                            <ul>
                                <li>Typing and manuscript preparation</li>
                                <li>Proofreading of scripts</li>
                                <li>Copy editing</li>
                                <li>Basic and enhanced layout support</li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="svc-group"><i class="bi bi-box-seam"></i>
                            <h3>Print &amp; fulfilment</h3>
                            <ul>
                                <li>Print-on-Demand and inventory management</li>
                                <li>Complimentary copies</li>
                                <li>National online distribution</li>
                                <li>eBook and paperback creation</li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="svc-group"><i class="bi bi-graph-up-arrow"></i>
                            <h3>Marketing &amp; author presence</h3>
                            <ul>
                                <li>Author promotions and interviews</li>
                                <li>Social media setup and ad campaigns</li>
                                <li>Amazon and Goodreads author pages</li>
                                <li>Author websites, digital release and reviews</li>
                            </ul>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5">
            <div class="svc-shell">
                <div class="svc-final">
                    <h2>Build a plan that fits your book.</h2>
                    <p>Authors can choose the services they need—from a video teaser to a wider PR campaign—and decide a
                        suitable selling price using the Royalty Calculator, even above the recommended MRP.</p>
                </div>
            </div>
        </section>
    </main>
@endsection