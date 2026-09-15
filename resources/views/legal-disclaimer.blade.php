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
                        <h2> Legal Disclaimer</h2>
                    </div>
                    <p>
                       If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at support@bfcpublications.com
                    </p>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_license">
                    <div class="bfc_terms_section_heading">
                        <h2>Disclaimers for BFC Publications</h2>
                    </div>
                    <p>
                       All the information on this website - https://bfcpublications.com/ - is published in good faith and for general information purpose only. BFC Publications does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (BFC Publications), is strictly at your own risk. BFC Publications will not be liable for any losses and/or damages in connection with the use of our website.
                    </p>
                    <p>
                       From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.
                    </p>
                    <p>
                        Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.
                    </p>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_comments">
                    <div class="bfc_terms_section_heading">
                        <h2>Consent</h2>
                    </div>
                    <p>
                        By using our website, you hereby consent to our disclaimer and agree to its terms.
                    </p>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_hyperlinking">
                    <div class="bfc_terms_section_heading">
                        <h2>Update </h2>
                    </div>
                    <p>
                        Should we update, amend or make any changes to this document, those changes will be prominently posted here.
                    </p>
                </section>
            </div>
        </section>
    </div>
@endsection