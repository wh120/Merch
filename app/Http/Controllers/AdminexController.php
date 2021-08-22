<?php

namespace App\Http\Controllers;

use App\Adminex;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Cache;

class AdminexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if($request->search){
        
        $search = $request->get('search');
        $exhibtions = DB::table('adminexes')->where('Exhibition_Name', 'like' , '%' . $search . '%')->paginate(5);
        return view('Adminex.index',['exhibtions'=>$exhibtions]);
        }

        $exhibtions = Adminex::all();
        $exhibtions = DB::select('select * from adminexes ');

        return view('Adminex.index',['exhibtions'=>$exhibtions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Adminex.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $admain = new Adminex;
        $admain->Exhibition_Name = $request->Exhibition_Name;
        $admain->Full_Name = $request->Full_Name;
        $admain->Mobile_Number = $request->Mobile_Number;
        $admain->Email = $request->Email;
        $admain->Password = bcrypt($request->Password);
        $admain->Type_of_Exhibition = $request->Type_of_Exhibition;
        $admain->Number_of_Attendees = $request->Number_of_Attendees;
        $admain->Number_of_Exhibiting_Companies = $request->Number_of_Exhibiting_Companies;
        $admain ->Event_Budget = $request->Event_Budget;
        $admain->save();
        return redirect()->route('Adminex.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adminex  $adminex
     * @return \Illuminate\Http\Response
     */
    public function show()
    {    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adminex  $adminex
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminex $adminex )
    {
        //return $adminex;
        return view('Adminex.edit',compact('adminex'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adminex  $adminex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminex $adminex)
    {
        $request -> validate([        
        "Full_Name"=>"required|:exhibtions,Full_Name",
        "Mobile_Number"=>"required:exhibtions,Mobile_Number",
        "Email"=>"required:exhibtions,Email",
        "Password"=>"required:exhibtions,Password",   
        "Type_of_Exhibition"=>"sometimes:exhibtions,Type_of_Exhibition",
        "Number_of_Attendees"=>"sometimes:exhibtions,Number_of_Attendees",
        "Number_of_Exhibiting_Companies"=>"sometimes:exhibtions,Number_of_Exhibiting_Companies",
        "Event_Budget"=>"sometimes:exhibtions,Event_Budget",
        ]);
  
        $exhibtions->update($request->all());
  
        return redirect()->route('Adminex.index',compact('adminex'));   
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adminex  $adminex
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Adminex::findOrFail($id);

       $blog->delete();

       return redirect()->route('Adminex.index');
    }
}
