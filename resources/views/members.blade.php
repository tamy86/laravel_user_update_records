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
            <th scope="col">نام</th>
            <th scope="col">تاریخ ایجاد</th>
            <th scope="col">تاریخ اپدیت</th>
        </tr>
        </thead>
        <tbody>

        @foreach($memberslist as $members)

        <tr>
            <th scope="row">
                <form action="/members/{{$members->id}}">
                <button class="btn btn-primary"> اطلاعات شماره {{$members->id}} </button>
                </form>
            </th>
            <td>{{$members->name}}</td>
            <td>{{$members->created_at}}</td>
            <td>{{$members->updated_at}}</td>
        </tr>
            @endforeach

        </tbody>
    </table>

    @stop


@section('email')
    <form method="post" action="/members/save">
        {{csrf_field()}}
        <div>
            <textarea name="name" title="name" class="form-control"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">اضافه نام</button>
        </div>
    </form>
    @stop
