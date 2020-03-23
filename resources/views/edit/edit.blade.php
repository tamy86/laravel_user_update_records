@extends('layout.Layout')

@section('contentheader')
    @foreach($title as $titletext)
        {{$titletext}}
    @endforeach
    @stop
@section('name')

    <form action="/notes/{{$note->id}}/update" method="post">
        {{csrf_field()}}
        <textarea title="body" name="body" class="form-control" style="direction: rtl">
            {{$note->body}}
        </textarea>
        <div>
            <button type="submit" class="btn btn-primary">بروزرسانی</button>
        </div>
    </form>


    @stop
@section('email')
    @stop