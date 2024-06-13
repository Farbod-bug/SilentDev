<footer class="bg-dark pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a class="me-0" href="index.html">
					<img class="light-mode-item h-40px" src={{ asset("assets/images/logo-light.svg") }} alt="logo">
					<img class="dark-mode-item h-40px" src={{ asset("assets/images/logo.svg") }} alt="logo">
				</a>
				<p class="my-3 text-muted">با ما به هدف های خود نزدیک تر میشوید.</p>
				<!-- Social media icon -->
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-6">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4 text-white">لینک های مفید</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">درباره ما</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">تماس با ما</a></li>
							<li class="nav-item"><a class="nav-link" href="#">وبلاگ</a></li>
							<li class="nav-item"><a class="nav-link" href="#">تسویه حساب</a></li>
							<li class="nav-item"><a class="nav-link" href="#">سوالات متداول</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4 text-white">راهنما و پشتیبانی</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link" href="#">داکیومنت</a></li>
							<li class="nav-item"><a class="nav-link" href="#">ارسال تیکت</a></li>
							<li class="nav-item"><a class="nav-link" href="#">خرید دوره</a></li>
							<li class="nav-item"><a class="nav-link" href="#">نقشه سایت</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-4">
						<h5 class="mb-2 mb-md-4 text-white">لینک های سریع</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link" href="#">جذب مدرس</a></li>
							<li class="nav-item"><a class="nav-link" href="#">مشاوره رایگان</a></li>
							<li class="nav-item"><a class="nav-link" href="#">شرایط و قوانین</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->

			<!-- Widget 3 START -->
			<div class="col-lg-3">
				<h5 class="mb-2 mb-md-4 text-white">تماس با ما</h5>
				<!-- Time -->
				<p class="mb-2 text-muted">
					تلفن: <span class="h6 fw-light ms-2 text-white">{{ setting('contact.phone') }}</span>
					<span class="d-block small">(9:00 تا 17:00 بعداز ظهر)</span>
				</p>

				<p class="mb-0 text-muted">ایمیل:<span class="h6 fw-light text-white ms-2">{{ setting('contact.email') }}</span></p>

				<div class="row g-2 mt-2">
					<!-- Google play store button -->
					<div class="col-6 col-sm-4 col-md-3 col-lg-6">
						<a href="#"> <img src={{ asset("assets/images/client/google-play.svg") }} alt=""> </a>
					</div>
					<!-- App store button -->
					<div class="col-6 col-sm-4 col-md-3 col-lg-6">
						<a href="#"> <img src={{ asset("assets/images/client/app-store.svg") }} alt="app-store"> </a>
					</div>
				</div> <!-- Row END -->
			</div>
			<!-- Widget 3 END -->
		</div><!-- Row END -->

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="py-3">
			<div class="container px-0">
				<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
					<!-- copyright text -->
					<div class="text-muted text-primary-hover">🤫 Developed by</div>
					<!-- copyright links-->
					<div class="justify-content-center mt-3 mt-lg-0">
						<ul class="nav list-inline justify-content-center mb-0">
							<li class="list-inline-item text-primary-hover">
								<!-- Language selector -->
								<div class="dropup mt-0 text-center text-sm-end">
									<a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fas fa-globe me-2"></i>زبان ها
									</a>
									<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
										<li><a class="dropdown-item me-4 text-body" href="#"><img class="fa-fw me-2" src={{ asset("assets/images/flags/uk.svg") }} alt="">فارسی</a></li>
										<li><a class="dropdown-item me-4 text-body" href="#"><img class="fa-fw me-2" src={{ asset("assets/images/flags/gr.svg") }} alt="">انگلیسی </a></li>
										<li><a class="dropdown-item me-4 text-body" href="#"><img class="fa-fw me-2" src={{ asset("assets/images/flags/sp.svg") }} alt="">فرانسوی</a></li>
									</ul>
								</div>
							</li>
							<li class="list-inline-item text-primary-hover"><a class="nav-link" href="#">شرایط استفاده</a></li>
							<li class="list-inline-item text-primary-hover"><a class="nav-link pe-0" href="#">قوانین سایت</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
