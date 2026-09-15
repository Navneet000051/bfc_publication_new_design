@extends('layout.template1')

@section('content')

    <style>
        :root {
            --bfc_about_primary: #263192;
            --bfc_about_primary_dark: #1c246e;
            --bfc_about_red: #cf464e;
            --bfc_about_red_dark: #ae3540;
            --bfc_about_white: #ffffff;
            --bfc_about_light: #f7f8fc;
            --bfc_about_text: #272a3a;
            --bfc_about_muted: #70758a;
            --bfc_about_border: #e8e9f0;
        }

        .bfc_about_page {
            color: var(--bfc_about_text);
            background: #fff;
            overflow: hidden;
        }

        .bfc_about_page *,
        .bfc_about_page *::before,
        .bfc_about_page *::after {
            box-sizing: border-box;
        }

        .bfc_about_page img {
            max-width: 100%;
            display: block;
        }

        .bfc_about_page a {
            text-decoration: none;
        }

        /* =========================================================
                                                                               COMMON
                                                                               ========================================================= */

        .bfc_about_section_tag {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--bfc_about_red);
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 14px;
        }

        .bfc_about_section_tag::before {
            content: "";
            width: 28px;
            height: 2px;
            background: var(--bfc_about_red);
        }

        .bfc_about_heading {

            font-size: clamp(34px, 4vw, 42px);
            line-height: 1;
            color: var(--bfc_about_primary);
            margin-bottom: 20px;
        }

        .bfc_about_heading span {
            color: var(--bfc_about_red);
        }

        .bfc_about_description {
            font-size: 17px;
            line-height: 1.4;
            color: var(--bfc_about_muted);
        }


        /* =========================================================
                                                                               HERO
                                                                               ========================================================= */

        .bfc_about_hero {
            position: relative;
            min-height: 590px;
            display: flex;
            align-items: center;
            background:
                radial-gradient(circle at 80% 20%,
                    rgba(207, 70, 78, .12),
                    transparent 28%),
                linear-gradient(135deg,
                    #f5f6ff 0%,
                    #ffffff 55%,
                    #fff5f5 100%);
        }

        .bfc_about_hero_shape {
            position: absolute;
            width: 500px;
            height: 500px;
            right: -200px;
            top: -160px;
            border-radius: 50%;
            background: rgba(38, 49, 146, .06);
        }

        .bfc_about_hero_content {
            position: relative;
            z-index: 2;
        }

        .bfc_about_hero_tag {
            display: inline-flex;
            padding: 9px 16px;
            border-radius: 50px;
            background: rgba(38, 49, 146, .08);
            color: var(--bfc_about_primary);
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .bfc_about_hero_title {

            color: var(--bfc_about_primary);
            font-size: clamp(54px, 5vw, 65px);
            line-height: 1.04;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .bfc_about_hero_title span {
            color: var(--bfc_about_red);
        }

        .bfc_about_hero_text {
            max-width: 650px;
            font-size: 17px;
            line-height: 1.4;
            color: var(--bfc_about_muted);
            margin-bottom: 32px;
        }

        .bfc_about_hero_buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .bfc_about_btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 14px 24px;
            border-radius: 50px;
            font-weight: 500;
            transition: all .3s ease;
        }

        .bfc_about_btn_primary {
            color: #fff;
            background: var(--bfc_about_red);
        }

        .bfc_about_btn_primary:hover {
            color: #fff;
            background: var(--bfc_about_red_dark);
            transform: translateY(-3px);
        }

        .bfc_about_btn_outline {
            color: var(--bfc_about_primary);
            border: 1px solid var(--bfc_about_primary);
            background: #fff;
        }

        .bfc_about_btn_outline:hover {
            color: #fff;
            background: var(--bfc_about_primary);
        }


        /* =========================================================
                                                                               HERO IMAGE
                                                                               ========================================================= */

        .bfc_about_hero_visual {
            position: relative;
            z-index: 2;
        }

        .bfc_about_hero_image_wrap {
            position: relative;
            max-width: 530px;
            margin-left: auto;
        }

        .bfc_about_hero_image {
            width: 100%;
            border-radius: 28px;
            box-shadow: 0 30px 70px rgba(38, 49, 146, .18);
        }

        .bfc_about_float_card {
            position: absolute;
            left: -45px;
            bottom: 35px;
            width: 190px;
            padding: 20px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 20px 50px rgba(30, 35, 70, .15);
        }

        .bfc_about_float_icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            color: #fff;
            background: var(--bfc_about_red);
            font-size: 20px;
            margin-bottom: 12px;
        }

        .bfc_about_float_card strong {
            display: block;
            font-size: 18px;
            color: var(--bfc_about_primary);
        }

        .bfc_about_float_card small {
            color: var(--bfc_about_muted);
        }


        /* =========================================================
                                                                               ABOUT STORY
                                                                               ========================================================= */

        .bfc_about_story {
            background: #fff;
        }

        .bfc_about_story_image {
            position: relative;
        }

        .bfc_about_story_image img {
            width: 100%;
            border-radius: 24px;
        }

        .bfc_about_story_badge {
            position: absolute;
            right: -25px;
            bottom: 30px;
            padding: 18px 22px;
            background: var(--bfc_about_primary);
            color: #fff;
            border-radius: 14px;
            box-shadow: 0 20px 40px rgba(38, 49, 146, .25);
        }

        .bfc_about_story_badge strong {
            display: block;
            font-size: 24px;
        }


        /* =========================================================
                                                                               VALUES
                                                                               ========================================================= */

        .bfc_about_values {
            background: var(--bfc_about_light);
        }

        .bfc_about_value_card {
            height: 100%;
            padding: 30px;
            background: #fff;
            border: 1px solid var(--bfc_about_border);
            border-radius: 18px;
            transition: all .35s ease;
        }

        .bfc_about_value_card:hover {
            transform: translateY(-8px);
            border-color: transparent;
            box-shadow: 0 20px 50px rgba(38, 49, 146, .10);
        }

        .bfc_about_value_icon {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            background: rgba(38, 49, 146, .08);
            color: var(--bfc_about_primary);
            font-size: 25px;
            margin-bottom: 20px;
        }

        .bfc_about_value_card:nth-child(even) .bfc_about_value_icon {
            color: var(--bfc_about_red);
            background: rgba(207, 70, 78, .09);
        }

        .bfc_about_value_title {
            font-size: 21px;
            font-weight: 700;
            color: var(--bfc_about_primary);
            margin-bottom: 10px;
        }

        .bfc_about_value_text {
            color: var(--bfc_about_muted);
            line-height: 1.4;
            margin: 0;
        }


        /* =========================================================
                                                                               TEAM
                                                                               ========================================================= */

        .bfc_about_team {
            background: #fff;
        }

        .bfc_about_team_intro {
            max-width: 700px;
            margin: 0 auto 50px;
            text-align: center;
        }

        .bfc_about_team_card {
            position: relative;
            height: 100%;
            overflow: hidden;
            border-radius: 20px;
            background: #fff;
            border: 1px solid var(--bfc_about_border);
            transition: all .35s ease;
        }

        .bfc_about_team_card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 60px rgba(38, 49, 146, .12);
        }

        .bfc_about_team_image {
            position: relative;
            height: 330px;
            overflow: hidden;
            background: #f0f1f7;
        }

        .bfc_about_team_image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            transition: transform .5s ease;
        }

        .bfc_about_team_card:hover .bfc_about_team_image img {
            transform: scale(1.05);
        }

        .bfc_about_team_content {
            padding: 24px;
        }

        .bfc_about_team_name {
            font-size: 25px;
            font-weight: 700;
            color: var(--bfc_about_primary);
            margin-bottom: 5px;
        }

        .bfc_about_team_role {
            color: var(--bfc_about_red);
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .bfc_about_team_text {
            font-size: 16px;
            line-height: 1.4;
            color: var(--bfc_about_muted);
            margin-bottom: 0;
            text-align: justify;
        }


        /* =========================================================
                                                                               EDITORIAL TEAM
                                                                               ========================================================= */

        .bfc_about_editorial {
            background:
                linear-gradient(135deg,
                    var(--bfc_about_primary) 0%,
                    #1d286f 100%);
            color: #fff;
        }

        .bfc_about_editorial .bfc_about_heading {
            color: #fff;
        }

        .bfc_about_editorial .bfc_about_description {
            color: rgba(255, 255, 255, .72);
        }

        .bfc_about_editorial .bfc_about_section_tag {
            color: #ffb2b6;
        }

        .bfc_about_editorial .bfc_about_section_tag::before {
            background: #ffb2b6;
        }

        .bfc_about_editorial_card {
            height: 100%;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, .14);
            background: rgba(255, 255, 255, .07);
            border-radius: 18px;
            backdrop-filter: blur(10px);
        }

        .bfc_about_editorial_top {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 20px;
        }

        .bfc_about_editorial_image {
            width: 80px;
            height: 80px;
            flex: 0 0 80px;
            overflow: hidden;
            border-radius: 50%;
            border: 3px solid rgba(255, 255, 255, .25);
        }

        .bfc_about_editorial_image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .bfc_about_editorial_name {
            margin: 0 0 4px;
            font-size: 23px;
            font-weight: 700;
        }

        .bfc_about_editorial_role {
            color: #ffb2b6;
            font-size: 18px;
            margin: 0;
        }

        .bfc_about_editorial_text {
            color: rgba(255, 255, 255, .70);
            font-size: 16px;
            line-height: 1.4;
            margin: 0;
            text-align: justify;
        }


        /* =========================================================
                                                                               PHILOSOPHY
                                                                               ========================================================= */

        .bfc_about_philosophy {
            background: #fff;
        }

        .bfc_about_quote {
            position: relative;
            padding: 55px;
            background: var(--bfc_about_light);
            border-radius: 25px;
            overflow: hidden;
        }

        .bfc_about_quote::before {
            content: "“";
            position: absolute;
            top: -35px;
            left: 25px;
            font-size: 180px;
            line-height: 1;
            color: rgba(207, 70, 78, .08);
        }

        .bfc_about_quote_text {
            position: relative;
            z-index: 2;

            font-size: clamp(28px, 4vw, 48px);
            line-height: 1.3;
            color: var(--bfc_about_primary);
        }

        .bfc_about_quote_text span {
            color: var(--bfc_about_red);
        }


        /* =========================================================
                                                                               RESPONSIVE
                                                                               ========================================================= */

        @media (max-width: 1199px) {

            .bfc_about_hero {
                min-height: 620px;
            }

            .bfc_about_float_card {
                left: -15px;
            }

            .bfc_about_section {
                padding: 80px 0;
            }

        }

        @media (max-width: 991px) {

            .bfc_about_hero {
                padding: 80px 0;
            }

            .bfc_about_hero_visual {
                margin-top: 50px;
            }

            .bfc_about_hero_image_wrap {
                margin: auto;
            }

            .bfc_about_story_badge {
                right: 20px;
            }

            .bfc_about_editorial_card {
                padding: 22px;
            }

            .bfc_about_quote {
                padding: 40px 30px;
            }

        }

        @media (max-width: 767px) {

            .bfc_about_section {
                padding: 65px 0;
            }

            .bfc_about_hero {
                padding: 60px 0;
            }

            .bfc_about_hero_title {
                font-size: 44px;
            }

            .bfc_about_hero_text {
                font-size: 16px;
            }

            .bfc_about_hero_buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .bfc_about_btn {
                width: 100%;
            }

            .bfc_about_float_card {
                display: none;
            }

            .bfc_about_story_badge {
                position: relative;
                right: auto;
                bottom: auto;
                margin: -30px 20px 0;
            }

            .bfc_about_team_image {
                height: 300px;
            }

            .bfc_about_quote {
                padding: 35px 22px;
            }

        }

        @media (max-width: 575px) {

            .bfc_about_container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .bfc_about_hero {
                padding: 0px;
            }

            .bfc_about_hero_title {
                font-size: 38px;
            }

            .bfc_about_heading {
                font-size: 34px;
            }

            .bfc_about_team_image {
                height: 280px;
            }

            .bfc_about_editorial_image {
                width: 65px;
                height: 65px;
                flex-basis: 65px;
            }

            .bfc_about_editorial_name {
                font-size: 17px;
            }

        }
    </style>

    <div class="bfc_about_page">
        <section class="bfc_about_hero">
            <div class="bfc_about_hero_shape"></div>
            <div class="container-xxl px-lg-5 px-md-3 px-2 bfc_about_container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-md-1 order-2">
                        <div class="bfc_about_hero_content" data-aos="fade-up">
                            <div class="bfc_about_hero_tag">
                                About BFC Publications
                            </div>
                            <h1 class="bfc_about_hero_title">
                                Your story deserves
                                <span>to be heard.</span>
                            </h1>

                            <p class="bfc_about_hero_text">
                                At BFC Publications, we help authors succeed by providing the resources and support needed
                                to get their stories out there. Our team of experts educates authors on the ways of
                                publishing, while our digital marketing specialists make sure their books achieve the kind
                                of visibility they deserve. Also, we stay in constant touch with our authors, guiding them
                                through the publishing process, because we believe in their unique vision and strive to meet
                                their expectations.
                            </p>
                            <div class="bfc_about_hero_buttons">
                                <a href="#bfc_about_team" class="bfc_about_btn bfc_about_btn_primary">
                                    Meet Our Team
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                <a href="#bfc_about_story" class="bfc_about_btn bfc_about_btn_outline">
                                    Discover Our Story
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-md-2 order-1 mb-4 mb-lg-0">
                        <div class="bfc_about_hero_visual" data-aos="fade-left">
                            <div class="bfc_about_hero_image_wrap">
                                <img src="{{ asset('assets/img_new/about/hero_about.webp') }}"
                                    alt="BFC Publications" class="bfc_about_hero_image">
                                <div class="bfc_about_float_card">
                                    <div class="bfc_about_float_icon">
                                        <i class="bi bi-book-half"></i>
                                    </div>
                                    <strong>Ideas into Books</strong>
                                    <small>
                                        Helping authors publish with confidence.
                                    </small>
                                </div>
                            </div>
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

                    <div class="col-lg-3 col-6  counter-item" data-aos="fade-up">
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

                    <div class="col-lg-3 col-6 counter-item" data-aos="fade-up">
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

                    <div class="col-lg-3 col-6 counter-item" data-aos="fade-up">
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

        <section class="bfc_about_section bfc_about_values py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bfc_about_container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <div class="bfc_about_section_tag">
                        What Drives Us
                    </div>
                    <h2 class="bfc_about_heading">
                        Built around <span>authors</span>
                    </h2>
                    <p class="bfc_about_description mx-auto" style="max-width:720px;">
                        Publishing is more than printing a book. It's about
                        understanding the author, protecting the work and
                        helping the story find its readers.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="bfc_about_value_card" data-aos="fade-up">
                            <div class="bfc_about_value_icon">
                                <i class="bi bi-stars"></i>
                            </div>
                            <h3 class="bfc_about_value_title">
                                Quality
                            </h3>
                            <p class="bfc_about_value_text">
                                From editing to design, every stage receives
                                careful attention so your finished book reflects
                                the quality of your writing.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="bfc_about_value_card" data-aos="fade-up">
                            <div class="bfc_about_value_icon">
                                <i class="bi bi-person-heart"></i>
                            </div>
                            <h3 class="bfc_about_value_title">
                                Author First
                            </h3>
                            <p class="bfc_about_value_text">
                                We listen to your ideas, understand your goals
                                and keep your vision at the centre of the
                                publishing process.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="bfc_about_value_card" data-aos="fade-up">
                            <div class="bfc_about_value_icon">
                                <i class="bi bi-megaphone"></i>
                            </div>
                            <h3 class="bfc_about_value_title">
                                Visibility
                            </h3>
                            <p class="bfc_about_value_text">
                                Publishing is only the beginning. Our marketing
                                support helps your book reach more potential
                                readers.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="bfc_about_value_card" data-aos="fade-up">
                            <div class="bfc_about_value_icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h3 class="bfc_about_value_title">
                                Support
                            </h3>
                            <p class="bfc_about_value_text">
                                Our team stays connected with authors and helps
                                make every stage of the journey easier to
                                understand.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_about_section bfc_about_team py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 bfc_about_container">
                <div class="bfc_about_team_intro" data-aos="fade-up">
                    <div class="bfc_about_section_tag">
                        Meet The Team
                    </div>
                    <h2 class="bfc_about_heading">
                        The <span>Go-Getters</span>
                    </h2>
                    <p class="bfc_about_description">
                        Behind every successful publishing journey is a team
                        that cares about the details. Meet the people who help
                        authors bring their ideas to life.
                    </p>
                </div>

                <div class="row g-4">

                    <!-- Shweta -->
                    <div class="col-lg-4 col-md-6">
                        <div class="bfc_about_team_card" data-aos="fade-up">
                            <div class="bfc_about_team_image">
                                <img src="{{ asset('assets/img_new/team/shweta.webp') }}" alt="Shweta Mishra">
                            </div>
                            <div class="bfc_about_team_content">
                                <h3 class="bfc_about_team_name">
                                    Shweta Mishra
                                </h3>
                                <div class="bfc_about_team_role">
                                    Publishing Consultant
                                </div>
                                <p class="bfc_about_team_text">
                                    Shweta is one of our most passionate Publishing Consultants with abundant marketing
                                    experience under her belt. She has been with the team for 3-odd years and has helped
                                    numerous Authors publish and market their books.
                                    "A book is as good as its cover, at least in this digital age", she opines. "Yes, this
                                    contradicts an old saying about books and not judging on covers, but like it or not,
                                    covers go a long in selling books in this age of trending hashtags."

                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Chitra -->
                    <div class="col-lg-4 col-md-6">
                        <div class="bfc_about_team_card" data-aos="fade-up">
                            <div class="bfc_about_team_image">
                                <img src="{{ asset('assets/img_new/team/chitra.webp') }}" alt="Chitra Pal">
                            </div>
                            <div class="bfc_about_team_content">
                                <h3 class="bfc_about_team_name">
                                    Chitra Pal
                                </h3>
                                <div class="bfc_about_team_role">
                                    Quality Control & Customer Support
                                </div>
                                <p class="bfc_about_team_text">
                                    With more than 7 years of Quality Control and Customer Support experience under her
                                    belt, Chitra is a master in outlining publishing strategies.
                                    She understands the self-publishing space pretty well and makes sure the strategies she
                                    outlines are in line with Author inputs and priorities.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="bfc_about_team_card" data-aos="fade-up">
                            <div class="bfc_about_team_image">
                                <img src="{{ asset('assets/img_new/team/anamika.webp') }}" alt="Anamika Singh">
                            </div>
                            <div class="bfc_about_team_content">
                                <h3 class="bfc_about_team_name">
                                    Anamika Singh
                                </h3>
                                <div class="bfc_about_team_role">
                                    Sr. Publishing Consultant
                                </div>
                                <p class="bfc_about_team_text">
                                    Anamika works as a Publishing Consultant with Team BFC. She is required to handhold
                                    Authors looking to get published.
                                    “I usually approach the task by explaining in detail, the services Authors can avail and
                                    the marketing tools that can be deployed to advertise their beloved masterpieces,” she
                                    explains in her usual optimistic tone.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_about_section bfc_about_editorial py-5">
            <div class="container bfc_about_container">
                <div class="row align-items-end mb-5">
                    <div class="col-lg-12">
                        <div class="bfc_about_section_tag">
                            Editorial Team
                        </div>
                        <h2 class="bfc_about_heading">
                            People behind the
                            <span>publishing process.</span>
                        </h2>
                    </div>
                </div>
                <div class="row g-4">
                    <!-- Ashish -->
                    <div class="col-lg-6">
                        <div class="bfc_about_editorial_card" data-aos="fade-up">
                            <div class="bfc_about_editorial_top">
                                <div class="bfc_about_editorial_image">
                                    <img src="{{ asset('assets/img_new/team/ashish.webp') }}"
                                        alt="Ashish Verma">
                                </div>
                                <div>
                                    <h3 class="bfc_about_editorial_name">
                                        Ashish Verma
                                    </h3>
                                    <p class="bfc_about_editorial_role">
                                        Project Head
                                    </p>
                                </div>
                            </div>
                            <p class="bfc_about_editorial_text">
                                Ashish Verma emerges as a saviour in the publishing world, playing the essential role of
                                project head. With six years of dedicated experience, he brings not just expertise, but also
                                empathy — understanding that every book is a labour of love, patience, and passion.

                                Ashish believes that a publisher’s role goes beyond logistics. It's about truly
                                understanding the author’s vision and walking alongside them throughout the publishing
                                journey. From project management and editorial coordination to design supervision and
                                end-to-end publishing solutions, he offers an effortless experience that supports both debut
                                authors and seasoned writers alike.

                                Known for his hands-on approach, clear communication, and attention to detail, Ashish
                                ensures every step — from idea to final print — is handled with precision and
                                professionalism. His mission? To empower authors, streamline the publishing process, and
                                help turn stories into beautifully crafted books that leave a lasting impact.

                                Whether you are publishing your first manuscript or your fifteenth, Ashish Verma is your
                                go-to partner for a smooth, successful, and stress-free publishing experience.
                            </p>
                        </div>
                    </div>
                    <!-- Gaurav -->
                    <div class="col-lg-6">
                        <div class="bfc_about_editorial_card" data-aos="fade-up">
                            <div class="bfc_about_editorial_top">
                                <div class="bfc_about_editorial_image">
                                    <img src="{{ asset('assets/img_new/team/gaurav.webp') }}"
                                        alt="Gaurav Saxena">
                                </div>
                                <div>
                                    <h3 class="bfc_about_editorial_name">
                                        Gaurav Saxena
                                    </h3>
                                    <p class="bfc_about_editorial_role">
                                        Project Coordinator
                                    </p>
                                </div>
                            </div>
                            <p class="bfc_about_editorial_text">
                                Gaurav Saxena is a solution-driven project manager who thrives in the complex world of
                                publishing. His sharp eye for detail keeps projects on track and authors in the loop, making
                                every step seamless.

                                What truly sets him apart is his calm, collaborative style—turning high-pressure timelines
                                into smooth, stress-free teamwork. With Gaurav leading the way, the publishing process
                                becomes not just efficient but genuinely rewarding.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bfc_about_editorial_card" data-aos="fade-up">
                            <div class="bfc_about_editorial_top">
                                <div class="bfc_about_editorial_image">
                                    <img src="{{ asset('assets/img_new/team/vaishnavi.webp') }}"
                                        alt="Vaishnavi Vijay">
                                </div>
                                <div>
                                    <h3 class="bfc_about_editorial_name">
                                        Vaishnavi Vijay
                                    </h3>
                                    <p class="bfc_about_editorial_role">
                                        Project Manager
                                    </p>
                                </div>
                            </div>
                            <p class="bfc_about_editorial_text">
                                With over 2 years in the self-publishing industry, Vaishnavi has been the quiet powerhouse
                                behind some of our smoothest and most successful publishing journeys. Her keen eye for
                                detail, paired with a genuine love for storytelling, makes her an exceptional project
                                manager and a trusted partner to every author she works with. From first draft to final
                                print, she guides authors through the often-complex world of self-publishing with clarity
                                and care.

                                Known for her calm presence and thoughtful leadership, Vaishnavi ensures every project is
                                handled with precision, empathy, and unwavering commitment—bringing each book to life with
                                the quality and attention it deserves.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="bfc_about_editorial_card" data-aos="fade-up">
                            <div class="bfc_about_editorial_top">
                                <div class="bfc_about_editorial_image">
                                    <img src="{{ asset('assets/img_new/team/chitransh.webp') }}"
                                        alt="Chitransh Srivastava">
                                </div>
                                <div>
                                    <h3 class="bfc_about_editorial_name">
                                        Chitransh Srivastava
                                    </h3>
                                    <p class="bfc_about_editorial_role">
                                        Project Manager
                                    </p>
                                </div>
                            </div>
                            <p class="bfc_about_editorial_text">
                                No one can ever author a book alone. It demands clear communication, an organised publishing
                                process, and a project manager who’s always ready to assist authors with precision and care.
                                Well, Chitransh is the secret behind our authors’ energy. He ensures that every step—from
                                publishing to marketing a book—runs smoothly and seamlessly. His ability to bring stories to
                                life with structure and style makes him an exceptionally indispensable part of the BFC
                                Publications family.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_about_section bfc_about_philosophy py-5">
            <div class="container bfc_about_container">
                <div class="bfc_about_quote" data-aos="fade-up">
                    <div class="bfc_about_section_tag">
                        Let's Perfect Your Story
                    </div>
                    <div class="bfc_about_quote_text">
                        Ready to make your
                        <span>book stand out?</span>
                    </div>
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

@endsection