<?php

namespace App\Http\Controllers;

use App\Post;
use App\file;
use Illuminate\Http\Request;
use App\Http\Resources\Resource1;
use DB;
use Illuminate\Support\Facades\Input;

class TempletContrroller extends Controller
{


    public function index(){


        $posts=DB::table('posts')->get();


       return view('templet.home',compact('posts'));

     //   return new Resource1('$posts');

    }

    public function indexxx(){


        $posts=DB::table('posts')->get();


       // return view('templet.home',compact('posts'));
       // dd($posts);
          return new Resource1($posts);

    }






    public  function insert(Request $request){

        $post=new Post;

        if(Input::hasFile('image_name')){
            $file=Input::file('image_name');
           $file->move(public_path().'/img',$file->getClientOriginalName());
            $post->image_name=$file->getClientOriginalName();



        $post->title=$request->title;
        $post->content=$request->contentpost;
        $post->writer_name=$request->writer_name;
        $post->save();


        return new Resource1($request);}

    }

    public  function delete(Post $id){
        $id->delete();
        return back();

    }

    public  function edit(Post $id){

        return view('templet.edit',compact('id'));

    }

    public  function update(Request $request,$id){

        //  $id->update($request->all());//لازم الاسماء فى الجدول زي اللي فى الفورمة واكتب اسم المودل قبل ال اي دي ة
        //   Member::where('id',$id)->update(array('member_name'=>$request->member_name));


            $file=Input::file('image_name');
            $file->move(public_path().'/img',$file->getClientOriginalName());
            $image_name=$file->getClientOriginalName();




        DB::table('posts')->where('id',$id)->update(array('title'=>$request->title,'content'=>$request->contentpost,'writer_name'=>$request->writer_name,'image_name'=>$image_name));
        return redirect('homei');


    }


    public function about(){


        return view('templet.about');

    }

    public function contact(){


        return view('templet.contact');

    }

    public function simble(){


        return view('templet.simble');

    }

    public function error(){

        return "this is used befor";

    }

}
