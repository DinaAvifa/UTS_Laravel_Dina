@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">

                        <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}"alt="image"
                            style="width: 45px;">
                        <h4>{{ $pageTitle }}</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kodeBarang')is-invalid @enderror" type="text"
                                name="kodeBarang" id="kodeBarang"
                                value="{{ $errors->any() ? old('kodeBarang') : $barang->kode_barang }}"
                                placeholder="Masukkan Nama Barang">
                            @error('kodeBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('namaBarang')is-invalid @enderror" type="text"
                                name="namaBarang" id="namaBarang"
                                value="{{ $errors->any() ? old('namaBarang') : $barang->nama_barang }}"
                                placeholder="Masukkan Nama Barang">
                            @error('namaBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga Barang</label>
                            <input type="number"class="form-control @error('harga') is-invalid @enderror" type="text"
                                name="harga" id="harga" value="{{ $errors->any() ? old('harga') : $barang->price }}"
                                placeholder="Masukkan Harga Barang">
                            @error('harga')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                            <textarea class="form-control @error('deskripsiBarang') is-invalid @enderror" type="text" name="deskripsiBarang"
                                id="deskripsiBarang" placeholder="Dekripsi barang"> {{ $errors->any() ? old('deskripsiBarang') : $barang->description }}</textarea>
                            @error('deskripsiBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan Barang</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('unit');
                                    } else {
                                        $selected = $barang->unit_id;
                                    }
                                @endphp
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}" {{ $selected == $unit->id ? 'selected' : '' }}>
                                        {{ $unit->code . ' - ' . $unit->name }}
                                    </option>
                                @endforeach

                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i>
                                Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-success btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@vite('resources/js/app.js')


</html>
