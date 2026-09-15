@extends('layout.template1')

@section('content')
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
            font-weight: 700;
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

    <div class="faq-page">
        <section class="faq-hero">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="faq-hero-content">
                    <div class="faq-eyebrow">BFC Publications</div>
                    <h1 class="faq-title">Frequently Asked <span>Questions</span></h1>
                    <p class="faq-intro">Find clear answers to common questions about self-publishing with BFC Publications.
                    </p>
                </div>
            </div>
        </section>

        <section class="faq-content py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <div class="faq-list">
                    <details class="faq-entry" name="faq" open>
                        <summary class="faq-question">What is self publishing?</summary>
                        <div class="faq-answer">
                            <p>
                                Self publishing is the act of publishing a manuscript at the author's risk, unlike traditional publishing wherein the publisher bears the costs and risks of the same. Under the self publishingmodel, the author takes all the calls concerning the book's cover, its layout, the price at which the book is to be sold and the marketing gimmicks to be deployed.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">Since when is BFC active as a publisher?</summary>
                        <div class="faq-answer">
                            <p>
                                We are a relatively young publication and we do not hide the fact, primarily because we believe in building trust and going for the long haul. Despite that, we have managed to build a significant following and have several reputed authors and books in our repertoire.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">What is the procedure of manuscript submission and publication?
                        </summary>
                        <div class="faq-answer">
                            <p>
                                After initial consultations, the author is to sign a contract with us, which ensures that both parties uphold their end of the bargain. Following this, a dedicated project manager shall be assigned to you, who, with his team of proofreaders, editors, and graphic designers will go to work on your manuscript, based on your briefings.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">What are the costs involved?</summary>
                        <div class="faq-answer">
                            <p>
                                The publishing cost may vary depending upon the a la carte services you choose to avail, and the publishing format you pick for your manuscript, e-Book or paperback. You can also pick from the pre-assembled packages listed on the website to zero-in on the final publishing cost.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">Are there any other writing solutions on offer?</summary>
                        <div class="faq-answer">
                            <p>
                                There are a bunch of services that authors may choose from, depending upon their needs. This includes, proofreading the manuscript for errors; copy editing, which entails revising the written material to improve its readability and making sure that the manuscript is free of any grammatical or factual errors; and ghostwriting, wherein the manuscript is written by one of our executives, based on the written outline and briefings provided by you.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">How long does it take to print a book?</summary>
                        <div class="faq-answer">
                            <p>
                                This may vary depending upon the book size, and the amount of work that is to be put into the manuscript. Usually, however, it takes 45 days to publish a book, starting from the day of manuscript submission.
                            </p>
                        </div>
                    </details>
                    <details class="faq-entry" name="faq">
                        <summary class="faq-question">How many copies of my book will be printed?</summary>
                        <div class="faq-answer">
                            <p>
                                We work on the Print-On-Demand model, which means copies are printed based on the demand the book generates. To avoid any dispatch delays, however, as many as 20 copies of the book are stocked up in our warehouse at all times.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
        </section>

        <section class="bfc_cta_section" id="bfc-editing-cta">
            <style>
                .bfc_cta_box {
                    position: relative;
                    overflow: hidden;
                    color: #fff;
                    background:
                        radial-gradient(circle at 90% 10%,
                            rgba(207, 70, 78, .2),
                            transparent 28%),
                        #263192;
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
            </style>
            <div class="bfc_cta_box bfc_reveal py-md-5 py-4">
                <div class="container-xxl px-lg-5 px-md-3 px-2">
                    <div class="bfc_cta_content row justify-content-between align-items-center g-4">
                        <div class="col-lg-8">
                            <h2 class="bfc_cta_title text-md-start text-center">
                                Still can’t find what you're 
                                <span class="bfc_highlight">
                                 looking for?
                                </span>
                            </h2>
                            <p class="bfc_cta_text text-md-start text-center">
                               No problem! You can create your own plan just the way you want it.
                            </p>
                        </div>
                        <div class="col-lg-4 text-xl-end text-md-start text-center">
                            <a class="px-4 rounded-pill hero-red-btn"
                                href="https://bfcpublications.com/customize-package/paperback">Click Here to Customise Your
                                Plan</a>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection