
<style>

.msg{
    color: red;
}
    </style>


<div class="container">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{ $student->name ?? '' }}">

        <span class="msg">@error('name')
{{$message}}
        @enderror

    </div>

    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter Date of Birth" value="{{ $student->dob ?? '' }}">
        <span class="msg">@error('dob')
            {{$message}}
                    @enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{ $student->email ?? '' }}">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" name="address" id="address" rows="3">{{ $student->address ?? '' }}</textarea>
    </div>

    <div class="form-group">
      <label for="state">Subject</label>
      <select class="form-control" name="subject" id="subject" >
        <option></option>
        <option value="maths" {{ ($student->subject ?? '') == 'maths' ? "Selected" : ""}}>maths</option>
        <option value="sanskrit" {{ ($student->subject ?? '') == 'sanskrit' ? "Selected" : ""}}>sanskrit</option>
        <option value="history" {{ ($student->subject ?? '') == 'history' ? "Selected" : ""}}>history</option>
      </select>
    </div>

    <br>


    {{-- @dd($student->gender) --}}


    <div class="form-group">
      <label for="gender">Gender : </label>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ ($student->gender ?? '') == 'female' ? "checked" : ""}}> Female
            </label>
        </div>

        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" id="male"  value="male" {{ ($student->gender ?? '') == 'male' ? "checked" : ""}}> Male
            </label>
        </div>
    </div>

    <br>

    <div class="form-group">
     <label for="hobby">Hobby : </label>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="hobby[]" id="cricket"  value="cricket" {{ $student->hobby ?? '' }}> Cricket
            </label>
        </div>

        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="hobby[]" id="travelling" value="travelling" {{ $student->hobby ?? '' }}> Travelling
            </label>
        </div>

        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="hobby[]" id="reading" value="reading" {{ $student->hobby ?? '' }}> Reading
            </label>
        </div>
    </div>

    <br>

</div>

