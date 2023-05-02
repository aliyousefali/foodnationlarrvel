<?php

namespace App\Http\Controllers;

use App\Models\EducationalAdministration;
use App\Models\Government;
use Illuminate\Http\Request;
class EducationalAdministrationController extends Controller
{
    public  function  index(){
        $data=EducationalAdministration::get();
        $Governs=Government::get();
        //return $data;
        return view('educationalAdministration-list',compact('data'))->with('Governs', $Governs);
    }
    public  function  add(){
        return view('add-EducationalAdministration');
    }
    public  function  edit($id){
        $data = EducationalAdministration::where('id','=',$id) -> first();
        //return view('edit-EducationalAdministration',compact('data'));
        //return redirect ('EducationalAdministration-List')->with('data', $data);
        return $data;
    }
    public  function  save(Request $request){
        $request->validate([
            'Name'=>'required',
            'GovernmentId'=>'required'
        ]);
        $EducationalAdministration=new EducationalAdministration();
        $EducationalAdministration->Code=10;
        $EducationalAdministration->Name=$request->Name;
        $EducationalAdministration->GovernmentId=$request->GovernmentId;
        $EducationalAdministration->Status =$request->Status;
        if($request->Status==null) {
            $EducationalAdministration->Status =false;
        }
        $EducationalAdministration->save();
        return redirect('EducationalAdministration-List')->with('success','تم الحفظ بنجاح');
    }
    public function update(Request $request){
        $request->validate([

            'Name'=>'required',
            'GovernmentId'=>'required'
        ]);
        $id=$request->id;
        $Name=$request->Name;
        $GovernmentId=$request->GovernmentId;
        if($request->Status=='on') {
            $Status =true;
        }
        else{
            $Status =false;
        }
        $ss = EducationalAdministration::where('id',$id)->update([
            'Name'=>$Name,
            'GovernmentId'=>$GovernmentId,
            'Status'=>$Status
        ]);

        return redirect('EducationalAdministration-List')->with('success','تم التعديل بنجاح');
    }
    public function delete($id){
        EducationalAdministration::where('id','=',$id) -> delete();
        return redirect('EducationalAdministration-List')->with('success','تم الحذف بنجاح');
    }
}
