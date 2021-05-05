@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center bg-light">
                <h4>Education Summery</h4>
            </div>
            <div class="card-body">
                @foreach ($education as $e)
                    <td><h4>Degree: {{$e->matric_degree}} {{$e->from_year_matric}}-{{$e->to_year_matric}}</h4> </td>
                    <table>
                        <tr>
                            <td>
                                <a href="{{route('education.edit', $e)}}" class="btn btn-sm btn-primary">edit</a>
                            </td>
                            <td>
                                <form action="{{route('education.destroy', $e)}}" method="post">
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
        <div class="container">
            <p class="py-1">
                <a href="{{route('education.create')}}"><span style="font-size: 18px">+</span> Add More Degree</a>
            </p>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('experience.index')}}" class="btn btn-sm btn-secondary">Back</a>
                </div>
                <div class="col-md-6">
                    <a href="{{route('experience.index')}}" class="btn btn-sm btn-success float-right">Work Histrory</a>
                </div>
            </div>
        </div>
    </div>
@endsection
