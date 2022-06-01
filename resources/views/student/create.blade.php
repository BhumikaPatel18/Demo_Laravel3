@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Create Form</h2>
    <form action="{{ route('home.store') }}" method="post">
        @csrf

        @include('student.form')
        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>
@endsection

