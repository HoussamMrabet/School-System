@extends('layouts.header')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">الصفحة الرئيسية</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('demande.create') }}">إيداع الطلب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('demande.check') }}">تتبع الطلب</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@section('content')
    <main style="min-height: 80vh" class="py-4">
        <div class="container-sm" style="max-width: 500px">
            <form action="{{ route('demande.etat') }}" class="row g-3 form-floating" style="margin-top: 10px" method="GET">
                @csrf
                <div class="col-md-6 form-floating">
                    <input type="text" id="floatingInputValue" name="fname" class="form-control @error('fname') is-invalid @enderror"  value="{{ old('fname') }}" placeholder=" ">
                    <label for="floatingInputValue">Prenom <span style="color: red">*</span></label>
                    @error('fname')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 form-floating">
                    <input type="text" id="floatingInputValue" name="lname" class="form-control @error('lname') is-invalid @enderror" value="{{ old('lname') }}" placeholder=" ">
                    <label for="floatingInputValue">Nom <span style="color: red">*</span></label>
                    @error('lname')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 form-floating" style="direction: rtl">
                    <input type="text" id="floatingInputValue" name="fnameAr" class="form-control @error('fnameAr') is-invalid @enderror"  value="{{ old('fnameAr') }}" placeholder=" ">
                    <label for="floatingInputValue">الاسم <span style="color: red">*</span></label>
                    @error('fnameAr')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 form-floating" style="direction: rtl">
                    <input type="text" id="floatingInputValue" name="lnameAr" class="form-control @error('lnameAr') is-invalid @enderror"  value="{{ old('lnameAr') }}" placeholder=" ">
                    <label for="floatingInputValue">النسب <span style="color: red">*</span></label>
                    @error('lnameAr')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4 form-floating" style="direction: rtl">
                    <input type="text" name="birthday" id="floatingInputValue" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday') }}" placeholder=" ">
                    <label for="floatingInputValue">تاريخ الازدياد <span style="color: red">*</span></label>
                    @error('birthday')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-8 form-floating" style="direction: rtl">
                    <input type="text" id="floatingInputValue" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder=" ">
                    <label for="floatingInputValue">رقم الهاتف</label>
                    @error('phone')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row g-2" style="direction: rtl">
                    <button type="submit" class="col-md-2 btn btn-primary" style="margin-left: 2px"><i class="bi bi-download"></i></button>
                    <button type="reset" class="col-md-2 btn btn-secondary"><i class="bi bi-arrow-repeat"></i></button>
                </div>
            </form>    
        </div>    
    </main>
@endsection
@section('footer')
    <!-- Footer-->
    <footer style="margin-top: auto" class="bg-light py-5">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - الشريف الادريسي</div></div>
    </footer>    
@endsection
