<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay</title>
</head>
<body>
    <form action="/payments" method="POST">
        @csrf
        <button type="submit">Make Payment</button> 
    </form>
   
</body>
</html>