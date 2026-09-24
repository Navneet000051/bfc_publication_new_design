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
            --bfc-text: #555d73;
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

        /* .bfc_section_label::before {
            content: "";
            width: 30px;
            height: 2px;
            background: var(--bfc-accent);
        } */


        .bfc_section_title {
            color: var(--bfc-primary);
            font-size: clamp(34px, 4vw, 40px);
            font-weight: 600;
            line-height: 1.15;
            /* margin-bottom: 18px; */
        }


        .bfc_section_description {
            max-width: 750px;
            margin-left: auto;
            margin-right: auto;
            color: var(--bfc-text);
            font-size: 16px;
            line-height: 1.6;
        }

        .bfc_highlight {
            color: var(--bfc-accent);
        }

        .bfc_editing_hero {
            position: relative;
            min-height: 550px;
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


        /* .bfc_pencil {

                            position: absolute;

                            width: 280px;
                            height: 8px;

                            right: 5px;
                            bottom: 90px;

                            background: var(--bfc-accent);

                            border-radius: 10px;

                            transform: rotate(-32deg);

                            box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
                        } */


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
            font-size: 15px;
            line-height: 1.4;
            margin: 0;
        }

        .bfc_process_section {
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
            font-size: 20px;
            margin-bottom: 11px;
        }


        .bfc_process_item p {
            color: var(--bfc-text);
            font-size: 15px;
            line-height: 1.7;
            margin: 0;
        }


        .bfc_cta_box {
            position: relative;
            overflow: hidden;
            border-radius: 22px;
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

        /* .bfc_cta_box::after {
            content: "BOOK";
            position: absolute;
            right: 45px;
            bottom: -65px;
            font-size: 180px;
            color: rgba(255, 255, 255, .025);
        } */

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
            margin-bottom: 30px;
        }

        .bfc_faq_section {
            background: #fff;
        }

        /* .bfc_faq {
                                max-width: 950px;
                                margin: 50px auto 0;
                            } */


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
            line-height: 1.6;
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

        @media (max-width: 1199px) {

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

        @media (max-width: 991px) {

            .bfc_editing_hero {
                min-height: auto;
                padding: 85px 0 60px;
            }

            .bfc_hero_visual {
                height: 430px;
                margin-top: 25px;
            }

            .bfc_process_line {
                display: none;
            }

            .bfc_process_item {
                margin-bottom: 45px;
            }

        }

        @media (max-width: 767px) {
            .bfc_editing_hero {
                padding: 60px 0 45px;
            }

            .bfc_editing_hero h1 {
                font-size: 45px;
                line-height: 1.05;
            }

            .bfc_hero_text {
                font-size: 15px;
                line-height: 1.6;
            }

            .bfc_hero_visual {
                height: 380px;
                transform: scale(.8);
                margin-top: 0;
                margin-left: -35px;
                margin-right: -35px;
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
                line-height: 1.6;
            }

            .bfc_service_card {
                padding: 30px 25px;
            }

            .bfc_process_wrap {
                margin-top: 40px;
            }


            /* .bfc_cta_box {
                        padding: 45px 25px;
                        border-radius: 16px;
                    } */

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

        @media (max-width: 480px) {
            .bfc_editing_hero h1 {
                font-size: 39px;
            }


            .bfc_hero_visual {
                height: 340px;
                transform: scale(.7);
                margin-left: -55px;
                margin-right: -55px;
            }

          .bfc_floating_card.one {
                right: 20px;
            }

            .bfc_floating_card.two {
                left: 20px;
                bottom: 11px;
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
                                Your Book is Published. Now Let’s Get It Seen!
                            </div>
                            <h1>
                                Book Marketing

                                <span class="bfc_hero_highlight">
                                    Services
                                </span>
                            </h1>
                            <p class="bfc_hero_text">
                                A well-written book can still get lost in a crowded marketplace if readers don’t know it
                                exists. That’s where the right visibility strategy makes a difference. At BFC Publications,
                                we help your book get noticed across social media, online marketplaces, and other digital
                                platforms through targeted campaigns, platform-specific promotion, and reader-focused
                                outreach. From building your book’s digital presence to helping it reach the audiences most
                                likely to connect with it, we work to make sure your story doesn’t just get published—it
                                gets discovered.

                            </p>

                            <button type="button" class="px-4 rounded-pill hero-red-btn" data-bs-toggle="modal"
                                data-bs-target="#start_bfcpublishing_modal">
                                Get Your Book Discovered</button>
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
                                        To Be Seen
                                    </div>
                                    <div class="bfc_book_author">
                                        BFC Publications
                                    </div>
                                </div>
                                <!-- <div class="bfc_pencil"></div> -->
                                <div class="bfc_floating_card one">
                                    <i class="bi bi-check2-circle"></i>
                                    <span>
                                        Wider Reach
                                    </span>
                                </div>
                                <div class="bfc_floating_card two">
                                    <i class="fa-solid fa-palette"></i>
                                    <span>
                                        Expert Marketing
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
                    <!-- <div class="bfc_section_label">
                        Our Expertise
                    </div> -->
                    <h2 class="bfc_section_title">
                        Marketing Services We Offer
                    </h2>
                    <p class="bfc_section_description">
                        From building your digital presence to reaching the right audience, we help your book get noticed
                        where it matters.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                01
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <h3>
                                Instagram Ad Campaign
                            </h3>
                            <p>
                                Get your book in front of the right audience on Instagram. We create engaging ad creatives
                                and run targeted campaigns across formats like sponsored posts and stories, helping your
                                book reach readers who are likely to connect with its genre and story.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                02
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-brands fa-facebook"></i>
                            </div>
                            <h3>
                                Facebook Ad Campaign
                            </h3>
                            <p>
                                Facebook gives your book access to a wide and diverse audience. We create and manage
                                targeted ad campaigns in multiple formats, putting your book in front of readers who are
                                most likely to be interested in what you have written.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                03
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-solid fa-video"></i>
                            </div>
                            <h3>
                                Video Trailer Launch
                            </h3>
                            <p>
                                Sometimes, a story needs to be seen before it is read. We create short, engaging video
                                trailers that capture the essence of your book and give potential readers a reason to stop,
                                watch, and find out more about your story.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                04
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <h3>
                                Author Website
                            </h3>
                            <p>
                                Give your writing a home beyond the pages of your book. We help you create a dedicated
                                author website where readers can discover your books, learn more about you, and stay
                                connected with your work—all in one place.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                05
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-brands fa-amazon"></i>
                            </div>
                            <h3>
                                Amazon Sponsored Ads
                            </h3>
                            <p>
                                Help your book show up when readers are already looking for something to read. We use
                                Amazon’s sponsored advertising tools to target relevant keywords and audiences, making your
                                book more discoverable in searches and alongside related titles.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                06
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-brands fa-google-plus-g"></i>
                            </div>
                            <h3>
                                Google Ad Campaign
                            </h3>
                            <p>
                                Take your book beyond social media and reach readers across Google. Our team creates
                                targeted search and display campaigns based on your book, audience, and marketing goals,
                                with the ad budget planned in consultation with you.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                07
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <h3>
                                WhatsApp Marketing
                            </h3>
                            <p>
                                Turn conversations into book discovery. We create engaging WhatsApp campaigns with
                                attention-grabbing content and share them with relevant audiences to build awareness around
                                your book and your journey as an author.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                08
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-solid fa-tachograph-digital"></i>
                            </div>
                            <h3>
                                Digital Release

                            </h3>
                            <p>
                                Give your book its moment in the digital spotlight. We create and distribute a dedicated
                                digital press release highlighting your book and its story, helping introduce your work to
                                media platforms and potential readers.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                09
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                            <h3>
                                Amazon Author Page Setup

                            </h3>
                            <p>
                                Make it easier for readers to discover more of you. We set up your dedicated Amazon Author
                                Page, bringing your books, author profile, and other work together in one place where
                                readers can explore your work.


                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                10
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-brands fa-youtube"></i>
                            </div>
                            <h3>
                                YouTube Marketing

                            </h3>
                            <p>
                                Give your book a longer life through video. We create and promote engaging YouTube content
                                around your book, helping introduce your story to new audiences and build awareness around
                                you as an author.


                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="bfc_service_card bfc_reveal">
                            <span class="bfc_service_number">
                                11
                            </span>
                            <div class="bfc_service_icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <h3>
                                Email Marketing

                            </h3>
                            <p>
                                Reach readers directly, right in their inbox. We create engaging email campaigns that
                                introduce your book, highlight what makes it worth reading, and keep your work on the radar
                                of potential readers.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bfc_process_section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="text-center bfc_reveal">
                    <!-- <div class="bfc_section_label">
                        The Process
                    </div> -->
                    <h2 class="bfc_section_title">
                        How It Works
                    </h2>
                    <p class="bfc_section_description">
                        From understanding your book to putting your marketing plan into action, here’s how the process
                        works.
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
                                    Marketing Consultation
                                </h3>
                                <p>
                                    We start by understanding your book, genre, target readers, goals, and what you want
                                    your marketing to achieve.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="bfc_process_item bfc_reveal">
                                <div class="bfc_process_icon">
                                    02
                                </div>
                                <h3>
                                    Strategy & Channel Selection
                                </h3>
                                <p>
                                    Based on your goals and budget, we suggest the channels and marketing activities that
                                    make the most sense for your book.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="bfc_process_item bfc_reveal">
                                <div class="bfc_process_icon">
                                    03
                                </div>
                                <h3>
                                    Campaign Execution
                                </h3>
                                <p>
                                    Our team takes care of the execution, from creating ad creatives and promotional content
                                    to setting up targeting and running campaigns.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="bfc_process_item bfc_reveal">
                                <div class="bfc_process_icon">
                                    04
                                </div>
                                <h3>
                                    Performance & Updates
                                </h3>
                                <p>
                                    We track how your campaigns are performing and keep you updated on their progress and
                                    key results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bfc_cta_section" id="bfc-editing-cta">
            <div class="bfc_cta_box bfc_reveal py-md-5 py-4 rounded-0">
                <div class="container-xxl px-lg-5 px-md-3 px-2">
                    <div class="bfc_cta_content row justify-content-between align-items-center g-4">
                        <div class="col-lg-8">
                            <h2 class="bfc_cta_title">
                                Ready to Help Your Book
                                <span class="bfc_highlight">
                                    Find Its Readers?
                                </span>
                            </h2>
                            <p class="bfc_cta_text">
                                Tell us about your book and your goals, and let’s build a marketing strategy and get your
                                story in front of the right readers.
                            </p>
                        </div>
                        <div class="col-lg-4 text-lg-end">

                            <a href="{{ url('/contact') }}" class="px-4 rounded-pill hero-red-btn">Connect With Us</a>
                        </div>
                    </div>
                </div>
        </section>
        <section class="bfc_faq_section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="text-center bfc_reveal">
                    <!-- <div class="bfc_section_label">
                        Need To Know
                    </div> -->
                    <h2 class="bfc_section_title">
                        Frequently Asked Questions
                    </h2>
                </div>
                <div class="accordion bfc_faq mt-5" id="bfcEditingFaq">
                    <!-- FAQ 1 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqOne">
                                Which marketing services are included in my publishing package, and which are add-ons?
                            </button>
                        </h3>
                        <div id="bfcFaqOne" class="accordion-collapse collapse show" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                The marketing services included depend on the publishing package you choose. Some services
                                are part of specific packages, while others can be added separately based on your marketing
                                needs. Our team can help you understand exactly what’s included in your package.

                            </div>
                        </div>
                    </div>
                    <!-- FAQ 2 -->

                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqTwo">
                                Can I choose specific services instead of a full marketing package?

                            </button>
                        </h3>
                        <div id="bfcFaqTwo" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">

                            <div class="accordion-body">
                                Yes, depending on your publishing package and requirements, you can choose specific
                                marketing services that best suit your book and goals. Our team can help you put together
                                the right mix of services.

                            </div>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqThree">
                                Who sets the ad budget for Facebook, Google, and Instagram campaigns?


                            </button>
                        </h3>
                        <div id="bfcFaqThree" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                Ad budgets are flexible and decided by you in consultation with our marketing specialists,
                                based on your target audience, campaign goals, and the reach you want to achieve.

                            </div>
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqFour">
                                How soon after publishing should marketing begin?

                            </button>
                        </h3>
                        <div id="bfcFaqFour" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                Marketing can begin before or after your book is published, depending on your goals and the
                                type of campaign. Ideally, planning starts early so that promotional activities can build
                                momentum around your book’s launch and continue after publication.


                            </div>
                        </div>
                    </div>
                    <!-- FAQ 5 -->
                    <div class="accordion-item bfc_reveal">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#bfcFaqFive">
                                Do you provide marketing performance reports?


                            </button>
                        </h3>
                        <div id="bfcFaqFive" class="accordion-collapse collapse" data-bs-parent="#bfcEditingFaq">
                            <div class="accordion-body">
                                Yes, we track campaign performance and keep you updated on key results. The reporting format
                                and frequency may vary depending on the marketing services and campaigns you choose.

                            </div>
                        </div>
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