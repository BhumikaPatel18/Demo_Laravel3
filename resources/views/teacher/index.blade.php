@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Teachers Details</h2>

    <a href="{{route('teacher.create')}}" class="btn btn-primary float-end" >Create new Record</a>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>Name</th>
                <th>Dob</th>
                <th>Email</th>
                <th>Address</th>
                <th>Subject</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->dob}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->address}}</td>
                            <td>{{$teacher->subject}}</td>
                            <td>{{$teacher->gender}}</td>
                            <td>{{$teacher->hobby}}</td>
                            <td><a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{route('teacher.show', $teacher->id)}}" class="btn btn-primary">Show</a></td>
                            <td>
                                <form action="{{route('teacher.destroy',$teacher->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
    </table>
</div>

@endsection

