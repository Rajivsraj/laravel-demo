<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class="bg-light">
   
    @if (session()->has("success"))
      <div class="alert alert-info" role="alert">
        {{session("success")}} Please Click on <a href="{{route('name_login_view')}}">Login</a> to Login your dashboard
      </div>
    
    @endif
  <div class="row justify-content-center vh-100">
    <div class="col-4 align-self-center">
      <h1 class="text-center">Register Here</h1>
      <form method="post" action="{{route('name_register')}}">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          @csrf
          <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>

        <button type="submit" name="Register" class="btn btn-primary">Submit</button>
      </form>
      {{-- <a href="/" class="link">Login</a> --}}
      <a href="{{route('name_login_view')}}" class="link">Login</a>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>