@extends('layouts.app')
@section('title', 'Product')
@section('content')
<style>


</style>
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

    <!-- single-shop -->
    <section class="single-shop">
        <div class="container">
            <div class="products-details">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 carousel-column">
                        <div class="carousel-content">
                            <div class="carousel-outer" data-wow-delay="0ms">
                                <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <a href="img/shop-single.png" class="lightbox-image" data-fancybox="gallery">
                                                <img src="img/shop-single.png" class="d-block w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel-item active">
                                            <a href="img/shop-single-2.png" class="lightbox-image" data-fancybox="gallery">
                                                <img src="img/shop-single-2.png" class="d-block w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="img/shop-single-3.png" class="lightbox-image" data-fancybox="gallery">
                                                <img src="img/shop-single-3.png" class="d-block w-100" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>                                     
                    
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <h3 class="product-price">IV Automatic Edge Shaper and<br />Polisher</h3>
                            <div class="lower-content">
                                <div class="text">
                                    <h5>Fast, Precision Stone Polishing</h5>
                                    <p>Produce in 1 hour what it takes 5 hours to do by hand with the PRO-EDGE® IV Edge Polisher. This automatic edge shaper and polisher creates quality edges on granite, marble, and quartz from end to end unlike any other machine on the market.</p>
                                    <p>The PRO-EDGE® IV Polisher is a fine-tuned combination of electronics and hydraulics that shapes and polishes a variety of convex edges from 3/8" to 6" thick and flat edges from 3/8" to 4" thick and up to 12' long, as well as concave and ogee edges.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-info-tabs">
                <div class="product-tab tabs-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">DESCRIPTION</li>
                        <li class="tab-btn" data-tab="#tab-2">INFORMATION</li>
                        <li class="tab-btn" data-tab="#tab-3">REVIEWS (1)</li>
                        <li class="tab-btn" data-tab="#tab-4">Product Video</li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab clearfix" id="tab-1">
                            <div class="inner-box">
                                <div class="top-content d-flex">
                                    <svg stroke="currentColor" class="svgClass" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8 157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z"></path></svg>
                                    <h4>Main technology and feature:</h4>
                                </div>
                                <ol>
                                    <li>Adopt horizontal all-welded bearing-type anti-seismic frame</li>
                                    <li>Stepping motor automatic tangent system</li>
                                    <li>The machine head adopts low oil self-lubricating unit</li>
                                    <li>The machine head adopts modular assembly and independent removeable design</li>
                                    <li>The machine head adopts low oil self-lubricating unit</li>
                                    <li>Low inertia, high steel degree, wide frame support system</li>
                                    <li>Adopt the three-axis linkage synchronous spindle drive design</li>
                                    <li>Horizontal extraction of needle rod frame design</li>
                                    <li>Double color system</li>
                                    <li>Y small difference medium drive embroidered frame drive system</li>
                                    <li>7-3.8KW main shaft power servo motor power drive</li>
                                    <li>Low noise, high precision rotary drive system</li>
                                    <li>XY multi-bearing linear track system</li>
                                    <li>Rotary automatic oil supply system</li>
                                    <li>Fixed intelligent embroidery thread tension adjustment platform</li>
                                    <li>Horizontal extraction of needle rod frame design</li>
                                    <li>1.6 times larger capacity shuttle bed</li>
                                    <li>XY servo motor driven embroidery frame system</li>
                                </ol>
                            </div>
                        </div>
                        <div class="tab clearfix" id="tab-2">
                            <div class="inner-box">
                                <div class="mt-5 mb-4">
                                    <h2>⚙ General Specification</h2>
                                    <p>Super multi-head lace embroidery machine specifications / size</p>
                                </div>
                                <!-- Responsive Table Wrapper -->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="text-white" style="background-color: #272775;">
                                                <th>TYPE</th>
                                                <th>NUMBERS OF THREADS</th>
                                                <th>HEADAGE</th>
                                                <th>HEAD DISTANCE MM</th>
                                                <th>EMBROIDERY AREA MM</th>
                                                <th>INNER FRAME MM</th>
                                                <th>MACHINE SIZE MM</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SF-2176</td>
                                                <td>2</td>
                                                <td>176</td>
                                                <td>55</td>
                                                <td>600×1500</td>
                                                <td>10265×1540</td>
                                                <td>11815×3545</td>
                                            </tr>
                                            <tr>
                                                <td>SF-3116</td>
                                                <td>3</td>
                                                <td>116</td>
                                                <td>82.5</td>
                                                <td>600×1600</td>
                                                <td>10127.5×1640</td>
                                                <td>11677.5×3755</td>
                                            </tr>
                                            <tr>
                                                <td>SF-490</td>
                                                <td>4</td>
                                                <td>90</td>
                                                <td>108</td>
                                                <td>600×1000</td>
                                                <td>10252×1040</td>
                                                <td>11802×2577</td>
                                            </tr>
                                            <tr>
                                                <td>SF-388</td>
                                                <td>3</td>
                                                <td>88</td>
                                                <td>110</td>
                                                <td>600×900</td>
                                                <td>10210×940</td>
                                                <td>11760×2377</td>
                                            </tr>
                                            <tr>
                                                <td>SF-676</td>
                                                <td>6</td>
                                                <td>76</td>
                                                <td>165</td>
                                                <td>700×1550</td>
                                                <td>13115×1590</td>
                                                <td>14765×3645</td>
                                            </tr>
                                            <tr>
                                                <td>SF-460</td>
                                                <td>4</td>
                                                <td>60</td>
                                                <td>165</td>
                                                <td>780×1520</td>
                                                <td>10555×1560</td>
                                                <td>12285×3585</td>
                                            </tr>
                                            <tr>
                                                <td>SF-658</td>
                                                <td>6</td>
                                                <td>58</td>
                                                <td>165</td>
                                                <td>600×1500</td>
                                                <td>10045×1640</td>
                                                <td>11595×3575</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tblFooter pt-2 pb-2" style="background-color: #272775;">
                                    <p class="text-white text-center">Model Can Develop as Per Customer Requirement</p>
                                </div>
                            </div>
                        </div>                        
                        <div class="tab clearfix" id="tab-3">
                            <div class="inner-box">
                                <div class="top-content">
                                    <p>The user-friendly color touchscreen controls are intuitive and easy to operate. Managing material on the PRO-EDGE® IV Polisher is easy with the unique rubber surface. Stone surfaces are securely held polished side down with pneumatic hold-downs for exceptional polish quality. When the machine is finished, popup rollers make moving the material easy for a single operator, saving time and labor</p>
                                </div>
                                <div class="lower-content">
                                    <div class="single-item">
                                        <figure class="image-box"><img src="img/shop-single-4.jpg" alt=""></figure>
                                        <h3>Features & Benefits</h3>
                                        <ul>
                                            <li>Production: 12 feet per hour</li>
                                            <li>Stores up to 70 repeatable Convex, Concave, and Ogee edge profiles</li>
                                            <li>Simple programming and operations</li>
                                            <li>Ability to Bullnose tile</li>
                                            <li>Profile shaping and polishing thickness from 3/8” to 6”</li>
                                            <li>Advanced help and diagnostic capabilities</li>
                                        </ul>
                                    </div>
                                    <div class="single-item">
                                        <figure class="image-box"><img src="img/shop-single-5.jpg" alt=""></figure>
                                        <h3>Precision Stone Polishing</h3>
                                        <ul>
                                            <li>Produce in 1 hour what it takes 5 hours to do by hand with the</li>
                                            <li>PRO-EDGE® IV Edge Polisher. This automatic edge shaper and polisher</li>
                                            <li>Creates quality edges on granite, marble, and quartz from end to end<br />unlike any other machine on the market.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="tab clearfix" id="tab-4">
                            <div class="inner-box">
                                <div class="mt-5 mb-4">
                                    <h2>⚙ Our Work Video</h2>
                                </div>
                                <div class="lower-content">
                                    <video width="1000px" height="500px" controls autoplay loop muted>
                                        <source src="{{ asset('video/video1.mp4') }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>                                                                        
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>
            <div class="latest-product">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="img/machine-1.png" alt=""></figure>
                            <div class="content-box">
                                <h3><a href="{{ route('about') }}">industrial Motor decanter</a></h3>
                                <div class="link-btn"><a href="{{ route('about') }}">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="img/machine-2.png" alt=""></figure>
                            <div class="content-box">
                                <h3><a href="{{ route('about') }}">Water jet pumps</a></h3>
                                <div class="link-btn"><a href="{{ route('about') }}">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single-shop end -->
    <script>
        $(document).ready(function() {
            $('.tab-btn').click(function() {
                var tab_id = $(this).attr('data-tab');
        
                $('.tab-btn').removeClass('active-btn');
                $('.tab').removeClass('active-tab');
        
                $(this).addClass('active-btn');
                $(tab_id).addClass('active-tab');
            });
        });

        $(document).ready(function () {
            var mainCarousel = $(".image-carousel");
            var thumbsCarousel = $(".thumbs-carousel");

            mainCarousel.owlCarousel({
                loop: true,
                items: 1,
                nav: true,
                dots: false,
                autoplay: false,
                smartSpeed: 700,
            });

            thumbsCarousel.owlCarousel({
                loop: false,
                margin: 10,
                items: 3,
                nav: false,
                dots: false,
                responsive: {
                    0: { items: 3 },
                    600: { items: 4 },
                    1000: { items: 5 }
                }
            });

            $(".thumbs-carousel li").click(function () {
                var index = $(this).attr("data-index");
                mainCarousel.trigger("to.owl.carousel", [index, 300]);
            });
        });

    </script>    
@endSection