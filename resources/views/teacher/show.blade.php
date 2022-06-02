@extends('layouts.app')

@section('content')
    <h2 class="text-center"> Teachers Details</h2>
    <div class="container">
        <div class="col-5 m-auto">

            <div class="row">
                <div class="my-3">
                    <ul class="list-group">
                        <li class="list-group-item">Name: {{ $teacher->name }}</li>
                        <li class="list-group-item">DOB: {{ $teacher->dob }}</li>
                        <li class="list-group-item">Email: {{ $teacher->email }}</li>
                        <li class="list-group-item">Address: {{ $teacher->address }}</li>
                        <li class="list-group-item">Subject: {{ $teacher->subject }}</li>
                        <li class="list-group-item">Gender: {{ $teacher->gender }}</li>
                        <li class="list-group-item">Hobby: {{ $teacher->hobby }}</li>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
