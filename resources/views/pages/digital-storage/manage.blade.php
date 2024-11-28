@extends('layouts.master')
{{-- <title>Empty | {{ env('APP_NAME', 'Xinui') }}</title> --}}
@section('title', 'Document Management | ' . env('APP_NAME', 'Framework'))
@section('content')
    <div class="container-fluid">


        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
            <div>
                <nav>
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Search</li>
                    </ol>
                </nav>
                <h1 class="page-title fw-medium fs-18 mb-0">Search</h1>
            </div>
            <div class="btn-list">
                <button class="btn btn-white btn-wave">
                    <i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter
                </button>
                <button class="btn btn-primary btn-wave me-0">
                    <i class="ri-share-forward-line me-1"></i> Share
                </button>
            </div>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="p-3 border-bottom">
                            <div class="input-group mb-3 search-result-input gap-2">
                                <input type="text" class="form-control form-control-lg bg-light rounded-pill"
                                    placeholder="Search Here ..." aria-label="Search Here ..."
                                    aria-describedby="button-addon1">
                                <span class="position-absolute start-0 text-muted mt-3 ms-3 lh-1 search-result-icon"><i
                                        class="ri-search-line"></i></span>
                                <button class="btn btn-primary btn-wave btn-w-sm rounded-pill" type="button"
                                    id="button-addon1"> Search</button>
                            </div>
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge bg-light border text-default rounded-pill">Designs <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <span class="badge bg-light border text-default rounded-pill">Template <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <span class="badge bg-light border text-default rounded-pill">Dashboard <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <span class="badge bg-light border text-default rounded-pill">Admin Templates <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <span class="badge bg-light border text-default rounded-pill"> Templates <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <span class="badge bg-light border text-default rounded-pill">Admin <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <span class="badge bg-light border text-default rounded-pill">Hosting Templates <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <span class="badge bg-light border text-default rounded-pill">Hosting <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <span class="badge bg-light border text-default rounded-pill">Bootstrap <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <span class="badge bg-light border text-default rounded-pill">Sales <a
                                        href="javascript:void(0);"><i class="ri-close-line"></i></a></span>
                                <div class="ms-auto">
                                    <a href="javascript:void(0);"
                                        class="text-primary text-decoration-underline fw-medium mx-2"> Clear All </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 d-flex gap-2 justify-content-between flex-wrap align-items-center">
                            <div class="text-muted">Total of 55,142 results were found.</div>
                            <div class="ms-auto d-flex gap-2">
                                <div class="dropdown">
                                    <a href="javascript:void(0);"
                                        class="btn btn-sm btn-w-md btn-light text-muted dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="true"> Sort By</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Alphabets</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">First Word</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Numeric</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-w-md btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="true"> Filter By</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Alphabets</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">First Word</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Numeric</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 px-3 pt-1 pb-3">
                            <ul class="nav nav-tabs tab-style-6 p-0 search-tab gap-2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active fw-medium" data-bs-toggle="tab" role="tab"
                                        aria-current="page" href="#search-all" aria-selected="true"><i
                                            class="ri-search-line me-2"></i>All</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-medium" data-bs-toggle="tab" role="tab"
                                        aria-current="page" href="#search-images" aria-selected="false"
                                        tabindex="-1"><i class="ri-image-line me-2"></i>Images</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-medium" data-bs-toggle="tab" role="tab"
                                        aria-current="page" href="#search-books" aria-selected="false" tabindex="-1"><i
                                            class="ri-book-line me-2"></i>Books</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-medium" data-bs-toggle="tab" role="tab"
                                        aria-current="page" href="#search-news" aria-selected="false" tabindex="-1"><i
                                            class="ri-newspaper-line me-2"></i>News</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-medium" data-bs-toggle="tab" role="tab"
                                        aria-current="page" href="#search-videos" aria-selected="false"
                                        tabindex="-1"><i class="ri-live-line me-2"></i>Videos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->

        <!-- Start:: row-2 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="tab-content">
                    <div class="tab-pane p-0 border-0 show active" id="search-all" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                            <div>
                                                <div class="">
                                                    <span class="d-block fw-medium"><a
                                                            href="javascript:void(0);">Beginner</a></span>
                                                    <a href="javascript:void(0);" class="link-primary1">
                                                        http://www.beginnerpackage.com</a>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-light btn-sm btn-wave waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"> View
                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                    class="searched-item-main-link">Introduction to Web Development</a>
                                            </h6>
                                            <span class="d-block text-muted">Learn the basics of web development, including
                                                HTML, CSS, and JavaScript.</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="javascript:void(0);" class="badge bg-primary-transparent fs-12">Shop
                                                Now</a>
                                            <a href="javascript:void(0);" class="badge bg-primary-transparent fs-12">Top
                                                10 Picks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                            <div>
                                                <div class="">
                                                    <span class="d-block fw-medium"><a
                                                            href="javascript:void(0);">Responsive Design</a></span>
                                                    <a href="javascript:void(0);"
                                                        class="link-primary1">http://www.responsivedesigns.com</a>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-light btn-sm btn-wave waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"> View
                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                    class="searched-item-main-link">Best Practices for Responsive Web
                                                    Design</a></h6>
                                            <span class="d-block text-muted"> Explore the latest techniques and tools for
                                                creating responsive websites..</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-transparent fs-12">Browse Recipes</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-transparent fs-12">Nutrition Tips</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                            <div>
                                                <div class="">
                                                    <span class="d-block fw-medium"><a
                                                            href="javascript:void(0);">JavaScript, Frameworks</a></span>
                                                    <a href="javascript:void(0);"
                                                        class="link-primary1">http://www.javaScriptDevlops.com</a>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-light btn-sm btn-wave waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"> View
                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                    class="searched-item-main-link">Advanced JavaScript Frameworks</a></h6>
                                            <span class="d-block text-muted">Dive deep into popular JavaScript frameworks
                                                like React, Angular, and Vue.js..</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-transparent fs-12">Explore Destinations</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-transparent fs-12">Travel Guides</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                            <div>
                                                <div class="">
                                                    <span class="d-block fw-medium"><a href="javascript:void(0);">CSS,
                                                            Layouts</a></span>
                                                    <a href="javascript:void(0);"
                                                        class="link-primary1">http://www.layoutscss.com</a>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-light btn-sm btn-wave waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"> View
                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                class="searched-item-main-link">CSS Flexbox Tutorial:</a><span
                                                class="text-muted fw-normal fs-13"> Master the CSS Flexbox layout model,
                                                get Videos from the link.</span></h6>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-transparent fs-12">Explore Destinations</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-transparent fs-12">Travel Guides</a>
                                            <div class="ms-auto">
                                                <span class="avatar avatar-lg flex-shrink-0 ms-auto"> <img
                                                        src="../assets/images/media/media-15.jpg" alt=""></span>
                                                <span class="avatar avatar-lg flex-shrink-0 ms-auto"> <img
                                                        src="../assets/images/media/media-16.jpg" alt=""></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                            <div>
                                                <div class="">
                                                    <span class="d-block fw-medium"><a href="javascript:void(0);">Frontend
                                                            Development, Debugging</a></span>
                                                    <a href="javascript:void(0);"
                                                        class="link-primary1">http://www.frontenddevelopment.com</a>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-light btn-sm btn-wave waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"> View
                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                    class="searched-item-main-link">Debugging Tips for Frontend
                                                    Developers</a></h6>
                                            <span class="d-block text-muted">Discover effective strategies for debugging
                                                frontend code and troubleshooting common issues.</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="javascript:void(0);" class="badge bg-primary-transparent fs-12">Shop
                                                Now</a>
                                            <a href="javascript:void(0);" class="badge bg-primary-transparent fs-12">Trend
                                                Alerts</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between flex-wrap gap-1 mb-3">
                                            <div>
                                                <div class="">
                                                    <span class="d-block fw-medium"><a href="javascript:void(0);"> Backend
                                                            Development</a></span>
                                                    <a href="javascript:void(0);"
                                                        class="link-primary1">http://www.backenddevlops.com</a>
                                                </div>
                                            </div>
                                            <div class="dropdown ms-auto">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-light btn-sm btn-wave waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"> View
                                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="fw-semibold mb-1"><a href="javascript:void(0)"
                                                    class="searched-item-main-link">Introduction to Backend Development</a>
                                            </h6>
                                            <span class="d-block text-muted">Get started with backend development using
                                                Node.js, Python, and other server-side technologies.</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-transparent fs-12">Explore Books</a>
                                            <a href="javascript:void(0);"
                                                class="badge bg-primary-transparent fs-12">Author Interviews</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation" class="pagination-style-4">
                            <ul class="pagination text-center justify-content-center gap-1">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0)">
                                        Prev
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">16</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">17</a></li>
                                <li class="page-item">
                                    <a class="page-link text-primary" href="javascript:void(0)">
                                        next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane border-0 p-0" id="search-images" role="tabpanel">
                        <div class="card custom-card">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <a href="../assets/images/media/media-40.jpg"
                                            class="glightbox card search-images-card" data-gallery="gallery1">
                                            <img src="../assets/images/media/media-40.jpg" alt="image">
                                            <div class="p-3 text-center bg-light">
                                                <div class="d-flex align-items-center gap-1 justify-content-center mb-1">
                                                    <div class="avatar avatar-xs">
                                                        <img src="../assets/images/company-logos/6.png" alt="">
                                                    </div>
                                                    <div class="figure-caption fs-14 fw-medium text-default">Beginner</div>
                                                </div>
                                                <div class="fs-12 text-muted">Beginner In.co</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <a href="../assets/images/media/media-41.jpg"
                                            class="glightbox card search-images-card" data-gallery="gallery1">
                                            <img src="../assets/images/media/media-41.jpg" alt="image">
                                            <div class="p-3 text-center bg-light">
                                                <div class="d-flex align-items-center gap-1 justify-content-center mb-1">
                                                    <div class="avatar avatar-xs">
                                                        <img src="../assets/images/company-logos/2.png" alt="">
                                                    </div>
                                                    <div class="figure-caption fs-14 fw-medium text-default">Responsive
                                                    </div>
                                                </div>
                                                <div class="fs-12 text-muted">Responsive Design</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <a href="../assets/images/media/media-42.jpg"
                                            class="glightbox card search-images-card" data-gallery="gallery1">
                                            <img src="../assets/images/media/media-42.jpg" alt="image">
                                            <div class="p-3 text-center bg-light">
                                                <div class="d-flex align-items-center gap-1 justify-content-center mb-1">
                                                    <div class="avatar avatar-xs">
                                                        <img src="../assets/images/company-logos/4.png" alt="">
                                                    </div>
                                                    <div class="figure-caption fs-14 fw-medium text-default">JavaScript
                                                    </div>
                                                </div>
                                                <div class="fs-12 text-muted">JavaScript Devlops</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <a href="../assets/images/media/media-43.jpg"
                                            class="glightbox card search-images-card" data-gallery="gallery1">
                                            <img src="../assets/images/media/media-43.jpg" alt="image">
                                            <div class="p-3 text-center bg-light">
                                                <div class="d-flex align-items-center gap-1 justify-content-center mb-1">
                                                    <div class="avatar avatar-xs">
                                                        <img src="../assets/images/company-logos/5.png" alt="">
                                                    </div>
                                                    <div class="figure-caption fs-14 fw-medium text-default">Layoutscss
                                                    </div>
                                                </div>
                                                <div class="fs-12 text-muted">Layout SCSS</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <a href="../assets/images/media/media-44.jpg"
                                            class="glightbox card search-images-card" data-gallery="gallery1">
                                            <img src="../assets/images/media/media-44.jpg" alt="image">
                                            <div class="p-3 text-center bg-light">
                                                <div class="d-flex align-items-center gap-1 justify-content-center mb-1">
                                                    <div class="avatar avatar-xs">
                                                        <img src="../assets/images/company-logos/6.png" alt="">
                                                    </div>
                                                    <div class="figure-caption fs-14 fw-medium text-default">frontend</div>
                                                </div>
                                                <div class="fs-12 text-muted">Frontend Development.co</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <a href="../assets/images/media/media-45.jpg"
                                            class="glightbox card search-images-card" data-gallery="gallery1">
                                            <img src="../assets/images/media/media-45.jpg" alt="image">
                                            <div class="p-3 text-center bg-light">
                                                <div class="d-flex align-items-center gap-1 justify-content-center mb-1">
                                                    <div class="avatar avatar-xs">
                                                        <img src="../assets/images/company-logos/7.png" alt="">
                                                    </div>
                                                    <div class="figure-caption fs-14 fw-medium text-default">backenddevlops
                                                    </div>
                                                </div>
                                                <div class="fs-12 text-muted">Backend Solutions</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <a href="../assets/images/media/media-46.jpg"
                                            class="glightbox card search-images-card" data-gallery="gallery1">
                                            <img src="../assets/images/media/media-46.jpg" alt="image">
                                            <div class="p-3 text-center bg-light">
                                                <div class="d-flex align-items-center gap-1 justify-content-center mb-1">
                                                    <div class="avatar avatar-xs">
                                                        <img src="../assets/images/company-logos/8.png" alt="">
                                                    </div>
                                                    <div class="figure-caption fs-14 fw-medium text-default">Frontend Dev
                                                    </div>
                                                </div>
                                                <div class="fs-12 text-muted">Project innovations.in</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                                        <a href="../assets/images/media/media-60.jpg"
                                            class="glightbox card search-images-card" data-gallery="gallery1">
                                            <img src="../assets/images/media/media-60.jpg" alt="image">
                                            <div class="p-3 text-center bg-light">
                                                <div class="d-flex align-items-center gap-1 justify-content-center mb-1">
                                                    <div class="avatar avatar-xs">
                                                        <img src="../assets/images/company-logos/9.png" alt="">
                                                    </div>
                                                    <div class="figure-caption fs-14 fw-medium text-default">Flawless</div>
                                                </div>
                                                <div class="fs-12 text-muted">Masters In.co</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-12 mb-4">
                                        <button class="btn btn-info-light btn-loader mx-auto">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane border-0 p-0" id="search-books" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xl bg-primary bg-opacity-10 border">
                                                        <img src="../assets/images/media/books/6.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <div><span class="text-muted">Published On</span> - <span
                                                            class="fw-medium mb-0">May 10, 1902</span></div>
                                                    <h6 class="fw-medium my-1 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> Whispers in the Wind</a></h6>
                                                    <span class="d-block text-muted">Set in the Scottish Highlands, this
                                                        tale follows the forbidden love between a Highland.</span>
                                                </div>
                                            </div>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary1-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Add to favourite"
                                                    data-bs-original-title="Add to favourite"><span><i
                                                            class="ri-heart-3-line align-middle"></i></span></a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary2-light me-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Featured Book"
                                                    data-bs-original-title="Share Link"><span><i
                                                            class="ri-share-line"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-between mt-3">
                                            <div class="popular-tags">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Classic</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Historical</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Adventure</a>
                                            </div>
                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i>Emma
                                                    Harper</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xl bg-primary bg-opacity-10 border">
                                                        <img src="../assets/images/media/books/3.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <div><span class="text-muted">Published On</span> - <span
                                                            class="fw-medium mb-0">Jun 08, 1994</span></div>
                                                    <h6 class="fw-medium my-1 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> The Quantum Enigma</a></h6>
                                                    <span class="d-block text-muted">A brilliant physicist stumbles upon a
                                                        groundbreaking quantum discovery, but soon finds..</span>
                                                </div>
                                            </div>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary1-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Add to favourite"
                                                    data-bs-original-title="Add to favourite"><span><i
                                                            class="ri-heart-3-line align-middle"></i></span></a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary2-light me-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Featured Book"
                                                    data-bs-original-title="Share Link"><span><i
                                                            class="ri-share-line"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-between mt-3">
                                            <div class="popular-tags">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent"> Science Fiction</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Mystery</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Thriller</a>
                                            </div>
                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i>Dr.
                                                    James Holloway</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xl bg-primary bg-opacity-10 border">
                                                        <img src="../assets/images/media/books/1.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <div><span class="text-muted">Published On</span> - <span
                                                            class="fw-medium mb-0">Apr 15, 2010</span></div>
                                                    <h6 class="fw-medium my-1 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> Echoes of Eternity</a></h6>
                                                    <span class="d-block text-muted">In a world where magic is fading, a
                                                        young mage must embark on a perilous..</span>
                                                </div>
                                            </div>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary1-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Add to favourite"
                                                    data-bs-original-title="Add to favourite"><span><i
                                                            class="ri-heart-3-line align-middle"></i></span></a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary2-light me-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Featured Book"
                                                    data-bs-original-title="Share Link"><span><i
                                                            class="ri-share-line"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-between mt-3">
                                            <div class="popular-tags">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent"> Epic</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Fantasy</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Adventure</a>
                                            </div>
                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span>
                                                <i>Sophia Turner</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xl bg-primary bg-opacity-10 border">
                                                        <img src="../assets/images/media/books/2.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <div><span class="text-muted">Published On</span> - <span
                                                            class="fw-medium mb-0">Oct 22, 1889</span></div>
                                                    <h6 class="fw-medium my-1 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> Culinary Alchemy</a></h6>
                                                    <span class="d-block text-muted">Discover the secrets of transforming
                                                        simple ingredients into..</span>
                                                </div>
                                            </div>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary1-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Add to favourite"
                                                    data-bs-original-title="Add to favourite"><span><i
                                                            class="ri-heart-3-line align-middle"></i></span></a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary2-light me-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Featured Book"
                                                    data-bs-original-title="Share Link"><span><i
                                                            class="ri-share-line"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-between mt-3">
                                            <div class="popular-tags">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent"> Cooking</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Non-fiction</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Self-help</a>
                                            </div>
                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span>
                                                <i>Gordon Meyers</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xl bg-primary bg-opacity-10 border">
                                                        <img src="../assets/images/media/books/4.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <div><span class="text-muted">Published On</span> - <span
                                                            class="fw-medium mb-0">Jan 06, 1999</span></div>
                                                    <h6 class="fw-medium my-1 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> Shadows of the Mind</a></h6>
                                                    <span class="d-block text-muted">A forensic psychologist with a dark
                                                        past is drawn into a series..</span>
                                                </div>
                                            </div>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary1-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Add to favourite"
                                                    data-bs-original-title="Add to favourite"><span><i
                                                            class="ri-heart-3-line align-middle"></i></span></a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary2-light me-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Featured Book"
                                                    data-bs-original-title="Share Link"><span><i
                                                            class="ri-share-line"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-between mt-3">
                                            <div class="popular-tags">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent"> Psychological
                                                    Thriller</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Crime</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Suspense</a>
                                            </div>
                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i> Dr.
                                                    Lisa Bennett</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start flex-wrap gap-3 justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <span class="avatar avatar-xl bg-primary bg-opacity-10 border">
                                                        <img src="../assets/images/media/books/5.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <div><span class="text-muted">Published On</span> - <span
                                                            class="fw-medium mb-0">Feb 16, 2003</span></div>
                                                    <h6 class="fw-medium my-1 d-flex align-items-center"><a
                                                            href="javascript:void(0);"> The Last Garden</a></h6>
                                                    <span class="d-block text-muted">In a future where Earth’s ecosystems
                                                        are collapsing, a group..</span>
                                                </div>
                                            </div>
                                            <div class="btn-list">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary1-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Add to favourite"
                                                    data-bs-original-title="Add to favourite"><span><i
                                                            class="ri-heart-3-line align-middle"></i></span></a>
                                                <a href="javascript:void(0);"
                                                    class="btn btn-sm btn-icon btn-primary2-light me-0"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    aria-label="Featured Book"
                                                    data-bs-original-title="Share Link"><span><i
                                                            class="ri-share-line"></i></span></a>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-between mt-3">
                                            <div class="popular-tags">
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Dystopian</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Environmental</a>
                                                <a href="javascript:void(0);"
                                                    class="badge rounded-pill bg-primary-transparent">Drama</a>
                                            </div>
                                            <a href="javascript:void(0);"><span class="fw-semibold">Author:</span> <i>
                                                    Marcus Reed</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 mb-4">
                                <button class="btn btn-info-light btn-loader mx-auto">
                                    <span class="me-2">Loading</span>
                                    <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane border-0 p-0" id="search-news" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <div class="mb-2">
                                            <h6 class="mb-3"> Quantum Physicists Break New Ground</h6>
                                            <div class="mb-1"><i
                                                    class="ri-calendar-line p-1 bg-primary-transparent text-primary rounded-circle lh-1 mb-1"></i>
                                                10,Mar 2024 - 3:15PM</div>
                                            <div><i
                                                    class="ri-map-pin-line text-primary1 p-1 bg-primary1-transparent rounded-circle lh-1"></i>
                                                Quantum Research Facility, Geneva</div>
                                        </div>
                                        <span class="text-muted">
                                            In a groundbreaking experiment, quantum physicists have detected a previously
                                            unknown subatomic particle, challenging.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <div class="mb-2">
                                            <h6 class="mb-3"> Stunning Images from NASA's Perseverance Rover</h6>
                                            <div><i
                                                    class="ri-calendar-line p-1 bg-primary-transparent text-primary rounded-circle lh-1 mb-1"></i>
                                                8,Apr 2024 - 9:00AM</div>
                                            <div><i
                                                    class="ri-map-pin-line text-primary1 p-1 bg-primary1-transparent rounded-circle lh-1"></i>
                                                Jezero Crater, Mars</div>
                                        </div>
                                        <span class="text-muted">
                                            NASA's Perseverance rover has captured breathtaking images of the Martian
                                            landscape, revealing tantalizing clues about the planet's geology.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <div class="mb-2">
                                            <h6 class="mb-3"> Breakthrough in Cancer Research</h6>
                                            <div class="mb-1"><i
                                                    class="ri-calendar-line p-1 bg-primary-transparent text-primary rounded-circle lh-1 mb-1"></i>
                                                5,May 2024 - 1:45PM</div>
                                            <div><i
                                                    class="ri-map-pin-line text-primary1 p-1 bg-primary1-transparent rounded-circle lh-1"></i>
                                                Genetech Laboratories</div>
                                        </div>
                                        <span class="text-muted">
                                            Researchers have made a significant breakthrough in cancer treatment with the
                                            development of a novel therapy that targets
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <div class="mb-2">
                                            <h6 class="mb-3"> Chef Julia Rodriguez Launches Global Initiative</h6>
                                            <div class="mb-1"><i
                                                    class="ri-calendar-line p-1 bg-primary-transparent text-primary rounded-circle lh-1 mb-1"></i>
                                                5,Jun 2024 - 11:30AM</div>
                                            <div><i
                                                    class="ri-map-pin-line text-primary1 p-1 bg-primary1-transparent rounded-circle lh-1"></i>
                                                20 countries</div>
                                        </div>
                                        <span class="text-muted">
                                            Renowned chef and humanitarian, Chef Julia Rodriguez, has launched a global
                                            initiative to combat
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <div class="mb-2">
                                            <h6 class="mb-3"> Historic Peace Agreement Signed</h6>
                                            <div class="mb-1"><i
                                                    class="ri-calendar-line p-1 bg-primary-transparent text-primary rounded-circle lh-1 mb-1"></i>
                                                22,Jul 2024 - 4:20PM</div>
                                            <div><i
                                                    class="ri-map-pin-line text-primary1 p-1 bg-primary1-transparent rounded-circle lh-1"></i>
                                                United Nations</div>
                                        </div>
                                        <span class="text-muted">
                                            In a historic move, long-time rival nations have signed a landmark peace
                                            agreement.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <a href="javascript:void(0);" class="stretched-link"></a>
                                        <div class="mb-2">
                                            <h6 class="mb-3"> Breakthrough in Renewable Energy</h6>
                                            <div class="mb-1"><i
                                                    class="ri-calendar-line p-1 bg-primary-transparent text-primary rounded-circle lh-1 mb-1"></i>
                                                8,Aug 2024 - 10:00AM</div>
                                            <div><i
                                                    class="ri-map-pin-line text-primary1 p-1 bg-primary1-transparent rounded-circle lh-1"></i>
                                                SolarTech Innovations</div>
                                        </div>
                                        <span class="text-muted">
                                            Scientists have achieved a major breakthrough in renewable energy with the
                                            development
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation" class="pagination-style-4">
                            <ul class="pagination text-center justify-content-center gap-1">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0)">
                                        Prev
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">16</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">17</a></li>
                                <li class="page-item">
                                    <a class="page-link text-primary" href="javascript:void(0)">
                                        next
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane border-0 p-0" id="search-videos" role="tabpanel">
                        <div class="card custom-card">
                            <div class="card-body pb-1">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/HWvHA2FY8Ok?si=Bf-6pyMAcBG-_dR0"
                                                title="YouTube video player"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                    Valex - Bootstrap 5 Admin & Dashboard HTML Template</div>
                                            </div>
                                            <a href="https://www.spruko.com/demo/valex/" target="_blank"
                                                class="fs-12 link-primary text-decoration-underline">https://www.spruko.com/demo/valex/</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/Zx1HjMhcQdE?si=Nhbu6XA2PoyAlYhy"
                                                title="YouTube video player"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">Azea
                                                    - Admin & Dashboard Bootstrap 5 HTML5 Template</div>
                                            </div>
                                            <a href="https://spruko.com/demo/azea/" target="_blank"
                                                class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/azea/</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/JP_os1DC1MQ?si=qyUJRBl7ZJBhR_P5"
                                                title="YouTube video player"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">YNEX
                                                    - HTML Installation & Usage process</div>
                                            </div>
                                            <a href="https://spruko.com/demo/ynex/" target="_blank"
                                                class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/ynex/</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/-lDlbQ7DiCI?si=-GRS_5Dco6Qc5ius"
                                                title="YouTube video player"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">Sash
                                                    - Admin and Dashboard Multipurpose HTML Advanced Template</div>
                                            </div>
                                            <a href="https://spruko.com/demo/sash/" target="_blank"
                                                class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/sash/</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/JP_os1DC1MQ?si=qyUJRBl7ZJBhR_P5"
                                                title="YouTube video player"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">Ynex
                                                    - Bootstrap 5 Admin & Dashboard HTML5 Template</div>
                                            </div>
                                            <a href="https://spruko.com/demo/ynex/" target="_blank"
                                                class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/ynex/</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-sm-6 col-12">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/bVRW4Li8inE?si=pOpS9ep2Hn3cGL3y"
                                                title="YouTube video player"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex align-items-center gap-1">
                                                <div class="figure-caption fs-13 fw-medium text-default text-truncate">
                                                    Zanex - Bootstrap 5 Admin & Dashboard HTML5 Template</div>
                                            </div>
                                            <a href="https://spruko.com/demo/zanex/" target="_blank"
                                                class="fs-12 link-primary text-decoration-underline">https://spruko.com/demo/zanex/</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 my-3">
                                        <button class="btn btn-info-light btn-loader mx-auto">
                                            <span class="me-2">Loading</span>
                                            <span class="loading"><i class="ri-loader-4-line fs-16"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-2 -->


    </div>
@endsection
