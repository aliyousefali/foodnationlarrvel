<?php

namespace App\Http\Controllers;
use App\Models\Government;
use App\Models\School;

use Illuminate\Http\Request;


class SchoolController extends Controller
{
    //
    public  function  index(){
        $data=School::get();
        //return $data;
        $Governs=Government::get();
        return view('School-list',compact('data'))->with('Governs', $Governs);;
    }

    public  function  edit($id){
        $data = School::where('id','=',$id) -> first();

        return $data;
    }
    public  function  save(Request $request){
        $request->validate([
            'Name'=>'required',
            'GovernmentId'=>'required',
            'EducationalAdministrationId'=>'required',
            'InductionNo'=>'required',
        ]);
        $School=new School();
        $School->Code=10;
        $School->Name=$request->Name;
        $School->GovernmentId=$request->GovernmentId;
        $School->EducationalAdministrationId=$request->EducationalAdministrationId;
        $School->InductionNo=$request->InductionNo;
        $School->PersonInCharge=$request->PersonInCharge;
        $School->Phone=$request->Phone;
        $School->Address=$request->Address;
        $School->Longitude=$request->Longitude;
        $School->Latitude=$request->Latitude;
        $School->MedicalCertificateNo=$request->MedicalCertificateNo;
        $School->MedicalCertificateImgPath=$request->MedicalCertificateImgPath;

        $School->Status =$request->Status;
        if($request->Status==null) {
            $School->Status =false;
        }
        $School->save();
        return redirect('School-List')->with('success','تم الحفظ بنجاح');
    }
    public function update(Request $request){
        $request->validate([
            'Name'=>'required',
            'GovernmentId'=>'required',
            'EducationalAdministrationId'=>'required',
            'InductionNo'=>'required',
        ]);
        $id=$request->id;
        $Status =$request->Status;
        if($request->Status==null) {
            $Status =false;
        }
        $ss = School::where('id',$id)->update([
            'Name'=>$request->Name,
            'Status'=>$Status,
            'GovernmentId'=>$request->GovernmentId,
            'EducationalAdministrationId'=>$request->EducationalAdministrationId,
            'InductionNo'=>$request->InductionNo,
            'PersonInCharge'=>$request->PersonInCharge,
            'Phone'=>$request->Phone,
            'Address'=>$request->Address,
            'Longitude'=>$request->Longitude,
            'Latitude'=>$request->Latitude,
            'MedicalCertificateNo'=>$request->MedicalCertificateNo,
            'MedicalCertificateImgPath'=>$request->MedicalCertificateImgPath
        ]);

        return redirect('School-List')->with('success','تم التعديل بنجاح');
    }
    public function delete($id){
        School::where('id','=',$id) -> delete();
        return redirect('School-List')->with('success','تم الحذف بنجاح');
    }
}
