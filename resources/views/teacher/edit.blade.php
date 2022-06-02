@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-8 m-auto">
        <h2 class="text-center">Update Form</h2>
        <form action="{{ route('teacher.update',$teacher->id) }}" method="post">
            @csrf
            @method('PATCH')
            @include('teacher.form')
            <button type="submit" class="btn btn-primary">Update Form</button>
            <a href="{{ route('teacher.index') }}" class="btn btn-primary">Back</a>

        </form>
    </div>
@endsection
