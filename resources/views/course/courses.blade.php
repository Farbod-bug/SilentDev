@extends('index')

@section('content')
<main>

    <!-- =======================
    Page Banner START -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 text-center rounded-3">
                        <h1 class="m-0 fs-2">لیست نسخه 2</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">لیست نسخه 2</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Page content START -->
    @if (count($courses) > 0)
    <section class="pt-0">
        <div class="container">

            <!-- Filter bar START -->
            <form class="bg-light border p-4 rounded-3 my-4 z-index-9 position-relative">
                <div class="row g-3">
                    <!-- Input -->
                    <div class="col-xl-3">
                        <input class="form-control me-1" type="search" placeholder="جستجو براساس کلمه کلیدی" name="search" value="{{ Request::input('search') }}">
                    </div>

                    <!-- Select item -->
                    <div class="col-xl-8">
                        <div class="row g-3">
                            <!-- Select items -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                    <option value="">دسته بندی ها</option>
                                    <option>همه</option>
                                    <option>طراحی وب</option>
                                    <option>هنر</option>
                                    <option>حسابداری</option>
                                    <option>داده کاوی</option>
                                    <option>مالی</option>
                                    <option>شبکه</option>
                                    <option>عکاسی</option>
                                    <option>نوشتاری</option>
                                    <option>برنامه نویسی</option>
                                </select>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                    <option value="">قیمت</option>
                                    <option>همه</option>
                                    <option>رایگان</option>
                                    <option>خریدنی</option>
                                </select>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                    <option value="">مهارت</option>
                                    <option>همه سطح</option>
                                    <option>مبتدی</option>
                                    <option>مقدماتی</option>
                                    <option>پیشرفته</option>
                                </select>
                            </div>

                            <!-- Search item -->
                            <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                    <option value="">زبان</option>
                                    <option>انگلیسی</option>
                                    <option>فرانسه</option>
                                    <option>روسیه</option>
                                    <option>هندی</option>
                                    <option>آلمان</option>
                                    <option>اسپانیا</option>
                                </select>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                    <!-- Button -->
                    <div class="col-xl-1">
                        <button type="submit" class="btn btn-primary mb-0 rounded z-index-1 w-100"><i class="fas fa-search"></i></button>
                    </div>
                </div> <!-- Row END -->
            </form>
            <!-- Filter bar END -->

            <div class="row mt-3">
                <!-- Main content START -->
                <div class="col-12">

                    <!-- Course Grid START -->
                    <div class="row g-4">

                        <!-- Card item START -->
                        @foreach ($courses as $course)
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="{{ Voyager::image($course->image) }}" class="card-img-top" alt="course image">
                                <!-- Card body -->
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <a href="#" class="badge bg-purple bg-opacity-10 text-purple">
                                            @switch($course->level)
                                                @case('medium')
                                                    {{ 'متوسط' }}
                                                    @break

                                                @case('beginner')
                                                    {{ 'مبتدی' }}
                                                    @break

                                                @case('advance')
                                                    {{ 'حرفه ای' }}
                                                    @break

                                                @default

                                            @endswitch
                                        </a>
                                        {{-- <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a> --}}
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal mt-3"><a href="{{ route('course' , $course->slug) }}">{{ $course->title }}</a></h5>
                                    <!-- Rating star -->

                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>{{ $course->hour }}</span>
                                        <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>{{ $course->lesson_count . ' ' . 'ویدیو' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Card item END -->

                    </div>
                    <!-- Course Grid END -->

                    <!-- Pagination START -->
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">

                                @if($courses->previousPageUrl())
                                <li class="page-item mb-0"><a class="page-link" href="{{ $courses->previousPageUrl() }}" tabindex="-1"><i class="fas fa-angle-double-right"></i></a></li>
                                @endif

                                @if(!(($courses->currentPage()) - 1 == 1) and !($courses->currentPage() == 1))
                                <li class="page-item mb-0"><a class="page-link" href="{{ $courses->url(1) }}">1</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="">..</a></li>
                                @endif

                                @if($courses->previousPageUrl())
                                <li class="page-item mb-0"><a class="page-link" href="{{ $courses->previousPageUrl() }}" tabindex="-1">{{ $courses->currentPage() -1 }}</a></li>
                                @endif


                                <li class="page-item mb-0 active"><a class="page-link" href="">{{ $courses->currentPage() }}</a></li>


                                @if($courses->nextPageUrl())
                                <li class="page-item mb-0"><a class="page-link" href="{{ $courses->nextPageUrl() }}" tabindex="-1">{{ $courses->currentPage() + 1 }}</a></li>
                                @endif

                                @if(!(($courses->lastPage() - $courses->currentPage()) == 1) and !($courses->lastPage() == $courses->currentPage()))
                                <li class="page-item mb-0"><a class="page-link" href="">..</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="{{ $courses->url($courses->lastPage()) }}">{{ $courses->lastPage() }}</a></li>
                                @endif

                                @if($courses->nextPageUrl())
                                <li class="page-item mb-0"><a class="page-link" href="{{ $courses->nextPageUrl() }}"><i class="fas fa-angle-double-left"></i></a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>

    @else
        <p>
            دوره ای یافت نشد
        </p>
    @endif


    <!-- =======================
    Page content END -->

    <!-- =======================
    Newsletter START -->

    <!-- =======================
    Newsletter END -->

    </main>
@endsection
