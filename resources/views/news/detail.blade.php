@extends('main')
@section('title')
    {{ $item->first()->title }}
@endsection

@section('header')
    {{ $item->first()->title }}
@endsection

@section('content')
    <p class="lead">{{$item->first()->text}}</p>
@endsection


