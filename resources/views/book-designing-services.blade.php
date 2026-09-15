@extends('layout.template1')

@section('content')
    <style>
        .bfc_book_editing {
            --bfc-primary: #263192;
            --bfc-primary-dark: #1c246d;
            --bfc-accent: #cf464e;
            --bfc-accent-dark: #b9363f;
            --bfc-white: #ffffff;
            --bfc-light: #f7f8fc;
            --bfc-light-red: #fff4f5;
            --bfc-heading: #171b38;
            --bfc-text: #747272;
            --bfc-border: #e5e7ef;
            color: var(--bfc-text);
            overflow: hidden;
            background: #fff;
        }

        .bfc_book_editing *,
        .bfc_book_editing *::before,
        .bfc_book_editing *::after {
            box-sizing: border-box;
        }

        .bfc_book_editing a {
            text-decoration: none;
        }

        .bfc_section_label {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--bfc-accent);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.7px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .bfc_section_label::before {
            content: "";
            width: 30px;
            height: 2px;
            background: var(--bfc-accent);
        }

        .bfc_section_title {
            color: var(--bfc-primary);
            font-size: clamp(34px, 4vw, 40px);
            font-weight: 600;
            line-height: 1.4;
            /* margin-bottom: 18px; */
        }

        .bfc_section_description {
            max-width: 750px;
            margin-left: auto;
            margin-right: auto;
            color: var(--bfc-text);
            font-size: 16px;
            line-height: 1.4;
        }

        .bfc_highlight {
            color: var(--bfc-accent);
        }

        .bfc_primary_btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 14px 25px;
            background: var(--bfc-accent);
            border: 1px solid var(--bfc-accent);
            border-radius: 6px;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            transition: all .3s ease;
        }

        .bfc_primary_btn i {
            transition: transform .3s ease;
        }

        .bfc_primary_btn:hover {
            background: var(--bfc-primary);
            border-color: var(--bfc-primary);
            color: #fff;
            transform: translateY(-3px);
        }

        .bfc_primary_btn:hover i {
            transform: translateX(5px);
        }

        .bfc_editing_hero {
            position: relative;
            display: flex;
            align-items: center;
            background:
                radial-gradient(circle at 85% 25%,
                    rgba(207, 70, 78, .18),
                    transparent 27%),
                linear-gradient(120deg,
                    #263192 0%,
                    #252f8a 55%,
                    #1c246d 100%);
            color: #fff;
        }

        .bfc_editing_hero::before {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 50%;
            right: -230px;
            top: -250px;
        }

        .bfc_editing_hero::after {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border: 1px solid rgba(207, 70, 78, .22);
            border-radius: 50%;
            left: -220px;
            bottom: -220px;
        }

        .bfc_hero_content {
            position: relative;
            z-index: 2;
        }

        .bfc_editing_hero .bfc_section_label {
            color: #fff;
        }

        .bfc_editing_hero .bfc_section_label::before {
            background: var(--bfc-accent);
        }

        .bfc_editing_hero h1 {
            max-width: 750px;
            font-size: clamp(46px, 6vw, 60px);
            line-height: 1.03;
            margin-bottom: 25px;
        }

        .bfc_hero_highlight {
            color: #ff747b;
        }

        .bfc_hero_text {
            max-width: 650px;
            color: rgba(255, 255, 255, .76);
            font-size: 17px;
            line-height: 1.4;
            margin-bottom: 32px;
        }

        .bfc_hero_visual {
            position: relative;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .bfc_book_scene {
            position: relative;
            width: 400px;
            height: 400px;
        }

        .bfc_book_circle {
            position: absolute;
            width: 330px;
            height: 330px;
            left: 35px;
            top: 35px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .12);
        }

        .bfc_book {
            position: absolute;
            width: 220px;
            height: 290px;
            left: 90px;
            top: 55px;
            border-radius: 4px 14px 14px 4px;
            background:
                linear-gradient(135deg,
                    #3945a3,
                    #171f69);
            border-left: 8px solid var(--bfc-accent);
            box-shadow: 25px 30px 55px rgba(0, 0, 0, .3);
            transform: rotate(-7deg);
        }

        .bfc_book::before {
            content: "";
            position: absolute;
            inset: 20px;
            border: 1px solid rgba(255, 255, 255, .2);
        }

        .bfc_book_title {
            position: absolute;
            top: 88px;
            left: 25px;
            right: 25px;
            text-align: center;
            font-size: 27px;
            line-height: 1.25;
            color: #fff;
        }

        .bfc_book_author {
            position: absolute;
            bottom: 35px;
            left: 0;
            right: 0;
            text-align: center;
            color: #ff747b;
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .bfc_pencil {
            position: absolute;
            width: 280px;
            height: 8px;
            right: 5px;
            bottom: 90px;
            background: var(--bfc-accent);
            border-radius: 10px;
            transform: rotate(-32deg);
            box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
        }

        .bfc_floating_card {
            position: absolute;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 18px;
            background: #fff;
            color: var(--bfc-primary);
            border-radius: 8px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, .2);
            font-size: 13px;
            font-weight: 700;
            animation: bfcFloat 4s ease-in-out infinite;
        }

        .bfc_floating_card i {
            width: 38px;
            height: 38px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--bfc-light-red);
            color: var(--bfc-accent);
            font-size: 18px;
        }

        .bfc_floating_card.one {
            top: 55px;
            right: -10px;
        }

        .bfc_floating_card.two {
            bottom: 45px;
            left: -50px;
            animation-delay: 1s;
        }

        @keyframes bfcFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .bfc_intro_section {
            padding: 105px 0;
        }

        .bfc_intro_box {
            position: relative;
            overflow: hidden;
            padding: 70px;
            background: var(--bfc-light);
            border-radius: 20px;
            border: 1px solid #edf0f7;
        }

        .bfc_intro_box::after {
            content: "Aa";
            position: absolute;
            right: 35px;
            bottom: -65px;
            font-size: 220px;
            color: rgba(38, 49, 146, .035);
        }

        .bfc_intro_content {
            position: relative;
            z-index: 2;
        }

        .bfc_intro_title {
            max-width: 900px;
            color: var(--bfc-primary);
            font-size: clamp(34px, 4vw, 53px);
            line-height: 1.2;
            margin-bottom: 22px;
        }

        .bfc_intro_text {
            max-width: 900px;
            color: var(--bfc-text);
            font-size: 16px;
            line-height: 1.9;
            margin-bottom: 0;
        }

        .bfc_services_section {
            padding: 100px 0;
            background: #fff;
        }

        .bfc_service_card {
            position: relative;
            height: 100%;
            padding: 35px 30px;
            background: #fff;
            border: 1px solid var(--bfc-border);
            border-radius: 14px;
            overflow: hidden;
            transition: all .35s ease;
        }

        .bfc_service_card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--bfc-accent);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .35s ease;
        }

        .bfc_service_card:hover {
            transform: translateY(-8px);
            border-color: transparent;
            box-shadow: 0 25px 60px rgba(38, 49, 146, .11);
        }

        .bfc_service_card:hover::before {
            transform: scaleX(1);
        }

        .bfc_service_icon {
            width: 65px;
            height: 65px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: rgba(207, 70, 78, .09);
            color: var(--bfc-accent);
            font-size: 25px;
            margin-bottom: 24px;
            transition: all .3s ease;
        }

        .bfc_service_card:hover .bfc_service_icon {
            background: var(--bfc-primary);
            color: #fff;
            transform: rotate(-5deg);
        }

        .bfc_service_number {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 46px;
            color: #eef0f6;
        }

        .bfc_service_card h3 {
            color: var(--bfc-primary);
            font-size: 24px;
            margin-bottom: 15px;
        }

        .bfc_service_card p {
            color: var(--bfc-text);
            font-size: 16px;
            line-height: 1.4;
            margin: 0;
        }

        .bfc_process_section {
            padding: 105px 0;
            background: var(--bfc-light);
        }

        .bfc_process_wrap {
            position: relative;
            margin-top: 65px;
        }

        .bfc_process_line {
            position: absolute;
            top: 39px;
            left: 10%;
            width: 80%;
            height: 2px;
            background: #dfe1ea;
        }

        .bfc_process_item {
            position: relative;
            text-align: center;
            padding: 0 12px;
        }

        .bfc_process_icon {
            position: relative;
            z-index: 2;
            width: 78px;
            height: 78px;
            display: grid;
            place-items: center;
            margin: 0 auto 24px;
            border-radius: 50%;
            background: var(--bfc-primary);
            color: #fff;
            border: 7px solid var(--bfc-light);
            outline: 1px solid var(--bfc-accent);
            font-size: 21px;
            transition: all .3s ease;
        }

        .bfc_process_item:hover .bfc_process_icon {
            background: var(--bfc-accent);
            transform: scale(1.08);
        }

        .bfc_process_item h3 {
            color: var(--bfc-primary);
            font-size: 19px;
            margin-bottom: 11px;
        }

        .bfc_process_item p {
            color: var(--bfc-text);
            font-size: 13px;
            line-height: 1.7;
            margin: 0;
        }

        .bfc_cta_box {
            position: relative;
            overflow: hidden;
            color: #fff;
            background:
                radial-gradient(circle at 90% 10%,
                    rgba(207, 70, 78, .2),
                    transparent 28%),
                var(--bfc-primary);
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
            font-size: clamp(35px, 3vw, 35px);
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .bfc_cta_text {
            max-width: 750px;
            color: rgba(255, 255, 255, .72);
            line-height: 1.4;
        }

        .bfc_faq_section {
            padding: 105px 0;
            background: #fff;
        }

        .bfc_faq {
            margin: 50px auto 0;
        }

        .bfc_faq .accordion-item {
            border: 1px solid var(--bfc-border);
            border-radius: 10px !important;
            overflow: hidden;
            margin-bottom: 14px;
            background: #fff;
        }

        .bfc_faq .accordion-button {
            padding: 22px 25px;
            background: #fff;
            color: var(--bfc-primary);
            font-size: 18px;
            font-weight: 700;
            box-shadow: none;
        }

        .bfc_faq .accordion-button:not(.collapsed) {
            background: var(--bfc-light-red);
            color: var(--bfc-accent);
        }

        .bfc_faq .accordion-body {
            padding: 0 25px 25px;
            color: var(--bfc-text);
            font-size: 15px;
            line-height: 1.4;
        }

        .bfc_final_cta {
            padding: 0 0 100px;
        }

        .bfc_final_box {
            position: relative;
            overflow: hidden;
            padding: 65px 30px;
            text-align: center;
            background:
                linear-gradient(135deg,
                    #f7f8fc,
                    #fff3f4);
            border: 1px solid rgba(207, 70, 78, .14);
            border-radius: 20px;
        }

        .bfc_final_box h2 {
            color: var(--bfc-primary);
            font-size: clamp(34px, 4vw, 50px);
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .bfc_final_box p {
            max-width: 730px;
            margin: 0 auto 28px;
            color: var(--bfc-text);
            line-height: 1.4;
        }

        .bfc_reveal {
            opacity: 0;
            transform: translateY(35px);
            transition:
                opacity .7s ease,
                transform .7s ease;
        }

        .bfc_reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        @media screen and (max-width: 1199px) {
            .bfc_editing_hero {
                min-height: 600px;
            }

            .bfc_hero_visual {
                transform: scale(.9);
            }

            .bfc_intro_box {
                padding: 55px;
            }
        }

        @media screen and (max-width: 991px) {
            .bfc_editing_hero {
                min-height: auto;
                padding: 85px 0 60px;
            }

            .bfc_hero_visual {
                height: 430px;
                margin-top: 25px;
            }

            .bfc_intro_section,
            .bfc_services_section,
            .bfc_process_section,
            .bfc_faq_section {
                padding: 80px 0;
            }

            .bfc_process_line {
                display: none;
            }

            .bfc_process_item {
                margin-bottom: 45px;
            }
        }

        @media screen and (max-width: 767px) {
            .bfc_editing_hero {
                padding: 60px 0 45px;
            }

            .bfc_editing_hero h1 {
                font-size: 45px;
                line-height: 1.05;
            }

            .bfc_hero_text {
                font-size: 15px;
                line-height: 1.75;
            }

            .bfc_hero_visual {
                height: 380px;
                transform: scale(.8);
                margin-top: 0;
                margin-left: -35px;
                margin-right: -35px;
            }

            .bfc_intro_section,
            .bfc_services_section,
            .bfc_process_section,
            .bfc_faq_section {
                padding: 65px 0;
            }

            .bfc_intro_box {
                padding: 40px 25px;
                border-radius: 15px;
            }

            .bfc_intro_title {
                font-size: 34px;
            }

            .bfc_intro_text {
                font-size: 14px;
                line-height: 1.4;
            }

            .bfc_service_card {
                padding: 30px 25px;
            }

            .bfc_process_wrap {
                margin-top: 40px;
            }

            .bfc_cta_text {
                font-size: 14px;
            }

            .bfc_final_cta {
                padding-bottom: 65px;
            }

            .bfc_final_box {
                padding: 45px 22px;
            }

            .bfc_faq {
                margin-top: 35px;
            }

            .bfc_faq .accordion-button {
                padding: 18px;
                font-size: 14px;
            }

            .bfc_faq .accordion-body {
                padding: 0 18px 20px;
                font-size: 13px;
            }
        }

        @media screen and (max-width: 480px) {
            .bfc_editing_hero h1 {
                font-size: 39px;
            }

            .bfc_hero_visual {
                height: 340px;
                transform: scale(.7);
                margin-left: -55px;
                margin-right: -55px;
            }

            .bfc_primary_btn {
                width: 100%;
            }

            .bfc_floating_card.one {
                right: -25px;
            }

            .bfc_floating_card.two {
                left: -25px;
            }

            .bfc_section_title {
                font-size: 25px;
            }

            .bfc_section_description {
                font-size: 14px;
            }

            .bfc_cta_title {
                font-size: 34px;
            }
        }
    </style>

    <div class="bfc_book_editing">
        <section class="bfc_editing_hero py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="bfc_hero_content bfc_reveal">
                            <div class="bfc_section_label">
                                A Great Story Deserves a Great First Impression!
                            </div>
                            <h1>
                                Cover Designing
                                <span class="bfc_hero_highlight">
                                    Services
                                </span>
                            </h1>
                            <p class="bfc_hero_text">
                                Contrary to what the saying tells us, your book will be judged by its cover. Whether it’s
                                catching a reader’s eye on a bookstore shelf or standing out among countless thumbnails
                                online, your cover has one job: to make them want to take a closer look. At BFC
                                Publications, our design team blends genre expertise with visual storytelling to create
                                covers and layouts that don’t just look good — they sell good too. Every element of your
                                book's design is thoughtfully crafted to reflect your story, meet your genre's reader
                                expectations, and stand out on a crowded shelf — physical or digital.
                            </p>
                            <!-- <a href="https://bfcpublications.com/customize-package/paperback"
                                    class="px-4 rounded-pill hero-red-btn">Click Here to Customize Your Plan</a> -->
                            <button type="button" class="px-4 rounded-pill hero-red-btn" data-bs-toggle="modal"
                                data-bs-target="#start_bfcpublishing_modal">
                                Get Your Cover Designed</button>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bfc_hero_visual bfc_reveal">
                            <div class="bfc_book_scene">
                                <div class="bfc_book_circle"></div>
                                <div class="bfc_book">
                                    <div class="bfc_book_title">
                                        Your Story
                                        <br>
                                        Deserves
                                        <br>
                                        The Best
                                    </div>
                                    <div class="bfc_book_author">
                                        BFC Publications
                                    </div>
                                </div>
                                <!-- <div class="bfc_pencil"></div> -->
                                <div class="bfc_floating_card one">
                                    <i class="bi bi-check2-circle"></i>
                                    <span>
                                        Polished Writing
                                    </span>
                                </div>
                                <div class="bfc_floating_card two">
                                    <i class="fa-solid fa-palette"></i>
                                    <span>
                                        Expert Designing
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="py-5">
                    <div class="container-xxl px-lg-5 px-md-3 px-2">
                        <div class="bfc_intro_box bfc_reveal">
                            <div class="bfc_intro_content">
                                <div class="bfc_section_label">
                                    Why Editing Matters
                                </div>
                                <h2 class="bfc_intro_title">
                                    Before Your Book Meets Readers,
                                    <span class="bfc_highlight">
                                        Let It Meet Our Editors!
                                    </span>
                                </h2>
                                <p class="bfc_intro_text">
                                    A great book deserves more than just a spell-check before
                                    it reaches readers. Our expert editors sharpen your
                                    manuscript, improve its flow, and catch the details you
                                    may have missed. Whether you need copy editing, formatting,
                                    proofreading, or manuscript assessment, our editors work
                                    with your manuscript while keeping your original voice
                                    and story at the centre.
                                </p>
                                <div class="mt-4">
                                    <a href="https://bfcpublications.com/customize-package/paperback" class="px-4 rounded-pill hero-red-btn">Click Here to Customize Your Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

        <section class="py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="text-center mb-5 bfc_reveal">
                    <div class="bfc_section_label">
                        Our Expertise
                    </div>
                    <h2 class="bfc_section_title">
                        Cover Design
                    </h2>
                    <p class="bfc_section_description">
                        Your cover is the first glimpse readers get of your book. We design it to capture your story, fit
                        your genre, and make a strong first impression—both online and in print.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                01
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-solid fa-share"></i>
                            </div>
                            <h3>
                                Genre-Specific Concepts
                            </h3>
                            <p>
                                We study your manuscript, genre, and target audience to create cover concepts that feel
                                right for your story.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                02
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-solid fa-binoculars"></i>
                            </div>
                            <h3>
                                Complete Print Cover
                            </h3>
                            <p>
                                From the front cover to the spine and back cover, every element is designed as one cohesive
                                package.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                03
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h3>
                                Finer Details
                            </h3>
                            <p>
                                We take care of the finer details, including back-cover blurb, author bio, barcode, and ISBN
                                placement.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                04
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-brands fa-leanpub"></i>
                            </div>
                            <h3>
                                eBook-Ready Covers
                            </h3>
                            <p>
                                Dedicated eBook covers are designed and optimised for platforms like Amazon Kindle, Google
                                Play Books, and Kobo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                05
                            </span>
                            <div class="bfc_service_icon">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <h3>
                                Built for Every Format
                            </h3>
                            <p>
                                Your cover is designed to look just as good as a thumbnail on a screen as it does on a
                                physical bookshelf.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_process_section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="text-center bfc_reveal">
                    <div class="bfc_section_label">
                        The Process
                    </div>
                    <h2 class="bfc_section_title">
                        How It Works
                    </h2>
                    <p class="bfc_section_description">
                        From your first idea to the final cover, here’s how we turn your vision into a finished design.
                    </p>
                </div>
                <div class="bfc_process_wrap">
                    <div class="bfc_process_line"></div>
                    <div class="row g-4">
                        <div class="col-lg">
                            <div class="bfc_process_item bfc_reveal">
                                <div class="bfc_process_icon">
                                    01
                                </div>
                                <h3>
                                    Share Your Brief
                                </h3>
                                <p>
                                    Tell us about your book, genre, audience, and the kind of look you have in mind. You can
                                    also share any references or ideas you love.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="bfc_process_item bfc_reveal">
                                <div class="bfc_process_icon">
                                    02
                                </div>
                                <h3>
                                    Explore the Concepts
                                </h3>
                                <p>
                                    Our designers create initial concepts based on your story, genre, and brief, giving your
                                    book a visual identity that feels right for it.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="bfc_process_item bfc_reveal">
                                <div class="bfc_process_icon">
                                    03
                                </div>
                                <h3>
                                    Review & Refine
                                </h3>
                                <p>
                                    Take a look, share your feedback, and let us know what you’d like changed. We refine the
                                    design until you're happy with it.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="bfc_process_item bfc_reveal">
                                <div class="bfc_process_icon">
                                    04
                                </div>
                                <h3>
                                    Get Your Final Design
                                </h3>
                                <p>
                                    Once everything is approved, you receive the final files, ready for print and/or eBook
                                    publishing, depending on your requirements
                                </p>
                            </div>
                        </div>
                        <!-- <div class="col-lg">
                                    <div class="bfc_process_item bfc_reveal">
                                        <div class="bfc_process_icon">
                                            05
                                        </div>
                                        <h3>
                                           Final Sign-Off
                                        </h3>
                                        <p>
                                           Once you're happy with the edits, your manuscript is ready for the next stage of your publishing journey.
                                        </p>
                                    </div>
                                </div> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="bfc_cta_section py-5" id="bfc-editing-cta">
                    <div class="container-xxl px-lg-5 px-md-3 px-2">
                        <div class="bfc_cta_box bfc_reveal">
                            <div class="bfc_cta_content">
                                <div class="bfc_section_label">
                                    Your Manuscript Deserves More
                                </div>
                                <h2 class="bfc_cta_title">
                                    Ready to get your manuscript
                                    <span class="bfc_highlight">
                                        reader-ready?
                                    </span>
                                </h2>
                                <p class="bfc_cta_text">
                                    Whether you need full book editing or just
                                    a final polish, our editors are ready to help
                                    you refine your manuscript while keeping
                                    your voice intact.
                                </p>
                                <a href="https://bfcpublications.com/customize-package/paperback" class="px-4 rounded-pill hero-red-btn">Click Here to Customize Your Plan</a>
                            </div>
                        </div>
                    </div>
                </section> -->

        <section class="bfc_faq_section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="text-center bfc_reveal">
                    <div class="bfc_section_label">
                        Need To Know
                    </div>
                    <h2 class="bfc_section_title">
                        Frequently Asked Questions
                    </h2>
                </div>
                <div class="accordion bfc_faq" id="bfcEditingFaq">
                    <!-- FAQ 1 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqOne">
                                How many cover design options do I get to choose from?
                            </button>
                        </h3>
                        <div id="bfcFaqOne" class="accordion-collapse collapse show" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                The number of initial design concepts depends on the publishing package you choose. Our team
                                works with you to develop a cover that suits your book, genre, and design preferences.

                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->

                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqTwo">
                                Can I request my own design ideas or reference covers?
                            </button>
                        </h3>
                        <div id="bfcFaqTwo" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">

                            <div class="accordion-body">
                                Absolutely. You can share your ideas, preferences, mood boards, or reference covers with our
                                designers. These help us understand the look and feel you have in mind while creating a
                                design that's original to your book.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqThree">
                                Do you design for both print and eBook, or do I need to choose one?

                            </button>
                        </h3>
                        <div id="bfcFaqThree" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                We can design for both print and eBook formats. Print covers include the front, spine, and
                                back, while eBook covers are created specifically for digital platforms and their display
                                requirements.

                            </div>
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqFour">
                                How long does the design process take?

                            </button>
                        </h3>
                        <div id="bfcFaqFour" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                The timeline depends on the scope of the design, the number of formats required, and the
                                revision process. Once we understand your requirements, our team can give you an estimated
                                timeline for your book.

                            </div>
                        </div>
                    </div>
                    <!-- FAQ 5 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqFive">
                                Which package includes design services?

                            </button>
                        </h3>
                        <div id="bfcFaqFive" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                Design services are included in our publishing packages, with the exact scope depending on
                                the package you choose. Our team can help you understand what's included and recommend the
                                option that best fits your requirements.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_final_cta">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="bfc_final_box bfc_reveal">
                    <div class="bfc_section_label justify-content-center">
                        Let's Perfect Your Story
                    </div>
                    <h2>
                        Ready to make your book
                        <span class="bfc_highlight">
                            stand out?
                        </span>
                    </h2>
                    <p>
                        Tell us about your story, genre, and vision, and our designers will turn it into a cover that's made
                        to stand out—online and in print.
                    </p>
                    <button type="button" class="px-4 rounded-pill hero-red-btn" data-bs-toggle="modal"
                        data-bs-target="#start_bfcpublishing_modal">
                        Get Your Cover Designed</button>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const revealItems =
                document.querySelectorAll(".bfc_reveal");
            const revealObserver =
                new IntersectionObserver(
                    function (entries, observer) {
                        entries.forEach(function (entry) {
                            if (entry.isIntersecting) {
                                entry.target.classList.add("active");
                                observer.unobserve(entry.target);
                            }
                        });
                    },
                    {
                        threshold: 0.12
                    }
                );
            revealItems.forEach(function (item) {
                revealObserver.observe(item);
            });
        });
        document.querySelectorAll(
            '.bfc_book_editing a[href^="#"]'
        ).forEach(function (link) {
            link.addEventListener("click", function (event) {
                const targetId =
                    this.getAttribute("href");
                if (targetId === "#") {
                    return;
                }
                const target =
                    document.querySelector(targetId);
                if (target) {
                    event.preventDefault();
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            });
        });
    </script>

@endsection()