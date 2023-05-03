<?php

namespace App\Http\Controllers;


use App\Models\Government;
use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    //
    public  function  index(){
        $data=Government::get();
        //return $data;
        return view('government-list',compact('data'));
    }
    public  function  add(){
        return view('add-Government');
    }
    public  function  edit($id){
        $data = Government::where('id','=',$id) -> first();
        //return view('edit-Government',compact('data'));
        //return redirect ('Government-List')->with('data', $data);
        return $data;
    }
    public  function  save(Request $request){
        $request->validate([
            'Name'=>'required'
        ]);
        $government=new Government();
        $government->Code=10;
        $government->Name=$request->Name;

        $government->Status =$request->Status;
        if($request->Status==null) {
            $government->Status =false;
        }
        $government->save();
        return redirect('Government-List')->with('success','تم الحفظ بنجاح');
    }
    public function update(Request $request){
        $request->validate([

            'Name'=>'required',

        ]);
        $id=$request->id;
        $Name=$request->Name;
        $Status =$request->Status;
        if($Status==null) {
            $Status =0;
        }
        $ss = government::where('id',$id)->update([
            'Name'=>$Name,
            'Status'=>$Status
        ]);

        return redirect('Government-List')->with('success','تم التعديل بنجاح');
    }
    public function delete($id){
        government::where('id','=',$id) -> delete();
        return redirect('Government-List')->with('success','تم الحذف بنجاح');
    }
}
