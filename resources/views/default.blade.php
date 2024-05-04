@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}"alt="image" style="width: 30px;">
            <h4 class="mb-0">&nbsp;Selamat datang di Toko Dina</h4>
        </div>
    </div>
@endsection

</html>
