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
                                    <a class="list-group-item active" href="{{ route('profile_index') }}"><i class="bi bi-pencil-square fa-fw me-2"></i>ویرایش پروفایل</a>
                                    {{-- <a class="list-group-item" href="instructor-payout.html"><i class="bi bi-wallet2 fa-fw me-2"></i>درآمدها</a>
                                    <a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>تنظیمات</a> --}}
                                    <a class="list-group-item" href="{{ route('profile_delete_index') }}"><i class="bi bi-trash fa-fw me-2"></i>حذف پروفایل</a>
                                    <a class="list-group-item text-danger bg-danger-soft-hover" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt fa-fw me-2"></i>خروج</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->
                </div>
                <!-- Left sidebar END -->

                <!-- Main content START -->
                <div class="col-xl-9">
                    <!-- Edit profile START -->
                    <div class="card bg-transparent border rounded-3">
                        <!-- Card header -->
                        <div class="card-header bg-transparent border-bottom">
                            <h3 class="card-header-title mb-0 ff-vb fs-5">ویرایش پروفایل</h3>
                        </div>
                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Form -->
                            <form class="row g-4" action="{{ route('profile_edit') }}" method="POST">
                                @csrf
                                <!-- Profile picture -->
                                <div class="col-12 justify-content-center align-items-center">
                                    <label class="form-label">تصویر</label>
                                    <div class="d-flex align-items-center">
                                        <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                            <!-- Avatar place holder -->
                                            <span class="avatar avatar-xl">
                                                <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src={{ asset("assets/images/avatar/user.jpg") }} alt="">
                                            </span>
                                            <!-- Remove btn -->
                                            {{-- <button type="button" class="uploadremove"><i class="bi bi-x text-white"></i></button> --}}
                                        </label>
                                        <!-- Upload button -->
                                        {{-- <label class="btn btn-primary-soft mb-0" for="uploadfile-1">تغییر</label> --}}
                                        <input id="uploadfile-1" class="form-control d-none" type="file">
                                    </div>
                                </div>

                                <!-- Full name -->
                                {{-- <div class="col-12">
                                    <label class="form-label">نام خانوادگی</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ auth()->guard('clients')->user()->name }}" placeholder="نام خانوادگی">
                                    </div>
                                </div> --}}

                                <!-- Username -->
                                {{-- <div class="col-md-6">
                                    <label class="form-label">نام کاربری</label>
                                    <div class="input-group">
                                        <span class="input-group-text">rtl-theme.com</span>
                                        <input type="text" class="form-control" value="rtltheme">
                                    </div>
                                </div> --}}



                                <!-- Phone number -->
                                    <div class="col-md-6">
                                        <label class="form-label">شماره تماس</label>
                                        <input type="text" class="form-control" name="phone" value="{{ auth()->guard('clients')->user()->phone }}" placeholder="09">
                                        @error('phone')
                                            <p class="invalid-feedback d-block">
                                                <strong>{{ $message }}</strong>
                                            </p>
                                            @enderror
                                    </div>


                                    <!-- Email id -->
                                    <div class="col-md-6">
                                        <label class="form-label">ایمیل</label>
                                        <input class="form-control" name="email" type="email" value="{{ auth()->guard('clients')->user()->email }}"  placeholder="ایمیل">
                                        @error('email')
                                            <p class="invalid-feedback d-block">
                                                <strong>{{ $message }}</strong>
                                            </p>
                                            @enderror
                                    </div>



                                <!-- Location -->
                                {{-- <div class="col-md-6">
                                    <label class="form-label">آدرس</label>
                                    <input class="form-control" type="text" value="تهران">
                                </div> --}}

                                <!-- About me -->
                                {{-- <div class="col-12">
                                    <label class="form-label">درباره من</label>
                                    <textarea class="form-control" rows="3">من راهی برای دریافت پول برای سرگرمی مورد علاقه‌ام پیدا کرده‌ام و این کار را در حالی انجام می‌دهم که رویای سفر به دور دنیا را دنبال می‌کنم.</textarea>
                                    <div class="form-text">توضیحات مختصری برای پروفایل شما</div>
                                </div> --}}

                                <!-- Education -->
                                {{-- <div class="col-12">
                                    <label class="form-label">تحصیلات</label>
                                    <input class="form-control mb-2" type="text" value="لیسانس گرافیک کامپیوتری">
                                    <input class="form-control mb-2" type="text" value="کارشناسی ارشد گرافیک کامپیوتری">
                                    <button class="btn btn-sm btn-light mb-0"><i class="bi bi-plus me-1"></i>افزودن</button>
                                </div> --}}

                                <!-- Save button -->
                                <div class="d-sm-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary mb-0">ذخیره</button>
                                </div>
                            </form>
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Edit profile END -->

                    {{-- <div class="row g-4 mt-3">
                        <!-- Linked account START -->
                        <div class="col-lg-6">
                            <div class="card bg-transparent border rounded-3">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom">
                                    <h5 class="card-header-title mb-0">اکانت های فعال</h5>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body pb-0">
                                    <!-- Google -->
                                    <div class="position-relative mb-4 d-sm-flex bg-success bg-opacity-10 border border-success p-3 rounded">
                                        <!-- Title and content -->
                                        <h2 class="fs-1 mb-0 me-3"><i class="fab fa-google text-google-icon"></i></h2>
                                        <div>
                                            <div class="position-absolute top-0 start-100 translate-middle bg-white rounded-circle lh-1 h-20px">
                                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                            </div>
                                                <h6 class="mb-1">Google</h6>
                                                <p class="mb-1 small">شما با موفقیت به حساب Google خود متصل شده اید</p>
                                                <!-- Button -->
                                                <button type="button" class="btn btn-sm btn-danger mb-0">خروج</button>
                                                <a href="#" class="btn btn-sm btn-link text-body mb-0">بیشتر </a>
                                        </div>
                                    </div>

                                    <!-- Linkedin -->
                                    <div class="mb-4 d-sm-flex border p-3 rounded">
                                        <!-- Title and content -->
                                        <h2 class="fs-1 mb-0 me-3"><i class="fab fa-linkedin-in text-linkedin"></i></h2>
                                        <div>
                                            <h6 class="mb-1">Linkedin</h6>
                                            <p class="mb-1 small">ورود به حساب Linkedin</p>
                                            <!-- Button -->
                                            <button type="button" class="btn btn-sm btn-primary mb-0">ورود</button>
                                            <a href="#" class="btn btn-sm btn-link text-body mb-0">بیشتر بدانید</a>
                                        </div>
                                    </div>

                                    <!-- Facebook -->
                                    <div class="mb-4 d-sm-flex border p-3 rounded">
                                        <!-- Title and content -->
                                        <h2 class="fs-1 mb-0 me-3"><i class="fab fa-facebook text-facebook"></i></h2>
                                        <div>
                                            <h6 class="mb-1">Facebook</h6>
                                            <p class="mb-1 small">ورود به حساب Facebook</p>
                                            <!-- Button -->
                                            <button type="button" class="btn btn-sm btn-primary mb-0">ورود</button>
                                            <a href="#" class="btn btn-sm btn-link text-body mb-0">بیشتر بدانید</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Linked account end -->

                        <!-- Social media profile START -->
                        <div class="col-lg-6">
                            <div class="card bg-transparent border rounded-3">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom">
                                    <h5 class="card-header-title mb-0">شبکه های اجتماعی</h5>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Facebook username -->
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fab fa-facebook text-facebook me-2"></i>نام کاربری facebook</label>
                                        <input class="form-control" type="text" value="rtltheme" placeholder="نام کاربری">
                                    </div>

                                    <!-- Twitter username -->
                                    <div class="mb-3">
                                        <label class="form-label"><i class="bi bi-twitter text-twitter me-2"></i>نام کاربری twitter</label>
                                        <input class="form-control" type="text" value="rtltheme" placeholder="نام کاربری">
                                    </div>

                                    <!-- Instagram username -->
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fab fa-instagram text-instagram-gradient me-2"></i>نام کاربری instagram</label>
                                        <input class="form-control" type="text" value="rtltheme" placeholder="نام کاربری">
                                    </div>

                                    <!-- Youtube -->
                                    <div class="mb-3">
                                        <label class="form-label"><i class="fab fa-youtube text-youtube me-2"></i>آدرس youtube</label>
                                        <input class="form-control" type="text" value="https://www.aparat.com/video/video/embed/videohash/TyGZt/vt/frame" placeholder="نام کاربری">
                                    </div>

                                    <!-- Button -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-primary mb-0">ذخیره</button>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Social media profile END -->

                        <!-- EMail change START -->
                        <div class="col-lg-6">
                            <div class="card bg-transparent border rounded-3">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom">
                                    <h5 class="card-header-title mb-0">تغییر ایمیل</h5>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <p>آدرس ایمیل فعلی شما <span class="text-primary">example@gmail.com</span> است</p>
                                    <!-- Email -->
                                    <form>
                                        <label class="form-label">ایمیل جدید خود را وارد کنید</label>
                                        <input class="form-control" type="email" placeholder="ایمیل جدید">
                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="button" class="btn btn-primary mb-0">تغییر ایمیل</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- EMail change end -->

                        <!-- Password change START -->
                        <div class="col-lg-6">
                            <div class="card border bg-transparent rounded-3">
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom">
                                    <h5 class="card-header-title mb-0">تغییر رمز عبور</h5>
                                </div>
                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- Current password -->
                                    <div class="mb-3">
                                        <label class="form-label">رمز فعلی</label>
                                        <input class="form-control" type="password" placeholder="********">
                                    </div>
                                    <!-- New password -->
                                    <div class="mb-3">
                                        <label class="form-label"> رمز جدید</label>
                                        <div class="input-group">
                                            <input class="form-control" type="password" placeholder="********">
                                            <span class="input-group-text p-0 bg-transparent">
                                                <i class="far fa-eye cursor-pointer p-2 w-40px"></i>
                                            </span>
                                        </div>
                                        <div class="rounded mt-1" id="psw-strength"></div>
                                    </div>
                                    <!-- Confirm password -->
                                    <div>
                                        <label class="form-label">تایید رمز جدید</label>
                                        <input class="form-control" type="password" placeholder="********">
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="button" class="btn btn-primary mb-0">تغییر رمز</button>
                                    </div>
                                </div>
                                <!-- Card body END -->
                            </div>
                        </div>
                        <!-- Password change end -->
                    </div> --}}
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

    </main>

@endsection


