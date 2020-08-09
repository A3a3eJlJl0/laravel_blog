@extends('main')

@section('title')
    categories
@endsection

@section('header')
    Топ категорий
@endsection

@section('content')
    <div class="category-list">
    @foreach($news as $category => $value)
        <figure class="container-fluid">
            <a class="category-caption" href="{{ route('news.category', $category) }}">
                <img class="img-fluid category-img" src="{{ asset('img/' . $category . '.jpg') }}" alt="{{ $category }}">
                <figcaption> {{ \App\Helpers\NewsHelper::translateCategory($category) }} </figcaption>
            </a>
        </figure>
    @endforeach
    </div>
@endsection
