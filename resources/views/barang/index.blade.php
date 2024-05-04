@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barang.create') }}" class="btn btn-primary"><i class="bi bi-bag-plus"></i> Input Barang
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover mb-0 bg-white text-center">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $list)
                        <tr>
                            <td>{{ $list->kode_barang }}</td>
                            <td>{{ $list->nama_barang }}</td>
                            <td>Rp.{{ number_format($list->price) }}/{{ $list->units->code }}</td>
                            <td>{{ $list->description }}</td>
                            <td>{{ $list->units->name }}</td>
                            <td>
                                @include('barang.action')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
