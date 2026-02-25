@extends('layouts.app')

@section('title', 'Projects | Tanveer Hassan')
@section('meta_description', 'Explore my portfolio of web development projects built with Laravel, Vue.js, and modern technologies.')

@section('content')
<!-- Projects Hero -->
<section class="hero-section text-center" style="padding: 60px 0;">
    <div class="container">
        <h1 class="display-4 fw-bold">My Projects</h1>
        <p class="lead">A showcase of Laravel applications I've built and improved</p>
    </div>
</section>

<!-- Projects Filter -->
<section class="section">
    <div class="container">
        <!-- Filter Buttons -->
        <div class="text-center mb-5">
            <div class="btn-group flex-wrap" role="group">
                <button type="button" class="btn btn-outline-primary active" data-filter="all">All</button>
                <button type="button" class="btn btn-outline-primary" data-filter="scratch">Built From Scratch</button>
                <button type="button" class="btn btn-outline-primary" data-filter="improved">Improved & Optimized</button>
                <button type="button" class="btn btn-outline-primary" data-filter="education">Education</button>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4">
            <!-- Project 1: Eindexamensite -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="improved education">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Education</span>
                        <span class="badge bg-success mb-2">Improved</span>
                        <h5 class="card-title">Eindexamensite</h5>
                        <p class="card-text">Educational platform serving students and educators. Stabilized the codebase, improved performance, optimized database queries, enhanced backend logic, and refined the frontend. Improved real-time student–teacher chat module and contributed to SSO integration.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">MySQL</span>
                            <span class="badge bg-secondary">SSO</span>
                            <span class="badge bg-secondary">Real-time Chat</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>

            <!-- Project 2: OpenAI Chatbot -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="scratch">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Built From Scratch</span>
                        <h5 class="card-title">OpenAI Chatbot Platform</h5>
                        <p class="card-text">Built Admin and User Dashboard from scratch. Centralizes user management, chatbot training data, and granular control over users, roles, and access. Features file uploads for AI training, complex reporting with exports, tamper-proof activity logs, and product analytics.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">Vue.js</span>
                            <span class="badge bg-secondary">OpenAI API</span>
                            <span class="badge bg-secondary">MySQL</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>

            <!-- Project 3: eBook Publisher -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="improved">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Improved</span>
                        <h5 class="card-title">eBook Partnership</h5>
                        <p class="card-text">Resolved technical issues to improve site stability and performance. Implemented new features to enhance user experience and support business needs. Optimized workflows for smoother platform operation.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">Performance</span>
                            <span class="badge bg-secondary">Bug Fixes</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                        <a href="https://ebookpartnership.com/" target="_blank" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-box-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 4: Houston Gold Merchants -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="scratch">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Built From Scratch</span>
                        <h5 class="card-title">Houston Gold Merchants</h5>
                        <p class="card-text">Designed and implemented a responsive catalog interface with advanced product filtering. Built structured navigation, secure user login, and contact form handling. Deployed on Heroku for scalability and performance.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">Heroku</span>
                            <span class="badge bg-secondary">Product Catalog</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>

            <!-- Project 5: M-Geough -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="scratch">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Built From Scratch</span>
                        <h5 class="card-title">M-Geough</h5>
                        <p class="card-text">Developed a sleek, filterable catalog site for furniture, lighting, fabrics, and wallcoverings. Built responsive product catalog, filter/search functionality by product type, manufacturer, or collection. Created collection & manufacturer pages for designer partnerships.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">Product Catalog</span>
                            <span class="badge bg-secondary">Filtering</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>

            <!-- Project 6: Job Seeker Website -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="improved">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Bug Fix</span>
                        <h5 class="card-title">Job Seeker Platform</h5>
                        <p class="card-text">Identified and resolved a critical bug affecting website stability and user experience. Debugged and optimized backend processes for smooth functionality. Improved website performance and reliability by addressing underlying code issues.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">Debugging</span>
                            <span class="badge bg-secondary">Optimization</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>

            <!-- Project 7: Healthcare Platform -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="scratch education">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Healthcare</span>
                        <span class="badge bg-warning text-dark mb-2">New Features</span>
                        <h5 class="card-title">Healthcare Learning Platform</h5>
                        <p class="card-text">Developed a filterable and searchable course listing system for healthcare education. Browsing by specialty, course type (in-person/webinar), and price. Implemented QR code functionality for students to scan and join classes instantly.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">QR Codes</span>
                            <span class="badge bg-secondary">Course Catalog</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>

            <!-- Project 8: Full Version Buy -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="improved">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-info text-dark mb-2">Migration</span>
                        <h5 class="card-title">Full Version Buy</h5>
                        <p class="card-text">Migrated product from PHP to Laravel. Resolved several critical bugs, enhancing overall performance and reliability of the product through the framework upgrade.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">PHP to Laravel</span>
                            <span class="badge bg-secondary">Migration</span>
                            <span class="badge bg-secondary">Bug Fixes</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>

            <!-- Project 9: S2C -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="improved">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Improved</span>
                        <h5 class="card-title">S2C Platform</h5>
                        <p class="card-text">Resolved technical issues to improve site stability and performance. Implemented new features to enhance user experience and support business needs.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">Performance</span>
                            <span class="badge bg-secondary">New Features</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>

            <!-- Project 10: PWA -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="improved">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Improved</span>
                        <h5 class="card-title">Progressive Web App</h5>
                        <p class="card-text">Resolved technical issues to improve site stability and performance. Implemented new features to enhance user experience. Optimized workflows for smoother platform operation and provided ongoing improvements.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Vue.js</span>
                            <span class="badge bg-secondary">PWA</span>
                            <span class="badge bg-secondary">Performance</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>

            <!-- Project 11: Tallyfy -->
            <div class="col-lg-4 col-md-6 project-item" data-aos="fade-up" data-category="improved">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Improved</span>
                        <h5 class="card-title">Tallyfy</h5>
                        <p class="card-text">Workflow automation platform. Responsible for backend development including database design, coding, testing, debugging, refactoring, code review, problem localization, and building an email system.</p>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="badge bg-secondary">Laravel</span>
                            <span class="badge bg-secondary">Workflow Automation</span>
                            <span class="badge bg-secondary">Email System</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0">
                        <span class="text-muted"><i class="bi bi-briefcase me-1"></i>Full Stack Laravel Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section text-center" style="background: linear-gradient(135deg, #0d1117 0%, #064e3b 100%);">
    <div class="container">
        <h2 class="mb-4 text-white">Have a project in mind?</h2>
        <p class="lead mb-4 text-white">Ready to work with a developer who takes your project seriously? Let's talk.</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get In Touch</a>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('[data-filter]').forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;

            document.querySelectorAll('[data-filter]').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            document.querySelectorAll('.project-item').forEach(item => {
                if (filter === 'all' || item.dataset.category.includes(filter)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush
