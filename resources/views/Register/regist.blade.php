@extends('layout.main')

@section('container')

<main class="form-signin">

  <form action="/register" method="post">
  @csrf
    <h1 class="h3 mb-3 fw-normal">Register</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Name</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <h6>Register as : </h6>

    <div class="form-mahasiswa">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="Mahasiswa">
  <label class="form-check-label" for="Mahsiswa">
    Mahasiswa
  </label>
</div>
<div class="form-dosen">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="Dosen" checked>
  <label class="form-check-label" for="Dosen">
    Dosen
  </label>
</div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Regist</button>
  </form>
</main>

@endsection