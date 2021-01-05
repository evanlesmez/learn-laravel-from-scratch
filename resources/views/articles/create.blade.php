
@extends ('simple-layout')
@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>
            <form method="POST" action="/articles">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title">
                </div>
                <label for="excerpt">Excerpt</label>
                <textarea name="excerpt" id="exceprt" cols="30" rows="10"></textarea>
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection