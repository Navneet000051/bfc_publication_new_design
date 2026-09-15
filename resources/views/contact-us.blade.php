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

            .bfc_publishing_packages {
                padding: 40px 0 35px;
            }

            .bfc_publishing_packages .container {
                padding-left: 20px;
                padding-right: 20px;
            }

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
            top: -200px;
            right: 0;
            opacity: 0.2;
            width: 45rem;
        }

        /* contact page style start  */

        .bfc_publishing_address .bfc_address_card {
            height: 100%;
            min-height: 278px;
            padding: 30px 20px;
            background: #ffffff;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: all 0.3s ease;
        }

        .bfc_publishing_address .bfc_address_card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .bfc_publishing_address .bfc_address_icon {
            width: 88px;
            height: 88px;
            margin-bottom: 22px;
            border-radius: 50%;
            background: #cf464f7e;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bfc_publishing_address .bfc_address_icon i {
            color: var(--text-primary);
            font-size: 32px;
            line-height: 1;
        }


        .bfc_publishing_address .bfc_address_card h3 {
            margin: 0 0 20px;
            color: #102326;
            font-size: 24px;
            font-weight: 600;
            line-height: 1.2;
        }

        .bfc_publishing_address .bfc_address_card p {
            margin: 0;

            color: #52666a;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
        }

        .bfc_publishing_address .bfc_address_card a {
            color: var(--text-color-red);
            font-weight: 600;
            text-decoration: none;
        }

        .bfc_publishing_address .bfc_address_card a:hover {
            color: var(--text-primary);
            text-decoration: underline;
        }

        @media (max-width: 991.98px) {

            .bfc_publishing_address .bfc_address_card {
                min-height: 270px;
            }

            .bfc_publishing_address .bfc_address_icon {
                width: 82px;
                height: 82px;
            }

            .bfc_publishing_address .bfc_address_card h3 {
                font-size: 22px;
            }

        }

        @media (max-width: 575.98px) {


            .bfc_publishing_address .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .bfc_publishing_address .bfc_address_card {
                min-height: auto;
                padding: 30px 20px;
            }

            .bfc_publishing_address .bfc_address_icon {
                width: 78px;
                height: 78px;
                margin-bottom: 18px;
            }

            .bfc_publishing_address .bfc_address_icon i {
                font-size: 29px;
            }

            .bfc_publishing_address .bfc_address_card h3 {
                margin-bottom: 14px;
                font-size: 21px;
            }

            .bfc_publishing_address .bfc_address_card p {
                font-size: 15px;
            }

        }

        /* contact page style end  */
    </style>

    <section class="pricing-section2 py-md-5 py-4 position-relative">
        <div class="package_shadow">
            <img src="{{ asset('assets/img_new/home/package_shadow.svg') }}" alt="package_shadow">
        </div>
        <div class="container-xxl px-lg-5 px-md-3 px-2 position-relative pt-2">
            <div class="bfc_publishing_packages_content text-center">
                <h1>
                    <span>Reach Out</span> to Us
                </h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, distinctio atque quas laudantium
                    totam animi aliquam expedita ratione similique nisi.
                </p>
            </div>

            <div class="row py-5">
                <div class="col-md-6 bfc_publishing_address">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="bfc_address_card border bg-light">
                                <div class="bfc_address_icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h3>Address</h3>
                                <strong>BFC Publications Pvt Ltd</strong>
                                <p>
                                    <a class="fw-normal text-muted" target="_blank"
                                        href="https://maps.app.goo.gl/Nr9sSVbcWZR4fGjn6">
                                        CP-61, Viraj Khand, Gomti Nagar, Lucknow Uttar Pradesh, 226010.
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="bfc_address_card border bg-light">
                                <div class="bfc_address_icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <h3>Email us</h3>
                                <p>
                                    <a class="text-muted fw-normal" href="mailto:support@bfcpublications.com">
                                        support@bfcpublications.com</a><br>
                                    <a class="text-muted fw-normal" href="https://bfcpublications.com/" target="_blank">
                                        bfcpublications.com</a>

                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="bfc_address_card border bg-light">
                                <div class="bfc_address_icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <h3>Call us</h3>
                                <p>
                                    <a class="text-muted fw-normal" href="tel:5223514141"> +91-5223514141</a> <br>
                                    <a class="text-muted fw-normal" href="tel:6389700888"> +91-6389700888</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="bfc_address_card border bg-light">
                                <div class="bfc_address_icon">
                                    <i class="bi bi-chat-dots-fill"></i>
                                </div>
                                <h3>Live chat</h3>
                                <p>
                                    24/7 online support<br>
                                    <a href="#">Need help?</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border rounded-4 book-form-hero">
                        <form id="bookForm" action="" method="POST" class="bookform-set py-5 position-relative">
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
                                        <input type="number" name="phone" required id="popup_mobileno"
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
                                        <label class="form-label">Subject</label>
                                        <i class="input-icon fa-solid fa-book-open"></i>
                                        <input type="text" required name="subject" id="book_title" class="form-control"
                                            placeholder="Subject" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">
                                            I, hereby accord my consent to process my above mentioned personal data by BFC
                                            Publications Pvt. Ltd. for the purpose of Author support/Service Promotion, in
                                            accordance with the provisions of DPDP Act 2023.
                                            To know more
                                            <a href="https://bfcpublications.com/DPDP_Act" target="_blank"
                                                class="text-danger">
                                                Click Here</a></label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger1 w-100 py-2 rounded-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <section>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.6178669722544!2d81.02018001105627!3d26.852103962595262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be3cae4ed6733%3A0x91ec369254659c77!2sBFC%20Publications%20-%20Self%20Book%20Publisher!5e0!3m2!1sen!2sin!4v1787057822133!5m2!1sen!2sin"
            width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </section>

@endsection