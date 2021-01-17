
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay</title>
</head>
<body>
    <ul>
        @foreach ($notifications as $notification)
            <li>
            @if ($notification->type == 'App\Notifications\PaymentReceived')
                We have received payment from you: {{implode(' ', $notification->data)}}
                
            @endif
            </li>
        @endforeach
            
    </ul>  
</body>
</html>