<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public  function  index(){
        $data=Product::get();
        //return $data;
        return view('Product-list',compact('data'));
    }

    public  function  edit($id){
        $data = Product::where('id','=',$id) -> first();
        //return view('edit-Product',compact('data'));
        //return redirect ('Product-List')->with('data', $data);
        return $data;
    }
    public  function  save(Request $request){
        $request->validate([
            'Name'=>'required',
            'ExpireAlarm'=>'required',
            'ExpireDuration'=>'required',
            'CartonCount'=>'required',
        ]);
        $Product=new Product();
        $Product->Code=10;
        $Product->Name=$request->Name;
        $Product->ExpireAlarm=$request->ExpireAlarm;
        $Product->ExpireDuration=$request->ExpireDuration;
        $Product->CartonCount=$request->CartonCount;
        $Product->Status =$request->Status;
        if($request->Status==null) {
            $Product->Status =false;
        }
        $Product->save();
        return redirect('Product-List')->with('success','تم الحفظ بنجاح');
    }
    public function update(Request $request){
        $request->validate([
            'Name'=>'required',
            'ExpireAlarm'=>'required',
            'ExpireDuration'=>'required',
            'CartonCount'=>'required',
            ]);
        $id=$request->id;
        $Status =$request->Status;
        if($request->Status==null) {
            $Status =false;
        }
        $ss = Product::where('id',$id)->update([
            'Name'=>$request->Name,
            'Status'=>$Status,
            'ExpireAlarm'=>$request->ExpireAlarm,
            'ExpireDuration'=>$request->ExpireDuration,
            'CartonCount'=>$request->CartonCount,
        ]);

        return redirect('Product-List')->with('success','تم التعديل بنجاح');
    }
    public function delete($id){
        Product::where('id','=',$id) -> delete();
        return redirect('Product-List')->with('success','تم الحذف بنجاح');
    }
}
