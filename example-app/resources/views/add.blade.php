@extends('layouts.app')

@section('content')

<div class="container">

        <form action="{{ route('user.create') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
              <label for="exampleInputPhone" class="form-label">Phone Numbre</label>
              <input type="number" name="phone" class="form-control" id="exampleInputPhone">
            </div>
            <div class="mb-3">
                <label for="exampleInputRole" class="form-label">Role</label>

                <select class="form-select" name="role" aria-label="Default select example">
                    <option value="1">teatcher</option>
                    <option value="2">Student</option>
                  </select>
            </div>

            <button type="submit" class="btn btn-primary col-md-2 "> Add User</button>
          </form>


</div>
@endsection
