@extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                   <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}"alt="image"
                            style="width: 45px;">
                    <h4>{{ $pageTitle }}</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kodeBarang" class="form-label">Kode Barang</label>
                        <h5>{{ $barang->kode_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="namaBarang" class="form-label">Nama Barang</label>
                        <h5>{{ $barang->nama_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga" class="form-label">Harga Barang</label>
                        <h5>Rp.{{ number_format ($barang->price) }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                        <h5>{{ $barang->description }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label">Satuan Barang</label>
                        <h5>{{ $barang->units->name }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@vite('resources/js/app.js')


</html>
