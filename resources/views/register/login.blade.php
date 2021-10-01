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
    <form action="/loginUser" method="POST">
      @csrf
      <div class="form-group">
        <label for=""> Email address</label><input name="email" class="form-control" placeholder="Enter email" type="text">
        @error('email')
        <div class="help-block form-text with-errors form-control-feedback">{{$message}}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for=""> Password</label><input name="password" class="form-control" placeholder="Enter password" type="Password">
        @error('password')
        <div class="help-block form-text with-errors form-control-feedback">{{$message}}</div>
        @enderror
      </div>

      <div class="buttons-w">
        <button class="btn btn-primary">Login Now</button>
      </div><br>
      @if(session()->has('success'))
        <div class="alert alert-success" role="alert" id="success">
          <strong>{{session('success')}}</strong>
        </div>
      @endif
    </form>
  </div>
</div>
<script type="text/javascript">

    $("#success").fadeOut(2000);

</script>
@endsection
