<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List</title>
</head>
<body>


<table border="1">
    <tr>
        <th>Sr. No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    @foreach ($allStaff as $staff)
    <tr>
        <td>{{$staff["id"]}}</td>
        <td>{{$staff["name"]}}</td>
        <td>{{$staff["email"]}}</td>
        <td>{{$staff["password"]}}</td>
        <td>{{$staff["role"]}}</td>
        <td>
            Edit | 
            <a href="delete-staff/{{$staff["id"]}}">Delete</a>
        </td>
    </tr>
    @endforeach
    
</table>

</body>
</html>