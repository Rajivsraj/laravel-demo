<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
    <form action="{{url('/')}}/form" method="post">
        @csrf
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="text" name="password" placeholder="password"><br><br>
        <input type="submit" value="submit" name="submit"><br><br>

    </form>
    
</body>
</html>