@extends('layout.template1')

@section('content')
    <style>
        :root {
            --bfc_terms_primary: #263192;
            --bfc_terms_primary_dark: #1c246d;
            --bfc_terms_red: #cf464e;
            --bfc_terms_red_dark: #ad353e;
            --bfc_terms_text: #292d3d;
            --bfc_terms_muted: #70758a;
            --bfc_terms_light: #f7f8fc;
            --bfc_terms_border: #e7e8ef;
            --bfc_terms_white: #ffffff;
        }

        .bfc_terms_page {
            color: var(--bfc_terms_text);
            background: #fff;
            overflow: hidden;
        }

        .bfc_terms_page *,
        .bfc_terms_page *::before,
        .bfc_terms_page *::after {
            box-sizing: border-box;
        }

        .bfc_terms_page a {
            text-decoration: none;
        }

        .bfc_terms_page img {
            max-width: 100%;
        }

        .bfc_terms_section {
            position: relative;
            border-bottom: 1px solid var(--bfc_terms_muted);
            padding: 20px 0;
        }

        .bfc_terms_section_heading {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 10px;
        }

        .bfc_terms_section h2 {
            margin: 4px 0 0;
            color: var(--bfc_terms_primary);
            font-size: clamp(20px, 3vw, 25px);
            line-height: 1.4;
        }

        .bfc_terms_section p {
            color: var(--bfc_terms_muted);
            font-size: 17px;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .bfc_terms_list {
            margin: 20px 0;
            padding: 0;
            list-style: none;
        }

        .bfc_terms_list li {
            position: relative;
            padding: 12px 0 0px 30px;
            color: var(--bfc_terms_muted);
            line-height: 1.5;
        }

        .bfc_terms_list li::before {
            content: "";
            position: absolute;
            left: 5px;
            top: 18px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--bfc_terms_red);
        }

        .bfc_terms_note {
            margin: 25px 0;
            padding: 20px 22px;
            border-radius: 12px;
            background: rgba(38, 49, 146, .06);
            border: 1px solid rgba(38, 49, 146, .10);
        }

        .bfc_terms_note strong {
            display: block;
            margin-bottom: 6px;
            color: var(--bfc_terms_primary);
        }

        .bfc_terms_note p {
            margin: 0;
            font-size: 14px;
        }

        .bfc_terms_cta {
            margin-top: 50px;
            padding: 50px;
            border-radius: 24px;
            background:
                linear-gradient(120deg,
                    var(--bfc_terms_primary),
                    #1d276f);
            position: relative;
            overflow: hidden;
        }

        .bfc_terms_cta::after {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            right: -120px;
            top: -150px;
            background: rgba(255, 255, 255, .08);
        }

        .bfc_terms_cta_content {
            position: relative;
            z-index: 2;
        }

        .bfc_terms_cta h3 {
            color: #fff;
            font-size: 34px;
            margin-bottom: 12px;
        }

        .bfc_terms_cta p {
            color: rgba(255, 255, 255, .72);
            line-height: 1.7;
            max-width: 650px;
            margin-bottom: 22px;
        }

        @media (max-width: 767px) {
            .bfc_terms_section {
                padding: 30px 0;
            }

            .bfc_terms_section h2 {
                font-size: 25px;
            }

            .bfc_terms_section p {
                font-size: 15px;
            }

            .bfc_terms_cta {
                padding: 35px 25px;
            }

            .bfc_terms_cta h3 {
                font-size: 30px;
            }
        }

        @media (max-width: 575px) {
            .bfc_terms_section_heading {
                gap: 10px;
            }

            .bfc_terms_section h2 {
                font-size: 20px;
            }
        }
    </style>

    <div class="bfc_terms_page">
        <section class="bfc_terms_content_area py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <section class="bfc_terms_section" id="bfc_terms_cookies">
                    <div class="bfc_terms_section_heading">
                        <h2>Refund and Cancellation Policy</h2>
                    </div>
                    <p>
                       BFC Publications retains the right to terminate/cancel a project under specific circumstances. This includes situations where the author has outstanding payments, has failed to settle dues according to the agreed-upon schedule, has not submitted the manuscript within six months of the booking, or has not provided approvals within six months of the booking, for drafts submitted by the editorial team.
                    </p>
                    <p>
                        <strong>The refund terms are outlined as follows:</strong>
                    </p>
                    <p><strong>Full Refund:</strong> Within seven days of the initial payment, the author is eligible for a complete refund of the total amount paid to BFC Publications.</p>
                    <p>
                        <strong>No Refund:</strong> Authors will not be eligible for any refund after submitting the manuscript or if the refund request is made more than seven days after the booking.
                    </p>
                    <p>
                        <strong>Note: All refund amounts will be subject to GST deductions.</strong>
                    </p>
                </section>
            </div>
        </section>
    </div>
@endsection