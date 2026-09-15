@extends('layout.template1')

@section('content')
    <style>
        :root {
            --klf-blue: #263192;
            --klf-deep: #182267;
            --klf-red: #cf464e;
            --klf-ink: #292d3d;
            --klf-muted: #687086;
            --klf-paper: #f7f8ff;
            --klf-line: #e4e7f1;
        }

        .klf-page {
            color: var(--klf-ink);
            background: #fff;
            overflow: hidden;
        }

        .klf-page *,
        .klf-page *::before,
        .klf-page *::after {
            box-sizing: border-box;
        }

        .klf-kicker {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--klf-red);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.35px;
            text-transform: uppercase;
        }

        .klf-kicker::before {
            width: 27px;
            height: 2px;
            content: '';
            background: currentColor;
        }

        .klf-hero {
            position: relative;
            isolation: isolate;
            background: var(--klf-blue);
        }

        .klf-hero::before {
            position: absolute;
            z-index: -1;
            top: -190px;
            right: -155px;
            width: 510px;
            height: 510px;
            border: 72px solid rgba(255, 255, 255, .05);
            border-radius: 50%;
            content: '';
        }

        .klf-hero .klf-kicker {
            color: #cf464e;
        }

        .klf-hero h1 {
            max-width: 590px;
            margin: 13px 0 19px;
            color: #fff;
            font-weight: 700;
            font-size: clamp(42px, 5.4vw, 65px);
            line-height: 1.05;
        }

        .klf-hero h1 span {
            color: #cf464e;
        }

        .klf-hero p {
            max-width: 570px;
            margin: 0;
            color: rgba(255, 255, 255, .77);
            font-size: 17px;
            line-height: 1.5;
        }

        .klf-date {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 27px;
            padding: 10px 15px;
            border: 1px solid rgba(255, 255, 255, .18);
            border-radius: 8px;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
        }

        .klf-date i {
            color: #cf464e;
            font-size: 17px;
        }

        .klf-collage {
            position: relative;
            min-height: 370px;
            max-width: 500px;
            margin: auto;
        }

        .klf-collage img {
            position: absolute;
            border: 5px solid rgba(255, 255, 255, .95);
            object-fit: cover;
            box-shadow: 0 18px 34px rgba(7, 12, 52, .34);
        }

        .klf-collage-main {
            top: 0;
            right: 0;
            width: 70%;
            height: 257px;
            border-radius: 16px;
        }

        .klf-collage-left {
            bottom: 0;
            left: 0;
            width: 47%;
            height: 190px;
            border-radius: 15px;
        }

        .klf-collage-right {
            right: 3%;
            bottom: 0;
            width: 34%;
            height: 140px;
            border-radius: 13px;
        }

        .klf-collage-badge {
            position: absolute;
            z-index: 1;
            top: 47%;
            left: 27%;
            display: grid;
            width: 74px;
            height: 74px;
            place-items: center;
            border: 3px solid #fff;
            border-radius: 50%;
            background: var(--klf-red);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            line-height: 1.15;
            text-align: center;
        }

        .klf-intro-copy {
            max-width: 745px;
            margin: auto;
            text-align: center;
        }

        .klf-intro {
            position: relative;
        }

        .klf-intro::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(150deg, #f9b5b5 55%, #b8c8fa 65%);
            opacity: 0.171;
            z-index: 0;
        }

        .klf-intro h2 {
            margin: 12px 0 14px;
            color: var(--klf-blue);

            font-size: clamp(31px, 4vw, 45px);
            line-height: 1.14;
        }

        .klf-intro p {
            margin: 0;
            color: var(--klf-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        p {
            margin: 0;
            color: var(--klf-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .klf-meta {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0;
            margin-top: 35px;
        }

        .klf-meta-item {
            min-width: 180px;
            padding: 13px 25px;
            border-right: 1px solid var(--klf-line);
            color: var(--klf-muted);
            font-size: 13px;
            text-align: center;
        }

        .klf-meta-item:last-child {
            border-right: 0;
        }

        .klf-meta-item strong {
            display: block;
            margin-bottom: 3px;
            color: var(--klf-blue);
            font-size: 19px;
        }

        .klf-experiences {
            padding: 80px 0;
            background: var(--klf-paper);
        }

        .klf-experience {
            height: 100%;
            padding: 29px 24px;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 9px 23px rgba(38, 49, 146, .06);
        }

        .klf-experience h3 {
            margin: 0 0 11px;
            color: var(--klf-blue);
            font-size: 20px;
            font-weight: 700;
        }

        .klf-experience p {
            margin: 0;
            color: var(--klf-muted);
            font-size: 14px;
            line-height: 1.8;
        }

        .klf-feature-dark {
            background: var(--klf-blue);
        }

        .klf-feature-head {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
        }

        .klf-feature-head h2 {
            margin: 10px 0 0;
            color: var(--klf-blue);

            font-size: clamp(30px, 4vw, 43px);
        }

        .klf-feature-dark .klf-kicker {
            color: #cf464e;
        }

        .klf-feature-dark .klf-feature-head h2 {
            color: #fff;
        }

        .klf-feature-link {
            color: var(--klf-red);
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
        }

        .klf-feature-dark .klf-feature-link {
            color: #cf464e;
        }

        .klf-feature-link:hover {
            color: var(--klf-red);
        }

        .klf-photo-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            grid-template-rows: repeat(2, 280px);
            gap: 14px;
        }

        .klf-media-button {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            border: 0;
            border-radius: 13px;
            background: #dfe3f2;
            overflow: hidden;
            cursor: pointer;
        }

        .klf-media-button img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .35s ease;
            object-position: top;
        }

        .klf-media-button:hover img {
            transform: scale(1.05);
        }

        .klf-photo-grid .klf-media-button:first-child {
            grid-row: span 2;
        }

        .klf-video-grid,
        .klf-session-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }

        .klf-session-grid {
            grid-template-columns: repeat(4, 1fr);
        }

        .klf-video-card {
            min-height: 200px;
        }

        .klf-session-card {
            min-height: 200px;
        }

        .klf-video-card::after,
        .klf-session-card::after {
            position: absolute;
            inset: auto 0 0;
            height: 58%;
            content: '';
            background: linear-gradient(transparent, rgba(8, 13, 55, .82));
            pointer-events: none;
        }

        .klf-play {
            position: absolute;
            z-index: 1;
            top: 17px;
            right: 17px;
            display: grid;
            width: 38px;
            height: 38px;
            place-items: center;
            border-radius: 50%;
            background: var(--klf-red);
            color: #fff;
            font-size: 18px;
        }

        .klf-media-label {
            position: absolute;
            z-index: 1;
            right: 16px;
            bottom: 13px;
            left: 16px;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.35;
            text-align: left;
        }

        .klf-gallery {
            padding: 80px 0;
            background: var(--klf-paper);
        }

        .klf-gallery-grid {
            display: grid;
            grid-template-columns: 1.35fr repeat(2, 1fr);
            grid-template-rows: repeat(2, 175px);
            gap: 14px;
        }

        .klf-gallery-grid .klf-media-button:first-child {
            grid-row: span 2;
        }

        .klf-modal {
            position: fixed;
            z-index: 1060;
            inset: 0;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(7, 10, 37, .82);
        }

        .klf-modal.is-open {
            display: flex;
        }

        .klf-modal-dialog {
            position: relative;
            width: min(900px, 50%);
            max-height: 90vh;
        }


        @media screen and (max-width:900px) {
            .klf-modal-dialog {
                position: relative;
                width: min(900px, 100%);
                max-height: 90vh;
            }
        }

        .klf-modal-dialog img,
        .klf-modal-dialog iframe {
            display: block;
            width: 100%;
            /* max-height: 85vh; */
            border: 0;
            border-radius: 12px;
            background: #111;
            object-fit: contain;
        }

        .klf-modal-dialog iframe {
            aspect-ratio: 16 / 9;
            max-height: none;
        }

        .klf-modal-close {
            position: absolute;
            z-index: 1;
            top: -13px;
            right: -13px;
            display: grid;
            width: 36px;
            height: 36px;
            place-items: center;
            border: 0;
            border-radius: 50%;
            background: #fff;
            color: var(--klf-blue);
            font-size: 22px;
            line-height: 1;
        }

        .klf-modal-close:hover {
            background: var(--klf-red);
            color: #fff;
        }

        @media (max-width: 991px) {

            .klf-collage {
                max-width: 480px;
                margin-top: 10px;
            }

            .klf-session-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .klf-video-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 767px) {

            .klf-hero h1 {
                font-size: 42px;
            }

            .klf-hero p,
            p,
            .klf-intro p {
                font-size: 15px;
            }

            .klf-collage {
                min-height: 290px;
                max-width: 360px;
                margin-top: 35px;
            }

            .klf-collage-main {
                height: 200px;
            }

            .klf-collage-left {
                height: 145px;
            }

            .klf-collage-right {
                height: 110px;
            }

            .klf-collage-badge {
                width: 58px;
                height: 58px;
                font-size: 13px;
            }

            .klf-meta {
                margin-top: 26px;
            }

            .klf-meta-item {
                width: 50%;
                min-width: 0;
                padding: 12px 8px;
            }

            .klf-meta-item:nth-child(2) {
                border-right: 0;
            }

            .klf-meta-item:last-child {
                width: 100%;
                border-top: 1px solid var(--klf-line);
            }

            .klf-feature-head {
                align-items: start;
                flex-direction: column;
                gap: 9px;
            }

            .klf-photo-grid {
                grid-template-rows: repeat(2, 135px);
            }

            .klf-video-grid,
            .klf-session-grid {
                grid-template-columns: 1fr;
            }

            .klf-gallery-grid {
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 180px 130px 130px;
            }

            .klf-gallery-grid .klf-media-button:first-child {
                grid-column: span 2;
                grid-row: auto;
            }
        }
    </style>

    <div class="klf-page">
        <section class="klf-hero py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 klf-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="klf-kicker">BFC Publications presents</div>
                        <h1>The Koshala <span>Literature Festival</span></h1>
                        <p>Rediscovering humanity through the rich heritage of Awadh.</p>
                        <div class="klf-date"><i class="bi bi-calendar-event"></i>04–06 November 2022</div>
                    </div>
                    <div class="col-lg-6">
                        <div class="klf-collage"><img class="klf-collage-main"
                                src="{{ asset('assets/img_new/home/klf1.webp') }}" alt="Koshala Literature Festival"><img
                                class="klf-collage-left" src="{{ asset('assets/img_new/home/klf2.webp') }}"
                                alt="KLF-Awadh audience"><img class="klf-collage-right"
                                src="{{ asset('assets/img_new/home/klf3.webp') }}" alt="KLF-Awadh event">
                            <div class="klf-collage-badge">KLF<br>Awadh</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="klf-intro py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 klf-shell">
                <div class="klf-intro-copy">
                    <div class="klf-kicker">KLF-Awadh 2022</div>
                    <h2>A three-day Celebration of Awadh</h2>
                    <p>
                        Held between 4-6 November 2022, KLF-Awadh was a three-day long celebration revolving around the rich
                        heritage of Awadh, featuring the biggest names in the fields of Arts, Literature, Music, Filmmaking,
                        and much more.
                    </p>
                </div>
                <div class="klf-meta">
                    <div class="klf-meta-item"><strong>04–06</strong>November 2022</div>
                    <div class="klf-meta-item"><strong>3 Days</strong>of Conversations</div>
                    <div class="klf-meta-item"><strong>Awadh</strong>Arts and Culture</div>
                </div>
            </div>
        </section>

        <section class="klf-feature py-5" id="bookStall">
            <div class="container-xxl px-lg-5 px-md-3 px-2 klf-shell">
                <div class="klf-feature-head mb-2">
                    <div>
                        <div class="klf-kicker">BFC Book Stall</div>
                        <h2>Books Met Their Readers.</h2>
                    </div><a class="klf-feature-link" href="{{ url('/book-stall') }}" target="_blank">See more
                        <i class="bi bi-arrow-up-right"></i></a>
                </div>
                <div class="row align-items-center g-4">
                    <div class="col-lg-10">
                        <p class="mb-0">
                            The inaugural edition of KLF-Awadh was a rare opportunity for BFC Publications to showcase its
                            books, get face-to-face with the people it creates for i.e. the readers, and collect some
                            valuable first-hand feedback.
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <div class="klf-photo-grid">
                            <button class="klf-media-button" type="button"
                                data-klf-image="{{ asset('assets/img_new/book-stall/1.webp') }}"
                                aria-label="View BFC book stall image">
                                <img src="{{ asset('assets/img_new/book-stall/1.webp') }}"
                                    alt="BFC Publications book stall at KLF-Awadh" loading="lazy">
                            </button>
                            <button class="klf-media-button" type="button"
                                data-klf-image="{{ asset('assets/img_new/book-stall/2.webp') }}"
                                aria-label="View book stall image">
                                <img src="{{ asset('assets/img_new/book-stall/2.webp') }}"
                                    alt="Books at the KLF-Awadh stall" loading="lazy">
                            </button>
                            <button class="klf-media-button" type="button"
                                data-klf-image="{{ asset('assets/img_new/book-stall/3.webp') }}"
                                aria-label="View reader image">
                                <img src="{{ asset('assets/img_new/book-stall/3.webp') }}"
                                    alt="Readers at the BFC book stall" loading="lazy">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="klf-feature py-5 klf-feature-dark" id="bfcLounge">
            <div class="container-xxl px-lg-5 px-md-3 px-2 klf-shell">
                <div class="klf-feature-head mb-3">
                    <div>
                        <div class="klf-kicker">BFC Lounge</div>
                        <h2>Authors Took the Stage.</h2>
                    </div><a class="klf-feature-link" href="{{ url('/bfc-lounge') }}" target="_blank">See more
                        <i class="bi bi-arrow-up-right"></i></a>
                </div>
                <div class="row align-items-center g-4">
                    <div class="col-lg-10">
                        <p class="mb-0" style="color:rgba(255,255,255,.76);line-height:1.8">BFC Lounge was an effort by Team
                            BFC Publications to connect with its authors, hear their writing experiences, and offer them a
                            showcase worthy of their books.</p>
                    </div>
                    <div class="col-12">
                        <div class="klf-video-grid">
                            <button class="klf-media-button klf-video-card" type="button" data-klf-video="Fnzs2Wfl068"
                                data-klf-title="KB Rao at BFC Lounge">
                                <img src="{{ asset('assets/img_new/bfc-lounge/dr-arun.webp') }}" alt="KB Rao at BFC Lounge"
                                    loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                                    class="klf-media-label">Dr Arun Chandra Dwivedi</span>
                            </button>
                            <button class="klf-media-button klf-video-card" type="button" data-klf-video="klQHW7-8APQ"
                                data-klf-title="Pratibha Paul at BFC Lounge">
                                <img src="{{ asset('assets/img_new/bfc-lounge/pratibha.webp') }}"
                                    alt="Pratibha Paul at BFC Lounge" loading="lazy"><span class="klf-play"><i
                                        class="bi bi-play-fill"></i></span><span class="klf-media-label">Pratibha
                                    Paul</span>
                            </button>
                            <button class="klf-media-button klf-video-card" type="button" data-klf-video="pf4or5e6jgg"
                                data-klf-title="Pratibha Paul at BFC Lounge">
                                <img src="{{ asset('assets/img_new/bfc-lounge/trivendra.webp') }}"
                                    alt="Pratibha Paul at BFC Lounge" loading="lazy"><span class="klf-play"><i
                                        class="bi bi-play-fill"></i></span><span class="klf-media-label">Author
                                    Trivendra</span>
                            </button>
                            <button class="klf-media-button klf-video-card" type="button" data-klf-video="VuCKk40LHOE"
                                data-klf-title="Pratibha Paul at BFC Lounge">
                                <img src="{{ asset('assets/img_new/bfc-lounge/kb-rao.webp') }}"
                                    alt="Pratibha Paul at BFC Lounge" loading="lazy"><span class="klf-play"><i
                                        class="bi bi-play-fill"></i></span><span class="klf-media-label">
                                    Author KB Rao</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="klf-feature py-5" id="klfSessions">
            <div class="container-xxl px-lg-5 px-md-3 px-2 klf-shell">
                <div class="klf-feature-head">
                    <div>
                        <div class="klf-kicker">KLF Sessions</div>
                        <h2>Ideas in The Open.</h2>
                    </div><a class="klf-feature-link" href="{{ url('/sessions-klf') }}" target="_blank">See
                        more <i class="bi bi-arrow-up-right"></i></a>
                </div>
                <p style="max-width:690px;color:var(--klf-muted);line-height:1.8;margin:0 0 26px">Watch Authors, Historians,
                    Mythologists, Scribes and Politicos grace the stage at KLF-Awadh and discuss their books and works out
                    in the open.</p>
                <div class="klf-session-grid">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="oN-S65BVaUs"
                        data-klf-title="The Story of Storytellers of Naimisaranya">
                        <img src="{{ asset('assets/img_new/klf-sessions/devduitt.webp') }}"
                            alt="The Story of Storytellers of Naimisaranya" loading="lazy"><span class="klf-play"><i
                                class="bi bi-play-fill"></i></span><span class="klf-media-label">The Story of
                            Storytellers</span>
                    </button>
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="-NkVySUp1hs"
                        data-klf-title="Garuda Purana">
                        <img src="{{ asset('assets/img_new/klf-sessions/sd.webp') }}" alt="Garuda Purana session"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">Garuda Purana</span>
                    </button>
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="ZcpRnrAzcH8"
                        data-klf-title="Jashn-e-Awadh">
                        <img src="{{ asset('assets/img_new/klf-sessions/mmh.webp') }}" alt="Jashn-e-Awadh session"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">Jashn-e-Awadh</span>
                    </button>
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="MtN9QAZUZrs"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/tp.webp') }}" alt="Bravehearts of Bharat session"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">
                            Filmmaker & Actor Tigmanshu Dhulia with KLF-Awadh Founder</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="klf-gallery py-5" id="klfGallery">
            <div class="container-xxl px-lg-5 px-md-3 px-2 klf-shell">
                <div class="klf-feature-head">
                    <div>
                        <div class="klf-kicker">KLF Gallery</div>
                        <h2>Festival Moments</h2>
                    </div><a class="klf-feature-link" href="{{ url('/gallery') }}" target="_blank">See all <i
                            class="bi bi-arrow-up-right"></i></a>
                </div>
                <div class="klf-gallery-grid">
                    <button class="klf-media-button" type="button"
                        data-klf-image="{{ asset('assets/img_new/gallery/58.webp') }}" aria-label="View KLF gallery image">
                        <img src="{{ asset('assets/img_new/gallery/58.webp') }}" alt="KLF-Awadh festival moment"
                            loading="lazy">
                    </button>
                    <button class="klf-media-button" type="button"
                        data-klf-image="{{ asset('assets/img_new/gallery/27.webp') }}" aria-label="View KLF gallery image">
                        <img src="{{ asset('assets/img_new/gallery/27.webp') }}" alt="Readers at KLF-Awadh" loading="lazy">
                    </button>
                    <button class="klf-media-button" type="button"
                        data-klf-image="{{ asset('assets/img_new/gallery/85.webp') }}" aria-label="View KLF gallery image">
                        <img src="{{ asset('assets/img_new/gallery/85.webp') }}" alt="KLF-Awadh literary festival"
                            loading="lazy">
                    </button>
                    <button class="klf-media-button" type="button"
                        data-klf-image="{{ asset('assets/img_new/gallery/4.webp') }}" aria-label="View KLF gallery image">
                        <img src="{{ asset('assets/img_new/gallery/4.webp') }}" alt="BFC Publications at KLF-Awadh"
                            loading="lazy">
                    </button>
                    <button class="klf-media-button" type="button"
                        data-klf-image="{{ asset('assets/img_new/gallery/20.webp') }}" aria-label="View KLF gallery image">
                        <img src="{{ asset('assets/img_new/gallery/20.webp') }}" alt="Books and visitors at KLF-Awadh"
                            loading="lazy">
                    </button>
                </div>
            </div>
        </section>

    </div>

    <div class="klf-modal" id="klfModal" aria-hidden="true" role="dialog" aria-modal="true" aria-label="KLF media viewer">
        <div class="klf-modal-dialog">
            <button class="klf-modal-close" type="button" aria-label="Close media viewer">×</button>
            <img id="klfModalImage" alt="">
            <iframe id="klfModalVideo" title="KLF video" allow="autoplay; encrypted-media" allowfullscreen hidden>
            </iframe>
        </div>
    </div>
    <script>
        (() => {
            const modal = document.getElementById('klfModal');
            const image = document.getElementById('klfModalImage');
            const video = document.getElementById('klfModalVideo');
            const close = () => { modal.classList.remove('is-open'); modal.setAttribute('aria-hidden', 'true'); video.src = ''; image.removeAttribute('src'); };
            document.querySelectorAll('[data-klf-image]').forEach((button) => button.addEventListener('click', () => { image.src = button.dataset.klfImage; image.alt = button.querySelector('img').alt; image.hidden = false; video.hidden = true; modal.classList.add('is-open'); modal.setAttribute('aria-hidden', 'false'); }));
            document.querySelectorAll('[data-klf-video]').forEach((button) => button.addEventListener('click', () => { video.src = `https://www.youtube.com/embed/${button.dataset.klfVideo}?autoplay=1&rel=0`; video.title = button.dataset.klfTitle; video.hidden = false; image.hidden = true; modal.classList.add('is-open'); modal.setAttribute('aria-hidden', 'false'); }));
            modal.querySelector('.klf-modal-close').addEventListener('click', close);
            modal.addEventListener('click', (event) => { if (event.target === modal) close(); });
            document.addEventListener('keydown', (event) => { if (event.key === 'Escape' && modal.classList.contains('is-open')) close(); });
        })();
    </script>
@endsection