
<ul>
    @foreach($articles as $article)
    <li>
        <a href="{{ route('$article.show', ['$articleId' => $article['id']]) }}">
            <h2>
                {{ $article['title'] }}
            </h2>
            <p>
                {{ $article['body'] }}
            </p>
            <p>
                {{ $article['description'] }}
            </p>
        </a>
    </li>
        @endforeach
</ul>>
