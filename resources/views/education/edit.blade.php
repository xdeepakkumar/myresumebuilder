@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Edit Your Education details</h4>
                    </div>
                    <div class="card-body">


                        <form action="{{route('education.update', $education)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="matric_school">School Name</label>
                                <input type="text" name="matric_school" class="form-control" id="matric_school" value="{{$education->matric_school}}">
                            </div>
                            <div class="form-group">
                                <label for="matric_degree">Degree</label>
                                <input type="text" name="matric_degree" class="form-control" id="matric_degree" value="{{$education->matric_degree}}">
                            </div>
                            <div class="form-group">
                                <label for="matric_marks">Percentage Obtained (or CGPA)</label>
                                <input type="number" name="matric_percentage" class="form-control" id="matric_marks" value="{{$education->matric_percentage}}">
                            </div>
                            <div class="form-group">
                                <label for="matric_start">Starting Date</label>
                                <input type="date" name="from_year_matric" class="form-control" id="matric_start" value="{{$education->from_year_matric}}">
                            </div>
                            <div class="form-group">
                                <label for="matric_end">Completion Date</label>
                                <input type="date" name="to_year_matric" class="form-control" id="matric_end" value="{{$education->to_year_matric}}">
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
