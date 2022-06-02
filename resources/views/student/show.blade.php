@extends('layouts.app')

@section('content')
    <h2 class="text-center"> Student Details</h2>
    <div class="container">
        <div class="col-5 m-auto">

            <div class="row">
                <div class="my-3">
                    <ul class="list-group">
                        <li class="list-group-item">Name: {{ $tshow->name }}</li>
                        <li class="list-group-item">DOB: {{ $tshow->dob }}</li>
                        <li class="list-group-item">Email: {{ $tshow->email }}</li>
                        <li class="list-group-item">Address: {{ $tshow->address }}</li>
                        <li class="list-group-item">Subject: {{ $tshow->subject }}</li>
                        <li class="list-group-item">Gender: {{ $tshow->gender }}</li>
                        <li class="list-group-item">Hobby: {{ $tshow->hobby }}</li>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
