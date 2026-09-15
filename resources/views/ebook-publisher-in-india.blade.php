@extends('layout.template1')

@section('content')
    <style>
        :root {
            --epi-blue: #263192;
            --epi-deep: #182267;
            --epi-red: #cf464e;
            --epi-ink: #292d3d;
            --epi-muted: #667085;
            --epi-paper: #f6f7ff;
            --epi-line: #e4e7f1;
        }

        .epi-page {
            color: var(--epi-ink);
            background: #fff;
            overflow: hidden;
        }

        .epi-page *,
        .epi-page *::before,
        .epi-page *::after {
            box-sizing: border-box;
        }

        .epi-kicker {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--epi-red);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .epi-kicker::before {
            width: 27px;
            height: 2px;
            content: '';
            background: currentColor;
        }

        .epi-hero {
            position: relative;
            isolation: isolate;
            background: var(--epi-blue);
        }

        .epi-hero::before {
            position: absolute;
            z-index: -1;
            right: -130px;
            bottom: -220px;
            width: 500px;
            height: 500px;
            border: 70px solid rgba(255, 255, 255, .05);
            border-radius: 50%;
            content: '';
        }

        .epi-hero .epi-kicker {
            color: #cf464e;
        }

        .epi-hero h1 {
            font-weight: 700;
            margin: 13px 0 18px;
            color: #fff;
            font-size: clamp(40px, 5vw, 50px);
            line-height: 1.08;
        }

        .epi-hero h1 span {
            color: #cf464e;
        }

        .epi-hero p {
            margin: 0 0 13px;
            font-size: 17px;
            line-height: 1.5;
            color: rgba(255, 255, 255, .76);
        }

        .epi-art {
            position: relative;
            max-width: 420px;
            margin: auto;
            padding: 16px;
        }

        .epi-art::before {
            position: absolute;
            z-index: -1;
            inset: 0;
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 24px;
            transform: rotate(-5deg);
            content: '';
        }

        .epi-art img {
            width: 100%;
            border-radius: 18px;
            box-shadow: 0 20px 34px rgba(4, 9, 44, .35);
        }

        .epi-section-soft {
            background: var(--epi-paper);
        }

        .epi-heading {
            max-width: 1000px;
            margin: 0 auto 39px;
            text-align: center;
        }

        .epi-heading .epi-kicker {
            justify-content: center;
        }

        .epi-heading h2 {
            margin: 11px 0 12px;
            color: var(--epi-blue);
            font-size: clamp(30px, 4vw, 44px);
            line-height: 1.15;
        }

        .epi-heading p {
            margin: 0;
            color: var(--epi-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .epi-platform {
            position: relative;
            height: 100%;
            padding: 26px 23px;
            border: 1px solid var(--epi-line);
            border-radius: 14px;
            background: #fff;
            overflow: hidden;
        }

        .epi-platform::after {
            position: absolute;
            top: 0;
            right: 0;
            width: 6px;
            height: 100%;
            content: '';
            background: var(--epi-red);
        }

        .epi-platform i {
            display: grid;
            width: 44px;
            height: 44px;
            margin-bottom: 16px;
            place-items: center;
            border-radius: 10px;
            background: rgba(38, 49, 146, .09);
            color: var(--epi-blue);
            font-size: 21px;
        }

        .epi-platform h3,
        .epi-method h3 {
            margin: 0 0 9px;
            color: var(--epi-blue);
            font-size: 18px;
            font-weight: 700;
        }

        .epi-platform p,
        .epi-method p {
            margin: 0;
            color: var(--epi-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .epi-timeline {
            position: relative;
            max-width: 920px;
            margin: auto;
        }

        .epi-timeline::before {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 25px;
            width: 2px;
            content: '';
            background: var(--epi-line);
        }

        .epi-step {
            position: relative;
            padding: 0 0 30px 75px;
        }

        .epi-step:last-child {
            padding-bottom: 0;
        }

        .epi-step-number {
            position: absolute;
            top: 0;
            left: 0;
            display: grid;
            width: 52px;
            height: 52px;
            place-items: center;
            border-radius: 50%;
            background: var(--epi-blue);
            color: #fff;
            font-size: 14px;
            font-weight: 800;
        }

        .epi-step h3 {
            margin: 3px 0 8px;
            color: var(--epi-blue);
            font-size: 20px;
            font-weight: 700;
        }

        .epi-step p {
            margin: 0;
            color: var(--epi-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .epi-method {
            height: 100%;
            padding: 23px;
            border-bottom: 3px solid var(--epi-red);
            background: #fff;
            box-shadow: 0 8px 22px rgba(38, 49, 146, .06);
        }

        .epi-method i {
            margin-bottom: 13px;
            color: var(--epi-red);
            font-size: 24px;
        }

        .epi-closing {
            padding: 50px;
            border-radius: 18px;
            background: linear-gradient(135deg, var(--epi-blue), var(--epi-deep));
            text-align: center;
        }

        .epi-closing h2 {
            margin: 0 0 13px;
            color: #fff;

            font-size: clamp(28px, 3.5vw, 40px);
        }

        .epi-closing p {
            max-width: 790px;
            margin: auto;
            color: rgba(255, 255, 255, .78);
            font-size: 15px;
            line-height: 1.8;
        }

        .epi-closing a {
            display: inline-block;
            margin-top: 23px;
            padding: 12px 22px;
            border-radius: 8px;
            background: var(--epi-red);
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
        }

        .epi-closing a:hover {
            color: #fff;
            background: #ae353e;
        }

        @media (max-width: 991px) {

            .epi-art {
                max-width: 360px;
            }
        }

        @media (max-width: 767px) {

            .epi-hero h1 {
                font-size: 41px;
            }

            .epi-hero p,
            .epi-heading p {
                font-size: 15px;
            }

            .epi-art {
                max-width: 300px;
                margin-top: 26px;
            }

            .epi-heading {
                margin-bottom: 28px;
            }

            .epi-timeline::before {
                left: 21px;
            }

            .epi-step {
                padding-left: 63px;
            }

            .epi-step-number {
                width: 44px;
                height: 44px;
                font-size: 12px;
            }

            .epi-step h3 {
                font-size: 17px;
            }

            .epi-closing {
                padding: 34px 24px;
            }
        }
    </style>

    <div class="epi-page">
        <section class="epi-hero py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 epi-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <div class="epi-kicker">BFC Publications</div>
                        <h1>eBook Publisher in <span>India</span></h1>
                        <p>
                            Looking for an eBook publisher in India can be an uphill task, especially for budding authors
                            and novelists. The reason; new authors are not aware of the aspects of eBook publication, and
                            therefore are clueless about “what to look for in a publisher?” To understand self publishing
                            better, one needs to know its roots; how this space grew from insignificance to dominance.
                        </p>
                        <p>
                            Self-publishing was not very popular in India, at least in the earlier decades. However, due to
                            constant rejections and lack of transparency, certain popular authors published their books
                            through a self publisher. Many of these books went on to become bestsellers, a development that
                            propelled online publishing in the country.
                        </p>
                    </div>
                    <div class="col-lg-5 order-md-2 order-3 mb-lg-0 mb-3">
                        <div class="epi-art"><img src="{{ asset('assets/img_new/other/ebook-publisher.webp') }}"
                                alt="eBook publishing in India"></div>
                    </div>
                    <div class="col-12 order-md-3 order-2 mt-lg-5 mt-0">
                        <p>
                            Suddenly, eBook publications started coming up all over the country, many of them pushing
                            innocent newbies to opt for one-size-fits-all plans. The fundamental problem with pre-cooked
                            plans is they do not account for the genre of the book. This affects the book’s marketability.
                            Simply put, an academic book needs to be marketed differently when compared with fiction, and so
                            on. This lack of flexibility is the biggest drawback with eBook publishers in India. Getting a
                            book published is only half the work done; selling it is the key to success. At BFC
                            Publications, marketing books sufficiently is equally important. We make sure that the books
                            published by us are showcased properly. The exercise involves identifying readers suited to the
                            book, and targeting them through various marketing tactics.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="epi-section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 epi-shell">
                <div class="epi-heading">
                    <div class="epi-kicker">Digital distribution</div>
                    <h2>Top eBook Selling Platforms in India</h2>
                    <p>
                        Any discussion on self publishing is not complete unless it covers top eBook selling platforms in
                        India. Why? Because an author’s success is assessed by the number of books he’s sold. This is why
                        showcasing books on digital marketplaces is among the best ways to sell eBooks online in India. So,
                        let’s have a look at the 4 biggest eBook distribution mediums without delay.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <article class="epi-platform"><i class="bi bi-amazon"></i>
                            <h3>Amazon KDP</h3>
                            <p>
                                eBook publisher in India Amazon KDP is the best platform to sell eBooks online, with
                                unmatched reach among all ebook publisher in India platforms Secondly, the platform is a
                                great place to collect verified feedback and reviews for your books.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="epi-platform"><i class="bi bi-google-play"></i>
                            <h3>Google Play Books</h3>
                            <p>
                                If you are looking to sell an eBook online, you most definitely need to be on Google Play
                                Books. This Android marketplace has more than a billion active users and getting listed is
                                pretty simple. All you need to do is signup, upload your book, set the selling price, and
                                start promoting.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="epi-platform"><i class="bi bi-book"></i>
                            <h3>Smashwords</h3>
                            <p>
                                Smashwords offers quick and easy eBook distribution opportunities to authors. Those listed
                                on the platform are also granted access to tools for marketing, distribution, metadata
                                management and sales reporting. Also, on this platform, authors have complete control over
                                the sampling, pricing and marketing of books.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="epi-platform"><i class="bi bi-globe2"></i>
                            <h3>Kobo</h3>
                            <p>
                                Much like Amazon KDP India, Kobo is an eBook platform that can be leveraged by authors for
                                selling their books. There are over 6 million eBooks listed on this marketplace, which
                                speaks volumes about the reach and readership Kobo can lend you.
                            </p>
                        </article>
                    </div>
                </div>
                <p class="pt-4">
                    So, there you have it- the best ways to sell eBooks online in India. If you are looking to make it as an
                    author, this is a medium you need to leverage, Period!
                </p>
            </div>
        </section>

        <section class="epi-section epi-section-soft py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 epi-shell">
                <div class="epi-heading">
                    <div class="epi-kicker">The Publishing Journey</div>
                    <h2>How to Publish an eBook in India</h2>
                    <p>
                        Let’s assume that book you were working on is complete, and now it needs to be shared with the
                        world. Those who have published previously know what needs to be done next. However, if this is your
                        first attempt as an author, you are more than likely to be clueless about the steps that follow,
                        about how to publish an eBook in India. Well, worry not! All you need to do is follow the steps
                        listed below, and you’ll be set.
                    </p>
                </div>
                <div class="epi-timeline">
                    <article class="epi-step"><span class="epi-step-number">01</span>
                        <h3>Look For a Reputable eBook Publisher</h3>
                        <p>
                            Browse the internet to identify an eBook publisher who is trustworthy and delivers what is
                            promised. Visit author forums that discuss self publishing and ebook publications. With a little
                            effort you can deduce the reputation of the publisher you are looking to work with. Author
                            communities and Google (Google Reviews) are also good places to collect intel about publication
                            houses, and determine their performance.
                        </p>
                    </article>
                    <article class="epi-step"><span class="epi-step-number">02</span>
                        <h3>Finalise an eBook Publishing Package</h3>
                        <p>
                            Discuss in detail with your publisher, the services you shall be entitled to under the
                            publishing package shortlisted by you. Make sure that your eBook publisher is aware of your
                            priorities and expectations about each inclusion of the package, be it copy editing, format
                            editing or cover design. Also, these inclusions need to be listed in the publishing agreement,
                            in fair spirit.
                        </p>
                    </article>
                    <article class="epi-step"><span class="epi-step-number">03</span>
                        <h3>Finalise the Selling Price</h3>
                        <p>
                            All reputable self publishing companies have a transparent royalty sharing pattern. Finalise the
                            selling price of your book after discussing with your publisher, the size and pages of your
                            manuscript, the cost of printing it and his fee, among other things. Ideally, the retail price
                            should be sufficient to accommodate any discounts that may have to be offered to sell the book.
                        </p>
                    </article>
                    <article class="epi-step"><span class="epi-step-number">04</span>
                        <h3>Format & Copy Editing</h3>
                        <p>A professionally formatted and edited book delivers a satisfactory reading experience. Make sure
                            this has been achieved by your publisher, even if it means reading the edited file from scratch.
                        </p>
                    </article>
                    <article class="epi-step"><span class="epi-step-number">05</span>
                        <h3>Book Cover</h3>
                        <p>Covers are important when it comes to marketing books since they are the first thing readers see.
                            Make sure the cover of your book is well done and eye-catching. And that’s it! Follow these
                            steps if you are looking to publish an eBook in India, and you should be good to go.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="epi-section py-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 epi-shell">
                <div class="epi-heading">
                    <div class="epi-kicker">Book Promotion</div>
                    <h2>Best Ways to Promote an eBook</h2>
                    <p>We’ve said this earlier- publishing an eBook is only half the job done. An author’s journey is
                        actually complete after he has marketed the eBook sufficiently. So let’s dive in without delay and
                        have a look at the best ways to promote an eBook.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <article class="epi-method"><i class="bi bi-bullseye"></i>
                            <h3>Target an Audience to Promote Your eBook</h3>
                            <p>Before you start penning the first draft, do the research to identify the audience interested
                                in the subject. Most authors think that readers will cue up to buy their books. Selling an
                                eBook online requires a targeted approach, be it through ads on social media, or SMS and
                                WhatsApp campaigns. Focus your efforts on those who will read your book; segment the
                                audience.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="epi-method"><i class="bi bi-journal-text"></i>
                            <h3>Start a Blog</h3>
                            <p>The more readers see you, the more likely they are to buy your book. Blog posts offer you the
                                opportunity to reach out to people who share the interests your book is about. Blogging can
                                help you compile a list of subscribers and individuals who are interested in the subject.
                                You can use this list to reach out to them over email and let them know about your books.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="epi-method"><i class="bi bi-quote"></i>
                            <h3>Share Excerpts From Your Book</h3>
                            <p>Authors can share bexcerpts and portions of their upcoming book in forums, blogs, and on
                                social media platforms to generate anticipation among readers. The image of an interesting
                                quote from the book can also help the cause. This, however, needs to be done with great care
                                and the portion shared should conceal more about the plot than it reveals, and in turn, fuel
                                reader curiosity.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="epi-method"><i class="bi bi-gift"></i>
                            <h3>Organize Giveaways to Promote Your eBook</h3>
                            <p>Organizing a book giveaway is also a very effective way of promoting an eBook. Announce
                                contests on the various social media platforms you’re active on to create a buzz around the
                                book, be it on YouTube, Facebook, Twitter, or LinkedIn.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <article class="epi-method"><i class="bi bi-stars"></i>
                            <h3>Get Your Book Reviewed</h3>
                            <p>Like it or not, there is a majority that flips through a book only if attracted by the cover.
                                What may be a good book cover in your eyes, can be ordinary to others. This is why reviews
                                are important for selling eBooks. Reach out to influencers who read and review books. Ask
                                them to review your book, in exchange for payment, if necessary. This will help create a
                                positive buzz about your book. So, there you have it- Everything there is to know about self
                                publishing and more importantly promoting an eBook. We hope we have successfully answered
                                whatever queries you had about getting published. To know more about the publishing packages
                                we offer <a href="/ebook-publishing-packages">Click Here</a>.

                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5">
            <div class="container-xxl px-lg-5 px-md-3 px-2 epi-shell">
                <div class="epi-closing">
                    <h2>Ready to share your eBook with readers?</h2>
                    <p>BFC Publications supports authors with publishing, distribution, and the marketing needed to give
                        each book the right visibility.</p><a href="{{ url('/packages') }}">Explore eBook Packages</a>
                </div>
            </div>
        </section>
    </div>
@endsection