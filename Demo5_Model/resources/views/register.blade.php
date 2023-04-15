<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{url('/')}}/save">
        @csrf
        <input type="text" placeholder="First Name" name="fname"><br><br>
        <input type="text" placeholder="Email" name="email"><br><br>
        <input type="text" placeholder="Password" name="password"><br><br>
        <input type="text" placeholder="Roll" name="role"><br><br>
        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>