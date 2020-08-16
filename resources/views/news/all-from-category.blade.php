@extends('main')

@section('title')
    {{ $category->category }}
@endsection

@section('header')
    {{ $category->category }}
@endsection

@section('content')
<div class="card-columns">
    @foreach ($news as $item)
        <div class="card">
            <div class="card-header">Сплетня {{ $item->id }}</div>
            <div class="card-body">
                <p class="card-text">{{ $item->announce }}</p>
            </div>
            <div class="card-footer"><a href="{{route('news.category.item', [$category->category, $item->id])}}">подробнее</a></div>
        </div>
    @endforeach
</div>
@endsection
