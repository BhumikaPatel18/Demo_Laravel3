@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 m-auto">
        <h2 class="text-center">Create Form</h2>
        <form action="{{ route('teacher.store') }}" method="post">
            @csrf

            @include('teacher.form')
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('students.index') }}" class="btn btn-primary">Cancel</a>

        </form>
</div>
@endsection

