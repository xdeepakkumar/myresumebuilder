@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Your Experience details</h4>
                    </div>
                    <div class="card-body">


                        <form action="/experience" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="job_title">Job Title</label>
                                <input type="text" name="job_title" class="form-control" id="job_title" placeholder="enter title name here">
                            </div>
                            <div class="form-group">
                                <label for="employer">Employer</label>
                                <input type="text" name="employer" class="form-control" id="employer" placeholder="enter employer here">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="enter city here">
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control" id="state" placeholder="enter state here">
                            </div>
                            <div class="form-group">
                                <label for="start_date">Starting Date</label>
                                <input type="date" name="start_date" class="form-control" id="start_date" placeholder="enter starting date here">
                            </div>
                            <div class="form-group">
                                <label for="end_date">Completion Date</label>
                                <input type="date" name="end_date" class="form-control" id="end_date" placeholder="enter completion date here">
                            </div>


                            <input type="submit" value="Save Experience" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-warning">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
