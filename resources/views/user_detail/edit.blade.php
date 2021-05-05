@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Edit Your Detail</h4>
                    </div>
                    <div class="card-body">


                        <form action="{{route('user-detail.update', $userDetail)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="enter first name here" value="{{$userDetail->firstname}}">
                            </div>
                            <div class="form-group">
                                <label for="lastname">last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="enter last name here" value="{{$userDetail->lastname}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="enter email here" value="{{$userDetail->email}}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="enter phone number here" value="{{$userDetail->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="enter address here" value="{{$userDetail->address}}">
                            </div>
                            <div class="form-group">
                                <label for="address">Your Summary</label>
                                <textarea name="summary" id="" cols="30" rows="5" class="form-control">{{$userDetail->summary}}</textarea>
                            </div>
                            <input type="submit" value="Update Detail" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-warning">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
