
<div class="container">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter Date of Birth">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" name="address" id="address" rows="3"></textarea>
    </div>

    <div class="form-group">
      <label for="state">State</label>
      <select class="form-control" name="state" id="state">
        <option>Dnh</option>
        <option>Gujarat</option>
        <option>maharastra</option>
      </select>
    </div>

    <div class="form-group">
      <label for="gender">Gender : </label>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female"> Female
            </label>
        </div>

        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male"> Male
            </label>
        </div>
    </div>

    <div class="form-group">
     <label for="hobby">Hobby : </label>
        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="hobby" id="cricket" value="cricket"> Cricket
            </label>
        </div>

        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="hobby" id="travelling" value="travelling"> Travelling
            </label>
        </div>

        <div class="form-check form-check-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="hobby" id="reading" value="reading"> Reading
            </label>
        </div>
    </div>

</div>
