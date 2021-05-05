@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Your Edit Experience details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('experience.update', $experience)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="job_title">Job Title</label>
                                <input type="text" name="job_title" class="form-control" id="job_title" value="{{$experience->job_title}}">
                            </div>
                            <div class="form-group">
                                <label for="employer">Employer</label>
                                <input type="text" name="employer" class="form-control" id="employer" value="{{$experience->employer}}">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" id="city" value="{{$experience->city}}">
                            </div>
                            <div class="form-group">
                                <label for="start_date">Starting Date</label>
                                <input type="date" name="start_date" class="form-control" id="start_date" value="{{$experience->start_date}}">
                            </div>
                            <div class="form-group">
                                <label for="end_date">Completion Date</label>
                                <input type="date" name="end_date" class="form-control" id="end_date" value="{{$experience->end_date}}">
                            </div>


                            <input type="submit" value="Save Education" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-warning">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
