@extends('layouts.script')

@section('content')
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ url('/') }}" class="h1"><b>Film</b>Review</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new account</p>

      <form action="{{ url('/register') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Full name" value="{{ old('name') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('name') <p style="color: red;">{{ $message }}</p> @enderror

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email') <p style="color: red;">{{ $message }}</p> @enderror

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password') <p style="color: red;">{{ $message }}</p> @enderror

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <!-- Role Selection Dropdown -->
        <div class="input-group mb-3">
          <select class="form-control" name="role" required>
            <option value="" disabled selected>Select Role</option>
            <option value="admin">Admin</option>
            <option value="reviewer">Reviewer</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-users"></span>
            </div>
          </div>
        </div>
        @error('role') <p style="color: red;">{{ $message }}</p> @enderror

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>

      <a href="{{ url('/login') }}" class="text-center">I already have an account</a>
    </div>
  </div>
</div>
@endsection
