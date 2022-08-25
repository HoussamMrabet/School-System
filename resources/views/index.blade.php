@extends('layouts.header')
@section('content')
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#topPage">الصفحة الرئيسية</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">معلومات عامة</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">الخدمات</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">أسئلة وأجوبة</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">مساعدة</a></li>
                </ul>
            </div>
        </div>
    </nav>        
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
                    <h2 class="text-white mt-0">! معلومات عامة</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">هذا الموقع خاص بتلاميذ ثانوية الشريف الادريسي<br>
                        يتيح لك الموقع فرصة طلب الوثائق الخاصة بك كالشواهد المدرسية او بيان النقط لتوفير الوقت على التلاميذ و المسؤولين
                    </p>
                    <a class="btn btn-light btn-xl" href="#services">! ابدا من هنا</a>
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
                    <h2 class="text-white mt-0">اسئلة متكررة</h2>
                    <hr class="divider divider-light" />
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">مساعدة</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - الشريف الادريسي</div></div>
    </footer>    
@endsection
