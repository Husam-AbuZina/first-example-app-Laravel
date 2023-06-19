
@extends('layouts.app')

@section('content')

<div class="container">
     <h2>Edit student</h2>


        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="exampleInputName">
            </div>
            <div class="mb-3">
              <label for="exampleInputPhone" class="form-label">Phone Numbre</label>
              <input type="number" name="phone"  value="{{ $user->phone }}" class="form-control" id="exampleInputPhone">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail" class="form-label">Email</label>
              <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail">
            </div>


            <button type="submit"  value="" class="btn btn-primary col-md-2 "> Edit</button>
          </form>


</div>
@endsection
