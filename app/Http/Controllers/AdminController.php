<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{
    
     public function index()
    {
        //
        $tuser = Admin::all();
        return view('layouts/admin',compact('tuser'));
    }
    // public function showChangePasswordForm(){
    //     $tuser = Admin::all();
    //     return view('layouts/form',compact('tuser'));
    // }
    public function edit($id){
        $tuser = Admin::where('id' , $id)->first();
        return view('layouts/form' , compact('tuser'));
    }
    
    public function update(Request $request,$id){
        $tuser = Admin::find($id);
        // $laporans->subject = $request->subject;
        // $laporans->priority = $request->priority;
        // $laporans->description = $request->description;
        $tuser->name = $request->name;
        $tuser->email = $request->email;

        $tuser->save();

        return redirect('/admin')->with('statusedit','data berhasil di ubah');
        
    }
    public function delete(Request $request,$id){
        $tuser = Admin::find($id);
        $tuser->delete();
        return redirect('/admin')->with('status','data berhasil di hapus');

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showform()
    {
        //
        
        return view('layouts/formakun');
    }

    

}
