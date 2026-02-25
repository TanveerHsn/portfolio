@extends('layouts.app')

@section('title', 'About | Tanveer Hassan')
@section('meta_description', 'Learn more about me, my skills, experience, and passion for web development.')

@section('content')
<!-- About Hero -->
<section class="hero-section text-center" style="padding: 60px 0;">
    <div class="container">
        <h1 class="display-4 fw-bold">About Me</h1>
        <p class="lead">Get to know the person behind the code</p>
    </div>
</section>

<!-- About Content -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <img src="{{ asset('profile.png') }}" alt="Tanveer Hassan" class="img-fluid rounded shadow profile-img" style="max-width: 350px; border: 3px solid var(--secondary-color);" data-aos="fade-right">
            </div>
            <div class="col-lg-7">
                <h2 class="mb-4 gradient-text" data-aos="fade-left">Hello, I'm Tanveer Hassan</h2>
                <p class="lead text-muted mb-4">Full Stack | Laravel Developer | PHP Developer | Laravel Vue Developer</p>
                <p>Your Laravel app is broken, slow, or stuck and you need someone who won't just patch it, but actually fix it. I'm a dedicated full-stack developer who treats your project as a business asset, not just a task.</p>

                <h5 class="mt-4 mb-3 text-primary">How I Work</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Study your existing code thoroughly before touching anything</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Write clean, pixel-perfect, and well-structured code</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Avoid over-engineering, prioritizing ROI over lines of code</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Communicate clearly in simple, non-technical language</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Treat your project as a business asset, not just a task</li>
                </ul>

                <div class="row mt-4">
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><strong>Name:</strong> Tanveer Hassan</li>
                            <li class="mb-2"><strong>Email:</strong> tanveerhasan.liaqat@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li class="mb-2"><strong>Location:</strong> Lahore, Pakistan</li>
                            <li class="mb-2"><strong>Availability:</strong> Open for projects</li>
                        </ul>
                    </div>
                </div>

                <a href="#" class="btn btn-primary btn-lg mt-3">
                    <i class="bi bi-download me-2"></i>Download Resume
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="section bg-light">
    <div class="container">
        <h2 class="text-center section-title" data-aos="fade-up">My Skills</h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h4 class="mb-3">Technical Skills</h4>

                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>PHP / Laravel</span>
                        <span>90%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" style="width: 90%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>HTML / CSS / Bootstrap</span>
                        <span>95%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" style="width: 95%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>JavaScript</span>
                        <span>80%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <span>MySQL / Database</span>
                        <span>85%</span>
                    </div>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-primary" style="width: 85%"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <h4 class="mb-3">Technologies I Use</h4>
                <div class="d-flex flex-wrap">
                    <span class="skill-badge">Laravel</span>
                    <span class="skill-badge">PHP</span>
                    <span class="skill-badge">JavaScript</span>
                    <span class="skill-badge">Bootstrap</span>
                    <span class="skill-badge">MySQL</span>
                    <span class="skill-badge">Git</span>
                    <span class="skill-badge">REST API</span>
                    <span class="skill-badge">Vue.js</span>
                    <span class="skill-badge">Tailwind CSS</span>
                    <span class="skill-badge">Docker</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Me Section -->
<section class="section">
    <div class="container">
        <h2 class="text-center section-title" data-aos="fade-up">Why Clients Choose Me</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-award display-5 text-primary mb-3"></i>
                        <h5 class="card-title">Top-Rated Plus</h5>
                        <p class="card-text">Proven track record delivering mission-critical software with consistently excellent reviews.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-tools display-5 text-primary mb-3"></i>
                        <h5 class="card-title">Rescue Specialist</h5>
                        <p class="card-text">I thrive where others give up on messy, complex codebases that seem "unfixable".</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-lightbulb display-5 text-primary mb-3"></i>
                        <h5 class="card-title">Founder Mindset</h5>
                        <p class="card-text">I focus on your product's long-term health, not just the current ticket.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-file-earmark-text display-5 text-primary mb-3"></i>
                        <h5 class="card-title">Clear Documentation</h5>
                        <p class="card-text">Your system will never become a mystery to future developers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-graph-up-arrow display-5 text-primary mb-3"></i>
                        <h5 class="card-title">High-Traffic Expert</h5>
                        <p class="card-text">Experience with websites handling 10,000+ users and complex performance requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card h-100 p-3">
                    <div class="card-body">
                        <i class="bi bi-chat-dots display-5 text-primary mb-3"></i>
                        <h5 class="card-title">Clear Communication</h5>
                        <p class="card-text">I explain technical concepts in simple, non-technical language you can understand.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-primary text-center" style="background: linear-gradient(135deg, #0d1117 0%, #064e3b 100%) !important;">
    <div class="container">
        <h2 class="mb-4 text-white">Ready to take your project to the next level?</h2>
        <p class="lead mb-4 text-white">Let's build a robust, scalable, and high-performance solution that delivers real results.</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Let's Talk</a>
    </div>
</section>
@endsection
