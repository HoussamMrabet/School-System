@extends('layouts.header')
@section('content')
    <div class="container-sm" style="width: 500px">
        <form action="{{ route('demande.store') }}" class="form-floating" style="margin-top: 10px" method="POST">
            @csrf
            <div class="mb-3 form-floating">
                <input type="text" id="floatingInputValue" name="lname" class="form-control">
                <label for="floatingInputValue">Nom</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="text" id="floatingInputValue" name="fname" class="form-control">
                <label for="floatingInputValue">Prenom</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="text" id="floatingInputValue" name="fnameAr" class="form-control">
                <label for="floatingInputValue">الاسم</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="text" id="floatingInputValue" name="lnameAr" class="form-control">
                <label for="floatingInputValue">النسب</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="text" id="floatingInputValue" name="cne" class="form-control">
                <label for="floatingInputValue">CNE</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="text" id="floatingInputValue" name="phone" class="form-control">
                <label for="floatingInputValue">Numero de téléphone</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="text" name="birthday" id="floatingInputValue" class="form-control">
                <label for="floatingInputValue">تاريخ الاردياد</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="text" name="niveau" id="floatingInputValue" class="form-control">
                <label for="floatingInputValue">المستوى الدراسي</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="text" name="dateArret" id="floatingInputValue" class="form-control">
                <label for="floatingInputValue">سنة التوقف</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="attestation" class="form-check-input" id="exampleCheck1" value="1">
                <label class="form-check-label" for="exampleCheck1">Attestation de scolarité</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="releve" class="form-check-input" id="exampleCheck1" value="1">
                <label class="form-check-label" for="exampleCheck1">Relevé de notes</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="attestationAr" class="form-check-input" id="exampleCheck1" value="1">
                <label class="form-check-label" for="exampleCheck1">شهادة مدرسية</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="releveAr" class="form-check-input" id="exampleCheck1" value="1">
                <label class="form-check-label" for="exampleCheck1">بيان النقط</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="text" name="quantity" id="floatingInputValue" class="form-control">
                <label for="floatingInputValue">عدد النسخ</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>    
    </div>    
@endsection
