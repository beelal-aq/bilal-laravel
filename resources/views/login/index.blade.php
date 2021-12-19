@extends('layout.main')

@section('container')

<main class="form-signin">
<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  <form action="/login" method="post">
    @csrf
  
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" autofocus required >
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


    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    
    <small class ="d-block text-center mt-3">Not registered? 
        <a href="/register">Register Now !</a></small>

  </form>
</main>

@endsection