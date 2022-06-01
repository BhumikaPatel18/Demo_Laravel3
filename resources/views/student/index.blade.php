@extends('layouts.app')

@section('content')

    <div class="container">

      <a href="{{route('home.create')}}" class="btn btn-primary float-end" >Create</a>

        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Dob</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Gender</th>
                    <th>Hobby</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($student as $stu)
                        <tr>
                            <td>{{$stu->name}}</td>
                            <td>{{$stu->dob}}</td>
                            <td>{{$stu->email}}</td>
                            <td>{{$stu->address}}</td>
                            <td>{{$stu->state}}</td>
                            <td>{{$stu->gender}}</td>
                            <td>{{$stu->hobby}}</td>
                            <td><a href="{{route('home.edit', $stu->id)}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{route('home.show', $stu->id)}}" class="btn btn-primary">Show</a></td>
                            <td>
                                <form action="{{route('home.destroy',$stu->id)}}" method="POST">
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

