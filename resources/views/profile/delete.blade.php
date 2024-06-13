@extends('index')


@section('content')

<main>

    <!-- =======================
    Page Banner START -->
    <section class="pt-0">
        <!-- Main banner background image -->
        <div class="container-fluid px-0">
            <div class="bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
            </div>
        </div>
        <div class="container mt-n4">
            <div class="row">
                <!-- Profile banner START -->
                <div class="col-12">
                    <div class="card bg-transparent card-body p-0">
                        <div class="row d-flex justify-content-between">
                            <!-- Avatar -->
                            <div class="col-auto mt-4 mt-md-0">
                                <div class="avatar avatar-xxl mt-n3">
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow" src={{ asset("assets/images/avatar/user.jpg") }} alt="">
                                </div>
                            </div>
                            <!-- Profile info -->
                            <div class="col d-md-flex justify-content-between align-items-center mt-4">
                                <div>
                                    <h1 class="my-1 fs-5">{{ auth()->guard('clients')->user()->name }}</h1>
                                    {{-- <ul class="list-inline mb-0">
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k شرکت کننده</li>
                                        <li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i>25 دوره</li>
                                    </ul> --}}
                                </div>
                                <!-- Button -->
                                {{-- <div class="d-flex align-items-center mt-2 mt-md-0">
                                    <a href="instructor-create-course.html" class="btn btn-success mb-0">افزودن دوره</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Profile banner END -->

                    <!-- Advanced filter responsive toggler START -->
                    <!-- Divider -->
                    <hr class="d-xl-none">
                    <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                        <a class="h6 mb-0 fw-bold d-xl-none" href="#">منوی کاربری</a>
                        <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                    <!-- Advanced filter responsive toggler END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Page content START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <!-- Left sidebar START -->
                <div class="col-xl-3">
                    <!-- Responsive offcanvas body START -->
                    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
                        <!-- Offcanvas header -->
                        <div class="offcanvas-header bg-light">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">پروفایل</h5>
                            <button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
                        </div>
                        <!-- Offcanvas body -->
                        <div class="offcanvas-body p-3 p-xl-0">
                            <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                                <!-- Dashboard menu -->
                                <div class="list-group list-group-dark list-group-borderless">
                                    {{-- <a class="list-group-item" href="instructor-dashboard.html"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>داشبورد</a>
                                    <a class="list-group-item" href="instructor-manage-course.html"><i class="bi bi-basket fa-fw me-2"></i>لیست دوره ها</a>
                                    <a class="list-group-item" href="instructor-quiz.html"><i class="bi bi-question-diamond fa-fw me-2"></i>امتحانات</a>
                                    <a class="list-group-item" href="instructor-earning.html"><i class="bi bi-graph-up fa-fw me-2"></i>آنالیز و تحلیل درآمدها</a>
                                    <a class="list-group-item" href="instructor-studentlist.html"><i class="bi bi-people fa-fw me-2"></i>لیست دانشجویان</a>
                                    <a class="list-group-item" href="instructor-order.html"><i class="bi bi-folder-check fa-fw me-2"></i>لیست سفارشات</a>
                                    <a class="list-group-item" href="instructor-review.html"><i class="bi bi-star fa-fw me-2"></i>دیدگاه ها</a> --}}
                                    <a class="list-group-item" href="{{ route('profile_index') }}"><i class="bi bi-pencil-square fa-fw me-2"></i>ویرایش پروفایل</a>
                                    {{-- <a class="list-group-item" href="instructor-payout.html"><i class="bi bi-wallet2 fa-fw me-2"></i>درآمدها</a>
                                    <a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>تنظیمات</a> --}}
                                    <a class="list-group-item active" href="{{ route('profile_delete_index') }}"><i class="bi bi-trash fa-fw me-2"></i>حذف پروفایل</a>
                                    <a class="list-group-item text-danger bg-danger-soft-hover" href="sign-in.html"><i class="fas fa-sign-out-alt fa-fw me-2"></i>خروج</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">
                    <!-- Title and select START -->
                    <div class="card border bg-transparent rounded-3 mb-0">
                        <!-- Card header -->
                        <div class="card-header bg-transparent border-bottom">
                            <h3 class="card-header-title mb-0 ff-vb fs-5">غیرفعال کردن اکانت</h3>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <h6>قبل از حذف</h6>
                            <ul>
                                {{-- <li>از اطلاعات خود یک نسخه پشتیبان <a href="#"> پشتیبان</a> تهیه کنید</li> --}}
                                <li>اگر حساب خود را حذف کنید، تمام اطلاعات خود را از دست خواهید داد.</li>
                            </ul>
                            <form action="{{ route('profile_delete') }}" method="POST">
                                @csrf
                                <div class="form-check form-check-md my-4">
                                    <input class="form-check-input" name="check" type="checkbox" id="deleteaccountCheck">
                                    <label class="form-check-label" for="deleteaccountCheck">بله، من می خواهم حساب خود را حذف کنم.</label>
                                    @error('check')
                                            <p class="invalid-feedback d-block">
                                                <strong>{{ $message }}</strong>
                                            </p>
                                    @enderror
                                </div>
                                <a href="{{ route('profile_index') }}" class="btn btn-success-soft mb-2 mb-sm-0">منصرف شدم</a>
                                <button type="submit" class="btn btn-danger mb-0">حذف حساب</button>
                            </form>

                        </div>
                    </div>
                    <!-- Title and select END -->
                </div>
                <!-- Main content END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Page content END -->

    </main>

@endsection
