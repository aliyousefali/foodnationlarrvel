<?php

namespace App\Http\Controllers;
use App\Models\TruckType;
use Illuminate\Http\Request;


class TruckTypeController extends Controller
{
    //
    public  function  index(){
        $data=TruckType::get();
        //return $data;
        return view('TruckType-list',compact('data'));
    }
    public  function  add(){
        return view('add-TruckType');
    }
    public  function  edit($id){
        $data = TruckType::where('id','=',$id) -> first();
        //return view('edit-TruckType',compact('data'));
        //return redirect ('TruckType-List')->with('data', $data);
        return $data;
    }
    public  function  save(Request $request){
        $request->validate([
            'Name'=>'required'
        ]);
        $TruckType=new TruckType();
        $TruckType->Code=10;
        $TruckType->Name=$request->Name;

        $TruckType->Status =$request->Status;
        if($request->Status==null) {
            $TruckType->Status =false;
        }
        $TruckType->save();
        return redirect('TruckType-List')->with('success','تم الحفظ بنجاح');
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
        $ss = TruckType::where('id',$id)->update([
            'Name'=>$Name,
            'Status'=>$Status
        ]);

        return redirect('TruckType-List')->with('success','تم التعديل بنجاح');
    }
    public function delete($id){
        TruckType::where('id','=',$id) -> delete();
        return redirect('TruckType-List')->with('success','تم الحذف بنجاح');
    }
}
