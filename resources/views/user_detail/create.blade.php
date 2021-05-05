@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Tell Us Something About You</h4>
                    </div>
                    <div class="card-body">

                        {{-- error message  --}}
                        <div>
                            @if (session()->has('errors'))

                                @foreach ($errors->all() as $e)
                                    <div class="alert alert-danger">

                                            {{$e}}

                                    </div>
                                @endforeach

                            @endif
                            @if (session()->has('success'))
                            <div class="alert alert-success">
                                <strong>{{}}</strong>
                            </div>
                            @endif
                        </div>

                        <form action="/user-detail" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="enter first name here">
                            </div>
                            <div class="form-group">
                                <label for="lastname">last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="enter last name here">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="enter email here">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder="enter phone number here">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="enter address here">
                            </div>
                            <div class="form-group">
                                <label for="address">Your Summary</label>
                                <textarea name="summary" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <input type="submit" value="Add & Continue" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-warning">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
