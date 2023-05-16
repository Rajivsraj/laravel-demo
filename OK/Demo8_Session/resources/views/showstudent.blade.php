<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add student list</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>fname</th>
            <th>mname</th>
            <th>lname</th>
            <th>father_name</th>
            <th>mother_name</th>
            <th>Address</th>
            <th>phone-1</th>
            <th>phone-2</th>
            <th>city</th>
            <th>gender</th>
            <th>Edit || Delete</th>
        </tr>
       
            @foreach ($showstudent_get as $tabledata)
            <tr>
            <td>{{$tabledata['id']}}</td>
            <td>{{$tabledata['fname']}}</td>
            <td>{{$tabledata['mname']}}</td>
            <td>{{$tabledata['lname']}}</td>
            <td>{{$tabledata['father_name']}}</td>
            <td>{{$tabledata['mother_name']}}</td>
            <td>{{$tabledata['address']}}</td>
            <td>{{$tabledata['ph1']}}</td>
            <td>{{$tabledata['ph2']}}</td>
            <td>{{$tabledata['city']}}</td>
            <td>{{$tabledata['gender']}}</td>
            <td><a href="{{url('/')}}/edit/{{$tabledata['id']}}">Edit </a>|| <a href="{{url('/')}}/delete/{{$tabledata['id']}}">Delete</a></td>

        
        </tr>

            @endforeach

    </table>
</body>
</html>