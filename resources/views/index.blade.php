@extends('layouts.header')
@section('homeLink', '#topPage')
@section('navElements')
    <li class="nav-item"><a class="nav-link" href="#about">معلومات عامة</a></li>
    <li class="nav-item"><a class="nav-link" href="#services">الخدمات</a></li>
    <li class="nav-item"><a class="nav-link" href="#faq">أسئلة وأجوبة</a></li>
    <li class="nav-item"><a class="nav-link" href="#contact">مساعدة</a></li>
@endsection
@section('content')
    {{-- <div class="container">
        <h1>HOME PAGE</h1>
        <a style="text-decoration: none;color:aliceblue" href="{{ route('demande.create') }}" ><button class="btn btn-primary">Demander</button></a>
        <a style="text-decoration: none;color:aliceblue" href="{{ route('demande.check') }}" ><button class="btn btn-success">Verifier</button></a>
    </div> --}}
    <style>
        html {
        height: 100%;
        scroll-padding-top: calc(4.5rem - 1px);
        }

        body {
        width: 100%;
        height: 100%;
        }

        .page-section {
        padding: 8rem 0;
        }

        .text-white-75 {
        color: rgba(255, 255, 255, 0.75) !important;
        }

        .btn-xl {
        padding: 1.25rem 2.25rem;
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        border: none;
        border-radius: 10rem;
        }

        hr.divider {
        height: 0.2rem;
        max-width: 3.25rem;
        margin: 1.5rem auto;
        background-color: #11224D;
        opacity: 1;
        }

        hr.divider-light {
        background-color: #fff;
        }

        #mainNav {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        background-color: #fff;
        transition: background-color 0.2s ease;
        }
        #mainNav .navbar-brand {
        font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-weight: 700;
        color: #212529;
        }
        #mainNav .navbar-nav .nav-item .nav-link {
        color: #6c757d;
        font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-weight: 700;
        font-size: 0.9rem;
        padding: 0.75rem 0;
        }
        #mainNav .navbar-nav .nav-item .nav-link:hover, #mainNav .navbar-nav .nav-item .nav-link:active {
        color: #11224D;
        }
        #mainNav .navbar-nav .nav-item .nav-link.active {
        color: #11224D !important;
        }
        @media (min-width: 992px) {
        #mainNav {
            box-shadow: none;
            background-color: transparent;
        }
        #mainNav .navbar-brand {
            color: rgba(255, 255, 255, 0.7);
        }
        #mainNav .navbar-brand:hover {
            color: #fff;
        }
        #mainNav .navbar-nav .nav-item .nav-link {
            color: rgba(255, 255, 255, 0.7);
            padding: 0 1rem;
        }
        #mainNav .navbar-nav .nav-item .nav-link:hover {
            color: #fff;
        }
        #mainNav .navbar-nav .nav-item:last-child .nav-link {
            padding-right: 0;
        }
        #mainNav.navbar-shrink {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            background-color: #fff;
        }
        #mainNav.navbar-shrink .navbar-brand {
            color: #212529;
        }
        #mainNav.navbar-shrink .navbar-brand:hover {
            color: #11224D;
        }
        #mainNav.navbar-shrink .navbar-nav .nav-item .nav-link {
            color: #212529;
        }
        #mainNav.navbar-shrink .navbar-nav .nav-item .nav-link:hover {
            color: #11224D;
        }
        }

        header.masthead {
        padding-top: 10rem;
        padding-bottom: calc(10rem - 4.5rem);
        background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("{{ url('img/2.png') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
        }
        header.masthead h1, header.masthead .h1 {
        font-size: 2.25rem;
        }
        @media (min-width: 992px) {
        header.masthead {
            height: 100vh;
            min-height: 40rem;
            padding-top: 4.5rem;
            padding-bottom: 0;
        }
        header.masthead p {
            font-size: 1.15rem;
        }
        header.masthead h1, header.masthead .h1 {
            font-size: 3rem;
        }
        }
        @media (min-width: 1200px) {
        header.masthead h1, header.masthead .h1 {
            font-size: 3.5rem;
        }
        }

        #portfolio .container-fluid, #portfolio .container-sm, #portfolio .container-md, #portfolio .container-lg, #portfolio .container-xl, #portfolio .container-xxl {
        max-width: 1920px;
        }
        #portfolio .container-fluid .portfolio-box, #portfolio .container-sm .portfolio-box, #portfolio .container-md .portfolio-box, #portfolio .container-lg .portfolio-box, #portfolio .container-xl .portfolio-box, #portfolio .container-xxl .portfolio-box {
        position: relative;
        display: block;
        }
        #portfolio .container-fluid .portfolio-box .portfolio-box-caption, #portfolio .container-sm .portfolio-box .portfolio-box-caption, #portfolio .container-md .portfolio-box .portfolio-box-caption, #portfolio .container-lg .portfolio-box .portfolio-box-caption, #portfolio .container-xl .portfolio-box .portfolio-box-caption, #portfolio .container-xxl .portfolio-box .portfolio-box-caption {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 0;
        text-align: center;
        opacity: 0;
        color: #fff;
        background: rgba(244, 98, 58, 0.9);
        transition: opacity 0.25s ease;
        text-align: center;
        }
        #portfolio .container-fluid .portfolio-box .portfolio-box-caption .project-category, #portfolio .container-sm .portfolio-box .portfolio-box-caption .project-category, #portfolio .container-md .portfolio-box .portfolio-box-caption .project-category, #portfolio .container-lg .portfolio-box .portfolio-box-caption .project-category, #portfolio .container-xl .portfolio-box .portfolio-box-caption .project-category, #portfolio .container-xxl .portfolio-box .portfolio-box-caption .project-category {
        font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        }
        #portfolio .container-fluid .portfolio-box .portfolio-box-caption .project-name, #portfolio .container-sm .portfolio-box .portfolio-box-caption .project-name, #portfolio .container-md .portfolio-box .portfolio-box-caption .project-name, #portfolio .container-lg .portfolio-box .portfolio-box-caption .project-name, #portfolio .container-xl .portfolio-box .portfolio-box-caption .project-name, #portfolio .container-xxl .portfolio-box .portfolio-box-caption .project-name {
        font-size: 1.2rem;
        }
        #portfolio .container-fluid .portfolio-box:hover .portfolio-box-caption, #portfolio .container-sm .portfolio-box:hover .portfolio-box-caption, #portfolio .container-md .portfolio-box:hover .portfolio-box-caption, #portfolio .container-lg .portfolio-box:hover .portfolio-box-caption, #portfolio .container-xl .portfolio-box:hover .portfolio-box-caption, #portfolio .container-xxl .portfolio-box:hover .portfolio-box-caption {
        opacity: 1;
        }
    </style>
        <!-- Masthead-->
        <header class="masthead" id="topPage">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">مرحبا بكم في الواجهة الرئيسية</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">! يمكنكم انشاء طلب الحصول على نسخ من الشواهد المدرسية او بيان النقط من هنا</p>
                        <a style="border: 3px solid #213e85;margin-right: 10px;" class="btn btn-primary btn-xl" href="{{ route('demande.create') }}">إيداع الطلب</a>
                        <a style="border: 3px solid #213e85;margin-right: 10px;color: white;" class="btn btn-outline-primary btn-xl" href="{{ route('demande.check') }}">تتبع الطلب</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">الخدمات</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-file-text fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">شواهد مدرسية</h3>
                            <!-- <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-table fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">بيانات النقط</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-archive fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">ايداع الطلب</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-card-checklist fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">تتبع الطلب</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ -->
        <section class="page-section bg-primary" id="faq">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
            </div>
        </section>
        <script>
            /*!
            * Start Bootstrap - Creative v7.0.6 (https://startbootstrap.com/theme/creative)
            * Copyright 2013-2022 Start Bootstrap
            * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
            */
            //
            // Scripts
            // 

            window.addEventListener('DOMContentLoaded', event => {

            // Navbar shrink function
            var navbarShrink = function () {
                const navbarCollapsible = document.body.querySelector('#mainNav');
                if (!navbarCollapsible) {
                    return;
                }
                if (window.scrollY === 0) {
                    navbarCollapsible.classList.remove('navbar-shrink')
                } else {
                    navbarCollapsible.classList.add('navbar-shrink')
                }

            };

            // Shrink the navbar 
            navbarShrink();

            // Shrink the navbar when page is scrolled
            document.addEventListener('scroll', navbarShrink);

            // Activate Bootstrap scrollspy on the main nav element
            const mainNav = document.body.querySelector('#mainNav');
            if (mainNav) {
                new bootstrap.ScrollSpy(document.body, {
                    target: '#mainNav',
                    offset: 74,
                });
            };

            // Collapse responsive navbar when toggler is visible
            const navbarToggler = document.body.querySelector('.navbar-toggler');
            const responsiveNavItems = [].slice.call(
                document.querySelectorAll('#navbarResponsive .nav-link')
            );
            responsiveNavItems.map(function (responsiveNavItem) {
                responsiveNavItem.addEventListener('click', () => {
                    if (window.getComputedStyle(navbarToggler).display !== 'none') {
                        navbarToggler.click();
                    }
                });
            });

            // Activate SimpleLightbox plugin for portfolio items
            new SimpleLightbox({
                elements: '#portfolio a.portfolio-box'
            });

            });
        </script>
@endsection
