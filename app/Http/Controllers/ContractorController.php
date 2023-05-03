<?php

namespace App\Http\Controllers;
use App\Models\Contractor;

use Illuminate\Http\Request;


class ContractorController extends Controller
{
    //
    public  function  index(){
        $data=Contractor::get();
        //return $data;
        return view('Contractor-list',compact('data'));
    }
    public  function  add(){
        return view('add-Contractor');
    }
    public  function  edit($id){
        $data = Contractor::where('id','=',$id) -> first();
        //return view('edit-Contractor',compact('data'));
        //return redirect ('Contractor-List')->with('data', $data);
        return $data;
    }
    public  function  save(Request $request){
        $request->validate([
            'Name'=>'required',

        ]);
        $Contractor=new Contractor();
        $Contractor->Code=10;
        $Contractor->Name=$request->Name;
        $Contractor->Email=$request->Email;
        $Contractor->Phone=$request->Phone;
        $Contractor->Status =$request->Status;
        if($request->Status==null) {
            $Contractor->Status =false;
        }
        $Contractor->save();
        return redirect('Contractor-List')->with('success','تم الحفظ بنجاح');
    }
    public function update(Request $request){
        $request->validate([

            'Name'=>'required',

        ]);
        $id=$request->id;
        $Name=$request->Name;
        $Email=$request->Email;
        $Phone=$request->Phone;
        $Status =$request->Status;
        if($Status==null) {
            $Status =0;
        }
        $ss = Contractor::where('id',$id)->update([
            'Name'=>$Name,
            'Status'=>$Status,
            'Email'=>$Email,
            'Phone'=>$Phone,
        ]);

        return redirect('Contractor-List')->with('success','تم التعديل بنجاح');
    }
    public function delete($id){
        Contractor::where('id','=',$id) -> delete();
        return redirect('Contractor-List')->with('success','تم الحذف بنجاح');
    }
}
