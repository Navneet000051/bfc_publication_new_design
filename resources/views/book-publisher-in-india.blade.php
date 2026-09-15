@extends('layout.template1')

@section('content')
    <style>
        :root {
            --bpi-blue: #263192;
            --bpi-deep: #182267;
            --bpi-red: #cf464e;
            --bpi-ink: #292d3d;
            --bpi-muted: #667085;
            --bpi-paper: #f6f7ff;
            --bpi-line: #e4e7f1;
        }

        .bpi-page {
            color: var(--bpi-ink);
            background: #fff;
            overflow: hidden;
        }

        .bpi-page *,
        .bpi-page *::before,
        .bpi-page *::after {
            box-sizing: border-box;
        }

        .bpi-kicker {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--bpi-red);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .bpi-kicker::before {
            width: 28px;
            height: 2px;
            content: '';
            background: currentColor;
        }

        .bpi-hero {
            position: relative;
            isolation: isolate;
            padding: 76px 0 84px;
            background: linear-gradient(130deg, #f4f5ff, #fff 62%, #fff5f5);
        }

        .bpi-hero::after {
            position: absolute;
            z-index: -1;
            top: -170px;
            right: -150px;
            width: 440px;
            height: 440px;
            border-radius: 50%;
            content: '';
            background: rgba(38, 49, 146, .06);
        }

        .bpi-hero h1 {
            font-weight: 700;
            margin: 13px 0 18px;
            color: var(--bpi-blue);
            font-size: clamp(40px, 5vw, 62px);
            line-height: 1.08;
        }

        .bpi-hero h1 span {
            color: var(--bpi-red);
        }

        .bpi-hero-copy {
            max-width: 610px;
            color: var(--bpi-muted);
            font-size: 16px;
            line-height: 1.8;
        }

        .bpi-hero-copy p {
            margin: 0 0 13px;
            font-size: 17px;
            line-height: 1.5;
        }

        .bpi-hero-art {
            position: relative;
            max-width: 440px;
            margin: auto;
        }

        .bpi-hero-art::before {
            position: absolute;
            z-index: -1;
            top: 7%;
            right: 4%;
            width: 82%;
            height: 82%;
            border-radius: 22px;
            content: '';
            background: #dfe3ff;
            transform: rotate(5deg);
        }

        .bpi-hero-art img {
            width: 100%;
            border-radius: 20px;
            filter: drop-shadow(0 20px 28px rgba(35, 44, 120, .16));
        }

        .bpi-section-soft {
            background: var(--bpi-paper);
        }

        .bpi-heading {
            max-width: 1200px;
            margin: 0 auto 38px;
            text-align: center;
        }

        .bpi-heading h2 {
            margin: 11px 0;
            color: var(--bpi-blue);
            font-size: clamp(30px, 5vw, 45px);
            line-height: 1.5;
        }

        .bpi-heading p {
            margin: 0;
            color: var(--bpi-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .bpi-step {
            position: relative;
            height: 100%;
            padding: 25px 22px 23px 74px;
            border: 1px solid var(--bpi-line);
            border-radius: 14px;
            background: #fff;
        }

        .bpi-step-number {
            position: absolute;
            top: 25px;
            left: 21px;
            color: var(--bpi-red);

            font-size: 28px;
            font-weight: 700;
            line-height: 1;
        }

        .bpi-step h3,
        .bpi-card h3 {
            margin: 0 0 9px;
            color: var(--bpi-blue);
            font-size: 20px;
            font-weight: 700;
            line-height: 1.5;
        }

        .bpi-step p,
        .bpi-card p {
            margin: 0;
            color: var(--bpi-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .bpi-card {
            height: 100%;
            padding: 27px 23px;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 10px 25px rgba(38, 49, 146, .06);
        }

        .bpi-card i {
            display: grid;
            width: 45px;
            height: 45px;
            margin-bottom: 17px;
            place-items: center;
            border-radius: 10px;
            background: rgba(207, 70, 78, .1);
            color: var(--bpi-red);
            font-size: 21px;
        }

        .bpi-package {
            height: 100%;
            padding: 27px 23px;
            border: 1px solid var(--bpi-line);
            border-top: 3px solid var(--bpi-blue);
            border-radius: 13px;
            background: #fff;
        }

        .bpi-package:nth-child(2) {
            border-top-color: var(--bpi-red);
        }

        .bpi-package h3 {
            margin: 0 0 10px;
            color: var(--bpi-blue);
            font-weight: 600;
            font-size: 24px;
        }

        .bpi-package p {
            margin: 0;
            color: var(--bpi-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .bpi-final {
            background: linear-gradient(135deg, var(--bpi-blue), var(--bpi-deep));
        }

        .bpi-final h2 {
            margin: 0 0 15px;
            color: #fff;
            font-size: clamp(29px, 3.8vw, 29px);
        }

        .bpi-final p {
            /* max-width: 920px; */
            margin: 0 0 15px;
            color: rgba(255, 255, 255, .78);
            font-size: 17px;
            line-height: 1.5;
        }

        .bpi-final p:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 991px) {

            .bpi-hero {
                padding: 65px 0 72px;
            }

            .bpi-hero-art {
                max-width: 360px;
            }
        }

        @media (max-width: 767px) {

            .bpi-hero {
                padding: 58px 0 64px;
            }

            .bpi-hero h1 {
                font-size: 40px;
            }

            .bpi-hero-copy,
            .bpi-heading p {
                font-size: 15px;
            }

            .bpi-hero-art {
                margin-top: 25px;
                max-width: 310px;
            }

            .bpi-heading {
                margin-bottom: 27px;
            }

            .bpi-step {
                padding-left: 70px;
            }
        }
    </style>

    <div class="bpi-page">
        <section class="bpi-hero">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bpi-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <div class="bpi-kicker">BFC Publications</div>
                        <h1>Book <span> Publisher</span> in India.</h1>
                        <div class="bpi-hero-copy">
                            <p>
                                Finding the best and most reliable Book Publisher in India can be a task, especially for
                                aspiring authors. The primary reason for not having a perfect choice is the unawareness of
                                book publishing.
                            </p>
                            <p>
                                Book publishing does not only mean printing a book but also various steps are involved in
                                the process. Manuscript editing, marketing, promotion, and so on are included in publishing
                                a book.
                            </p>
                            <p>
                                Book Publisher in India, BFC Publications offers reliable, hassle-free services. A trusted
                                Book Publisher in India for authors across all genres.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bpi-hero-art"><img src="{{ asset('assets/img_new/other/ebook-publisher.webp') }}"
                                alt="Book publishing in India"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bpi-section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bpi-shell">
                <div class="bpi-heading">
                    <div class="bpi-kicker">Publish with confidence</div>
                    <h2>How to Publish a Book in India</h2>
                    <p>
                        Writing a book is a significant accomplishment in itself but is entirely different from publishing a
                        story. Self-publishing a book might seem even more tricky than writing one. Let's say the book you
                        were working on is finished and needs to be published and distributed to everyone. Those who have
                        previously published are aware of the next steps. However, if this is your first attempt at
                        self-publishing a book, you most likely have no idea what to do next or how to self-publish a book
                        in India. Well, don't worry! Just follow the instructions below, and you'll be good to go.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <article class="bpi-step"><span class="bpi-step-number">01</span>
                            <h3>Find a Reliable Self-Publisher in India</h3>
                            <p>
                                Look up for a self-publisher that is reputable and delivers all the needs of an author. BFC
                                Publication is one of India's most reliable self-book publishers, providing all kinds of
                                services needed to publish a book.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="bpi-step"><span class="bpi-step-number">02</span>
                            <h3>Select a Package</h3>
                            <p>
                                After selecting a self-publisher, it is important to choose a package, and the services
                                provided depend on the chosen package. Make sure the package you select matches your
                                preferences and requirements for all publishing aspects like editing, format editing, cover
                                design and so on.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="bpi-step"><span class="bpi-step-number">03</span>
                            <h3>Formatting, Editing and Cover Designing</h3>
                            <p>A book that has been professionally formatted and edited provides an enjoyable reading
                                experience. Make sure the publisher has done their part of the job, even if it means
                                starting over with an updated file. At BFC Publications, we have expert editors and
                                designers dedicated to providing you with all the assistance needed.</p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="bpi-step"><span class="bpi-step-number">04</span>
                            <h3>Deciding on the Selling Prices</h3>
                            <p>All reliable self-publishers in India follow an open royalty sharing structure. After
                                debating the size and number of pages of your manuscript, the cost of publishing it, and
                                your publisher's fee, among other things, decide on the selling price of your book.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="bpi-section py-5 bpi-section-soft">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bpi-shell">
                <div class="bpi-heading">
                    <div class="bpi-kicker">Book promotion</div>
                    <h2>Ways to Promote a Book</h2>
                    <p>Writing a book does not guarantee its readership, and there is no assurance that people will even be
                        aware of it, especially when it's your first book. So, it becomes quite necessary to spread the
                        word, and BFC Publications is a well-known provider of promotional services.</p>
                    <p>
                        We provide all the top tools needed to promote and market your book and give it a head start. We
                        assist you in all the aspects of book promotion, both online and offline.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <article class="bpi-card"><i class="bi bi-megaphone"></i>
                            <h3>We Make the Books Noticeable</h3>
                            <p>
                                BFC Publications provides a dedicated team of experts that assist authors in self-publishing
                                their books and with all the aspects of marketing needed to help you put your book on the
                                radar.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="bpi-card"><i class="bi bi-bullseye"></i>
                            <h3>Target an Audience</h3>
                            <p>It is quite essential to focus on a target audience based on the genre of your book. BFC
                                Publications helps you reach the target audience with the help of dedicated marketing
                                experts.</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="bpi-card"><i class="bi bi-star"></i>
                            <h3>Book Reviews</h3>
                            <p>A book review is an important aspect of book promotion, and word of mouth helps you gather
                                only a limited readership, so reviewing your book is quite necessary. Make contact with book
                                reviewers and influencers. If necessary, request that they review your book in exchange for
                                payment, which will help spread the positive word about your book.

                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="bpi-section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bpi-shell">
                <div class="bpi-heading">
                    <div class="bpi-kicker">Publishing Cost</div>
                    <h2>How Much Does it Cost to Publish Your Book?</h2>
                    <p>BFC Publications offers packages that include essential services from cover design and publishing to
                        promotion and distribution.</p>
                </div>
                <div class="row g-4 py-4">
                    <div class="col-md-6 col-lg-3">
                        <article class="bpi-package">
                            <h3>Essential</h3>
                            <p>An entry-level package covering the basic aspects of self-publishing, including formatting,
                                editing, ISBN allocation, and online listing.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <article class="bpi-package">
                            <h3>Regular</h3>
                            <p>Essential publishing features with added benefits such as cover design and basic marketing
                                support.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <article class="bpi-package">
                            <h3>Premium</h3>
                            <p>Enhanced author support with a social-media marketing network and email, SMS, and WhatsApp
                                marketing.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <article class="bpi-package">
                            <h3>Elite</h3>
                            <p>A complete publishing experience with advanced editing, design, and marketing support to
                                reach your audience.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="bpi-final py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bpi-shell">
                <div class="">
                    <h2>Which Self-Book Publisher is The Best Fit For You?</h2>
                    <p>
                        BFC Publications is one of India's most reliable self-book-publisher that has helped 1000+ authors
                        achieve their dream. We at BFC Publications provide the best of services and a team of dedicated
                        experts to assist the authors with all the aspects of self-publishing. As one of the most trusted
                        self-publishing companies in India, we have an established network frame and a wide distribution
                        channel that will eventually help you acquire readership and will help you reach the target
                        audience.
                    </p>
                    <h2>How to Find the Right Self-Book Publisher for Your Book in India?</h2>
                    <p>
                        In order to select the right self-book publisher for your book, one must be aware of their
                        needs as an author. One must opt for a self-publisher that caters to all the aspects of
                        self-publishing and is budget-friendly.
                    </p>
                    <p>BFC Publications is one of India's most cost-effective self-publishing services that deliver
                        professional assistance, guidance and support to all new authors who dream of writing and
                        self-publishing their books. We provide authors with a platform that provides them with
                        flexibility and independence to create and share their stories with the world. Our top-class
                        services like social media marketing, exclusive video trailer, customized cover design etc.,
                        make us the perfect choice for self-publishing a book in India.
                    </p>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection