<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    // public function home() {
    //     return \App\Post::all();
    //   //  return view('home');
    // }
    public function home() {
        return \App\Bbc_user::all();
      //  return view('home');
    }
    public function formHandler(Request $request) {
        $rules=[
                'name'=>'required|min:5',
                'email'=>'required|email'
        ];
        $this->validate($request, $rules);

        // return $request->all();
        return redirect()->back()->with('success','Insert successfully done');


    }
    public function template() {
        return view('template');
    }
    
    public function sign() {
        $data = DB::table('houseads')->get();

        return view('sign', ['houseads' => $data]);
        
    }
    public function ads() {
        $data = DB::table('houseads')->get();

        return view('ads', ['houseads' => $data]);
        
    }

    public function tamim() {
        return view('tamim');
    }
    public function about() {
        return view('about');
    }
    public function index() {
        return view('index');
    }
    public function search() {
        return view('search');
    }
    public function dbCheck()
    {
        $tamim=DB::table('houseads')->get();
        return view('sign',compact('tamim'));
    }
    public function dbCheck1()
    {
        $hasan=DB::table('houseads')->get();
        return view('ads',compact('hasan'));
    }
}
