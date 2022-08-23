@extends('layouts.header')
@section('content')
    <div class="container-sm" style="width: 500px">
        <form action="{{ route('demande.etat') }}" class="form-floating" style="margin-top: 10px" method="GET">
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
                <input type="text" id="floatingInputValue" name="phone" class="form-control">
                <label for="floatingInputValue">Numero de téléphone</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>    
    </div>    
@endsection
