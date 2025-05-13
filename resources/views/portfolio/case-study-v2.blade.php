@extends('layouts.landing', ['headerClass' => 'header-absolute', 'buttons' => true])

@section('css')
@vite(['node_modules/glightbox/dist/css/glightbox.css', 'node_modules/swiper/swiper-bundle.min.css'])
@endsection

@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>
	<!-- =======================
Project content START -->
	<section class="position-relative pt-6 pt-xl-7 overflow-hidden">
		<!-- Blur decoration -->
		<div class="position-absolute end-0 top-0">
			<img src="/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-1 blur-8 h-300px rotate-335" alt="Grad shape">
		</div>

		<!-- Main image -->
		<div class="container-fluid px-xxl-5 pt-2">
			<div class="h-300px h-sm-400px h-xl-500px rounded-4 overflow-hidden" data-jarallax data-speed="0.6" style="background:url(/images/portfolio/05.jpg) no-repeat; background-size:cover; background-position: center;"></div>
		</div>

		<!-- Content -->
		<div class="container pt-6 pt-xl-7">
			<div class="row g-4" data-sticky-container>

				<!-- Left side content START -->
				<div class="col-md-7 col-lg-8">
					<!-- Breadcrumb -->
					<nav class="mb-2" aria-label="breadcrumb">
						<ol class="breadcrumb pt-0">
							<li class="breadcrumb-item"><a href="{{ route('any', 'index') }}">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Portfolio</a></li>
							<li class="breadcrumb-item active" aria-current="page">Portfolio case study v2</li>
						</ol>
					</nav>

					<!-- Title -->
					<h1 class="h2 mb-3">Mobile app development</h1>
					<p class="lead">Ideas are the seeds of innovation. They can originate from personal experiences, observations, or the desire to solve a problem.</p>

					<!-- Overview -->
					<h6 class="mt-5 mb-3"><span class="text-primary me-2">01.</span>Overview</h6>
					<p>Design a clean, intuitive interface that provides an exceptional user experience. Ensure ease of navigation and accessibility for all users, including those with disabilities. Implement a robust set of features including secure payment gateways, real-time push notifications, and comprehensive user analytics. Incorporate a seamless shopping experience with a well-structured product catalog and efficient checkout process.</p>
					<!-- List -->
					<ul class="list-inline">
						<li class="list-inline-item"> <a class="btn btn-secondary btn-sm mb-lg-0" href="#">Branding</a> </li>
						<li class="list-inline-item"> <a class="btn btn-secondary btn-sm mb-lg-0" href="#">Packaging</a> </li>
						<li class="list-inline-item"> <a class="btn btn-secondary btn-sm mb-lg-0" href="#">UI/UX design</a> </li>
					</ul>

					<!-- The Challenge -->
					<h6 class="mt-5 mb-3"><span class="text-primary me-2">02.</span>The Challenge</h6>
					<p><span class="dropcap fs-2 heading-color bg-secondary bg-opacity-50 rounded px-2">I</span>ntegrating multiple third-party services, such as payment gateways, social media logins, and user analytics tools, presented a significant challenge. Ensuring these integrations worked harmoniously without compromising the app's performance was crucial. Additionally, securing user data and privacy, particularly during transactions, required robust encryption and compliance with data protection regulations to build user trust.</p>
					<p>Delivering the project within a stringent timeline necessitated meticulous planning and efficient execution. Coordinating among different teams, managing resources effectively, and adhering to the project schedule were vital to meeting the deadline without compromising on quality.</p>
					<!-- List -->
					<ul class="list-group list-group-borderless">
						<li class="list-group-item d-flex heading-color"><i class="bi bi-check-lg text-success me-2"></i>Integrating multiple third-party services seamlessly.</li>
						<li class="list-group-item d-flex heading-color"><i class="bi bi-check-lg text-success me-2"></i>Ensuring robust security and privacy for user data.</li>
						<li class="list-group-item d-flex heading-color"><i class="bi bi-check-lg text-success me-2"></i>Meeting strict project deadlines while maintaining quality.</li>
						<li class="list-group-item d-flex heading-color"><i class="bi bi-check-lg text-success me-2"></i>Providing a consistent user experience across all devices and platforms.</li>
						<li class="list-group-item d-flex heading-color"><i class="bi bi-check-lg text-success me-2"></i>Designing for scalability to handle increased user traffic and data</li>
					</ul>
				</div>
				<!-- Left side content END -->

				<!-- Right side content START -->
				<div class="col-md-5 col-lg-4">
					<div data-sticky data-margin-top="100" data-sticky-for="576">
						<div class="card card-body bg-secondary-grad rounded-4 p-4 ms-md-4">
							<!-- List -->
							<ul class="list-group list-group-borderless">
								<li class="list-group-item mb-3">
									<small>Client</small>
									<p class="heading-color fw-semibold mt-1 mb-0">Stackbros Agency</p>
								</li>

								<li class="list-group-item mb-3">
									<small>Category</small>
									<p class="heading-color fw-semibold mt-1 mb-0">UI/UX design</p>
								</li>

								<li class="list-group-item mb-3">
									<small>Location</small>
									<p class="heading-color fw-semibold mt-1 mb-0">489 Depot Road Midland</p>
								</li>

								<li class="list-group-item mb-3">
									<small>Time spent</small>
									<p class="heading-color fw-semibold mt-1 mb-0">2023, 4 months</p>
								</li>

								<li class="list-group-item d-grid mb-0">
									<a href="#" class="btn btn-dark mb-0">View project<i class="bi bi-box-arrow-up-right ms-2"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Right side content END -->
			</div>

			<!-- Image gallery START -->
			<div class="row g-4 align-items-end mt-4 mt-sm-6">
				<!-- Image item -->
				<div class="col-md-7">
					<img src="/images/portfolio/01.jpg" class="rounded-4" alt="portfolio image">
				</div>

				<!-- Image item -->
				<div class="col-md-4 ms-auto">
					<img src="/images/portfolio/03.jpg" class="rounded-4 position-relative" alt="portfolio image">
				</div>

				<!-- Image item -->
				<div class="col-md-6 mx-auto">
					<img src="/images/portfolio/04.jpg" class="rounded-4 mt-md-n6" alt="portfolio image">
				</div>
			</div>
			<!-- Image gallery END -->

			<!-- Quote -->
			<div class="card card-body bg-secondary bg-opacity-50 p-sm-5 mt-5 mt-sm-7">
				<q class="fs-6 heading-color">Too months nay end change relied who beauty wishes matter. Shew of john real park so rest we on. Ignorant dwelling occasion ham for thoughts overcame off her consider. Polite it elinor is depend.</q>
				<!-- Avatar -->
				<div class="d-flex align-items-center mt-4">
					<!-- Avatar -->
					<div class="avatar">
						<img class="avatar-img rounded-circle" src="/images/avatar/09.jpg" alt="avatar">
					</div>
					<!-- Info -->
					<div class="ms-3">
						<h6 class="mb-0">Emma Watson</h6>
						<small>CEO, Co-founder</small>
					</div>
				</div>
			</div>

			<!-- Result START -->
			<div class="row g-lg-4 mt-6">
				<!-- Result -->
				<div class="col-lg-5">
					<h6 class="mb-3"><span class="text-primary me-2">03.</span>Result</h6>
					<p class="lead mb-lg-4">Two assure Edward whence the was. Who worthy yet ten boys denote wonder. Weeks views her sight old tears sorry. Additions can suspected its concealed put furnished.</p>
				</div>

				<div class="col-lg-7 col-xl-6 ms-auto">
					<p>Partnering with experts, seeking mentorship, and building a network of like-minded individuals can provide valuable insights and support.</p>

					<!-- Skillset START -->
					<div class="row row-cols-2 row-cols-md-3 g-4 mt-1">
						<!-- Item -->
						<div class="col">
							<h2 class="mb-0">22<span class="text-primary mb-0">%</span></h2>
							<p class="mb-0">Increase in time spent on website</p>
						</div>

						<!-- Item -->
						<div class="col">
							<h2 class="mb-0">4.5<span class="text-primary mb-0">M</span></h2>
							<p class="mb-0">View this project got across our social media network</p>
						</div>

						<!-- Item -->
						<div class="col">
							<h2 class="mb-0">$12.8<span class="text-primary mb-0">M</span></h2>
							<p class="mb-0">Total raised in funding so far</p>
						</div>
					</div>
					<!-- Skillset END -->
				</div>
			</div>
			<!-- Result END -->

			<hr class="mt-5 mb-4"> <!-- Divider -->

			<!-- Pagination -->
			<ul class="pagination pagination-border-none d-flex justify-content-between mb-0">
				<li>
					<ul class="list-unstyled">
						<li class="page-item">
							<a class="page-link" href="#"><i class="bi bi-arrow-left me-2 rtl-flip"></i>Prev project</a>
						</li>
					</ul>
				</li>
				<li>
					<ul class="list-unstyled">
						<li class="page-item active"><a class="page-link" href="#"><i class="bi bi-grid-fill"></i></a></li>
					</ul>
				</li>
				<li>
					<ul class="list-unstyled">
						<li class="page-item">
							<a class="page-link" href="#">Next project<i class="bi bi-arrow-right ms-2 rtl-flip"></i></a>
						</li>
					</ul>
				</li>
			</ul>

		</div>
	</section>
	<!-- =======================
Project content END -->

	<!-- =======================
CTA START -->
	<section class="pt-0">
		<div class="container">
			<div class="bg-secondary position-relative rounded-3 overflow-hidden p-4 p-sm-6">
				<!-- BG pattern -->
				<div class="position-absolute end-0 top-0 rotate-343 mt-n5 me-n8">
					<img src="/images/elements/grad-shape/05.png" class="h-200px h-md-300px h-lg-500px" alt="bg pattern">
				</div>

				<!-- BG pattern -->
				<div class="position-absolute start-0 top-0 rotate-343 mt-n5 ms-n6">
					<img src="/images/elements/grad-shape/11.png" class="h-200px blur-2" alt="bg pattern">
				</div>

				<div class="row g-4 align-items-center position-relative">
					<!-- Title and list -->
					<div class="col-xl-8">
						<h5 class="fw-light">Have a project in mind?</h5>
						<h2 class="h1 fw-bold">Let’s get to <span class="text-primary-grad"> work.</span></h2>
					</div>

					<!-- Button -->
					<div class="col-xl-4 text-xl-end">
						<a href="#" class="btn btn-dark mb-0">Get in touch</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
CTA END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('layouts.partials/footer')

<!-- Back to top -->
<div class="back-top"></div>
@endsection