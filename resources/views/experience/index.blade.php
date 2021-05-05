@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center bg-light">
                <h4>Work Experience Summery</h4>
            </div>
            <div class="card-body">
                @foreach ($experience as $e)
                    <td><h4>Experience: {{$e->job_title}}</h4></td>
                    <table>
                        <tr>
                            <td>
                                <a href="{{route('experience.edit', $e)}}" class="btn btn-sm btn-primary">edit</a>
                            </td>
                            <td>
                                <form action="{{route('experience.destroy', $e)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                        </tr>
                    </table>
                    <hr>
                @endforeach
                <a href="{{route('experience.create')}}" class="btn btn-sm btn-success">Add More Experience</a>
                <a href="{{route('skill.index')}}" class="btn btn-sm btn-primary">Skills</a>

            </div>

        </div>
    </div>
@endsection
