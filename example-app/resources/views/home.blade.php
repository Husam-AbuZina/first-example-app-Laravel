@extends('layouts.app')

@section('content')

<div class="container">
    {{-- <h1>اهلا وسهلا بك يا {{ auth()->user()->id }}</h1> --}}
    <div class="row justify-content-center">
        @if (session('message'))
        <p class="text-danger">{{session('message')}}</p>
        @endif



        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $key)
                <tr>
                  <td>{{$key->id}}</th>
                  <td>{{$key->name}}</td>
                  <td>{{$key->role}}</td>
                  <td><a class="btn btn-info btn-sm" href="{{ route('user.edit',['id'=>$key->id]) }}">Edit</a></td>
                  <td><a class="btn btn-danger btn-sm" href="{{ route('user.delete',['id'=>$key->id]) }}">Delete</a></td>
                  <td>     @if ($key->status == 0)
                    <div style="background-color: red; height: 20px; width: 30px;">
                        <!-- Your content here -->
                      </div>

                    @else
                    <div style="background-color: green; height: 20px; width: 30px;">
                        <!-- Your content here -->
                      </div>

                    @endif</td>
                   </tr>
                @endforeach
            </tbody>
        </table>
        @if (Route::has('add'))
            <a class="btn btn-primary col-md-2 " href="{{ route('add') }}">{{ __('Add User') }}</a>
        @endif

    </div>
</div>
@endsection
