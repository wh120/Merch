<?php

namespace App\Http\Controllers;

use App\Merch;
use App\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $adminex = DB::select('select * from adminexes ');

        $categories = DB::select('select * from categories ');


        if(Auth::check() == false)
            return view('login');

        $merch = Merch::where('Email' , Auth::user()->email )->first();
        $products = Product::where('merch_id' , $merch->id)->get();

        return view('Products.index',compact('products'),['adminex'=>$adminex, 'categories'=>$categories, 'products'=>$products  , 'merch'=>$merch]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $products = DB::select('select * from products WHERE id_categorie = ' . $request->id);


        return view('Products.create', ['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request -> validate([

        "Brand"=>"required:products,Brand",
        "Model"=>"required:products,Model",
        "Price"=>"required:products,Price",
        "Warranty"=>"required:products,Warranty",
        "Description"=>"required:products,Description",
        "id_categorie"=>"required:products,id_categorie",
        "id_Exhibtion"=>"required:products,id_Exhibtion",

        ]);
        $data = $request->all();
        $data['merch_id'] = Merch::where('Email' , Auth::user()->email)->first()->id;

        Product::create($data);
        session()->flash('success',__('success'));
        return redirect()->route('Product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
