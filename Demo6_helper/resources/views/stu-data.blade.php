<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Stu</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Sr. No</th>
            <th>Name</th>
            <th>Emali</th>
            <th>Password</th>
            <th>Phone No.</th>
        </tr>
        @foreach ($all_stu as $stu)
            <tr>
                <td>Sr.</td>
                <td>{{capital($stu->fname)}}</td>
                <td>{{$stu->email}}</td>
                <td>{{$stu->password}}</td>
                <td>{{$stu->phone_no}}</td>
            </tr>
        @endforeach
        
            
        </tr>
    </table>
</body>
</html>