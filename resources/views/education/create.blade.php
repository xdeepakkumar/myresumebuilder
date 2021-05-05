@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Your Education details</h4>
                    </div>
                    <div class="card-body">


                        <form action="/education" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="matric_school">School Name</label>
                                <input type="text" name="matric_school" class="form-control" id="matric_school" placeholder="enter school name here">
                            </div>
                            <div class="form-group">
                                <label for="matric_degree">Degree</label>
                                <input type="text" name="matric_degree" class="form-control" id="matric_degree" placeholder="enter degree name here">
                            </div>
                            <div class="form-group">
                                <label for="matric_marks">Percentage Obtained (or CGPA)</label>
                                <input type="number" name="matric_percentage" class="form-control" id="matric_marks" placeholder="enter marks here">
                            </div>
                            <div class="form-group">
                                <label for="matric_start">Starting Date</label>
                                <input type="date" name="from_year_matric" class="form-control" id="matric_start" placeholder="enter starting date here">
                            </div>
                            <div class="form-group">
                                <label for="matric_end">Completion Date</label>
                                <input type="date" name="to_year_matric" class="form-control" id="matric_end" placeholder="enter completion date here">
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
