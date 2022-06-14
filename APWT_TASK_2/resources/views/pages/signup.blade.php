@extends('layouts.app')

@section('content')
        <form action="{{route('register.submit')}}" method="post">
        

        {{csrf_field()}}
        
        <h1 style="font-family:'Courier New', Courier, monospace; text-align:center">Sign Up</h1>

        <div class="justify-content-center container-fluid mx-auto" style="width: 20%;">
          <section class=" col-sm-12">
          <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" name="user_email">
        <label for="floatingInput">Email Address</label>
        @error('user_email')
              <span class="text-danger">{{$message}}</span><br>
        @enderror
        </div>

        <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" name="user_password">
        <label for="floatingPassword">Password</label>
        @error('user_password')
              <span class="text-danger">{{$message}}</span><br>
        @enderror
        </div>

        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="user_name">
        <label for="floatingInput">Username</label>
        @error('user_name')
              <span class="text-danger">{{$message}}</span><br>
        @enderror
        </div>

        <button class="btn btn-success" type="submit">Sign Up</button>

          </section>
        
        </div>
      
@endsection