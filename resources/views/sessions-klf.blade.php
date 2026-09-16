@extends ('layout.template1')
@section('content')
    <style>
        .pricing-section2::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(150deg,
                    #FFC9C9 55%,
                    #d4ddf7 65%);
            opacity: 0.171;
            z-index: 0;
        }

        .bfc_publishing_packages {
            width: 100%;
            padding: 80px 0 70px;
        }

        .bfc_publishing_packages_content {
            /* max-width: 900px; */
            margin: 0 auto;
        }

        .bfc_publishing_packages_content h1 {
            font-weight: 700;
            font-size: 3rem;
            line-height: 1.4;
        }

        .bfc_publishing_packages_content h1 span {
            color: #cf464e;
        }

        .bfc_publishing_packages_content p {
            max-width: 1000px;
            margin: 0 auto;
            color: #526467;
            font-size: 17px;
            font-weight: 400;
            line-height: 1.5;
        }

        @media screen and (max-width: 1199.98px) {

            .bfc_publishing_packages {
                padding: 70px 0 60px;
            }

            .bfc_publishing_packages_content h1 {
                font-size: 46px;
            }

        }

        @media screen and (max-width: 991.98px) {

            .bfc_publishing_packages {
                padding: 60px 0 50px;
            }

            /*{
                                                                        max-width: 760px;
                                                                    }*/

            .bfc_publishing_packages_content h1 {
                font-size: 40px;
            }

            .bfc_publishing_packages_content p {
                font-size: 17px;
                line-height: 1.65;
            }

        }

        @media screen and (max-width: 767.98px) {

            .bfc_publishing_packages {
                padding: 50px 0 40px;
            }

            .bfc_publishing_packages_content h1 {
                font-size: 34px;
                line-height: 1.2;
                margin-bottom: 18px;
            }

            .bfc_publishing_packages_content p {
                font-size: 16px;
                line-height: 1.6;
            }

        }

        @media screen and (max-width: 575.98px) {

            .bfc_publishing_packages_content h1 {
                font-size: 30px;
            }

            .bfc_publishing_packages_content h1 span {
                font-size: 35px;
            }

            .bfc_publishing_packages_content p {
                font-size: 14px;
            }
        }

        .package_shadow img {
            position: absolute;
            top: -200px;
            right: 0;
            opacity: 0.2;
            width: 35rem;
        }
    </style>

    <section class="pricing-section2 py-md-5 py-5 pb-3 position-relative">
        <div class="package_shadow">
            <img src="{{ asset('assets/img_new/home/package_shadow.svg') }}" alt="package_shadow">
        </div>
        <div class="container-xxl px-lg-5 px-md-3 px-2 position-relative pt-2">
            <div class="bfc_publishing_packages_content text-center">
                <h1>
                    <span>KLF </span> Sessions
                </h1>
                <p>
                    Watch Authors, Historians, Mythologists, Scribes and Politicos grace the stage at KLF-Awadh and discuss
                    their books and works out in the open.
                </p>
            </div>
        </div>
    </section>

    <style>
        .klf-media-button {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            border: 0;
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
            background: #cf464e;
            color: #fff;
            font-size: 18px;
        }

        .klf-media-button:hover img {
            transform: scale(1.05);
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

        /* .klf-gallery {
                        background: #f7f8ff;
                    } */

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
            color: #263192;
            font-size: 22px;
            line-height: 1;
        }

        .klf-modal-close:hover {
            background: #cf464e;
            color: #fff;
        }
    </style>

    <section class="klf-feature py-5" id="klfSessions">
        <div class="container-xxl px-lg-5 px-md-3 px-2 klf-shell">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="oN-S65BVaUs"
                        data-klf-title="The Story of Storytellers of Naimisaranya">
                        <img src="{{ asset('assets/img_new/klf-sessions/devduitt.webp') }}"
                            alt="The Story of Storytellers of Naimisaranya" loading="lazy">
                        <span class="klf-play">
                            <i class="bi bi-play-fill"></i>
                        </span>
                        <span class="klf-media-label">The Story of Storytellers of Naimisaranya</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="-NkVySUp1hs"
                        data-klf-title="Garuda Purana">
                        <img src="{{ asset('assets/img_new/klf-sessions/sd.webp') }}" alt="Garuda Purana"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">Garuda Purana</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="8tDXxR__AUk"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/sharad_chayn.webp') }}" alt="Clash of Singularity"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label"> Clash of Singularity
                        </span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="ZcpRnrAzcH8"
                        data-klf-title="Jashn-e-Awadh">
                        <img src="{{ asset('assets/img_new/klf-sessions/mmh.webp') }}" alt="Jashn-e-Awadh"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">Jashn-e-Awadh</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="MtN9QAZUZrs"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/tp.webp') }}"
                            alt="Filmmaker & Actor Tigmanshu Dhulia with KLF-Awadh Founder" loading="lazy"><span
                            class="klf-play"><i class="bi bi-play-fill"></i></span><span class="klf-media-label">
                            Filmmaker & Actor Tigmanshu Dhulia with KLF-Awadh Founder</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="kPb2RCon8P8"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/a_a_m.webp') }}" alt="Myth of Mythology"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">
                            Myth of Mythology</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="D0Bwf9Cadgs"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/akhilesh_himanshu_priti.webp') }}" alt="अवधी अक़्स"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">
                            अवधी अक़्स</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="0YHF-0AUCRQ"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/anku_mani.webp') }}"
                            alt="सेन्सेक्स क्षेत्रीय दलों का" loading="lazy"><span class="klf-play"><i
                                class="bi bi-play-fill"></i></span><span class="klf-media-label">
                            सेन्सेक्स क्षेत्रीय दलों का</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="QMq-4XWnpVA"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/ap.webp') }}" alt="The Era of Visual Storytelling"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">
                            The Era of Visual Storytelling</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="8bMXh-nDkb4"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/as.webp') }}"
                            alt="Saga of Bharat: The Magicians of Mazda" loading="lazy"><span class="klf-play"><i
                                class="bi bi-play-fill"></i></span><span class="klf-media-label">
                            Saga of Bharat: The Magicians of Mazda</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="DSJAwFR5nu8"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/chandra_ajay.webp') }}" alt="14 Left 14 Right"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">
                            14 Left 14 Right</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="Udul_Ci4BkA"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/cmjj.webp') }}" alt="The Romance of Lucknow"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">
                            The Romance of Lucknow</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="2M-VwL7Lx48"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/deepa_priyanka_ishita.webp') }}"
                            alt="Coming of Age: Wind Beneath My Wings" loading="lazy"><span class="klf-play"><i
                                class="bi bi-play-fill"></i></span><span class="klf-media-label">
                            Coming of Age: Wind Beneath My Wings</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="aemCHFAxbiU"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/mr.webp') }}" alt="India in the Changing World"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">
                            India in the Changing World</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="itAM1yrs88M"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/farhat_abhishek_manish.webp') }}"
                            alt="बहुत ज़मीन थोड़ा आसमाँ" loading="lazy"><span class="klf-play"><i
                                class="bi bi-play-fill"></i></span><span class="klf-media-label">
                            बहुत ज़मीन थोड़ा आसमाँ</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="ollZ2YTE5V0"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/hindol_pushpesh.webp') }}" alt="Sing, Dance & Pray"
                            loading="lazy"><span class="klf-play"><i class="bi bi-play-fill"></i></span><span
                            class="klf-media-label">
                            Sing, Dance & Pray</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="mluzU1Cm69A"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/mu.webp') }}"
                            alt="Zikr: In the Light and Shade of Time" loading="lazy"><span class="klf-play"><i
                                class="bi bi-play-fill"></i></span><span class="klf-media-label">
                            Zikr: In the Light and Shade of Time</span>
                    </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <button class="klf-media-button klf-session-card" type="button" data-klf-video="YFx6CcVafIM"
                        data-klf-title="Bravehearts of Bharat">
                        <img src="{{ asset('assets/img_new/klf-sessions/pushpesh_u_n.webp') }}"
                            alt="Bisra Chulha Bisre Swad" loading="lazy"><span class="klf-play"><i
                                class="bi bi-play-fill"></i></span><span class="klf-media-label"> Bisra Chulha Bisre Swad
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

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
            document.querySelectorAll('[data-klf-video]').forEach((button) => button.addEventListener('click', () => { video.src = `https://www.youtube.com/embed/${button.dataset.klfVideo}?rel=0`; video.title = button.dataset.klfTitle; video.hidden = false; image.hidden = true; modal.classList.add('is-open'); modal.setAttribute('aria-hidden', 'false'); }));
            modal.querySelector('.klf-modal-close').addEventListener('click', close);
            modal.addEventListener('click', (event) => { if (event.target === modal) close(); });
            document.addEventListener('keydown', (event) => { if (event.key === 'Escape' && modal.classList.contains('is-open')) close(); });
        })();
    </script>
@endsection