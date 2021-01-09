@extends ('simple-layout')
@section ('header')
    <h1>Articles</h1>
@endsection
@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            @forelse ($articles as $article)
                <div id="content">
                    <div class="title">
                    <h2><a  href="{{ route('articles.show', $article)}}">{{$article->title}}</a></h2>
                    <span class="byline" >{{$article->excerpt}}</span> </div>
                </div>
            @empty
                <p>No relevant articles yet.</p>
            @endforelse
        </div>
    </div>
@endsection