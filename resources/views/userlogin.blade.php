@extends('layouts.main')

@section('page-view')
<div class="container-fluid">
    <H3>User Login</H3>
    @if (session('msg'))
    <div class="alert-success p-3">
      {{ session('msg') }}
    </div>
    @endif
    <form class="row g-3" action="/userlogin" method="post">
        @csrf
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="col-md-12">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password">
    </div>
    <div class="col-md-12">
      <span>Not Registered ? <a href="/userregister">Register Here</a></span>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-dark">Sign in</button>
    </div>
  </form>
</div>
@endsection