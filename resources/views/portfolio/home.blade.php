@extends('layouts.app')

@section('title', 'Tanveer Hassan | Full Stack Laravel Developer')
@section('meta_description', 'Welcome to my portfolio. I am a web developer specializing in Laravel and modern web technologies.')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <img src="{{ asset('profile.png') }}" alt="Tanveer Hassan" class="rounded-circle mb-4 profile-img" width="150" height="150" style="object-fit: cover; border: 3px solid var(--secondary-color);" data-aos="zoom-in" data-aos-duration="1000">
                <h1 class="display-4 fw-bold mb-3 gradient-text" data-aos="fade-up" data-aos-delay="200">Hi, I'm Tanveer Hassan</h1>
                <p class="lead mb-4" data-aos="fade-up" data-aos-delay="400">Full Stack | Laravel Developer | PHP Developer | Laravel Vue Developer</p>
                <p class="mb-4" data-aos="fade-up" data-aos-delay="600">Your Laravel app is broken, slow, or stuck? I won't just patch it — I'll actually fix it.</p>
                <div class="d-flex justify-content-center gap-3" data-aos="fade-up" data-aos-delay="800">
                    <a href="{{ route('projects') }}" class="btn btn-light btn-lg">View My Work</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Get In Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upwork Reviews Section -->
<section class="section bg-light">
    <div class="container">
        <h2 class="text-center section-title" data-aos="fade-up">Client Reviews on Upwork</h2>
        <div class="row justify-content-center mb-5">
            <div class="col-auto">
                <div class="d-flex flex-wrap justify-content-center gap-4">
                    <div class="text-center">
                        <span class="badge bg-success px-3 py-2 fs-6"><i class="bi bi-briefcase me-2"></i>2 Active Projects</span>
                    </div>
                    <div class="text-center">
                        <span class="badge bg-primary px-3 py-2 fs-6"><i class="bi bi-patch-check-fill me-2"></i>Top Rated Plus</span>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center text-muted mb-5"><i class="bi bi-patch-check-fill text-success me-2"></i>Verified reviews from completed projects</p>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100 p-4 border-success" style="border-width: 2px !important;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-success"><i class="bi bi-circle-fill me-1" style="font-size: 0.5rem;"></i>In Progress</span>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <p class="card-text fst-italic">"Best dev I ever worked with. By far."</p>
                        <small class="text-muted">Fullstack PHP Laravel CTO - Dutch Educational Website</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100 p-4 border-success" style="border-width: 2px !important;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-success"><i class="bi bi-circle-fill me-1" style="font-size: 0.5rem;"></i>In Progress</span>
                        </div>
                        <p class="card-text">Currently working on urgent Laravel development tasks for this client.</p>
                        <small class="text-muted">Laravel Developer - Urgent Task</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100 p-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-success">5.0</span>
                        </div>
                        <p class="card-text fst-italic">"Tanveer went above and beyond to deliver outstanding results for my Laravel project. His expertise and attention to detail were exceptional. He also provided valuable insights that enhanced the overall functionality and user experience."</p>
                        <small class="text-muted">Laravel Bug Fix Project</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100 p-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-success">5.0</span>
                        </div>
                        <p class="card-text fst-italic">"I highly recommend Tanveer for Vue and Laravel development. He possesses a deep understanding of the internal workings of Vue.js and Laravel. Tanveer's professionalism and clear communication contributed to a seamless collaboration."</p>
                        <small class="text-muted">Laravel Website Bug Fix</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100 p-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-success">5.0</span>
                        </div>
                        <p class="card-text fst-italic">"Tanveer is a great developer and did an excellent job on all tasks assigned to him. Thank you and look forward to collaborating more in the future."</p>
                        <small class="text-muted">Web Developer (Long Term)</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100 p-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-success">5.0</span>
                        </div>
                        <p class="card-text fst-italic">"He understood right away what I was talking about and fulfilled all my wishes. He's very kind and responsive, that made working with him very pleasing. I would hire him again anytime!"</p>
                        <small class="text-muted">Website Font Test</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100 p-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-success">5.0</span>
                        </div>
                        <p class="card-text fst-italic">"Excellent work! He's very professional and gets the job done in a timely manner. I highly recommend him!"</p>
                        <small class="text-muted">Laravel Payment Module</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100 p-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="badge bg-success">5.0</span>
                        </div>
                        <p class="card-text fst-italic">"I hired Hassan for the second time and I'm totally happy again. He implemented everything I asked for and was always kind. Would hire him again anytime. :)"</p>
                        <small class="text-muted">Repeat Client</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What I Do Section -->
<section class="section">
    <div class="container">
        <h2 class="text-center section-title" data-aos="fade-up">Projects I Handle Best</h2>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-rocket-takeoff display-4 text-primary mb-3 floating"></i>
                        <h4 class="card-title">Build From Scratch</h4>
                        <p class="card-text">Custom Laravel applications built from the ground up with clean architecture and scalable code.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-bug display-4 text-primary mb-3 floating"></i>
                        <h4 class="card-title">Bug Fixing</h4>
                        <p class="card-text">Complex bug hunting and fixing. I find and resolve issues that others can't figure out.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-calendar-check display-4 text-primary mb-3 floating"></i>
                        <h4 class="card-title">Long-Term Support</h4>
                        <p class="card-text">Ongoing maintenance, updates, and feature development for your existing applications.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-lightning-charge display-4 text-primary mb-3 floating"></i>
                        <h4 class="card-title">Short-Term Support</h4>
                        <p class="card-text">Quick fixes, urgent deployments, and rapid feature implementations when you need them fast.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-wrench-adjustable display-4 text-primary mb-3 floating"></i>
                        <h4 class="card-title">Legacy Code Rescue</h4>
                        <p class="card-text">"Unfixable" legacy codebases needing a rescue specialist who thrives where others give up.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up">
                <div class="card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-speedometer2 display-4 text-primary mb-3 floating"></i>
                        <h4 class="card-title">Performance Optimization</h4>
                        <p class="card-text">Speed up slow applications, optimize database queries, and handle high-traffic scaling.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="section">
    <div class="container">
        <h2 class="text-center section-title" data-aos="fade-up">Featured Projects</h2>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Built From Scratch</span>
                        <h5 class="card-title">OpenAI Chatbot Platform</h5>
                        <p class="card-text">Admin and User Dashboard with chatbot training, complex reporting, tamper-proof activity logs, and product analytics.</p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">Vue.js</span>
                            <span class="badge bg-secondary">OpenAI API</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Education</span>
                        <h5 class="card-title">Eindexamensite</h5>
                        <p class="card-text">Dutch educational platform with real-time student-teacher chat, SSO integration, and optimized performance for students and educators.</p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">SSO</span>
                            <span class="badge bg-secondary">Real-time Chat</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-info text-dark mb-2">Healthcare</span>
                        <h5 class="card-title">Healthcare Learning Platform</h5>
                        <p class="card-text">Course catalog with QR code integration for instant class joining, filterable by specialty, course type, and pricing.</p>
                        <div class="d-flex flex-wrap gap-1">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">QR Codes</span>
                            <span class="badge bg-secondary">Course Catalog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('projects') }}" class="btn btn-outline-primary btn-lg">View All 11 Projects</a>
        </div>
    </div>
</section>

@endsection
