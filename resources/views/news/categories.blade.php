@extends('main')

@section('title')
    categories
@endsection

@section('header')
    Топ категорий
@endsection

@section('content')
    <div class="category-list">
    @foreach($categories as $category)
        <figure class="container-fluid">
            <a class="category-caption" href="{{ route('news.category', $category->id) }}">
                <img class="img-fluid category-img" src="http://lorempixel.com/300/150" alt="{{ $category->category }}">
                <figcaption> {{ $category->category }} </figcaption>
            </a>
        </figure>
    @endforeach
    </div>
@endsection
