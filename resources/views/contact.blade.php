@extends ('layout')
@section ('content')
    <div>
        <form action="/contact" method="POST">
            @csrf
            <label for="email">Email address</label>
            <input type="text" name="email" id="email">
            <button type="submit">Email me</button>
            @error('email')
                <p style="color:red">{{$message}}</p>
            @enderror

            @if (session('message'))
                <div>
                    {{session('message')}}
                </div>
            @endif
        </form>
    </div
@endsection