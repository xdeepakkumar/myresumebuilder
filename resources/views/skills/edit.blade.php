@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Update Your Skills </h4>
                    </div>
                    <div class="card-body">


                        <form action="{{route('skill.update', $skill)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="skill">Skill Name</label>
                                <input type="text" name="name" class="form-control" id="skill" value="{{$skill->name}}">
                            </div>
                            <div class="form-group">
                                <label for="rating">Rating</label>
                                <input type="text" name="rating" class="form-control" id="rating" value="{{$skill->rating}}">
                            </div>



                            <input type="submit" value="Update Skill" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-warning">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
