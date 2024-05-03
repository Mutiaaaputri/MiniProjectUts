<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\Satuan;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Product List';
        $products = Product::all();

        return view('product.index', [
            'pageTitle' => $pageTitle,
            'products' => $products
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Product';
        $satuans= Product::all();

        return view('product.create', compact('pageTitle', 'satuans'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $messages = [
                'required' => ':Attribute harus diisi.',
                'description' => 'Isi :attribute harus diisi dengan tulisan',
                'numeric' => 'Isi :attribute dengan angka'
            ];
        
            $validator = Validator::make($request->all(), [
                'kodebarang' => 'required|numeric',
                'namabarang' => 'required',
                'hargabarang' => 'required|numeric',
                'description' => 'required',
                'satuans_id' => 'required|exists:satuans,id'

            ], $messages);
        
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $product= New Product;
            $product->kodebarang =$request->kodebarang;
            $product->namabarang =$request->namabarang;
            $product->hargabarang =$request->hargabarang;
            $product->description =$request->desription;
            $product->satuans_id =$request->atuans_id;
            $product->save();
                    
        
            return redirect()->route('product.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Product Detail';

        $product= Product::find($id);

    return view('product.show', compact('pageTitle', 'product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            $pageTitle = 'Edit Product';
            $Satuans= Satuan::all();
            $product= Product::find($id);
            return view('product.edit', compact('pageTitle', 'Satuans',
            'product'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $messages = [
        'required' => ':Attribute harus diisi.',
        'description' => 'Isi :attribute harus diisi dengan tulisan',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'kodebarang' => 'required|numeric',
        'namabarang' => 'required',
        'jumlahbarang' => 'required|numeric',
        'hargabarang' => 'required|numeric',
        'description' => 'required',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $product= New Product;
    $product->kodebarang =$request->kodebarang;
    $product->namabarang =$request->namabarang;
    $product->hargabarang =$request->hargabarang;
    $product->description =$request->desription;
    $product->satuans_id =$request->satuans_id;
    $product->save();

    return redirect()->route('Product.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    Product::find($id)->delete();

    return redirect()->route('product.index');

    }
}
