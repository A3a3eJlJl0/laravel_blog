@extends('main')

@section('title')
    Welcome
@endsection

@section('content')
<div class="container">
    <div class="content">
        <div class="title m-b-md">
            Добро пожаловать на новостной агрегатор "С миру по нитке".
            Лучшие сплетни и качественнейшие слухи. Только у нас.
            Без регистрации и СМС.
        </div>
        <h2><a href="{{ route('news.categories') }}">Перейти к сплетням и слухам</a></h2>
    </div>
</div>
@endsection
