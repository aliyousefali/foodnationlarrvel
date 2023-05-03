<?php

namespace App\Http\Controllers;
use App\Models\EducationStage;
use Illuminate\Http\Request;

class EducationStageController extends Controller
{
    public  function  index(){
        $data=EducationStage::get();
        //return $data;
        return view('EducationStage-list',compact('data'));
    }
    public  function  add(){
        return view('add-EducationStage');
    }
    public  function  edit($id){
        $data = EducationStage::where('id','=',$id) -> first();
        //return view('edit-EducationStage',compact('data'));
        //return redirect ('EducationStage-List')->with('data', $data);
        return $data;
    }
    public  function  save(Request $request){
        $request->validate([
            'Name'=>'required'
        ]);
        $EducationStage=new EducationStage();
        $EducationStage->Code=10;
        $EducationStage->Name=$request->Name;


        $EducationStage->Status =$request->Status;
        if($request->Status==null) {
            $EducationStage->Status =false;
        }
        $EducationStage->save();
        return redirect('EducationStage-List')->with('success','تم الحفظ بنجاح');
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
        $ss = EducationStage::where('id',$id)->update([
            'Name'=>$Name,
            'Status'=>$Status
        ]);

        return redirect('EducationStage-List')->with('success','تم التعديل بنجاح');
    }
    public function delete($id){
        EducationStage::where('id','=',$id) -> delete();
        return redirect('EducationStage-List')->with('success','تم الحذف بنجاح');
    }
}
