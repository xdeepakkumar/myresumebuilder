@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>Your Personal Detail</h4>
        <div class="card">
            <div class="card-body">
                <h4><span class="text-danger">Name :</span> {{$details->firstname}} {{$details->lastname}}</h4>
                <h4><span class="text-danger">Email :</span> {{$details->email}}</h4>
                <h4><span class="text-danger">Phone :</span> {{$details->phone}}</h4>
                <h4><span class="text-danger">Address :</span> {{$details->address}}</h4>
                <table>
                    <tr>
                        <td>
                            <a href="{{route('user-detail.edit', $details)}}" class="btn btn-sm btn-primary">edit</a>
                        </td>
                        <td>
                            <form action="{{route('user-detail.destroy', $details)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                            </form>
                        </td>
                        <td>
                            <a href="{{route('education.index', $details)}}" class="btn btn-sm btn-primary">Education</a>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
@endsection
