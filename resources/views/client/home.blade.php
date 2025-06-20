@extends('client.layouts.app')

@section('content')
    <div class="ecommerce-homepage pt-5 mb-9">
        <section class="py-0">
            <div class="container-small">
                <div class="scrollbar">
                    <div class="d-flex justify-content-between"><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2 bg-warning-subtle" data-bs-theme="light"><span
                                    class="fs-4 uil uil-star text-warning"></span></div>
                            <p class="nav-label">Deals</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-shopping-bag"></span></div>
                            <p class="nav-label">Grocery</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-watch-alt"></span></div>
                            <p class="nav-label">Fashion</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-mobile-android"></span></div>
                            <p class="nav-label">Mobile</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-monitor"></span></div>
                            <p class="nav-label">Electronics</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-estate"></span></div>
                            <p class="nav-label">Home</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-lamp"></span></div>
                            <p class="nav-label">Dining</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-gift"></span></div>
                            <p class="nav-label">Gifts</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-wrench"></span></div>
                            <p class="nav-label">Tools</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-plane-departure"></span></div>
                            <p class="nav-label">Travel</p>
                        </a><a class="icon-nav-item" href="#">
                            <div class="icon-container mb-2" data-bs-theme="undefined"><span
                                    class="fs-4 uil uil-palette"></span></div>
                            <p class="nav-label">Others</p>
                        </a></div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 px-xl-3">
            <div class="container px-xl-0 px-xxl-3">
                <div class="row g-3 mb-9">
                    <div class="col-12">
                        <div class="whooping-banner w-100 rounded-3 overflow-hidden">
                            <div class="bg-holder z-n1 product-bg"
                                style="background-image:url({{ asset('v1/assets/img/e-commerce/whooping_banner_product.png') }});background-position: bottom right;">
                            </div>
                            <!--/.bg-holder-->
                            <div class="bg-holder z-n1 shape-bg"
                                style="background-image:url({{ asset('v1/assets/img/e-commerce/whooping_banner_shape_2.png') }});background-position: bottom left;">
                            </div>
                            <!--/.bg-holder-->
                            <div class="banner-text" data-bs-theme="light">
                                <h2 class="text-warning-light fw-bolder fs-lg-3 fs-xxl-2">Whooping <span
                                        class="gradient-text">60% </span>Off</h2>
                                <h3 class="fw-bolder fs-lg-5 fs-xxl-3 text-white">on everyday items</h3>
                            </div><a class="btn btn-lg btn-primary rounded-pill banner-button" href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="gift-items-banner w-100 rounded-3 overflow-hidden">
                            <div class="bg-holder z-n1 banner-bg"
                                style="background-image:url({{ asset('v1/assets/img/e-commerce/gift-items-banner-bg.png') }});">
                            </div>
                            <!--/.bg-holder-->
                            <div class="banner-text text-md-center">
                                <h2 class="text-white fw-bolder fs-xl-4">Get <span class="gradient-text">10% Off </span><br
                                        class="d-md-none"> on gift items</h2><a
                                    class="btn btn-lg btn-primary rounded-pill banner-button" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div
                            class="best-in-market-banner d-flex h-100 px-4 px-sm-7 py-5 px-md-11 rounded-3 overflow-hidden">
                            <div class="bg-holder z-n1 banner-bg"
                                style="background-image:url({{ asset('v1/assets/img/e-commerce/best-in-market-bg.png') }});"></div>
                            <!--/.bg-holder-->
                            <div class="row align-items-center w-sm-100">
                                <div class="col-8">
                                    <div class="banner-text">
                                        <h2 class="text-white fw-bolder fs-sm-4 mb-5">MI 11 Pro<br><span
                                                class="fs-7 fs-sm-6"> Best in the market</span></h2><a
                                            class="btn btn-lg btn-warning rounded-pill banner-button" href="#">Buy
                                            Now</a>
                                    </div>
                                </div>
                                <div class="col-4"><img class="w-100 w-sm-75" src="{{ asset('v1/assets/img/e-commerce/5.png') }}"
                                        alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mb-6">
                    <div class="col-12 col-lg-9 col-xxl-10">
                        <div class="d-flex flex-between-center mb-3">
                            <div class="d-flex"><span class="fas fa-bolt text-warning fs-6"></span>
                                <h3 class="mx-2">Top Deals today</h3><span class="fas fa-bolt text-warning fs-6"></span>
                            </div><a class="btn btn-link btn-lg p-0 d-none d-md-block" href="#">Explore more<span
                                    class="fas fa-chevron-right fs-9 ms-1"></span></a>
                        </div>
                        <div class="swiper-theme-container products-slider">
                            <div class="swiper swiper theme-slider"
                                data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":20},"1200":{"slidesPerView":4,"spaceBetween":16},"1540":{"slidesPerView":5,"spaceBetween":16}}}'>
                                <div class="swiper-wrapper">
                                    @foreach([6,1,2,3,4,5] as $img)
                                    <div class="swiper-slide">
                                        <div class="position-relative text-decoration-none product-card h-100">
                                            <div class="d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <div
                                                        class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                        <button
                                                            class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"
                                                                data-fa-transform="down-1"></span><span
                                                                class="far fa-heart d-none-hover"
                                                                data-fa-transform="down-1"></span></button><img
                                                            class="img-fluid" src="{{ asset('v1/assets/img/products/' . $img . '.png') }}"
                                                            alt="" />
                                                    </div><a class="stretched-link" href="product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">PlayStation 5
                                                            DualSense Wireless Controller</h6>
                                                    </a>
                                                    <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="text-body-quaternary fw-semibold ms-1">(67 people
                                                            rated)</span></p>
                                                </div>
                                                <div>
                                                    <p class="fs-9 text-body-highlight fw-bold mb-2">dbrand skin available
                                                    </p>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <p class="me-2 text-body text-decoration-line-through mb-0">$125.00
                                                        </p>
                                                        <h3 class="text-body-emphasis mb-0">$89.00</h3>
                                                    </div>
                                                    <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-nav swiper-product-nav">
                                <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                                <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                            </div>
                        </div><a class="fw-bold d-md-none px-0" href="#">Explore more<span
                                class="fas fa-chevron-right fs-9 ms-1"></span></a>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block col-xxl-2">
                        <div class="h-100 position-relative rounded-3 overflow-hidden">
                            <div class="bg-holder" style="background-image:url({{ asset('v1/assets/img/e-commerce/4.png') }});">
                            </div>
                            <!--/.bg-holder-->
                        </div>
                    </div>
                    <div class="col-12 d-lg-none"><a href="#"><img class="w-100 rounded-3"
                                src="{{ asset('v1/assets/img/e-commerce/6.png') }}" alt="" /></a></div>
                </div>
                <div class="mb-6">
                    <div class="d-flex flex-between-center mb-3">
                        <h3>Top Electronics</h3><a class="fw-bold d-none d-md-block" href="#">Explore more<span
                                class="fas fa-chevron-right fs-9 ms-1"></span></a>
                    </div>
                    <div class="swiper-theme-container products-slider">
                        <div class="swiper swiper theme-slider"
                            data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/5.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">Razer Kraken v3 x
                                                        Wired 7.1 Surroung Sound Gaming headset</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="text-body-quaternary fw-semibold ms-1">(59 people
                                                        rated)</span></p>
                                            </div>
                                            <div>
                                                <h3 class="text-body-emphasis">$59.00</h3>
                                                <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/7.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">2021 Apple 12.9-inch
                                                        iPad Pro (Wi‑Fi, 128GB) - Space Gray</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="text-body-quaternary fw-semibold ms-1">(13 people
                                                        rated)</span></p>
                                            </div>
                                            <div>
                                                <h3 class="text-body-emphasis">$799.00</h3>
                                                <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/12.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">HORI Racing Wheel Apex
                                                        for PlayStation 4/3, and PC</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="text-body-quaternary fw-semibold ms-1">(64 people
                                                        rated)</span></p>
                                            </div>
                                            <div>
                                                <p class="fs-9 text-body-highlight fs-9 mb-0 fw-bold">Leather cover add-on
                                                    available</p>
                                                <p class="fs-9 text-body-tertiary fs-9 mb-2">supports Windows 11</p>
                                                <h3 class="text-body-emphasis">$299.00</h3>
                                                <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">1 colors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button
                                                        class="btn btn-wish btn-wish-primary z-2 d-toggle-container active"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Remove from wishlist"><span class="fas fa-heart"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/1.png') }}"
                                                        alt="" /><span
                                                        class="badge text-bg-success fs-10 product-verified-badge">Verified<span
                                                            class="fas fa-check ms-1"></span></span>
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">Amazfit T-Rex Pro
                                                        Smart Watch with GPS, Outdoor Fitness Watch for Men, Military
                                                        Standard Certified</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="text-body-quaternary fw-semibold ms-1">(32 people
                                                        rated)</span></p>
                                            </div>
                                            <div>
                                                <h3 class="text-body-emphasis">$20.00</h3>
                                                <p class="text-success fw-bold fs-9 lh-1 mb-0">Deal time ends in 24 hours
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/16.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple AirPods Pro</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="text-body-quaternary fw-semibold ms-1">(39 people
                                                        rated)</span></p>
                                            </div>
                                            <div>
                                                <p class="fs-9 text-body-highlight fs-9 mb-0 fw-bold">Free with iPhone 5s
                                                </p>
                                                <p class="fs-9 text-body-tertiary fs-9 mb-2">Ships to Canada</p>
                                                <h3 class="text-body-emphasis">$59.00</h3>
                                                <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">3 colors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/10.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple Magic Mouse
                                                        (Wireless, Rechargable) - Silver</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa-regular fa-star text-warning-light"
                                                        data-bs-theme="light"></span><span
                                                        class="fa-regular fa-star text-warning-light"
                                                        data-bs-theme="light"></span><span
                                                        class="fa-regular fa-star text-warning-light"
                                                        data-bs-theme="light"></span><span
                                                        class="fa-regular fa-star text-warning-light"
                                                        data-bs-theme="light"></span><span
                                                        class="text-body-quaternary fw-semibold ms-1">(6 people
                                                        rated)</span></p>
                                            </div>
                                            <div>
                                                <p class="fs-9 text-body-highlight fs-9 mb-0 fw-bold">Bundle available</p>
                                                <p class="fs-9 text-body-tertiary fs-9 mb-2">Charger not included</p>
                                                <h3 class="text-body-emphasis">$89.00</h3>
                                                <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/8.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">Amazon Basics Matte
                                                        Black Wired Keyboard - US Layout (QWERTY)</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa-regular fa-star text-warning-light"
                                                        data-bs-theme="light"></span><span
                                                        class="fa-regular fa-star text-warning-light"
                                                        data-bs-theme="light"></span><span
                                                        class="text-body-quaternary fw-semibold ms-1">(7 people
                                                        rated)</span></p>
                                            </div>
                                            <div>
                                                <h3 class="text-body-emphasis">$98.00</h3>
                                                <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">1 colors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-nav">
                            <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                            <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                        </div>
                    </div><a class="fw-bold d-md-none" href="#">Explore more<span
                            class="fas fa-chevron-right fs-9 ms-1"></span></a>
                </div>
                <div class="mb-6">
                    <div class="d-flex flex-between-center mb-3">
                        <h3>Best Offers</h3><a class="fw-bold d-none d-md-block" href="#">Explore more<span
                                class="fas fa-chevron-right fs-9 ms-1"></span></a>
                    </div>
                    <div class="swiper-theme-container products-slider">
                        <div class="swiper swiper theme-slider"
                            data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/25.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">RESPAWN 200 Racing
                                                        Style Gaming Chair, in Gray RSP 200 GRY</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span></p>
                                            </div>
                                            <div>
                                                <h6 class="text-success lh-1 mb-0">35% off</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/27.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">LEVOIT Humidifiers for
                                                        Bedroom Large Room 6L Warm and Cool Mist for...</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa-regular fa-star text-warning-light"
                                                        data-bs-theme="light"></span></p>
                                            </div>
                                            <div>
                                                <h6 class="text-success lh-1 mb-0">18% off</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/26.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">NETGEAR Nighthawk Pro
                                                        Gaming XR500 Wi-Fi Router with 4 Ethernet Ports...</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span></p>
                                            </div>
                                            <div>
                                                <h6 class="text-success lh-1 mb-0">15% off</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/18.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">Rachael Ray Cucina
                                                        Bakeware Set Includes Nonstick Bread Baking Cookie Sheet...</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star-half-alt star-icon text-warning"></span><span
                                                        class="fa-regular fa-star text-warning-light"
                                                        data-bs-theme="light"></span></p>
                                            </div>
                                            <div>
                                                <h6 class="text-success lh-1 mb-0">20% off</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/17.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">Xbox Series S</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span></p>
                                            </div>
                                            <div>
                                                <h6 class="text-success lh-1 mb-0">12% off</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/24.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">FURINNO Computer
                                                        Writing Desk, Walnut</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span></p>
                                            </div>
                                            <div>
                                                <h6 class="text-success lh-1 mb-0">16% off</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div
                                                    class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                    <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist"><span class="fas fa-heart d-block-hover"
                                                            data-fa-transform="down-1"></span><span
                                                            class="far fa-heart d-none-hover"
                                                            data-fa-transform="down-1"></span></button><img
                                                        class="img-fluid" src="{{ asset('v1/assets/img/products/18.png') }}"
                                                        alt="" />
                                                </div><a class="stretched-link" href="product-details.html">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">Seagate Portable 2TB
                                                        External Hard Drive Portable HDD</h6>
                                                </a>
                                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa fa-star text-warning"></span><span
                                                        class="fa-regular fa-star text-warning-light"
                                                        data-bs-theme="light"></span></p>
                                            </div>
                                            <div>
                                                <h6 class="text-success lh-1 mb-0">15% off</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-nav">
                            <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                            <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                        </div>
                    </div><a class="fw-bold d-md-none" href="#">Explore more<span
                            class="fas fa-chevron-right fs-9 ms-1"></span></a>
                </div>
                <div class="row flex-center mb-15 mt-11 gy-6">
                    <div class="col-auto"><img class="d-dark-none"
                            src="{{ asset('v1/assets/img/spot-illustrations/light_30.png') }}" alt=""
                            width="305" /><img class="d-light-none"
                            src="{{ asset('v1/assets/img/spot-illustrations/dark_30.png') }}" alt="" width="305" />
                    </div>
                    <div class="col-auto">
                        <div class="text-center text-lg-start">
                            <h3 class="text-body-highlight mb-2"><span class="fw-semibold">Want to have the
                                </span>ultimate <br class="d-md-none" />customer experience?</h3>
                            <h1 class="display-3 fw-semibold mb-4">Become a <span class="text-primary fw-bolder">member
                                </span>today!</h1><a class="btn btn-lg btn-primary px-7"
                                href="{{ asset('v1/pages/authentication/simple/sign-up.html') }}">Sign up<span
                                    class="fas fa-chevron-right ms-2 fs-9"></span></a>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

    </div>
@endsection
