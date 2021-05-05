@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center bg-light">
                <h4>Your Skill Summery</h4>
            </div>
            <div class="card-body">
                @foreach ($skill as $e)
                    <td><h4>Skill: {{$e->name}} {{$e->rating}}</h4></td>
                    <table>
                        <tr>
                            <td>
                                <a href="{{route('skill.edit', $e)}}" class="btn btn-sm btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('skill.destroy', $e)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                        </tr>
                    </table>
                    <hr>
                @endforeach
            </div>
        </div>
        <div class="container my-2">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('skill.create')}}" class=""><span style="font-size: 18px">+</span> Add More Skill</a>
                </div>
                <div class="col-md-6">
                    <a href="{{route('skill.create')}}" class="btn btn-success btn-sm float-right">Next Section</a>
                </div>
            </div>
        </div>
    </div>
@endsection
