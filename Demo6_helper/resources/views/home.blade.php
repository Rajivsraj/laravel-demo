<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route("save_stu_name")}}">
    @csrf
    Fname: <input type="text" name="fname"><br><br>
    Email: <input type="text" name="email"><br><br>
    Password: <input type="text" name="password"><br><br>
    Phone: <input type="text" name="ph_no"><br><br>
    <input type="submit" name="save" value="save Data">
</form>

<a href="{{route('show_stu_name')}}"> List </a>
</body>
</html>