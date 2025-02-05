@extends('layouts.app')
@section('title', 'Our Gallery')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.png);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Our Gallery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-lg-4 col-md-12">
                        <img src="img/g1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Image 1">
                        <img src="img/g3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Image 3">
                    </div>
        
                    <!-- Column 2 -->
                    <div class="col-lg-4">
                        <img src="img/g4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Image 4">
                        <img src="img/g2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Image 2">
                    </div>
        
                    <!-- Column 3 -->
                    <div class="col-lg-4">
                        <img src="img/g7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Image 7">
                        <img src="img/g5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Image 5">
                    </div>
                </div>
        
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-lg-4">
                        <img src="img/g6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Image 6">
                    </div>
        
                    <!-- Column 2 -->
                    <div class="col-lg-4">
                        <img src="img/g8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Image 8">
                    </div>

                    <div class="col-lg-4">
                        <img src="img/g9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Image 9">
                    </div>
                </div>
        
                <!-- Logo Section -->
                <div class="row justify-content-center pt-4">
                    <div class="col-12 text-center">
                        <img class="img-fluid" src="img/rajvigroup.png" alt="Logo" style="max-width:300px">
                    </div>
                </div>
            </div>
        </div>
    <!-- Team End -->

@endSection