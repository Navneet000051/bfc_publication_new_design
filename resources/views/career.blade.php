@extends('layout.template1')

@section('content')
    <style>
        :root {
            --career-navy: #263192;
            --career-deep: #182267;
            --career-red: #cf464e;
            --career-ink: #252a43;
            --career-muted: #667085;
            --career-paper: #f6f7ff;
            --career-line: #e4e7f1;
        }

        .career-page {
            color: var(--career-ink);
            background: #fff;
            overflow: hidden;
        }

        .career-page *,
        .career-page *::before,
        .career-page *::after {
            box-sizing: border-box;
        }

        .career-kicker {
            display: flex;
            align-items: center;
            gap: 9px;
            color: var(--career-red);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.4px;
            text-transform: uppercase;
        }

        .career-kicker::before {
            width: 28px;
            height: 2px;
            content: '';
            background: currentColor;
        }

        .career-hero {
            position: relative;
            isolation: isolate;
            padding: 80px 0 92px;
            background: var(--career-navy);
        }

        .career-hero::before {
            position: absolute;
            z-index: -1;
            top: -190px;
            right: -160px;
            width: 510px;
            height: 510px;
            border: 70px solid rgba(255, 255, 255, .05);
            border-radius: 50%;
            content: '';
        }

        .career-hero .career-kicker {
            color: #cf464e;
        }

        .career-hero h1 {
            max-width: 550px;
            margin: 13px 0 20px;
            color: #fff;
            font-size: clamp(42px, 5.3vw, 65px);
            font-weight: 700;
            line-height: 1.06;
        }

        .career-hero h1 span {
            color: #cf464e;
        }

        .career-hero-copy {
            max-width: 585px;
            margin: 0;
            color: rgba(255, 255, 255, .76);
            font-size: 17px;
            line-height: 1.5;
        }

        .career-art {
            position: relative;
            min-height: 355px;
        }

        .career-art img {
            position: absolute;
            object-fit: cover;
            border: 5px solid rgba(255, 255, 255, .94);
            border-radius: 14px;
            box-shadow: 0 18px 35px rgba(7, 12, 53, .35);
        }

        .career-art-one {
            top: 0;
            right: 0;
            width: 67%;
            height: 245px;
        }

        .career-art-two {
            bottom: 0;
            left: 2%;
            width: 48%;
            height: 180px;
        }

        .career-art-three {
            right: 3%;
            bottom: 0;
            width: 35%;
            height: 135px;
        }

        .career-art-badge {
            position: absolute;
            z-index: 1;
            top: 48%;
            left: 26%;
            display: grid;
            width: 68px;
            height: 68px;
            place-items: center;
            border: 3px solid #fff;
            border-radius: 50%;
            background: var(--career-red);
            color: #fff;
            
            font-size: 27px;
            font-weight: 700;
        }

        .career-section {
            padding: 86px 0;
        }

        .career-heading {
            max-width: 715px;
            margin: 0 auto 42px;
            text-align: center;
        }

        .career-heading .career-kicker {
            justify-content: center;
        }

        .career-heading h2 {
            margin: 11px 0 12px;
            color: var(--career-navy);
            font-size: clamp(31px, 4vw, 45px);
            line-height: 1.15;
        }

        .career-heading p {
            margin: 0;
            color: var(--career-muted);
            font-size: 17px;
            line-height: 1.5;
        }

        .career-values {
            counter-reset: career-value;
        }

        .career-value {
            position: relative;
            min-height: 192px;
            padding: 25px 25px 25px 82px;
            border-top: 1px solid var(--career-line);
        }

        .career-value::before {
            position: absolute;
            top: 26px;
            left: 0;
            color: rgba(38, 49, 146, .15);
            content: '0' counter(career-value);
            counter-increment: career-value;
            
            font-size: 38px;
            font-weight: 700;
            line-height: 1;
        }

        .career-value i {
            display: grid;
            width: 39px;
            height: 39px;
            margin-bottom: 14px;
            place-items: center;
            border-radius: 9px;
            background: rgba(207, 70, 78, .1);
            color: var(--career-red);
            font-size: 18px;
        }

        .career-value h3 {
            margin: 0 0 9px;
            color: var(--career-navy);
            font-size: 20px;
            font-weight: 700;
        }

        .career-value p {
            margin: 0;
            color: var(--career-muted);
            font-size: 16px;
            line-height: 1.5;
        }

        .career-apply {
            padding: 80px 0;
            background: var(--career-paper);
        }

        .career-opening-panel {
            height: 100%;
            padding: 38px;
            border-radius: 16px;
            background: linear-gradient(145deg, var(--career-navy), var(--career-deep));
        }

        .career-opening-panel h2 {
            margin: 13px 0 15px;
            color: #fff;
            
            font-size: clamp(29px, 3.5vw, 40px);
            line-height: 1.15;
        }

        .career-opening-panel p {
            margin: 0 0 25px;
            color: rgba(255, 255, 255, .72);
            line-height: 1.75;
        }

        .career-job {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 0;
            border-top: 1px solid rgba(255, 255, 255, .15);
            color: #fff;
            font-size: 20px;
            font-weight: 600;
        }

        .career-job i {
            color: #cf464e;
        }

        .career-form-panel {
            padding: 35px;
            border: 1px solid var(--career-line);
            border-radius: 16px;
            background: #fff;
        }

        .career-form-panel h2 {
            margin: 0 0 7px;
            color: var(--career-navy);
            
            font-size: 32px;
        }

        .career-form-panel>p {
            margin: 0 0 24px;
            color: var(--career-muted);
            font-size: 14px;
        }

        .career-form-panel .form-label {
            color: var(--career-navy);
            font-size: 16px;
            font-weight: 600;
        }

        .career-form-panel .form-control {
            min-height: 45px;
            border-color: var(--career-line);
            font-size: 14px;
        }

        .career-form-panel .form-control:focus {
            border-color: var(--career-navy);
            box-shadow: 0 0 0 .2rem rgba(38, 49, 146, .1);
        }

        .career-consent {
            color: var(--career-muted);
            font-size: 15px;
            line-height: 1.4;
        }

        .career-submit {
            padding: 12px 26px;
            border: 0;
            border-radius: 8px;
            background: var(--career-red);
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            transition: .2s;
        }

        .career-submit:hover {
            background: #ae353e;
        }

        @media (max-width: 991px) {
            .career-hero {
                padding: 65px 0 75px;
            }

            .career-art {
                max-width: 510px;
                margin: 10px auto 0;
            }

            .career-section {
                padding: 70px 0;
            }

            .career-value {
                min-height: 175px;
            }

            .career-opening-panel {
                margin-bottom: 8px;
            }
        }

        @media (max-width: 767px) {

            .career-hero {
                padding: 58px 0 66px;
            }

            .career-hero h1 {
                font-size: 42px;
            }

            .career-hero-copy {
                font-size: 15px;
            }

            .career-art {
                min-height: 280px;
                margin-top: 35px;
            }

            .career-art-one {
                height: 195px;
            }

            .career-art-two {
                height: 140px;
            }

            .career-art-three {
                height: 105px;
            }

            .career-art-badge {
                width: 56px;
                height: 56px;
                font-size: 21px;
            }

            .career-section,
            .career-apply {
                padding: 58px 0;
            }

            .career-heading {
                margin-bottom: 28px;
            }

            .career-heading p {
                font-size: 15px;
            }

            .career-value {
                min-height: auto;
                padding: 22px 10px 22px 72px;
            }

            .career-value::before {
                left: 0;
                font-size: 32px;
            }

            .career-opening-panel,
            .career-form-panel {
                padding: 28px 22px;
            }
        }
    </style>

    <div class="career-page">
        <section class="container-xxl px-lg-5 px-md-3 px-2 career-hero">
            <div class="career-shell">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="career-kicker">BFC Publications Careers</div>
                        <h1>Build stories. <span>Build your future.</span></h1>
                        <p class="career-hero-copy">
                            We are a publishing house, and our success is determined by the calibre of the people we work with. As a result, we make continuous efforts to improve the skill set of our employees and offer them an environment congenial for personal and professional growth. Our human resource policies are liberal, transparent, and among the best in the industry.
                        </p>
                    </div>
                    <div class="col-lg-6 mt-md-5 mt-0">
                        <div class="career-art"><img class="career-art-one"
                                src="{{ asset('assets/img_new/other/1.webp') }}" alt="BFC Publications team"><img
                                class="career-art-two" src="{{ asset('assets/img_new/other/2.webp') }}"
                                alt="BFC Publications workplace"><img class="career-art-three"
                                src="{{ asset('assets/img_new/other/3.webp') }}"
                                alt="BFC Publications team activity">
                            <div class="career-art-badge">BFC</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-xxl px-lg-5 px-md-3 px-2 career-section">
            <div class="career-shell">
                <div class="career-heading">
                    <div class="career-kicker">Life at BFC</div>
                    <h2>A workplace where people can grow</h2>
                    <p>Our policies are liberal and transparent, with a focus on recognising good work and developing the
                        people behind every project.</p>
                </div>
                <div class="row g-0 career-values">
                    <div class="col-md-6">
                        <article class="career-value"><i class="bi bi-people"></i>
                            <h3>Working Culture</h3>
                            <p>
                                Book publishing is a challenging domain that necessitates a significant amount of participation. As a result, all Team BFC members are encouraged to take ownership of the projects they are working upon.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="career-value"><i class="bi bi-graph-up-arrow"></i>
                            <h3>Professional Growth</h3>
                            <p>The performance appraisal system in the organisation ensures that the top performers are appropriately rewarded. Those who perform well are offered bigger roles, setting a good example for others to follow.</p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="career-value"><i class="bi bi-shield-check"></i>
                            <h3>Job Security &amp; Satisfaction</h3>
                            <p>The BFC Group has an average attrition rate of 4.5 years. This demonstrates that BFC Publications does not believe in "survival of the fittest." People who are looking for stability prefer working with us. Also, the organisation has an effective grievance redressal system, overseen by none other than the CEO.</p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="career-value"><i class="bi bi-mortarboard"></i>
                            <h3>Personal Growth</h3>
                            <p>The company places great value on its employees. As a result, frequent training programmes and corporate activities are held to build and improve their inter-personal skills.</p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="career-value"><i class="bi bi-award"></i>
                            <h3>Remuneration</h3>
                            <p>BFC Publications believes that everyone should have equal access to opportunities. The pay offered here is among the best in the industry. In addition to fixed income, the company also offers substantial incentives as well.</p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="career-value"><i class="bi bi-building"></i>
                            <h3>Workplace Atmosphere</h3>
                            <p>
                                The Company has a formal workplace culture with emphasis on productivity and code of conduct. Despite this, management strives to achieve a delicate balance between work and play by organising a variety of off-sites and other informal events.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-xxl px-lg-5 px-md-3 px-2 career-apply">
            <div class="career-shell">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="career-opening-panel">
                            <div class="career-kicker">Current Openings</div>
                            <h2>Find your role at BFC.</h2>
                            <p>Choose the role that best matches your skills and submit your application.</p>
                            <div class="career-job"><i class="bi bi-arrow-right"></i>DTP Operator</div>
                            <div class="career-job"><i class="bi bi-arrow-right"></i>Proofreader</div>
                            <div class="career-job"><i class="bi bi-arrow-right"></i>Publishing Consultant</div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="career-form-panel">
                            <h2>Interested?</h2>
                            <p>Share your details and the post you are applying for.</p>
                            <form action="" method="post" enctype="multipart/form-data">@csrf<div class="row g-3">
                                    <div class="col-md-6"><label class="form-label" for="career_name">Name</label><input
                                            class="form-control" id="career_name" name="name" type="text"
                                            placeholder="Enter Your Name" required></div>
                                    <div class="col-md-6"><label class="form-label" for="career_email">Email</label><input
                                            class="form-control" id="career_email" name="email" type="email"
                                            placeholder="Enter Your Email" required></div>
                                    <div class="col-md-6"><label class="form-label" for="career_phone">Phone
                                            Number</label><input class="form-control" id="career_phone" name="phone"
                                            type="tel" placeholder="Enter Your Phone Number" required></div>
                                    <div class="col-md-6"><label class="form-label" for="career_post">Post Applied
                                            for</label><input class="form-control" id="career_post" name="post" type="text"
                                            placeholder="Enter Post" required></div>
                                    <div class="col-12"><label class="form-label" for="career_resume">Upload
                                            Resume</label><input class="form-control" id="career_resume" name="resume"
                                            type="file" accept=".pdf,.doc,.docx"></div>
                                    <div class="col-12">
                                        <div class="form-check career-consent"><input class="form-check-input"
                                                id="career_consent" type="checkbox" required><label class="form-check-label"
                                                for="career_consent">I, hereby accord my consent to process my above mentioned personal data by BFC Publications Pvt. Ltd. for the purpose of employment, in accordance with the provisions of DPDP Act 2023.</label></div>
                                    </div>
                                    <div class="col-12"><button class="career-submit" type="submit">Submit
                                            Application</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection