@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.png);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Contact Us //</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> Email </h5>
                                <p class="m-0"  style="min-height: 50px;"><i class="fa fa-envelope-open text-primary me-2"></i>info@7horseembroiderymachine.com
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4"  style="min-height: 50px;">
                                <h5 class="text-uppercase"> Phone No. </h5>
                                <p class="mb-0"><i class="fa fa-phone-alt text-primary me-2" ></i>+91 97143 77742</p>
                                <p class="mb-0"><i class="margin"></i>+91 93769 53330</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4"  style="min-height: 50px;">
                                <h5 class="text-uppercase"> Address </h5>
                                <p class="m-0"><i class="fa fa-map-marker-alt text-primary me-2"></i>174, Ground Floor, Patel Street, Fulpada, A.K. Road, GIDC, Katargam, Surat, Gujarat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4614.982760449974!2d72.84585609999999!3d21.227697199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f872d88c11b%3A0x4f95dc9f42efb636!2s7%20Horse%20Embroidery%20Machine!5e1!3m2!1sen!2sin!4v1737959492375!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0">
                    </iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form id="contactForm" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Phone No." required pattern="^\d{10}$">
                                        <label for="mobile">Your Phone No.</label>
                                        <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" name="machine_type" id="machine_type" required>
                                            <option selected>Select A Machine Type</option>
                                            <option value="SingleSequence">SingleSequence</option>
                                            <option value="DualSequence">DualSequence</option>
                                            <option value="Cording">Cording</option>
                                            <option value="All Needle Sequence">All Needle Sequence</option>
                                            <option value="Lasser">Lasser</option>
                                        </select>
                                        <label for="machine_type">Machine Type</label>
                                    </div>
                                </div>                                                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subjects" name="subjects" placeholder="Subject" required>
                                        <label for="subjects">Subject</label>
                                        <div class="invalid-feedback">Please enter a subject.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="messages" name="messages" style="height: 100px" required></textarea>
                                        <label for="messages">Message</label>
                                        <div class="invalid-feedback">Please enter a message.</div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit" id="submitBtn">
                                        Send Message
                                    </button>
                                    <div class="spinner-border text-primary mt-3 d-none" role="status" id="loadingSpinner">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Success message alert -->
                        <div id="successMessage" class="alert alert-success mt-3 d-none" role="alert">
                            Your message has been sent successfully!
                        </div>
                        <!-- Error message alert -->
                        <div id="errorMessage" class="alert alert-danger mt-3 d-none" role="alert">
                            Something went wrong! Please try again.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {
            $('#contactForm').on('submit', function (e) {
                e.preventDefault();
                if (!this.checkValidity()) {
                    e.stopPropagation();
                    $(this).addClass('was-validated');
                    return;
                }
                var formData = new FormData(this);
                $('#submitBtn').prop('disabled', true);
                $('#loadingSpinner').removeClass('d-none');
                $.ajax({
                    url: '/send-contact-mail',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        $('#successMessage').removeClass('d-none');
                        $('#errorMessage').addClass('d-none');
                        $('#contactForm')[0].reset();
                        $('#contactForm').removeClass('was-validated');
                    },
                    error: function (xhr, status, error) {
                        $('#errorMessage').removeClass('d-none');
                        $('#successMessage').addClass('d-none');
                    },
                    complete: function () {
                        $('#submitBtn').prop('disabled', false);
                        $('#loadingSpinner').addClass('d-none');
                    }
                });
            });

            $('#contactForm input, #contactForm textarea').on('input', function () {
                if (this.checkValidity()) {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                } else {
                    $(this).removeClass('is-valid').addClass('is-invalid');
                }
            });
        });
    </script>
    
@endSection