<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <title>All rec</title>
</head>
<body>
    @foreach ($data as $dt)
        {{-- {{$loop->iteration}} --}}
        {{$dt->id}}: 
        {{$dt->fname}}: 
        {{$dt->lname}} <br>
    @endforeach
    <br>
    {{-- Count: {{$data->count()}}<br>
    current page: {{$data->currentPage()}}<br>
    First ITem: {{$data->firstItem()}}<br>
    Last ITem: {{$data->lastItem()}}<br>
    Last Page: {{$data->lastPage()}}<br>
    Next Url: {{$data->nextPageUrl()}}<br> --}}



    {{-- @if ($data->currentPage() >= $data->lastpage())
        <a href="{{$data->previousPageUrl()}}">Previous</a>  |
        <a href="#">Next Not Available</a>  

    @else
        <br><br>---------<br>
        @if ($data->currentPage() == 1)
            <a>Previous</a>  |
        @else
            <a href="{{$data->previousPageUrl()}}">Previous</a>  |
        @endif
        <a href="{{$data->nextPageUrl()}}">Next Available</a>

    @endif
    <br> --}}
    {{$data->links()}}
    {{-- {{$data->links("pagination::bootstrap-4")}} --}}
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>