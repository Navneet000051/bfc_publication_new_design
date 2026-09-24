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

        .bfc_terms_section h1 {
            margin: 4px 0 0;
            color: var(--bfc_terms_primary);
            font-size: clamp(20px, 3vw, 30px);
            line-height: 1.4;
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

            .bfc_terms_section h1 {
                font-size: 25px;
            }
            .bfc_terms_section h2 {
                font-size: 20px;
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

            .bfc_terms_section h1 {
                font-size: 20px;
            }
            .bfc_terms_section h2 {
                font-size: 19px;
            }
        }
    </style>

    <div class="bfc_terms_page">
        <section class="bfc_terms_content_area py-4">
            <div class="container-xxl px-lg-5 px-md-3 px-2">
                <section class="bfc_terms_section" id="bfc_terms_cookies">
                    <div class="bfc_terms_section_heading">
                        <h1> Privacy Policy</h1>
                    </div>
                    <p>
                        We at BFC Publications are committed to protecting the privacy and security of your personal data.
                        Your privacy is of utmost importance to us.
                        This Privacy Policy explains how “We” Collect, Use, Process and Disclose the information you may
                        have provided or may have registered on our website <a href="https://bfcpublications.com/">BFC
                            Publications</a> , with the intention of
                        availing the services, products and content offered by “Us”. This data collection is an automated
                        process that takes place when the app and/or our website are accessed via any mobile or device with
                        internet connectivity, among other means.
                        Under this Privacy Policy, the term "User" is for the purposes referring to “You”, be it in the
                        capacity of an individual, a guest user, browser and/or the representative of an entity, who visits,
                        accesses, uses, downloads, deals with, or avails “Our” Products & Services and/or transacts through
                        any of our Platforms. To this effect, wherever the context so requires, "You" or "Your" shall mean
                        “User” and the term "We", "Us" & "Our" shall signify “BFC Publications” (the Company).
                    </p>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_license">
                    <div class="bfc_terms_section_heading">
                        <h2> Information We Collect</h2>
                    </div>
                    <p>
                        Information You Provide – During your initial visit to our Platforms, the Company shall seek certain
                        personal information from “You” on a voluntary basis. This information is sought at various points
                        across the Platform. In certain cases, the information provided by “You” is not limited to
                        registering or setting up an account (Publishing Journey). This includes entering your details on
                        the App and/or the website to avail the services offered by “Us”, to buy any publishing package that
                        is offered by “Us”, providing feedback & opinion about the product and services that are currently
                        available or maybe offered in future.
                    </p>
                    <p>
                        Throughout “Your” Publishing Journey, “You” may be required to provide certain information
                        mandatorily (such as bank details to deposit your royalties or other regulatory requirements). Any
                        such information disclosed by “You”, may be disclosed willingly on a voluntary basis and without any
                        coercion.
                    </p>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_comments">
                    <div class="bfc_terms_section_heading">
                        <h2>How we use your information </h2>
                    </div>
                    <p>
                        We use the information we collect in various ways, including to-
                    </p>
                    <ul class="bfc_terms_list">
                        <li>Provide, operate, and maintain our website.</li>
                        <li> Improve, personalize, and expand our website.</li>
                        <li> Understand and analyze how you use our website.</li>
                        <li> Develop new products, services, features, and functionality.</li>
                        <li>Communicate with you, either directly or through one of our partners, including for customer
                            service, to provide you with updates and other information relating to the website, and for
                            marketing and promotional purposes.</li>
                        <li> Send you emails.</li>
                        <li> Find and prevent fraud.</li>
                    </ul>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_hyperlinking">
                    <div class="bfc_terms_section_heading">
                        <h2>Log Files </h2>
                    </div>
                    <p>
                        BFC Publications follows a standard procedure of using log files. These files log visitors when they
                        visit websites. All hosting companies do this and a part of hosting services' analytics. The
                        information collected by log files include internet protocol (IP) addresses, browser type, Internet
                        Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of
                        clicks. These are not linked to any information that is personally identifiable. The purpose of the
                        information is for analyzing trends, administering the site, tracking users' movement on the
                        website, and gathering demographic information.
                    </p>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_iframes">
                    <div class="bfc_terms_section_heading">
                        <h2>Cookies and Web Beacons</h2>
                    </div>
                    <p>
                        Like any other website, BFC Publications uses 'cookies'. These cookies are used to store information
                        including visitors' preferences, and the pages on the website that the visitor accessed or visited.
                        The information is used to optimize the users' experience by customizing our web page content based
                        on visitors' browser type and/or other information.
                        For more general information on cookies, please read "What Are Cookies".
                        Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons
                        that are used in their respective advertisements and links that appear on BFC Publications, which
                        are sent directly to users' browser. They automatically receive your IP address when this occurs.
                        These technologies are used to measure the effectiveness of their advertising campaigns and/or to
                        personalize the advertising content that you see on websites that you visit. </p>
                    <p>
                        Note that BFC Publications has no access to or control over these cookies that are used by
                        third-party advertisers.
                    </p>

                </section>

                <section class="bfc_terms_section" id="bfc_terms_content">
                    <div class="bfc_terms_section_heading">
                        <h2>Third Party Privacy Policies</h2>
                    </div>
                    <p> BFC Publications's Privacy Policy does not apply to other advertisers or websites. Thus, we are
                        advising you to consult the respective Privacy Policies of these third-party ad servers for more
                        detailed information. It may include their practices and instructions about how to opt-out of
                        certain options.
                        You can choose to disable cookies through your individual browser options. To know more detailed
                        information about cookie management with specific web browsers, it can be found at the browsers'
                        respective websites.
                    </p>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_content">
                    <div class="bfc_terms_section_heading">
                        <h2>GDPR Data Protection Rights</h2>
                    </div>
                    <p>
                        We would like to make sure you are fully aware of all of your data protection rights. Every user is
                        entitled to the following:
                    </p>
                    <p>
                        The right to access – You have the right to request copies of your personal data. We may charge you
                        a small fee for this service.
                        The right to rectification – You have the right to request that we correct any information you
                        believe is inaccurate. You also have the right to request that we complete the information you
                        believe is incomplete.
                        The right to erasure – You have the right to request that we erase your personal data, under certain
                        conditions.
                        The right to restrict processing – You have the right to request that we restrict the processing of
                        your personal data, under certain conditions.
                        The right to object to processing – You have the right to object to our processing of your personal
                        data, under certain conditions.
                        The right to data portability – You have the right to request that we transfer the data that we have
                        collected to another organization, or directly to you, under certain conditions.
                    </p>
                    <p>
                        If you make a request, we have one month to respond to you. If you would like to exercise any of
                        these rights, please contact us.
                    </p>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_rights">
                    <div class="bfc_terms_section_heading">
                        <h2> Data Protection Officer:</h2>
                    </div>
                    <p>
                        Mr. Ashish Kumar Verma has been appointed as Data Protection Officer for the compliance of the DPDP
                        Act 2023. He can be contacted at <a href="mailto:dataprotectionbfc@gmail.com">dataprotectionbfc@gmail.com </a> for any query/concern/grievance
                        related to protection/processing/erase/correction of your personal data.
                    </p>
                </section>

                <section class="bfc_terms_section" id="bfc_terms_removal">
                    <div class="bfc_terms_section_heading">
                        <h2>
                            Changes in Privacy Policy
                        </h2>
                    </div>
                    <p>
                        “We” may update and/or modify this “Privacy Policy” from time to time to incorporate necessary
                        changes in technology, applicable laws, or any other variant. In any case, “We” reserve the right to
                        change (at any point of time) the terms of this Privacy Policy. Any changes “We” make shall take
                        effect immediately, after getting posted on our Platform. Although we will make reasonable efforts
                        to keep you posted on any updates to this Privacy Policy, to make sure that you are aware of any
                        changes, we advise “You” to review this policy periodically for the latest version. Continued use of
                        “Our” Sites or Services, after such notice, will be deemed acceptance of such changes on “Your”
                        part.
                    </p>
                </section>
            </div>
        </section>
    </div>
@endsection