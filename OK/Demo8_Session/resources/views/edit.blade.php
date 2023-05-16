<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>edit student</title>
</head>
<body>
    

<h1>Edit your page</h1>
    <form method="post" action="{{url('/showstudent')}}/save">
        @csrf
        <div class="col-5">
            <h2>Ad Students</h2>
        <div class="row">
            <div class="col">
            <input type="text" value="{{$updatedata['id']}}" placeholder="id" name="id" hidden><br><br>

              <input type="text" name="fname" value="{{$updatedata['fname']}}" class="form-control" placeholder="First name">
            </div>
            <div class="col">
              <input type="text" name="mname" value="{{$updatedata['mname']}}" class="form-control" placeholder="middle name">
            </div>
            <div class="col">
                <input type="text" name="lname" value="{{$updatedata['lname']}}" class="form-control" placeholder="Last name">
              </div>
              
          </div>
          <br>
          <div class="row">
            <div class="col">
              <input type="text" name="father_name" value="{{$updatedata['father_name']}}" class="form-control" placeholder="father name">
            </div>
            <div class="col">
                <input type="text" name="mother_name" value="{{$updatedata['mother_name']}}" class="form-control" placeholder="mother name">
              </div>

            <div>
                <br>
                <div class="row">
                    <div class="col">
                      <input type="text" name="address" value="{{$updatedata['address']}}" class="form-control" placeholder="address ">
                    </div>
            </div>
        <br>
        <div class="row">
            <div class="col">
              <input type="text" name="ph1" value="{{$updatedata['ph1']}}" class="form-control" placeholder="phone1">
            </div>
            <div class="col">
                <input type="text" name="ph2" value="{{$updatedata['ph2']}}" class="form-control" placeholder="phone2">
              </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
              <input type="text" name="city" value="{{$updatedata['city']}}" class="form-control" placeholder="city">
            </div>
            <div class="col">
                <input type="text" name="gender" value="{{$updatedata['gender']}}" class="form-control" placeholder="gender">
              </div>
        </div>
        <br>
        <input type="submit" value="submit">

    </form>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>