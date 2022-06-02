
<style>

    .msg{
        color: red;
    }
        </style>


    <div class="container">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{ $teacher->name ?? '' }}">

            <span class="msg">@error('name')
    {{$message}}
            @enderror

        </div>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter Date of Birth" value="{{ $teacher->dob ?? '' }}">
            <span class="msg">@error('dob')
                {{$message}}
                        @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{ $teacher->email ?? '' }}">
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" name="address" id="address" rows="3">{{ $teacher->address ?? '' }}</textarea>
        </div>

        <div class="form-group">
          <label for="state">Subject</label>
          <select class="form-control" name="subject" id="subject" >
            <option></option>
            <option value="maths" {{ ($teacher->subject ?? '') == 'maths' ? "Selected" : ""}}>maths</option>
            <option value="sanskrit" {{ ($teacher->subject ?? '') == 'sanskrit' ? "Selected" : ""}}>sanskrit</option>
            <option value="history" {{ ($teacher->subject ?? '') == 'history' ? "Selected" : ""}}>history</option>
          </select>
        </div>

        <br>


        {{-- @dd($teacher->gender) --}}


        <div class="form-group">
          <label for="gender">Gender : </label>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{ ($teacher->gender ?? '') == 'female' ? "checked" : ""}}> Female
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" id="male"  value="male" {{ ($teacher->gender ?? '') == 'male' ? "checked" : ""}}> Male
                </label>
            </div>
        </div>

        <br>

        <div class="form-group">
         <label for="hobby">Hobby : </label>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="hobby[]" id="cricket"  value="cricket" {{ $teacher->hobby ?? '' }}> Cricket
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="hobby[]" id="travelling" value="travelling" {{ $teacher->hobby ?? '' }}> Travelling
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="hobby[]" id="reading" value="reading" {{ $teacher->hobby ?? '' }}> Reading
                </label>
            </div>
        </div>

        <br>

    </div>

