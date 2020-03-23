<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function Home(){
        $title=['به صفحه خانه خوش امدید'];
        return view ('welcome',compact('title'));
    }

    public function About(){
        $title=['به صفحه درباره ما خوش امدید'];
        return view('about',compact('title'));

    }

    public function Members(){
        $title=['به صفحه عضوها خوش امدید'];
        $memberslist=DB::table('members')->get();

        return view('members',compact('title','memberslist'));
    }


    public function SaveMember(Request $request)
    {
        $this->validate($request,['body'=>'required|min:3'],['فیلد خالی است یا تعداد کارکتر ها کمتر از 3 کاراکتر میباشد']);

        DB::table('members')->insert(['name'=>$request->name,'created_at'=>new \DateTime(),'updated_at'=>new \DateTime()]);
        return back();

    }

    public function Showinfo(Member $id)
    {

//        $member=Member::with('notes.user')->find(1);
        $id->load('notes.user');

//        return $id;  //jason

        $title=['به صفحه اطلاعات بیشتر خوش امدید'];



        return view('membersinfo.membersinfo',compact('title','id'));
    }
}
