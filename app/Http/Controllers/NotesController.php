<?php

namespace App\Http\Controllers;

use App\Member;
use App\Note;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function SaveNote(Request $request,Member $id)

    {

        $this->validate($request,[
           'body'=>'required|min:6'
        ],['پر کردن فیلد اجباری میباشد و تعداد کارکترها بیشتر از  6 باید باشد']);
        $note=new Note($request->all());
        $note->user_id=1;
        $id->notes()->save($note);
//        $id->notes()->create($request->all());

        return back();
    }

    public function Edit(Note $note)
    {
        $title=['صفحه ویرایش اطلاعات بیشتر'];
        return view('edit.edit',compact('note','title'));
    }

    public function Editupdate(Request $request,Note $note)
    {
        $this->validate($request,['body'=>'required|min:14'],['تعداد کارکتر باید بیشتر از 14 کارکتر باشد و فیلد خالی نباشد']);
//        $noteid=$note->id;
        DB::table('notes')->where('id',$note->id)->update(['body'=>$request->body]);
        //return back();
        return \redirect()->action('PageController@Showinfo',['id'=>$note->member_id]);

    }
}
