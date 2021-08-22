<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = DB::select('select * from categories ');
        
        $categories = Category::all();
        
        return view('Category.index',compact('categories'),['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $adminex = DB::select('select * from adminexes ');

        return view('Category.create',['adminex'=>$adminex]);
        
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

        "CategoryName"=>"required:categories,CategoryName",

        "id_Exhibtion"=>"sometimes:categories,id_Exhibtion",
        
        ]);


        $imageName = $request->CategoryName .'.'. request()->image->getClientOriginalExtension();
 
        request()->image->move(public_path('CategorImage'), $imageName);

        Category::create($request->all());

        session()->flash('success',__('success'));

        return redirect()->route('Category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    Public function show ($id){
        $adminex = DB::select('select * from categories where Exhibtions_id = id ');
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
