@extends('layouts.app')

@section('title', 'Contact | Tanveer Hassan')
@section('meta_description', 'Get in touch with me for web development projects, collaborations, or just to say hello.')

@section('content')
<!-- Contact Hero -->
<section class="hero-section text-center" style="padding: 60px 0;">
    <div class="container">
        <h1 class="display-4 fw-bold">Let's Talk</h1>
        <p class="lead">Ready to work with a developer who takes your project seriously? Let's connect!</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Information -->
            <div class="col-lg-5" data-aos="fade-right">
                <h3 class="mb-4">Contact Information</h3>
                <p class="text-muted mb-4">Feel free to reach out to me through any of the following channels. I'll try to respond as soon as possible.</p>

                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary text-white rounded-circle p-3 me-3">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">Email</h5>
                        <p class="text-muted mb-0">tanveerhasan.liaqat@gmail.com</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary text-white rounded-circle p-3 me-3">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">Location</h5>
                        <p class="text-muted mb-0">Lahore, Pakistan</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary text-white rounded-circle p-3 me-3">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <div>
                        <h5 class="mb-1">Availability</h5>
                        <p class="text-muted mb-0">Mon - Fri: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>

                <hr class="my-4">

                <h5 class="mb-3">Connect With Me</h5>
                <div class="d-flex gap-3">
                    <a href="https://github.com/TanveerHsn" target="_blank" class="btn btn-outline-primary rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/tanveerhsn/" target="_blank" class="btn btn-outline-primary rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="mailto:tanveerhasan.liaqat@gmail.com" class="btn btn-outline-primary rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="card shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="mb-4">Send Me a Message</h3>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Your Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           id="name" name="name" value="{{ old('name') }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Your Email *</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           id="email" name="email" value="{{ old('email') }}" required>
                                </div>

                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                           id="subject" name="subject" value="{{ old('subject') }}" required>
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror"
                                              id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="bi bi-send me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Optional) -->
<section class="section bg-light p-0">
    <div class="container-fluid p-0">
        <div class="ratio ratio-21x9" style="max-height: 400px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435519.2274101051!2d74.00471585!3d31.4832092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1635959481000!5m2!1sen!2s"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>
@endsection
