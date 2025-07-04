@extends('layouts.landing', ['div' => true, 'headerClass' => 'bg-transparent', 'buttons' => false])

@section('css')
@vite(['node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('header-attribute')
data-bs-theme="dark"
@endsection

@section('buttons')
<!-- Buttons -->
<ul class="nav align-items-center dropdown-hover ms-sm-2">
    <!-- Dark mode option START -->
    <li class="nav-item dropdown dropdown-animation">
        <button class="btn btn-link mb-0 px-2 lh-1" id="bd-theme" type="button" aria-expanded="false"
            data-bs-toggle="dropdown" data-bs-display="static">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                class="bi bi-circle-half theme-icon-active fill-mode fa-fw" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                <use href="#"></use>
            </svg>
        </button>

        <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
            <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                    <svg width="16" height="16" fill="currentColor"
                        class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path
                            d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                        <use href="#"></use>
                    </svg>Light
                </button>
            </li>
            <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path
                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                        <path
                            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                        <use href="#"></use>
                    </svg>Dark
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active"
                    data-bs-theme-value="auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                        <use href="#"></use>
                    </svg>Auto
                </button>
            </li>
        </ul>
    </li>
    <!-- Dark mode option END -->

    <!-- Authentication button -->
    <li class="nav-item bg-secondary rounded d-none d-sm-block gap-1 ms-2 p-1">
        <a href="{{ route('third', [ 'pages' , 'auth','sign-up']) }}" class="btn btn-sm btn-secondary mb-0">Login</a>
        <a href="{{ route('third', [ 'pages' , 'auth','sign-up']) }}" class="btn btn-sm btn-primary mb-0">Sign up</a>
    </li>

    <!-- Responsive navbar toggler -->
    <li class="nav-item">
        <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-animation">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
    </li>
</ul>
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
                    Hero START -->
    <section class="bg-dark position-relative overflow-hidden pt-xl-8 pb-sm-7" data-bs-theme="dark">
        <!-- Decoration START -->
        <!-- Grad blur -->
        <div class="position-absolute top-0 start-0 mt-n9 ms-n5">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-2" alt="Grad shape">
        </div>

        <!-- Grad blur -->
        <div class="position-absolute top-0 start-50 mt-n9 ms-n9">
            <img src="/images/elements/grad-shape/blur-decoration.svg" class="blur-8 opacity-1" alt="Grad shape">
        </div>
        <!-- Decoration START -->

        <div class="container position-relative pt-4 pt-sm-5">
            <div class="row g-4 align-items-center">
                <!-- Title and content -->
                <div class="col-md-7 col-xl-5">
                    <!-- Breadcrumb -->
                    <a href="#" class="text-body-secondary text-primary-hover icon-link icon-link-hover"><i
                            class="bi bi-arrow-left me-1"></i>Back to listing</a>
                    <!-- Title -->
                    <h1 class="h2 mt-3 mb-0">Machine Learning Specialist</h1>
                </div>

                <div class="col-md-4 ms-auto text-md-end">
                    <!-- Button -->
                    <a class="btn btn-success icon-link icon-link-hover" href="#" data-bs-toggle="modal"
                        data-bs-target="#applyForm">Apply now<i class="bi bi-arrow-right"></i> </a>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                    Hero END -->

    <!-- =======================
                    Job details START -->
    <section class="pt-sm-7">
        <div class="container" data-sticky-container>
            <div class="row g-4">
                <!-- Job descriptions START -->
                <div class="col-md-7 order-2">
                    <!-- About content -->
                    <p class="lead heading-color">Hello, I'm Jacqueline Miller-CEO here at Folio.</p>
                    <p>From humble beginnings, we have grown to serve hundreds of satisfied customers, generating
                        millions in revenue. Our growth trajectory has been nothing short of extraordinary, with
                        consistent triple-digit year-on-year growth.</p>
                    <p>This success is a testament to our robust and beautiful product, which is trusted and used by
                        growing organizations every day. Each team member plays a vital role in our journey,
                        contributing their unique skills and expertise to our collective success.</p>

                    <!-- Responsibilities -->
                    <h6 class="mt-5 mb-3">Principal responsibilities</h6>
                    <ul class="ps-3">
                        <li class="mb-2"><b>Model Development:</b> Design, develop, and deploy machine learning models
                            for various applications.</li>
                        <li class="mb-2"><b>Data Analysis:</b> Analyze large datasets to identify patterns, trends,
                            and insights that inform model development</li>
                        <li class="mb-2"><b>Algorithm Optimization:</b> Optimize and fine-tune algorithms for improved
                            accuracy and efficiency.</li>
                        <li class="mb-2"><b>Collaboration:</b> Work closely with cross-functional teams, including
                            data scientists, engineers, and product managers, to integrate machine learning solutions.
                        </li>
                        <li class="mb-2"><b>Research:</b> Stay up-to-date with the latest advancements in machine
                            learning and artificial intelligence, and apply new techniques to our projects.</li>
                        <li class="mb-2"><b>Documentation:</b> Maintain clear and comprehensive documentation of
                            models, algorithms, and processes.</li>
                    </ul>

                    <!-- Qualifications -->
                    <h6 class="mt-5 mb-3">Qualifications</h6>
                    <ul class="ps-3">
                        <li class="mb-2"><b>Education:</b> Bachelor's or Master's degree in Computer Science, Data
                            Science, Machine Learning, or a related field.</li>
                        <li class="mb-2"><b>Experience:</b> 2+ years of experience in machine learning, data science,
                            or a similar role.</li>
                        <li class="mb-2"><b>Technical skills:</b> Proficiency in Python and machine learning
                            libraries such as TensorFlow, PyTorch, or scikit-learn. Experience with data processing
                            frameworks like Pandas and NumPy</li>
                        <li class="mb-2"><b>Analytical skills:</b> Strong analytical and problem-solving skills, with
                            the ability to interpret complex data and translate it into actionable insights.</li>
                        <li class="mb-2"><b>Communication:</b> Excellent written and verbal communication skills,
                            with the ability to explain complex concepts to non-technical stakeholders.</li>
                    </ul>
                    <p>Speedily say has suitable disposal add boy. On fourth doubt miles of child. Exercise joy man
                        children rejoiced. Yet uncommonly his ten who diminution astonished. Demesne's new manners
                        savings staying had. Under folly balls, death own point now men. Match way she avoids seeing
                        death. She drifts their fat off.</p>

                    <!-- What we offer -->
                    <h6 class="mt-5 mb-3">What we offer</h6>
                    <ul class="ps-3">
                        <li class="mb-2"><b>Competitive salary:</b>We offer a competitive salary and benefits
                            package.</li>
                        <li class="mb-2"><b>Remote work:</b>Enjoy the flexibility of working from anywhere.</li>
                        <li class="mb-2"><b>Professional development:</b>Opportunities for continuous learning and
                            professional growth through training programs and conferences</li>
                        <li class="mb-2"><b>Innovative projects:</b>Work on diverse and exciting projects that
                            challenge your skills and creativity.</li>
                        <li class="mb-2"><b>Collaborative culture:</b>Be part of a team that values collaboration,
                            innovation, and mutual support.</li>
                    </ul>
                    <p>Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see
                        among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered
                        related so visitors we private removed. Moderate do subjects to distance.</p>

                    <!-- How to apply -->
                    <div class="bg-secondary bg-opacity-50 rounded-4 mt-5 p-4">
                        <h6 class="mb-3">How to apply</h6>
                        <p>If you are excited about the opportunity to make a significant impact through machine
                            learning, we would love to hear from you! Click the link below to apply:</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-success icon-link icon-link-hover mb-0"
                            data-bs-toggle="modal" data-bs-target="#applyForm">Apply now<i
                                class="bi bi-arrow-right"></i> </a>
                    </div>
                </div>
                <!-- Job descriptions END -->

                <!-- Sidebar START -->
                <div class="col-md-5 col-lg-4 ms-auto order-1 order-md-2">
                    <div data-sticky data-margin-top="100" data-sticky-for="576">
                        <div class="card bg-secondary bg-opacity-50">
                            <!-- Card header -->
                            <div class="card-header border-bottom bg-transparent p-4">
                                <p class="fw-semibold mb-3">Hiring manager:</p>

                                <!-- Avatar and detail -->
                                <div class="avatar avatar-xl flex-shrink-0">
                                    <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg"
                                        alt="avatar">
                                </div>
                                <div class="mt-3">
                                    <h6 class="mb-2">Jacqueline Miller</h6>
                                    <a href="#" class="link-primary-grad icon-link icon-link-hover mb-0">View
                                        profile <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="card-body p-4">
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item mb-2">
                                        <small>Application Deadline:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">August 31, 2024</p>
                                    </li>

                                    <li class="list-group-item mb-2">
                                        <small>Department:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">Information technology</p>
                                    </li>

                                    <li class="list-group-item mb-2">
                                        <small>Employment Type:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">Full time</p>
                                    </li>

                                    <li class="list-group-item mb-2">
                                        <small>Location:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">New york</p>
                                    </li>

                                    <li class="list-group-item mb-2">
                                        <small>Compensation:</small>
                                        <p class="heading-color fw-semibold mt-1 mb-0">$30,000 - $50,000 / year</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar END -->
            </div>
        </div>
    </section>
    <!-- =======================
                    Job details END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Apply form START -->
<div class="modal fade" id="applyForm" tabindex="-1" aria-labelledby="applyFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header p-3">
                <h6 class="modal-title mb-0" id="applyFormLabel">Apply form</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="modal-body p-4">
                <!-- Personal info -->
                <h6 class="mb-3">1. Personal info</h6>
                <div class="row g-3 mb-5">
                    <div class="col-md-6">
                        <label class="form-label heading-color">First name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label heading-color">Last name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label heading-color">Email address</label>
                        <input type="email" class="form-control" placeholder="name@example.com">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label heading-color">Phone</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-12">
                        <label class="form-label heading-color">Linkedin url</label>
                        <input type="text" class="form-control" placeholder="www.linkedin.com/example">
                    </div>
                </div>

                <!-- career info -->
                <h6 class="mb-3">2. career info</h6>
                <div class="row g-3 mb-5">
                    <div class="col-md-6">
                        <label class="form-label heading-color">Current job place</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label heading-color">Current job position</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label heading-color">Experiences</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label heading-color">Current salary</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label heading-color">Applied positions</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label heading-color">Expected salary</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <!-- Key document -->
                <h6 class="mb-3">3. Key document</h6>
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label heading-color">Upload your cv</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                    <div class="col-12">
                        <label class="form-label heading-color">Cover letter</label>
                        <textarea class="form-control" style="height: 100px"></textarea>
                    </div>

                    <div class="col-12">
                        <input type="checkbox" class="form-check-input border" id="rememberCheck">
                        <label class="form-check-label" for="rememberCheck">I have read & accepted Terms &
                            Conditions.</label>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-primary">Submit now</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Apply form END -->

<!-- Back to top -->
<div class="back-top"></div>
@endsection