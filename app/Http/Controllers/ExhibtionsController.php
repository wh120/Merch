<?php

namespace App\Http\Controllers;

use App\Exhibtion;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Cache;


class ExhibtionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       //return $request->id;
        //$names = $request->input('Exhibtions.?.Exhibition_Name');

        $products = DB::select('select * from products ');

        $merches = DB::select('select * from merches WHERE id_Exhibtion = ' . $request->id);


        return view('Exhibtions.index', ['merches' => $merches, 'products'=>$products] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exhibtions = DB::select('select * from adminexes ');
        return view('Exhibtions.create',['exhibtions'=>$exhibtions]);

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

        "Full_Name"=>"required|:adminexes,Full_Name",
        "Mobile_Number"=>"required:adminexes,Mobile_Number",
        "Email"=>"required:adminexes,Emadminexesail",
        "Password"=>"required:adminexes,Password",
        "Type_of_Exhibition"=>"sometimes:adminexes,Type_of_Exhibition",
        "Number_of_Attendees"=>"sometimes:adminexes,Number_of_Attendees",
        "Number_of_Exhibiting_Companies"=>"sometimes:adminexes,Number_of_Exhibiting_Companies",
        "Event_Budget"=>"sometimes:adminexes,Event_Budget",
        ]);

        Exhibtion::create($request->all());
        session()->flash('success',__('success'));
        return redirect()->route('Exhibtions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exhibtion  $exhibtion
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibtion $exhibtion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exhibtion  $exhibtion
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibtion $exhibtion)
    {

        $exhibtion->delete();
        session()->flash('success',__('deleted successguly'));
        return redirect()->route('Exhibtions.aa');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exhibtion  $exhibtion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exhibtion $exhibtion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exhibtion  $exhibtion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $blog = Exhibtion::findOrFail($id);

       $blog->delete();

       return redirect()->route('Exhibtions.index');
    }

}
