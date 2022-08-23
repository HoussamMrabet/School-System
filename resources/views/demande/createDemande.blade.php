@extends('layouts.header')
@section('content')
    <div class="container-sm" style="width: 500px">
        <form action="{{ route('demande.store') }}" class="row g-3 form-floating" style="margin-top: 10px" method="POST">
            @csrf
            <div class="col-md-6 form-floating">
                <input type="text" id="floatingInputValue" name="fname" class="form-control @error('fname') is-invalid @enderror"  value="{{ old('fname') }}" placeholder=" ">
                <label for="floatingInputValue">Prenom</label>
                @error('fname')
                    <span style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 form-floating">
                <input type="text" id="floatingInputValue" name="lname" class="form-control @error('lname') is-invalid @enderror" value="{{ old('lname') }}" placeholder=" ">
                <label for="floatingInputValue">Nom</label>
                @error('lname')
                    <span style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 form-floating">
                <input type="text" id="floatingInputValue" name="fnameAr" class="form-control @error('fnameAr') is-invalid @enderror"  value="{{ old('fnameAr') }}" placeholder=" ">
                <label for="floatingInputValue">الاسم</label>
                @error('fnameAr')
                    <span style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-6 form-floating">
                <input type="text" id="floatingInputValue" name="lnameAr" class="form-control @error('lnameAr') is-invalid @enderror"  value="{{ old('lnameAr') }}" placeholder=" ">
                <label for="floatingInputValue">النسب</label>
                @error('lnameAr')
                    <span style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" id="floatingInputValue" name="cne" class="form-control @error('cne') is-invalid @enderror" value="{{ old('cne') }}" placeholder=" ">
                <label for="floatingInputValue">CNE</label>
                @error('cne')
                    <span style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" id="floatingInputValue" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder=" ">
                <label for="floatingInputValue">رقم الهاتف</label>
                @error('phone')
                    <span style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4 form-floating">
                <input type="text" name="birthday" id="floatingInputValue" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday') }}" placeholder=" ">
                <label for="floatingInputValue">تاريخ الاردياد</label>
                @error('birthday')
                    <span style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4 form-floating">
                <input type="text" name="niveau" id="floatingInputValue" class="form-control @error('niveau') is-invalid @enderror" value="{{ old('niveau') }}" placeholder=" ">
                <label for="floatingInputValue">المستوى الدراسي</label>
                @error('niveau')
                    <span style="color:red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4 form-floating">
                <input type="text" name="dateArret" id="floatingInputValu" class="form-control @error('dateArret') is-invalid @enderror" value="{{ old('dateArret') }}" placeholder=" ">
                <label for="floatingInputValue">سنة التوقف</label>
                @error('dateArret')
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
            <div>
                <select class="form-select" name="quantity" aria-label="Default select example">
                    <option selected>عدد النسخ</option>
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>    
    </div>    
@endsection
