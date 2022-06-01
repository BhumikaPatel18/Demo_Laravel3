@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Update Form</h2>
        <form action="{{ route('home.update',$student->id) }}" method="post">
            @csrf

            @include('student.form')
            <button type="submit" class="btn btn-primary">Update Form</button>

        </form>
    </div>
@endsection
