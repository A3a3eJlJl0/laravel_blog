@extends('main')}
@section('title')
    {{ $category->first()->category }}
@endsection

@section('header')
    {{ $category->first()->category }}
@endsection

@section('content')
<div class="card-columns">
    @foreach ($news as $item)
        <div class="card">
            <div class="card-header">Сплетня {{ $item->id }}</div>
            <div class="card-body">
                <p class="card-text">{{ $item->title }}</p>
            </div>
            <div class="card-footer"><a href="{{route('news.category.item', [$category->first()->category, $item->id])}}">подробнее</a></div>
        </div>
    @endforeach
</div>
@endsection
