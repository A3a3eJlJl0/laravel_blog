@extends('main')

@section('title')
    {{ $currentCategory }}
@endsection

@section('header')
    {{ \App\Helpers\NewsHelper::translateCategory($currentCategory) }}
@endsection

@section('content')
<div class="card-columns">
    @foreach ($news as $category => $newsFromCategory)
        @if($category == $currentCategory)
            @foreach($newsFromCategory as $id => $oneNews)
                @php
                    $oneNews = substr($oneNews, 0, 120) . '...';
                @endphp

                <div class="card">
                    <div class="card-header">Сплетня {{ $id + 1   }}</div>
                    <div class="card-body">
                        <p class="card-text">{{ $oneNews }}</p>
                    </div>
                    <div class="card-footer"><a href="{{route('news.category.id', [$currentCategory, $id])}}">подробнее</a></div>
                </div>
            @endforeach
        @endif
    @endforeach
</div>
@endsection
