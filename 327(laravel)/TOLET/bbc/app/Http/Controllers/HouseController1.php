<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Housead;


class HouseController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Housead::all();
        return view('house.houseads1.index',compact('data'));
    }
    
    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('house.houseads1.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            // 'id'=>'required'
            'title'=>'required',
            'cost'=>'required',
            'area'=>'required',
            'pic'=>'required',
            'bed'=>'required',
            'bath'=>'required',
            'size'=>'required'
            

        ];
        $this->validate($request,$rules);
         Housead::create($request->all());
       
        
        return redirect()->back()->with('success','Insert successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Housead::find($id);
        return view('house.houseads1.show',compact('data'));
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Housead::find($id);
        return view('house.houseads1.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $rules = [
             // 'id'=>'required',
            'title'=>'required',
            'cost'=>'required',
            'area'=>'required',
            'pic'=>'required',
            'bed'=>'required',
            'bath'=>'required',
            'size'=>'required'
           

        ];
        $this->validate($request,$rules);
        
         $record = Housead::find($id);
         $record->update($request->all());
       
        
        return redirect()->back()->with('success','Update successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Housead::where('id',$id)->delete();
        return redirect()->back()->with('success','successfully deleted');
    }
    
}