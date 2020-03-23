@extends('layout.Layout')

@section('contentheader')
@foreach($title as $titletext)
    {{$titletext}}
    @endforeach
    @stop

@section('name')

    <table style="direction: rtl" class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">شماره</th>
            <th scope="col">توضیحات</th>
            <th scope="col">تاریخ ایجاد</th>
            <th scope="col">تاریخ اپدیت</th>
            <th scope="col">نام کاربری</th>
        </tr>
        </thead>
        <tbody>


@foreach($id->notes as $note)


    <tr>
        <th scope="row">{{$note->id}}</th>
        <td><a href="/notes/{{$note->id}}/edit">{{$note->body}}</a></td>
        <td>{{$note->created_at}}</td>
        <td>{{$note->updated_at}}</td>
        <td><a href="#">{{$note->user->username}}</a></td>
    </tr>
@endforeach

        </tbody>
    </table>

    @stop

@section('email')

    <form method="post" action="/members/{{$id->id}}/notes">
        {{csrf_field()}}

        <div>
            <textarea name="body" title="body" class="form-control">{{old('body')}}</textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">اضافه شدن توضیحات</button>
        </div>
    </form>

    @stop