@foreach ($conversation->replies as $reply)
 <div>
     <p>{{$reply->user->name}} said ... </p>
     {{$reply->body}}
     @can('update-conversation', $conversation)
        
      <form action="">
        <button type="submit">Best reply?</button>
      </form>
     @endcan
 </div>
   @continue($loop->last) 
   <hr>
@endforeach