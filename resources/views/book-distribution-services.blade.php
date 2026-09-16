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
            left: -35px;
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

        .distributor-platform img {
            width: 200px;
            height: auto;
            padding: 5px 20px;
            border: 1px solid #f9d6d9;
        }
    </style>

    <div class="bfc_book_editing">
        <section class="bfc_editing_hero">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="bfc_hero_content bfc_reveal">
                            <div class="bfc_section_label">
                                Your Book Is Ready. Let’s Get It to Your Readers!
                            </div>
                            <h1>
                                Distribution
                                <span class="bfc_hero_highlight">
                                    Services
                                </span>
                            </h1>
                            <p class="bfc_hero_text">
                                Make your book accessible to more readers through our extensive distribution network across
                                India and beyond
                            </p>
                            <a href="{{ url('/customize-package')}}" class="px-4 rounded-pill hero-red-btn">Explore
                                Distribution</a>

                            <!-- <button type="button" class="px-4 rounded-pill hero-red-btn" data-bs-toggle="modal"
                                                                    data-bs-target="#start_bfcpublishing_modal">
                                                                    Explore Distribution</button> -->
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
                                    <i class="bi bi-pencil-square"></i>
                                    <span>
                                        Distribution
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="text-center mb-5 bfc_reveal">
                    <div class="bfc_section_label">
                        Our Expertise Distributor
                    </div>
                    <h2 class="bfc_section_title">
                        More Platforms to Help Readers Discover Your Book.
                    </h2>
                    <p class="bfc_section_description">
                        From online marketplaces to digital reading platforms, get your book in front of readers across a
                        wide network of platforms.
                    </p>
                </div>
                <div class="container distributor-platform">
                    <div class="row justify-content-center text-center">

                        <div class="col-lg-3 col-md-4 col-6 mb-4 ">
                            <img src="{{ asset('assets/img_new/partner/amazon.webp') }}" alt="Amazon">
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 mb-4 ">
                            <img src="{{ asset('assets/img_new/partner/flipkart.webp') }}" alt="Flipkart">
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 mb-4 ">
                            <img src="{{ asset('assets/img_new/partner/amazonkindle.webp') }}" alt="Kindle">
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 mb-4 ">
                            <img src="{{ asset('assets/img_new/partner/googleplaybooks.jpg') }}" alt="Google Book">
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 mb-4 ">
                            <img src="{{ asset('assets/img_new/partner/snapdeal.webp') }}" alt="Snapdeal">
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 mb-4 ">
                            <img src="{{ asset('assets/img_new/partner/shopclues.webp') }}" alt="Shopclues">
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 mb-4 ">
                            <img src="{{ asset('assets/img_new/partner/smashword.webp') }}" alt="Amazon">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_process_section pt-0 pb-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="text-center bfc_reveal">
                    <h2 class="bfc_section_title">
                        Reach Readers Across India and Abroad
                    </h2>
                    <p class="bfc_section_description mw-75" style="max-width: 90%;">
                        Your readers aren’t limited by geography, and your book shouldn’t be either. With distribution
                        across multiple online marketplaces and digital platforms, your book can reach readers across India
                        and in international markets. More platforms mean more opportunities for readers to discover,
                        purchase, and read your book.
                    </p>
                </div>

            </div>
        </section>

        <section class="bfc_cta_section" id="bfc-editing-cta">
            <div class="bfc_cta_box bfc_reveal py-md-5 py-4">
                <div class="container-xxl px-lg-5 px-md-3 px-2">
                    <div class="bfc_cta_content row justify-content-between align-items-center g-4">
                        <div class="col-lg-12">
                            <h2 class="bfc_cta_title">
                                How Book Distribution
                                <span class="bfc_highlight">
                                    Works
                                </span>
                            </h2>
                            <p class="bfc_cta_text">
                                Getting your book out to readers involves more than simply listing it online. Here’s how the
                                process works:
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="border p-4 rounded border-secondary">
                                <h3 class="text-mute">Book Preparation</h3>
                                <p class="bfc_cta_text">
                                    Your published book is prepared in the required formats and specifications for
                                    distribution
                                    across different platforms.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="border p-4 rounded border-secondary">
                                <h3 class="text-mute">Platform Distribution</h3>
                                <p class="bfc_cta_text">
                                    The book is submitted and made available across relevant online marketplaces and digital
                                    book platforms.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="border p-4 rounded border-secondary">
                                <h3 class="text-mute">Book Availability</h3>
                                <p class="bfc_cta_text">
                                    Once listed, readers can discover, purchase, or access your book through the platforms
                                    where it is distributed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

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
                                What is book distribution?
                            </button>
                        </h3>
                        <div id="bfcFaqOne" class="accordion-collapse collapse show" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                Book distribution is the process of making your published book available to readers through
                                different online marketplaces, bookstores, and digital reading platforms. It helps your book
                                reach a wider audience and gives readers more ways to discover and purchase it.

                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->

                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqTwo">
                                Where will my book be distributed?
                            </button>
                        </h3>
                        <div id="bfcFaqTwo" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">

                            <div class="accordion-body">
                                Your book can be distributed across leading online marketplaces and digital book platforms,
                                depending on the format and distribution channels applicable to your book. This can include
                                platforms such as Amazon, Flipkart, ShopClues, Snapdeal, Amazon Kindle, Google Play Books,
                                Kobo, and Smashwords.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqThree">
                                Can my book reach readers outside India?
                            </button>
                        </h3>
                        <div id="bfcFaqThree" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                Yes. Depending on the distribution platform and format, your book can be made available to
                                readers in international markets, giving you an opportunity to reach audiences beyond India.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqFour">
                                Which platforms distribute my book?
                            </button>
                        </h3>
                        <div id="bfcFaqFour" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                Your book may be distributed across platforms such as Amazon, Flipkart, ShopClues, Snapdeal,
                                Amazon Kindle, Google Play Books, Kobo, and Smashwords. The platforms available may vary
                                depending on your book’s format and distribution requirements.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 5 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqFive">
                                Can both paperback and eBooks be distributed?
                            </button>
                        </h3>
                        <div id="bfcFaqFive" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                Yes. Both paperback books and eBooks can be distributed through applicable platforms. The
                                availability of each format depends on the requirements and supported formats of the
                                respective platform.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ 6 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqSix">
                                Does book distribution guarantee sales?
                            </button>
                        </h3>
                        <div id="bfcFaqSix" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                No. Distribution makes your book available to a wider audience, but it does not guarantee
                                sales. Sales depend on several factors, including the book itself, its visibility, reader
                                interest, pricing, reviews, and marketing efforts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_cta_section" id="bfc-editing-cta">
            <div class="bfc_cta_box bfc_reveal py-md-5 py-4">
                <div class="container-xxl px-lg-5 px-md-3 px-2">
                    <div class="bfc_cta_content row justify-content-between align-items-center g-4">
                        <div class="col-lg-8">
                            <h2 class="bfc_cta_title">
                                Ready to Get Your Book

                                <span class="bfc_highlight">
                                    Out There?
                                </span>
                            </h2>
                            <p class="bfc_cta_text">
                                Get your book published, distributed, and in front of more readers across India and beyond.

                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <button type="button" class="px-4 rounded-pill hero-red-btn" data-bs-toggle="modal"
                                data-bs-target="#start_bfcpublishing_modal">
                                Get Started</button>
                        </div>
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