@extends('layouts.header')
@section('content')
    <div class="container">
        <h1>HOME PAGE</h1>
        <a style="text-decoration: none;color:aliceblue" href="{{ route('demande.create') }}" ><button class="btn btn-primary">Demander</button></a>
        <a style="text-decoration: none;color:aliceblue" href="{{ route('demande.check') }}" ><button class="btn btn-success">Verifier</button></a>
    </div>
@endsection
