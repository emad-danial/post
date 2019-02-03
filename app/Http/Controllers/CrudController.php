<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

use DB;

class CrudController extends Controller
{
    public function select(){

$members=DB::table('members')->get();

return view('members',compact('members'));



    }
    public function addmember(){
        return view('addmember');
    }

    public  function insert(Request $request){

        $member=new Member;
        $member->member_name=$request->name;
        $member->save();
        return back();

    }


    public  function delete(Member $id){
        $id->delete();
        return back();

    }
    public  function edit(Member $id){

    return view('edit',compact('id'));

}
    public  function update(Request $request,$id){

     //  $id->update($request->all());//لازم الاسماء فى الجدول زي اللي فى الفورمة واكتب اسم المودل قبل ال اي دي ة
     //   Member::where('id',$id)->update(array('member_name'=>$request->member_name));

DB::table('members')->where('id',$id)->update(array('member_name'=>$request->member_name));
        return redirect('member');

    }


}