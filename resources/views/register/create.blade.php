@extends('layout')
@section('content')
<style media="screen">
  img{
    width: 100px;
    height: 100px;
  }
  .logged-user-name{
    font-size: 20px;
    font-weight: bold;
    color: blue;
  }

</style>
<div class="all-wrapper menu-side with-pattern">
  <div class="auth-box-w wider">
    <div class="logged-user-w">

      <div class="logged-user-name">
         Registration Form
      </div>
      <div class="logged-user-role">
        Laravel 8
      </div>
    </div>
    <form action="/register" method="POST">
      @csrf
      <div class="form-group">
        <label for=""> Name</label><input name="name" class="form-control" placeholder="Enter email" type="text">
      </div>
      <div class="form-group">
        <label for=""> Username</label><input name="username" class="form-control" placeholder="Enter Username" type="text">
      </div>
      <div class="form-group">
        <label for=""> Email address</label><input name="email" class="form-control" placeholder="Enter email" type="email">
      </div>
      <div class="form-group">
        <label for=""> Password</label><input name="password" class="form-control" placeholder="Enter password" type="Password">
      </div>

      <div class="buttons-w">
        <button class="btn btn-primary">Register Now</button>
      </div>
    </form>
  </div>
</div>

@endsection
