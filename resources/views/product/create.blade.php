@extends('layouts.app')

@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('product.store') }}"method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4> Create Product </h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6mb-3">
                    <label for="kodebarang"class="form-label">Kode Barang</label>
            <input class="form-control @error('kodebarang') is invalid @enderror" type="text"name="kodebarang"id="kodebarang"
            value="{{old('kodebarang') }}"placeholder="Enter Kodebarang">
            @error('kodebarang')
            <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
            <div class="col-md-6mb-3">
            <label for="namabarang"class="form-label"> Nama Barang</label>
            <input class="form-control @error('namabarang') is invalid @enderror"type="text"name="namabarang"id="namabarang"
            value="{{old('namabarang') }}" placeholder="Enternamabarang">
            @error('namabarang')
            <div class="text-danger"><small>{{ $message}}</small></div>
            @enderror
            </div>
            <div class="col-md-6mb-3">
            <label for="satuan_id" class="form-label">Satuan Barang</label>
            <input class="form-control @error('satuan_id') is-invalid @enderror" type="text"name="satuan_id" id="satuan_id"value="{{old('satuan_id') }}"
            placeholder="Enter satuan_id">
            @error('satuan')
            <div class="text-danger"><small>{{ $message}}</small></div>
            @enderror
            </div>
            <div class="col-md-6mb-3">
            <label for="hargabarang"class="form-label">Harga Barang</label>
            <input class="form-control @error('hargabarang') is-invalid @enderror" type="text"name="hargabarang"id="hargabarang"value="{{old('hargabarang')}}"
            placeholder="Enter Hargabarang">
            @error('hargabarang')
            <div class="text-danger"><small>{{ $message}}</small></div>
            @enderror
            </div>
            <div class="col-md-6mb-3">
                <label for="description"class="form-label">Description</label>
                <input class="form-control @error('description') is-invalid @enderror" type="text"name="description"id="description"value="{{old('description')}}"
                placeholder="Enter Description">
                @error('description')
                <div class="text-danger"><small>{{ $message}}</small></div>
                @enderror
            </select>
            @error('position')
                <div class="text-danger"><small>{{ $message}}</small></div>
            @enderror
            </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-6d-grid">
            <a href="{{ route('Products.index') }}" class="btn
            btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i>Cancel</a>
            </div>
            <div class="col-md-6d-grid">
            <button type="submit" class="btn btn-dark btn-lgmt
           3"><i class="bi-check-circle me-2"></i>Save</button>
            </div>
            </div>
            </div>
            </div>
            </form>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
@endsection
