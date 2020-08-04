<h1>Категории новостей</h1>
<ul>
    @foreach($news as $category => $value)
        <li>
            <h2>
                <a href="{{route('news.category', $category)}}">
                    {{$category}}
                </a>
            </h2>
        </li>
    @endforeach
</ul>
