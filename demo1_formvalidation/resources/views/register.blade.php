<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    {{-- @php
        echo "<pre>";
        print_r($errors->all());
        echo "</pre>";   
    @endphp --}}
    <form action="reg/" method="get">
        <input type="text" name="fname"  value="{{old("fname")}}" placeholder="First Name"><br>
        @error("fname")
            <span style="color: red"> {{$message}} </span>
        @enderror
        

        <br> 
        <input type="text" name="lname" value="{{old("lname")}}" placeholder="Last Name"><br>
        @error("lname")
            <span style="color: red"> {{$message}} </span>
        @enderror
        <br> 

        <input type="text" name="email" value="{{old("email")}}" placeholder="Email"><br>
        @error("email")
            <span style="color: red"> {{$message}} </span>
        @enderror
        <br> 
        
        <input type="text" name="pass" value="{{old("pass")}}" placeholder="password"><br>
        @error("pass")
            <span style="color: red"> {{$message}} </span>
        @enderror

        <br> 
        <input type="submit" value="register" name="register"><br><br> 
    </form>
</body>
</html>