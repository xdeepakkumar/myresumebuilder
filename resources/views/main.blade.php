@extends('layouts.app')

@section('content')
    <div class="conatiner text-center">
        <h1>Welcome To Cv Builder</h1>
        <a href="{{route('user-detail.create')}}" class="btn btn-danger">Build Now</a>
    </div>

@endsection
