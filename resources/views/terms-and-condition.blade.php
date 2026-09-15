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
                <div class="bfc_terms_document">
                    <section class="bfc_terms_section" id="bfc_terms_cookies">
                        <div class="bfc_terms_section_heading">
                            <h2> Terms and Conditions</h2>
                        </div>
                        <P>
                            Welcome to BFC Publications!
                        </P>
                        <p>
                            These terms and conditions outline the rules and regulations for the use of BFC Publications Pvt
                            Ltd's Website, located at bfcpublications.com.
                            By accessing this website we assume you accept these terms and conditions. Do not continue to
                            use BFC Publications if you do not agree to take all of the terms and conditions stated on this
                            page.
                            The following terminology applies to these Terms and Conditions, Privacy Statement and
                            Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log
                            on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves",
                            "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the
                            Client and ourselves. All terms refer to the offer, acceptance and consideration of payment
                            necessary to undertake the process of our assistance to the Client in the most appropriate
                            manner for the express purpose of meeting the Client’s needs in respect of provision of the
                            Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any
                            use of the above terminology or other words in the singular, plural, capitalization and/or
                            he/she or they, are taken as interchangeable and therefore as referring to same.
                        </p>
                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_cookies">
                        <div class="bfc_terms_section_heading">
                            <h2> Cookies</h2>
                        </div>
                        <p>
                            We employ the use of cookies. By accessing BFC Publications, you agreed to use cookies in
                            agreement with the BFC Publications Pvt Ltd's Privacy Policy.
                            Most interactive websites use cookies to let us retrieve the user’s details for each visit.
                            Cookies are used by our website to enable the functionality of certain areas to make it easier
                            for people visiting our website. Some of our affiliate/advertising partners may also use coo.
                        </p>
                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_license">
                        <div class="bfc_terms_section_heading">
                            <h2> License</h2>
                        </div>
                        <p>
                            Unless otherwise stated, BFC Publications Pvt Ltd and/or its licensors own the intellectual
                            property rights for all material on BFC Publications. All intellectual property rights are
                            reserved. You may access this from BFC Publications for your own personal use subjected to
                            restrictions set in these terms and conditions.
                            You must not:
                        </p>
                        <ul class="bfc_terms_list">
                            <li> Republish material from BFC Publications.</li>
                            <li> Sell, rent or sub-license material from BFC Publications.</li>
                            <li> Reproduce, duplicate or copy material from BFC Publications.</li>
                            <li> Redistribute content from BFC Publications.</li>
                        </ul>
                        <p>
                            Parts of this website offer an opportunity for users to post and exchange opinions and
                            information in certain areas of the website. BFC Publications Pvt Ltd does not filter, edit,
                            publish or review Comments prior to their presence on the website. Comments do not reflect the
                            views and opinions of BFC Publications Pvt Ltd,its agents and/or affiliates. Comments reflect
                            the views and opinions of the person who post their views and opinions. To the extent permitted
                            by applicable laws, BFC Publications Pvt Ltd shall not be liable for the Comments or for any
                            liability, damages or expenses caused and/or suffered as a result of any use of and/or posting
                            of and/or appearance of the Comments on this website.
                        </p>

                        <p>
                            BFC Publications Pvt Ltd reserves the right to monitor all Comments and to remove any Comments
                            which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.
                            You warrant and represent that:
                        </p>
                        <ul class="bfc_terms_list">

                            <li>
                                You are entitled to post the Comments on our website and have all necessary licenses and
                                consents to do so;
                            </li>

                            <li>
                                The Comments do not invade any intellectual property right, including without limitation
                                copyright, patent or trademark of any third party;
                            </li>

                            <li>
                                The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise
                                unlawful material which is an invasion of privacy
                            </li>

                            <li>
                                The Comments will not be used to solicit or promote business or custom or present commercial
                                activities or unlawful activity.
                            </li>
                        </ul>
                        <p>
                            You hereby grant BFC Publications Pvt Ltd a non-exclusive license to use, reproduce, edit and
                            authorize others to use, reproduce and edit any of your Comments in any and all forms, formats
                            or media.
                        </p>
                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_comments">
                        <div class="bfc_terms_section_heading">
                            <h2>Hyperlinking to our Content </h2>
                        </div>
                        <p>
                            The following organizations may link to our Website without prior written approval:
                        </p>
                        <ul class="bfc_terms_list">
                            <li> Government agencies</li>
                            <li> Search engines;</li>
                            <li> News organizations;</li>
                            <li> Online directory distributors may link to our Website in the same manner as they hyperlink
                                to the Websites of other listed businesses;</li>
                            <li>System wide Accredited Businesses except soliciting non-profit organizations, charity
                                shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                        </ul>
                        <p>
                            These organizations may link to our home page, to publications or to other Website information
                            so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship,
                            endorsement or approval of the linking party and its products and/or services; and (c) fits
                            within the context of the linking party’s site.
                        </p>
                        <p>
                            We may consider and approve other link requests from the following types of organizations:
                        </p>

                        <ul class="bfc_terms_list">
                            <li>
                                commonly-known consumer and/or business information sources;
                            </li>
                            <li>
                                dot.com community sites;
                            </li>

                            <li>
                                associations or other groups representing charities;
                            </li>

                            <li>
                                online directory distributors;
                            </li>
                            <li> internet portals;</li>
                            <li>accounting, law and consulting firms;</li>
                            <li>educational institutions and trade associations.</li>
                        </ul>
                        <p>
                            We will approve link requests from these organizations if we decide that: (a) the link would not
                            make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does
                            not have any negative records with us; (c) the benefit to us from the visibility of the
                            hyperlink compensates the absence of BFC Publications Pvt Ltd; and (d) the link is in the
                            context of general resource information.
                            These organizations may link to our home page so long as the link: (a) is not in any way
                            deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party
                            and its products or services; and (c) fits within the context of the linking party’s site.
                            If you are one of the organizations listed in paragraph 2 above and are interested in linking to
                            our website, you must inform us by sending an e-mail to BFC Publications Pvt Ltd. Please include
                            your name, your organization name, contact information as well as the URL of your site, a list
                            of any URLs from which you intend to link to our Website, and a list of the URLs on our site to
                            which you would like to link. Wait 2-3 weeks for a response.
                            Approved organizations may hyperlink to our Website as follows:
                        </p>
                        <ul class="bfc_terms_list">
                            <li>By use of our corporate name; or</li>
                            <li> By use of the uniform resource locator being linked to; or</li>
                            <li> By use of any other description of our Website being linked to that makes sense within the
                                context and format of content on the linking party’s site.</li>
                        </ul>
                        <p>No use of BFC Publications Pvt Ltd's logo or other artwork will be allowed for linking absent a
                            trademark license agreement.</p>

                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_hyperlinking">
                        <div class="bfc_terms_section_heading">
                            <h2>iFrames </h2>
                        </div>
                        <p>
                            Without prior approval and written permission, you may not create frames around our Webpages
                            that alter in any way the visual presentation or appearance of our Website.
                        </p>
                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_iframes">
                        <div class="bfc_terms_section_heading">
                            <h2>Content Liability </h2>
                        </div>
                        <p>
                            We shall not be hold responsible for any content that appears on your Website. You agree to
                            protect and defend us against all claims that is rising on your Website. No link(s) should
                            appear on any Website that may be interpreted as libelous, obscene or criminal, or which
                            infringes, otherwise violates, or advocates the infringement or other violation of, any third
                            party rights.
                        </p>

                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_content">
                        <div class="bfc_terms_section_heading">
                            <h2>Cancellation Refund Policy</h2>
                        </div>
                        <p> We allow cancellations if the service has not been commenced or the order has not been shipped
                            for a full refund minus applicable charges, if any.
                        </p>
                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_content">
                        <div class="bfc_terms_section_heading">
                            <h2>Your Privacy</h2>
                        </div>
                        <p> Please read Privacy Policy
                        </p>
                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_rights">
                        <div class="bfc_terms_section_heading">
                            <h2> Reservation of Rights</h2>
                        </div>
                        <p>
                            We reserve the right to request that you remove all links or any particular link to our Website.
                            You approve to immediately remove all links to our Website upon request. We also reserve the
                            right to amen these terms and conditions and it’s linking policy at any time. By continuously
                            linking to our Website, you agree to be bound to and follow these linking terms and conditions.
                        </p>
                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_removal">
                        <div class="bfc_terms_section_heading">
                            <h2>
                                Removal of links from our website
                            </h2>
                        </div>
                        <p>
                            If you find any link on our Website that is offensive for any reason, you are free to contact
                            and inform us any moment. We will consider requests to remove links but we are not obligated to
                            or so or to respond to you directly.
                            We do not ensure that the information on this website is correct, we do not warrant its
                            completeness or accuracy; nor do we promise to ensure that the website remains available or that
                            the material on the website is kept up to date.
                        </p>
                    </section>

                    <section class="bfc_terms_section" id="bfc_terms_disclaimer">
                        <div class="bfc_terms_section_heading">
                            <h2> Disclaimer</h2>
                        </div>
                        <p>
                            To the maximum extent permitted by applicable law, we exclude all representations, warranties
                            and conditions relating to our website and the use of this website. Nothing in this disclaimer
                            will:
                        </p>
                        <ul class="bfc_terms_list">
                            <li>limit or exclude our or your liability for death or personal injury;</li>
                            <li> limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                            <li> imit any of our or your liabilities in any way that is not permitted under applicable law;
                                or</li>
                            <li> exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                        </ul>

                        <p>
                            The limitations and prohibitions of liability set in this Section and elsewhere in this
                            disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising
                            under the disclaimer, including liabilities arising in contract, in tort and for breach of
                            statutory duty.
                            As long as the website and the information and services on the website are provided free of
                            charge, we will not be liable for any loss or damage of any nature.
                        </p>
                    </section>
                </div>
            </div>
        </section>
    </div>

@endsection