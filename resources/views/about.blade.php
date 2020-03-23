@extends('layout.Layout')

@section('contentheader')
    @foreach($title as $titletext)
        {{$titletext}}
    @endforeach
    @stop
@section('name')
    @stop