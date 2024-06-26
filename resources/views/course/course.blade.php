@extends('index')

@section('content')
<main>

    <!-- =======================
    Page content START -->
    <section class="pt-3 pt-xl-5">
        <div class="container" data-sticky-container>
            <div class="row g-4">
                <!-- Main content START -->
                <div class="col-xl-8">

                    <div class="row g-4">
                        <!-- Title START -->
                        <div class="col-12">
                            <!-- Title -->
                            <h2 class="fs-3">{{ $course->title }}</h2>
                            <p>{!! $course->description !!}</p>
                            <!-- Content -->
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star me-2"></i>4.5/5.0</li>
                                <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate me-2"></i>12 شرکت کننده</li>
                                <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="fas fa-signal me-2"></i>متوسطه</li>
                                <li class="list-inline-item fw-light h6 me-3 mb-1 mb-sm-0"><i class="bi bi-patch-exclamation-fill me-2"></i>آخرین بروزرسانی 1401/02</li>
                                <li class="list-inline-item fw-light h6"><i class="fas fa-globe me-2"></i>انگلیسی</li>
                            </ul>
                        </div>
                        <!-- Title END -->

                        <!-- Image and video -->
                        <div class="col-12 position-relative">
                            <div class="video-player rounded-3">
                                <video controls playsinline poster="assets/images/videos/poster.jpg">
                                    <source src="assets/images/videos/360p.mp4" type="video/mp4" size="360">
                                    <source src="assets/images/videos/720p.mp4" type="video/mp4" size="720">
                                    <source src="assets/images/videos/1080p.mp4" type="video/mp4" size="1080">
                                    <!-- Caption files -->
                                    <track kind="captions" label="English" srclang="en" src="assets/images/videos/en.vtt" default>
                                    <track kind="captions" label="French" srclang="fr" src="assets/images/videos/fr.vtt">
                                </video>
                            </div>
                        </div>

                        <!-- About course START -->
                        <div class="col-12">
                            <div class="card border">
                                <!-- Card header START -->
                                <div class="card-header border-bottom">
                                    <h3 class="mb-0 fs-5">توضیحات دوره</h3>
                                </div>
                                <!-- Card header END -->

                                <!-- Card body START -->
                                <div class="card-body">
                                {!! $course->description2 !!}
                                    <!-- List content -->
                                    <h5 class="mt-4">بعد از یادگیری:</h5>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>معرفی دوره دیجیتال مارکتینگ</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>آموزش طراحی رابط کاربری وب و اپلیکشن</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Facebook ADS</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>ابزارهای بهینه سازی موتور جستجو</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>توان کار با فتوشاپ</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>ابزارهای بهینه سازی موتور جستجو</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group list-group-borderless">
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>سئو چیست؟</li>
                                                <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>آموزش اجرای لوگو</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>ساختار URL</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>طراحی بنر های دیجیتالی</li>
                                        <li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>نکات و ترفندهای سئو</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                </div>
                                <!-- Card body START -->
                            </div>
                        </div>
                        <!-- About course END -->

                        <!-- Curriculum START -->
                        <div class="col-12">
                            <div class="card border rounded-3">
                                <!-- Card header START -->
                                <div class="card-header border-bottom">
                                    <h3 class="mb-0 fs-5">جلسات دوره</h3>
                                </div>
                                <!-- Card header END -->

                                <!-- Card body START -->
                                <div class="card-body">
                                    <div class="row g-5">
                                        <!-- Lecture item START -->
                                        <div class="col-12">

                                            @foreach ($course->lesson as $lesson)
                                            <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-danger-soft btn-round mb-0"><i class="fas fa-play"></i></a>
                                                    <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                        <h6 class="mb-0 fw-normal">{{ $lesson->title }}</h6>
                                                        <p class="mb-2 mt-2 mb-sm-0 small">{{ $lesson->hour }}</p>
                                                        <p class="mb-2 mb-sm-0 small">{!! $lesson->description !!}</p>
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <a href="{{ $lesson->video }}" class="btn btn-sm btn-success mb-0">پخش</a>
                                            </div>
                                            <!-- Divider -->
                                            <hr>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>
                                <!-- Card body START -->
                            </div>
                        </div>
                        <!-- Curriculum END -->

                        <!-- FAQs START -->
                        <div class="col-12">
                            <div class="card border rounded-3">
                                <!-- Card header START -->
                                <div class="card-header border-bottom">
                                    <h3 class="mb-0 fs-5">سوالات متداول</h3>
                                </div>
                                <!-- Card header END -->

                                <!-- Card body START -->
                                <div class="card-body">
                                    <!-- FAQ item -->
                                    <div>
                                        <h6>بازاریابی دیجیتال چگونه کار می کند؟</h6>
                                        <p class="mb-0">برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                                    </div>

                                    <!-- FAQ item -->
                                    <div class="mt-4">
                                        <h6>SEO چیست؟</h6>
                                        <p class="mb-0">در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                                    <p class="mt-2 mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>

                                    </div>

                                    <!-- FAQ item -->
                                    <div class="mt-4">
                                        <h6>چه کسانی باید در این دوره شرکت کنند؟</h6>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                                    </div>

                                    <!-- FAQ item -->
                                    <div class="mt-4">
                                        <h6>T&C برای این برنامه چیست؟</h6>
                                        <p class="mb-0">کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                                        </div>

                                    <!-- FAQ item -->
                                    <div class="mt-4">
                                        <h6>چه گواهی هایی برای این برنامه دریافت خواهم کرد؟</h6>
                                        <p class="mb-0">با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    </div>

                                    <!-- FAQ item -->
                                    <div class="mt-4">
                                        <h6>مدت زمان تخفیف دوره چقدر است؟</h6>
                                        <p class="mb-0">روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                                    </div>
                                </div>
                                <!-- Card body START -->
                            </div>
                        </div>
                        <!-- FAQs END -->
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class="col-xl-4">
                    <div data-sticky data-margin-top="80" data-sticky-for="768">
                        <div class="row g-4">
                            <div class="col-md-6 col-xl-12">
                                <!-- Course info START -->
                                <div class="card card-body border p-4">
                                    <!-- Price and share button -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Price -->
                                        <h3 class="fw-bold mb-0 me-2 fs-5">70,000 تومان</h3>
                                        <!-- Share button with dropdown -->
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-light rounded mb-0 small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-fw fa-share-alt"></i>
                                            </a>
                                            <!-- dropdown button -->
                                            <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
                                                <li><a  class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>کپی لینک</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="mt-3 d-grid">
                                        <a href="#" class="btn btn-outline-primary">افزودن به سبد</a>
                                        <a href="#" class="btn btn-success">خرید آنلاین</a>
                                    </div>
                                    <!-- Divider -->
                                    <hr>

                                    <!-- Title -->
                                    <h5 class="mb-3 fs-5">مشخصات دوره</h5>
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-book-open text-primary"></i>تعداد ویدیو ها</span>
                                        <span>30</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-clock text-primary"></i>مدت زمان دوره</span>
                                        <span>4ساعت</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-signal text-primary"></i>سطح دوره</span>
                                        <span>متوسطه</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>زبان</span>
                                        <span>انگلیسی</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-user-clock text-primary"></i>تاریخ بروزرسانی</span>
                                        <span>30 تیر 1400</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="h6 fw-light mb-0"><i class="fas fa-fw fa-medal text-primary"></i>مدرک</span>
                                        <span>دارد</span>
                                        </li>
                                    </ul>
                                    <!-- Divider -->
                                    <hr>

                                    <!-- Instructor info -->
                                    <div class="d-sm-flex align-items-center">
                                        <!-- Avatar image -->
                                        <div class="avatar avatar-xl">
                                            <img class="avatar-img rounded-circle" src="{{ Voyager::image($course->teacher->image) }}" alt="avatar">
                                        </div>
                                        <div class="ms-sm-3 mt-2 mt-sm-0">
                                            <h5 class="mb-0"><a href="#">{{ $course->teacher->name . ' ' . $course->teacher->last_name }}</a></h5>
                                            <p class="mb-0 small">{{ $course->teacher->title }}</p>
                                        </div>
                                    </div>

                                    <!-- Rating and follow -->
                                    <div class="d-sm-flex justify-content-sm-between align-items-center mt-0 mt-sm-2">
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>

                                        <!-- button -->
                                        <button class="btn btn-sm btn-primary mb-0 mt-2 mt-sm-0">دنبال کردن</button>
                                    </div>
                                </div>
                                <!-- Course info END -->
                            </div>

                            <!-- Tags START -->
                            <div class="col-md-6 col-xl-12">
                                <div class="card card-body border p-4">
                                    <h4 class="mb-3 fs-5">برچسب ها</h4>
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">PHP</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">استارت آپ</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">HTML</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">bootstrap</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">بانک اطلاعات</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">طراحی وب</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">برنامه نویسی</a> </li>
                                    <li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">داده کاوی</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tags END -->
                        </div><!-- Row End -->
                    </div>
                </div>
                <!-- Right sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

    </main>
@endsection
