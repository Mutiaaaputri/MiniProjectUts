 @extends('layouts.app')
 @section('content')

<div class="container mt-4">
    <div class= "table-responsive p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-o bg white">
            <thead>
                <tr class=" text-center">
                    <th> kode barang</th>
                    <th> Nama barang</th>
                    <th> Harga barang</th>
                    <th> satuan barang</th>
                    <th> Deskripsi barang</th>
                    <th></th>
            </thead>

<tbody>
    @foreach ($products as $product)
    <tr>
        <td>{{$product->kodebarang }}</td>
        <td>{{$product->namabarang }}</td>
        <td>{{$product->hargabarang }}</td>
        <td>{{$product->satuanbarang}}</td>
        <td>{{$product->description }}</td>
        <td>
                            <div class="d-flex">
                                <a href="{{ route('product.show', ['product' => $product ->id ]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('product.edit', ['product' => $product ->id ]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="{{ route('product.destroy', ['product' => 1]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        