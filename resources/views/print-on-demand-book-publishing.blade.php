@extends('layout.template1')

@section('content')
    <style>
        :root {
            --pod-blue: #263192;
            --pod-red: #cf464e;
            --pod-text: #292d3d;
            --pod-muted: #667085;
            --pod-line: #e7e9f3;
        }

        .pod-page {
            color: var(--pod-text);
            background: #fff;
        }

        .p-on-dbook {
            /* background: #f7f8ff; */
            position: relative;
        }

        .p-on-dbook::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(150deg, #d4ddf7 55%, #FFC9C9 65%);
            opacity: 0.171;
            z-index: 0;
        }

        .pod-page *,
        .pod-page *::before,
        .pod-page *::after {
            box-sizing: border-box;
        }

        .pod-content h2 {
            margin: 0 0 18px;
            color: var(--pod-blue);
            font-size: clamp(38px, 5vw, 50px);
            font-weight: 600;
            line-height: 1.2;
        }

        .pod-content h2 span {
            color: var(--pod-red);
        }

        .pod-benefits-heading h2 span {
            color: var(--pod-red);
        }

        .pod-benefits h2 {
            margin: 0 0 18px;
            color: var(--pod-blue);
            font-size: clamp(29px, 4vw, 45px);
            line-height: 1.2;
        }

        .pod-copy {
            color: var(--pod-muted);
            font-size: 16px;
            line-height: 1.85;
        }

        .pod-copy p {
            margin-bottom: 17px;
            font-size: 17px;
            line-height: 1.5;
        }

        .pod-image {
            max-width: 450px;
            margin: auto;
        }

        .pod-image img {
            width: 100%;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(38, 49, 146, .14);
        }

        .pod-benefits-heading {
            max-width: 900px;
            margin: 0 auto 35px;
            text-align: center;
        }

        .pod-benefits-heading p,
        .pod-benefit p {
            margin: 0;
            color: var(--pod-muted);
            line-height: 1.8;
        }

        .pod-benefit {
            height: 100%;
            padding: 27px 24px;
            border: 1px solid var(--pod-line);
            border-radius: 14px;
            background: #fff;
        }

        .pod-benefit i {
            display: grid;
            width: 46px;
            height: 46px;
            margin-bottom: 17px;
            place-items: center;
            border-radius: 10px;
            background: rgba(207, 70, 78, .1);
            color: var(--pod-red);
            font-size: 22px;
        }

        .pod-benefit h3 {
            margin: 0 0 10px;
            color: var(--pod-blue);
            font-size: 18px;
            font-weight: 700;
        }


        @media (max-width: 767px) {

            .pod-copy {
                font-size: 15px;
            }

            .pod-content {
                padding: 60px 0;
            }

            .pod-image {
                margin-bottom: 34px;
            }

            .pod-benefits {
                padding: 55px 0 60px;
            }
        }
    </style>

    <div class="pod-page">
        <section class="pod-content py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 pod-container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 order-lg-2 p-on-dbook">
                        <div class="pod-image"><img src="{{ asset('assets/img_new/other/print-on-demand.webp') }}"
                                alt="Print-on-Demand book publishing"></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <h2>What is Print-on-Demand <span>Book publishing?</span></h2>
                        <div class="pod-copy">
                            <p>
                                What is Print-on-Demand Book publishing (PoD) and how does it benefit those looking to get
                                self published? This, you’re probably wondering. Lucky you, we anticipated your dilemma in
                                advance. Just read on and you’ll know whatever there is to know about this publishing model.
                            </p>
                            <p>
                                In layman terms, Print-on-Demand publishing is a cost-effective book printing service that
                                can be availed by an author looking to get self published. Under on demand printing ,authors
                                can get limited copies of their books printed upon request, be it twenty or a thousand.
                                Simply put, this method allows publishers to provide books to authors at a per copy cost;
                                the bigger the order size, the lesser the print cost. Although the cost of each
                                print-on-demand book copy is marginally higher as compared to offset printing, it is easier
                                to accommodate since the author can order fewer prints. Long story short, on demand
                                publishing saves authors the money they would have to spend to run initial prints of their
                                book under offset printing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pod-benefits py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 pod-container">
                <div class="pod-benefits-heading">
                    <h2>What are some other benefits of <span>Print-on-Demand publishing?</span></h2>
                    <p>
                        Now that we have talked about the fundamentals, let’s try and identify some benefits of
                        Print-on-Demand publishing.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <article class="pod-benefit"><i class="bi bi-wallet2"></i>
                            <h3>On-Demand printing reduces your financial risk</h3>
                            <p>
                                We’ve already talked about this key benefit of Print-on-Demand publishing. Herein, the
                                author can request limited prints of his book and save the money he would have to spend to
                                run the initial prints mandated under offset printing.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pod-benefit"><i class="bi bi-pencil-square"></i>
                            <h3>
                                It’s easier to make changes to print on demand books
                            </h3>
                            <p>
                                With PoD, it’s easier to make changes in existing books, since you don’t have to worry about
                                the huge inventory that usually accompanies offset printing. Print-on-demand is especially
                                advisable if you are a new author, given that first-timers are more likely to miss omitting
                                certain minute errors in the manuscript.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="pod-benefit"><i class="bi bi-bag-check"></i>
                            <h3>Print on demand books remain in stock</h3>
                            <p>
                                Ever searched for a book online only to discover that it is out of stock? There's no such
                                thing with print on demand. Herein, the book is kept in an online database and printed based
                                on demand. This way, your book stays available for as long as you want.
                            </p>
                            <p>
                                Congratulations! Now you know everything there is to know about print on demand in India. We
                                hope we have successfully listed for you the cons and benefits of Print-on-Demand
                                publishing. However, if you still have a query that needs addressing, feel free to reach out
                                to us by visiting the Contact Us section on our website.
                            </p>
                            <p>Happy Writing!</p>
                        </article>
                    </div>
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