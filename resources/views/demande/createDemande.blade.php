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
                    <a class="nav-link active" href="{{ route('demande.create') }}">إيداع الطلب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('demande.check') }}">تتبع الطلب</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    @section('content')
        <div class="container-sm" style="width: 500px">
            <form action="{{ route('demande.store') }}" class="row g-3 form-floating" style="margin-top: 10px" method="POST">
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
                <div class="col-md-3 form-floating" style="direction: rtl">
                    <input type="text" name="birthday" id="floatingInputValue" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday') }}" placeholder=" ">
                    <label for="floatingInputValue">تاريخ الازدياد <span style="color: red">*</span></label>
                    @error('birthday')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 form-floating" style="direction: rtl">
                    <input type="text" name="niveau" id="floatingInputValue" class="form-control @error('niveau') is-invalid @enderror" value="{{ old('niveau') }}" placeholder=" ">
                    <label for="floatingInputValue">المستوى الدراسي</label>
                    @error('niveau')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 form-floating" style="direction: rtl">
                    <input type="text" name="dateArret" id="floatingInputValu" class="form-control @error('dateArret') is-invalid @enderror" value="{{ old('dateArret') }}" placeholder=" ">
                    <label for="floatingInputValue">سنة التوقف</label>
                    @error('dateArret')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 form-floating" style="direction: rtl">
                    <input type="text" id="floatingInputValue" name="cne" class="form-control @error('cne') is-invalid @enderror" value="{{ old('cne') }}" placeholder=" ">
                    <label for="floatingInputValue">رقم مسار</label>
                    @error('cne')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 form-floating" style="direction: rtl">
                    <input type="text" id="floatingInputValue" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder=" ">
                    <label for="floatingInputValue">رقم الهاتف</label>
                    @error('phone')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 form-check">
                    <input type="checkbox" name="attestation" class="form-check-input" id="exampleCheck1" value="1">
                    <label class="form-check-label" for="exampleCheck1">Attestation de scolarité</label>
                </div>
                <div class="col-md-3 form-check">
                    <input type="checkbox" name="releve" class="form-check-input" id="exampleCheck1" value="1">
                    <label class="form-check-label" for="exampleCheck1">Relevé de notes</label>
                </div>
                <div class="col-md-3 form-check">
                    <input type="checkbox" name="attestationAr" class="form-check-input" id="exampleCheck1" value="1">
                    <label class="form-check-label" for="exampleCheck1">شهادة مدرسية</label>
                </div>
                <div class="col-md-3 form-check">
                    <input type="checkbox" name="releveAr" class="form-check-input" id="exampleCheck1" value="1">
                    <label class="form-check-label" for="exampleCheck1">بيان النقط</label>
                </div>
                <div class="col-md-12"  style="direction: rtl">
                    <select class="form-select" name="quantity" aria-label="Default select example">
                        <option value="" selected>عدد النسخ</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    @error('quantity')
                        <span style="color:red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row g-2" style="direction: rtl">
                    <button type="submit" class="col-md-2 btn btn-primary" style="margin-left: 2px"><i class="bi bi-download"></i></button>
                    <button type="reset" class="col-md-2 btn btn-secondary"><i class="bi bi-arrow-repeat"></i></button>
                </div>                
            </form>    
        </div>    
    @endsection
</main>
