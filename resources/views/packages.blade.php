@extends('layout.template1')

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
            max-width: 780px;
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
            top: -100px;
            right: 0;
            opacity: 0.2;
            width: 45rem;
        }
    </style>

    <section class="pricing-section2 py-md-5 py-3 position-relative">
        <div class="package_shadow">
            <!-- <img src="{{ asset('assets/img_new/home/package_shadow.svg') }}" alt="package_shadow"> -->
        </div>
        <div class="container-xxl px-lg-5 px-md-3 px-2 position-relative pt-2">
            <div class="bfc_publishing_packages_content text-center">
                <h1>
                    <span>Book Publishing Packages </span> for Every Author
                </h1>
                <p>
                    Compare paperback and eBook plans side by side — editing, design, ISBN, marketing and
                    distribution, all laid out plainly. Not seeing the fit? Build your own plan below.
                </p>
            </div>
            <div class="d-flex justify-content-center my-md-5 my-3">
                <div class="format-toggle" data-tab="paperback_details">
                    <button class="format-btn active" data-tab="paperback_details">Paperback</button>
                    <button class="format-btn" data-tab="ebook_details">eBook</button>
                </div>

            </div>
            <div class="tab-panel active" id="paperback_details">
                <div class="section-header2 text-center my-5">
                    <h2>
                        <span>Paperback publishing packages</span>
                    </h2>
                    <p class="w-75 text-center m-auto">Every plan includes ISBN allocation, a dedicated publishing manager
                        and monthly royalty payouts. Higher tiers add rounds of editing, marketing reach and author copies.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="price-card">
                            <span class="corner-badge">
                                <img src="{{ asset('assets/img_new/home/economy-icon.svg') }}" alt="Economy Package">
                            </span>
                            <h3 class="plan-name">Economy</h3>
                            <div class="plan-price">
                                <span class="amt">₹6,499</span>
                                <span class="gst">+ GST</span>
                            </div>
                            <p class="plan-desc">Basic editing and publishing for new authors.</p>

                            <ul class="plan-features">
                                <li>
                                    <span>Format Editing (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Basic Cover Design</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>ISBN Allocation</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author's E-certificate</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Online Sales Dashboard</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author Profit Share (100%)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Profit / Royalty Payout (Monthly)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Inventory Manager</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Technical Support</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Dedicated Publishing Manager</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Non Exclusive Agreement</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Complimentary Author Copies (5)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Additional Author Copies (Order at Subsidised Price)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Number of Pages Allowed (75)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Content Allowed (Text and Images)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Paper Type (75 GSM Creamy / 75 GSM White)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Size (5*8 / 5.5*8.5)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Lamination (Gloss / Matte)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Interior (Black & White)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Cover (MultiColor 250 GSM)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>eBook Creation & Distribution</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                            </ul>
                            <a href="#" class="plan-btn">Choose Economy</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 position-relative">
                        <span class="highlight_packages">Most Purchased</span>
                        <div class="price-card price-cardhover">

                            <span class="corner-badge2">
                                <img src="{{ asset('assets/img_new/home/essential-icon.svg') }}" alt="Essential Package">
                            </span>
                            <h3 class="plan-name">Essential</h3>
                            <div class="plan-price">
                                <span class="amt">₹12,999</span><span class="gst">
                                    + GST
                                </span>
                            </div>
                            <p class="plan-desc">
                                Enhanced editing and design for a professional book.
                            </p>

                            <ul class="plan-features">
                                <li>
                                    <span>Format Editing (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Proof Reading (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Cover Design (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>ISBN Allocation</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Creative posts on Facebook, Instagram, and Twitter</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author's E-certificate</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>ISBN Barcode</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author's Copyright</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Paid marketing on Facebook and Instagram, along with collaboration with the
                                        author (For 5 Days)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Online Listing & Distribution</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Online Sales Dashboard</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author Profit Share (100%)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Profit / Royalty Payout (Monthly)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Inventory Manager</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Technical Support</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Dedicated Publishing Manager</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Non Exclusive Agreement</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Complimentary Author Copies (10)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Additional Author Copies (Order at Subsidised Price)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Number of Pages Allowed (100)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Content Allowed (Text and Images)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Paper Type (75 GSM Creamy / 75 GSM White)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Size (5*8 / 5.5*8.5)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Lamination (Gloss / Matte)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Interior (Black & White)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Cover (MultiColor 250 GSM)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>eBook Creation & Distribution</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                            </ul>
                            <a href="#" class="plan-btn">Choose Essential</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="price-card">
                            <span class="corner-badge3">
                                <img src="{{ asset('assets/img_new/home/regular-icon.svg') }}" alt="Regular Package">
                            </span>
                            <h3 class="plan-name">Regular</h3>
                            <div class="plan-price"><span class="amt">₹19,499</span><span class="gst">+ GST</span></div>
                            <p class="plan-desc">Advance publishing with marketing support.</p>

                            <ul class="plan-features">
                                <li>
                                    <span>Format Editing (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Proof Reading (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Cover Design (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>ISBN Allocation</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Creative posts on Facebook, Instagram, and Twitter</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>KDP</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author's E-certificate</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Instagram Book Launch</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>ISBN Barcode</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author's Copyright</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Paid marketing on Facebook and Instagram, along with collaboration with the
                                        author (For 10 Days)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Digital Poster (1)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Paid Youtube Marketing (For 5 Days)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Amazon Prime Listing</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Youtube Marketing - Trailer Launch</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Establishing a YouTube channel with custom thumbnail and cover</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Digital Releases (On 2 Website)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Amazon Author Page Set Up</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Online Listing & Distribution</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Online Sales Dashboard</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author Profit Share (100%)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Profit / Royalty Payout (Monthly)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Inventory Manager</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Technical Support</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Dedicated Publishing Manager</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Non Exclusive Agreement</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Complimentary Author Copies (12)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Additional Author Copies (Order at Subsidised Price)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Number of Pages Allowed (100)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Content Allowed (Text and Images)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Paper Type (75 GSM Creamy / 75 GSM White)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Size (5*8 / 5.5*8.5)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Lamination (Gloss / Matte)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Interior (Black & White)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Cover (MultiColor 250 GSM)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>eBook Creation & Distribution</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                            </ul>
                            <a href="#" class="plan-btn">Choose Regular</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 ">
                        <div class="price-card">
                            <span class="corner-badge4">
                                <img src="{{ asset('assets/img_new/home/elite-icon.svg') }}" alt="Elite Package">
                            </span>
                            <h3 class="plan-name">Elite</h3>
                            <div class="plan-price"><span class="amt">₹34,999</span><span class="gst">+ GST</span></div>
                            <p class="plan-desc">Premium package with maximum exposure.</p>

                            <ul class="plan-features">
                                <li>
                                    <span>Format Editing (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Proof Reading (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Cover Design (2 Rounds)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>ISBN Allocation</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Creative posts on Facebook, Instagram, and Twitter</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>KDP</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author's E-certificate</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>ISBN Barcode</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author's Copyright</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Paid marketing on Facebook and Instagram, along with collaboration with the
                                        author (For 15 Days)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Digital Poster (2)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Paid Youtube Marketing (For 10 Days)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Podcast</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Amazon Prime Listing</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Copyright</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Youtube Marketing - Trailer Launch</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Establishing a YouTube channel with custom thumbnail and cover</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Digital Releases (On 8 Website)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Goodreads Account Set Up</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Amazon Author Page Set Up</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Bonafide Amazon Reviews</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Online Listing & Distribution</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Online Sales Dashboard</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author Profit Share (100%)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Profit / Royalty Payout (Monthly)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Inventory Manager</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Technical Support</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Dedicated Publishing Manager</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Non Exclusive Agreement</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Complimentary Author Copies (15)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Additional Author Copies (Order at Subsidised Price)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Number of Pages Allowed (150)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Content Allowed (Text and Images)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Paper Type (75 GSM Creamy / 75 GSM White)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Size (5*8 / 5.5*8.5)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Lamination (Gloss / Matte)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Interior (Black & White)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Book Cover (MultiColor 250 GSM)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>eBook Creation & Distribution</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                            </ul>
                            <a href="#" class="plan-btn">Choose Elite</a>
                        </div>
                    </div>
                </div>

                <div class="bfc_packages_details pt-5">
                    <div class="section-header2 text-lg-start text-center">
                        <h2>Full feature comparison</h2>
                        <p>
                            Every single line from the feature list, across all four
                            paperback plans — nothing left out.
                        </p>
                    </div>
                    <div class="bfc_packages_details_toggle">
                        <button type="button" class="bfc_packages_details_btn border" data-bs-toggle="collapse"
                            data-bs-target="#bfcPaperbackComparison" aria-expanded="false"
                            aria-controls="bfcPaperbackComparison">
                            <span>Compare all paperback plans</span>
                            <span class="bfc_packages_details_icon">
                                <span class="plus-icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="minus-icon"><i class="fa-solid fa-minus"></i></span>
                            </span>
                        </button>
                    </div>
                    <div class="collapse" id="bfcPaperbackComparison">
                        <div class="bfc_packages_details_table_wrap">
                            <div class="table-responsive">
                                <table class="table bfc_packages_details_table overflow-hidden">
                                    <thead>
                                        <tr>
                                            <th scope="col">Feature</th>
                                            <th scope="col">Economy</th>
                                            <th scope="col">Essential</th>
                                            <th scope="col">Regular</th>
                                            <th scope="col">Elite</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bfc_feature_category">
                                            <td colspan="5" class="text-uppercase">Editing Services</td>
                                        </tr>
                                        <tr>
                                            <td>Formatting</td>
                                            <td> <span class="bfc_yes">Yes (2 rounds)</span></td>
                                            <td><span class="bfc_yes">Yes (2 rounds)</span></td>
                                            <td><span class="bfc_yes">Yes (2 rounds)</span></td>
                                            <td><span class="bfc_yes">Yes (advanced, 4 rounds)</span></td>
                                        </tr>
                                        <tr>
                                            <td>Proofreading</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes (2 rounds)</span></td>
                                            <td><span class="bfc_yes">Yes (2 rounds)</span></td>
                                            <td><span class="bfc_yes">Yes (advanced, 4 rounds)</span></td>
                                        </tr>
                                        <tr>
                                            <td>Cover design</td>
                                            <td><span class="bfc_yes">Basic (2 rounds)</span></td>
                                            <td><span class="bfc_yes">Basic (2 rounds)</span></td>
                                            <td><span class="bfc_yes">Basic (4 rounds)</span></td>
                                            <td><span class="bfc_yes">Premium (4 rounds)</span></td>
                                        </tr>
                                        <tr>
                                            <td>ISBN allocation</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr class="bfc_feature_category">
                                            <td colspan="5" class="text-uppercase">Marketing your Masterpiece</td>
                                        </tr>
                                        <tr>
                                            <td>Creative posts on Facebook, Instagram, and Twitter</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>KDP</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Author's E-certificate</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Instagram Book Launch</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>ISBN Barcode</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>Author's Copyright</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Paid marketing on Facebook and Instagram, along with collaboration with the
                                                author</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">For 5 Days</span></td>
                                            <td><span class="bfc_yes">For 10 Days</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Digital Poster</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">1</span></td>
                                            <td><span class="bfc_yes">For 15 Days</span></td>
                                        </tr>
                                        <tr>
                                            <td>Paid Youtube Marketing</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">For 5 Days</span></td>
                                            <td><span class="bfc_yes">2</span></td>
                                        </tr>
                                        <tr>
                                            <td>Podcast</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Amazon Prime Listing</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Copyright</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Facebook + Twitter + Instagram Marketing (Creative Posting)</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>Youtube Marketing - Trailer Launch</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Establishing a YouTube channel with custom thumbnail and cover</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Amazon Ads (1 Week Ad on Amazon)</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>Digital Releases</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">On 2 Website</span></td>
                                            <td><span class="bfc_yes"> On 8 Website</span></td>
                                        </tr>
                                        <tr>
                                            <td>Author Website Creation</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>Goodreads Account Set Up</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Amazon Author Page Set Up</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Amazon Pre Order</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>Bonafide Amazon Reviews</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Online Listing & Distribution</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Offline Distribution</td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr class="bfc_feature_category">
                                            <td colspan="5" class="text-uppercase">Sales Report & Profits</td>
                                        </tr>
                                        <tr>
                                            <td>Online Sales Dashboard</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Author Profit Share</td>
                                            <td><span class="bfc_yes">100%</span></td>
                                            <td><span class="bfc_yes">100%</span></td>
                                            <td><span class="bfc_yes">100%</span></td>
                                            <td><span class="bfc_yes">100%</span></td>
                                        </tr>
                                        <tr>
                                            <td>Profit / Royalty Payout</td>
                                            <td><span class="bfc_yes">Monthly</span></td>
                                            <td><span class="bfc_yes">Monthly</span></td>
                                            <td><span class="bfc_yes">Monthly</span></td>
                                            <td><span class="bfc_yes">Monthly</span></td>
                                        </tr>
                                        <tr class="bfc_feature_category">
                                            <td colspan="5" class="text-uppercase">Author Support Services</td>
                                        </tr>
                                        <tr>
                                            <td>Inventory Manager</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Technical Support</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Dedicated Publishing Manager</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Non Exclusive Agreement</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Complimentary Author Copies</td>
                                            <td><span class="bfc_yes">5</span></td>
                                            <td><span class="bfc_yes">10</span></td>
                                            <td><span class="bfc_yes">12</span></td>
                                            <td><span class="bfc_yes">15</span></td>
                                        </tr>
                                        <tr>
                                            <td>Additional Author Copies</td>
                                            <td><span class="bfc_yes">Order at Subsidised Price</span></td>
                                            <td><span class="bfc_yes">Order at Subsidised Price</span></td>
                                            <td><span class="bfc_yes">Order at Subsidised Price</span></td>
                                            <td><span class="bfc_yes">Order at Subsidised Price</span></td>
                                        </tr>
                                        <tr class="bfc_feature_category">
                                            <td colspan="5" class="text-uppercase">Book Specifications</td>
                                        </tr>
                                        <tr>
                                            <td>Number of Pages Allowed</td>
                                            <td><span class="bfc_yes">75</span></td>
                                            <td><span class="bfc_yes">100</span></td>
                                            <td><span class="bfc_yes">100</span></td>
                                            <td><span class="bfc_yes">150</span></td>
                                        </tr>
                                        <tr>
                                            <td>Content Allowed</td>
                                            <td><span class="bfc_yes">Text and Images</span></td>
                                            <td><span class="bfc_yes">Text and Images</span></td>
                                            <td><span class="bfc_yes">Text and Images</span></td>
                                            <td><span class="bfc_yes">Text and Images</span></td>
                                        </tr>
                                        <tr>
                                            <td>Paper Type</td>
                                            <td><span class="bfc_yes">75 GSM Creamy / 75 GSM White</span></td>
                                            <td><span class="bfc_yes">75 GSM Creamy / 75 GSM White</span></td>
                                            <td><span class="bfc_yes">75 GSM Creamy / 75 GSM White</span></td>
                                            <td><span class="bfc_yes">75 GSM Creamy / 75 GSM White</span></td>
                                        </tr>
                                        <tr>
                                            <td>Book Size</td>
                                            <td><span class="bfc_yes">5*8 / 5.5*8.5</span></td>
                                            <td><span class="bfc_yes">5*8 / 5.5*8.5</span></td>
                                            <td><span class="bfc_yes">5*8 / 5.5*8.5</span></td>
                                            <td><span class="bfc_yes">5*8 / 5.5*8.5</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lamination</td>
                                            <td><span class="bfc_yes">Gloss / Matte</span></td>
                                            <td><span class="bfc_yes">Gloss / Matte</span></td>
                                            <td><span class="bfc_yes">Gloss / Matte</span></td>
                                            <td><span class="bfc_yes">Gloss / Matte</span></td>
                                        </tr>
                                        <tr>
                                            <td>Book Interior</td>
                                            <td><span class="bfc_yes">Black & White</span></td>
                                            <td><span class="bfc_yes">Black & White</span></td>
                                            <td><span class="bfc_yes">Black & White</span></td>
                                            <td><span class="bfc_yes">Black & White</span></td>
                                        </tr>
                                        <tr>
                                            <td>Book Cover</td>
                                            <td><span class="bfc_yes">MultiColor 250 GSM</span></td>
                                            <td><span class="bfc_yes">MultiColor 250 GSM</span></td>
                                            <td><span class="bfc_yes">MultiColor 250 GSM</span></td>
                                            <td><span class="bfc_yes">MultiColor 250 GSM</span></td>
                                        </tr>
                                        <tr>
                                            <td>eBook Creation & Distribution</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-panel" id="ebook_details">
                <div class="section-header2 text-center my-5">
                    <h2 style="text-transform: unset;">
                        <span>eBook Publishing Packages</span>
                    </h2>
                    <p class="w-75 text-center m-auto">
                        One straightforward eBook plan covering formatting, cover design, ISBN and distribution — with a
                        custom option for anything more.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-lg-4 ">
                        <div class="price-card">
                            <span class="corner-badge2">
                                <img src="{{ asset('assets/img_new/home/essential-icon.svg') }}" alt="Essential Package">
                            </span>
                            <h3 class="plan-name">Essential</h3>
                            <div class="plan-price">
                                <span class="amt">₹3,999</span><span class="gst">
                                    + GST
                                </span>
                            </div>
                            <p class="plan-desc">
                                Enhanced editing and design for a professional book.
                            </p>

                            <ul class="plan-features">
                                <li>
                                    <span>Content Uploading Allowed - Unlimited</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Format Editing (Upto 75 Pages)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Cover Design (Basic)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>ISBN Allocation</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Online Distribution</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author's E-certificate</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Online Sales Dashboard</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Author Profit Share (100%)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Profit / Royalty Payout (Monthly)</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Publishing Support</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Technical Support</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>
                                <li>
                                    <span>Dedicated Publishing Manager</span>
                                    <i class="bi bi-check-circle-fill"></i>
                                </li>

                            </ul>
                            <a href="#" class="plan-btn">Choose Essential</a>
                        </div>
                    </div>
                </div>

                <div class="bfc_packages_details pt-5">
                    <div class="section-header2 text-lg-start text-center">
                        <h2>Full feature comparison</h2>
                        <p>
                            Every single line from the feature list for the eBook plan — nothing left out.
                        </p>
                    </div>
                    <div class="bfc_packages_details_toggle">
                        <button type="button" class="bfc_packages_details_btn border" data-bs-toggle="collapse"
                            data-bs-target="#bfcPaperbackComparison" aria-expanded="false"
                            aria-controls="bfcPaperbackComparison">
                            <span>Compare all eBook plans</span>
                            <span class="bfc_packages_details_icon">
                                <span class="plus-icon"><i class="fa-solid fa-plus"></i></span>
                                <span class="minus-icon"><i class="fa-solid fa-minus"></i></span>
                            </span>
                        </button>
                    </div>
                    <div class="collapse" id="bfcPaperbackComparison">
                        <div class="bfc_packages_details_table_wrap">
                            <div class="table-responsive">
                                <table class="table bfc_packages_details_table overflow-hidden">
                                    <thead>
                                        <tr>
                                            <th scope="col">Feature</th>
                                            <th scope="col">Essential</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bfc_feature_category">
                                            <td colspan="2" class="text-uppercase">Publishing Support</td>
                                        </tr>
                                        <tr>
                                            <td>Content Uploading Allowed - Unlimited</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr class="bfc_feature_category">
                                            <td colspan="2" class="text-uppercase">Editing Services</td>
                                        </tr>
                                        <tr>
                                            <td>Format Editing</td>
                                            <td><span class="bfc_yes">Upto 75 Pages</span></td>
                                        </tr>
                                        <tr>
                                            <td>Proof Reading</td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>Cover Design</td>
                                            <td><span class="bfc_yes">Basic</span></td>
                                        </tr>
                                        <tr>
                                            <td>ISBN Allocation</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr class="bfc_feature_category">
                                            <td colspan="2" class="text-uppercase">Marketing your Masterpiece</td>
                                        </tr>
                                        <tr>
                                            <td>Online Distribution</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Author's E-certificate</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Author's Social Circle Promotion</td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>E Mail Marketing</td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>WhatsApp Marketing</td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>Facebook + Twitter + Instagram Marketing (Creative Posting)</td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr>
                                            <td>Digital Releases</td>
                                            <td><span class="bfc_no">No</span></td>
                                        </tr>
                                        <tr class="bfc_feature_category">
                                            <td colspan="2" class="text-uppercase">Sales Report & Profits</td>
                                        </tr>
                                        <tr>
                                            <td>Online Sales Dashboard</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Author Profit Share</td>
                                            <td><span class="bfc_yes">100%</span></td>
                                        </tr>
                                        <tr>
                                            <td>Profit / Royalty Payout</td>
                                            <td><span class="bfc_yes">Monthly</span></td>
                                        </tr>
                                        <tr class="bfc_feature_category">
                                            <td colspan="2" class="text-uppercase">Author Support Services</td>
                                        </tr>
                                        <tr>
                                            <td>Publishing Support</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Technical Support</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>
                                        <tr>
                                            <td>Dedicated Publishing Manager</td>
                                            <td><span class="bfc_yes">Yes</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const formatButtons = document.querySelectorAll(".format-btn");
                const tabPanels = document.querySelectorAll(".tab-panel");
                formatButtons.forEach(function (button) {
                    button.addEventListener("click", function () {
                        const targetTab = this.getAttribute("data-tab");
                        formatButtons.forEach(function (btn) {
                            btn.classList.remove("active");
                        });
                        tabPanels.forEach(function (panel) {
                            panel.classList.remove("active");
                        });
                        this.classList.add("active");
                        const targetPanel = document.getElementById(targetTab);
                        if (targetPanel) {
                            targetPanel.classList.add("active");
                        }
                    });
                });
            });
        </script>
    </section>

    <style>
        /* accordian style  */

        .bfc_packages_details {
            width: 100%;
        }

        .bfc_packages_details_toggle {
            margin-top: 10px;
        }

        .bfc_packages_details_btn {
            width: 100%;
            padding: 13px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #d8def5c6;
            color: var(--text-primary);
            border-radius: 10px;
            font-size: 18px;
            font-weight: 500;
            text-align: left;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .bfc_packages_details_btn:hover {
            background: #faf4f4;
        }

        .bfc_packages_details_icon {
            position: relative;
            width: 16px;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-primary);
            font-size: 17px;
            font-weight: 400;
        }

        .bfc_packages_details_icon .minus-icon {
            display: none;
        }

        .bfc_packages_details_btn[aria-expanded="true"] .bfc_packages_details_icon .plus-icon {
            display: none;
        }

        .bfc_packages_details_btn[aria-expanded="true"] .bfc_packages_details_icon .minus-icon {
            display: block;
        }

        .bfc_packages_details_table_wrap {
            margin-top: 10px;
            background: #ffffff;
            border-radius: 10px;
        }

        .bfc_packages_details_table {
            width: 100%;
            min-width: 750px;
            margin: 0;
            border-collapse: collapse;
            border-radius: 10px;
        }

        .bfc_packages_details_table th,
        .bfc_packages_details_table td {
            padding: 9px 10px;
            border: 1px solid #e8e5df;
            font-size: .95rem;
            line-height: 1.4;
            vertical-align: middle;
        }

        .bfc_packages_details_table thead th {
            padding: 9px 10px;
            background: var(--text-primary);
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .bfc_packages_details_table thead th:first-child {
            width: 30%;
        }

        .bfc_packages_details_table tbody tr:not(.bfc_feature_category):nth-child(even) {
            background: #fcfbf8;
        }

        .bfc_packages_details_table tbody td:first-child {
            color: var(--text-primary);
            font-weight: 500;
            text-transform: capitalize;
        }

        .bfc_packages_details_table .bfc_feature_category td {
            padding: 7px 10px;
            background: #f6dfdf;
            /* color: var(--text-primary); */
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .bfc_packages_details_table .bfc_yes {
            font-weight: 400;
            font-size: 15px;
        }

        .bfc_packages_details_table .bfc_no {
            color: var(--text-color-red);
            font-size: 15px;
        }

        @media screen and (max-width: 991.98px) {

            .bfc_packages_details_table {
                min-width: 700px;
            }

        }

        @media screen and (max-width: 767.98px) {

            .bfc_packages_details_btn {
                padding: 12px 14px;
                font-size: 14px;
            }

            .bfc_packages_details_table_wrap {
                overflow: hidden;
            }

            .bfc_packages_details_table {
                min-width: 700px;
            }

            .bfc_packages_details_table_wrap .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

        }

        @media screen and (max-width: 575.98px) {

            .bfc_packages_details_table {
                min-width: 650px;
            }

        }
    </style>

    <section class="py-5" style="background-color:#263192;">
        <div class="container-xxl px-lg-5 px-md-3 px-2">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12 mb-lg-0 mb-4 text-start">
                    <div class="section-header2 text-lg-start text-center">
                        <h2 class="text-white">Still <span class="text-white">can’t find</span> what you're looking for?
                        </h2>
                        <p class="mb-0 text-white">No problem! You can create your own plan just the way you want it.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12 text-lg-end text-center">
                    <div class="">
                        <a href="https://bfcpublications.com/customize-package/paperback"
                            class="px-4 rounded-pill hero-red-btn">Click Here to Customize Your Plan</a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="start-publishing-section py-md-5 py-4">
        <div class="container-xxl px-lg-5 px-md-3 px-2 py-lg-4">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="achievement-content">
                        <span class="start-publishing-tag">
                            <span> Start Publishing Now</span>
                            <img src="{{ asset('assets/img_new/home/publishing-line2.svg') }}" alt="Our Achievements">
                        </span>

                        <h2 class="achievement-title pt-lg-0 pt-3">
                            Tell us about your book
                        </h2>

                        <p class="achievement-description">
                            A publishing consultant will get in touch to walk you through the right package for your
                            manuscript.
                        </p>
                        <p class="achievement-description">
                            No spam, no pressure &mdash; just a conversation about your book
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-12 items-center">
                    <div class="card border rounded-5 book-form-hero">
                        <form id="bookForm" class="bookform-set py-5 position-relative">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Your Name</label>
                                        <i class="input-icon fa-regular fa-user"></i>
                                        <input type="text" name="name" required id="popup_name" class="form-control"
                                            placeholder="Your Name" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Contact Number</label>
                                        <i class="input-icon fa-solid fa-mobile-screen-button"></i>
                                        <input type="number" name="mobileno" required id="popup_mobileno"
                                            class="form-control" placeholder="Contact Number" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Email</label>
                                        <i class="input-icon fa-regular fa-envelope"></i>
                                        <input type="email" name="email" required id="popup_email" class="form-control"
                                            placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Book Title</label>
                                        <i class="input-icon fa-solid fa-book-open"></i>
                                        <input type="text" required name="book_title" id="book_title" class="form-control"
                                            placeholder="Book Title" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Book Language</label>
                                        <i class="input-icon fa-solid fa-scroll"></i>
                                        <input type="text" required name="book_language" id="book_language"
                                            class="form-control" placeholder="Book Language" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Manuscript Status</label>
                                        <!-- <i class="input-icon fa-solid fa-scroll"></i> -->
                                        <select name="book_status" id="book_status" class="form-control" required>
                                            <option value="">-- Select Status --</option>
                                            <option value="Inprogress">Inprogress</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Published a Book Before?</label>
                                        <!-- <i class="input-icon fa-solid fa-book-open"></i> -->
                                        <select name="book_published" id="book_published" class="form-control" required>
                                            <option value="">-- Select Option --</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I consent to BFC Publications
                                            processing my data for author support and service updates, per
                                            the <a href="https://bfcpublications.com/DPDP_Act" target="_blank"
                                                class="text-danger">DPDP Act 2023</a>.</label>
                                    </div>
                                </div>
                            </div>

                            <div class="arrow-icon-publication">
                                <i class="fa-brands fa-telegram"></i>
                            </div>
                            <button class="btn btn-danger1 w-100 py-2 rounded-3">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection