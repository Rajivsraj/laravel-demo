@extends('common.layout')

@section('container')
<div class="container">
    <form class="row g-3">
        <div class="col-md-6">
            <label for="fname" class="form-label">Email</label>
            <input type="text" name="fname" class="form-control" id="fname">
        </div>
        <div class="col-md-6">
            <label for="lname" class="form-label">Email</label>
            <input type="text" name="lname" class="form-control" id="lname">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Email</label>
            <input type="text" name="phone" class="form-control" id="phone">
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Email</label>
            <input type="text" name="address" class="form-control" id="address">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="name" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" name="name" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" name="name" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" name="name" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>
@endsection