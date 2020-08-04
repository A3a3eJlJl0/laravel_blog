<h1>{{$currentCategory}}</h1>
<ul>
@foreach ($news as $category => $newsFromCategory)
    @if($category == $currentCategory)
        @foreach($newsFromCategory as $id => $oneNews)
            @php
                $oneNews = substr($oneNews, 0, 25) . '...';
            @endphp
            <li>
                <a href="{{route('news.category.id', [$currentCategory, $id])}}">
                    {{$oneNews}}
                </a>
            </li>
        @endforeach
    @endif
@endforeach
</ul>

