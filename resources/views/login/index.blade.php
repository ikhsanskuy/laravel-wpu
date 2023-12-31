@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">

      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin">
            <form action="/login" method="post">
              @csrf
              <h1 class="h3 mb-3 fw-normal">Please login</h1>
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              <small class="d-block text-center mt-3">Not registered? <a href="/register" class="text-decoration-none">Register Now!</a></small>
              <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
            </form>
        </main>
    </div>
</div>

@endsection