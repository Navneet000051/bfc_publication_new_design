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
                    <span>Book </span> Stall
                </h1>
                <p>
                    The inaugural edition of KLF-Awadh was a rare opportunity for BFC Publications to showcase its books,
                    get face-to-face with the people it creates for i.e. the readers, and collect some valuable first-hand
                    feedback.
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

        .klf-media-button:hover .fa-plus {
            opacity: 1;
            transition: .5s ease-in-out;
        }

        .klf-media-button .fa-plus {
            position: absolute;
            z-index: 1;
            top: 40%;
            right: 40%;
            display: grid;
            width: 35px;
            height: 35px;
            place-items: center;
            border-radius: 50%;
            background: #cf464e;
            color: #fff;
            font-size: 18px;
            opacity: 0;
        }

        .klf-media-button:hover img {
            transform: scale(1.05);
        }

        .klf-video-card {
            min-height: 200px;
        }

        .klf-session-card {
            min-height: 200px;
            max-height: 200px;
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

        .klf-gallery {
            background: var(--klf-paper);
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
            color: #263192;
            font-size: 22px;
            line-height: 1;
        }

        .klf-modal-close:hover {
            background: #cf464e;
            color: #fff;
        }
    </style>

    <section class="klf-gallery py-5" id="klfGallery">
        <div class="container-xxl px-lg-5 px-md-3 px-2 klf-shell">
            <div class="row">
                @for ($i = 1; $i <= 34; $i++)
                    <div class="col-lg-3 col-md-4 mb-3">
                        <button class="klf-media-button" type="button"
                            data-klf-image="{{ asset('assets/img_new/book-stall/' . $i . '.webp') }}"
                            aria-label="View KLF gallery image">
                            <img src="{{ asset('assets/img_new/book-stall/' . $i . '.webp') }}" alt="KLF-Awadh festival moment"
                                loading="lazy">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                @endfor
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
            document.querySelectorAll('[data-klf-video]').forEach((button) => button.addEventListener('click', () => { video.src = `https://www.youtube.com/embed/${button.dataset.klfVideo}?autoplay=1&rel=0`; video.title = button.dataset.klfTitle; video.hidden = false; image.hidden = true; modal.classList.add('is-open'); modal.setAttribute('aria-hidden', 'false'); }));
            modal.querySelector('.klf-modal-close').addEventListener('click', close);
            modal.addEventListener('click', (event) => { if (event.target === modal) close(); });
            document.addEventListener('keydown', (event) => { if (event.key === 'Escape' && modal.classList.contains('is-open')) close(); });
        })();
    </script>
@endsection