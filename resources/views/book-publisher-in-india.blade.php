@extends('layout.template1')

@section('content')
    <style>
        :root {
            --bpi-blue: #263192;
            --bpi-deep: #182267;
            --bpi-red: #cf464e;
            --bpi-ink: #292d3d;
            --bpi-muted: #667085;
            --bpi-paper: #e9ecff;
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
            padding: 70px 0 84px;
            /* background: linear-gradient(130deg, #f4f5ff, #fff 62%, #fff5f5); */
            background: linear-gradient(130deg, #f4f5ff, #dadbff 62%, #fbe6e6);
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
            font-size: clamp(40px, 5vw, 55px);
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
            font-size: clamp(30px, 5vw, 40px);
            line-height: 1.5;
        }

        .bpi-heading p {
            margin: 0;
            color: var(--bpi-muted);
            font-size: 16px;
            line-height: 1.5;
        }

        .bpi-step {
            position: relative;
            height: 100%;
            padding: 25px 22px 23px 23px;
            border: 1px solid var(--bpi-line);
            border-radius: 14px;
            background: #fff;
        }

        .bpi-step:hover {
            cursor: pointer;
            border: 1px solid var(--bpi-red);
            border-radius: 14px;
            background: #fff0f08e;
        }

        .bpi-step-number {
            /* position: absolute; */
            top: 25px;
            left: 21px;
            color: var(--bpi-red);
            opacity: 0.3;
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
            font-size: 15px;
            line-height: 1.5;
        }

        .bpi-card {
            height: 100%;
            padding: 27px 23px;
            border-radius: 14px;
            background: #fff;
            border: 1px solid #f8eded;
            box-shadow: 0 10px 25px rgba(38, 49, 146, .06);
        }

        .bpi-card:hover {
            cursor: pointer;
            border: 1px solid var(--bpi-red);
            border-radius: 14px;
            background: #fff0f08e;
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
                padding: 60px 0 72px;
            }

            .bpi-hero-art {
                max-width: 360px;
            }
        }

        @media (max-width: 767px) {

            .bpi-hero {
                padding: 48px 0 64px;
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

            /* .bpi-step {
                                                                                                                                                                            padding-left: 70px;
                                                                                                                                                                        } */
        }

        .hero-red-btn {
            background: #CF464E;
            text-decoration: none;
            color: #ffffff;
            text-align: center;
            font-size: 15px;
            padding: 10px 0px;
            align-self: center;
            border: 1px solid transparent;
        }

        .hero-red-btn:hover {
            background: #263192;
            text-decoration: none;
            color: var(--bg-color);
            transform: translateY(-2px);
            transition: .3s;
            border: 1px solid #fff;
        }
    </style>

    <div class="bpi-page">
        <section class="bpi-hero">
            <div class="container-xxl px-lg-4 px-md-3 px-2 bpi-shell">
                <div class="row align-items-center g-5 justify-content-between bfc_compare_reveal">
                    <div class="col-lg-7">
                        <h1>Book <span> Publisher</span> in India.</h1>
                        <div class="bpi-hero-copy">
                            <p>
                                Finding the best and most reliable Book Publisher in India can be a task, especially for
                                aspiring authors. The primary reason for not having a perfect choice is the unawareness of
                                the book publishing industry.
                            </p>
                            <p>
                                As a Self-Book Publisher in India, BFC Publications offers reliable, hassle-free services.
                                As a publishing company in India, we take care of editing, cover design, ISBN, printing,
                                distribution and marketing, so you can focus on your writing.
                            </p>


                        </div>
                        <div class="d-flex flex-sm-row justify-content-start gap-3 pt-3 bfc_compare_reveal">
                            <button type="button" class="rounded-pill hero-red-btn px-4" data-bs-toggle="modal"
                                data-bs-target="#start_bfcpublishing_modal">
                                Start Publishing Now</button>
                            <a href="#Manuscript"
                                class="btn btn-light border-dark rounded-pill px-4 py-2 align-self-center">How
                                It Works</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bpi-hero-art bfc_compare_reveal">
                            <img src="{{ asset('assets/img_new/other/ebook-publisher.webp') }}"
                                alt="Book publishing in India">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bpi-section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bpi-shell bfc_compare_reveal">
                <div class="bpi-heading">

                    <h2>How to Publish a Book in India</h2>
                    <p>
                        Writing a book is a significant accomplishment, but getting it published is an entirely different
                        ballgame. So, if this is your first attempt at publishing a book, you most likely have no idea what
                        to do next or how to go about it. Well, don't worry! Just follow the instructions below, and you'll
                        be good to go.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <article class="bpi-step"><span class="bpi-step-number">01</span>
                            <h3>Find a Reliable Self-Publisher in India</h3>
                            <p>
                                Look up for a publisher that is reputable and delivers all the needs of an author. BFC
                                Publication is one of India's most reliable self-book publishing company, providing all
                                kinds of services needed.
                            </p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
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
                    <div class="col-lg-4 col-md-6">
                        <article class="bpi-step"><span class="bpi-step-number">03</span>
                            <h3>Formatting, Editing and Cover Designing</h3>
                            <p>
                                A book that has been professionally formatted and edited provides an enjoyable reading
                                experience. Make sure the publisher has done their part of the job, even if it means
                                starting over with an updated file. At BFC Publications, we have expert editors and
                                designers dedicated to providing you with all the assistance needed.
                            </p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="bpi-step"><span class="bpi-step-number">04</span>
                            <h3>Deciding on the Selling Prices</h3>
                            <p>
                                All reliable self-publishers in India follow an open royalty sharing structure. After
                                debating the size and number of pages of your manuscript, the cost of publishing it, and
                                your publisher's fee, among other things, decide on the selling price of your book.
                            </p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="bpi-step"><span class="bpi-step-number">05</span>
                            <h3>ISBN, Printing and Distribution</h3>
                            <p>
                                Once your book is edited and designed, it is assigned an ISBN and prepared for paperback or
                                eBook release. We list it on platforms like Amazon, Flipkart, Kobo, and Amazon Kindle, as
                                well as online retailers and the BFC Book Store so readers can find and buy it.
                            </p>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="bpi-step"><span class="bpi-step-number">06</span>
                            <h3>Promote and Track Your Sales</h3>
                            <p>
                                After launch, our marketing team promotes your book, and you can track sales and royalties
                                through your Author Dashboard. You can use BFC Publications’ Royalty Calculator to estimate
                                your earnings even before you publish your book.
                            </p>
                        </article>
                    </div>
                </div>
                <div class="text-center pt-4">
                    <div class="d-flex flex-column flex-sm-row gap-3 pt-3 justify-content-center">
                        <a href="{{ url('/royalty-calculator') }}" class="rounded-pill hero-red-btn px-4">Calculate Your
                            Royalty</a>
                        <a href="{{ url('/packages') }}"
                            class="btn btn-light border-dark rounded-pill px-4 py-2 align-self-center">View Publishing
                            Packages</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_compare_section">
            <style>
                :root {
                    --bfc_compare_primary: #263192;
                    --bfc_compare_primary_dark: #1c246d;
                    --bfc_compare_red: #cf464e;
                    --bfc_compare_text: #25283a;
                    --bfc_compare_muted: #6c7185;
                    --bfc_compare_light: #f5f7ff;
                    --bfc_compare_border: #e1e4ef;
                    --bfc_compare_white: #ffffff;
                }

                .bfc_compare_section {
                    position: relative;
                    overflow: hidden;
                    background: #ffffff;
                }

                .bfc_compare_container {
                    max-width: 1120px;
                    margin: 0 auto;
                    padding: 0 20px;
                }

                .bfc_compare_table_wrap {
                    position: relative;
                    border: 1px solid var(--bfc_compare_border);
                    background: var(--bfc_compare_white);
                    box-shadow: 0 18px 55px rgba(38, 49, 146, 0.09);
                    overflow: hidden;
                }

                .bfc_compare_table_scroll {
                    width: 100%;
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                }

                .bfc_compare_table {
                    width: 100%;
                    min-width: 700px;
                    margin: 0;
                    border-collapse: separate;
                    border-spacing: 0;
                    overflow: hidden;
                }

                .bfc_compare_table thead th {
                    padding: 22px 20px;
                    border: 0;
                    background: var(--bfc_compare_primary);
                    color: var(--bfc_compare_white);
                    font-size: 16px;
                    font-weight: 700;
                    line-height: 1.4;
                    text-align: center;
                    vertical-align: middle;
                    border: 1px solid var(--bfc_compare_primary);
                }

                .bfc_compare_table thead th:first-child {
                    width: 24%;
                    /* background: var(--bfc_compare_primary_dark); */
                    border-right: 1px solid var(--bfc_compare_border);
                }

                .bfc_compare_table thead th:nth-child(2) {
                    width: 38%;
                }

                .bfc_compare_table thead th:last-child {
                    width: 38%;
                    /* background: var(--bfc_compare_red); */
                    border-left: 1px solid var(--bfc_compare_border);
                }

                .bfc_compare_table thead small {
                    display: block;
                    margin-top: 4px;
                    font-size: 12px;
                    font-weight: 500;
                    opacity: 0.85;
                }

                .bfc_compare_table tbody td {
                    padding: 18px 20px;
                    border-right: 1px solid var(--bfc_compare_border);
                    border-bottom: 1px solid var(--bfc_compare_border);
                    color: var(--bfc_compare_text);
                    font-size: 14px;
                    font-weight: 500;
                    line-height: 1.6;
                    text-align: center;
                    vertical-align: middle;
                    background: #ffffff;
                }

                .bfc_compare_table tbody td:first-child {
                    border-left: 1px solid var(--bfc_compare_border);
                    color: var(--bfc_compare_primary);
                    background: var(--bfc_compare_light);
                    font-weight: 700;
                    text-align: left;
                }

                .bfc_compare_table tbody tr:nth-child(even) td:not(:first-child) {
                    background: #fbfbfd;
                }

                .bfc_compare_table tbody tr:last-child td {
                    border-bottom: 0;
                }

                .bfc_compare_table tbody tr:last-child td:first-child {
                    border-radius: 0 0 0 13px;
                }

                .bfc_compare_table tbody tr:last-child td:last-child {
                    border-radius: 0 0 13px 0;
                }

                .bfc_compare_self_text {
                    color: var(--bfc_compare_primary);
                    font-weight: 600;
                }

                .bfc_compare_traditional_text {
                    color: #555b70;
                }

                .bfc_compare_note {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 8px;
                    margin-top: 22px;
                    color: var(--bfc_compare_muted);
                    font-size: 13px;
                    line-height: 1.5;
                    text-align: center;
                }

                .bfc_compare_note_icon {
                    flex: 0 0 auto;
                    width: 20px;
                    height: 20px;
                    border-radius: 50%;
                    background: rgba(38, 49, 146, 0.1);
                    color: var(--bfc_compare_primary);
                    font-size: 12px;
                    font-weight: 700;
                    line-height: 20px;
                    text-align: center;
                }

                .bfc_compare_reveal {
                    opacity: 0;
                    transform: translateY(35px);
                    transition: opacity 0.7s ease, transform 0.7s ease;
                }

                .bfc_compare_reveal.bfc_compare_show {
                    opacity: 1;
                    transform: translateY(0);
                }

                @media (max-width: 991.98px) {

                    .bfc_compare_table thead th,
                    .bfc_compare_table tbody td {
                        padding: 16px 15px;
                    }
                }

                @media (max-width: 767.98px) {

                    .bfc_compare_container {
                        padding: 0 15px;
                    }

                    .bfc_compare_table_wrap {
                        padding: 5px;
                        border-radius: 14px;
                    }

                    .bfc_compare_table {
                        min-width: 650px;
                    }

                    .bfc_compare_table thead th {
                        padding: 16px 12px;
                        font-size: 14px;
                    }

                    .bfc_compare_table thead small {
                        font-size: 11px;
                    }

                    .bfc_compare_table tbody td {
                        padding: 14px 12px;
                        font-size: 13px;
                        line-height: 1.45;
                    }

                    .bfc_compare_note {
                        align-items: flex-start;
                        font-size: 12px;
                        text-align: left;
                    }
                }

                @media (max-width: 575.98px) {

                    .bfc_compare_table_scroll::after {
                        content: "Swipe left/right to view the comparison";
                        display: block;
                        padding: 9px 5px 3px;
                        color: var(--bfc_compare_muted);
                        font-size: 11px;
                        text-align: center;
                    }
                }

                @media (prefers-reduced-motion: reduce) {
                    .bfc_compare_reveal {
                        opacity: 1;
                        transform: none;
                        transition: none;
                    }
                }
            </style>

            <div class="container bfc_compare_container">
                <div class="bpi-heading bfc_compare_reveal">
                    <h2>Self-Publishing vs Traditional Publishing: <br /> Which Is Right for You?</h2>
                    <p>
                        Many first-time authors wonder whether to approach a traditional publishing house or choose a
                        self-publishing company in India. Here is a quick comparison:

                    </p>
                </div>
                <div class="bfc_compare_table_wrap bfc_compare_reveal">
                    <div class="bfc_compare_table_scroll">
                        <table class="bfc_compare_table">
                            <thead>
                                <tr>
                                    <th>

                                    </th>
                                    <th>
                                        Self-Publishing
                                        <small>(BFC Publications)</small>
                                    </th>
                                    <th>
                                        Traditional
                                        <small>Publishing</small>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Time to publish</td>

                                    <td class="bfc_compare_self_text">
                                        45 days
                                    </td>

                                    <td class="bfc_compare_traditional_text">
                                        Often many months to years
                                    </td>
                                </tr>
                                <tr>
                                    <td>Creative control</td>
                                    <td class="bfc_compare_self_text">
                                        Author decides cover, title, price
                                    </td>
                                    <td class="bfc_compare_traditional_text">
                                        Publisher decides
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rights</td>
                                    <td class="bfc_compare_self_text">
                                        Author retains 100% rights
                                    </td>
                                    <td class="bfc_compare_traditional_text">
                                        Publisher retains the rights
                                    </td>
                                </tr>
                                <tr>
                                    <td>Royalty</td>
                                    <td class="bfc_compare_self_text">
                                        BFC Publications offers 100% royalty
                                    </td>
                                    <td class="bfc_compare_traditional_text">
                                        Lower, varies by contract
                                    </td>
                                </tr>
                                <tr>
                                    <td>Acceptance</td>
                                    <td class="bfc_compare_self_text">
                                        Open to all genres
                                    </td>
                                    <td class="bfc_compare_traditional_text">
                                        Selective; manuscript may be rejected
                                    </td>
                                </tr>
                                <tr>
                                    <td>Upfront cost</td>
                                    <td class="bfc_compare_self_text">
                                        Package-based
                                    </td>
                                    <td class="bfc_compare_traditional_text">
                                        Usually none, but hard to get accepted
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bfc_compare_note bfc_compare_reveal">
                    <span class="bfc_compare_note_icon">i</span>
                    <span>
                        The comparison above summarizes common publishing models.
                        Terms may vary depending on the publisher and contract.
                    </span>
                </div>

            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const bfcCompareElements = document.querySelectorAll(".bfc_compare_reveal");
                    const bfcCompareObserver = new IntersectionObserver(
                        function (entries) {
                            entries.forEach(function (entry) {
                                if (entry.isIntersecting) {
                                    entry.target.classList.add("bfc_compare_show");
                                    bfcCompareObserver.unobserve(entry.target);
                                }
                            });
                        },
                        { threshold: 0.15 }
                    );
                    bfcCompareElements.forEach(function (element) {
                        bfcCompareObserver.observe(element);
                    });
                });
            </script>
        </section>

        <section class="bpi-section py-4 bpi-section-soft">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bpi-shell bfc_compare_reveal">
                <div class="bpi-heading">
                    <h2>Ways to Promote a Book</h2>
                    <p>
                        Writing a book does not guarantee its readership, and there is no assurance that people will even be
                        aware of it, especially when it's your first book. So, it becomes quite necessary to spread the
                        word, and BFC Publications is a well-known provider of promotional services. Our book marketing
                        services are designed to give first-time and established authors a strong launch.
                    </p>
                    <p>
                        We provide all the top tools needed to promote and market your book and give it a head start. We
                        assist you in all aspects of book promotion, both online and offline.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <article class="bpi-card"><i class="bi bi-megaphone"></i>
                            <h3>We Make the Books Noticeable</h3>
                            <p>
                                BFC Publications provides a dedicated team of experts who assist authors in self-publishing
                                their books and with all aspects of marketing needed to help you put your book on the radar.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="bpi-card"><i class="bi bi-bullseye"></i>
                            <h3>Target an Audience</h3>
                            <p>
                                It is quite essential to focus on a target audience based on the genre of your book. BFC
                                Publications helps you reach the target audience with the help of dedicated marketing
                                experts.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="bpi-card"><i class="bi bi-star"></i>
                            <h3>Book Reviews</h3>
                            <p>
                                A book review is an important aspect of book promotion, and word of mouth helps you gather
                                only a limited readership, so reviewing your book is quite necessary. We offer book
                                promotion services through book reviewers and influencers, which help spread the word about
                                your book.
                            </p>

                        </article>
                    </div>
                </div>
                <p class="pt-4">
                    Learn more about our
                    <a style="color:#cf464e;" href="{{ url('/book-marketing-services') }}">Book Marketing Services</a>
                    and

                    <a style="color:#cf464e;" href="{{ url('/book-distribution-services') }}">Book Distribution Services</a>
                    .
                </p>
            </div>
        </section>

        <section class="bpi-section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bpi-shell">
                <div class="bpi-heading bfc_compare_reveal">
                    <h2>How Much Does it Cost to Publish Your Book?</h2>
                    <p>
                        The book publishing cost in India depends on the services you choose, such as editing level, cover
                        design, marketing and distribution. BFC Publications offers packages that include essential services
                        from cover design and publishing to promotion and distribution.
                    </p>
                </div>

                <div class="row g-4 justify-content-center bfc_compare_reveal">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="price-card">
                            <span class="corner-badge">
                                <img src="{{ asset('assets/img_new/home/economy-icon.svg') }}" alt="Economy Package">
                            </span>
                            <h3 class="plan-name">Economy</h3>
                            <div class="plan-price border-bottom pb-3">
                                <span class="amt">₹6,499</span>
                                <span class="gst">+ GST</span>
                            </div>

                            <ul class="plan-features">
                                <li><span>Format Editing (2 Rounds)</span><i class="bi bi-check-circle-fill"></i></li>
                                <li><span>Basic Cover Design</span><i class="bi bi-check-circle-fill"></i></li>
                                <li><span>ISBN Allocation</span><i class="bi bi-check-circle-fill"></i></li>
                                <li><span>Online Listing and Distribution</span><i class="bi bi-check-circle-fill"></i>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="price-card">
                            <span class="corner-badge2">
                                <img src="{{ asset('assets/img_new/home/essential-icon.svg') }}" alt="Essential Package">
                            </span>
                            <h3 class="plan-name">Essential</h3>
                            <div class="plan-price border-bottom pb-3">
                                <span class="amt">₹12,999</span><span class="gst">+
                                    GST</span>
                            </div>


                            <ul class="plan-features">
                                <li><span>Format Editing (2 Rounds)</span><i class="bi bi-check-circle-fill"></i></li>
                                <li><span>Proofreading (2 Rounds)</span><i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li><span>ISBN Allocation</span><i class="bi bi-check-circle-fill"></i></li>
                                <li><span>Online Listing and Distribution</span><i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li><span>Cover Design</span><i class="bi bi-check-circle-fill"></i></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="price-card">
                            <span class="corner-badge3">
                                <img src="{{ asset('assets/img_new/home/regular-icon.svg') }}" alt="Regular Package">
                            </span>
                            <h3 class="plan-name">Regular</h3>
                            <div class="plan-price border-bottom pb-3">
                                <span class="amt">₹19,499</span><span class="gst">+
                                    GST</span>
                            </div>

                            <ul class="plan-features">
                                <li><span>Format Editing (2 Rounds)</span><i class="bi bi-check-circle-fill"></i></li>
                                <li><span>Proofreading (2 Round)</span><i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li><span>ISBN Allocation</span><i class="bi bi-check-circle-fill"></i></li>
                                <li><span>Marketing Support</span><i class="bi bi-check-circle-fill"></i></li>
                                <li><span>Cover Design (4 Round)</span><i class="bi bi-check-circle-fill"></i>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="price-card">
                            <span class="corner-badge4">
                                <img src="{{ asset('assets/img_new/home/elite-icon.svg') }}" alt="Elite Package">
                            </span>
                            <h3 class="plan-name">Elite</h3>
                            <div class="plan-price border-bottom pb-3">
                                <span class="amt">₹34,999</span><span class="gst">+
                                    GST</span>
                            </div>
                            <ul class="plan-features">
                                <li><span>Format Editing (Advanced + 4 Round)</span><i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li><span>Proofreading (Advanced + 4 Round)</span><i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li><span>Premium Cover Design</span><i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li><span>Full Marketing Suite</span><i class="bi bi-check-circle-fill"></i>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <p class="pt-4">
                    Learn more about our Publishing packages <a style="color:#cf464e;"
                        href="{{ url('/ebook-publishing-packages') }}">eBook Publishing Packages</a>
                    and <a style="color:#cf464e;"
                        href="{{ url('/paperback-publishing-packages
                                                                                                            ') }}">Paperback
                        Publishing
                        Packages.
                    </a>
                    .
                </p>
            </div>
        </section>

        <section class="bpi-final py-5">
            <div class="container bpi-shell bfc_compare_reveal">
                <div class="row justify-content-center">
                    <div class="col-md-5 mb-md-0 mb-3">
                        <div class="border p-4 h-100">
                            <h3 class="text-white mb-3">Our Book Publishing Services</h3>
                            <div class="ps-0">
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> <a style="color:#ffff;"
                                        href="{{ url('/book-editorial-services') }}">Editorial Services</a></p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> <a style="color:#ffff;"
                                        href="{{ url('/book-designing-services') }}">Designing Services</a></p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> <a style="color:#ffff;"
                                        href="{{ url('/book-marketing-services') }}">Marketing Services</a></p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> <a style="color:#ffff;"
                                        href="{{ url('/book-distribution-services') }}">Distribution Services</a></p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> <a style="color:#ffff;"
                                        href="{{ url('/author-support') }}">Author Support</a></p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> <a style="color:#ffff;"
                                        href="{{ url('/print-on-demand-book-publishing') }}">Print On Demand</a></p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> <a style="color:#ffff;"
                                        href="{{ url('/book-publisher-in-india') }}">eBook Publisher in India</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="border p-4 h-100">
                            <h3 class="text-white mb-3">Why Authors Choose BFC Publications</h3>
                            <div class="">
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> Experienced Team</p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> Transparent Royalties</p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> Author Dashboard</p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> BFC Publications' Book
                                    Store
                                </p>
                                <p><i class="fa-solid fa-pen-nib text-danger fs-6"></i> Support You Can Reach</p>
                            </div>
                        </div>
                    </div>

                </div>
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

            .faq-hero {
                position: relative;
                padding: 90px 0;
                text-align: center;
                background: linear-gradient(135deg, #f4f5ff 0%, #fff 58%, #fff5f5 100%);
            }

            .faq-hero::before,
            .faq-hero::after {
                position: absolute;
                content: '';
                border-radius: 50%;
                pointer-events: none;
            }

            .faq-hero::before {
                width: 380px;
                height: 380px;
                right: -170px;
                top: -190px;
                background: rgba(38, 49, 146, .06);
            }

            .faq-hero::after {
                width: 220px;
                height: 220px;
                left: -110px;
                bottom: -120px;
                background: rgba(207, 70, 78, .07);
            }

            .faq-hero-content {
                position: relative;
                z-index: 1;
                max-width: 760px;
                margin: auto;
            }

            .faq-eyebrow {
                color: var(--faq-red);
                font-size: 13px;
                font-weight: 700;
                letter-spacing: 1.3px;
                text-transform: uppercase;
            }

            .faq-title {
                margin: 13px 0 18px;
                color: var(--faq-blue);
                font-size: clamp(38px, 5vw, 55px);
                line-height: 1.08;
            }

            .faq-title span {
                color: var(--faq-red);
            }

            .faq-intro {
                margin: 0;
                color: var(--faq-muted);
                font-size: 17px;
                line-height: 1.5;
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
                font-size: 20px;
                font-weight: 500;
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

                .faq-hero {
                    padding: 65px 0;
                }

                .faq-intro {
                    font-size: 15px;
                }

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

        <section class="faq-content py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bfc_compare_reveal">
                <div class="bpi-heading">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="faq-list">
                    <details class="faq-entry" name="faq" open>
                        <summary class="faq-question">Do I keep the rights to my book?</summary>
                        <div class="faq-answer">
                            <p>
                                Yes, authors retain full rights to their work. BFC Publications offers 100% royalties to its
                                authors.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">Is an ISBN included?</summary>
                        <div class="faq-answer">
                            <p>
                                Yes, ISBN allocation is included in our packages.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">How do royalties work?
                        </summary>
                        <div class="faq-answer">
                            <p>
                                We follow an open royalty structure. You can estimate your earnings with our <a
                                    style="color:#cf464e;" href="{{ url('/royalty-calculator') }}">Royalty
                                    Calculator</a> and track sales through your Author Dashboard.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">How do I choose a genuine book publisher in India?
                        </summary>
                        <div class="faq-answer">
                            <p>
                                Check for transparent pricing, real author reviews, published books, a physical office,
                                clear terms and refund policies, and responsive support. Read the publisher's <a
                                    style="color:#cf464e;" href="{{ url('/terms-and-condition') }}"> Terms and
                                    Conditions</a> and <a style="color:#cf464e;"
                                    href="{{ url('/refund-and-cancellation-policy') }}">Refund and Cancellation Policy</a>
                                before signing up.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">Can I publish an eBook as well as a paperback?
                        </summary>
                        <div class="faq-answer">
                            <p>
                                Yes. See our <a style="color:#cf464e;" href="{{ url('/ebook-publishing-packages') }}">eBook
                                    Publishing Packages</a>
                                and <a style="color:#cf464e;"
                                    href="{{ url('/paperback-publishing-packages
                                                                                                            ') }}">Paperback
                                    Publishing
                                    Packages.
                                </a>
                                .
                            </p>
                        </div>
                    </details>

                </div>
            </div>
        </section>
    </div>
@endsection