@extends('auth.index')

@section('content')
<main>
	<section class="p-0 d-flex align-items-center position-relative overflow-hidden">

		<div class="container-fluid">
			<div class="row">
				<!-- left -->
				<div class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
					<div class="p-3 p-lg-5">
						<!-- Title -->
						<div class="text-center">
							<h2 class="fw-bold fs-3">به بزرگترین انجمن ما خوش آمدید</h2>
							<p class="mb-0 h6 fw-light">بیایید امروز چیز جدیدی یاد بگیریم!</p>
						</div>
						<!-- SVG Image -->
						<img src="assets/images/element/02.svg" class="mt-5" alt="">
						<!-- Info -->
						<div class="d-sm-flex mt-5 align-items-center justify-content-center">
							<!-- Avatar group -->
							<ul class="avatar-group mb-2 mb-sm-0">
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
								</li>
								<li class="avatar avatar-sm">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
								</li>
							</ul>
							<!-- Content -->
							<p class="mb-0 h6 fw-light ms-0 ms-sm-3"> بیش از 100 دانشجو به ما پیوستند، حالا نوبت شماست.</p>
						</div>
					</div>
				</div>

				<!-- Right -->
				<div class="col-12 col-lg-6 m-auto">
					<div class="row my-5">
						<div class="col-sm-10 col-xl-8 m-auto">
							<!-- Title -->
							<span class="mb-0 fs-1">👋</span>
							<h1 class="fs-4">ورود به حساب کاربری</h1>
							<p class="mb-4">از دیدن شما خوشحالم! لطفا با حساب کاربری خود وارد شوید.</p>

							<!-- Form START -->
							<form action="{{ route('login_post') }}" method="POST">
                                @csrf
								<!-- Email -->
								<div class="mb-4">
									<label for="exampleInputEmail1" class="form-label">ایمیل</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="bi bi-envelope-fill"></i></span>
										<input type="email" class="form-control border-0 bg-light rounded-end ps-1" name="email" placeholder="***@gmail.com" id="exampleInputEmail1" value="{{ old('email') }}">
                                        @error('email')
                                        <p class="invalid-feedback d-block pt-2 ps-2">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                        @enderror
									</div>
								</div>
								<!-- Password -->
								<div class="mb-4">
									<label for="inputPassword5" class="form-label">رمز عبور</label>
									<div class="input-group input-group-lg">
										<span class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i class="fas fa-lock"></i></span>
										<input type="password" class="form-control border-0 bg-light rounded-end ps-1" name="password" placeholder="********" id="inputPassword5">
                                        @error('password')
                                        <p class="invalid-feedback d-block pt-2 ps-2">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                        @enderror
									</div>
								</div>
								<!-- Check box -->
								<div class="mb-4 d-flex justify-content-between mb-4">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="exampleCheck1">
										<label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
									</div>
									<div class="text-primary-hover">
										<a href="{{ route('forget_password') }}" class="text-secondary">
											<u>رمز خود را فراموش کرده اید؟</u>
										</a>
									</div>
								</div>
								<!-- Button -->
								<div class="align-items-center mt-0">
									<div class="d-grid">
										<button class="btn btn-primary mb-0" type="submit">ورود</button>
									</div>
								</div>
							</form>
							<!-- Form END -->

							<!-- Social buttons and divider -->
							{{-- <div class="row">
								<!-- Divider with text -->
								<div class="position-relative my-4">
									<hr>
									<p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">یـا</p>
								</div>

								<!-- Social btn -->
								<div class="col-xxl-6 d-grid">
									<a href="#" class="btn bg-google mb-2 mb-xxl-0"><i class="fab fa-fw fa-google text-white me-2"></i>ورود با Google</a>
								</div>
								<!-- Social btn -->
								<div class="col-xxl-6 d-grid">
									<a href="#" class="btn bg-facebook mb-0"><i class="fab fa-fw fa-facebook-f me-2"></i>ورود با Facebook</a>
								</div>
							</div> --}}

							<!-- Sign up link -->
							<div class="mt-4 text-center">
								<span>حساب کاربری ندارید؟ <a href="{{ route('register') }}">ثبت نام</a></span>
							</div>
						</div>
					</div> <!-- Row END -->
				</div>
			</div> <!-- Row END -->
		</div>
	</section>
</main>
@endsection
