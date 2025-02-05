@extends('layouts.app')
@section('title', 'Product')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.png);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Product</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- shop-style-two -->
    <section class="shop-style-two">
        <div class="container">
            <div class="upper-box">
                <div class="latest-product">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <figure class="image-box"><img src="img/machine-1.png" alt=""></figure>
                                <div class="content-box">
                                    <h3><a href="{{ route('shop-single') }}">industrial Motor decanter</a></h3>
                                    <div class="link-btn"><a href="{{ route('shop-single') }}">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <figure class="image-box"><img src="img/machine-2.png" alt=""></figure>
                                <div class="content-box">
                                    <h3><a href="{{ route('shop-single') }}">Water jet pumps</a></h3>
                                    <div class="link-btn"><a href="{{ route('shop-single') }}">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-box centred">
                <h2 class="title-text">Deal of the day</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-two">
                            <div class="inner-box">
                                <div class="image-holder">
                                    <figure class="image-box"><img src="img/shop-1.png" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{ route('shop-single') }}">Cylindrical grinding Machin</a></h4>
                                    <div class="btn-box"><a href="{{ route('shop-single') }}">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-two">
                            <div class="inner-box">
                                <div class="image-holder">
                                    <figure class="image-box"><img src="img/shop-2.png" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{ route('shop-single') }}">Juki Swing Machin</a></h4>
                                    <div class="btn-box"><a href="{{ route('shop-single') }}">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-two">
                            <div class="inner-box">
                                <div class="image-holder">
                                    <figure class="image-box"><img src="img/shop-3.png" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{ route('shop-single') }}">Plywood machines</a></h4>
                                    <div class="btn-box"><a href="{{ route('shop-single') }}">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-two">
                            <div class="inner-box">
                                <div class="image-holder">
                                    <figure class="image-box"><img src="img/shop-4.png" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{ route('shop-single') }}">Paper Plate Machin</a></h4>
                                    <div class="btn-box"><a href="{{ route('shop-single') }}">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-two">
                            <div class="inner-box">
                                <div class="image-holder">
                                    <figure class="image-box"><img src="img/shop-5.png" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{ route('shop-single') }}">Home hero machine cutout</a></h4>
                                    <div class="btn-box"><a href="{{ route('shop-single') }}">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                        <div class="shop-block-two">
                            <div class="inner-box">
                                <div class="image-holder">
                                    <figure class="image-box"><img src="img/shop-6.png" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="{{ route('shop-single') }}">Borewell drilling machine</a></h4>
                                    <div class="btn-box"><a href="{{ route('shop-single') }}">Buy Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-style-two end -->


@endSection