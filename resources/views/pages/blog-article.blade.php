
@section('pageTitle')
    Blog article long title
@endsection


<ul>
    @foreach($articles as $article)
        <li>
            <a href="{{ route('$article.show', ['$articleId' => $article['id']]) }}">
                {{ $article['title'] }}
            </a>
        </li>
    @endforeach
</ul>>
