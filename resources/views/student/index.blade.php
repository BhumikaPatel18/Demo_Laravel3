@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Student Details</h2>

      <a href="{{route('students.create')}}" class="btn btn-primary float-end" >Create new Record</a>

        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    {{-- <th>Dob</th>
                    <th>Email</th>
                    <th>Address</th> --}}
                    <th>Subject</th>
                    <th>Teacher_Name</th>
                    {{-- <th>Gender</th>
                    <th>Hobby</th> --}}
                    <th colspan="2" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    {{-- @dd($student) --}}
                     @foreach($student as $stu)
                        <tr>

                            <td>{{$stu->stud_name}}</td>
                            {{-- <td>{{$stu->dob}}</td>
                            <td>{{$stu->email}}</td>
                            <td>{{$stu->address}}</td> --}}
                            <td>{{$stu->stud_subject}}</td>
                            <td>{{$stu->tech_name}}</td>
                            {{-- <td>{{$stu->gender}}</td>
                            <td>{{$stu->hobby}}</td> --}}
                            <td><a href="{{route('students.edit', $stu->S_Id)}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{route('students.show', $stu->S_Id)}}" class="btn btn-primary">Show</a></td>
                            <td>
                                <form action="{{route('students.destroy',$stu->S_Id)}}" method="POST">
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

