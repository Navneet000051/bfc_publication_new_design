@extends('layout.template1')
@section('content')

    <style>
        :root {
            --royalty-primary: #263192;
            --royalty-primary-dark: #1d2675;
            --royalty-red: #cf464e;
            --royalty-red-dark: #b63840;
            --royalty-light-blue: #f3f4ff;
            --royalty-light-red: #fff1f2;
            --royalty-text: #292d3d;
            --royalty-muted: #70758a;
            --royalty-border: #e4e6f0;
            --royalty-white: #ffffff;
        }

        .royalty-calculator {
            background: var(--royalty-white);
        }

        .royalty-calculator .containerparents>h1 {
            color: var(--royalty-primary);
            font-size: 38px;
            font-weight: 800;
            letter-spacing: .3px;
            text-align: center;
            position: relative;
            padding-bottom: 18px;
        }

        .royalty-calculator .containerparents>h1 span {
            color: var(--royalty-red);
        }

        .royalty-cal {
            margin-top: 10px;
        }

        .shadow-pro {
            background: var(--royalty-white);
            border: 1px solid var(--royalty-border);
            border-radius: 16px;
            box-shadow: 0 10px 35px rgba(38, 49, 146, .09) !important;
            height: 100%;
        }

        .royalty-title {
            color: var(--royalty-primary);
            margin-bottom: 5px;
        }

        .royalty-title h5 {
            font-size: 16px;
            font-weight: 700;
            letter-spacing: .5px;
        }

        .royalty-calculator label {
            color: var(--royalty-text);
            font-size: 15px;
            font-weight: 600;
        }

        .inputf {
            border-radius: 8px;
            transition: all .25s ease;
        }

        .royalty-calculator .form-control,
        .royalty-calculator .form-select {
            min-height: 44px;
            border: 1px solid var(--royalty-border);
            border-radius: 8px;
            color: var(--royalty-text);
            background-color: var(--royalty-white);
            font-size: 14px;
            box-shadow: none;
            transition: all .25s ease;
        }

        .royalty-calculator .form-control:focus,
        .royalty-calculator .form-select:focus {
            border-color: var(--royalty-primary);
            box-shadow: 0 0 0 3px rgba(38, 49, 146, .10);
        }

        .royalty-calculator .form-control::placeholder {
            color: #a1a5b5;
        }

        .transcard {
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .transcard:hover {
            box-shadow: 0 5px 18px rgba(38, 49, 146, .08);
        }

        .bg-light-blue {
            background: var(--royalty-light-blue) !important;
        }

        .bg-light-red {
            background: var(--royalty-light-red) !important;
            color: var(--royalty-primary);
            border: 1px solid #f2d9dc;
            border-radius: 8px;
            font-weight: 700;
            text-align: center;
        }

        .btn-custom {
            background: var(--royalty-red);
            border: 1px solid var(--royalty-red);
            color: var(--royalty-white);
            border-radius: 8px;
            font-size: 15px;
            font-weight: 700;
            padding: 11px 25px;
            transition: all .25s ease;
        }

        .btn-custom:hover,
        .btn-custom:focus {
            background: var(--royalty-primary);
            border-color: var(--royalty-primary);
            color: var(--royalty-white);
            transform: translateY(-2px);
            box-shadow: 0 7px 18px rgba(38, 49, 146, .18);
        }

        .royalty-calculator .note-text {
            font-size: 13px;
        }

        .text-label {
            color: var(--royalty-primary);
            font-size: 14px;
        }

        .result-content-shadow-pro {
            background: #fafaff;
            border: 1px solid var(--royalty-border);
            border-radius: 12px;
            margin-top: 20px;
        }

        .result-content-shadow-pro .text-secondary {
            color: var(--royalty-muted) !important;
        }

        #production_cost,
        #recommended_cost,
        #setbfcprice,
        #setohterprice {
            min-height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #mrp {
            text-align: center;
        }

        #error_no_of_page,
        #error_mrp {
            color: var(--royalty-red) !important;
            font-weight: 600;
        }

        .author-result {
            background: linear-gradient(135deg, var(--royalty-light-blue), #ffffff) !important;
            border: 1px solid #e1e4f5;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(38, 49, 146, .07);
        }

        .author-result h5 {
            color: var(--royalty-primary);
            font-size: 25px;
            font-weight: 700;
        }

        .author-result h5 .text-danger {
            color: var(--royalty-red) !important;
        }

        .author-result p {
            color: var(--royalty-muted);
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 6px;
        }

        section.mb-4 .containerparents>.row>.col-md-12 {
            color: var(--royalty-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        section.mb-4 b {
            color: var(--royalty-primary);
        }

        section.bg-light-blue {
            background: var(--royalty-light-blue) !important;
        }

        section.bg-light-blue .page-text h3 {
            color: var(--royalty-primary);
            font-size: 28px;
            letter-spacing: .3px;
            margin-bottom: 20px;
        }

        .accordion {
            border-radius: 12px;
            overflow: hidden;
        }

        .accordion-item {
            background: var(--royalty-white);
            border: 1px solid var(--royalty-border);
            margin-bottom: 10px;
            border-radius: 10px !important;
            overflow: hidden;
        }

        .accordion-item:last-child {
            margin-bottom: 0;
        }

        .accordion-button {
            color: var(--royalty-primary);
            background: var(--royalty-white);
            font-size: 18px;
            font-weight: 500;
            padding: 17px 20px;
            box-shadow: none !important;
        }

        .accordion-button::after {
            background-size: 15px;
        }

        .accordion-button:not(.collapsed) {
            color: var(--royalty-white);
            background: var(--royalty-primary);
            box-shadow: none;
        }

        .accordion-button:not(.collapsed)::after {
            filter: brightness(0) invert(1);
        }

        .accordion-body {
            background: var(--royalty-white);
            color: var(--royalty-muted);
            font-size: 17px;
            line-height: 1.5;
            padding: 18px 20px;
        }

        .accordion-body p {
            margin-bottom: 0;
        }

        /* Tablet */
        @media (max-width: 991.98px) {
            .royalty-calculator .containerparents>h1 {
                font-size: 32px;
                margin-bottom: 35px !important;
            }

            .shadow-pro {
                padding: 28px !important;
            }

            .result-content-shadow-pro {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .author-result h5 {
                font-size: 18px;
            }
        }

        /* Mobile */
        @media (max-width: 767.98px) {
            .royalty-calculator {
                padding-top: 30px !important;
                padding-bottom: 30px !important;
            }

            .royalty-calculator .containerparents>h1 {
                font-size: 26px;
                line-height: 1.3;
                margin-bottom: 30px !important;
            }

            .shadow-pro {
                padding: 20px !important;
                border-radius: 12px;
            }

            .royalty-calculator .row>[class*="col-md-6"] {
                margin-bottom: 15px;
            }

            .royalty-calculator label {
                display: block;
                margin-bottom: 7px;
            }

            .royalty-title h5 {
                font-size: 14px;
            }

            .result-content-shadow-pro {
                padding: 15px !important;
            }

            .result-content-shadow-pro .row.pt-3 {
                padding-top: 15px !important;
            }

            .result-content-shadow-pro .col-md-3,
            .result-content-shadow-pro .col-md-6 {
                margin-bottom: 10px;
            }

            .result-content-shadow-pro .text-end {
                text-align: center !important;
            }

            .result-content-shadow-pro .btn-custom {
                width: 100%;
            }

            .author-result {
                padding: 20px !important;
            }

            .author-result h5 {
                font-size: 17px;
                line-height: 1.5;
            }

            section.mb-4 .containerparents>.row {
                padding-left: 8px;
                padding-right: 8px;
            }

            section.mb-4 .containerparents>.row>.col-md-12 {
                font-size: 14px;
                line-height: 1.7;
            }

            section.bg-light-blue .page-text h3 {
                font-size: 22px;
            }

            .accordion-button {
                font-size: 14px;
                line-height: 1.5;
                padding: 15px;
            }

            .accordion-body {
                font-size: 14px;
                padding: 15px;
            }
        }

        /* Small mobile */
        @media (max-width: 575.98px) {

            .royalty-calculator .containerparents>h1 {
                font-size: 23px;
            }

            .shadow-pro {
                padding: 16px !important;
            }

            .royalty-title {
                padding: 10px 8px !important;
            }

            .royalty-title h5 {
                font-size: 13px;
            }

            .btn-custom {
                width: 100%;
            }

            .author-result h5 {
                font-size: 16px;
            }

            .author-result p {
                font-size: 13px;
            }

            section.bg-light-blue {
                padding-bottom: 30px !important;
            }
        }
    </style>

    <div class="">

        <section class="royalty-calculator py-5">
            <div class="containerparents container-xxl px-lg-5 px-md-3 px-2">
                <h1 class=" mb-5">Book Royalty <span>Calculator</span></h1>
                <div class="royalty-cal">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="shadow-pro px-4 py-3">
                                <div class="royalty-title text-center py-2">
                                    <h5 class="mb-0 text-blue">ENTER BOOK DETAILS</h5>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6 mb-3"><label>Number Of Pages</label></div>
                                    <div class="col-md-6 mb-3">
                                        <div class="d-flex inputf transcard">
                                            <input id="noofpage" type="text" class="form-control" minlength="0"
                                                placeholder="0" onkeypress="return isNumber(event)">
                                        </div>
                                    </div>
                                    <div class="note-text text-center text-danger mb-2" id="error_no_of_page">
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Book Format</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="d-flex inputf transcard">
                                            <select id="book_type" class="form-select" aria-label="Default select example">
                                                <option value="">Select</option>
                                                <option value="1">Paperback</option>
                                                <option value="2">Hardcover</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Book Size</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="d-flex inputf transcard">
                                            <select id="book_size" class="form-select" aria-label="Default select example">
                                                <option selected="">Select</option>
                                                <option value="5*8">5*8</option>
                                                <option value="6*9">6*9</option>
                                                <option value="8*11">8*11</option>
                                                <option value="5.5*8.5">5.5*8.5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Book Type</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="d-flex inputf transcard">
                                            <input type="text" class="form-control" placeholder="Black & White" readonly>
                                        </div>
                                    </div>
                                    <a onclick="book_calculate();" class="btn btn-custom btn-block"> Calculate</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-smc-2">
                            <div class="shadow-pro px-3 p-3">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="text-label text-center font-weight-600 py-2">Production Cost(₹)</div>
                                        <div class="inputf  bg-light-red py-2 transcard" id="production_cost">0</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="text-label text-center font-weight-600 py-2 ">Recommended Price(₹)</div>
                                        <div class="inputf bg-light-red py-2 transcard" id="recommended_cost">0</div>
                                    </div>
                                </div>
                                <div class="result-content-shadow-pro px-4 py-2">
                                    <div class="note-text pt-2 pb-2 text-center"><span id="error_mrp"
                                            class="text-danger font-weight-700 fs-13"></span></div>
                                    <div class=" row pt-3">
                                        <div class="col-md-3 my-3 text-center">
                                            <label>MRP</label>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="row inputf transcard">
                                                <input type="text" id="mrp" class="form-control" placeholder="MRP Here">
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-end">
                                            <a class="btn btn-custom py-2 px-2 col-12"
                                                onclick="mrpcalculate();">Calculate</a>
                                        </div>
                                    </div>
                                    <div class="note-text pb-2 text-center mt-smc-2"><span
                                            class="font-weight-600 text-secondary">Author's Earning Per Copy:</span></div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="text-label text-center font-weight-600 py-2">BFC Publications(₹)
                                            </div>
                                            <div class="inputf transcard bg-light-red py-2" id="setbfcprice">0</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="text-label text-center font-weight-600 py-2 ">Other Stores(₹)</div>
                                            <div class="inputf transcard bg-light-red py-2" id="setohterprice">0</div>
                                        </div>
                                    </div>
                                    <div class="note-text text-center"><span class="fs-12 text-danger">Note: These Rates are
                                            for
                                            illustration purpose only. Actual earnings may vary.</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="mb-5 mx-3 mt-smc-2">
            <div class="containerparents container-xxl px-lg-5 px-md-3 px-2">
                <div class="row justify-content-center author-result p-3 bg-light-blue">
                    <div class="col-md-12 text-center">
                        <h5 class="text-center pb-3">Author's Copy - At Subsidised Price : <span class="text-danger"
                                id="subsidisedPrice">₹</span>
                        </h5>
                        <p>Authors can procure their books from us at this exclusive price.</p>
                        <p>The minimum order size for Paperbacks is 20 copies, GST & Delivery Charges excluded.</p>
                        <p> The minimum order size for Hardcovers is 30 copies, GST & Delivery Charges excluded.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <div class="containerparents container-xxl px-lg-5 px-md-3 px-2">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <p>Use our <b>Book Royalty Calculator</b> to determine the per book publishing cost, and decide the
                            MRP
                            of your book. This <b>Author Royalty Calculator</b> recommends the lowest possible MRP, based on
                            the
                            book’s format, the number of pages it has, and its size.</p>
                        <p>Enter the number of book pages in the left uppermost section of the Royalty Calculator, followed
                            by
                            the book format, paperback or hardcover, and the book size before hitting the calculate tab.
                            Following this, the estimated per book publishing cost and the recommended MRP shall start
                            reflecting on the upper right section of the <b>Book Royalty Calculator.</b></p>
                        <p>Right below the recommended MRP is the tab wherein authors can enter their intended MRP to figure
                            out
                            the earnings they shall receive upon the sale of each book.</p>
                        <p>On the lower left, authors can see the earnings they shall fetch if the book is sold through the
                            BFC
                            Bookstore, and on the right will be the sales proceeds of other stores.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light-blue py-5">
            <div class="containerparents container-xxl px-lg-5 px-md-3 px-2">
                <div class="page-text">
                    <h3 class="text-center fw-bold">Frequently Asked Questions</h3>
                </div>
                <div class="row py-2">
                    <div class="col-md-12">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>1. What is the Recommended Price?</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Recommended Price is the lowest MRP at which the self published book can be
                                            sold. This is determined after taking into account the printing and distribution
                                            cost.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>2. How to set the MRP for a book?</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Authors have complete freedom to sell their book at the price they wish to,
                                            provided it is over and above the Recommended Price.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <strong>3. How are author profits calculated?</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Profits are derived after deducting the expense incurred in a book’s production
                                            and distribution from the MRP. Profit = MRP- Expense Incurred (Production Cost +
                                            Distribution Cost). Authors are entitled to receive 100% of the profit fetched.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        <strong>4. What is the subsidy offered for author copies?</strong>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Authors are entitled to purchase copies of their books at subsidised prices. The
                                            subsidised price is derived after adding the Production Cost of and the
                                            applicable Distribution Charges.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection