<?php

namespace App\Http\Controllers;

use App\Merch;
use Illuminate\Http\Request;
use DB;
use Image;
use App\Http\Controllers\Auth\RegisterController;

class MerchController extends Controller
{
    //use RegisterController;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchs = Merch::all();       
        $merchs = DB::select('select * from merches ');
        return view('Merch.index',['merchs'=>$merchs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merches = DB::select('select * from adminexes ');
        return view('Merch.create',['merches'=>$merches]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        
        RegisterController::create(
                ['name' => $request->Full_Name,
                'email' => $request->Email,
                'password' => $request->Password]);

        $merch = new Merch;
        
        $merch->Full_Name = $request->Full_Name;
        $merch->Company_Name = $request->Company_Name;
        $merch->Email = $request->Email;
        $merch->Password = $request->Password;
        $merch->Type_of_goods = $request->Type_of_goods;
        $merch->Space_Required = $request->Space_Required;
        $merch->image = $request->image;
        
        
        $imageName = $request->Full_Name . '.' .request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        

        $merch->save();
        
        
        return redirect()->route('Product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function show(Merch $merch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function edit(Merch $merch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merch $merch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merch $merch)
    {
        //
    }
}
