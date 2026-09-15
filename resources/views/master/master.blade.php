<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BFC Publications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css"
        integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css_new/style.css') }}">
</head>

<body>
    @include('master.header')

    <main class="content">
        @yield('content')

        <!-- Modal -->
        <div class="modal fade start_bfcpublishing_modal" id="start_bfcpublishing_modal" tabindex="-1"
            aria-labelledby="start_bfcpublishing_modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-transparent">
                    <!-- Modal Header -->
                    <div class="modal-header border-0 p-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body p-0">
                        <div class="card border rounded-4 book-form-hero">
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
                                            <input type="email" name="email" required id="popup_email"
                                                class="form-control" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Book Title</label>
                                            <i class="input-icon fa-solid fa-book-open"></i>
                                            <input type="text" required name="book_title" id="book_title"
                                                class="form-control" placeholder="Book Title" />
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
                                            <select name="book_published" id="book_published" class="form-control"
                                                required>
                                                <option value="">-- Select Option --</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">I consent to BFC
                                                Publications
                                                processing my data for author support and service updates, per
                                                the <a href="https://bfcpublications.com/DPDP_Act" target="_blank"
                                                    class="text-danger">DPDP Act 2023</a>.</label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-danger1 w-100 py-2 rounded-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .start_bfcpublishing_modal .btn-close {
                    position: absolute;
                    right: 17px;
                    top: 17px;
                    z-index: 9999;
                }
            </style>
        </div>
    </main>

    @include('master.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script src="{{ asset('assets/js_new/scripts.js') }}"></script>

</body>

</html>