@extends ('simple-layout')
@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>
            <form method="POST" action="/articles">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <input 
                        type="text"
                        name="title"
                        id="title"
                        value= "{{old("title")}}">
                    @error('title')
                        <p>{{$errors->first('title')}}</p>
                    @enderror
                </div>
                <label for="excerpt">Excerpt</label>
                <textarea name="excerpt" id="exceprt" cols="30" rows="10" >{{old("excerpt")}}</textarea>
                @error('excerpt')
                    <p>{{$errors->first('excerpt')}}</p>
                @enderror
                
                <label for="body">Body</label>
                @error('body')
                    <p>{{$errors->first('body')}}</p>
                @enderror
                <textarea name="body" id="body" cols="30" rows="10" >{{old("body")}}</textarea>

               <label for="body">Tags</label>
                <select name="tags[]" id="tags" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                @error('tags')
                    <p>{{$message}}</p>
                @enderror

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection