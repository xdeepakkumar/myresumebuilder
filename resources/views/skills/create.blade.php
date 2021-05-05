@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Your Skills </h4>
                    </div>
                    <div class="card-body">


                        <form action="/skill" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="skill">Skill Name</label>
                                <input type="text" name="name" class="form-control" id="skill" placeholder="enter skill name here">
                            </div>
                            <div class="form-group">
                                <label for="rating">Rating</label>
                                <input type="text" name="rating" class="form-control" id="rating" placeholder="enter rating here">
                            </div>

                            <input type="submit" value="Save Skill" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-warning">
                        </form>
                        <a href="{{route('skill.index')}}" class="btn btn-sm btn-secondary my-2 float-right">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
