<?php

namespace App\Http\Controllers\setup_manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ClassController extends Controller
{
    public function __classView(){
        $all_class = DB::table('classes')->get();
        return view('setup_manage.class.class_view',compact('all_class'));
    }


    public function  __addClass (Request $request){
         $validation  = $request->validate([
             'class_name'=>'required|unique:classes',
             'status'=>'required'
         ]);
         $data = array();
         $data['class_name'] = $request->class_name;
         $data['status'] = $request->status;
         DB::table('classes')->insert($data);
         notify()->success('successfully class insert done');
        return redirect()->route('class.view');
        
    }




    
}
