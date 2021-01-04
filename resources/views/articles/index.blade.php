@extends ('simple-layout')
@section ('header')
    <h1>Articles</h1>
@endsection
@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            @foreach ($articles as $article)
                <div id="content">
                    <div class="title">
                    <h2><a  href="/articles/{{$article->id}}">{{$article->title}}</a></h2>
                    <span class="byline" >{{$article->excerpt}}</span> </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection