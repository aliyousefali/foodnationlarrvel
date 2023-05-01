<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Models\Meal;
class MealController extends Controller
{
    //
    public  function  index(){
        $data=Meal::get();
        //return $data;
        return view('meal-list',compact('data'));
    }
    public  function  add(){
        return view('add-meal');
    }
    public  function  edit($id){
        $data = Meal::where('id','=',$id) -> first();
        return view('edit-meal',compact('data'));
    }
    public  function  save(Request $request){
        $request->validate([
            'Code'=>'required',
            'Name'=>'required',
            'StageId'=>'required'

        ]);
        $meal=new Meal();
            $meal->Code=$request->Code;
        $meal->Name=$request->Name;
        $meal->StageId=$request->StageId;
        if($request->Closed=='on') {
            $meal->Closed =true;
            }
        else{
            $meal->Closed =false;
        }
        if($request->Status=='on') {
            $meal->Status =true;
        }
        else{
            $meal->Status =false;
        }

        $meal->save();
        return redirect('Meal-List')->with('success','تم الحفظ بنجاح');
    }
    public function update(Request $request){
        $request->validate([
            'Code'=>'required',
            'Name'=>'required',
            'StageId'=>'required'
        ]);
        $id=$request->id;
        $Code=$request->Code;
        $Name=$request->Name;
        $StageId=$request->StageId;
        if($request->Closed=='on') {
            $Closed =true;
        }
        else{
            $Closed =false;
        }
        if($request->Status=='on') {
            $Status =true;
        }
        else{
            $Status =false;
        }
        $ss = Meal::where('id',$id)->update([
            'Code'=>$Code,
            'Name'=>$Name,
            'StageId'=>$StageId,
            'Closed'=>$Closed,
            'Status'=>$Status
        ]);

        return redirect('Meal-List')->with('success','تم التعديل بنجاح');
    }
    public function delete($id){
         Meal::where('id','=',$id) -> delete();
         return redirect('Meal-List')->with('success','تم الحذف بنجاح');
    }
}
