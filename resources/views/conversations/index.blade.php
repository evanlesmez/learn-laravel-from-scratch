@extends ('simple-layout')
@section ('header')
    <h1>Conversations</h1>
@endsection
@section ('content')
    <div id="wrapper">
        <div id="page" class="container"></div>
            @forelse ($conversations as $conversation)
                <div id="content">
                    <div class="title">
                    <h2><a  href="{{ route('conversations.show', $conversation)}}">{{$conversation->title}}</a></h2>
                </div>
            @empty
                <p>No relevant conversations yet.</p>
            @endforelse
        </div>
    </div>
@endsection