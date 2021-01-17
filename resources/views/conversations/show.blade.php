@extends ('simple-layout')
@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <h2>{{$conversation->title}}</h2>
                <p>{{$conversation->body}}</p>
            </div>
        </div>
    </div>
    @include ('conversations.replies')
@endsection